<section id="rpa-p120" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span>120</span>
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        avec : <i>z = h &minus; 2d'</i>
    </p>
    <p style="text-align: justify;">
        où:
    </p>
    <div class="rpa-indent">
        <div class="rpa-bullet">• <i>s</i> : espacement des cours d'armatures transversales</div>
        <div class="rpa-bullet">• <i>A<sub>t</sub></i> : section d'un cours d'armatures transversales</div>
        <div class="rpa-bullet">• <math xmlns="http://www.w3.org/1998/Math/MathML"><mover><mi>V</mi><mo>&mdash;</mo></mover></math> : effort tranchant, dans la section considérée, égal à (1.4V<sub>u</sub>)</div>
        <div class="rpa-bullet">• <i>l</i> : portée du linteau</div>
    </div>

    <div class="rpa-indent mt-4">
        <div class="rpa-bullet">(b) Deuxième sous- cas : linteaux courts (<math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>[</mo><msub><mi>&lambda;</mi><mi>g</mi></msub><mo>=</mo><mfrac><mi>l</mi><mi>h</mi></mfrac><mo>]</mo><mo>&le;</mo><mn>1</mn></mrow></math>)</div>
        <div class="rpa-bullet">On doit vérifier <a href="#rpa-eqt-7.16" class="rpa-link">Eqn. (7.16)</a> :</div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.16">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mi>s</mi>
                    <mo>&le;</mo>
                    <mfrac>
                        <mrow>
                            <msub><mi>A</mi><mi>t</mi></msub>
                            <mo>&sdot;</mo>
                            <msub><mi>f</mi><mi>e</mi></msub>
                            <mo>&sdot;</mo>
                            <mi>l</mi>
                        </mrow>
                        <mrow>
                            <mi>V</mi>
                            <mo>+</mo>
                            <msub><mi>A</mi><mi>t</mi></msub>
                            <mo>&sdot;</mo>
                            <msub><mi>f</mi><mi>e</mi></msub>
                        </mrow>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.16)</div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        avec:
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.17">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>V</mi><mn>1</mn></msub>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <mo>|</mo>
                            <msub><mi>M</mi><mrow><mi>c</mi><mi>i</mi></mrow></msub>
                            <mo>+</mo>
                            <msub><mi>M</mi><mrow><mi>c</mi><mi>j</mi></mrow></msub>
                            <mo>|</mo>
                        </mrow>
                        <msub><mi>l</mi><mrow><mi>i</mi><mi>j</mi></mrow></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.17)</div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        où:
    </p>
    <div class="rpa-indent">
        <div class="rpa-bullet">• <i>V<sub>2</sub> = 2.V<sub>u</sub></i></div>
        <div class="rpa-bullet">• <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mover><mi>V</mi><mo>&mdash;</mo></mover><mo>=</mo><mi>min</mi><mo>(</mo><msub><mi>V</mi><mn>1</mn></msub><mo>,</mo><msub><mi>V</mi><mn>2</mn></msub><mo>)</mo></mrow></math></div>
    </div>
    <p style="text-align: justify; margin-top: 5px;">
        et:
    </p>
    <div class="rpa-indent">
        <div class="rpa-bullet">• <i>M<sub>ci</sub></i> et <i>M<sub>cj</sub></i> : moments « résistants ultimes » des sections d'about, à gauche et à droite du linteau de portée, <i>l<sub>ij</sub></i>, et calculés par :</div>
    </div>

    <div class="rpa-equation-container my-4" style="justify-content: center;">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>M</mi><mi>c</mi></msub>
                    <mo>=</mo>
                    <msub><mi>A</mi><mi>l</mi></msub>
                    <mo>&sdot;</mo>
                    <msub><mi>f</mi><mi>e</mi></msub>
                    <mo>&sdot;</mo>
                    <mi>z</mi>
                </mrow>
            </math>
        </div>
    </div>

    <p style="text-align: center;">avec : <i>z = h &minus; 2d'</i>, (cf. <a href="#rpa-fig-7.10" class="rpa-link">Figure (7.10)</a>)</p>

    <!-- Figure 7.10 SVG -->
    <div class="rpa-figure-container my-8" id="rpa-fig-7.10-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_10')
        <div class="rpa-figure-title" id="rpa-fig-7.10">Figure 7.10: Effort tranchant et moment dans le linteau</div>
    </div>

    <p><b>Deuxième cas :</b> <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&gt;</mo><mo>(</mo><mn>0.06</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub><mo>)</mo></mrow></math></p>
    <p style="text-align: justify;">
        Dans ce cas, il y a lieu de disposer les ferraillages longitudinaux (supérieurs et inférieurs), transversaux et en zone courante (armatures de peau) suivant les minimum réglementaires.
    </p>
    <p style="text-align: justify; text-indent: 20px;">
        Les efforts (M, V) sont repris par des bielles diagonales (de compression et de traction) suivant l'axe moyen des armatures diagonales, de section A<sub>D</sub>, à disposer obligatoirement (cf. <a href="#rpa-fig-7.11" class="rpa-link">Figure (7.11)</a>). Le calcul de ces armatures se fait suivant la formule :
    </p>

</section>

