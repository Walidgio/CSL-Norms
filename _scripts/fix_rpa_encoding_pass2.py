# -*- coding: utf-8 -*-
"""Second pass: global OCR fixes and tilde corruption in Ch.7."""
import re
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1] / "resources/views/codes/rpa/rpa2024/chapitre7"

REPLACEMENTS = [
    ("Jes ", "les "),
    ("Jes\n", "les\n"),
    ("nceuds", "n&oelig;uds"),
    ("noeuds", "n&oelig;uds"),
    ("noeud", "n&oelig;ud"),
    ("~l~ment", "&eacute;l&eacute;ment"),
    ("~l~ments", "&eacute;l&eacute;ments"),
    ("confin~", "confin&eacute;"),
    ("confin~es", "confin&eacute;es"),
    ("~tre", "&ecirc;tre"),
    ("devraient ~tre", "devraient &ecirc;tre"),
    ("doit ~tre", "doit &ecirc;tre"),
    ("prolong~", "prolong&eacute;"),
    ("membrure", "membrure"),  # keep
    ("l'~me", "l'&acirc;me"),
    ("gravit~", "gravit&eacute;"),
    ("extr~mit~", "extr&eacute;mit&eacute;"),
    ("situ~", "situ&eacute;"),
    ("estim~e", "estim&eacute;e"),
    ("peut ~tre", "peut &ecirc;tre"),
    ("Vrification", "V&eacute;rification"),
    ("verification", "v&eacute;rification"),
    ("Specifications", "Sp&eacute;cifications"),
    ("Epaisseur", "&Eacute;paisseur"),
    ("elements", "éléments"),
    ("confines", "confinés"),
    ("etriers", "&eacute;triers"),
    ("etrier", "&eacute;trier"),
    ("béton", "béton"),  # noop if ok
    ("Ii mite", "limite"),
    ("</)1", "&phi;<sub>l</sub>"),
    ("</) ", "&phi; "),
    ("</)", "&phi;"),
    ("oà", "où"),
    ("oï", "où"),
    ("limiteà", "limité à"),
    ("limità", "limité à"),
    ("d'viter", "d'éviter"),
    ("est pris egal", "est pris égal"),
    ("est donnee", "est donnée"),
    ("consideree", "considérée"),
    ("precedentes", "précédentes"),
    ("fermes", "fermés"),
    ("doivent etre", "doivent être"),
    ("calculees", "calculées"),
    ("determinee", "déterminée"),
    ("fixee", "fixée"),
    ("maxi male", "maximale"),
    ("com me", "comme"),
    ("interieur", "intérieur"),
    ("confinement", "confinement"),
    ("diametre", "diamètre"),
    ("geometrique", "géométrique"),
    ("elancement", "élancement"),
    ("quantile", "quantité"),
    ("cheminees", "cheminées"),
    ("utilisation", "utilisation"),
    ("helico'idales", "hélicoïdales"),
    ("circulaires", "circulaires"),
]

# Use HTML entities for é in "elements" line above - fix
REPLACEMENTS = [(a, b) for a, b in REPLACEMENTS if a != ("elements", "éléments")]
REPLACEMENTS.append(("elements de rive confines", "&eacute;l&eacute;ments de rive confin&eacute;s"))


def fix_file(path: Path) -> bool:
    try:
        text = path.read_text(encoding="utf-8")
    except UnicodeDecodeError:
        text = path.read_text(encoding="cp1252")
    orig = text
    for bad, good in REPLACEMENTS:
        text = text.replace(bad, good)
    # Remove lines that look like raw PDF garbage (standalone bullet without html)
    lines = text.splitlines(keepends=True)
    cleaned = []
    for line in lines:
        stripped = line.strip()
        if stripped.startswith("• ") and "<" not in line and "rpa-" not in line:
            # wrap as rpa-bullet
            content = stripped[2:].strip()
            indent = re.match(r"^(\s*)", line).group(1)
            line = f'{indent}<motion class="rpa-bullet">&bull; {content}</motion>\n'.replace("<motion", "<motion").replace("</motion>", "</motion>")
            line = line.replace("<motion class=", "<div class=").replace("</motion>", "</div>")
        cleaned.append(line)
    text = "".join(cleaned)
    if text != orig:
        path.write_text(text, encoding="utf-8")
        return True
    return False


def main():
    n = 0
    for p in sorted(ROOT.rglob("*.blade.php")):
        if fix_file(p):
            print("fixed", p.name)
            n += 1
    print("pass2 done", n)


if __name__ == "__main__":
    main()
