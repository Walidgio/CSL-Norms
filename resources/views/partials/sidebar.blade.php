<aside class="w-80 h-full flex-shrink-0 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 flex flex-col">
    {{-- Search & Actions --}}
    <div class="p-4 border-b border-gray-100 dark:border-gray-700/50">
        <div class="relative group">
            <x-icon name="search" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 group-focus-within:text-indigo-500 transition-colors" />
            <input type="text" 
                   oninput="filterNorms(this.value)"
                   placeholder="Rechercher une norme..." 
                   class="w-full pl-9 pr-4 py-2 bg-gray-50 dark:bg-gray-900/50 border border-gray-200 dark:border-gray-700 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
        </div>
        
        <div class="flex items-center justify-between mt-3 px-1">
            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Explorateur</span>
            <div class="flex items-center gap-2">
                <button onclick="expandAll()" class="p-1 hover:bg-gray-100 dark:hover:bg-gray-700 rounded text-gray-500 transition-colors" title="Tout développer">
                    <x-icon name="plus" class="w-3 h-3" />
                </button>
                <button onclick="collapseAll()" class="p-1 hover:bg-gray-100 dark:hover:bg-gray-700 rounded text-gray-500 transition-colors" title="Tout réduire">
                    <span class="text-lg leading-none font-bold select-none">−</span>
                </button>
            </div>
        </div>
    </div>

    {{-- Tree Navigation --}}
    <div class="flex-1 overflow-y-auto custom-scrollbar p-2">
        <div class="space-y-1">
            @foreach($codes as $family)
                @php
                    $isFamilyActive = isset($currentFamily) && $currentFamily['family'] === $family['family'];
                    $familyColor = $family['color'];
                    $colorClasses = [
                        'orange' => 'border-orange-500 text-orange-600 dark:text-orange-400 bg-orange-50/50 dark:bg-orange-900/10',
                        'emerald' => 'border-emerald-500 text-emerald-600 dark:text-emerald-400 bg-emerald-50/50 dark:bg-emerald-900/10',
                        'blue' => 'border-blue-500 text-blue-600 dark:text-blue-400 bg-blue-50/50 dark:bg-blue-900/10',
                        'indigo' => 'border-indigo-500 text-indigo-600 dark:text-indigo-400 bg-indigo-50/50 dark:bg-indigo-900/10',
                        'rose' => 'border-rose-500 text-rose-600 dark:text-rose-400 bg-rose-50/50 dark:bg-rose-900/10',
                    ][$familyColor] ?? 'border-gray-500 text-gray-600 bg-gray-50';
                @endphp

                <div class="tree-family-item group {{ $isFamilyActive ? 'tree-item-active' : '' }}" 
                     id="family-{{ $family['slug'] }}"
                     data-name="{{ $family['family'] }} {{ $family['full_name'] }}">
                    
                    {{-- Family Header --}}
                    <button onclick="toggleFamily('{{ $family['slug'] }}')"
                            class="w-full flex items-center gap-2 px-3 py-2.5 rounded-lg text-left transition-all hover:bg-gray-50 dark:hover:bg-gray-700/50">
                        <x-icon name="chevron-right" class="w-3.5 h-3.5 text-gray-400 chevron-rotate" />
                        <span class="w-5 h-5 flex-shrink-0 flex items-center justify-center text-lg leading-none">
                            @if($family['slug'] === 'rpa')
                                @include('norms::codes.rpa.rpa2024.rpa24_icon', ['class' => 'w-full h-full'])
                            @else
                                {{ $family['icon'] }}
                            @endif
                        </span>
                        <div class="flex-1 min-w-0">
                            <div class="text-sm font-bold text-gray-700 dark:text-gray-200 truncate group-hover:text-indigo-500 transition-colors">
                                {{ $family['family'] }}
                            </div>
                            <div class="text-[10px] text-gray-400 truncate uppercase tracking-tighter">
                                {{ count($family['versions']) }} Version{{ count($family['versions']) > 1 ? 's' : '' }}
                            </div>
                        </div>
                    </button>

                    {{-- Versions List --}}
                    <div class="tree-content ml-4 border-l-2 pl-2 mt-1 space-y-0.5 {{ $isFamilyActive ? 'border-' . $familyColor . '-500/50' : 'border-gray-200 dark:border-gray-700' }}">
                        @foreach($family['versions'] as $v)
                            @php
                                $isVersionActive = isset($current) && $current['slug'] === $v['slug'];
                            @endphp
                            <a href="{{ route('norms.show', $v['slug']) }}" 
                               data-name="{{ $v['name'] }}"
                               class="version-link flex items-center justify-between px-3 py-1.5 rounded-md text-xs font-medium transition-all
                                      {{ $isVersionActive 
                                         ? $colorClasses . ' shadow-sm' 
                                         : 'text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700/30 hover:text-gray-900 dark:hover:text-gray-200' }}">
                                <span>{{ $v['name'] }}</span>
                                <div class="flex gap-1.5">
                                    @if($v['pdf']) 
                                        <a href="{{ route('norms.show', ['slug' => $v['slug'], 'view' => 'pdf']) }}" 
                                           class="view-toggle-badge text-[8px] px-1.5 py-0.5 rounded transition-all
                                                  {{ ($isVersionActive && ($viewMode ?? '') === 'pdf') 
                                                     ? 'bg-red-600 text-white shadow-sm scale-110' 
                                                     : 'bg-red-100 text-red-600 hover:bg-red-200' }}"
                                           title="Voir le PDF">PDF</a> 
                                    @endif
                                    @if($v['html']) 
                                        <a href="{{ route('norms.show', ['slug' => $v['slug'], 'view' => 'html']) }}" 
                                           class="view-toggle-badge text-[8px] px-1.5 py-0.5 rounded transition-all
                                                  {{ ($isVersionActive && ($viewMode ?? '') === 'html') 
                                                     ? 'bg-blue-600 text-white shadow-sm scale-110' 
                                                     : 'bg-blue-100 text-blue-600 hover:bg-blue-200' }}"
                                           title="Voir la version HTML">HTML</a> 
                                    @endif
                                </div>
                            </a>

                            {{-- Dynamic TOC Integration --}}
                            @if($isVersionActive)
                                @php
                                    $tocPath = "norms::codes." . $family['slug'] . "." . $v['slug'] . ".toc";
                                @endphp
                                @if(view()->exists($tocPath))
                                    {{-- Unified View Toggle --}}
                                    <div class="mt-4 px-2">
                                        <div class="flex p-0.5 bg-gray-100/80 dark:bg-gray-900/50 rounded-xl border border-gray-200 dark:border-gray-700">
                                            <button onclick="setTocMode('chapters')" id="btn-mode-chapters" 
                                                    class="toc-mode-btn flex-1 py-1 text-[9px] font-black uppercase tracking-widest rounded-lg transition-all bg-white dark:bg-gray-800 shadow-sm text-indigo-600 dark:text-indigo-400">
                                                Chapitres
                                            </button>
                                            <button onclick="setTocMode('pages')" id="btn-mode-pages"
                                                    class="toc-mode-btn flex-1 py-1 text-[9px] font-black uppercase tracking-widest rounded-lg transition-all text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                                                Pages
                                            </button>
                                            <button onclick="setTocMode('favs')" id="btn-mode-favs"
                                                    class="toc-mode-btn flex-1 py-1 text-[9px] font-black uppercase tracking-widest rounded-lg transition-all text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 flex items-center justify-center gap-1">
                                                <x-icon name="star" class="w-2.5 h-2.5" />
                                                Favoris
                                            </button>
                                        </div>
                                    </div>

                                    @include($tocPath)
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Help Tip --}}
        <div class="mt-8 p-4 rounded-xl bg-indigo-50/50 dark:bg-indigo-900/10 border border-indigo-100 dark:border-indigo-900/30">
            <div class="flex gap-3">
                <x-icon name="question-mark-circle" class="w-5 h-5 text-indigo-500 shrink-0" />
                <div>
                    <p class="text-xs font-bold text-indigo-900 dark:text-indigo-300">Besoin d'aide ?</p>
                    <p class="text-[10px] text-indigo-700 dark:text-indigo-400 mt-1 leading-relaxed">
                        Cliquez sur une norme pour voir les détails, télécharger le PDF ou consulter la version HTML interactive.
                    </p>
                </div>
            </div>
        </div>
    </div>
</aside>
