{{-- ==================== PAGE 63 ==================== --}}
<section id="rpa-p63" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header">
        <span>3.5 Classification des systèmes de contreventement</span>
        <span>63</span>
    </div>

    <div class="mt-4">
        <h4 class="font-bold underline">6. Système à ossature à noyau ou à effet noyau</h4>
        <p style="text-align: justify;">
            Système à contreventement mixte ou système de voiles, dont la rigidité à la torsion n'atteint pas une valeur seuil minimale et dont les rayons de torsion, <i>r<sub>x</sub></i> et <i>r<sub>y</sub></i>, sont inférieurs au rayon de giration, <i>l<sub>s</sub></i>, du plancher, cf. Figure (3.7):
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-3.17">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mo>{</mo>
                        <mtable columnalign="left">
                            <mtr>
                                <mtd><msub><mi>r</mi><mi>x</mi></msub><mo>&le;</mo><msub><mi>l</mi><mi>s</mi></msub></mtd>
                            </mtr>
                            <mtr>
                                <mtd><mtext>et</mtext></mtd>
                            </mtr>
                            <mtr>
                                <mtd><msub><mi>r</mi><mi>y</mi></msub><mo>&le;</mo><msub><mi>l</mi><mi>s</mi></msub></mtd>
                            </mtr>
                        </mtable>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(3.17)</div>
        </div>

        <div class="mt-4">
            où:
            <div class="rpa-indent space-y-1">
                <div class="rpa-bullet">• <i>r<sub>x</sub></i> et <i>r<sub>y</sub></i> représentent, respectivement, les rayons de torsion suivant x et y.</div>
                <div class="rpa-bullet">• <i>l<sub>s</sub></i> (cf. Eqn. (3.22)): Rayon de giration massique en plan, qui est la racine carrée du moment d'inertie polaire du plancher en plan, mesuré par rapport au centre de gravité de ce plancher, divisé par la masse de ce plancher.</div>
            </div>
        </div>

        <p class="italic mt-6" style="text-align: justify;">
            Commentaire (1): Les systèmes de contreventement (1) à (5), qui ne présentent pas une rigidité à la torsion minimale définie par Eqn. (3.17), dans les deux directions horizontales orthogonales, sont classés comme système à noyau ou à effet noyau.
        </p>
        <p class="italic mt-4" style="text-align: justify;">
            Commentaire (2) : L'exemple d'un tel système est une structure composée d'ossatures flexibles combinées avec des voiles, concentrés en plan, à proximité du centre du bâtiment.
        </p>

        <div class="mt-6">
            <p>Raideur de translation :</p>
            <div class="rpa-equation-container" id="rpa-eqt-3.18">
                <div class="rpa-equation">
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mrow>
                            <mo>{</mo>
                            <mtable columnalign="left">
                                <mtr>
                                    <mtd><mo>&sum;</mo><msub><mi>I</mi><mrow><mi>x</mi><mi>i</mi></mrow></msub></mtd>
                                </mtr>
                                <mtr>
                                    <mtd><mtext>et</mtext></mtd>
                                </mtr>
                                <mtr>
                                    <mtd><mo>&sum;</mo><msub><mi>I</mi><mrow><mi>y</mi><mi>i</mi></mrow></msub></mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </math>
                </div>
                <div class="rpa-eq-num">(3.18)</div>
            </div>
        </div>

        <div class="mt-6">
            <p>Raideur de torsion</p>
            <div class="rpa-equation-container" id="rpa-eqt-3.19">
                <div class="rpa-equation">
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mrow>
                            <mo>&sum;</mo><mo>[</mo><msubsup><mi>x</mi><mi>i</mi><mn>2</mn></msubsup><mo>&sdot;</mo><msub><mi>I</mi><mrow><mi>x</mi><mi>i</mi></mrow></msub><mo>+</mo><msubsup><mi>y</mi><mi>i</mi><mn>2</mn></msubsup><mo>&sdot;</mo><msub><mi>I</mi><mrow><mi>y</mi><mi>i</mi></mrow></msub><mo>]</mo>
                        </mrow>
                    </math>
                </div>
                <div class="rpa-eq-num">(3.19)</div>
            </div>
        </div>

        <div class="mt-6">
            <p>Rayons de torsion, <i>r<sub>x</sub></i> et <i>r<sub>y</sub></i> : racines carrées de la rigidité à la torsion, i.e.</p>
            <div class="rpa-equation-container" id="rpa-eqt-3.20">
                <div class="rpa-equation">
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mrow>
                            <mo>{</mo>
                            <mtable columnalign="left">
                                <mtr>
                                    <mtd>
                                        <msub><mi>r</mi><mi>x</mi></msub>
                                        <mo>=</mo>
                                        <msqrt>
                                            <mfrac>
                                                <mrow><mo>&sum;</mo><mo>[</mo><msubsup><mi>x</mi><mi>i</mi><mn>2</mn></msubsup><mo>&sdot;</mo><msub><mi>I</mi><mrow><mi>x</mi><mi>i</mi></mrow></msub><mo>+</mo><msubsup><mi>y</mi><mi>i</mi><mn>2</mn></msubsup><mo>&sdot;</mo><msub><mi>I</mi><mrow><mi>y</mi><mi>i</mi></mrow></msub><mo>]</mo></mrow>
                                                <mrow><mo>&sum;</mo><msub><mi>I</mi><mrow><mi>x</mi><mi>i</mi></mrow></msub></mrow>
                                            </mfrac>
                                        </msqrt>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd><mtext>et</mtext></mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <msub><mi>r</mi><mi>y</mi></msub>
                                        <mo>=</mo>
                                        <msqrt>
                                            <mfrac>
                                                <mrow><mo>&sum;</mo><mo>[</mo><msubsup><mi>x</mi><mi>i</mi><mn>2</mn></msubsup><mo>&sdot;</mo><msub><mi>I</mi><mrow><mi>x</mi><mi>i</mi></mrow></msub><mo>+</mo><msubsup><mi>y</mi><mi>i</mi><mn>2</mn></msubsup><mo>&sdot;</mo><msub><mi>I</mi><mrow><mi>y</mi><mi>i</mi></mrow></msub><mo>]</mo></mrow>
                                                <mrow><mo>&sum;</mo><msub><mi>I</mi><mrow><mi>y</mi><mi>i</mi></mrow></msub></mrow>
                                            </mfrac>
                                        </msqrt>
                                    </mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </math>
                </div>
                <div class="rpa-eq-num">(3.20)</div>
            </div>
        </div>

        <p class="mt-4"><b>G :</b> Centre de gravité des masses mj du/ou associées au plancher</p>
        <p class="mt-2"><b>T :</b> Centre de torsion</p>

        <div class="mt-6">
            <p>Moment d'inertie polaire:</p>
            <div class="rpa-equation-container" id="rpa-eqt-3.21">
                <div class="rpa-equation">
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mrow>
                            <mo>&sum;</mo><msub><mi>m</mi><mi>j</mi></msub><mo>&sdot;</mo><mo>(</mo><msubsup><mi>x</mi><mi>j</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>y</mi><mi>j</mi><mn>2</mn></msubsup><mo>)</mo>
                        </mrow>
                    </math>
                </div>
                <div class="rpa-eq-num">(3.21)</div>
            </div>
        </div>

        <div class="mt-6">
            <div class="rpa-equation-container" id="rpa-eqt-3.22">
                <div class="rpa-equation">
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mrow>
                            <msub><mi>l</mi><mi>s</mi></msub>
                            <mo>=</mo>
                            <msqrt>
                                <mfrac>
                                    <mrow><mo>&sum;</mo><msub><mi>m</mi><mi>j</mi></msub><mo>&sdot;</mo><mo>(</mo><msubsup><mi>x</mi><mi>j</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>y</mi><mi>j</mi><mn>2</mn></msubsup><mo>)</mo></mrow>
                                    <mrow><mo>&sum;</mo><msub><mi>m</mi><mi>j</mi></msub></mrow>
                                </mfrac>
                            </msqrt>
                        </mrow>
                    </math>
                </div>
                <div class="rpa-eq-num">(3.22)</div>
            </div>
        </div>
    </div>
</section>
