{{-- ==================== PAGE 123 ==================== --}}
<section id="rpa-p123" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span>123</span>
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
    </div>

    <div class="rpa-indent" style="margin-top: 10px;">
        <ul class="list-disc ml-6">
            <li>la première étape consiste à avoir l’enveloppe linéaire qui joint le moment maximal à la base à celui au sommet.</li>
            <li>La deuxième étape consiste à décaler cette enveloppe linéaire verticalement par la hauteur critique.</li>
        </ul>
        <p class="mt-4" style="text-align: justify;">
            Le diagramme du moment fléchissant, pour les systèmes à contreventement mixte, peut éventuellement être négatif dans les étages supérieurs (cf. <a href="#rpa-fig-7.13" class="rpa-link">Figure (7.13b)</a>).
        </p>
    </div>

    <!-- Figure 7.13 -->
    <div class="rpa-figure-container mt-6" id="rpa-fig-7.13-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_13')
        <div class="rpa-figure-title" id="rpa-fig-7.13">Figure 7.13: Enveloppe de calcul pour les moments fléchissants</div>
    </div>

    <p class="mt-6" style="text-align: justify;">
        La hauteur, h<sub>cr</sub>, de la zone critique au-dessus de la base du voile est estimée comme suit (cf. <a href="#rpa-fig-7.13" class="rpa-link">Figure (7.13)</a>) :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.22">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>h</mi><mtext>cr</mtext></msub>
                    <mo>=</mo>
                    <mo>max</mo>
                    <mo>(</mo>
                    <msub><mi>l</mi><mi>w</mi></msub>
                    <mo>:</mo>
                    <mfrac>
                        <msub><mi>h</mi><mi>w</mi></msub>
                        <mn>6</mn>
                    </mfrac>
                    <mo>)</mo>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.22)</div>
    </div>

    <p class="mt-4">et :</p>

    <div class="rpa-equation-container" id="rpa-eqt-7.23">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>h</mi><mtext>cr</mtext></msub>
                    <mo>&le;</mo>
                    <mfenced open="{" close="">
                        <mtable columnalign="left">
                            <mtr>
                                <mtd><mn>2.</mn><msub><mi>l</mi><mi>w</mi></msub></mtd>
                            </mtr>
                            <mtr>
                                <mtd>
                                    <msub><mi>h</mi><mi>e</mi></msub><mtext>: pour </mtext><mi>n</mi><mo>&le;</mo><mn>6</mn><mtext> niveaux</mtext>
                                </mtd>
                            </mtr>
                            <mtr>
                                <mtd>
                                    <mn>2.</mn><msub><mi>h</mi><mi>e</mi></msub><mtext>: pour </mtext><mi>n</mi><mo>&gt;</mo><mn>6</mn><mtext> niveaux</mtext>
                                </mtd>
                            </mtr>
                        </mtable>
                    </mfenced>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.23)</div>
    </div>

    <div class="mt-6">
        où :
        <div class="rpa-indent">
            <div class="rpa-bullet">• <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>h</mi><mi>e</mi></msub></math> est la hauteur libre, de chaque niveau, la base étant le <span class="rpa-highlight">niveau des fondations ou de l’encastrement dans le soubassement</span>, en présence de diaphragmes et de voiles périphériques adéquats ;</div>
            <div class="rpa-bullet">• <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>h</mi><mi>w</mi></msub></math> est la hauteur totale du voile (cf. <a href="#rpa-fig-7.14" class="rpa-link">Figure (7.14)</a>).</div>
        </div>
    </div>

    <p class="mt-4" style="text-align: justify;">
        Pour les systèmes à contreventement mixte, contenant des voiles élancés, l'enveloppe de calcul modifiée, pour les efforts tranchants, est donnée par la <a href="#rpa-fig-7.15" class="rpa-link">Figure (7.15)</a>.
    </p>
</section>

