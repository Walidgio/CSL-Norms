{{-- Chapitre 5 — planchers, fondations, joints ; repère imprimé env. p. 90 --}}
<section id="rpa-p90" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    @include('norms::codes.rpa.rpa2024.partials.rpa-page-header', ['page' => 90, 'meta' => 'norms::codes.rpa.rpa2024.partials.ch5-running-meta'])

    <section id="rpa-art-5.6" style="scroll-margin-top: 100px;" aria-labelledby="rpa-ch5-h-5-6">
        <h3 id="rpa-ch5-h-5-6" class="rpa-h2">5.6 Justification vis-à-vis de la résistance des planchers</h3>
        <p class="text-justify leading-relaxed">
            Les diaphragmes, dans les plans horizontaux, doivent pouvoir transmettre les effets de l'action sismique aux divers contreventements auxquels ils sont liés. Cette prescription est considérée comme satisfaite si, pour effectuer les vérifications de résistance appropriées, la force sismique dans le diaphragme est calculée selon le paragraphe 6.1.2.
        </p>
    </section>

    <section id="rpa-art-5.7" class="mt-10" style="scroll-margin-top: 100px;" aria-labelledby="rpa-ch5-h-5-7">
        <h3 id="rpa-ch5-h-5-7" class="rpa-h2">5.7 Justification de la stabilité des fondations</h3>
        <p class="text-justify mb-4 leading-relaxed">
            Pour les justifications de la stabilité des fondations, il y a lieu de se référer aux prescriptions et/ou exigences du <strong>chapitre 10</strong> et aux combinaisons d'actions, cf. <a href="#rpa-eqt-5.6" class="rpa-inline-link">équations (5.6)</a> et <a href="#rpa-eqt-5.7" class="rpa-inline-link">(5.7)</a> :
        </p>
        <ul class="list-disc ml-8 mb-4 space-y-3">
            <li>
                <span>Pour les fondations d'éléments verticaux individuels (voiles ou poteaux), la combinaison de charges suivante est utilisée :</span>
                <div class="rpa-equation-container mt-4" id="rpa-eqt-5.6">
                    <div class="rpa-equation">
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mrow>
                                <mo>{</mo>
                                <mtable columnalign="left">
                                    <mtr>
                                        <mtd>
                                            <mi>G</mi>
                                            <mo>+</mo>
                                            <mi>&psi;</mi>
                                            <mo>&sdot;</mo>
                                            <mi>Q</mi>
                                            <mo>&plusmn;</mo>
                                            <mfrac><mi>R</mi><msub><mi>Q</mi><mi>F</mi></msub></mfrac>
                                            <mo>&sdot;</mo>
                                            <msub><mi>E</mi><mn>1</mn></msub>
                                        </mtd>
                                    </mtr>
                                    <mtr>
                                        <mtd>
                                            <mi>G</mi>
                                            <mo>+</mo>
                                            <mi>&psi;</mi>
                                            <mo>&sdot;</mo>
                                            <mi>Q</mi>
                                            <mo>&plusmn;</mo>
                                            <mfrac><mi>R</mi><msub><mi>Q</mi><mi>F</mi></msub></mfrac>
                                            <mo>&sdot;</mo>
                                            <msub><mi>E</mi><mn>2</mn></msub>
                                        </mtd>
                                    </mtr>
                                </mtable>
                            </mrow>
                        </math>
                    </div>
                    <div class="rpa-eq-num">(5.6)</div>
                </div>
            </li>
            <li>
                <span>Pour les fondations communes à plusieurs éléments verticaux (longrines de fondation, semelles filantes, radiers, etc.), la combinaison d'actions suivante est utilisée :</span>
                <div class="rpa-equation-container mt-4" id="rpa-eqt-5.7">
                    <div class="rpa-equation">
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mrow>
                                <mo>{</mo>
                                <mtable columnalign="left">
                                    <mtr>
                                        <mtd>
                                            <mi>G</mi>
                                            <mo>+</mo>
                                            <mi>&psi;</mi>
                                            <mo>&sdot;</mo>
                                            <mi>Q</mi>
                                            <mo>&plusmn;</mo>
                                            <mn>1.4</mn>
                                            <msub><mi>E</mi><mn>1</mn></msub>
                                        </mtd>
                                    </mtr>
                                    <mtr>
                                        <mtd>
                                            <mi>G</mi>
                                            <mo>+</mo>
                                            <mi>&psi;</mi>
                                            <mo>&sdot;</mo>
                                            <mi>Q</mi>
                                            <mo>&plusmn;</mo>
                                            <mn>1.4</mn>
                                            <msub><mi>E</mi><mn>2</mn></msub>
                                        </mtd>
                                    </mtr>
                                </mtable>
                            </mrow>
                        </math>
                    </div>
                    <div class="rpa-eq-num">(5.7)</div>
                </div>
            </li>
        </ul>
    </section>

    <section id="rpa-art-5.8" class="mt-10" style="scroll-margin-top: 100px;" aria-labelledby="rpa-ch5-h-5-8">
        <h3 id="rpa-ch5-h-5-8" class="rpa-h2">5.8 Justification de la largeur des joints sismiques</h3>
        <p class="text-justify mb-4 leading-relaxed">
            Deux blocs voisins doivent être séparés par des joints sismiques dont la largeur minimale <i>d<sub>min</sub></i> satisfait la condition suivante :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-5.8">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>d</mi><mrow><mi>m</mi><mi>i</mi><mi>n</mi></mrow></msub>
                        <mo>=</mo>
                        <mi>M</mi><mi>a</mi><mi>x</mi>
                        <mrow>
                            <mo>{</mo>
                            <mtable columnalign="left">
                                <mtr>
                                    <mtd>
                                        <msqrt>
                                            <mrow>
                                                <mo>(</mo>
                                                <msubsup><mi>&delta;</mi><mn>1</mn><mn>2</mn></msubsup>
                                                <mo>+</mo>
                                                <msubsup><mi>&delta;</mi><mn>2</mn><mn>2</mn></msubsup>
                                                <mo>)</mo>
                                            </mrow>
                                        </msqrt>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>40</mn>
                                        <mi>m</mi><mi>m</mi>
                                    </mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(5.8)</div>
        </div>

        <p class="mt-4 text-justify leading-relaxed">
            <i>δ</i><sub>1</sub> et <i>δ</i><sub>2</sub> : déplacements maximaux des deux blocs, calculés selon le <a href="#rpa-art-4.5.2" class="rpa-inline-link">paragraphe 4.5.2</a>, au niveau du sommet du bloc le moins élevé, incluant les composantes dues à la torsion et éventuellement celles dues à la rotation des fondations.
        </p>
    </section>

    @include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [
        'id' => 'rpa-fig-5.1',
        'kicker' => 'Joints sismiques',
        'caption' => 'Figure 5.1 — Largeur minimale du joint sismique',
        'svg' => 'norms::codes.rpa.rpa2024.chapitre5.Ch5Svg.rpa24_ch5_fig5_1',
    ])
</section>
