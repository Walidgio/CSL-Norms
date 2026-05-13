{{-- ==================== PAGE 80 ==================== --}}
<section id="rpa-p80" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header">
        <span>80</span>
        <span class="chapter">4.2 Méthode statique équivalente</span>
    </div>

    <div class="my-8 overflow-x-auto">
        <table class="w-full border-collapse border border-gray-400 text-sm">
            <thead>
                <tr class="bg-gray-50 text-center">
                    <th class="border border-gray-400 p-2 w-1/12">Cas</th>
                    <th class="border border-gray-400 p-2">Nature de la charge d'exploitation</th>
                    <th class="border border-gray-400 p-2 w-1/12">&psi;</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-400 p-2 text-center">1</td>
                    <td class="border border-gray-400 p-2">B&acirc;timents d'habitation, bureaux ou assimil&eacute;s</td>
                    <td class="border border-gray-400 p-2 text-center font-bold">0.20</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 p-2 text-center">2</td>
                    <td class="border border-gray-400 p-2">B&acirc;timents accueillant du public de mani&egrave;re temporaire (Salles d'exposition, de f&ecirc;tes, lieux de culte, tribunes, stades, etc)</td>
                    <td class="border border-gray-400 p-2 text-center font-bold">0.50</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 p-2 text-center">3</td>
                    <td class="border border-gray-400 p-2">Entrep&ocirc;ts, b&acirc;timents de stockage, parkings, biblioth&egrave;ques et archives</td>
                    <td class="border border-gray-400 p-2 text-center font-bold">1.00</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 p-2 text-center">4</td>
                    <td class="border border-gray-400 p-2">Autres b&acirc;timents (cas &agrave; justifier par le projeteur en fonction de la dur&eacute;e de la charge d'exploitation)</td>
                    <td class="border border-gray-400 p-2 text-center font-bold">...</td>
                </tr>
            </tbody>
        </table>
        <p id="rpa-table-4.2" class="text-center font-bold mt-2" style="scroll-margin-top: 100px;">Table 4.2: Valeurs du coefficient d'accompagnement &psi;</p>
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

        <div class="my-8 overflow-x-auto">
            <table class="w-full border-collapse border border-gray-400 text-sm">
                <thead>
                    <tr class="bg-gray-50 text-center">
                        <th class="border border-gray-400 p-2 w-1/12">Cas n&deg;</th>
                        <th class="border border-gray-400 p-2">Syst&egrave;me de contreventement</th>
                        <th class="border border-gray-400 p-2 w-1/12"><i>C<sub>t</sub></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-400 p-2 text-center">1</td>
                        <td class="border border-gray-400 p-2">Portiques autostables en b&eacute;ton arm&eacute; sans remplissage en ma&ccedil;onnerie</td>
                        <td class="border border-gray-400 p-2 text-center font-bold">0.075</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-400 p-2 text-center">2</td>
                        <td class="border border-gray-400 p-2">Portiques autostables en acier sans remplissage en ma&ccedil;onnerie</td>
                        <td class="border border-gray-400 p-2 text-center font-bold">0.085</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-400 p-2 text-center">3</td>
                        <td class="border border-gray-400 p-2">Portiques autostables en acier ou en b&eacute;ton arm&eacute; avec remplissage en ma&ccedil;onnerie</td>
                        <td class="border border-gray-400 p-2 text-center font-bold">0.050</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-400 p-2 text-center">4</td>
                        <td class="border border-gray-400 p-2">Autres syst&egrave;mes (voiles, contreventement en K ou X, etc)</td>
                        <td class="border border-gray-400 p-2 text-center font-bold">0.050</td>
                    </tr>
                </tbody>
            </table>
            <p class="text-center font-bold mt-2">Table 4.3: Valeurs du coefficient <i>C<sub>t</sub></i></p>
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
