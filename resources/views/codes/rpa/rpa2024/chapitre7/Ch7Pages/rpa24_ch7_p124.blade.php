{{-- ==================== PAGE 124 ==================== --}}
<section id="rpa-p124" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">124</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
    @include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [
        'id' => 'rpa-fig-7.14',
        'kicker' => 'Zone critique',
        'caption' => 'Figure 7.14 : Zone critique a la base du voile',
        'svg' => 'norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_14',
    ])


    <div class="rpa-comment my-6">
        Commentaire : L'enveloppe de calcul du diagramme des efforts tranchants est construite en trois
        <div class="rpa-indent">
            <div class="rpa-bullet">&bull; La premi~re ~tape consiste ~ amplifier le diagramme initial de 40%.</div>
            <div class="rpa-bullet">&bull; La deuxi~me ~tape consiste ~ maintenir la courbe amplifi~e de la base du voile jusqu'~ une</div>
            <div class="rpa-bullet">&bull; La troisi~me ~tape consiste en une enveloppe lin~aire entre (h,/3) et le sommet du voile.</div>
        </div>
        <p class="mt-4" style="text-align: justify;">
            syst~mes ~ contreventement mixte. Cette modification est faite pour tenir compte des incertitudes
        </p>
    </div>
    @include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [
        'id' => 'rpa-fig-7.15',
        'kicker' => 'Efforts tranchants',
        'caption' => 'Figure 7.15 : Enveloppe de calcul pour les efforts tranchants dans les voiles ~lanc~s des syst~mes ~',
        'svg' => 'norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_15',
    ])

</section>

