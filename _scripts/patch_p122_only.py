# -*- coding: utf-8 -*-
from pathlib import Path

p = Path(__file__).resolve().parents[1] / "resources/views/codes/rpa/rpa2024/chapitre7/Ch7Pages/rpa24_ch7_p122.blade.php"
text = p.read_text(encoding="cp1252")
start = text.index("<!-- Summary Table / List for Lintel Reinforcement -->")
end = text.index('    <motion class="mt-8">') if '    <motion class="mt-8">' in text else text.index('    <div class="mt-8">')

new = """<!-- Synthèse — armatures de linteaux -->
    <div class="rpa-spec-card my-8" id="rpa-ch7-lintel-summary" style="scroll-margin-top: 100px;">
        <motion class="rpa-spec-card__head">Armatures de linteaux — synthèse</div>
        <div class="rpa-spec-card__body">
            <div class="rpa-spec-card__row">
                <span class="rpa-spec-card__key">Longitudinaux</span>
                <div><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>A</mi><mi>l</mi></msub><mo>,</mo><msub><mi>A'</mi><mi>l</mi></msub><mo>&ge;</mo><mn>0,0015</mn><msub><mi>b</mi><mi>w</mi></msub><mi>h</mi></mrow></math></div>
            </div>
            <div class="rpa-spec-card__row">
                <span class="rpa-spec-card__key">Confinement</span>
                <div><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>A</mi><mi>c</mi></msub><mo>&ge;</mo><mn>0,0020</mn><msub><mi>b</mi><mi>w</mi></msub><mi>h</mi></mrow></math></div>
            </div>
            <div class="rpa-spec-card__row">
                <span class="rpa-spec-card__key"><i>A<sub>D</sub></i></span>
                <div class="space-y-1">
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>&ge;</mo><mn>0,0015</mn><msub><mi>b</mi><mi>w</mi></msub><mi>h</mi></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&gt;</mo><mn>0,06</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>=</mo><mn>0</mn></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&le;</mo><mn>0,06</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                </div>
            </div>
            <div class="rpa-spec-card__row">
                <span class="rpa-spec-card__key"><i>A<sub>t</sub></i></span>
                <div class="space-y-1">
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>&ge;</mo><mn>0,0015</mn><msub><mi>b</mi><mi>w</mi></msub><mi>s</mi></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&le;</mo><mn>0,025</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>&ge;</mo><mn>0,0025</mn><msub><mi>b</mi><mi>w</mi></msub><mi>s</mi></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&gt;</mo><mn>0,025</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                </div>
            </div>
        </div>
    </div>

"""
new = new.replace("<motion class=", "<div class=").replace("</motion>", "</div>")
p.write_text(text[:start] + new + text[end:], encoding="utf-8")
print("patched p122 -> utf-8")
