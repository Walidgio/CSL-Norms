<section id="rpa-p47" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">47</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
        <div class="text-xs font-semibold text-amber-900/90 dark:text-amber-200/90">3.1 Classification des zones sismiques</div>
        @include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')
    </div>
    </div>

    <figure id="rpa-fig-3.1" class="rpa-figure-showcase" style="scroll-margin-top: 100px;">
        <div class="rpa-figure-showcase__surface">
            <p class="rpa-figure-showcase__kicker">Classification sismique des wilayas d'Alg&eacute;rie</p>
            <div class="rpa-figure-showcase__svg">
                @include('norms::codes.rpa.rpa2024.chapitre3.Ch3Svg.rpa24_ch3_fig3_1')
            </div>
            <figcaption class="rpa-figure-showcase__caption">
                Figure 3.1 : Zonage sismique de l'Alg&eacute;rie
            </figcaption>
            <div class="rpa-figure-showcase__chips">
                <span class="rpa-figure-showcase__chip rpa-figure-showcase__chip--a">
                    <span class="rpa-figure-showcase__chip-key">(a)</span>
                    <span class="rpa-figure-showcase__chip-txt">Toutes les zones sismiques 0 &agrave; VI</span>
                </span>
                <span class="rpa-figure-showcase__chip rpa-figure-showcase__chip--b">
                    <span class="rpa-figure-showcase__chip-key">(b)</span>
                    <span class="rpa-figure-showcase__chip-txt">Zoom sur les zones sismiques I &agrave; VI</span>
                </span>
            </div>
            <p class="rpa-figure-showcase__fineprint">
                Cartographie du r&egrave;glement : l&rsquo;image est servie depuis le paquet si les fichiers ne sont pas encore copi&eacute;s dans <code>public/assets/norms</code>. Pour une copie statique, ex&eacute;cutez <code class="whitespace-nowrap">php artisan vendor:publish --tag=norms-assets</code>.
            </p>
        </div>
    </figure>
</section>
