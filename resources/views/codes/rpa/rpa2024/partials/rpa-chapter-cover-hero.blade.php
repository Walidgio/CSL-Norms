{{-- Hero centré pour pages de garde : $numeral, $title, $subtitle, $srLabel (optionnel) --}}
<div class="relative z-[1] mx-auto flex w-full max-w-3xl flex-col items-center text-center" aria-labelledby="{{ $titleId }}">
    @if(!empty($srLabel))
        <p class="sr-only">{{ $srLabel }}</p>
    @endif
    <p class="mb-3 text-[11px] font-bold uppercase tracking-[0.35em] text-orange-800/85 dark:text-amber-200/90">Chapitre</p>
    <div class="select-none font-serif text-[clamp(4.5rem,20vw,10rem)] font-bold leading-[0.85] tracking-tight text-transparent bg-clip-text bg-gradient-to-br from-amber-300 via-orange-500 to-orange-800 drop-shadow-sm dark:from-amber-200 dark:via-orange-400 dark:to-amber-600" aria-hidden="true">{{ $numeral }}</div>
    <div class="mx-auto mt-8 max-w-2xl">
        <h1 id="{{ $titleId }}" class="font-sans text-[clamp(1.35rem,4.5vw,2.35rem)] font-extrabold leading-[1.12] tracking-tight text-slate-900 dark:text-white">
            <span class="bg-gradient-to-r from-orange-700 via-amber-600 to-orange-600 bg-clip-text text-transparent dark:from-amber-200 dark:via-orange-200 dark:to-amber-300">{!! $title !!}</span>
        </h1>
        @if(!empty($subtitle))
            <p class="mt-4 text-sm font-medium leading-relaxed text-slate-600/95 dark:text-slate-400 sm:text-base">{{ $subtitle }}</p>
        @endif
    </div>
    <div class="mx-auto mt-10 flex items-center justify-center gap-3" aria-hidden="true">
        <span class="h-px w-12 rounded-full bg-gradient-to-r from-transparent to-orange-400/90 dark:to-amber-500/60 sm:w-16"></span>
        <span class="h-2 w-2 rounded-full bg-orange-500 shadow-[0_0_12px_rgba(249,115,22,0.55)] dark:bg-amber-400"></span>
        <span class="h-px w-12 rounded-full bg-gradient-to-l from-transparent to-orange-400/90 dark:to-amber-500/60 sm:w-16"></span>
    </div>
</div>
