@if(($type ?? 'chapters') === 'chapters')
    {{-- Chapter 3 --}}
    <div class="toc-node" data-section="rpa-p44" data-level="1">
        <div class="toc-header group">
            <button class="toc-toggle-btn" aria-label="Toggle Chapter">
                <x-icon name="chevron-right" class="w-3.5 h-3.5 text-orange-500 transition-transform duration-300" />
            </button>
            <a href="#rpa-p44" class="toc-link font-black text-[11px] text-gray-700 dark:text-gray-200">CHAPITRE&nbsp;III</a>
            <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-p44', event)">
                <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
            </button>
        </div>
        
        <div class="toc-content hidden border-l border-orange-100 dark:border-orange-900/30 ml-[7px] pl-3 mt-0.5 space-y-0.5">
            {{-- 3.1 --}}
            <div class="toc-node" data-section="rpa-art-3.1" data-level="2">
                <div class="toc-header group">
                    <div class="w-4"></div> {{-- Empty space for no-toggle items --}}
                    <a href="#rpa-art-3.1" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">3.1 Classification des zones sismiques</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-3.1', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
            </div>
            {{-- 3.2 --}}
            <div class="toc-node" data-section="rpa-art-3.2" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-3.2" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">3.2 Classification des sites</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-3.2', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.2.1">
                        <a href="#rpa-art-3.2.1" class="toc-link toc-leaf">3.2.1 Catégories et critères</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.2.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.2.2">
                        <a href="#rpa-art-3.2.2" class="toc-link toc-leaf">3.2.2 Investigations et études</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.2.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.2.3">
                        <a href="#rpa-art-3.2.3" class="toc-link toc-leaf">3.2.3 Etapes de classement</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.2.3', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
            {{-- 3.3 --}}
            <div class="toc-node" data-section="rpa-art-3.3" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-3.3" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">3.3 Actions sismiques</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-3.3', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.3.1">
                        <a href="#rpa-art-3.3.1" class="toc-link toc-leaf">3.3.1 Spectre horizontal</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.3.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.3.2">
                        <a href="#rpa-art-3.3.2" class="toc-link toc-leaf">3.3.2 Spectre vertical</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.3.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.3.3">
                        <a href="#rpa-art-3.3.3" class="toc-link toc-leaf">3.3.3 Spectre de calcul</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.3.3', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.3.4">
                        <a href="#rpa-art-3.3.4" class="toc-link toc-leaf">3.3.4 Représentation temporelle</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.3.4', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
            {{-- 3.4 --}}
            <div class="toc-node" data-section="rpa-art-3.4" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-3.4" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">3.4 Classification des bâtiments selon leur importance</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-3.4', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.4-g1a">
                        <a href="#rpa-art-3.4-g1a" class="toc-link toc-leaf">Groupe 1A (Importance Vitale)</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.4-g1a', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.4-g1b">
                        <a href="#rpa-art-3.4-g1b" class="toc-link toc-leaf">Groupe 1B (Grande Importance)</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.4-g1b', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.4-g2">
                        <a href="#rpa-art-3.4-g2" class="toc-link toc-leaf">Groupe 2 (Importance Moyenne)</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.4-g2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.4-g3">
                        <a href="#rpa-art-3.4-g3" class="toc-link toc-leaf">Groupe 3 (Faible Importance)</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.4-g3', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
            {{-- 3.5 --}}
            <div class="toc-node" data-section="rpa-art-3.5" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-3.5" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">3.5 Classification des systèmes de contreventement</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-3.5', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.5-s1">
                        <a href="#rpa-art-3.5-s1" class="toc-link toc-leaf">1. Système à ossature</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.5-s1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.5-s2">
                        <a href="#rpa-art-3.5-s2" class="toc-link toc-leaf">2. Système mixte (ossature)</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.5-s2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.5-s3">
                        <a href="#rpa-art-3.5-s3" class="toc-link toc-leaf">3. Remplissage maçonnerie</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.5-s3', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.5-s4">
                        <a href="#rpa-art-3.5-s4" class="toc-link toc-leaf">4. Système mixte (voiles)</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.5-s4', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.5-s5">
                        <a href="#rpa-art-3.5-s5" class="toc-link toc-leaf">5. Système de voiles</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.5-s5', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
            {{-- 3.6 --}}
            <div class="toc-node" data-section="rpa-art-3.6" data-level="2">
                <div class="toc-header group">
                    <div class="w-4"></div>
                    <a href="#rpa-art-3.6" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">3.6 Coefficient de comportement global de la structure</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-3.6', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
            </div>
            {{-- 3.7 --}}
            <div class="toc-node" data-section="rpa-art-3.7" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-3.7" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">3.7 Classification des bâtiments selon leur configuration</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-3.7', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.7.1">
                        <a href="#rpa-art-3.7.1" class="toc-link toc-leaf">3.7.1 Régularité</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.7.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.7.2">
                        <a href="#rpa-art-3.7.2" class="toc-link toc-leaf">3.7.2 Régularité en plan</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.7.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.7.3">
                        <a href="#rpa-art-3.7.3" class="toc-link toc-leaf">3.7.3 Régularité en élévation</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.7.3', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-3.7.4">
                        <a href="#rpa-art-3.7.4" class="toc-link toc-leaf">3.7.4 Classification globale</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-3.7.4', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
            {{-- 3.8 --}}
            <div class="toc-node" data-section="rpa-art-3.8" data-level="2">
                <div class="toc-header group">
                    <div class="w-4"></div>
                    <a href="#rpa-art-3.8" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">3.8 Facteur de qualité</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-3.8', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
            </div>
        </div>
    </div>
@else
    {{-- Chapter 3 --}}
    @for($p=44; $p<=73; $p++)
        @if($p == 44) @continue @endif
        <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-p{{ $p }}">
            <a href="#rpa-p{{ $p }}" class="toc-link flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-orange-50 dark:hover:bg-orange-900/10 text-[10px] font-medium text-gray-600 dark:text-gray-400 transition-all">
                <span class="w-5 h-5 flex items-center justify-center bg-gray-100 dark:bg-gray-700 rounded text-[8px] font-bold">P</span>
                Page {{ $p }}
            </a>
        </div>
    @endfor
@endif
