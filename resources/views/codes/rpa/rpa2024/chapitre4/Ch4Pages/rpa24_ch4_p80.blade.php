{{-- ==================== PAGE 80 ==================== --}}
<section id="rpa-p80" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    @include('norms::codes.rpa.rpa2024.partials.rpa-page-header', ['page' => 80, 'meta' => 'norms::codes.rpa.rpa2024.partials.ch4-running-meta'])

    <div class="rpa-table-showcase my-8" id="rpa-table-4.2" style="scroll-margin-top: 100px;">
        <p class="rpa-table-showcase__kicker">Coefficient d'accompagnement</p>
        <div class="rpa-table-showcase__surface overflow-x-auto">
            <table class="rpa-table min-w-[480px]">
                <thead>
                    <tr>
                        <th scope="col">Cas</th>
                        <th scope="col">Nature de la charge d'exploitation</th>
                        <th scope="col">&psi;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>B&acirc;timents d'habitation, bureaux ou assimil&eacute;s</td>
                        <td class="text-center font-semibold">0,20</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>B&acirc;timents accueillant du public de mani&egrave;re temporaire (salles d'exposition, de f&ecirc;tes, lieux de culte, tribunes, stades, etc.)</td>
                        <td class="text-center font-semibold">0,50</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Entrep&ocirc;ts, b&acirc;timents de stockage, parkings, biblioth&egrave;ques et archives</td>
                        <td class="text-center font-semibold">1,00</td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Autres b&acirc;timents (cas &agrave; justifier par le projeteur en fonction de la dur&eacute;e de la charge d'exploitation)</td>
                        <td class="text-center font-semibold">&hellip;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="rpa-table-showcase__caption">Tableau 4.2 — Valeurs du coefficient d'accompagnement &psi;</p>
    </div>

    <div id="rpa-art-4.2.4" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3">4.2.4 Estimation de la période fondamentale de la structure (T)</h3>
        <p class="mb-4 text-justify">
            La valeur de la période fondamentale (T) de la structure peut être estimée à partir de formules empiriques ou calculée par des méthodes analytiques appropriées. La valeur de (T) à utiliser dans la formule (4.1) est la plus petite des valeurs obtenues par les formules empiriques ou par les méthodes analytiques.
        </p>
        <p class="mb-4">Les formules empiriques à utiliser sont :</p>

        <div class="rpa-equation-container" id="rpa-eqt-4.4">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mi>T</mi>
                        <mo>=</mo>
                        <msub><mi>C</mi><mi>t</mi></msub>
                        <mo>&sdot;</mo>
                        <msubsup>
                            <mi>H</mi>
                            <mi>n</mi>
                            <mrow>
                                <mn>3</mn>
                                <mo>/</mo>
                                <mn>4</mn>
                            </mrow>
                        </msubsup>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(4.4)</div>
        </div>

        <p class="mt-4 mb-4">avec :</p>
        <div class="rpa-indent space-y-2">
            <p><i>H<sub>n</sub></i> : hauteur mesurée en mètres à partir de la base du bâtiment jusqu'au dernier niveau.</p>
            <p><i>C<sub>t</sub></i> : coefficient, fonction du système de contreventement, du type de remplissage et donné par le Tableau 4.3.</p>
        </div>

        <div class="rpa-table-showcase my-8" id="rpa-table-4.3" style="scroll-margin-top: 100px;">
            <p class="rpa-table-showcase__kicker">P&eacute;riode fondamentale — coefficient <i>C<sub>t</sub></i></p>
            <div class="rpa-table-showcase__surface overflow-x-auto">
                <table class="rpa-table min-w-[480px]">
                    <thead>
                        <tr>
                            <th scope="col">Cas n&deg;</th>
                            <th scope="col">Syst&egrave;me de contreventement</th>
                            <th scope="col"><i>C<sub>t</sub></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Portiques autostables en b&eacute;ton arm&eacute; sans remplissage en ma&ccedil;onnerie</td>
                            <td class="text-center font-semibold">0,075</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Portiques autostables en acier sans remplissage en ma&ccedil;onnerie</td>
                            <td class="text-center font-semibold">0,085</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Portiques autostables en acier ou en b&eacute;ton arm&eacute; avec remplissage en ma&ccedil;onnerie</td>
                            <td class="text-center font-semibold">0,050</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Autres syst&egrave;mes (voiles, contreventement en K ou X, etc.)</td>
                            <td class="text-center font-semibold">0,050</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="rpa-table-showcase__caption">Tableau 4.3 — Valeurs du coefficient <i>C<sub>t</sub></i></p>
        </div>

        <p class="mb-4">Dans les cas n&deg; 3 et 4, on peut &eacute;galement utiliser la formule :</p>
        <div class="rpa-equation-container" id="rpa-eqt-4.5">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mi>T</mi>
                        <mo>=</mo>
                        <mfrac>
                            <mrow>
                                <mn>0.09</mn>
                                <mo>&sdot;</mo>
                                <msub><mi>H</mi><mi>n</mi></msub>
                            </mrow>
                            <msqrt>
                                <mi>L</mi>
                            </msqrt>
                        </mfrac>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(4.5)</div>
        </div>
        <p class="mt-4">où <i>L</i> est la dimension du bâtiment mesurée à sa base dans la direction de calcul considérée.</p>
    </div>
</section>
