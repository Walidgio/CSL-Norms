{{-- Chapitre 7 — page de garde --}}
<section id="rpa-p104" class="rpa-page rpa-scroll-spy-section rpa-ch7-cover relative flex min-h-[min(1000px,92vh)] flex-col justify-between overflow-hidden px-8 py-16 sm:px-14 sm:py-20 bg-gradient-to-b from-[#fffaf5] via-[#fff4e8] to-[#ffe8d4] dark:from-slate-950 dark:via-slate-900 dark:to-slate-950">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_80%_50%_at_50%_-20%,rgba(251,146,60,0.22),transparent)] dark:bg-[radial-gradient(ellipse_70%_45%_at_50%_-10%,rgba(251,146,60,0.12),transparent)]" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-32 left-1/2 h-64 w-[min(100%,56rem)] -translate-x-1/2 rounded-full bg-gradient-to-t from-orange-400/15 to-transparent blur-3xl dark:from-orange-500/10" aria-hidden="true"></div>

    <div class="relative z-[1] flex flex-1 flex-col items-center justify-center py-6">
        @include('norms::codes.rpa.rpa2024.partials.rpa-chapter-cover-hero', [
            'titleId' => 'rpa-ch7-cover-title',
            'numeral' => 'VII',
            'title' => 'Structures en b&eacute;ton arm&eacute;',
            'subtitle' => 'Dispositions constructives et dimensionnement parasismique',
            'srLabel' => 'Chapitre sept, structures en b&eacute;ton arm&eacute;',
        ])
    </div>

    <nav class="relative z-[1] mx-auto w-full max-w-xl border-t-2 border-dotted border-amber-300/90 pt-6 dark:border-amber-700/50" aria-label="Sommaire du chapitre 7">
        <ol class="list-none space-y-1.5 text-sm sm:text-base">
            @foreach([
                ['7.1', 'G&eacute;n&eacute;ralit&eacute;s', 'rpa-art-7.1'],
                ['7.2', 'Mat&eacute;riaux', 'rpa-art-7.2'],
                ['7.3', 'Conception et v&eacute;rifications', 'rpa-art-7.3'],
                ['7.4', 'Poteaux', 'rpa-art-7.4'],
                ['7.5', 'Poutres', 'rpa-art-7.5'],
                ['7.6', 'N&oelig;uds poteaux-poutres', 'rpa-art-7.6'],
                ['7.7', 'Voiles de contreventement', 'rpa-art-7.7'],
                ['7.8', 'Jonction d&rsquo;armatures', 'rpa-art-7.8'],
                ['7.9', 'Dalles et diaphragmes', 'rpa-art-7.9'],
            ] as $item)
            <li><a href="#{{ $item[2] }}" class="rpa-cover-nav-link group flex gap-4 rounded-xl px-3 py-2"><span class="w-12 shrink-0 font-bold text-orange-700 dark:text-amber-400">{{ $item[0] }}</span><span class="text-slate-800 dark:text-slate-200 group-hover:text-orange-700 dark:group-hover:text-amber-300">{!! $item[1] !!}</span></a></li>
            @endforeach
        </ol>
    </nav>
</section>
