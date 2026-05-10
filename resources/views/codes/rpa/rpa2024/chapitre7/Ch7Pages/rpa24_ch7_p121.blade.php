{{-- ==================== PAGE 121 ==================== --}}
<section id="rpa-p121" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span>121</span>
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.18">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>A</mi><mi>D</mi></msub>
                    <mo>=</mo>
                    <mfrac>
                        <mi>V</mi>
                        <mrow>
                            <mn>2</mn><mo>&sdot;</mo><msub><mi>f</mi><mi>e</mi></msub><mo>&sdot;</mo><mo>sin</mo><mo>(</mo><mi>&alpha;</mi><mo>)</mo>
                        </mrow>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.18)</div>
    </div>

    <div style="margin-top:20px;">
        avec :
    </div>
    <p style="margin-top: 10px;">
        <math xmlns="http://www.w3.org/1998/Math/MathML">
            <mrow>
                <mo>tg</mo><mo>(</mo><mi>&alpha;</mi><mo>)</mo>
                <mo>=</mo>
                <mfrac>
                    <mrow><mi>h</mi><mo>&minus;</mo><mn>2</mn><mi>d'</mi></mrow>
                    <mi>l</mi>
                </mfrac>
            </mrow>
        </math> : (cf. <a href="#rpa-fig-7.12" class="rpa-link">Figure (7.12)</a>)
    </p>
    <p>
        <math xmlns="http://www.w3.org/1998/Math/MathML">
            <mrow>
                <mi>V</mi><mo>=</mo><msub><mi>V</mi><mtext>calcul</mtext></msub>
            </mrow>
        </math> (sans majoration).
    </p>

    <!-- Figure 7.11 -->
    <div class="rpa-figure-container" id="rpa-fig-7.11-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_11')
        <div class="rpa-figure-title" id="rpa-fig-7.11">Figure 7.11: Efforts dans les bielles du linteau</div>
    </div>

    <!-- Figure 7.12 -->
    <div class="rpa-figure-container mt-10" id="rpa-fig-7.12-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_12')
        <div class="rpa-figure-title" id="rpa-fig-7.12">Figure 7.12: Armatures de linteaux</div>
    </div>
</section>

