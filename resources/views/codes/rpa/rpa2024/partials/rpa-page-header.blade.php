{{-- En-tête de page : $page (numéro), $meta (vue partial à inclure, ex. ch4-running-meta) --}}
<div class="rpa-header-meta mb-6 flex flex-wrap items-end justify-between gap-3 border-b border-slate-200/90 pb-3 text-sm dark:border-slate-600">
    <div class="flex items-center gap-3">
        <span class="tabular-nums text-lg font-bold tracking-tight text-slate-800 dark:text-slate-100">{{ $page }}</span>
        <span class="hidden h-8 w-px bg-gradient-to-b from-orange-400 to-amber-500 sm:block" aria-hidden="true"></span>
        <span class="max-w-[14rem] text-xs font-semibold uppercase tracking-[0.2em] text-orange-700/90 dark:text-amber-300/90 sm:max-w-none">RPA 2024</span>
    </div>
    <div class="text-right">
        @include($meta)
    </div>
</div>
