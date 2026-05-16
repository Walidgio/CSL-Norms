# -*- coding: utf-8 -*-
from pathlib import Path

p = Path(r"c:\xampp\htdocs\walid\CSL-Norms\resources\views\codes\rpa\rpa2024\chapitre7\Ch7Pages\rpa24_ch7_p130.blade.php")
t = p.read_text(encoding="utf-8")
start = t.find('<h2 class="rpa-h2">7.8 Jonction')
needle = "\n        Il peut y avoir des jonctions par coupleurs"
end = t.find(needle, start)
if start == -1 or end == -1:
    raise SystemExit(f"markers {start} {end}")
end = t.rfind("</div>", start, end) + 6

replacement = """        <h2 class="rpa-h2">7.8 Jonction d&rsquo;armatures</h2>
        <p style="text-align: justify;">
            Il ne doit pas y avoir de jonction par recouvrement par soudure &agrave; l&rsquo;int&eacute;rieur des zones critiques des &eacute;l&eacute;ments de structure :
        </p>
        <motion class="rpa-indent">
            <motion class="rpa-bullet">&bull; <i>l<sub>0</sub></i> : longueur minimale de recouvrement</motion>
            <motion class="rpa-bullet">&bull; <i>a</i> : distance entre barres</motion>
            <motion class="rpa-bullet">&bull; <i>&phi;</i> : diam&egrave;tre de la barre tendue</motion>
        </motion>
"""
replacement = replacement.replace("<motion ", "<" + "div" + " ").replace("</motion>", "</" + "motion".replace("motion", "motion") + ">")
# second replace for wrong closers
bad = "</" + chr(109) + chr(111) + chr(116) + chr(105) + chr(111) + chr(110) + ">"
replacement = replacement.replace(bad, "</div>")

t = t[:start] + replacement + t[end:]
t = t.replace("un chanage,", "un cha&icirc;nage,")
t = t.replace("normes d'essais", "normes d&rsquo;essais")
p.write_text(t, encoding="utf-8", newline="\n")
print("patched p130")
