{{-- ==================== PAGE 52 ==================== --}}
<section id="rpa-p52" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">52</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
        @include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')
    </div>
    </div>

    <div id="rpa-fig-3.2" class="flex flex-col items-center my-8" style="scroll-margin-top: 100px;">
        @include('norms::codes.rpa.rpa2024.chapitre3.Ch3Svg.rpa24_ch3_fig3_2')
        <p class="text-sm font-bold mt-4">Figure 3.2: Spectre de réponse élastique Sae</p>
    </div>

    <div class="rpa-equation-container my-10" id="rpa-eqt-3.8">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mfrac>
                        <mrow><msub><mi>S</mi><mrow><mi>a</mi><mi>e</mi></mrow></msub><mo>(</mo><mi>T</mi><mo>)</mo></mrow>
                        <mi>g</mi>
                    </mfrac>
                    <mo>=</mo>
                    <mo>{</mo>
                    <mtable columnalign="left">
                        <mtr>
                            <mtd>
                                <mi>A</mi><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mi>S</mi><mo>&sdot;</mo>
                                <mo>(</mo><mn>1</mn><mo>+</mo><mfrac><mi>T</mi><msub><mi>T</mi><mn>1</mn></msub></mfrac><mo>&sdot;</mo><mo>(</mo><mn>2.5</mn><mi>&eta;</mi><mo>-</mo><mn>1</mn><mo>)</mo><mo>)</mo>
                            </mtd>
                            <mtd><mtext>si </mtext><mn>0</mn><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>1</mn></msub></mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mi>A</mi><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mi>S</mi><mo>&sdot;</mo><mo>(</mo><mn>2.5</mn><mi>&eta;</mi><mo>)</mo>
                            </mtd>
                            <mtd><mtext>si </mtext><msub><mi>T</mi><mn>1</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>2</mn></msub></mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mi>A</mi><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mi>S</mi><mo>&sdot;</mo><mo>(</mo><mn>2.5</mn><mi>&eta;</mi><mo>)</mo><mo>&sdot;</mo><mo>(</mo><mfrac><msub><mi>T</mi><mn>2</mn></msub><mi>T</mi></mfrac><mo>)</mo>
                            </mtd>
                            <mtd><mtext>si </mtext><msub><mi>T</mi><mn>2</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>3</mn></msub></mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mi>A</mi><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mi>S</mi><mo>&sdot;</mo><mo>(</mo><mn>2.5</mn><mi>&eta;</mi><mo>)</mo><mo>&sdot;</mo><mo>(</mo><mfrac><mrow><msub><mi>T</mi><mn>2</mn></msub><mo>&sdot;</mo><msub><mi>T</mi><mn>3</mn></msub></mrow><msup><mi>T</mi><mn>2</mn></msup></mfrac><mo>)</mo>
                            </mtd>
                            <mtd><mtext>si </mtext><msub><mi>T</mi><mn>3</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><mn>4</mn><mi>s</mi></mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(3.8)</div>
    </div>

    <p class="mt-6">avec :</p>
    <ul class="rpa-list-disc ml-8 space-y-2">
        <li><math xmlns="http://www.w3.org/1998/Math/MathML" class="inline"><mfrac><mrow><msub><mi>S</mi><mrow><mi>a</mi><mi>e</mi></mrow></msub><mo>(</mo><mi>T</mi><mo>)</mo></mrow><mi>g</mi></mfrac></math> : spectre de réponse élastique normalisé par rapport à la valeur de l'accélération de la pesanteur, <span class="font-bold">g</span> ;</li>
        <li><span class="font-bold">T</span> : période de vibration d'un système linéaire à un seul degré de liberté ;</li>
        <li><span class="font-bold">A</span> : coefficient d'accélération de calcul pour un sol de classe S<sub>1</sub> pour la période de retour de non effondrement T<sub>r</sub>=475 ans. (cf. <a href="#rpa-table-3.3" class="rpa-inline-link">Tableau (3.3)</a>) ;</li>
        <li><span class="font-bold">T<sub>1</sub></span> : limite inférieure des périodes correspondant au palier d'accélération spectrale constante ;</li>
        <li><span class="font-bold">T<sub>2</sub></span> : limite supérieure des périodes correspondant au palier d'accélération spectrale constante ;</li>
        <li><span class="font-bold">T<sub>3</sub></span> : valeur définissant le début de la branche à déplacement spectral constant ;</li>
        <li><span class="font-bold">I</span> : coefficient d'importance ;</li>
        <li><span class="font-bold">S</span> : coefficient de site ;</li>
        <li><span class="font-bold">&eta;</span> : facteur de correction de l'amortissement.</li>
    </ul>

    <p class="text-justify mt-8 leading-relaxed italic">
        Les valeurs des périodes T<sub>1</sub> et T<sub>2</sub> et du coefficient de site, S, qui décrivent la forme du spectre de réponse élastique dépendent du niveau de sismicité et de la classe de sol.
    </p>
</section>
