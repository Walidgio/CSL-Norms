<section id="rpa-p117" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">117</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
<div id="rpa-art-7.7" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2">7.7 Voiles de contreventementLES DE CONTREVENTEMENT</h2>
        
        <div class="rpa-h3" id="rpa-art-7.7.1">7.7.1 Coffrages</div>

        <p style="text-align: justify;">
            Sont considérs et pris en compte comme voiles de contreventement, au sens du présent document technique rglementaire, les léments de contreventement satisfaisant la condition exprime par <a href="#rpa-eqt-7.9" class="rpa-link">Eqn. (7.9)</a>, cf. <a href="#rpa-fig-7.7" class="rpa-link">Figure (7.7)</a> :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-7.9">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>l</mi><mi>w</mi></msub>
                        <mo>&ge;</mo>
                        <mi>max</mi>
                        <mo>(</mo>
                        <mfrac>
                            <msub><mi>h</mi><mi>e</mi></msub>
                            <mn>3</mn>
                        </mfrac>
                        <mo>;</mo>
                        <mn>4</mn>
                        <msub><mi>b</mi><mi>w</mi></msub>
                        <mo>;</mo>
                        <mn>1</mn>
                        <mtext>&nbsp;m</mtext>
                        <mo>)</mo>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(7.9)</div>
        </div>

        <p style="text-align: justify; margin-top: 15px;">
            o~: l repr~sente la longueur du voile. Dans le cas contraire. ces &eacute;l&eacute;ments sont consid~r~s comme
        </p>
        <p style="text-align: justify; text-indent: 20px;">
            L'~paisseur minimale (b,) doit respecter la condition suivante;
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-7.10">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>b</mi><mi>w</mi></msub>
                        <mo>&ge;</mo>
                        <mi>max</mi>
                        <mo>(</mo>
                        <mn>15</mn>
                        <mtext>&nbsp;cm</mtext>
                        <mo>;</mo>
                        <mfrac>
                            <msub><mi>h</mi><mi>e</mi></msub>
                            <mn>20</mn>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(7.10)</div>
        </div>
    </div>
    @include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [
        'id' => 'rpa-fig-7.7',
        'kicker' => 'Voile de contreventement',
        'caption' => 'Figure 7.7 Voiles de contreventementoupe de voile en élévation',
        'svg' => 'norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_7',
    ])


    <p style="text-align: justify; text-indent: 20px;">
        Par ailleurs, en plus des rsultats donns par les calculs de dimensionnement, ou de vérification requis, et pour des considérations de stabilità de forme (non flambement), l'paisseur doit tre détermine en fonction de <i>h<sub>e</sub></i>, la hauteur libre du niveau, et des conditions de rigidità aux extrmits, cf. <a href="#rpa-fig-7.8" class="rpa-link">Figure (7.8)</a>.
    </p>
    <p style="text-align: justify; text-indent: 20px;">
        Il convient de considérer des sections de voiles, composes de parties rectangulaires lies entre elles (sections composes en L, T, U, I ou similaires), comme des sections uniques composes d'une ou de plusieurs mes parallles à la direction de l'effort tranchant sismique agissant et d'un ou de plusieurs raidisseurs perpendiculaires.
    </p>
    <p style="text-align: justify; text-indent: 20px;">
        Pour le calcul de la résistance à la flexion, il convient de prendre en compte la largeur participante de membrures raidisseuses, de part et d'autre de chaque me, s'tendant, à partir de la face de l'me, sur une largeur gale à <i>L<sub>min</sub></i> (cf. <a href="#rpa-fig-7.9" class="rpa-link">Figure (7.9)</a>) :
    </p>

    <div class="rpa-equation-container my-6" id="rpa-eqt-7.11" style="justify-content: flex-start; padding-left: 40px;">
        <div class="rpa-equation text-left">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>L</mi><mrow><mi>m</mi><mi>i</mi><mi>n</mi></mrow></msub>
                    <mo>=</mo>
                    <mi>min</mi>
                    <mo>{</mo>
                    <mtable columnalign="left" rowspacing="5px">
                        <mtr>
                            <mtd>
                                <msub><mi>d</mi><mi>t</mi></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mn>0.5</mn>
                                <msub><mi>d</mi><mi>w</mi></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mn>0.25</mn>
                                <msub><mi>h</mi><mi>w</mi></msub>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        avec:
    </p>
    <div class="rpa-indent">
        · d,:longueur r~elle de la membrure;
        <div class="rpa-bullet">&bull; d,:distance ~ une ~me adjacente du voile;</div>
        <div class="rpa-bullet">&bull; h, : hauteur totale du voile au-dessus du niveau consid~r~.</div>
    </div>

</section>

