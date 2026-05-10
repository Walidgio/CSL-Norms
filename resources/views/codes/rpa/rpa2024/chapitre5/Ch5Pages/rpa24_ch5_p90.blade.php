{{-- ==================== PAGE 90 ==================== --}}
<section id="rpa-p90" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header">
        <span>90</span>
        <span class="chapter">Chapter 5. JUSTIFICATION DE LA SECURITE</span>
    </div>

    <p class="text-justify mb-4">
        Le moment stabilisant doit être déterminé à partir des charges verticales qui sont considérées pour la détermination de la force sismique latérale.
    </p>
    <p class="text-justify mb-4">
        Les poids de la fondation et du sol, au-dessus, sont ajoutés à ces charges verticales.
    </p>
    <p class="text-justify mb-4">
        Le moment stabilisant doit être calculé au niveau bas de la fondation, par rapport au bord extrême.
    </p>
    <p class="text-justify mb-4">
        Pour la stabilité au glissement, dans le cas où sa vérification est nécessaire, le coefficient de sécurité à prendre est de 1.25 au minimum.
    </p>

    <div id="rpa-art-5.6" class="mt-8" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2" style="color: #c05621;">5.6 Justification vis-à-vis de la résistance des planchers</h2>
        <p class="text-justify mb-4">
            Les diaphragmes, dans les plans horizontaux, doivent pouvoir transmettre, les effets de l'action sismique aux divers contreventements auxquels ils sont liés. Cette prescription est considérée comme satisfaite si, pour effectuer les vérifications de résistance appropriées, la force sismique dans le diaphragme est calculée selon le &sect; 6.1.2.
        </p>
    </div>

    <div id="rpa-art-5.7" class="mt-8" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2" style="color: #c05621;">5.7 Justification de la stabilité des fondations</h2>
        <p class="text-justify mb-4">
            Pour les justifications de la stabilité des fondations, il y a lieu de se référer aux prescriptions et /ou exigences du <b>Chapitre 10</b> et aux combinaisons d'actions, cf. Eqns. (5.6) & (5.7) :
        </p>
        <ul class="rpa-list-disc ml-8 mb-4">
            <li>Pour les fondations d'éléments verticaux individuels (voiles ou poteaux), la combinaison de charges suivante est utilisée :</li>
        </ul>

        <div class="rpa-equation-container" id="rpa-eqt-5.6">
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

        <ul class="rpa-list-disc ml-8 mb-4 mt-6">
            <li>Pour les fondations communes à plusieurs éléments verticaux (longrines de fondation, semelles filantes, radiers, etc), la combinaison d'actions suivante est utilisée :</li>
        </ul>

        <div class="rpa-equation-container" id="rpa-eqt-5.7">
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
    </div>

    <div id="rpa-art-5.8" class="mt-8" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2" style="color: #c05621;">5.8 Justification de la largeur des joints sismiques</h2>
        <p class="text-justify mb-4">
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

        <p class="mt-4 text-justify">
            &delta;<sub>1</sub> et &delta;<sub>2</sub> : déplacements maximaux des deux blocs, calculés selon &sect; 4.5.2, au niveau du sommet du bloc le moins élevé incluant les composantes dues à la torsion et éventuellement celles dues à la rotation des fondations.
        </p>
    </div>
</section>
