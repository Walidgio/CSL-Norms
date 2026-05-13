{{-- ==================== PAGE 55 ==================== --}}
<section id="rpa-p55" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">55</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
        <div class="text-xs font-semibold text-amber-900/90 dark:text-amber-200/90">3.3 Actions sismiques</div>
        @include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')
    </div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-3.13">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>S</mi><mrow><mi>D</mi><mi>e</mi></mrow></msub><mo>(</mo><mi>T</mi><mo>)</mo>
                    <mo>=</mo>
                    <msub><mi>d</mi><mi>g</mi></msub>
                    <mtext> si </mtext><mi>T</mi><mo>&gt;</mo><msub><mi>T</mi><mn>5</mn></msub>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(3.13)</div>
    </div>

    <div class="mt-4">
        où :
        <div class="rpa-indent space-y-1">
            <div class="rpa-bullet">• <i>S, T<sub>2</sub></i> et <i>T<sub>3</sub></i> sont donnés dans les <a href="#rpa-table-3.4" class="rpa-inline-link">Tableaux (3.4)</a> et <a href="#rpa-table-3.5" class="rpa-inline-link">(3.5)</a></div>
            <div class="rpa-bullet">• <i>&eta;</i> est donné par <a href="#rpa-eqt-3.9" class="rpa-inline-link">Eqn. (3.9)</a></div>
            <div class="rpa-bullet">• <i>d<sub>g</sub></i> est donné par <a href="#rpa-eqt-3.10" class="rpa-inline-link">Eqn. (3.10)</a></div>
            <div class="rpa-bullet">• Les périodes <i>T<sub>4</sub></i> et <i>T<sub>5</sub></i> sont les périodes de contrôle données dans le <a href="#rpa-table-3.7" class="rpa-inline-link">Tableau (3.7)</a>. La <a href="#rpa-fig-3.5" class="rpa-inline-link">Figure (3.5)</a> montre les formes des spectres en déplacement de Type 1 et de Type 2, pour les sols de classes <i>S<sub>1</sub></i> à <i>S<sub>4</sub></i> pour <i>&xi;</i> = 5%, normalisés par (A).</div>
        </div>
    </div>

    <div class="overflow-x-auto my-6">
        <table class="w-full border-collapse border border-gray-400 text-sm mx-auto" style="max-width: 300px;">
            <thead>
                <tr class="bg-gray-50 text-center">
                    <th class="border border-gray-400 p-2 font-bold">Classe de sol</th>
                    <th class="border border-gray-400 p-2 font-bold"><i>T<sub>4</sub></i> (s)</th>
                    <th class="border border-gray-400 p-2 font-bold"><i>T<sub>5</sub></i> (s)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2"><i>S<sub>1</sub></i></td>
                    <td class="border border-gray-400 p-2">6.0</td>
                    <td class="border border-gray-400 p-2">10.0</td>
                </tr>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2"><i>S<sub>2</sub></i></td>
                    <td class="border border-gray-400 p-2">6.0</td>
                    <td class="border border-gray-400 p-2">10.0</td>
                </tr>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2"><i>S<sub>3</sub></i></td>
                    <td class="border border-gray-400 p-2">6.0</td>
                    <td class="border border-gray-400 p-2">10.0</td>
                </tr>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2"><i>S<sub>4</sub></i></td>
                    <td class="border border-gray-400 p-2">6.0</td>
                    <td class="border border-gray-400 p-2">10.0</td>
                </tr>
            </tbody>
        </table>
        <div class="rpa-figure-title text-center mt-2" id="rpa-table-3.7" style="scroll-margin-top: 100px;">Table 3.7: Périodes de contrôle supplémentaires pour le spectre de déplacement</div>
    </div>

    <!-- Figure 3.4 -->
    <div class="rpa-figure-container my-10" id="rpa-fig-3.4-container">
        @include('norms::codes.rpa.rpa2024.chapitre3.Ch3Svg.rpa24_ch3_fig3_4')
        <div class="rpa-figure-title text-center mt-4" id="rpa-fig-3.4">Figure 3.4: Spectre de réponse élastique en déplacement</div>
    </div>

    <!-- Figure 3.5 -->
    <div class="rpa-figure-container my-10" id="rpa-fig-3.5-container">
        <div class="flex flex-wrap justify-center gap-8">
            <div class="w-full max-w-[350px]">
                @include('norms::codes.rpa.rpa2024.chapitre3.Ch3Svg.rpa24_ch3_fig3_5_a')
            </div>
            <div class="w-full max-w-[350px]">
                @include('norms::codes.rpa.rpa2024.chapitre3.Ch3Svg.rpa24_ch3_fig3_5_b')
            </div>
        </div>
        <div class="rpa-figure-title text-center mt-4" id="rpa-fig-3.5">Figure 3.5: Spectres de réponse élastique en déplacement de Type 1 et de Type 2 pour les sols de classes <i>S<sub>1</sub></i> à <i>S<sub>4</sub></i> (pour <i>&xi;</i> = 5%)</div>
    </div>

    <p class="mt-6" style="text-align: justify;">
        Il convient de souligner que pour les périodes supérieures à 4 s, le spectre de réponse élastique en accélération peut être obtenu à partir du spectre de réponse élastique en déplacement à partir d'<a href="#rpa-eqt-3.11" class="rpa-inline-link">Eqns. (3.11)</a> à <a href="#rpa-eqt-3.13" class="rpa-inline-link">(3.13)</a>.
    </p>

    <div id="rpa-art-3.3.2" class="mt-10">
        <h3 class="rpa-h3">3.3.2 Spectre de réponse élastique vertical</h3>
        <p style="text-align: justify;">
            La composante verticale de l'action sismique doit être représentée par un spectre de réponse élastique, <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mfrac><msub><mi>S</mi><mrow><mi>v</mi><mi>e</mi></mrow></msub><mi>g</mi></mfrac><mo>(</mo><mi>T</mi><mo>)</mo></mrow></math>, donné par <a href="#rpa-eqt-3.14" class="rpa-inline-link">Eqn. (3.14)</a> :
        </p>
    </div>
</section>
