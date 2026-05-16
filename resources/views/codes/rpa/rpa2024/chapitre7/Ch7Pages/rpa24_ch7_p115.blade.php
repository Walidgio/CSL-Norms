{{-- ==================== PAGE 115 ==================== --}}
<section id="rpa-p115" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">115</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>

    @include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [
        'id' => 'rpa-fig-7.5',
        'caption' => 'Figure 7.5 : Sp&eacute;cifications pour les n&oelig;uds poteaux-poutres',
        'svg' => 'norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_5',
    ])

    <div class="rpa-indent mt-4 mb-4 text-sm">
        <div class="mb-1"><b><i>l<sub>d</sub></i></b> : longueur libre</div>
        <div class="mb-1"><b><i>l<sub>cr</sub></i></b> : longueur critique</div>
        <div class="mb-1"><b><i>h<sub>c</sub></i></b> : plus grande dimension de la section transversale du poteau</div>
        <div class="mb-1"><b><i>l&rsquo;</i></b> : longueur critique de la poutre</div>
        <div class="mb-1"><b><i>b<sub>0</sub></i></b> : dimension minimale du noyau b&eacute;ton</div>
    </div>

    <div class="rpa-h2 mt-8" id="rpa-art-7.6">7.6 <span class="text-gray-900 dark:text-gray-100">Sp&eacute;cifications pour les n&oelig;uds poteaux-poutres</span></div>

    <div class="rpa-h3" id="rpa-art-7.6.1">7.6.1 <span class="text-gray-900 dark:text-gray-100">Dispositions constructives</span></div>

    <p style="text-align: justify;">
        Les dispositions constructives, donn&eacute;es au <a href="#rpa-art-7.4" class="rpa-link">&sect; 7.4</a> pour les poteaux et au <a href="#rpa-art-7.5" class="rpa-link">&sect; 7.5</a> pour les poutres, et telles que reprises, en particulier sur la <a href="#rpa-fig-7.5" class="rpa-link">Figure (7.5)</a>, doivent &ecirc;tre respect&eacute;es pour leurs parties communes que sont les n&oelig;uds afin d'assurer un minimum requis de confinement pour pr&eacute;server au maximum l'int&eacute;grit&eacute; de ces derniers et permettre, au reste de la structure, de d&eacute;ployer ses capacit&eacute;s de dissipation d'&eacute;nergie.
    </p>
    <p style="text-align: justify; text-indent: 20px;">
        On doit avoir un espacement maximum de 10 cm, entre deux cadres, et au minimum trois cadres par n&oelig;ud.
    </p>
</section>
