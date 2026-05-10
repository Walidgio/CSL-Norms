{{-- ==================== PAGE 126 ==================== --}}
<section id="rpa-p126" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span>126</span>
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
    </div>

    <p style="text-align: justify; margin-top: 10px;">
        (l<sub>f</sub> &ge; h<sub>e</sub>/5) et si l’élément de rive confiné doit être prolongé au-delà de la membrure dans l’âme sur une longueur supplémentaire allant jusqu’à (3b<sub>w</sub>), alors l’épaisseur de l’élément de rive confiné, b<sub>c</sub>, reste égale à b<sub>w</sub>.
    </p>

    <!-- Figure 7.18 -->
    <div class="rpa-figure-container mt-6" id="rpa-fig-7.18-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_18')
        <div class="rpa-figure-title" id="rpa-fig-7.18">Figure 7.18: Epaisseur minimale des éléments de rive confinés, dans les voiles avec de larges ailes</div>
    </div>

    <p class="mt-6" style="text-align: justify;">
        Le <span class="rpa-highlight">pourcentage des armatures longitudinales, dans les éléments de rive, doit rester au moins égal à 0.5%</span> de la surface de la zone confinée.
    </p>
    <p style="text-align: justify;">
        Les armatures verticales, des éléments de rive, devraient être confinées avec des cadres et/ou des étriers horizontaux dont l’espacement vertical doit satisfaire la condition suivante :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.25">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>s</mi><mi>t</mi></msub>
                    <mo>&le;</mo>
                    <mo>min</mo>
                    <mo>(</mo>
                    <msub><mi>b</mi><mn>0</mn></msub><mo>/</mo><mn>3</mn>
                    <mo>;</mo>
                    <mn>12.5</mn><mtext> cm</mtext>
                    <mo>;</mo>
                    <mn>6.</mn><msub><mi>&phi;</mi><mi>l</mi></msub>
                    <mo>)</mo>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.25)</div>
    </div>

    <p class="mt-4" style="text-align: justify;">
        où : <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>&phi;</mi><mi>l</mi></msub></math> représente le diamètre minimal des armatures longitudinales, dans les éléments de rive ; en outre <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&phi;</mi><mi>l</mi></msub><mo>&ge;</mo><mn>12</mn><mtext>mm</mtext></mrow></math>.
    </p>

    <p class="mt-4" style="text-align: justify;">
        La distance horizontale entre deux barres verticales <span class="rpa-highlight">ligaturées</span> ne doit pas dépasser <span class="rpa-highlight">20cm</span>.
    </p>

    <p class="mt-4" style="text-align: justify;">
        La section des armatures de confinement dans les éléments de rive, (A<sub>t</sub>), mesurée dans le sens parallèle à l’épaisseur du voile, doit être présente sur la hauteur (h<sub>cr</sub>) et doit satisfaire les conditions :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.26">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>A</mi><mi>t</mi></msub>
                    <mo>&ge;</mo>
                    <mn>0.09</mn><msub><mi>s</mi><mi>t</mi></msub><mo>&sdot;</mo><msub><mi>b</mi><mn>0</mn></msub><mo>&sdot;</mo>
                    <mfrac>
                        <msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub>
                        <msub><mi>f</mi><mi>e</mi></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.26)</div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.27">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>A</mi><mi>t</mi></msub>
                    <mo>&ge;</mo>
                    <mn>0.3</mn><msub><mi>s</mi><mi>t</mi></msub><mo>&sdot;</mo><msub><mi>b</mi><mn>0</mn></msub><mo>&sdot;</mo>
                    <mo>(</mo>
                    <mfrac>
                        <msub><mi>A</mi><mi>g</mi></msub>
                        <msub><mi>A</mi><mi>c</mi></msub>
                    </mfrac>
                    <mo>&minus;</mo>
                    <mn>1</mn>
                    <mo>)</mo>
                    <mo>&sdot;</mo>
                    <mfrac>
                        <msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub>
                        <msub><mi>f</mi><mi>e</mi></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.27)</div>
    </div>
</section>

