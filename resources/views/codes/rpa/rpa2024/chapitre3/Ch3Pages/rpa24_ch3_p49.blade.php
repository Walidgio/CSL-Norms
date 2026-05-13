{{-- ==================== PAGE 49 ==================== --}}
<section id="rpa-p49" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">49</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
        <div class="text-xs font-semibold text-amber-900/90 dark:text-amber-200/90">3.2 Classification des sites</div>
        @include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')
    </div>
    </div>

    <div class="rpa-table-container my-8 overflow-x-auto">
        <table class="rpa-table text-xs">
            <thead>
                <tr>
                    <th rowspan="2">Catégorie</th>
                    <th rowspan="2">Description</th>
                    <th>q<sub>c30</sub></th>
                    <th>N<sub>30</sub></th>
                    <th>C<sub>u30</sub></th>
                    <th>R<sub>c30</sub></th>
                    <th>Pl<sub>30</sub></th>
                    <th>E<sub>p30</sub></th>
                    <th>V<sub>s30</sub></th>
                </tr>
                <tr>
                    <th>(MPa)</th>
                    <th>(coups)</th>
                    <th>(kPa)</th>
                    <th>(MPa)</th>
                    <th>(MPa)</th>
                    <th>(MPa)</th>
                    <th>(m/s)</th>
                </tr>
                <tr class="bg-gray-100 font-bold">
                    <th></th>
                    <th></th>
                    <th>(c)</th>
                    <th>(d)</th>
                    <th>(e)</th>
                    <th>(f)</th>
                    <th>(g)</th>
                    <th>(g)</th>
                    <th>(h)</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>S<sub>1</sub></td>
                    <td class="text-left font-bold">Rocheux (a)</td>
                    <td>/</td>
                    <td>/</td>
                    <td>/</td>
                    <td>&gt;10</td>
                    <td>&gt;5</td>
                    <td>&gt;100</td>
                    <td>&gt;800</td>
                </tr>
                <tr>
                    <td>S<sub>2</sub></td>
                    <td class="text-left font-bold">Ferme</td>
                    <td>&gt;15</td>
                    <td>&gt;50</td>
                    <td>&gt;100</td>
                    <td>0.4-10</td>
                    <td>2-5</td>
                    <td>20-100</td>
                    <td>360-800</td>
                </tr>
                <tr>
                    <td>S<sub>3</sub></td>
                    <td class="text-left font-bold">Meuble</td>
                    <td>1.5-15</td>
                    <td>15-50</td>
                    <td>50-100</td>
                    <td>0.1-0.4</td>
                    <td>1-2</td>
                    <td>5-20</td>
                    <td>180-360</td>
                </tr>
                <tr>
                    <td>S<sub>4</sub></td>
                    <td class="text-left font-bold">Très Meuble ou Présence de 3 m, au moins, d'argile molle (b)</td>
                    <td>&lt; 1.5</td>
                    <td>&lt;15</td>
                    <td>&lt;50</td>
                    <td>&lt;0.1</td>
                    <td>&lt;1</td>
                    <td>&lt;5</td>
                    <td>&lt;180</td>
                </tr>
                <tr>
                    <td>S<sub>5</sub></td>
                    <td class="text-left font-bold">site nécessitant investigations approfondies et études spécifiques (cf. &sect; 3.2.2 &amp; 3.2.3)</td>
                    <td>/</td>
                    <td>/</td>
                    <td>/</td>
                    <td>/</td>
                    <td>/</td>
                    <td>/</td>
                    <td>/</td>
                </tr>
            </tbody>
        </table>
        <p id="rpa-table-3.2" class="rpa-table-caption text-center mt-2" style="scroll-margin-top: 100px;">Table 3.2: Classification des sites</p>
    </div>

    <div class="mt-6">
        <p class="text-justify leading-relaxed mb-4">
            (b) L'argile molle est définie par un indice de plasticité <span class="italic">I<sub>p</sub></span> > 20, une teneur en eau naturelle <span class="italic">W<sub>n</sub></span> &ge; 40%, une résistance non drainée <span class="italic">c<sub>u</sub></span> < 25 kPa et une vitesse d'onde de cisaillement <span class="italic">V<sub>s</sub></span> < 180 m/s.
        </p>
        <p class="text-justify leading-relaxed mb-6 font-bold italic">
            Il convient de calculer les valeurs moyennes sur une profondeur totale de 30 m au moins, sauf dans le cas de rocher, conformément aux expressions suivantes:
        </p>

        <div class="space-y-8">
            {{-- Eq 3.1 --}}
            <div id="rpa-art-3.2-c">
                <p class="font-bold mb-2">(c) Pénétromètre statique :</p>
                <div class="rpa-equation-container" id="rpa-eqt-3.1">
                    <div class="rpa-equation">
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mrow>
                                <msub><mi>q</mi><mrow><mi>c</mi><mn>30</mn></mrow></msub>
                                <mo>=</mo>
                                <mfrac>
                                    <mn>30</mn>
                                    <mrow>
                                        <munderover>
                                            <mo>&sum;</mo>
                                            <mrow><mi>i</mi><mo>=</mo><mn>1</mn></mrow>
                                            <mi>n</mi>
                                        </munderover>
                                        <mfrac>
                                            <msub><mi>h</mi><mi>i</mi></msub>
                                            <msub><mi>q</mi><mrow><mi>c</mi><mi>i</mi></mrow></msub>
                                        </mfrac>
                                    </mrow>
                                </mfrac>
                            </mrow>
                        </math>
                    </div>
                    <div class="rpa-eq-num">(3.1)</div>
                </div>
            </div>

            {{-- Eq 3.2 --}}
            <div id="rpa-art-3.2-d">
                <p class="font-bold mb-2">(d) Essai SPT :</p>
                <div class="rpa-equation-container" id="rpa-eqt-3.2">
                    <div class="rpa-equation">
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mrow>
                                <msub><mi>N</mi><mn>30</mn></msub>
                                <mo>=</mo>
                                <mfrac>
                                    <mn>30</mn>
                                    <mrow>
                                        <munderover>
                                            <mo>&sum;</mo>
                                            <mrow><mi>i</mi><mo>=</mo><mn>1</mn></mrow>
                                            <mi>n</mi>
                                        </munderover>
                                        <mfrac>
                                            <msub><mi>h</mi><mi>i</mi></msub>
                                            <msub><mi>N</mi><mi>i</mi></msub>
                                        </mfrac>
                                    </mrow>
                                </mfrac>
                            </mrow>
                        </math>
                    </div>
                    <div class="rpa-eq-num">(3.2)</div>
                </div>
            </div>

            {{-- Eq 3.3 --}}
            <div id="rpa-art-3.2-e">
                <p class="font-bold mb-2">(e) Essai de résistance au cisaillement non drainé :</p>
                <div class="rpa-equation-container" id="rpa-eqt-3.3">
                    <div class="rpa-equation">
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mrow>
                                <msub><mi>C</mi><mrow><mi>u</mi><mn>30</mn></mrow></msub>
                                <mo>=</mo>
                                <mfrac>
                                    <mn>30</mn>
                                    <mrow>
                                        <munderover>
                                            <mo>&sum;</mo>
                                            <mrow><mi>i</mi><mo>=</mo><mn>1</mn></mrow>
                                            <mi>n</mi>
                                        </munderover>
                                        <mfrac>
                                            <msub><mi>h</mi><mi>i</mi></msub>
                                            <msub><mi>C</mi><mrow><mi>u</mi><mi>i</mi></mrow></msub>
                                        </mfrac>
                                    </mrow>
                                </mfrac>
                            </mrow>
                        </math>
                    </div>
                    <div class="rpa-eq-num">(3.3)</div>
                </div>
            </div>

            {{-- Eq 3.4 --}}
            <div id="rpa-art-3.2-f">
                <p class="font-bold mb-2">(f) Essai de résistance à la compression simple :</p>
                <div class="rpa-equation-container" id="rpa-eqt-3.4">
                    <div class="rpa-equation">
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mrow>
                                <msub><mi>R</mi><mrow><mi>c</mi><mn>30</mn></mrow></msub>
                                <mo>=</mo>
                                <mfrac>
                                    <mn>30</mn>
                                    <mrow>
                                        <munderover>
                                            <mo>&sum;</mo>
                                            <mrow><mi>i</mi><mo>=</mo><mn>1</mn></mrow>
                                            <mi>n</mi>
                                        </munderover>
                                        <mfrac>
                                            <msub><mi>h</mi><mi>i</mi></msub>
                                            <msub><mi>R</mi><mrow><mi>c</mi><mi>i</mi></mrow></msub>
                                        </mfrac>
                                    </mrow>
                                </mfrac>
                            </mrow>
                        </math>
                    </div>
                    <div class="rpa-eq-num">(3.4)</div>
                </div>
            </div>

            {{-- Eq 3.5 --}}
            <div id="rpa-art-3.2-g">
                <p class="font-bold mb-2">(g) Caractéristiques pressiométriques :</p>
                <div class="rpa-equation-container" id="rpa-eqt-3.5">
                    <div class="rpa-equation">
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mrow>
                                <msub><mi>E</mi><mrow><mi>p</mi><mn>30</mn></mrow></msub>
                                <mo>=</mo>
                                <mfrac>
                                    <mn>30</mn>
                                    <mrow>
                                        <munderover>
                                            <mo>&sum;</mo>
                                            <mrow><mi>i</mi><mo>=</mo><mn>1</mn></mrow>
                                            <mi>n</mi>
                                        </munderover>
                                        <mfrac>
                                            <msub><mi>h</mi><mi>i</mi></msub>
                                            <msub><mi>E</mi><mrow><mi>p</mi><mi>i</mi></mrow></msub>
                                        </mfrac>
                                    </mrow>
                                </mfrac>
                            </mrow>
                        </math>
                    </div>
                    <div class="rpa-eq-num">(3.5)</div>
                </div>
            </div>
        </div>
    </div>
</section>
