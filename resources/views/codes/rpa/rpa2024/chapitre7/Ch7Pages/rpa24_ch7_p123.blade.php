{{-- ==================== PAGE 123 ==================== --}}
<section id="rpa-p123" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">123</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
<div class="rpa-indent" style="margin-top: 10px;">
        <ul class="list-disc ml-6">
            <div class="rpa-bullet">&bull; la premiere ~tape consiste ~ avoir !'enveloppe lin~aire qui joint le moment maximal ~ la base</div>
            <div class="rpa-bullet">&bull; La deuxi~me ~tape consiste ~ d~caler cette enveloppe lin~aire verticalement par la hauteur</div>
        </ul>
        <p class="mt-4" style="text-align: justify;">
            Le diagramme du moment flchissant, pour les systmes à contreventement mixte, peut ventuellement tre ngatif dans les tages supérieurs (cf. <a href="#rpa-fig-7.13" class="rpa-link">Figure (7.13b)</a>).
        </p>
    </div>
    @include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [
        'id' => 'rpa-fig-7.13',
        'kicker' => 'Moments fléchissants',
        'caption' => 'Figure 7.13 : Enveloppe de calcul pour les moments fl~chissant',
        'svg' => 'norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_13',
    ])


    <p class="mt-6" style="text-align: justify;">
        La hauteur, her, de la zone critique au-dessus de la base du voile est estimee comme suit (cf.
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.22">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>h</mi><mtext>cr</mtext></msub>
                    <mo>=</mo>
                    <mo>max</mo>
                    <mo>(</mo>
                    <msub><mi>l</mi><mi>w</mi></msub>
                    <mo>:</mo>
                    <mfrac>
                        <msub><mi>h</mi><mi>w</mi></msub>
                        <mn>6</mn>
                    </mfrac>
                    <mo>)</mo>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.22)</div>
    </div>

    <p class="mt-4">et :</p>

    <div class="rpa-equation-container" id="rpa-eqt-7.23">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>h</mi><mtext>cr</mtext></msub>
                    <mo>&le;</mo>
                    <mfenced open="{" close="">
                        <mtable columnalign="left">
                            <mtr>
                                <mtd><mn>2.</mn><msub><mi>l</mi><mi>w</mi></msub></mtd>
                            </mtr>
                            <mtr>
                                <mtd>
                                    <msub><mi>h</mi><mi>e</mi></msub><mtext>: pour </mtext><mi>n</mi><mo>&le;</mo><mn>6</mn><mtext> niveaux</mtext>
                                </mtd>
                            </mtr>
                            <mtr>
                                <mtd>
                                    <mn>2.</mn><msub><mi>h</mi><mi>e</mi></msub><mtext>: pour </mtext><mi>n</mi><mo>&gt;</mo><mn>6</mn><mtext> niveaux</mtext>
                                </mtd>
                            </mtr>
                        </mtable>
                    </mfenced>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.23)</div>
    </div>

    <div class="mt-6">
        où :
        <div class="rpa-indent">
            <div class="rpa-bullet">&bull; he est la hauteur libre, de chaque niveau, la base etant le niveau des fondations ou de</div>
            <div class="rpa-bullet">&bull; hw est la hauteur totale du voile (cf. Figure (7.14)).</div>
        </div>
    </div>

    <p class="mt-4" style="text-align: justify;">
        Pour les syst~mes ~ contreventement mixte, contenant des voiles ~lanc~s, l'enveloppe de calcul
    </p>
</section>

