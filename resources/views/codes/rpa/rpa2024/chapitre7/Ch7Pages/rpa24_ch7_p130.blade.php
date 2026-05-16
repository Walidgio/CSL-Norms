{{-- ==================== PAGE 130 ==================== --}}
<section id="rpa-p130" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">130</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
    <div id="rpa-art-7.8" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2">7.8 Jonction d&rsquo;armatures</h2>
        <p style="text-align: justify;">
            Il ne doit pas y avoir de jonction par recouvrement par soudure &agrave; l&rsquo;int&eacute;rieur des zones critiques des &eacute;l&eacute;ments de structure :
        </p>
        <div class="rpa-indent">
            <div class="rpa-bullet">&bull; <i>l<sub>0</sub></i> : longueur minimale de recouvrement</div>
            <div class="rpa-bullet">&bull; <i>a</i> : distance entre barres</div>
            <div class="rpa-bullet">&bull; <i>&phi;</i> : diam&egrave;tre de la barre tendue</div>
        </div>


    <p style="text-align: justify; margin-top: 15px;">
        Il peut y avoir des jonctions par coupleurs m&eacute;caniques dans les poteaux et les voiles, si le fonctionnement de ces dispositifs est valid&eacute; par des essais appropri&eacute;s en conformit&eacute; aux normes d&rsquo;essais portant sur les dispositifs de raboutage m&eacute;canique des barres.
    </p>

    <!-- Figure 7.19 -->
    @include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [
        'id' => 'rpa-fig-7.19',
        'kicker' => 'Jonctions',
        'caption' => 'Figure 7.19 : Recouvrements voisins',
        'svg' => 'norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_19',
    ])
<p style="text-align: justify; margin-top: 15px;">
        Les recouvrements des barres doivent respecter les dispositions de la figure (7.19), et ne doivent pas &ecirc;tre dispos&eacute;s dans des zones fortement sollicit&eacute;es (rotules plastiques, par exemple).
    </p>

    </div>

    <div id="rpa-art-7.9" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2">7.9 Dispositions propres aux dalles et aux diaphragmes</h2>

        <div id="rpa-art-7.9-1">
            <p style="text-align: justify;">
                Il doit exister un cha&icirc;nage p&eacute;riph&eacute;rique continu (cf. <a href="#rpa-fig-7.20" class="rpa-link">Figure (7.20)</a>), d&rsquo;au moins 3cm<sup>2</sup> de section d&rsquo;acier et un cha&icirc;nage, au croisement de chaque &eacute;l&eacute;ment de contreventement avec le plancher, de section minimale, &eacute;gale &agrave; 1,5&nbsp;cm<sup>2</sup>, et respectant la r&egrave;gle de&nbsp;:
            </p>
            <div class="rpa-indent">
                <div class="rpa-bullet">&bull; (0.28L) dans le cas de contreventement par voile</div>
                <div class="rpa-bullet">&bull; (0.50L) dans le cas de contreventement par portiques</div>
            </div>

            <div class="mt-4">
                avec: <br>
                L (unit&eacute; : m) : largeur cha&icirc;n&eacute;e.
            </div>
        </div>
    </div>

    <!-- Figure 7.20 -->
    @include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [
        'id' => 'rpa-fig-7.20',
        'kicker' => 'Dalles et diaphragmes',
        'caption' => 'Figure 7.20 : Chainages des dalles et des diaphragmes',
        'svg' => 'norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_20',
    ])
</section>

