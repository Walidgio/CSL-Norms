# -*- coding: utf-8 -*-
"""
Repair UTF-8 replacement characters (U+FFFD) in RPA 2024 blade files
using PyMuPDF text extraction from the official PDF.
"""
from __future__ import annotations

import re
import sys
from pathlib import Path

import fitz

ROOT = Path(__file__).resolve().parents[1]
PDF_PATH = ROOT / "assets/norms/rpa/RPA2024_Version_Finale.pdf"
VIEWS = ROOT / "resources/views/codes/rpa/rpa2024"
REP = "\ufffd"

# Printed page number -> PDF page index (0-based), calibrated on Ch.7 p.107
PAGE_OFFSET = 51


def load_pdf_pages(start_printed: int, end_printed: int) -> dict[int, str]:
    doc = fitz.open(str(PDF_PATH))
    out: dict[int, str] = {}
    for printed in range(start_printed, end_printed + 1):
        idx = printed - PAGE_OFFSET
        if 0 <= idx < doc.page_count:
            out[printed] = doc[idx].get_text()
    doc.close()
    return out


def normalize(s: str) -> str:
    s = s.lower()
    s = re.sub(r"\s+", " ", s)
    import unicodedata

    return "".join(
        c for c in unicodedata.normalize("NFD", s) if unicodedata.category(c) != "Mn"
    )


def find_line_in_pdf(fragment: str, pdf_text: str, min_len: int = 12) -> str | None:
    """Find best matching line in PDF for a corrupted fragment."""
    frag = fragment.replace(REP, "").strip()
    if len(frag) < min_len:
        return None
    frag_n = normalize(frag)
    best = None
    best_score = 0
    for line in pdf_text.splitlines():
        line = line.strip()
        if len(line) < min_len:
            continue
        line_n = normalize(line)
        # count shared words
        fw = set(re.findall(r"[a-z0-9]{3,}", frag_n))
        lw = set(re.findall(r"[a-z0-9]{3,}", line_n))
        if not fw:
            continue
        score = len(fw & lw) / len(fw)
        if score > best_score:
            best_score = score
            best = line
    if best_score >= 0.45:
        return best
    return None


def fix_figure_captions(text: str, pdf_text: str) -> str:
    """Fix Figure X.Y captions from PDF."""
    for m in re.finditer(r"Figure\s+(\d+\.\d+)\s*[:：]", text):
        fig = m.group(1)
        pat = re.compile(
            rf"Figure\s*{re.escape(fig)}\s*[:：]\s*([^\n\r]+)",
            re.IGNORECASE,
        )
        pdf_m = pat.search(pdf_text)
        if pdf_m:
            good = f"Figure {fig} : {pdf_m.group(1).strip()}"
            # replace corrupted caption in blade
            bad_pat = re.compile(
                rf"(Figure\s*{re.escape(fig)}\s*[:：][^\n\"']*)",
                re.IGNORECASE,
            )
            text = bad_pat.sub(good, text, count=1)
    return text


def fix_section_titles(text: str, pdf_text: str) -> str:
    """Fix h2/h3 lines like 7.6 SP...CIFICATIONS."""
    for m in re.finditer(
        r"(<[^>]+>)?\s*(\d+\.\d+(?:\.\d+)?)\s+([^<\n]{3,80}?)(</[^>]+>)?",
        text,
    ):
        num = m.group(2)
        title_part = m.group(3)
        if REP not in title_part and "" not in title_part:
            continue
        pdf_m = re.search(
            rf"{re.escape(num)}\s+([A-ZÉÈÊÀÂÎÔÛÇ][A-Za-zéèêàâîôûçÉÈÊÀÂÎÔÛÇ\s\-']{{4,80}})",
            pdf_text,
        )
        if pdf_m:
            good_title = pdf_m.group(1).strip()
            text = text.replace(title_part, good_title, 1)
    return text


