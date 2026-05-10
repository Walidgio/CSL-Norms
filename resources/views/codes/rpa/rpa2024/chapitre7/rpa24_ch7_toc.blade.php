@if(($type ?? 'chapters') === 'chapters')
    {{-- Chapter 7 --}}
    <div class="toc-node" data-section="rpa-p104" data-level="1">
        <div class="toc-header group">
            <button class="toc-toggle-btn" aria-label="Toggle Chapter">
                <x-icon name="chevron-right" class="w-3.5 h-3.5 text-orange-500 transition-transform duration-300" />
            </button>
            <a href="#rpa-p104" class="toc-link font-black text-[11px] text-gray-700 dark:text-gray-200">CHAPITRE 7</a>
            <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-p104', event)">
                <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
            </button>
        </div>
        
        <div class="toc-content hidden border-l border-orange-100 dark:border-orange-900/30 ml-[7px] pl-3 mt-0.5 space-y-0.5">
            {{-- 7.1 Généralités --}}
            <div class="toc-node" data-section="rpa-art-7.1" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-7.1" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">7.1 Généralités</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.1', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.1.1">
                        <a href="#rpa-art-7.1.1" class="toc-link toc-leaf">7.1.1 Objet</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.1.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.1.2">
                        <a href="#rpa-art-7.1.2" class="toc-link toc-leaf">7.1.2 Éléments principaux</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.1.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-node" data-section="rpa-art-7.1.3" data-level="3">
                        <div class="toc-header group">
                            <button class="toc-toggle-btn text-blue-500 font-bold">+</button>
                            <a href="#rpa-art-7.1.3" class="toc-link font-bold text-[10px] text-gray-500">7.1.3 Définitions</a>
                            <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.1.3', event)">
                                <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                            </button>
                        </div>
                        <div class="toc-content hidden ml-2 border-l border-gray-100 dark:border-gray-800 pl-2 space-y-0.5">
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.1.3-zones">
                                <a href="#rpa-art-7.1.3-zones" class="toc-link toc-leaf text-[9px]">Zones critiques</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.1.3-zones', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.1.3-conf">
                                <a href="#rpa-art-7.1.3-conf" class="toc-link toc-leaf text-[9px]">Confinement</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.1.3-conf', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.1.3-effort">
                                <a href="#rpa-art-7.1.3-effort" class="toc-link toc-leaf text-[9px]">Effort normal réduit</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.1.3-effort', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 7.2 Matériaux --}}
            <div class="toc-node" data-section="rpa-art-7.2" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-7.2" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">7.2 Matériaux</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.2', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.2.1">
                        <a href="#rpa-art-7.2.1" class="toc-link toc-leaf">7.2.1 Béton</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.2.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.2.2">
                        <a href="#rpa-art-7.2.2" class="toc-link toc-leaf">7.2.2 Acier</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.2.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>

            {{-- 7.3 Conception --}}
            <div class="toc-node" data-section="rpa-art-7.3" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-7.3" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">7.3 Conception</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.3', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.3.1">
                        <a href="#rpa-art-7.3.1" class="toc-link toc-leaf">7.3.1 Comportement</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.3.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.3.2">
                        <a href="#rpa-art-7.3.2" class="toc-link toc-leaf">7.3.2 Sécurité</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.3.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>

            {{-- 7.4 Poteaux --}}
            <div class="toc-node" data-section="rpa-art-7.4" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-7.4" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">7.4 Poteaux</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.4', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.4.1">
                        <a href="#rpa-art-7.4.1" class="toc-link toc-leaf">7.4.1 Coffrage</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.4.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-node" data-section="rpa-art-7.4.2" data-level="3">
                        <div class="toc-header group">
                            <button class="toc-toggle-btn text-blue-500 font-bold">+</button>
                            <a href="#rpa-art-7.4.2" class="toc-link font-bold text-[10px] text-gray-500">7.4.2 Ferraillage</a>
                            <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.4.2', event)">
                                <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                            </button>
                        </div>
                        <div class="toc-content hidden ml-2 border-l border-gray-100 dark:border-gray-800 pl-2 space-y-0.5">
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.4.2-duct">
                                <a href="#rpa-art-7.4.2-duct" class="toc-link toc-leaf text-[9px]">7.4.2.1 Ductilité</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.4.2-duct', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.4.2-long">
                                <a href="#rpa-art-7.4.2-long" class="toc-link toc-leaf text-[9px]">7.4.2.2 Longitudinal</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.4.2-long', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.4.2-trans">
                                <a href="#rpa-art-7.4.2-trans" class="toc-link toc-leaf text-[9px]">7.4.2.3 Transversal</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.4.2-trans', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.4.3">
                        <a href="#rpa-art-7.4.3" class="toc-link toc-leaf">7.4.3 Vérifications</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.4.3', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>

            {{-- 7.5 Poutres --}}
            <div class="toc-node" data-section="rpa-art-7.5" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-7.5" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">7.5 Poutres</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.5', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.5.1">
                        <a href="#rpa-art-7.5.1" class="toc-link toc-leaf">7.5.1 Coffrage</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.5.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.5.2">
                        <a href="#rpa-art-7.5.2" class="toc-link toc-leaf">7.5.2 Ferraillage</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.5.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>

            {{-- 7.6 Noeuds --}}
            <div class="toc-node" data-section="rpa-art-7.6" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-7.6" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">7.6 Noeuds</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.6', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.6.1">
                        <a href="#rpa-art-7.6.1" class="toc-link toc-leaf">7.6.1 Dispositions</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.6.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.6.2">
                        <a href="#rpa-art-7.6.2" class="toc-link toc-leaf">7.6.2 Dimensionnement</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.6.2', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>

            {{-- 7.7 Voiles --}}
            <div class="toc-node" data-section="rpa-art-7.7" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-7.7" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">7.7 Voiles</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.7', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.7.1">
                        <a href="#rpa-art-7.7.1" class="toc-link toc-leaf">7.7.1 Coffrages</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.7.1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-node" data-section="rpa-art-7.7.2" data-level="3">
                        <div class="toc-header group">
                            <button class="toc-toggle-btn text-blue-500 font-bold">+</button>
                            <a href="#rpa-art-7.7.2" class="toc-link font-bold text-[10px] text-gray-500">7.7.2 Vérifications</a>
                            <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.7.2', event)">
                                <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                            </button>
                        </div>
                        <div class="toc-content hidden ml-2 border-l border-gray-100 dark:border-gray-800 pl-2 space-y-0.5">
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.7.2-normal">
                                <a href="#rpa-art-7.7.2-normal" class="toc-link toc-leaf text-[9px]">Sollicitations normales</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.7.2-normal', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.7.2-cis">
                                <a href="#rpa-art-7.7.2-cis" class="toc-link toc-leaf text-[9px]">Contraintes limites</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.7.2-cis', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.7.3">
                        <a href="#rpa-art-7.7.3" class="toc-link toc-leaf">7.7.3 Linteaux</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.7.3', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                    <div class="toc-node" data-section="rpa-art-7.7.4" data-level="3">
                        <div class="toc-header group">
                            <button class="toc-toggle-btn text-blue-500 font-bold">+</button>
                            <a href="#rpa-art-7.7.4" class="toc-link font-bold text-[10px] text-gray-500">7.7.4 Ferraillages</a>
                            <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.7.4', event)">
                                <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                            </button>
                        </div>
                        <div class="toc-content hidden ml-2 border-l border-gray-100 dark:border-gray-800 pl-2 space-y-0.5">
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.7.4-rive">
                                <a href="#rpa-art-7.7.4-rive" class="toc-link toc-leaf text-[9px]">Éléments de rive</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.7.4-rive', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.7.4-ame">
                                <a href="#rpa-art-7.7.4-ame" class="toc-link toc-leaf text-[9px]">Ferraillage d'âme</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.7.4-ame', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="toc-node" data-section="rpa-art-7.7.5" data-level="3">
                        <div class="toc-header group">
                            <button class="toc-toggle-btn text-blue-500 font-bold">+</button>
                            <a href="#rpa-art-7.7.5" class="toc-link font-bold text-[10px] text-gray-500">7.7.5 Ductilité</a>
                            <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.7.5', event)">
                                <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                            </button>
                        </div>
                        <div class="toc-content hidden ml-2 border-l border-gray-100 dark:border-gray-800 pl-2 space-y-0.5">
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.7.4-sup">
                                <a href="#rpa-art-7.7.4-sup" class="toc-link toc-leaf text-[9px]">Zone supérieure</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.7.4-sup', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.7.4-courts">
                                <a href="#rpa-art-7.7.4-courts" class="toc-link toc-leaf text-[9px]">Voiles courts</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.7.4-courts', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.7.4-communes">
                                <a href="#rpa-art-7.7.4-communes" class="toc-link toc-leaf text-[9px]">Règles communes</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.7.4-communes', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                            <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.7.4-couture">
                                <a href="#rpa-art-7.7.4-couture" class="toc-link toc-leaf text-[9px]">Aciers de couture</a>
                                <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.7.4-couture', event)">
                                    <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 7.8 Jonctions --}}
            <div class="toc-node" data-section="rpa-art-7.8" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-7.8" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">7.8 Jonctions</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.8', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.8-1">
                        <a href="#rpa-art-7.8-1" class="toc-link toc-leaf">7.8.1 Zone critique</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.8-1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>

            {{-- 7.9 Dalles --}}
            <div class="toc-node" data-section="rpa-art-7.9" data-level="2">
                <div class="toc-header group">
                    <button class="toc-toggle-btn text-orange-500 font-bold">+</button>
                    <a href="#rpa-art-7.9" class="toc-link font-bold text-[10px] text-gray-600 dark:text-gray-300">7.9 Dalles</a>
                    <button class="fav-btn ml-auto opacity-0 group-hover:opacity-100 transition-opacity" onclick="toggleFav('rpa-art-7.9', event)">
                        <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                    </button>
                </div>
                <div class="toc-content hidden ml-2 pl-2 border-l border-gray-100 dark:border-gray-800 space-y-0.5 mt-0.5">
                    <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-art-7.9-1">
                        <a href="#rpa-art-7.9-1" class="toc-link toc-leaf">7.9.1 Chaînage</a>
                        <button class="fav-btn opacity-0 group-hover:opacity-100 transition-opacity pr-2" onclick="toggleFav('rpa-art-7.9-1', event)">
                            <x-icon name="star" class="w-3 h-3 text-gray-300 hover:text-amber-400" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    {{-- Chapter 7 --}}
    @for($p=104; $p<=130; $p++)
        <div class="toc-leaf-wrapper group flex items-center justify-between" data-section="rpa-p{{ $p }}">
            <a href="#rpa-p{{ $p }}" class="toc-link flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-orange-50 dark:hover:bg-orange-900/10 text-[10px] font-medium text-gray-600 dark:text-gray-400 transition-all">
                <span class="w-5 h-5 flex items-center justify-center bg-gray-100 dark:bg-gray-700 rounded text-[8px] font-bold">P</span>
                Page {{ $p }}
            </a>
        </div>
    @endfor
@endif
