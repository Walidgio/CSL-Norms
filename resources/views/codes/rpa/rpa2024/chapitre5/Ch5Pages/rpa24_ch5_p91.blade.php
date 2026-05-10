{{-- ==================== PAGE 91 ==================== --}}
<section id="rpa-p91" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header">
        <span class="chapter">5.9 Justification vis-à-vis de l'effet P-&Delta;</span>
        <span>91</span>
    </div>

    <div class="flex flex-col items-center my-8">
        <p class="text-sm font-bold mb-4">Figure 5.1: Largeur minimum du joint sismique</p>
        @include('norms::codes.rpa.rpa2024.chapitre5.Ch5Svg.rpa24_ch5_fig5_1')
    </div>

    <div id="rpa-art-5.9" class="mt-8" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2" style="color: #c05621;">5.9 Justification vis-à-vis de l'effet P-&Delta;</h2>
        <p class="text-justify mb-4">
            Les effets du 2&deg; ordre (ou effet P-&Delta;) peuvent être négligés dans le cas des bâtiments si la condition suivante est satisfaite à tous les niveaux :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-5.9">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mo>(</mo>
                        <msub><mi>&theta;</mi><mi>k</mi></msub>
                        <mo>=</mo>
                        <mfrac>
                            <mrow>
                                <msub><mi>P</mi><mi>k</mi></msub>
                                <mo>&sdot;</mo>
                                <msub><mi>&Delta;</mi><mi>k</mi></msub>
                            </mrow>
                            <mrow>
                                <msub><mi>V</mi><mi>k</mi></msub>
                                <mo>&sdot;</mo>
                                <msub><mi>h</mi><mi>k</mi></msub>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                        <mo>&le;</mo>
                        <mn>0.10</mn>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(5.9)</div>
        </div>

        <p class="mt-4">avec :</p>
        <ul class="rpa-list-disc ml-8 space-y-2">
            <li><i>P<sub>k</sub></i> : poids total de la structure et des charges d'exploitation, au dessus du niveau &laquo; k &raquo;, (cf. &sect; 4.2.3) :</li>
        </ul>

        <div class="rpa-equation-container" id="rpa-eqt-5.10">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>P</mi><mi>k</mi></msub>
                        <mo>=</mo>
                        <munderover>
                            <mo>&sum;</mo>
                            <mrow><mi>i</mi><mo>=</mo><mi>k</mi></mrow>
                            <mi>n</mi>
                        </munderover>
                        <mo>(</mo>
                        <msub><mi>G</mi><mi>i</mi></msub>
                        <mo>+</mo>
                        <mi>&psi;</mi>
                        <mo>&sdot;</mo>
                        <msub><mi>Q</mi><mi>i</mi></msub>
                        <mo>)</mo>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(5.10)</div>
        </div>

        <ul class="rpa-list-disc ml-8 space-y-2 mt-4">
            <li><i>V<sub>k</sub></i> : effort tranchant d'étage au niveau &laquo; k &raquo; : <i>V<sub>k</sub> = &sum;<sub>i=k</sub><sup>n</sup> F<sub>i</sub></i></li>
            <li><i>&Delta;<sub>k</sub></i> : déplacement relatif du niveau &laquo; k &raquo; par rapport au niveau &laquo; k-1 &raquo;, (cf. &sect; 4.5.2 et Eqn. (4.16).)</li>
            <li><i>h<sub>k</sub></i> : hauteur du niveau &laquo; k &raquo;.</li>
        </ul>

        <p class="mt-6">Selon la valeur de &theta;<sub>k</sub>, il convient de considérer que :</p>
        <ul class="rpa-list-disc ml-8 space-y-2">
            <li>Si (0.10 &le; &theta;<sub>k</sub> &le; 0.20), les effets P-&Delta; peuvent être pris en compte, en manière approchée, en amplifiant les effets de l'action sismique calculés au moyen d'une analyse élastique du 1&deg; ordre par le facteur (1 / (1 - &theta;<sub>k</sub>)).</li>
            <li>Si (&theta;<sub>k</sub> &ge; 0.20), la structure est potentiellement instable et doit être redimensionnée.</li>
        </ul>
    </div>
</section>
