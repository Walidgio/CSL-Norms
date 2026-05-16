# -*- coding: utf-8 -*-
import re
from pathlib import Path

root = Path(__file__).resolve().parents[1] / "resources/views/codes/rpa/rpa2024/chapitre7/Ch7Pages"
for p in root.glob("*.blade.php"):
    t = p.read_text(encoding="utf-8", errors="replace")
    t2 = t.replace("<motion", "<div").replace("</motion>", "</div>")
    t2 = re.sub(r'\s*style="color:\s*#[0-9a-fA-F]{3,6}[^"]*"', "", t2)
    if t2 != t:
        p.write_text(t2, encoding="utf-8")
        print(p.name)
