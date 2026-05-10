{{-- ==================== PAGE 128 ==================== --}}
<section id="rpa-p128" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
        <span>128</span>
    </div>

    <div>
        <p>où :</p>
        <div class="rpa-bullet">• <i>&mu;<sub>&phi;</sub></i> : Valeur requise du coefficient de ductilité en courbure ;</div>
        <div class="rpa-bullet">• <i>&epsilon;<sub>sy</sub></i> : Valeur de la déformation à la limite élastique de l'acier, donnée comme suit :</div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.33">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>&epsilon;</mi><mtext>sy</mtext></msub>
                    <mo>=</mo>
                    <mfrac>
                        <msub><mi>f</mi><mi>e</mi></msub>
                        <msub><mi>E</mi><mi>s</mi></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.33)</div>
    </div>

    <div class="mt-2">
        <div class="rpa-bullet">• <i>E<sub>s</sub></i> : module d'élasticité de l'acier</div>
        <div class="rpa-bullet">• <i>v<sub>d</sub></i> : effort normal réduit, cas d'une section rectangulaire</div>
        <div class="rpa-bullet">• <i>&omega;<sub>v</sub></i> : pourcentage normalisé des armatures verticales d'âmes</div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.34">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>&omega;</mi><mi>v</mi></msub>
                    <mo>=</mo>
                    <mfrac>
                        <msub><mi>A</mi><mtext>sv</mtext></msub>
                        <mrow>
                            <mo>(</mo><msub><mi>l</mi><mi>w</mi></msub><mo>&minus;</mo><mn>2</mn><msub><mi>l</mi><mi>c</mi></msub><mo>)</mo><mo>&sdot;</mo><msub><mi>b</mi><mi>w</mi></msub>
                        </mrow>
                    </mfrac>
                    <mo>&sdot;</mo>
                    <mfrac>
                        <msub><mi>f</mi><mtext>yd</mtext></msub>
                        <msub><mi>f</mi><mtext>cd</mtext></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.34)</div>
    </div>

    <div class="mt-2">
        <div class="rpa-bullet">• <i>A<sub>sv</sub></i> : section de ferraillage correspondant à la section de l'âme du voile</div>
        <div class="rpa-bullet">• <i>f<sub>yd</sub></i> : valeur de calcul de la limite d'élasticité de l'acier</div>
        <div class="rpa-bullet">• <i>f<sub>cd</sub></i> : valeur de calcul de la résistance du béton à la compression</div>
        <div class="rpa-bullet">• <i>&alpha;</i> : coefficient d'efficacité du confinement, égal à (<i>&alpha;<sub>n</sub></i> &sdot; <i>&alpha;<sub>s</sub></i>), avec :</div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.35">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mo>{</mo>
                    <mtable columnalign="left">
                        <mtr>
                            <mtd>
                                <msub><mi>&alpha;</mi><mi>n</mi></msub>
                                <mo>=</mo>
                                <mn>1</mn>
                                <mo>&minus;</mo>
                                <munder><mo>&Sigma;</mo><mi>n</mi></munder>
                                <mrow>
                                    <mo>(</mo>
                                    <mfrac>
                                        <msubsup><mi>b</mi><mi>i</mi><mn>2</mn></msubsup>
                                        <mrow>
                                            <mn>6</mn><msub><mi>b</mi><mn>0</mn></msub><msub><mi>h</mi><mn>0</mn></msub>
                                        </mrow>
                                    </mfrac>
                                    <mo>)</mo>
                                </mrow>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <msub><mi>&alpha;</mi><mi>s</mi></msub>
                                <mo>=</mo>
                                <mrow>
                                    <mo>(</mo>
                                    <mn>1</mn><mo>&minus;</mo><mfrac><mi>t</mi><mrow><mn>2</mn><msub><mi>b</mi><mn>0</mn></msub></mrow></mfrac>
                                    <mo>)</mo>
                                </mrow>
                                <mrow>
                                    <mo>(</mo>
                                    <mn>1</mn><mo>&minus;</mo><mfrac><mi>t</mi><mrow><mn>2</mn><msub><mi>h</mi><mn>0</mn></msub></mrow></mfrac>
                                    <mo>)</mo>
                                </mrow>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.35)</div>
    </div>

    <div class="rpa-indent">
        <div class="rpa-bullet">- <i>n</i> : nombre total de barres longitudinales latéralement maintenues par des armatures de confinement ou des épingles ;</div>
        <div class="rpa-bullet">- <i>b<sub>i</sub></i> : distance entre des barres maintenues consécutives (cf. <a href="#rpa-fig-7.2" class="rpa-link">Figure (7.2a)</a>)</div>
        <div class="rpa-bullet">- <i>b<sub>0</sub>, h<sub>0</sub>, t</i> : grandeurs géométriques (cf. <a href="#rpa-fig-7.2" class="rpa-link">Figure (7.2a)</a>).</div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        Il convient de prévoir une valeur minimale de <i>&omega;<sub>wd</sub></i> égale à 0.12 dans la zone critique à la base du voile.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Le coefficient de ductilité en courbure (<i>&mu;<sub>&phi;</sub></i>) peut être déterminé selon <a href="#rpa-eqt-7.36" class="rpa-link">Eqn. (7.36)</a>, en fonction de la période fondamentale (<i>T<sub>0</sub></i>), de la valeur (<i>T<sub>2</sub></i>) du spectre de calcul, du coefficient de comportement (<i>R/Q<sub>F</sub></i>) et du rapport (<i>M<sub>ED</sub>/M<sub>RD</sub></i>).
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.36">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>&mu;</mi><mi>&phi;</mi></msub>
                    <mo>=</mo>
                    <mo>{</mo>
                    <mtable columnalign="left">
                        <mtr>
                            <mtd>
                                <mn>2</mn><mo>&sdot;</mo>
                                <mrow>
                                    <mo>(</mo>
                                    <mfrac><mi>R</mi><msub><mi>Q</mi><mi>F</mi></msub></mfrac>
                                    <mo>&sdot;</mo>
                                    <mfrac><msub><mi>M</mi><mtext>ED</mtext></msub><msub><mi>M</text><mtext>RD</mtext></msub></mfrac>
                                    <mo>)</mo>
                                </mrow>
                                <mo>&minus;</mo><mn>1</mn>
                                <mspace width="20px"/><mtext>, si </mtext><msub><mi>T</mi><mn>0</mn></msub><mo>&ge;</mo><msub><mi>T</mi><mn>2</mn></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mn>1</mn><mo>+</mo><mn>2</mn><mo>&sdot;</mo>
                                <mrow>
                                    <mo>[</mo>
                                    <mrow>
                                        <mo>(</mo>
                                        <mfrac><mi>R</mi><msub><mi>Q</mi><mi>F</mi></msub></mfrac>
                                        <mo>&sdot;</mo>
                                        <mfrac><msub><mi>M</mi><mtext>ED</mtext></msub><msub><mi>M</text><mtext>RD</mtext></msub></mfrac>
                                        <mo>)</mo>
                                    </mrow>
                                    <mo>&minus;</mo><mn>1</mn>
                                    <mo>]</mo>
                                </mrow>
                                <mo>&sdot;</mo>
                                <mfrac><msub><mi>T</mi><mn>2</mn></msub><msub><mi>T</mi><mn>0</mn></msub></mfrac>
                                <mspace width="20px"/><mtext>, si </mtext><msub><mi>T</mi><mn>0</mn></msub><mo>&lt;</mo><msub><mi>T</mi><mn>2</mn></msub>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.36)</div>
    </div>

    <p style="text-align: justify;">
        <i>M<sub>ED</sub></i> est le moment fléchissant issu de l'analyse (enveloppe de calcul décalée de <i>h<sub>cr</sub></i>) à la base du mur (cf <a href="#rpa-fig-7.13" class="rpa-link">Figure (7.13)</a>); <i>M<sub>RD</sub></i> est la résistance à la flexion de calcul.
    </p>

    <p style="text-align: justify; text-indent: 20px; margin-top: 15px;">
        La position de l'axe neutre, <i>x<sub>u</sub></i>, correspondant à la courbure ultime après éclatement du béton situé hors du noyau confiné des éléments de rive peut être estimée comme suit :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.37">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>x</mi><mi>u</mi></msub>
                    <mo>=</mo>
                    <mrow>
                        <mo>(</mo>
                        <msub><mi>v</mi><mi>d</mi></msub><mo>+</mo><msub><mi>&omega;</mi><mi>v</mi></msub>
                        <mo>)</mo>
                    </mrow>
                    <mo>&sdot;</mo>
                    <mfrac>
                        <mrow><msub><mi>l</mi><mi>w</mi></msub><mo>&sdot;</mo><msub><mi>b</mi><mi>c</mi></msub></mrow>
                        <msub><mi>b</mi><mn>0</mn></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.37)</div>
    </div>

    <p style="text-align: justify; text-indent: 20px;">
        Les paramètres de l'<a href="#rpa-eqt-7.37" class="rpa-link">Eqn. (7.37)</a> sont définis dans les sections précédentes (cf. <a href="#rpa-eqt-7.11" class="rpa-link">Eqns. (7.11)</a> & <a href="#rpa-eqt-7.34" class="rpa-link">(7.34)</a>, <a href="#rpa-fig-7.16" class="rpa-link">Figures (7.16)</a>).
    </p>
</section>
