{{-- ==================== PAGE 79 ==================== --}}
<section id="rpa-p79" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header">
        <span>79</span>
        <span class="chapter">4.2 Méthode statique équivalente</span>
    </div>

    <div id="rpa-art-4.2.2" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3">4.2.2 Modélisation</h3>
        <div class="rpa-indent space-y-4">
            <p><b>a)</b> Le modèle du bâtiment à utiliser, dans chacune des deux directions de calcul, est plan avec les masses concentrées au centre de gravité des planchers et un seul degré de liberté, en translation horizontale par niveau, sous réserve que les systèmes de contreventement dans les deux (2) directions puissent être découplés.</p>
            <p><b>b)</b> Seul le mode fondamental de vibration de la structure est considéré dans le calcul de la force sismique totale.</p>
        </div>
    </div>

    <div id="rpa-art-4.2.3" class="mt-8" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3">4.2.3 Calcul de la force sismique totale</h3>
        <p class="mb-6">
            La force sismique totale, V, appliquée à la base de la structure, doit être calculée successivement dans deux directions horizontales orthogonales, selon Eqn. (4.1) :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-4.1">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mi>V</mi>
                        <mo>=</mo>
                        <mi>&lambda;</mi>
                        <mo>&sdot;</mo>
                        <mfrac>
                            <mrow>
                                <msub><mi>S</mi><mrow><mi>a</mi><mi>d</mi></mrow></msub>
                            </mrow>
                            <mi>g</mi>
                        </mfrac>
                        <mo>(</mo>
                        <msub><mi>T</mi><mn>0</mn></msub>
                        <mo>)</mo>
                        <mo>&sdot;</mo>
                        <mi>W</mi>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(4.1)</div>
        </div>

        <div class="mt-6 space-y-2">
            <p>avec :</p>
            <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><msub><mi>S</mi><mrow><mi>a</mi><mi>d</mi></mrow></msub></mrow><mi>g</mi></mfrac><mo>(</mo><msub><mi>T</mi><mn>0</mn></msub><mo>)</mo></math> : Ordonnée du spectre de calcul (cf. &sect; 3.3.3) pour la période <i>T<sub>0</sub></i> ;</p>
            <p><i>T<sub>0</sub></i> : Période fondamentale de vibration du bâtiment, pour le mouvement de translation dans la direction considérée (cf. &sect; 4.2.4).</p>
            <p>&lambda; : Coefficient de correction</p>
        </div>

        <div class="rpa-equation-container my-8" id="rpa-eqt-4.2">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mi>&lambda;</mi>
                        <mo>=</mo>
                        <mrow>
                            <mo>{</mo>
                            <mtable columnalign="left">
                                <mtr>
                                    <mtd>
                                        <mn>0.85</mn>
                                        <mo>:</mo>
                                        <mtext>si </mtext>
                                        <msub><mi>T</mi><mn>0</mn></msub>
                                        <mo>&le;</mo>
                                        <mo>(</mo>
                                        <mn>2.</mn>
                                        <msub><mi>T</mi><mn>2</mn></msub>
                                        <mo>)</mo>
                                        <mtext> et si le b&acirc;timent a plus de 2 niveaux</mtext>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>1.</mn>
                                        <mtext> autrement</mtext>
                                    </mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(4.2)</div>
        </div>

        <div class="rpa-comment mb-6">
            <p class="italic text-gray-600">
                <b>Commentaire :</b> Le coefficient &lambda; traduit le fait que, dans les bâtiments d'au moins 3 niveaux avec des degrés de liberté de translation dans chaque direction horizontale, la masse modale effective du premier mode (fondamental) est inférieure, en moyenne de 15%, à la masse totale du bâtiment.
            </p>
        </div>

        <p class="mb-4"><i>W</i> : Poids sismique total du bâtiment. Il est égal à la somme des poids <i>W<sub>i</sub></i>, calculés à chaque niveau &laquo; i &raquo; :</p>

        <div class="rpa-equation-container" id="rpa-eqt-4.3">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mi>W</mi>
                        <mo>=</mo>
                        <munderover>
                            <mo>&sum;</mo>
                            <mrow>
                                <mi>i</mi>
                                <mo>=</mo>
                                <mn>1</mn>
                            </mrow>
                            <mi>n</mi>
                        </munderover>
                        <msub><mi>W</mi><mi>i</mi></msub>
                        <mtext> , n &eacute;tant le nombre de niveaux</mtext>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(4.3)</div>
        </div>

        <p class="mt-6">où :</p>
        <div class="rpa-indent space-y-4">
            <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>W</mi><mi>i</mi></msub><mo>=</mo><msub><mi>W</mi><mrow><mi>G</mi><mi>i</mi></mrow></msub><mo>+</mo><mi>&psi;</mi><mo>&sdot;</mo><msub><mi>W</mi><mrow><mi>Q</mi><mi>i</mi></mrow></msub></math>, pour tout niveau i de la structure</p>
            <ul class="rpa-list-disc ml-8">
                <li><i>W<sub>Gi</sub></i> : Poids d&ucirc; aux charges permanentes et à celles des équipements fixes éventuels, solidaires de la structure</li>
                <li><i>W<sub>Qi</sub></i> : Charges d'exploitation</li>
                <li>&psi; : Coefficient d'accompagnement, fonction de la nature et de la durée de la charge d'exploitation et donné au Tableau (4.2).</li>
            </ul>
        </div>
    </div>
</section>
