<div id="norms-content-body" class="flex-1 overflow-y-auto bg-gray-50 dark:bg-gray-900 custom-scrollbar scroll-smooth">
    @if(isset($current))
        {{-- Code Viewer Mode --}}
        <div class="max-w-5xl mx-auto p-0 sm:p-4 md:p-6 lg:p-8">
            {{-- Action Toolbar --}}
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-4 sm:mb-8 px-4 sm:px-0 mt-4 sm:mt-0">
                <div>
                    <nav class="flex items-center gap-2 text-xs font-medium text-gray-400 mb-2 uppercase tracking-widest">
                        <a href="{{ route('norms') }}" class="hover:text-indigo-500 transition-colors">Normes</a>
                        <span>&rsaquo;</span>
                        <span class="text-gray-500 dark:text-gray-300">{{ $currentFamily['family'] }}</span>
                    </nav>
                    <h2 class="text-2xl sm:text-3xl font-black text-gray-900 dark:text-white flex items-center gap-3">
                        <span class="p-1 sm:p-1.5 rounded-xl bg-white dark:bg-gray-800 shadow-sm border border-gray-100 dark:border-gray-700 overflow-hidden">
                            @if($currentFamily['slug'] === 'rpa')
                                @include('norms::codes.rpa.rpa2024.rpa24_icon', ['class' => 'w-7 h-7 sm:w-8 sm:h-8'])
                            @else
                                <span class="w-7 h-7 sm:w-8 sm:h-8 flex items-center justify-center text-xl sm:text-2xl">{{ $currentFamily['icon'] }}</span>
                            @endif
                        </span>
                    <div class="flex items-center gap-3">
                        <h2 class="text-2xl sm:text-3xl font-black text-gray-900 dark:text-white truncate">
                            {{ $current['name'] }}
                        </h2>
                        <div class="flex gap-1.5 shrink-0">
                            @if($current['pdf']) 
                                <a href="{{ route('norms.show', ['slug' => $current['slug'], 'view' => 'pdf']) }}" 
                                   class="px-2 py-0.5 rounded text-[10px] font-black tracking-widest transition-all
                                          {{ ($viewMode ?? '') === 'pdf' ? 'bg-red-600 text-white shadow-md' : 'bg-red-100 text-red-600 hover:bg-red-200' }}">
                                    PDF
                                </a>
                            @endif
                            @if($current['html']) 
                                <a href="{{ route('norms.show', ['slug' => $current['slug'], 'view' => 'html']) }}" 
                                   class="px-2 py-0.5 rounded text-[10px] font-black tracking-widest transition-all
                                          {{ ($viewMode ?? '') === 'html' ? 'bg-blue-600 text-white shadow-md' : 'bg-blue-100 text-blue-600 hover:bg-blue-200' }}">
                                    HTML
                                </a>
                            @endif
                        </div>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 mt-2 text-xs sm:text-sm max-w-2xl">
                        {{ $currentFamily['full_name'] }} &mdash; Édition {{ $current['year'] }}
                    </p>
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
        <div class="max-w-6xl mx-auto p-8 lg:p-12">
            <div class="mb-12 text-center md:text-left">
                <h2 class="text-4xl font-black text-gray-900 dark:text-white mb-4 tracking-tight">
                    Bibliothèque des <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-purple-600">Normes</span>
                </h2>
                <p class="text-gray-500 dark:text-gray-400 max-w-2xl text-lg">
                    Accédez rapidement aux règlements techniques, codes de calcul et documents normatifs pour vos projets de génie civil.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($codes as $family)
                    <div class="group relative bg-white dark:bg-gray-800 rounded-3xl p-6 border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        {{-- Family Background Decor --}}
                        <div class="absolute top-0 right-0 p-6 w-32 h-44 opacity-[0.05] dark:opacity-[0.08] pointer-events-none group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-700">
                            @if($family['slug'] === 'rpa')
                                @include('norms::codes.rpa.rpa2024.rpa24_icon')
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
                                    @include('norms::codes.rpa.rpa2024.rpa24_icon', ['class' => 'w-10 h-10'])
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
