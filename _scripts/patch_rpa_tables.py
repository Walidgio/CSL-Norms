# -*- coding: utf-8 -*-
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1] / "resources/views/codes/rpa/rpa2024"


def patch_p78():
    p = ROOT / "chapitre4/Ch4Pages/rpa24_ch4_p78.blade.php"
    text = p.read_text(encoding="utf-8")
    start = text.index('    <div class="my-8 overflow-x-auto">')
    end = text.index('    <div id="rpa-art-4.1.3"')
    new_block = """    <div class="rpa-table-showcase my-8" id="rpa-table-4.1" style="scroll-margin-top: 100px;">
        <p class="rpa-table-showcase__kicker">M&eacute;thode statique &eacute;quivalente</p>
        <div class="rpa-table-showcase__surface overflow-x-auto">
            <table class="rpa-table min-w-[520px]">
                <thead>
                    <tr>
                        <th rowspan="2" scope="col">Zone sismique</th>
                        <th colspan="4" scope="colgroup">Groupe d'importance</th>
                    </tr>
                    <tr>
                        <th scope="col">1A</th>
                        <th scope="col">1B</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">I et II</th>
                        <td class="text-center">(*)</td>
                        <td class="text-center">(*)</td>
                        <td class="text-center">(*)</td>
                        <td class="text-center">(*)</td>
                    </tr>
                    <tr>
                        <th scope="row">III et IV</th>
                        <td class="text-center">&le; 3 niveaux<br>&le; 11 m</td>
                        <td class="text-center">&le; 5 niveaux<br>&le; 17 m</td>
                        <td class="text-center">&le; 7 niveaux<br>&le; 23 m</td>
                        <td class="text-center">(*)</td>
                    </tr>
                    <tr>
                        <th scope="row">V et VI</th>
                        <td class="text-center">&le; 2 niveaux<br>&le; 8 m</td>
                        <td class="text-center">&le; 3 niveaux<br>&le; 11 m</td>
                        <td class="text-center">&le; 5 niveaux<br>&le; 17 m</td>
                        <td class="text-center">&le; 5 niveaux<br>&le; 17 m</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="rpa-table-showcase__caption">Tableau 4.1 — Conditions d'application de la m&eacute;thode statique &eacute;quivalente</p>
        <p class="rpa-table-showcase__footnote"><b>Nota :</b> (*) aucune limitation de nombre de niveaux ou de hauteur.</p>
    </div>

"""
    p.write_text(text[:start] + new_block + text[end:], encoding="utf-8")
    print("patched p78")