def repair_file(path: Path, pdf_text: str) -> bool:
    try:
        text = path.read_text(encoding="utf-8")
    except UnicodeDecodeError:
        text = path.read_text(encoding="cp1252")

    if REP not in text:
        return False

    original = text
    text = fix_figure_captions(text, pdf_text)
    text = fix_section_titles(text, pdf_text)

    # Line-by-line: replace lines that still contain replacement char
    lines = text.splitlines(keepends=True)
    new_lines = []
    for line in lines:
        if REP in line:
            # strip tags for matching
            plain = re.sub(r"<[^>]+>", " ", line)
            plain = re.sub(r"&[a-z]+;", " ", plain)
            plain = re.sub(r"\s+", " ", plain).strip()
            match = find_line_in_pdf(plain, pdf_text)
            if match:
                # preserve indentation
                indent = re.match(r"^(\s*)", line).group(1)
                # if line is mostly text inside tags, rebuild simply
                if "<" in line and ">" in line:
                    # caption in quotes
                    if "caption" in line:
                        line = re.sub(
                            r"'caption'\s*=>\s*'[^']*'",
                            f"'caption' => '{match}'",
                            line,
                        )
                    elif "rpa-figure-title" in line:
                        line = re.sub(
                            r">[^<]*</",
                            f">{match}</",
                            line,
                            count=1,
                        )
                    else:
                        line = indent + match + "\n"
                else:
                    line = indent + match + "\n"
        new_lines.append(line)
    text = "".join(new_lines)

    # Common French fixes for remaining single-char gaps
    replacements = [
        ("Sp" + REP + "cifications", "Spécifications"),
        ("n" + REP + "uds", "nœuds"),
        ("n" + REP + "ud", "nœud"),
        ("b" + REP + "ton", "béton"),
        ("d" + REP + "faut", "défaut"),
        ("d" + REP + "formation", "déformation"),
        ("d" + REP + "formations", "déformations"),
        ("d" + REP + "signe", "désigne"),
        ("d" + REP + "finies", "définies"),
        ("d" + REP + "vi", "dévi"),
        ("d" + REP + "velopp", "développ"),
        ("d" + REP + "termin", "détermin"),
        ("d" + REP + "passe", "dépasse"),
        ("d" + REP + "placement", "déplacement"),
        ("d" + REP + "placements", "déplacements"),
        ("d" + REP + "calage", "décalage"),
        ("d" + REP + "s", "dès"),
        ("l" + REP + "ments", "léments"),
        ("l" + REP + "ment", "lément"),
        ("l" + REP + "asticit", "lasticité"),
        ("g" + REP + "n", "gén"),
        ("v" + REP + "rification", "vérification"),
        ("v" + REP + "rifie", "vérifie"),
        ("s" + REP + "curit", "sécurit"),
        ("r" + REP + "alisation", "réalisation"),
        ("r" + REP + "gles", "règles"),
        ("r" + REP + "sistant", "résistant"),
        ("r" + REP + "sistance", "résistance"),
        ("inf" + REP + "rieur", "inférieur"),
        ("sup" + REP + "rieur", "supérieur"),
        ("sup" + REP + "rieure", "supérieure"),
        ("caract" + REP + "ristique", "caractéristique"),
        ("adh" + REP + "rence", "adhérence"),
        ("sp" + REP + "cifi", "spécifi"),
        ("pr" + REP + "c", "préc"),
        ("pr" + REP + "sent", "présent"),
        ("pr" + REP + "alablement", "préalablement"),
        ("compl" + REP + "mentaire", "complémentaire"),
        ("compl" + REP + "mentaires", "complémentaires"),
        ("pr" + REP + "contrain", "précontrain"),
        ("t" + REP + "te", "tête"),
        ("fa" + REP + "on", "façon"),
        ("p" + REP + "riph", "périph"),
        ("int" + REP + "rieur", "intérieur"),
        ("ext" + REP + "mit", "extrémit"),
        ("g" + REP + "n" + REP + "ralement", "généralement"),
        ("ma" + REP + "onnerie", "maçonnerie"),
        ("" + REP + " ", "à "),
        (" " + REP + " ", " é"),
        (REP + "chelles", "échelles"),
        (REP + "chelle", "échelle"),
        ("pal" + REP + "es", "palées"),
        ("pi" + REP + "ce", "pièce"),
        ("b" + REP + "timents", "bâtiments"),
        ("implanter", "implanter"),
        ("C" + REP + ".B.A", "C.B.A"),
        ("alg" + REP + "riennes", "algériennes"),
        ("consid" + REP + "rer", "considérer"),
        ("consid" + REP + "r", "considér"),
        ("donn" + REP + "es", "données"),
        ("donn" + REP + "e", "donnée"),
        ("accidentelle", "accidentelle"),
        ("situations", "situation"),
        ("ductilit" + REP, "ductilité"),
        ("crit" + REP + "rique", "critique"),
        ("crit" + REP + "ques", "critiques"),
        ("" + REP, ""),  # remove orphan replacement if any left
    ]
    for bad, good in replacements:
        text = text.replace(bad, good)

    if text != original:
        path.write_text(text, encoding="utf-8")
        return True
    return False


def main():
    pdf_pages = load_pdf_pages(104, 130)

    targets: list[Path] = []
    for p in VIEWS.rglob("*.blade.php"):
        try:
            t = p.read_text(encoding="utf-8")
        except UnicodeDecodeError:
            t = p.read_text(encoding="cp1252")
        if REP in t:
            targets.append(p)

    fixed = 0
    for path in sorted(targets):
        m = re.search(r"p(\d+)\.blade\.php$", path.name)
        pdf_text = pdf_pages.get(int(m.group(1)), "") if m else ""
        if not pdf_text and m:
            # ch7 pages: try printed number from filename
            printed = int(m.group(1))
            pdf_text = pdf_pages.get(printed, "")

        if repair_file(path, pdf_text):
            print("fixed", path.relative_to(VIEWS))
            fixed += 1
        else:
            remaining = path.read_text(encoding="utf-8").count(REP)
            if remaining:
                print("still broken", path.relative_to(VIEWS), remaining, "chars")

    print("done, fixed", fixed, "of", len(targets))


if __name__ == "__main__":
    main()
