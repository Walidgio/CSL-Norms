<div id="norms-content-body" class="flex-1 overflow-y-auto bg-gray-50 dark:bg-gray-900 custom-scrollbar scroll-smooth">
    @if(isset($current))
        {{-- Code Viewer Mode --}}
        <div class="max-w-5xl mx-auto p-0 sm:p-4 md:p-6 lg:p-8">
            {{-- Action Toolbar --}}
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-4 sm:mb-8 px-4 sm:px-0 mt-4 sm:mt-0">
                <div class="min-w-0">
                    <nav class="flex items-center gap-2 text-xs font-medium text-gray-400 mb-2 uppercase tracking-widest">
                        <a href="{{ route('norms') }}" class="hover:text-indigo-500 transition-colors">Normes</a>
                        <span>&rsaquo;</span>
                        <span class="text-gray-500 dark:text-gray-300">{{ $currentFamily['family'] }}</span>
                    </nav>
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:gap-4">
                        <span class="mx-auto flex h-12 w-12 shrink-0 items-center justify-center overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-md shadow-gray-200/60 ring-1 ring-black/[0.04] dark:border-gray-600 dark:bg-gray-800 dark:shadow-none dark:ring-white/10 sm:mx-0 sm:h-14 sm:w-14
                            {{ $currentFamily['slug'] === 'rpa' ? 'border-orange-200/80 shadow-orange-500/10 ring-orange-500/10 dark:border-orange-500/30 dark:ring-orange-400/15' : '' }}">
                            @if($currentFamily['slug'] === 'rpa')
                                <x-icon name="rpa-seismic" class="h-8 w-8 text-orange-600 dark:text-orange-400 sm:h-9 sm:w-9" />
                            @else
                                <span class="flex h-8 w-8 items-center justify-center text-2xl sm:h-9 sm:w-9 sm:text-3xl">{{ $currentFamily['icon'] }}</span>
                            @endif
                        </span>
                        <div class="min-w-0 flex-1 text-center sm:text-left">
                            <div class="flex flex-wrap items-center justify-center gap-2 sm:justify-start sm:gap-3">
                                <h2 class="truncate text-2xl font-black tracking-tight text-gray-900 dark:text-white sm:text-3xl">
                                    {{ $current['name'] }}
                                </h2>
                                <div class="flex shrink-0 gap-1.5">
                                    @if($current['pdf'])
                                        <a href="{{ route('norms.show', ['slug' => $current['slug'], 'view' => 'pdf']) }}"
                                           class="rounded-md px-2.5 py-1 text-[10px] font-black tracking-widest transition-all
                                                  {{ ($viewMode ?? '') === 'pdf' ? 'bg-red-600 text-white shadow-md' : 'bg-red-100 text-red-600 hover:bg-red-200 dark:bg-red-950/50 dark:text-red-300 dark:hover:bg-red-900/60' }}">
                                            PDF
                                        </a>
                                    @endif
                                    @if($current['html'])
                                        <a href="{{ route('norms.show', ['slug' => $current['slug'], 'view' => 'html']) }}"
                                           class="rounded-md px-2.5 py-1 text-[10px] font-black tracking-widest transition-all
                                                  {{ ($viewMode ?? '') === 'html' ? 'bg-blue-600 text-white shadow-md' : 'bg-blue-100 text-blue-600 hover:bg-blue-200 dark:bg-blue-950/40 dark:text-blue-300 dark:hover:bg-blue-900/55' }}">
                                            HTML
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <p class="mt-2 max-w-2xl text-xs text-gray-500 dark:text-gray-400 sm:text-sm">
                                {{ $currentFamily['full_name'] }} &mdash; Édition {{ $current['year'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Dynamic Content Area --}}
            <div class="bg-white dark:bg-gray-800 sm:rounded-3xl shadow-xl shadow-gray-200/50 dark:shadow-none border-y sm:border border-gray-100 dark:border-gray-700 overflow-hidden relative" 
                 style="{{ ($viewMode ?? 'html') === 'pdf' ? 'height: calc(100vh - 250px); min-height: 600px;' : '' }}"
                 data-annotatable="{{ ($viewMode ?? 'html') === 'html' ? 'true' : 'false' }}">
                
                @php
                    $familySlug = $currentFamily['slug'];
                    $versionSlug = $current['slug'];
                    $viewPath = "norms::codes.{$familySlug}.{$versionSlug}.index";
                    $hasHtmlView = view()->exists($viewPath);
                    $showPdf = ($viewMode ?? 'html') === 'pdf' || !$hasHtmlView;
                @endphp

                @if($showPdf && $current['pdf'] && isset($current['pdf_file']))
                    {{-- Embedded PDF Viewer --}}
                    <div class="w-full h-full bg-gray-100 dark:bg-gray-900 overflow-hidden">
                        <iframe src="{{ asset('assets/norms/' . $current['pdf_file']) }}#toolbar=1&navpanes=0&scrollbar=1" 
                                class="w-full h-full border-none shadow-inner"
                                style="width: 100%; height: 100%; min-height: calc(100vh - 250px);"
                                title="{{ $current['name'] }}">
                        </iframe>
                    </div>
                @elseif($hasHtmlView)
                    @include($viewPath)
                @else
                    {{-- Default Placeholder (Safe Fallback) --}}
                    <div class="p-12 lg:p-20 text-center">
                        <div class="w-24 h-24 bg-gray-50 dark:bg-gray-900 rounded-full flex items-center justify-center mx-auto mb-6 border-4 border-white dark:border-gray-800 shadow-inner">
                            <span class="text-4xl">🚧</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">Contenu en préparation</h3>
                        <p class="text-gray-500 dark:text-gray-400 max-w-md mx-auto">
                            Nous travaillons sur la version HTML. Veuillez utiliser le bouton <strong>PDF</strong> dans la barre latérale pour consulter le document officiel.
                        </p>
                    </div>
                @endif
            </div>
        </div>
    @else
        {{-- Landing Welcome Grid Mode --}}
        <div class="max-w-6xl mx-auto px-5 py-10 sm:px-8 sm:py-12 lg:px-12 lg:py-14">
            <header class="relative mb-14 sm:mb-16 md:mb-20">
                {{-- Ambient glow --}}
                <div class="pointer-events-none absolute -top-32 left-1/2 h-[22rem] w-[min(100vw,48rem)] -translate-x-1/2 rounded-[100%] bg-gradient-to-tr from-indigo-500/25 via-violet-400/15 to-cyan-400/10 blur-3xl dark:from-indigo-500/30 dark:via-violet-500/20 dark:to-fuchsia-500/15 md:left-0 md:translate-x-0 md:rounded-[3rem]" aria-hidden="true"></div>
                <div class="pointer-events-none absolute top-24 right-0 hidden h-40 w-40 rounded-full bg-gradient-to-br from-amber-400/20 to-orange-500/10 blur-2xl dark:from-amber-400/15 md:block" aria-hidden="true"></div>

                <div class="relative text-center md:text-left">
                    <p class="mb-5 flex justify-center md:justify-start">
                        <span class="inline-flex items-center gap-2 rounded-full border border-indigo-200/80 bg-white/90 px-4 py-2 text-[10px] font-black uppercase tracking-[0.28em] text-indigo-700 shadow-sm backdrop-blur-md dark:border-indigo-500/35 dark:bg-gray-900/90 dark:text-indigo-300">
                            Réglementation &amp; génie civil
                        </span>
                    </p>

                    <h1 class="mx-auto max-w-5xl font-black tracking-[-0.04em] text-gray-950 dark:text-white md:mx-0">
                        <span class="block text-[clamp(2.5rem,8vw,5.5rem)] leading-[0.95] sm:text-7xl md:text-8xl">
                            Bibliothèque
                        </span>
                        <span class="mt-1 block text-[clamp(2.75rem,9vw,6.25rem)] leading-[0.9] sm:text-8xl md:text-9xl">
                            <span class="bg-gradient-to-r from-indigo-600 via-violet-600 to-fuchsia-500 bg-clip-text text-transparent dark:from-indigo-400 dark:via-violet-300 dark:to-fuchsia-400">
                                des Normes
                            </span>
                        </span>
                    </h1>

                    <div class="mx-auto mt-8 h-1 w-20 rounded-full bg-gradient-to-r from-indigo-500 to-fuchsia-500 md:mx-0 md:w-24" aria-hidden="true"></div>

                    <p class="mx-auto mt-8 max-w-2xl text-base font-medium leading-relaxed text-gray-600 dark:text-gray-300 sm:text-lg md:mx-0">
                        Accédez rapidement aux règlements techniques, codes de calcul et documents normatifs pour vos projets de génie civil.
                    </p>
                </div>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($codes as $family)
                    <div class="group relative bg-white dark:bg-gray-800 rounded-3xl p-6 border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        {{-- Family Background Decor --}}
                        <div class="absolute top-0 right-0 p-6 w-32 h-44 opacity-[0.05] dark:opacity-[0.08] pointer-events-none group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-700">
                            @if($family['slug'] === 'rpa')
                                <x-icon name="rpa-seismic" class="h-full w-full max-h-36 text-orange-500/25 dark:text-orange-400/20" />
                            @else
                                <span class="text-8xl">{{ $family['icon'] }}</span>
                            @endif
                        </div>

                        <div class="flex items-start justify-between mb-4">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center shadow-sm border border-gray-50 dark:border-gray-700 overflow-hidden
                                 {{ [
                                    'orange' => 'bg-orange-50 dark:bg-orange-900/20',
                                    'emerald' => 'bg-emerald-50 dark:bg-emerald-900/20',
                                    'blue' => 'bg-blue-50 dark:bg-blue-900/20',
                                    'indigo' => 'bg-indigo-50 dark:bg-indigo-900/20',
                                    'rose' => 'bg-rose-50 dark:bg-rose-900/20',
                                    'cyan' => 'bg-cyan-50 dark:bg-cyan-900/20',
                                    'amber' => 'bg-amber-50 dark:bg-amber-900/20',
                                 ][$family['color']] }}">
                                @if($family['slug'] === 'rpa')
                                    <x-icon name="rpa-seismic" class="h-10 w-10 text-orange-600 dark:text-orange-400" />
                                @else
                                    <span class="text-3xl">{{ $family['icon'] }}</span>
                                @endif
                            </div>
                            <span class="text-[10px] font-black uppercase tracking-widest px-2 py-1 rounded-full bg-gray-50 dark:bg-gray-900 text-gray-400 border border-gray-100 dark:border-gray-700">
                                {{ count($family['versions']) }} EDITIONS
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-500 transition-colors">
                            {{ $family['family'] }}
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-6 leading-relaxed">
                            {{ $family['full_name'] }}
                        </p>

                        <div class="space-y-2">
                            @foreach($family['versions'] as $v)
                                <a href="{{ route('norms.show', $v['slug']) }}" 
                                   class="flex items-center justify-between p-3 rounded-xl bg-gray-50 dark:bg-gray-900/50 hover:bg-indigo-50 dark:hover:bg-indigo-900/20 border border-transparent hover:border-indigo-100 dark:hover:border-indigo-900/30 transition-all group/link">
                                    <span class="text-sm font-bold text-gray-700 dark:text-gray-300 group-hover/link:text-indigo-600 dark:group-hover/link:text-indigo-400 transition-colors">
                                        {{ $v['name'] }}
                                    </span>
                                    <x-icon name="arrow-right" class="w-4 h-4 text-gray-300 group-hover/link:text-indigo-500 group-hover/link:translate-x-1 transition-all" />
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- delete explanation: redundant per user request --}}
        </div>
    @endif
</div>
