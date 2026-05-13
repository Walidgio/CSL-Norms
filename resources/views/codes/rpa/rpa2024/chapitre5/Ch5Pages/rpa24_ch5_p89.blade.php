{{-- Chapitre 5 — résistance, ductilité, équilibre ; repère imprimé env. p. 89 --}}
<section id="rpa-p89" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex justify-between text-sm text-gray-500 mb-6 border-b border-black pb-1">
        <span>89</span>
        <span class="italic chapter">Chapitre 5. Justification de la sécurité</span>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-5.3">
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
                                <mo>+</mo>
                                <msub><mi>E</mi><mn>3</mn></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mi>G</mi>
                                <mo>+</mo>
                                <mi>&psi;</mi>
                                <mo>&sdot;</mo>
                                <mi>Q</mi>
                                <mo>+</mo>
                                <msub><mi>E</mi><mn>4</mn></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mi>G</mi>
                                <mo>+</mo>
                                <mi>&psi;</mi>
                                <mo>&sdot;</mo>
                                <mi>Q</mi>
                                <mo>+</mo>
                                <msub><mi>E</mi><mn>5</mn></msub>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(5.3)</div>
    </div>

    <p class="mt-4 text-justify leading-relaxed">
        où <i>E<sub>3</sub></i>, <i>E<sub>4</sub></i> et <i>E<sub>5</sub></i> représentent la combinaison des composantes horizontales (<i>E<sub>x</sub></i>, <i>E<sub>y</sub></i>) et la composante verticale (<i>E<sub>z</sub></i>), définies par :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-5.4">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mo>{</mo>
                    <mtable columnalign="left">
                        <mtr>
                            <mtd>
                                <msub><mi>E</mi><mn>3</mn></msub>
                                <mo>=</mo>
                                <mo>&plusmn;</mo>
                                <msub><mi>E</mi><mi>x</mi></msub>
                                <mo>&plusmn;</mo>
                                <mn>0.3</mn>
                                <msub><mi>E</mi><mi>y</mi></msub>
                                <mo>&plusmn;</mo>
                                <mn>0.3</mn>
                                <msub><mi>E</mi><mi>z</mi></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <msub><mi>E</mi><mn>4</mn></msub>
                                <mo>=</mo>
                                <mo>&plusmn;</mo>
                                <mn>0.3</mn>
                                <msub><mi>E</mi><mi>x</mi></msub>
                                <mo>&plusmn;</mo>
                                <msub><mi>E</mi><mi>y</mi></msub>
                                <mo>&plusmn;</mo>
                                <mn>0.3</mn>
                                <msub><mi>E</mi><mi>z</mi></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <msub><mi>E</mi><mn>5</mn></msub>
                                <mo>=</mo>
                                <mo>&plusmn;</mo>
                                <mn>0.3</mn>
                                <msub><mi>E</mi><mi>x</mi></msub>
                                <mo>&plusmn;</mo>
                                <mn>0.3</mn>
                                <msub><mi>E</mi><mi>y</mi></msub>
                                <mo>&plusmn;</mo>
                                <msub><mi>E</mi><mi>z</mi></msub>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(5.4)</div>
    </div>

    <aside class="rpa-comment-box mt-8 border-l-4 border-amber-200 bg-amber-50/40 dark:bg-amber-950/20 pl-4 py-3 pr-2 rounded-r-lg" aria-label="Commentaire réglementaire">
        <p class="font-bold italic mb-2">Commentaire</p>
        <ul class="list-disc ml-5 text-sm space-y-2 leading-relaxed">
            <li>L'analyse permettant de déterminer les effets de la composante verticale de l'action sismique peut être réalisée sur la base d'un modèle partiel de la structure qui inclut les éléments dans lesquels la composante verticale est supposée agir, et prend en compte la rigidité des éléments adjacents.</li>
            <li>Il est nécessaire de prendre en compte les effets de la composante verticale seulement pour les éléments considérés et pour les éléments supports ou les infrastructures qui leur sont directement associés.</li>
        </ul>
    </aside>

    <section id="rpa-art-5.3" class="mt-10" style="scroll-margin-top: 100px;" aria-labelledby="rpa-ch5-h-5-3">
        <h3 id="rpa-ch5-h-5-3" class="rpa-h2" style="color: #c05621;">5.3 Justification vis-à-vis de la résistance</h3>
        <p class="text-justify mb-4 leading-relaxed">
            La condition de résistance suivante doit être satisfaite pour tous les éléments structuraux, leurs assemblages, ainsi que les éléments non structuraux critiques :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-5.5">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>S</mi><mi>d</mi></msub>
                        <mo>&le;</mo>
                        <msub><mi>R</mi><mi>d</mi></msub>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(5.5)</div>
        </div>

        <p class="mt-4 text-justify leading-relaxed">où <i>S<sub>d</sub></i> : sollicitation agissante de calcul résultant des combinaisons <a href="#rpa-eqt-5.1" class="rpa-inline-link">(5.1)</a> à <a href="#rpa-eqt-5.4" class="rpa-inline-link">(5.4)</a>, incluant éventuellement les effets du 2<sup>e</sup> ordre.</p>
        <p class="mt-2 text-justify leading-relaxed"><i>R<sub>d</sub></i> : sollicitation résistante de calcul de l'élément, calculée en fonction des propriétés du matériau constitutif.</p>
    </section>

    <section id="rpa-art-5.4" class="mt-10" style="scroll-margin-top: 100px;" aria-labelledby="rpa-ch5-h-5-4">
        <h3 id="rpa-ch5-h-5-4" class="rpa-h2" style="color: #c05621;">5.4 Justification vis-à-vis de la ductilité</h3>
        <p class="text-justify leading-relaxed">
            Les exigences de ductilité minimale sont réputées satisfaites si toutes les dispositions constructives relatives au matériau et aux éléments structuraux telles que définies dans les chapitres correspondants du présent document technique réglementaire sont appliquées.
        </p>
    </section>

    <section id="rpa-art-5.5" class="mt-10" style="scroll-margin-top: 100px;" aria-labelledby="rpa-ch5-h-5-5">
        <h3 id="rpa-ch5-h-5-5" class="rpa-h2" style="color: #c05621;">5.5 Justification vis-à-vis de l'équilibre d'ensemble</h3>
        <p class="text-justify mb-4 leading-relaxed">
            Cette condition d'équilibre se réfère à la stabilité d'ensemble du bâtiment ou de l'ouvrage, soumis à des effets de renversement et/ou de glissement dus aux sollicitations résultant des combinaisons d'actions.
        </p>
        <p class="text-justify mb-3 leading-relaxed">Chaque bâtiment doit être vérifié vis-à-vis de la stabilité au renversement par rapport au niveau de ses fondations.</p>
        <p class="text-justify mb-3 leading-relaxed">Le moment de renversement, au niveau des fondations, est égal à la somme des forces latérales, à chaque niveau, multipliées par la hauteur de chacune d'entre elles, depuis le niveau de fondation.</p>
        <p class="text-justify mb-4 leading-relaxed">Le coefficient de sécurité vis-à-vis du renversement doit être au minimum de 1,3.</p>
        <p class="text-justify mb-3 leading-relaxed">
            Le moment stabilisant doit être déterminé à partir des charges verticales qui sont considérées pour la détermination de la force sismique latérale.
        </p>
        <p class="text-justify mb-3 leading-relaxed">
            Les poids de la fondation et du sol, au-dessus, sont ajoutés à ces charges verticales.
        </p>
        <p class="text-justify mb-3 leading-relaxed">
            Le moment stabilisant doit être calculé au niveau bas de la fondation, par rapport au bord extrême.
        </p>
        <p class="text-justify leading-relaxed">
            Pour la stabilité au glissement, dans le cas où sa vérification est nécessaire, le coefficient de sécurité à prendre est de 1,25 au minimum.
        </p>
    </section>
</section>