def patch_p80():
    p = ROOT / "chapitre4/Ch4Pages/rpa24_ch4_p80.blade.php"
    text = p.read_text(encoding="utf-8")

    # Table 4.2
    start1 = text.index('    <div class="my-8 overflow-x-auto">')
    end1 = text.index('    <div id="rpa-art-4.2.4"')
    block1 = """    <div class="rpa-table-showcase my-8" id="rpa-table-4.2" style="scroll-margin-top: 100px;">
        <p class="rpa-table-showcase__kicker">Coefficient d'accompagnement</p>
        <div class="rpa-table-showcase__surface overflow-x-auto">
            <table class="rpa-table min-w-[480px]">
                <thead>
                    <tr>
                        <th scope="col">Cas</th>
                        <th scope="col">Nature de la charge d'exploitation</th>
                        <th scope="col">&psi;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>B&acirc;timents d'habitation, bureaux ou assimil&eacute;s</td>
                        <td class="text-center font-semibold">0,20</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>B&acirc;timents accueillant du public de mani&egrave;re temporaire (salles d'exposition, de f&ecirc;tes, lieux de culte, tribunes, stades, etc.)</td>
                        <td class="text-center font-semibold">0,50</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Entrep&ocirc;ts, b&acirc;timents de stockage, parkings, biblioth&egrave;ques et archives</td>
                        <td class="text-center font-semibold">1,00</td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Autres b&acirc;timents (cas &agrave; justifier par le projeteur en fonction de la dur&eacute;e de la charge d'exploitation)</td>
                        <td class="text-center font-semibold">&hellip;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="rpa-table-showcase__caption">Tableau 4.2 — Valeurs du coefficient d'accompagnement &psi;</p>
    </div>

"""
    text = text[:start1] + block1 + text[end1:]

    # Table 4.3
    start2 = text.index('        <div class="my-8 overflow-x-auto">')
    end2 = text.index('        <p class="mb-4">Dans les cas n&deg; 3 et 4')
    block2 = """        <div class="rpa-table-showcase my-8" id="rpa-table-4.3" style="scroll-margin-top: 100px;">
            <p class="rpa-table-showcase__kicker">P&eacute;riode fondamentale — coefficient <i>C<sub>t</sub></i></p>
            <div class="rpa-table-showcase__surface overflow-x-auto">
                <table class="rpa-table min-w-[480px]">
                    <thead>
                        <tr>
                            <th scope="col">Cas n&deg;</th>
                            <th scope="col">Syst&egrave;me de contreventement</th>
                            <th scope="col"><i>C<sub>t</sub></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Portiques autostables en b&eacute;ton arm&eacute; sans remplissage en ma&ccedil;onnerie</td>
                            <td class="text-center font-semibold">0,075</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Portiques autostables en acier sans remplissage en ma&ccedil;onnerie</td>
                            <td class="text-center font-semibold">0,085</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Portiques autostables en acier ou en b&eacute;ton arm&eacute; avec remplissage en ma&ccedil;onnerie</td>
                            <td class="text-center font-semibold">0,050</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Autres syst&egrave;mes (voiles, contreventement en K ou X, etc.)</td>
                            <td class="text-center font-semibold">0,050</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="rpa-table-showcase__caption">Tableau 4.3 — Valeurs du coefficient <i>C<sub>t</sub></i></p>
        </div>

"""
    text = text[:start2] + block2 + text[end2:]
    p.write_text(text, encoding="utf-8")
    print("patched p80")


def patch_p88():
    p = ROOT / "chapitre5/Ch5Pages/rpa24_ch5_p88.blade.php"
    text = p.read_text(encoding="utf-8")
    old = """        <div class="rpa-table-container overflow-x-auto">
            <table class="rpa-table min-w-[320px]" id="rpa-table-5.1">
                <caption class="text-left text-sm font-semibold mb-3 px-1">
                    Tableau 5.1 — Coefficients d'accélération verticale en fonction de la zone sismique et du groupe d'importance (sans effet topographique, <i>S<sub>T</sub></i> = 1). L'action sismique verticale <i>A<sub>v</sub></i> est obligatoire lorsque (<i>A<sub>v</sub></i>.<i>I</i>.<i>g</i>) dépasse 0,25 <i>g</i>.
                </caption>
"""
    new = """        <div class="rpa-table-showcase my-6" id="rpa-table-5.1" style="scroll-margin-top: 100px;">
            <p class="rpa-table-showcase__kicker">Composante verticale — <i>S<sub>T</sub></i> = 1</p>
            <div class="rpa-table-showcase__surface overflow-x-auto">
            <table class="rpa-table min-w-[320px]">
"""
    if old not in text:
        raise SystemExit("p88 table start not found")
    text = text.replace(old, new, 1)
    text = text.replace(
        """                </tbody>
            </table>
        </div>

        <p class="mt-8 text-justify leading-relaxed">""",
        """                </tbody>
            </table>
            </div>
            <p class="rpa-table-showcase__caption">Tableau 5.1 — Coefficients d'accélération verticale (sans effet topographique). L'action verticale <i>A<sub>v</sub></i> est obligatoire lorsque (<i>A<sub>v</sub></i>.<i>I</i>.<i>g</i>) dépasse 0,25 <i>g</i>.</p>
        </div>

        <p class="mt-8 text-justify leading-relaxed">""",
        1,
    )
    p.write_text(text, encoding="utf-8")
    print("patched p88")


