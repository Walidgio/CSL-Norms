{{-- ==================== PAGE 126 ==================== --}}
<section id="rpa-p126" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">126</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
<p style="text-align: justify; margin-top: 10px;">
        (<i>l<sub>f</sub></i> &ge; <i>h<sub>e</sub></i>/5) et si l&rsquo;&eacute;l&eacute;ment de rive confin&eacute; doit &ecirc;tre prolong&eacute; au-del&agrave; de la membrure dans l&rsquo;&acirc;me sur une longueur suppl&eacute;mentaire allant jusqu&rsquo;&agrave; (3&nbsp;<i>b<sub>w</sub></i>), alors l&rsquo;&eacute;paisseur de l&rsquo;&eacute;l&eacute;ment de rive confin&eacute;, <i>b<sub>c</sub></i>, reste &eacute;gale &agrave; <i>b<sub>w</sub></i>.
    </p>
    @include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [
        'id' => 'rpa-fig-7.18',
        'kicker' => 'É&eacute;l&eacute;ments de rive',
        'caption' => 'Figure 7.18 : &Eacute;paisseur minimale des é&eacute;l&eacute;ments de rive confinés, dans les voiles avec de larges ailes',
        'svg' => 'norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_18',
    ])


    <p class="mt-6" style="text-align: justify;">
        Le pourcentage des armatures longitudinales, dans les &eacute;l&eacute;ments de rive, doit rester au moins &eacute;gal &agrave; 0,5&nbsp;% de la surface de la zone confin&eacute;e.
    </p>
    <p style="text-align: justify;">
        Les armatures verticales, des &eacute;l&eacute;ments de rive, devraient &ecirc;tre confin&eacute;es avec des cadres et/ou des &eacute;triers horizontaux dont l&rsquo;espacement vertical doit satisfaire la condition suivante :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.25">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>s</mi><mi>t</mi></msub>
                    <mo>&le;</mo>
                    <mo>min</mo>
                    <mo>(</mo>
                    <msub><mi>b</mi><mn>0</mn></msub><mo>/</mo><mn>3</mn>
                    <mo>;</mo>
                    <mn>12.5</mn><mtext> cm</mtext>
                    <mo>;</mo>
                    <mn>6.</mn><msub><mi>&phi;</mi><mi>l</mi></msub>
                    <mo>)</mo>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.25)</div>
    </div>

    <p class="mt-4" style="text-align: justify;">
        o&ugrave; : &phi;<sub>l</sub> repr&eacute;sente le diam&egrave;tre minimal des armatures longitudinales, dans les &eacute;l&eacute;ments de rive ; en outre &phi;<sub>l</sub> &ge; 12&nbsp;mm.
    </p>

    <p class="mt-4" style="text-align: justify;">
        La distance horizontale entre deux barres verticales ligaturees ne doit pas depasser 20cm.
    </p>

    <p class="mt-4" style="text-align: justify;">
        La section des armatures de confinement dans les &eacute;l&eacute;ments de rive, (<i>A<sub>t</sub></i>), mesur&eacute;e dans le sens parall&egrave;le &agrave; l&rsquo;&eacute;paisseur du voile, doit &ecirc;tre pr&eacute;sente sur la hauteur (<i>h<sub>cr</sub></i>) et doit satisfaire les conditions :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.26">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>A</mi><mi>t</mi></msub>
                    <mo>&ge;</mo>
                    <mn>0.09</mn><msub><mi>s</mi><mi>t</mi></msub><mo>&sdot;</mo><msub><mi>b</mi><mn>0</mn></msub><mo>&sdot;</mo>
                    <mfrac>
                        <msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub>
                        <msub><mi>f</mi><mi>e</mi></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.26)</div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.27">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>A</mi><mi>t</mi></msub>
                    <mo>&ge;</mo>
                    <mn>0.3</mn><msub><mi>s</mi><mi>t</mi></msub><mo>&sdot;</mo><msub><mi>b</mi><mn>0</mn></msub><mo>&sdot;</mo>
                    <mo>(</mo>
                    <mfrac>
                        <msub><mi>A</mi><mi>g</mi></msub>
                        <msub><mi>A</mi><mi>c</mi></msub>
                    </mfrac>
                    <mo>&minus;</mo>
                    <mn>1</mn>
                    <mo>)</mo>
                    <mo>&sdot;</mo>
                    <mfrac>
                        <msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub>
                        <msub><mi>f</mi><mi>e</mi></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.27)</div>
    </div>
</section>

