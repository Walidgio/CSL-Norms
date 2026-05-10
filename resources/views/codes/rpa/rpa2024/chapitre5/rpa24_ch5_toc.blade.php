@if(($type ?? 'chapters') === 'chapters')
    {{-- Chapter 5 --}}
    <div class="toc-node" data-section="rpa-p86" data-level="1">
        <div class="toc-header group">
            <button class="toc-toggle-btn" aria-label="Toggle Chapter">
                <x-icon name="chevron-right" class="w-3.5 h-3.5 text-orange-500 transition-transform duration-300" />
            </button>
            <a href="#rpa-p86" class="toc-link font-black text-[11px] text-gray-700 dark:text-gray-200">CHAPITRE 5</a>
            <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-p86', event)">
                <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
            </button>
        </div>
        
        <div class="toc-content hidden border-l border-orange-100 dark:border-orange-900/30 ml-[7px] pl-3 mt-0.5 space-y-0.5">
            {{-- 5.1 --}}
            <div class="toc-node" data-section="rpa-art-5.1" data-level="2">
                <div class="toc-header group">
                    <div class="w-4"></div>
                    <a href="#rpa-art-5.1" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">5.1 Généralités</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-5.1', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
            </div>
            {{-- 5.2 --}}
            <div class="toc-node" data-section="rpa-art-5.2" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-5.2" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">5.2 Combinaisons d'actions</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-5.2', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-5.2.1">
                        <a href="#rpa-art-5.2.1" class="toc-link toc-leaf">5.2.1 Composantes horizontales</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-5.2.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-5.2.2">
                        <a href="#rpa-art-5.2.2" class="toc-link toc-leaf">5.2.2 Composante verticale</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-5.2.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
            {{-- 5.3 --}}
            <div class="toc-node" data-section="rpa-art-5.3" data-level="2">
                <div class="toc-header group">
                    <div class="w-4"></div>
                    <a href="#rpa-art-5.3" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">5.3 Résistance</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-5.3', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
            </div>
            {{-- 5.4 --}}
            <div class="toc-node" data-section="rpa-art-5.4" data-level="2">
                <div class="toc-header group">
                    <div class="w-4"></div>
                    <a href="#rpa-art-5.4" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">5.4 Ductilité</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-5.4', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
            </div>
            {{-- 5.5 --}}
            <div class="toc-node" data-section="rpa-art-5.5" data-level="2">
                <div class="toc-header group">
                    <div class="w-4"></div>
                    <a href="#rpa-art-5.5" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">5.5 Équilibre d'ensemble</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-5.5', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
            </div>
            {{-- 5.6 --}}
            <div class="toc-node" data-section="rpa-art-5.6" data-level="2">
                <div class="toc-header group">
                    <div class="w-4"></div>
                    <a href="#rpa-art-5.6" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">5.6 Résistance des planchers</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-5.6', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
            </div>
            {{-- 5.7 --}}
            <div class="toc-node" data-section="rpa-art-5.7" data-level="2">
                <div class="toc-header group">
                    <div class="w-4"></div>
                    <a href="#rpa-art-5.7" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">5.7 Stabilité des fondations</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-5.7', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
            </div>
            {{-- 5.8 --}}
            <div class="toc-node" data-section="rpa-art-5.8" data-level="2">
                <div class="toc-header group">
                    <div class="w-4"></div>
                    <a href="#rpa-art-5.8" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">5.8 Joints sismiques</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-5.8', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
            </div>
            {{-- 5.9 --}}
            <div class="toc-node" data-section="rpa-art-5.9" data-level="2">
                <div class="toc-header group">
                    <div class="w-4"></div>
                    <a href="#rpa-art-5.9" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">5.9 Effet P-Δ</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-5.9', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
            </div>
            {{-- 5.10 --}}
            <div class="toc-node" data-section="rpa-art-5.10" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-5.10" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">5.10 Déplacements inter-étages</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-5.10', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-5.10.1">
                        <a href="#rpa-art-5.10.1" class="toc-link toc-leaf">5.10.1 Justification</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-5.10.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-5.10.2">
                        <a href="#rpa-art-5.10.2" class="toc-link toc-leaf">5.10.2 Seuils admissibles</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-5.10.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    {{-- Chapter 5 --}}
    @for($p=86; $p<=92; $p++)
        <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-p{{ $p }}">
            <a href="#rpa-p{{ $p }}" class="toc-link flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-orange-50 dark:hover:bg-orange-900/10 text-[10px] font-medium text-gray-600 dark:text-gray-400 transition-all">
                <span class="w-5 h-5 flex items-center justify-center bg-gray-100 dark:bg-gray-700 rounded text-[8px] font-bold">P</span>
                Page {{ $p }}
            </a>
        </div>
    @endfor
@endif
