@if(($type ?? 'chapters') === 'chapters')
    {{-- Chapter 4 --}}
    <div class="toc-node" data-section="rpa-p76" data-level="1">
        <div class="toc-header group">
            <button class="toc-toggle-btn" aria-label="Toggle Chapter">
                <x-icon name="chevron-right" class="w-3.5 h-3.5 text-orange-500 transition-transform duration-300" />
            </button>
            <a href="#rpa-p76" class="toc-link font-black text-[11px] text-gray-700 dark:text-gray-200">CHAPITRE 4</a>
            <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-p76', event)">
                <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
            </button>
        </div>
        
        <div class="toc-content hidden border-l border-orange-100 dark:border-orange-900/30 ml-[7px] pl-3 mt-0.5 space-y-0.5">
            {{-- 4.1 --}}
            <div class="toc-node" data-section="rpa-art-4.1" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-4.1" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">4.1 Choix de la méthode de calcul</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-4.1', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.1.1">
                        <a href="#rpa-art-4.1.1" class="toc-link toc-leaf">4.1.1 Méthodes utilisables</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.1.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.1.2">
                        <a href="#rpa-art-4.1.2" class="toc-link toc-leaf">4.1.2 Conditions d'application</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.1.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.1.3">
                        <a href="#rpa-art-4.1.3" class="toc-link toc-leaf">4.1.3 Combinaison des réponses</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.1.3', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
            {{-- 4.2 --}}
            <div class="toc-node" data-section="rpa-art-4.2" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-4.2" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">4.2 Méthode statique équivalente</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-4.2', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.2.1">
                        <a href="#rpa-art-4.2.1" class="toc-link toc-leaf">4.2.1 Principes</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.2.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.2.2">
                        <a href="#rpa-art-4.2.2" class="toc-link toc-leaf">4.2.2 Force sismique totale</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.2.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.2.3">
                        <a href="#rpa-art-4.2.3" class="toc-link toc-leaf">4.2.3 Période fondamentale</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.2.3', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.2.4">
                        <a href="#rpa-art-4.2.4" class="toc-link toc-leaf">4.2.4 Distribution de la force</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.2.4', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
            {{-- 4.3 --}}
            <div class="toc-node" data-section="rpa-art-4.3" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-4.3" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">4.3 Méthode d'analyse modale spectrale</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-4.3', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.3.1">
                        <a href="#rpa-art-4.3.1" class="toc-link toc-leaf">4.3.1 Principes</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.3.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.3.2">
                        <a href="#rpa-art-4.3.2" class="toc-link toc-leaf">4.3.2 Modélisation</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.3.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.3.3">
                        <a href="#rpa-art-4.3.3" class="toc-link toc-leaf">4.3.3 Nombre de modes</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.3.3', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
            {{-- 4.4 --}}
            <div class="toc-node" data-section="rpa-art-4.4" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-4.4" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">4.4 Méthode d'analyse dynamique</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-4.4', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.4.1">
                        <a href="#rpa-art-4.4.1" class="toc-link toc-leaf">4.4.1 Analyse temporelle</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.4.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
            {{-- 4.5 --}}
            <div class="toc-node" data-section="rpa-art-4.5" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-4.5" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">4.5 Prescriptions communes</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-4.5', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-4.5.1">
                        <a href="#rpa-art-4.5.1" class="toc-link toc-leaf">4.5.1 Effets de la torsion</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-4.5.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    {{-- Chapter 4 --}}
    @for($p=76; $p<=84; $p++)
        <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-p{{ $p }}">
            <a href="#rpa-p{{ $p }}" class="toc-link flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-orange-50 dark:hover:bg-orange-900/10 text-[10px] font-medium text-gray-600 dark:text-gray-400 transition-all">
                <span class="w-5 h-5 flex items-center justify-center bg-gray-100 dark:bg-gray-700 rounded text-[8px] font-bold">P</span>
                Page {{ $p }}
            </a>
        </div>
    @endfor
@endif
