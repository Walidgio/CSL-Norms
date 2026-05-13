{{-- Chapitre 5 — effet P-Δ ; repère imprimé env. p. 91 --}}
<section id="rpa-p91" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex justify-between text-sm text-gray-500 mb-6 border-b border-black pb-1">
        <span>91</span>
        <span class="italic chapter">Chapitre 5. Justification de la sécurité</span>
    </div>

    <section id="rpa-art-5.9" class="mt-2" style="scroll-margin-top: 100px;" aria-labelledby="rpa-ch5-h-5-9">
        <h3 id="rpa-ch5-h-5-9" class="rpa-h2" style="color: #c05621;">5.9 Justification vis-à-vis de l'effet P-Δ</h3>
        <p class="text-justify mb-4 leading-relaxed">
            Les effets du 2<sup>e</sup> ordre (ou effet P-Δ) peuvent être négligés dans le cas des bâtiments si la condition suivante est satisfaite à tous les niveaux :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-5.9">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
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
                        <mo>&le;</mo>
                        <mn>0.10</mn>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(5.9)</div>
        </div>

        <p class="mt-4 mb-2 font-medium">avec :</p>
        <ul class="list-disc ml-8 space-y-4">
            <li>
                <span><i>P<sub>k</sub></i> : poids total de la structure et des charges d'exploitation, au-dessus du niveau « k » (cf. <a href="#rpa-art-4.2.3" class="rpa-inline-link">paragraphe 4.2.3</a>) :</span>
                <div class="rpa-equation-container mt-3" id="rpa-eqt-5.10">
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
            </li>
            <li>
                <i>V<sub>k</sub></i> : effort tranchant d'étage au niveau « k » :
                <span class="block mt-2 ml-0 sm:ml-4">
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mrow>
                            <msub><mi>V</mi><mi>k</mi></msub>
                            <mo>=</mo>
                            <munderover>
                                <mo>&sum;</mo>
                                <mrow><mi>i</mi><mo>=</mo><mi>k</mi></mrow>
                                <mi>n</mi>
                            </munderover>
                            <msub><mi>F</mi><mi>i</mi></msub>
                        </mrow>
                    </math>
                </span>
            </li>
            <li><i>Δ<sub>k</sub></i> : déplacement relatif du niveau « k » par rapport au niveau « k − 1 » (cf. <a href="#rpa-art-4.5.2" class="rpa-inline-link">paragraphe 4.5.2</a> et l'<a href="#rpa-eqt-4.16" class="rpa-inline-link">équation (4.16)</a>).</li>
            <li><i>h<sub>k</sub></i> : hauteur du niveau « k ».</li>
        </ul>

        <p class="mt-8 text-justify leading-relaxed">Selon la valeur de <i>θ<sub>k</sub></i>, il convient de considérer que :</p>
        <ul class="list-disc ml-8 mt-3 space-y-2">
            <li>si <i>θ<sub>k</sub></i> ≤ 0,10 : les effets P-Δ sont négligés ;</li>
            <li>si 0,10 &lt; <i>θ<sub>k</sub></i> ≤ 0,20 : les effets P-Δ peuvent être pris en compte de manière approchée en amplifiant les effets de l'action sismique calculés au moyen d'une analyse élastique du 1<sup>er</sup> ordre par le facteur <math xmlns="http://www.w3.org/1998/Math/MathML" class="inline"><mrow><mn>1</mn><mo>/</mo><mo>(</mo><mn>1</mn><mo>&minus;</mo><msub><mi>&theta;</mi><mi>k</mi></msub><mo>)</mo></mrow></math> ;</li>
            <li>si <i>θ<sub>k</sub></i> &gt; 0,20 : la structure est potentiellement instable et doit être redimensionnée.</li>
        </ul>
    </section>

    <figure id="rpa-fig-5.2" class="flex flex-col items-center mt-10 mb-2" style="scroll-margin-top: 100px;">
        <figcaption class="text-sm font-bold mb-4 text-center max-w-lg">Figure 5.2 — Effet P-Δ</figcaption>
        <div class="w-full flex justify-center" aria-hidden="true">
            @include('norms::codes.rpa.rpa2024.chapitre5.Ch5Svg.rpa24_ch5_fig5_2')
        </div>
    </figure>
</section>
