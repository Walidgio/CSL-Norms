{{-- ==================== PAGE 54 ==================== --}}
<section id="rpa-p54" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header">
        <span>54</span>
        <span class="chapter">Chapter 3. CRITÈRES DE CLASSIFICATION</span>
    </div>

    <!-- Figure 3.3 placeholder/SVG -->
    <div class="rpa-figure-container my-10" id="rpa-fig-3.3-container">
        <div class="flex flex-wrap justify-center gap-8">
            <div class="w-full max-w-[350px]">
                @include('norms::codes.rpa.rpa2024.chapitre3.Ch3Svg.rpa24_ch3_fig3_3_a')
            </div>
            <div class="w-full max-w-[350px]">
                @include('norms::codes.rpa.rpa2024.chapitre3.Ch3Svg.rpa24_ch3_fig3_3_b')
            </div>
        </div>
        <div class="rpa-figure-title text-center mt-4" id="rpa-fig-3.3">Figure 3.3: Spectres de réponse élastique de Type 1 et de Type 2 pour les sols de classes <i>S<sub>1</sub></i> à <i>S<sub>4</sub></i> (à <i>&xi;</i> = 5%) pour un ouvrage d'importance moyenne (I=1)</div>
    </div>

    <div class="overflow-x-auto my-6">
        <table class="w-full border-collapse border border-gray-400 text-sm mx-auto" style="max-width: 600px;">
            <thead>
                <tr class="bg-gray-50 text-center">
                    <th class="border border-gray-400 p-2 font-bold" rowspan="2">Remplissage</th>
                    <th class="border border-gray-400 p-2 font-bold" colspan="2">Ossatures (*)</th>
                    <th class="border border-gray-400 p-2 font-bold">Voiles (**)</th>
                </tr>
                <tr class="bg-gray-50 text-center">
                    <th class="border border-gray-400 p-2 font-bold">Béton armé</th>
                    <th class="border border-gray-400 p-2 font-bold">Acier</th>
                    <th class="border border-gray-400 p-2 font-bold">Béton armé/maçonnerie</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2 text-left">Léger</td>
                    <td class="border border-gray-400 p-2">6</td>
                    <td class="border border-gray-400 p-2">4</td>
                    <td class="border border-gray-400 p-2">10</td>
                </tr>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2 text-left">Dense</td>
                    <td class="border border-gray-400 p-2">7</td>
                    <td class="border border-gray-400 p-2">5</td>
                    <td class="border border-gray-400 p-2">10</td>
                </tr>
            </tbody>
        </table>
        <div class="rpa-indent mt-2 text-xs">
            <p>(*): Sans présence de voiles ou de noyaux en béton armé</p>
            <p>(**): Valeurs valables même si les voiles sont associés à des portiques</p>
        </div>
        <div class="rpa-figure-title text-center mt-2" id="rpa-table-3.6">Table 3.6: Valeurs de <i>&xi;</i> (%)</div>
    </div>

    <div class="mt-8">
        <h4 class="font-bold underline">Déplacement de calcul du sol</h4>
        <p style="text-align: justify;">
            Le déplacement de calcul au niveau du sol, <i>d<sub>g</sub></i>, correspondant à l'accélération de calcul (A.I.S) au niveau du sol est donné par Eqn. (3.10) :
        </p>
        
        <div class="rpa-equation-container" id="rpa-eqt-3.10">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>d</mi><mi>g</mi></msub>
                        <mo>=</mo>
                        <mo>(</mo><mi>A</mi><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mi>S</mi><mo>)</mo>
                        <mo>&sdot;</mo>
                        <mi>g</mi>
                        <mo>&sdot;</mo>
                        <mo>(</mo><mn>0.025</mn><mo>&sdot;</mo><msub><mi>T</mi><mn>2</mn></msub><mo>&sdot;</mo><msub><mi>T</mi><mn>3</mn></msub><mo>)</mo>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(3.10)</div>
        </div>
        <p>où: g est l'accélération de la pesanteur (m/s<sup>2</sup>).</p>
    </div>

    <div class="mt-8">
        <h4 class="font-bold underline">Spectre de réponse élastique en déplacement</h4>
        <p style="text-align: justify;">
            Pour les structures ayant une période de vibration longue, l'action sismique peut être représentée sous la forme d'un spectre de réponse élastique en déplacement, <i>S<sub>De</sub>(T)</i>, comme montré dans la Figure (3.4).
        </p>
        <p style="text-align: justify;">
            Le spectre de réponse élastique en déplacement, <i>S<sub>De</sub>(T)</i>, doit être obtenu comme suit :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-3.11">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>S</mi><mrow><mi>D</mi><mi>e</mi></mrow></msub><mo>(</mo><mi>T</mi><mo>)</mo>
                        <mo>=</mo>
                        <msub><mi>S</mi><mrow><mi>a</mi><mi>e</mi></mrow></msub><mo>(</mo><mi>T</mi><mo>)</mo>
                        <mo>&sdot;</mo>
                        <msup><mrow><mo>[</mo><mfrac><mi>T</mi><mrow><mn>2</mn><mi>&pi;</mi></mrow></mfrac><mo>]</mo></mrow><mn>2</mn></msup>
                        <mtext> si </mtext><mi>T</mi><mo>&le;</mo><msub><mi>T</mi><mn>4</mn></msub>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(3.11)</div>
        </div>

        <div class="rpa-equation-container" id="rpa-eqt-3.12">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>S</mi><mrow><mi>D</mi><mi>e</mi></mrow></msub><mo>(</mo><mi>T</mi><mo>)</mo>
                        <mo>=</mo>
                        <msub><mi>d</mi><mi>g</mi></msub>
                        <mo>&sdot;</mo>
                        <mo>[</mo>
                        <mn>2.5</mn><mi>&eta;</mi><mo>+</mo>
                        <mfrac>
                            <mrow><mo>(</mo><mi>T</mi><mo>&minus;</mo><msub><mi>T</mi><mn>4</mn></msub><mo>)</mo></mrow>
                            <mrow><mo>(</mo><msub><mi>T</mi><mn>5</mn></msub><mo>&minus;</mo><msub><mi>T</mi><mn>4</mn></msub><mo>)</mo></mrow>
                        </mfrac>
                        <mo>&sdot;</mo>
                        <mo>(</mo><mn>1</mn><mo>&minus;</mo><mn>2.5</mn><mi>&eta;</mi><mo>)</mo>
                        <mo>]</mo>
                        <mtext> si </mtext><msub><mi>T</mi><mn>4</mn></msub><mo>&lt;</mo><mi>T</mi><mo>&le;</mo><msub><mi>T</mi><mn>5</mn></msub>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(3.12)</div>
        </div>
    </div>
</section>