def patch_p92():
    p = ROOT / "chapitre5/Ch5Pages/rpa24_ch5_p92.blade.php"
    text = p.read_text(encoding="utf-8")
    old = """            <div class="rpa-table-container overflow-x-auto mt-6">
                <table class="rpa-table min-w-[280px]" id="rpa-table-5.2">
                    <caption class="text-left text-sm font-semibold mb-3 px-1">Tableau 5.2 — Valeurs limites des déplacements inter-étages (<i>h<sub>k</sub></i> : hauteur du niveau « k »)</caption>
"""
    new = """            <div class="rpa-table-showcase my-6" id="rpa-table-5.2" style="scroll-margin-top: 100px;">
                <p class="rpa-table-showcase__kicker">Déplacements inter-étages — non-effondrement</p>
                <div class="rpa-table-showcase__surface overflow-x-auto">
                <table class="rpa-table min-w-[280px]">
"""
    if old not in text:
        raise SystemExit("p92 table start not found")
    text = text.replace(old, new, 1)
    text = text.replace(
        """                    </tbody>
                </table>
            </div>
        </section>""",
        """                    </tbody>
                </table>
                </motion>
                <p class="rpa-table-showcase__caption">Tableau 5.2 — Valeurs limites des déplacements inter-étages (<i>h<sub>k</sub></i> : hauteur du niveau « k »)</p>
            </div>
        </section>""".replace("<motion", "<div").replace("</motion>", "</motion>"),
        1,
    )
    p.write_text(text, encoding="utf-8")
    print("patched p92")


def patch_p122():
    p = ROOT / "chapitre7/Ch7Pages/rpa24_ch7_p122.blade.php"
    for enc in ("utf-8", "cp1252", "latin-1"):
        try:
            text = p.read_text(encoding=enc)
            break
        except UnicodeDecodeError:
            continue
    else:
        raise SystemExit("p122 encoding unknown")
    old_start = "<!-- Summary Table / List for Lintel Reinforcement -->"
    old_end = '    <div class="mt-8">'
    if old_start not in text:
        raise SystemExit("p122 marker not found")
    start = text.index(old_start)
    end = text.index(old_end)
    new = """<!-- Synthèse — armatures de linteaux -->
    <div class="rpa-spec-card my-8" id="rpa-ch7-lintel-summary" style="scroll-margin-top: 100px;">
        <p class="rpa-spec-card__title">Armatures de linteaux — synthèse</p>
        <dl class="rpa-spec-card__grid">
            <div class="rpa-spec-card__row">
                <dt>Longitudinaux</dt>
                <dd><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>A</mi><mi>l</mi></msub><mo>,</mo><msub><mi>A'</mi><mi>l</mi></msub><mo>&ge;</mo><mn>0,0015</mn><msub><mi>b</mi><mi>w</mi></msub><mi>h</mi></mrow></math></dd>
            </div>
            <div class="rpa-spec-card__row">
                <dt>Confinement</dt>
                <dd><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>A</mi><mi>c</mi></msub><mo>&ge;</mo><mn>0,0020</mn><msub><mi>b</mi><mi>w</mi></msub><mi>h</mi></mrow></math></dd>
            </div>
            <div class="rpa-spec-card__row">
                <dt><i>A<sub>D</sub></i></dt>
                <dd class="rpa-spec-card__stack">
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>&ge;</mo><mn>0,0015</mn><msub><mi>b</mi><mi>w</mi></msub><mi>h</mi></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&gt;</mo><mn>0,06</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>=</mo><mn>0</mn></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&le;</mo><mn>0,06</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                </dd>
            </div>
            <div class="rpa-spec-card__row">
                <dt><i>A<sub>t</sub></i></dt>
                <dd class="rpa-spec-card__stack">
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>&ge;</mo><mn>0,0015</mn><msub><mi>b</mi><mi>w</mi></msub><mi>s</mi></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&le;</mo><mn>0,025</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>&ge;</mo><mn>0,0025</mn><msub><mi>b</mi><mi>w</mi></msub><mi>s</mi></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&gt;</mo><mn>0,025</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                </dd>
            </div>
        </dl>
    </div>

"""
    p.write_text(text[:start] + new + text[end:], encoding="utf-8")
    print("patched p122")


if __name__ == "__main__":
    patch_p78()
    patch_p80()
    patch_p88()
    patch_p92()
    patch_p122()
