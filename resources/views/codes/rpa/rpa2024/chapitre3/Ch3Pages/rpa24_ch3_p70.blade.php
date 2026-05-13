{{-- ==================== PAGE 70 ==================== --}}
<section id="rpa-p70" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">70</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
        @include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')
    </div>
    </div>

    <div class="mt-4">
        <h3 class="font-bold text-lg" id="rpa-art-3.7">3.7 Classification des bâtiments selon leur configuration</h3>
        
        <h4 class="font-bold mt-4" id="rpa-art-3.7.1">3.7.1 Régularité</h4>
        <p style="text-align: justify;">
            Chaque bâtiment doit être classé selon sa configuration en plan et en élévation en bâtiment régulier ou non, selon les critères ci-dessous :
        </p>

        <div class="mt-4">
            <p class="font-bold">a) Régularité en plan</p>
            <div class="rpa-indent mt-2 space-y-2">
                <div class="rpa-bullet">• <b>a1:</b> Le bâtiment doit présenter une configuration sensiblement symétrique vis-à-vis de deux directions orthogonales aussi bien pour la distribution des rigidités que pour celle des masses.</div>
                <div class="rpa-bullet">• <b>a2 :</b> À chaque niveau et pour chaque direction de calcul x et y, les excentricités structurales <i>e<sub>0x</sub></i> et <i>e<sub>0y</sub></i> doivent vérifier les deux conditions suivantes:</div>
                
                <div class="rpa-equation-container" id="rpa-eqt-3.24">
                    <div class="rpa-equation">
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mrow>
                                <mo>{</mo>
                                <mtable columnalign="left">
                                    <mtr>
                                        <mtd><msub><mi>e</mi><mrow><mn>0</mn><mi>x</mi></mrow></msub><mo>&le;</mo><mn>0.30</mn><msub><mi>r</mi><mi>x</mi></msub></mtd>
                                    </mtr>
                                    <mtr>
                                        <mtd><msub><mi>r</mi><mi>x</mi></msub><mo>&ge;</mo><msub><mi>l</mi><mi>s</mi></msub></mtd>
                                    </mtr>
                                </mtable>
                            </mrow>
                        </math>
                    </div>
                    <div class="rpa-eq-num">(3.24)</div>
                </div>
                <p class="text-center italic">et</p>
                <div class="rpa-equation-container" id="rpa-eqt-3.25">
                    <div class="rpa-equation">
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mrow>
                                <mo>{</mo>
                                <mtable columnalign="left">
                                    <mtr>
                                        <mtd><msub><mi>e</mi><mrow><mn>0</mn><mi>y</mi></mrow></msub><mo>&le;</mo><mn>0.30</mn><msub><mi>r</mi><mi>y</mi></msub></mtd>
                                    </mtr>
                                    <mtr>
                                        <mtd><msub><mi>r</mi><mi>y</mi></msub><mo>&ge;</mo><msub><mi>l</mi><mi>s</mi></msub></mtd>
                                    </mtr>
                                </mtable>
                            </mrow>
                        </math>
                    </div>
                    <div class="rpa-eq-num">(3.25)</div>
                </div>

                <div class="mt-2">
                    avec:
                    <div class="rpa-indent space-y-1">
                        <div class="rpa-bullet">– <i>e<sub>0x</sub></i> est la distance entre le centre de rigidité et le centre de gravité, mesurée suivant la direction x perpendiculaire à la direction de calcul considérée ;</div>
                        <div class="rpa-bullet">– <i>e<sub>0y</sub></i> est la distance entre le centre de rigidité et le centre de gravité, mesurée suivant la direction y perpendiculaire à la direction de calcul considérée ;</div>
                        <div class="rpa-bullet">– <i>r<sub>x</sub></i> et <i>r<sub>y</sub></i>: étant, respectivement, les rayons de torsion suivant x et y (cf. <a href="#rpa-eqt-3.20" class="rpa-inline-link">Eqn.(3.20)</a>) ;</div>
                        <div class="rpa-bullet">– <i>l<sub>s</sub></i> étant le rayon de giration massique du plancher en plan (cf. <a href="#rpa-eqt-3.22" class="rpa-inline-link">Eqn.(3.22)</a>) .</div>
                    </div>
                </div>

                <div class="rpa-bullet">• <b>a3 :</b> La forme du bâtiment doit être compacte avec un rapport longueur/largeur du plancher inférieur ou égal à 4 (cf. <a href="#rpa-fig-3.8" class="rpa-inline-link">Figure (3.8)</a>).<br>
                La somme des dimensions des parties rentrantes ou saillantes du bâtiment dans une direction donnée ne doit pas excéder 25% de la dimension totale du bâtiment dans cette direction (cf. <a href="#rpa-fig-3.8" class="rpa-inline-link">Figure (3.8)</a>).</div>
                <div class="rpa-bullet">• <b>a4.</b> Les planchers doivent présenter une rigidité suffisante vis à vis de celle des contreventements verticaux pour être considérés comme indéformables dans leur plan. Dans ce cadre, la surface totale des ouvertures de plancher doit rester inférieure à 15% de celle de ce dernier.</div>
            </div>
        </div>

        <div class="mt-6">
            <p class="font-bold">b) Régularité en élévation</p>
            <div class="rpa-indent mt-2 space-y-2">
                <div class="rpa-bullet">• <b>b1.</b> Le système de contreventement ne doit pas comporter d'élément porteur vertical discontinu, dont la charge ne se transmet pas directement à la fondation.</div>
                <div class="rpa-bullet">• <b>b2.</b> Aussi bien la raideur que la masse des différents niveaux restent constantes ou diminuent progressivement et sans changement brusque de la base au sommet du bâtiment.</div>
                <div class="rpa-bullet">• <b>b3.</b> Le rapport de masse, sur rigidité de deux niveaux successifs, ne doit pas varier de plus de 25% dans chaque direction de calcul.</div>
                <div class="rpa-bullet">• <b>b4.</b> Dans le cas de décrochements en élévation, la variation des dimensions, en plan du bâtiment entre deux niveaux successifs, ne dépasse pas 20% dans les deux directions de calcul et ne s'effectue que dans le sens d'une diminution avec la hauteur. La plus grande dimension latérale du bâtiment n'excède pas 1.5 fois sa plus petite dimension. Toutefois, au dernier niveau, les éléments du bâtiment, tels que buanderies, salle de machines d'ascenseurs, etc, pourront ne pas respecter les règles b3 et b4 et être calculés...</div>
            </div>
        </div>
    </div>
</section>
