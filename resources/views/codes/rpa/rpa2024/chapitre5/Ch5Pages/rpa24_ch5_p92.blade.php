{{-- Chapitre 5 — déplacements inter-étages ; repère imprimé env. p. 92 --}}
<section id="rpa-p92" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex justify-between text-sm text-gray-500 mb-6 border-b border-black pb-1">
        <span>92</span>
        <span class="italic chapter">Chapitre 5. Justification de la sécurité</span>
    </div>

    <section id="rpa-art-5.10" class="mt-2" style="scroll-margin-top: 100px;" aria-labelledby="rpa-ch5-h-5-10">
        <h3 id="rpa-ch5-h-5-10" class="rpa-h2" style="color: #c05621;">5.10 Justification vis-à-vis des déplacements inter-étages</h3>

        <section id="rpa-art-5.10.1" class="mt-6" style="scroll-margin-top: 100px;" aria-labelledby="rpa-ch5-h-5-10-1">
            <h4 id="rpa-ch5-h-5-10-1" class="rpa-h3">5.10.1 Justification de non-effondrement</h4>
            <p class="text-justify mb-4 leading-relaxed">
                Les déplacements relatifs latéraux d'un étage par rapport à l'étage du dessous, tels que calculés selon le <a href="#rpa-art-4.5.2" class="rpa-inline-link">paragraphe 4.5.2</a>, ne doivent pas dépasser les limites <math xmlns="http://www.w3.org/1998/Math/MathML" class="inline"><mover><mi>&Delta;</mi><mo>&OverBar;</mo></mover></math><sub>k</sub> données dans le <a href="#rpa-table-5.2" class="rpa-inline-link">tableau 5.2</a> et l'<a href="#rpa-eqt-5.11" class="rpa-inline-link">équation (5.11)</a>, soit :
            </p>

            <div class="rpa-equation-container" id="rpa-eqt-5.11">
                <div class="rpa-equation">
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mrow>
                            <msub><mi>&Delta;</mi><mi>k</mi></msub>
                            <mo>&le;</mo>
                            <msub><mover><mi>&Delta;</mi><mo>&OverBar;</mo></mover><mi>k</mi></msub>
                        </mrow>
                    </math>
                </div>
                <div class="rpa-eq-num">(5.11)</div>
            </div>

            <div class="rpa-table-container overflow-x-auto mt-6">
                <table class="rpa-table min-w-[280px]" id="rpa-table-5.2">
                    <caption class="text-left text-sm font-semibold mb-3 px-1">Tableau 5.2 — Valeurs limites des déplacements inter-étages (<i>h<sub>k</sub></i> : hauteur du niveau « k »)</caption>
                    <thead>
                        <tr>
                            <th scope="col">Type de structure</th>
                            <th scope="col">Déplacement limite <math xmlns="http://www.w3.org/1998/Math/MathML" class="inline"><mover><mi>&Delta;</mi><mo>&OverBar;</mo></mover></math><sub>k</sub></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><th scope="row">Bâtiments en acier</th><td>0,0200 <i>h<sub>k</sub></i></td></tr>
                        <tr><th scope="row">Bâtiments en béton armé</th><td>0,0150 <i>h<sub>k</sub></i></td></tr>
                        <tr><th scope="row">Bâtiment en PAF</th><td>0,0100 <i>h<sub>k</sub></i></td></tr>
                        <tr><th scope="row">Bâtiments en bois</th><td>0,0150 <i>h<sub>k</sub></i></td></tr>
                        <tr><th scope="row">Bâtiments en maçonnerie chaînée</th><td>0,0100 <i>h<sub>k</sub></i></td></tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section id="rpa-art-5.10.2" class="mt-12" style="scroll-margin-top: 100px;" aria-labelledby="rpa-ch5-h-5-10-2">
            <h4 id="rpa-ch5-h-5-10-2" class="rpa-h3">5.10.2 Justification de limitation des dommages</h4>
            <p class="text-justify mb-4 leading-relaxed">
                Les déplacements relatifs latéraux d'un étage par rapport à l'étage du dessous, tels que calculés selon le <a href="#rpa-art-4.5.2" class="rpa-inline-link">paragraphe 4.5.2</a>, ne doivent pas dépasser les limites suivantes :
            </p>
            <ol class="list-decimal ml-8 space-y-6">
                <li>
                    <p class="mb-2 text-justify leading-relaxed">Pour les bâtiments ayant des éléments non structuraux composés de matériaux fragiles fixés à la structure :</p>
                    <div class="rpa-equation-container" id="rpa-eqt-5.12">
                        <div class="rpa-equation">
                            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                                <mrow>
                                    <msub><mi>&nu;</mi><mi>A</mi></msub>
                                    <mo>&sdot;</mo>
                                    <msub><mi>&Delta;</mi><mi>k</mi></msub>
                                    <mo>&le;</mo>
                                    <mn>0.005</mn>
                                    <msub><mi>h</mi><mi>k</mi></msub>
                                </mrow>
                            </math>
                        </div>
                        <div class="rpa-eq-num">(5.12)</div>
                    </div>
                </li>
                <li>
                    <p class="mb-2 text-justify leading-relaxed">Pour les bâtiments ayant des éléments non structuraux ductiles :</p>
                    <div class="rpa-equation-container" id="rpa-eqt-5.13">
                        <div class="rpa-equation">
                            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                                <mrow>
                                    <msub><mi>&nu;</mi><mi>A</mi></msub>
                                    <mo>&sdot;</mo>
                                    <msub><mi>&Delta;</mi><mi>k</mi></msub>
                                    <mo>&le;</mo>
                                    <mn>0.0075</mn>
                                    <msub><mi>h</mi><mi>k</mi></msub>
                                </mrow>
                            </math>
                        </div>
                        <div class="rpa-eq-num">(5.13)</div>
                    </div>
                </li>
            </ol>
            <p class="mt-4 text-justify italic leading-relaxed">Le coefficient réducteur <i>ν<sub>A</sub></i> est défini au paragraphe 1.2. Il est pris égal à 0,5.</p>
        </section>
    </section>
</section>
