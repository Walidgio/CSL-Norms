{{-- ==================== PAGE 92 ==================== --}}
<section id="rpa-p92" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header">
        <span>92</span>
        <span class="chapter">Chapter 5. JUSTIFICATION DE LA SECURITE</span>
    </div>

    <div class="flex flex-col items-center my-8">
        <p class="text-sm font-bold mb-4">Figure 5.2: Effet P-&Delta;</p>
        @include('norms::codes.rpa.rpa2024.chapitre5.Ch5Svg.rpa24_ch5_fig5_2')
    </div>

    <div id="rpa-art-5.10" class="mt-8" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2" style="color: #c05621;">5.10 Justification vis-à-vis des déplacements inter-étages</h2>
        
        <div id="rpa-art-5.10.1" style="scroll-margin-top: 100px;">
            <h3 class="rpa-h3">5.10.1 Justification de non-effondrement</h3>
            <p class="text-justify mb-4">
                Les déplacements relatifs latéraux, d'un étage par rapport à l'étage du dessous, tels que calculés selon &sect; 4.5.2, ne doivent pas dépasser les limites, <math><mover><mi>&Delta;</mi><mo>&OverBar;</mo></mover></math><sub>k</sub>, données dans le Tableau (5.2) et Eqn. (5.11), i.e. :
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

            <div class="rpa-table-container mt-6">
                <table class="rpa-table">
                    <thead>
                        <tr>
                            <th>Type de Structure</th>
                            <th>Déplacement limite: <math><mover><mi>&Delta;</mi><mo>&OverBar;</mo></mover></math><sub>k</sub></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Bâtiments en Acier</td><td>0.0200 h<sub>k</sub></td></tr>
                        <tr><td>Bâtiments en Béton Armé</td><td>0.0150 h<sub>k</sub></td></tr>
                        <tr><td>Bâtiment en PAF</td><td>0.0100 h<sub>k</sub></td></tr>
                        <tr><td>Bâtiments en Bois</td><td>0.0150 h<sub>k</sub></td></tr>
                        <tr><td>Bâtiments en Maçonnerie Chainée</td><td>0.0100 h<sub>k</sub></td></tr>
                    </tbody>
                </table>
                <p class="text-xs italic mt-2">Légende: h<sub>k</sub> est la hauteur du niveau &laquo; k &raquo;</p>
            </div>
            <p class="text-center font-bold text-sm mt-2">Table 5.2: Valeurs limites des déplacements inter-étages</p>
        </div>

        <div id="rpa-art-5.10.2" class="mt-12" style="scroll-margin-top: 100px;">
            <h3 class="rpa-h3">5.10.2 Justification de limitation des dommages</h3>
            <p class="text-justify mb-4">
                Les déplacements relatifs latéraux, d'un étage par rapport à l'étage du dessous, tels que calculés selon &sect; 4.5.2, ne doivent pas dépasser les limites suivantes :
            </p>
            <ol class="list-decimal ml-10 space-y-4">
                <li>
                    <p class="mb-2">pour les bâtiments ayant des éléments non structuraux composés de matériaux fragiles fixés à la structure :</p>
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
                    <p class="mb-2">pour les bâtiments ayant des éléments non structuraux ductiles :</p>
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
            <p class="mt-4 italic">Le coefficient réducteur &nu;<sub>A</sub> est défini en &sect; 1.2. Il est pris égal à 0.5.</p>
        </div>
    </div>
</section>
