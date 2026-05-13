{{-- ==================== PAGE 56 ==================== --}}
<section id="rpa-p56" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">56</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
        @include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')
    </div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-3.14">
        <div class="rpa-equation flex items-center justify-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mfrac>
                        <msub><mi>S</mi><mrow><mi>v</mi><mi>e</mi></mrow></msub>
                        <mi>g</mi>
                    </mfrac>
                    <mo>(</mo><mi>T</mi><mo>)</mo>
                    <mo>=</mo>
                    <mo>{</mo>
                    <mtable columnalign="left">
                        <mtr>
                            <mtd>
                                <msub><mi>A</mi><mi>v</mi></msub><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo>
                                <mo>[</mo>
                                <mn>1</mn><mo>+</mo><mfrac><mi>T</mi><msub><mi>T</mi><mn>1</mn></msub></mfrac>
                                <mo>&sdot;</mo>
                                <mo>(</mo><mn>2.5</mn><mi>&eta;</mi><mo>&minus;</mo><mn>1</mn><mo>)</mo>
                                <mo>]</mo>
                            </mtd>
                            <mtd>
                                <mtext>si </mtext><mn>0</mn><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>1</mn></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <msub><mi>A</mi><mi>v</mi></msub><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mo>[</mo><mn>2.5</mn><mi>&eta;</mi><mo>]</mo>
                            </mtd>
                            <mtd>
                                <mtext>si </mtext><msub><mi>T</mi><mn>1</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>2</mn></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <msub><mi>A</mi><mi>v</mi></msub><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mo>[</mo><mn>2.5</mn><mi>&eta;</mi><mo>]</mo><mo>&sdot;</mo>
                                <msup><mrow><mo>[</mo><mo>(</mo><mfrac><msub><mi>T</mi><mn>2</mn></msub><mi>T</mi></mfrac><mo>)</mo><mo>]</mo></mrow><mi>&alpha;</mi></msup>
                            </mtd>
                            <mtd>
                                <mtext>si </mtext><msub><mi>T</mi><mn>2</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>3</mn></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <msub><mi>A</mi><mi>v</mi></msub><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mo>[</mo><mn>2.5</mn><mi>&eta;</mi><mo>]</mo><mo>&sdot;</mo>
                                <msup><mrow><mo>[</mo><mo>(</mo><mfrac><mrow><msub><mi>T</mi><mn>2</mn></msub><mo>&sdot;</mo><msub><mi>T</mi><mn>3</mn></msub></mrow><msup><mi>T</mi><mn>2</mn></msup></mfrac><mo>)</mo><mo>]</mo></mrow><mi>&alpha;</mi></msup>
                            </mtd>
                            <mtd>
                                <mtext>si </mtext><msub><mi>T</mi><mn>3</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><mn>4</mn><mi>s</mi>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(3.14)</div>
    </div>

    <div class="overflow-x-auto my-6">
        <table class="w-full border-collapse border border-gray-400 text-sm mx-auto" style="max-width: 550px;">
            <thead>
                <tr class="bg-gray-50 text-center">
                    <th class="border border-gray-400 p-2 font-bold text-left">Spectre Type 1<br>Zones sismiques IV, V et VI</th>
                    <th class="border border-gray-400 p-2 font-bold"><i>A<sub>v</sub> / A</i></th>
                    <th class="border border-gray-400 p-2 font-bold"><i>T<sub>1</sub></i> (s)</th>
                    <th class="border border-gray-400 p-2 font-bold"><i>T<sub>2</sub></i> (s)</th>
                    <th class="border border-gray-400 p-2 font-bold"><i>T<sub>3</sub></i> (s)</th>
                    <th class="border border-gray-400 p-2 font-bold"><i>&alpha;</i></th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2 text-left">site <i>S<sub>1</sub></i></td>
                    <td class="border border-gray-400 p-2">0.90</td>
                    <td class="border border-gray-400 p-2">0.05</td>
                    <td class="border border-gray-400 p-2">0.20</td>
                    <td class="border border-gray-400 p-2">1.0</td>
                    <td class="border border-gray-400 p-2">0.6</td>
                </tr>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2 text-left">site <i>S<sub>2</sub></i></td>
                    <td class="border border-gray-400 p-2">0.90</td>
                    <td class="border border-gray-400 p-2">0.05</td>
                    <td class="border border-gray-400 p-2">0.30</td>
                    <td class="border border-gray-400 p-2">1.0</td>
                    <td class="border border-gray-400 p-2">0.6</td>
                </tr>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2 text-left">site <i>S<sub>3</sub></i></td>
                    <td class="border border-gray-400 p-2">0.90</td>
                    <td class="border border-gray-400 p-2">0.05</td>
                    <td class="border border-gray-400 p-2">0.40</td>
                    <td class="border border-gray-400 p-2">1.0</td>
                    <td class="border border-gray-400 p-2">0.6</td>
                </tr>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2 text-left">site <i>S<sub>4</sub></i></td>
                    <td class="border border-gray-400 p-2">0.90</td>
                    <td class="border border-gray-400 p-2">0.05</td>
                    <td class="border border-gray-400 p-2">0.50</td>
                    <td class="border border-gray-400 p-2">1.0</td>
                    <td class="border border-gray-400 p-2">0.6</td>
                </tr>
            </tbody>
        </table>
        <div class="rpa-figure-title text-center mt-2" id="rpa-table-3.8" style="scroll-margin-top: 100px;">Table 3.8: Valeurs des paramètres décrivant les spectres de réponse élastique vertical de Type 1</div>
    </div>

    <div class="overflow-x-auto my-6">
        <table class="w-full border-collapse border border-gray-400 text-sm mx-auto" style="max-width: 550px;">
            <thead>
                <tr class="bg-gray-50 text-center">
                    <th class="border border-gray-400 p-2 font-bold text-left">Spectre Type 2<br>Zones sismiques I, II et III</th>
                    <th class="border border-gray-400 p-2 font-bold"><i>A<sub>v</sub> / A</i></th>
                    <th class="border border-gray-400 p-2 font-bold"><i>T<sub>1</sub></i> (s)</th>
                    <th class="border border-gray-400 p-2 font-bold"><i>T<sub>2</sub></i> (s)</th>
                    <th class="border border-gray-400 p-2 font-bold"><i>T<sub>3</sub></i> (s)</th>
                    <th class="border border-gray-400 p-2 font-bold"><i>&alpha;</i></th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2 text-left">site <i>S<sub>1</sub></i></td>
                    <td class="border border-gray-400 p-2">0.55</td>
                    <td class="border border-gray-400 p-2">0.05</td>
                    <td class="border border-gray-400 p-2">0.15</td>
                    <td class="border border-gray-400 p-2">1.0</td>
                    <td class="border border-gray-400 p-2">0.8</td>
                </tr>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2 text-left">site <i>S<sub>2</sub></i></td>
                    <td class="border border-gray-400 p-2">0.55</td>
                    <td class="border border-gray-400 p-2">0.05</td>
                    <td class="border border-gray-400 p-2">0.20</td>
                    <td class="border border-gray-400 p-2">1.0</td>
                    <td class="border border-gray-400 p-2">0.8</td>
                </tr>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2 text-left">site <i>S<sub>3</sub></i></td>
                    <td class="border border-gray-400 p-2">0.55</td>
                    <td class="border border-gray-400 p-2">0.05</td>
                    <td class="border border-gray-400 p-2">0.25</td>
                    <td class="border border-gray-400 p-2">1.0</td>
                    <td class="border border-gray-400 p-2">0.8</td>
                </tr>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2 text-left">site <i>S<sub>4</sub></i></td>
                    <td class="border border-gray-400 p-2">0.55</td>
                    <td class="border border-gray-400 p-2">0.05</td>
                    <td class="border border-gray-400 p-2">0.30</td>
                    <td class="border border-gray-400 p-2">1.0</td>
                    <td class="border border-gray-400 p-2">0.8</td>
                </tr>
            </tbody>
        </table>
        <div class="rpa-figure-title text-center mt-2" id="rpa-table-3.9" style="scroll-margin-top: 100px;">Table 3.9: Valeurs des paramètres décrivant les spectres de réponse élastique vertical de Type 2</div>
    </div>

    <!-- Figure 3.6 -->
    <div class="rpa-figure-container my-10" id="rpa-fig-3.6-container">
        <div class="flex flex-wrap justify-center gap-8">
            <div class="w-full max-w-[350px]">
                @include('norms::codes.rpa.rpa2024.chapitre3.Ch3Svg.rpa24_ch3_fig3_6_a')
            </div>
            <div class="w-full max-w-[350px]">
                @include('norms::codes.rpa.rpa2024.chapitre3.Ch3Svg.rpa24_ch3_fig3_6_b')
            </div>
        </div>
        <div class="rpa-figure-title text-center mt-4" id="rpa-fig-3.6" style="scroll-margin-top: 100px;">Figure 3.6: Spectre de réponse élastique vertical de Type 1 et de Type 2 pour les sols de classes <i>S<sub>1</sub></i> à <i>S<sub>4</sub></i> (pour <i>&xi;</i> = 5%).</div>
    </div>

    <p class="mt-6" style="text-align: justify;">
        Comme pour les spectres qui définissent les composantes horizontales de l'action sismique, si les séismes qui contribuent le plus à l'aléa sismique défini pour le site dans le cadre de l'évaluation probabiliste de l'aléa, ont une magnitude moment (<i>M<sub>w</sub></i> ≤ 5.5), le type de spectre 2 est adopté. Si les séismes qui contribuent le plus à l'aléa sismique défini pour le site dans le cadre de l'évaluation probabiliste de l'aléa, ont une magnitude moment (<i>M<sub>w</sub></i> ≥ 5.5), le type de spectre 1 est adopté.
    </p>
</section>
