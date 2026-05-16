# -*- coding: utf-8 -*-
"""Redesign chapter titles: headers, openings, inline h2 colors."""
import re
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1] / "resources/views/codes/rpa/rpa2024"

HEADER_INCLUDE = "@include('norms::codes.rpa.rpa2024.partials.rpa-page-header', ['page' => {page}, 'meta' => 'norms::codes.rpa.rpa2024.partials.{meta}'])"

OPENING_CH4 = """@include('norms::codes.rpa.rpa2024.partials.rpa-chapter-opening', [
        'id' => 'rpa-art-4',
        'numeral' => 'IV',
        'title' => 'R&egrave;gles de calcul',
    ])"""

OPENING_CH7 = """@include('norms::codes.rpa.rpa2024.partials.rpa-chapter-opening', [
        'id' => 'rpa-art-7',
        'numeral' => 'VII',
        'title' => 'Structures en b&eacute;ton arm&eacute;',
    ])"""

OVAL_BLOCK_RE = re.compile(
    r"\s*\{\{-- Stylized Title Border --\}\}\s*"
    r"<div class=\"relative mb-12 mt-8\">.*?</div>\s*",
    re.DOTALL,
)

RPA_HEADER_RE = re.compile(
    r"<div class=\"rpa-header\">.*?</div>\s*",
    re.DOTALL,
)

OLD_META_RE = re.compile(
    r"<motion class=\"rpa-header-meta flex[^\"]*\"[^>]*>.*?</motion>\s*"
    r"|<div class=\"rpa-header-meta flex flex-wrap items-start justify-between[^\"]*\"[^>]*>\s*"
    r"<span[^>]*>(\d+)</span>\s*<div[^>]*>\s*@include\('norms::codes\.rpa\.rpa2024\.partials\.ch\d-running-meta'\)\s*</div>\s*</div>\s*",
    re.DOTALL,
)


def page_num_from_path(path: Path) -> int:
    m = re.search(r"p(\d+)\.blade\.php$", path.name)
    return int(m.group(1)) if m else 0


def fix_motion(text: str) -> str:
    return text.replace("<motion", "<div").replace("</motion>", "</div>")


def patch_ch4_pages():
    meta = "ch4-running-meta"
    for p in sorted((ROOT / "chapitre4/Ch4Pages").glob("rpa24_ch4_p*.blade.php")):
        if p.name == "rpa24_ch4_p76.blade.php":
            continue
        text = fix_motion(p.read_text(encoding="utf-8", errors="replace"))
        n = page_num_from_path(p)
        header = HEADER_INCLUDE.format(page=n, meta=meta)
        text = RPA_HEADER_RE.sub(header + "\n\n    ", text, count=1)
        if "rpa-chapter-opening" not in text and "rpa-art-4\"" in text:
            text = OVAL_BLOCK_RE.sub("\n    " + OPENING_CH4 + "\n\n        ", text, count=1)
        text = re.sub(r'\s*style="color:\s*#[0-9a-fA-F]{3,6};?"', "", text)
        p.write_text(text, encoding="utf-8")
        print("ch4", p.name)


def patch_ch5_pages():
    meta = "ch5-running-meta"
    for p in sorted((ROOT / "chapitre5/Ch5Pages").glob("rpa24_ch5_p*.blade.php")):
        if p.name == "rpa24_ch5_p86.blade.php":
            continue
        text = fix_motion(p.read_text(encoding="utf-8", errors="replace"))
        n = page_num_from_path(p)
        header = HEADER_INCLUDE.format(page=n, meta=meta)
        # old simple meta header
        text = re.sub(
            r'<div class="rpa-header-meta flex justify-between text-sm text-gray-500 mb-6 border-b border-black pb-1">\s*'
            r"<span>\d+</span>\s*<span class=\"italic chapter\">.*?</span>\s*</div>\s*",
            header + "\n\n    ",
            text,
            count=1,
            flags=re.DOTALL,
        )
        text = re.sub(r'\s*style="color:\s*#[0-9a-fA-F]{3,6};?"', "", text)
        p.write_text(text, encoding="utf-8")
        print("ch5", p.name)


def patch_ch7_pages():
    meta = "ch7-running-meta"
    for p in sorted((ROOT / "chapitre7/Ch7Pages").glob("rpa24_ch7_p*.blade.php")):
        if p.name == "rpa24_ch7_p104.blade.php":
            continue
        text = fix_motion(p.read_text(encoding="utf-8", errors="replace"))
        n = page_num_from_path(p)
        header = HEADER_INCLUDE.format(page=n, meta=meta)
        if RPA_HEADER_RE.search(text):
            text = RPA_HEADER_RE.sub(header + "\n\n    ", text, count=1)
        else:
            text = re.sub(
                r'<motion class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">\s*'
                r'<span[^>]*>\d+</span>\s*<motion[^>]*>\s*@include\([^)]+\)\s*</div>\s*</div>\s*'
                r'|<div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">\s*'
                r'<span[^>]*>\d+</span>\s*<div[^>]*>\s*@include\([^)]+\)\s*</div>\s*</motion>\s*',
                header + "\n\n    ",
                text,
                count=1,
                flags=re.DOTALL,
            )
        if "rpa-chapter-opening" not in text and 'id="rpa-art-7"' in text:
            text = OVAL_BLOCK_RE.sub("\n    " + OPENING_CH7 + "\n\n        ", text, count=1)
        text = re.sub(r'\s*style="color:\s*#[0-9a-fA-F]{3,6};?"', "", text)
        p.write_text(text, encoding="utf-8")
        print("ch7", p.name)


def fix_partials_and_covers():
    for rel in [
        "chapitre4/Ch4Pages/rpa24_ch4_p76.blade.php",
        "partials/rpa-chapter-cover-hero.blade.php",
    ]:
        p = ROOT / rel
        if p.exists():
            p.write_text(fix_motion(p.read_text(encoding="utf-8", errors="replace")), encoding="utf-8")
            print("fixed", rel)


if __name__ == "__main__":
    fix_partials_and_covers()
    patch_ch4_pages()
    patch_ch5_pages()
    patch_ch7_pages()
