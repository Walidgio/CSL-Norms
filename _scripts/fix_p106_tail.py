# -*- coding: utf-8 -*-
from pathlib import Path

p = Path(__file__).resolve().parents[1] / "resources/views/codes/rpa/rpa2024/chapitre7/Ch7Pages/rpa24_ch7_p106.blade.php"
t = p.read_text(encoding="utf-8")
append = """
    <p class="rpa-h2-black mt-6">Pièces comprimées, pièces fléchies</p>
    <p class="text-justify">
        On entend par pièce fléchie, un élément linéaire ou à deux dimensions, soumis à la flexion simple ou déviée, pour lequel on satisfait aux conditions suivantes&nbsp;:
    </p>
    <motion class="rpa-indent my-3 text-center font-medium">
        <i>&nu;</i><sub>max</sub> &le; 0,1 &nbsp; et &nbsp; <i>h</i> &le; <i>l</i>/4
    </div>
    <p class="mb-2">avec&nbsp;:</p>
    <div class="rpa-indent">
        <div class="rpa-bullet">&#8226; <i>h</i> : hauteur de la section droite de l'élément</div>
        <div class="rpa-bullet">&#8226; <i>l</i> : portée entre nus de l'élément</div>
    </div>
    <p class="mt-4 mb-2">La pièce est dite&nbsp;:</p>
    <div class="rpa-indent">
        <div class="rpa-bullet">&#8226; &laquo;&nbsp;courte&nbsp;&raquo; lorsque <i>h</i> &gt; <i>l</i>/4</div>
    </div>
"""
append = append.replace("<motion", "<div").replace("</motion>", "</div>")
if "Pièces comprimées" not in t:
    t = t.replace("</section>", append + "</section>", 1)
    p.write_text(t, encoding="utf-8")
    print("p106 updated")
else:
    print("p106 already has section")
