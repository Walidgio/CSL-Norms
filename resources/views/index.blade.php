@extends('layouts.app', ['fullWidth' => true, 'zenMode' => isset($current)])

@section('title', 'Normes & Réglementations - ' . config('app.name'))

@section('content')
    @include('norms::partials.ui-theme-init')
    @if(isset($current))
        @include('norms::partials.doc-lecture-theme')
    @endif
    <div class="flex flex-col h-screen overflow-hidden bg-gray-50 dark:bg-gray-900 {{ isset($current) ? 'zen-mode-active' : '' }}">
        {{-- Header Bar --}}
    <div id="page-header-bar" class="flex items-center justify-between px-3 sm:px-6 py-0 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-700 transition-all duration-300">
        <div class="flex items-center gap-2 sm:gap-4">
            {{-- Hamburger Toggle --}}
            <button onclick="toggleSidebar()" class="p-2 -ml-1 sm:-ml-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-500 dark:text-gray-400 transition-colors" id="sidebar-toggle-btn">
                <x-icon name="menu" class="w-5 h-5 sm:w-6 sm:h-6" />
            </button>

            <div class="flex items-center gap-2 sm:gap-3 border-l border-gray-200 dark:border-gray-700 pl-2 sm:pl-4">
                    <div class="p-0.5 rounded bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400">
                        <x-icon name="book-open" class="w-4 h-4" />
                    </div>
                    <div>
                        <h1 class="text-[10px] font-bold text-gray-900 dark:text-white leading-none">Bibliothèque</h1>
                        <p class="text-[8px] text-gray-500 dark:text-gray-400 mt-0">
                            @if(isset($current))
                                {{ $current['name'] }}
                            @else
                                Consultez les règlements
                            @endif
                        </p>
                    </div>
                </div>
    </div>

            <div class="flex items-center gap-3">
                @if(isset($current) && ($current['pdf'] ?? false) && isset($current['pdf_file']))
                    @php
                        $pdfPath = 'assets/norms/' . $current['pdf_file'];
                        $fileExists = file_exists(public_path($pdfPath));
                    @endphp

                    <div class="flex items-center shadow-sm">
                        @if($fileExists)
                            {{-- Consulter Button --}}
                            <a href="{{ asset($pdfPath) }}" 
                               target="_blank"
                               class="flex items-center gap-1.5 px-3 py-1.5 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-l-md text-[10px] font-bold text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors">
                                <x-icon name="eye" class="w-3.5 h-3.5 text-indigo-500" />
                                Consulter PDF
                            </a>
                            {{-- Download Button --}}
                            <a href="{{ asset($pdfPath) }}" 
                               download="{{ $current['pdf_file'] }}"
                               class="flex items-center justify-center p-1.5 bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 border border-indigo-600 dark:border-indigo-500 rounded-r-md text-white transition-colors"
                               title="Télécharger le PDF">
                                <x-icon name="download" class="w-3.5 h-3.5" />
                            </a>
                        @else
                            {{-- Coming Soon Button --}}
                            <div class="flex items-center gap-1.5 px-3 py-1.5 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-md text-[10px] font-bold text-gray-400 dark:text-gray-500 cursor-not-allowed">
                                <x-icon name="clock" class="w-3.5 h-3.5" />
                                PDF bientôt disponible
                            </div>
                        @endif
                    </div>
                @endif

                {{-- Document Theme Toggle (Global) --}}
                @if(isset($current))
                    <div class="flex items-center gap-1.5 sm:gap-2 px-1.5 sm:px-2 py-1 bg-gray-50/50 dark:bg-gray-700/50 rounded-lg border border-gray-200/50 dark:border-gray-600/50">
                        <span class="text-[8px] sm:text-[9px] font-black uppercase tracking-tighter text-gray-400 dark:text-gray-500">Lecture:</span>
                        <button type="button" id="doc-theme-toggle" onclick="toggleDocTheme()" class="relative inline-flex h-4 w-7 sm:h-5 sm:w-9 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none bg-gray-200 dark:bg-gray-600" role="switch" aria-checked="false" aria-label="Mode lecture document">
                            <span id="doc-theme-toggle-knob" class="pointer-events-none relative inline-block h-3 w-3 sm:h-4 sm:w-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-0">
                                <span class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 duration-200 ease-in" aria-hidden="true" id="doc-theme-icon-light">
                                    <svg class="h-2 w-2 sm:h-2.5 sm:w-2.5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.22 2.366a1 1 0 011.415 0l.707.707a1 1 0 01-1.414 1.415l-.707-.707a1 1 0 010-1.415zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM14.929 15.636a1 1 0 01-1.414 0l-.707-.707a1 1 0 011.414-1.414l.707.707a1 1 0 010 1.414zM10 16a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zm-4.22-2.364a1 1 0 01-1.414 0l-.707-.707a1 1 0 011.414-1.414l.707.707a1 1 0 010 1.414zM3 10a1 1 0 01-1 1H1a1 1 0 110-2h1a1 1 0 011 1zM5.07 5.778a1 1 0 010-1.414l.707-.707a1 1 0 011.414 1.414l-.707.707a1 1 0 01-1.414 0zM10 5a5 5 0 100 10 5 5 0 000-10z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                                </span>
                                <span class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 duration-100 ease-out" aria-hidden="true" id="doc-theme-icon-dark">
                                    <svg class="h-2 w-2 sm:h-2.5 sm:w-2.5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                                </span>
                            </span>
                        </button>
                        <span id="doc-theme-label" class="hidden sm:block text-[9px] font-bold text-gray-500 dark:text-gray-400 w-[55px]">Fixe (Blanc)</span>
                    </div>
                @endif

                <button type="button" id="norms-ui-theme-toggle" onclick="toggleNormsUiTheme()" class="p-2 rounded-lg border border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-600 dark:text-amber-300 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors" title="Thème clair ou sombre" aria-label="Basculer entre thème clair et sombre">
                    <span class="dark:hidden" aria-hidden="true">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    </span>
                    <span class="hidden dark:inline" aria-hidden="true">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.22 2.366a1 1 0 011.415 0l.707.707a1 1 0 01-1.414 1.415l-.707-.707a1 1 0 010-1.415zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM14.929 15.636a1 1 0 01-1.414 0l-.707-.707a1 1 0 011.414-1.414l.707.707a1 1 0 010 1.414zM10 16a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zm-4.22-2.364a1 1 0 01-1.414 0l-.707-.707a1 1 0 011.414-1.414l.707.707a1 1 0 010 1.414zM3 10a1 1 0 01-1 1H1a1 1 0 110-2h1a1 1 0 011 1zM5.07 5.778a1 1 0 010-1.414l.707-.707a1 1 0 011.414 1.414l-.707.707a1 1 0 01-1.414 0zM10 5a5 5 0 100 10 5 5 0 000-10z" clip-rule="evenodd"></path></svg>
                    </span>
                </button>

                <a href="{{ route('norms') }}" class="text-[11px] font-bold text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                    Retour
                </a>
            </div>
        </div>

        <div class="flex flex-1 overflow-hidden relative">
            {{-- Sidebar Overlay (Mobile) --}}
            <div id="sidebar-overlay" onclick="toggleSidebar()" class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm z-40 hidden lg:hidden transition-opacity duration-300 opacity-0 pointer-events-none"></div>

            {{-- Sidebar --}}
            <div id="sidebar-container" class="transition-all duration-300 ease-in-out w-80 shrink-0 border-r border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 overflow-hidden z-50 flex flex-col h-full">
                @include('norms::partials.sidebar')
            </div>

            {{-- Content Area --}}
            @include('norms::partials.content')

            {{-- Global Remark System (Bulb Panel) --}}
            @if(isset($current))
                {{-- Auth metadata for remark system --}}
                <script>
                    window.authUserId = {{ auth()->id() ?? 'null' }};
                    window.authUserName = '{{ auth()->user()?->first_name ?? "Invité" }}';
                    window.isSuperAdmin = {{ (auth()->user()?->role === 'superadmin') ? 'true' : 'false' }};
                    window.csrfToken = '{{ csrf_token() }}';
                </script>
                @include('norms::partials.remark-panel.remark-styles')
                @include('norms::partials.remark-panel.remark-panel')
                @include('norms::partials.remark-panel.remark-script', ['docId' => $current['slug'] ?? 'generic_doc'])
            @endif
        </div>
    </div>

    <style>
        /* Custom Scrollbar for Sidebar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(156, 163, 175, 0.3);
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(156, 163, 175, 0.5);
        }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(71, 85, 105, 0.45);
        }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(100, 116, 139, 0.6);
        }

        /* Tree Animations */
        .tree-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .tree-item-active .tree-content {
            max-height: 1000px;
            transition: max-height 0.5s ease-in;
        }
        .chevron-rotate {
            transition: transform 0.3s ease;
        }
        .tree-item-active .chevron-rotate {
            transform: rotate(90deg);
        }

        /* Glass Effects */
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .dark .glass-card {
            background: rgba(31, 41, 55, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Sidebar Transitions */
        #sidebar-container.collapsed {
            width: 0;
            border-right-width: 0;
        }

        @media (max-width: 1024px) {
            #sidebar-container {
                position: absolute;
                z-index: 50;
                height: 100%;
                box-shadow: 20px 0 50px rgba(0,0,0,0.1);
            }
            #sidebar-container.collapsed {
                transform: translateX(-100%);
                width: 80px; /* Keep a bit for shadow or just 0 */
                width: 0;
            }
        }

        /* --- Zen Mode (Slim Persistent Header) --- */
        .zen-mode #page-header-bar {
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            height: 32px; /* Ultra-slim height */
            transform: none !important;
            opacity: 1 !important;
            pointer-events: auto !important;
        }

        /* Full viewport height for reading */
        .zen-mode-active {
            height: 100vh !important;
            padding-top: 0;
        }

        /* Remove any top padding/margin from main in Zen Mode */
        .zen-mode main {
            padding: 0 !important;
            margin: 0 !important;
        }

        /* Adjust sidebar and content top positions to match slim header */
        .zen-mode #sidebar-container,
        .zen-mode #content-area {
            height: calc(100vh - 32px);
        }
    </style>

    <script>
        function toggleFamily(familyId) {
            const allItems = document.querySelectorAll('.tree-family-item');
            const clickedItem = document.getElementById('family-' + familyId);
            const isActive = clickedItem.classList.contains('tree-item-active');

            // Collapse others
            allItems.forEach(item => {
                item.classList.remove('tree-item-active');
            });

            // Toggle clicked
            if (!isActive) {
                clickedItem.classList.add('tree-item-active');
            }
        }

        function filterNorms(query) {
            const q = query.toLowerCase();
            const families = document.querySelectorAll('.tree-family-item');

            families.forEach(family => {
                const familyName = family.getAttribute('data-name').toLowerCase();
                const versions = family.querySelectorAll('.version-link');
                let familyHasMatch = familyName.includes(q);

                versions.forEach(v => {
                    const vName = v.getAttribute('data-name').toLowerCase();
                    if (vName.includes(q)) {
                        v.classList.remove('hidden');
                        familyHasMatch = true;
                    } else {
                        v.classList.add('hidden');
                    }
                });

                if (familyHasMatch) {
                    family.classList.remove('hidden');
                    if (q.length > 0) family.classList.add('tree-item-active');
                } else {
                    family.classList.add('hidden');
                }
            });
        }

        function expandAll() {
            document.querySelectorAll('.tree-family-item').forEach(item => {
                item.classList.add('tree-item-active');
            });
        }

        function collapseAll() {
            document.querySelectorAll('.tree-family-item').forEach(item => {
                item.classList.remove('tree-item-active');
            });
        }

        const NORMS_UI_THEME_KEY = 'norms-ui-theme';

        window.toggleNormsUiTheme = function () {
            const root = document.documentElement;
            const nextIsDark = !root.classList.contains('dark');
            if (nextIsDark) {
                root.classList.add('dark');
            } else {
                root.classList.remove('dark');
            }
            try {
                localStorage.setItem(NORMS_UI_THEME_KEY, nextIsDark ? 'dark' : 'light');
            } catch (e) {}
        };

        // Global Scroll Function
    function scrollToSection(id) {
        const target = document.getElementById(id);
        if (target) {
            // Update URL hash to trigger :target styles
            if (location.hash !== '#' + id) {
                history.pushState(null, null, '#' + id);
            }
            
            // Scroll to center of viewport
            target.scrollIntoView({ 
                behavior: 'smooth', 
                block: 'center',
                inline: 'nearest' 
            });
        }
    }

    function toggleDocTheme(isInit = false) {
        const docContainer = document.getElementById('norms-content-body');
        const btn = document.getElementById('doc-theme-toggle');
        const knob = document.getElementById('doc-theme-toggle-knob');
        const iconLight = document.getElementById('doc-theme-icon-light');
        const iconDark = document.getElementById('doc-theme-icon-dark');
        const label = document.getElementById('doc-theme-label');

        if (!docContainer || !btn) return;

        let isResponsive;
        if (isInit) {
            isResponsive = localStorage.getItem('doc-theme-responsive') === 'true';
        } else {
            isResponsive = !docContainer.classList.contains('doc-theme-responsive');
        }

        if (!isResponsive) {
            // Switch to Fixed (White)
            docContainer.classList.remove('doc-theme-responsive');
            btn.classList.remove('bg-indigo-500');
            btn.classList.add('bg-gray-200', 'dark:bg-gray-600');
            btn.setAttribute('aria-checked', 'false');
            if (knob) {
                knob.classList.remove('translate-x-4', 'sm:translate-x-5', 'translate-x-5');
                knob.classList.add('translate-x-0');
            }
            if (iconLight) {
                iconLight.classList.remove('opacity-0');
                iconLight.classList.add('opacity-100');
            }
            if (iconDark) {
                iconDark.classList.remove('opacity-100');
                iconDark.classList.add('opacity-0');
            }
            if (label) label.textContent = "Fixe (Blanc)";
            if(!isInit) localStorage.setItem('doc-theme-responsive', 'false');
        } else {
            // Switch to Responsive (Follows Theme)
            docContainer.classList.add('doc-theme-responsive');
            btn.classList.remove('bg-gray-200', 'dark:bg-gray-600');
            btn.classList.add('bg-indigo-500');
            btn.setAttribute('aria-checked', 'true');
            if (knob) {
                knob.classList.remove('translate-x-0', 'translate-x-5');
                knob.classList.add('translate-x-4', 'sm:translate-x-5');
            }
            if (iconLight) {
                iconLight.classList.remove('opacity-100');
                iconLight.classList.add('opacity-0');
            }
            if (iconDark) {
                iconDark.classList.remove('opacity-0');
                iconDark.classList.add('opacity-100');
            }
            if (label) label.textContent = "Responsive";
            if(!isInit) localStorage.setItem('doc-theme-responsive', 'true');
        }
    }

    // Smooth Scroll for TOC & Internal Links
    document.addEventListener('DOMContentLoaded', () => {
        document.body.addEventListener('click', (e) => {
            const link = e.target.closest('a');
            if (link && link.hash && link.hash.startsWith('#')) {
                const targetId = link.hash.substring(1);
                const target = document.getElementById(targetId);
                
                if (target) {
                    e.preventDefault();
                    scrollToSection(targetId);
                }
                return; // Don't process self-linking if it was a real link
            }

            // Self-linking for specific text elements (Titles, Eq Numbers, Figure Titles)
            const selfLinkTarget = e.target.closest('.rpa-h2, .rpa-h3, .rpa-h3-bold, .rpa-eq-num, [id^="rpa-fig-"]');
            if (selfLinkTarget) {
                // Find the associated ID (might be on the element itself or a parent container)
                const targetWithId = selfLinkTarget.id ? selfLinkTarget : selfLinkTarget.closest('[id^="rpa-"]');
                if (targetWithId) {
                    scrollToSection(targetWithId.id);
                }
            }
        });

        // Initialize theme
        toggleDocTheme(true);
    });

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar-container');
            const overlay = document.getElementById('sidebar-overlay');

            const isNowCollapsed = sidebar.classList.toggle('collapsed');

            // Handle Overlay on mobile
            if (window.innerWidth < 1024) {
                if (isNowCollapsed) {
                    overlay.classList.add('opacity-0', 'pointer-events-none');
                    setTimeout(() => overlay.classList.add('hidden'), 300);
                } else {
                    overlay.classList.remove('hidden');
                    setTimeout(() => overlay.classList.remove('opacity-0', 'pointer-events-none'), 10);
                }
            }

            // Save state in localStorage (desktop only)
            if (window.innerWidth >= 1024) {
                localStorage.setItem('norms-sidebar-collapsed', isNowCollapsed);
            }
        }

        // Initialize sidebar state & handle resize
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.getElementById('sidebar-container');
            const overlay = document.getElementById('sidebar-overlay');
            
            const handleResize = () => {
                const isMobile = window.innerWidth < 1024;
                const wasCollapsed = localStorage.getItem('norms-sidebar-collapsed') === 'true';

                if (isMobile) {
                    sidebar.classList.add('collapsed');
                    overlay.classList.add('hidden', 'opacity-0', 'pointer-events-none');
                } else if (wasCollapsed) {
                    sidebar.classList.add('collapsed');
                } else {
                    sidebar.classList.remove('collapsed');
                }
            };

            handleResize();
            window.addEventListener('resize', handleResize);

            // --- Scroll Spy Implementation ---
            const mainContent = document.getElementById('norms-content-body');
            const tocLinks = document.querySelectorAll('#sidebar-container a[href^="#"]');
            const sections = document.querySelectorAll('[id^="rpa-art-"], [id^="rpa-p"], [id^="test-p"], [id^="test-art-"]');
            
            if (!mainContent || sections.length === 0) return;

            let isManualScrolling = false;
            let scrollTimeout;

            const observerOptions = {
                root: mainContent,
                rootMargin: '-10% 0px -70% 0px', // Detect when element enters the top 10-30% of scroll area
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                if (isManualScrolling) return;

                // Find the first intersecting entry (the one closest to our top margin)
                const intersectingEntries = entries.filter(e => e.isIntersecting);
                if (intersectingEntries.length > 0) {
                    // Sort by top position to be sure we get the most relevant one
                    intersectingEntries.sort((a, b) => a.boundingClientRect.top - b.boundingClientRect.top);
                    activateTocLink(intersectingEntries[0].target.id);
                }
            }, observerOptions);

            sections.forEach(section => observer.observe(section));

            function activateTocLink(id) {
                const activeLink = document.querySelector(`#sidebar-container a[href="#${id}"]`);
                if (!activeLink) return;

                // Remove active class from all
                tocLinks.forEach(link => link.classList.remove('toc-active-link'));

                // Add active class to current
                activeLink.classList.add('toc-active-link');

                // Auto-expand parents (Chapter -> Article -> Sub-article)
                expandParents(activeLink);

                // Smoothly scroll the sidebar to center the active link
                activeLink.scrollIntoView({ 
                    behavior: 'smooth', 
                    block: 'center',
                    inline: 'nearest'
                });
            }

            function expandParents(element) {
                let parent = element.parentElement;
                while (parent && parent !== sidebar) {
                    // Expand Chapter
                    if (parent.classList.contains('tree-chapter-item')) {
                        parent.classList.add('chapter-active');
                    }
                    // Expand Article
                    if (parent.classList.contains('tree-article-item')) {
                        if (!parent.classList.contains('article-active')) {
                            parent.classList.add('article-active');
                            const icon = parent.querySelector('.article-toggle-icon');
                            if (icon) icon.textContent = '−';
                        }
                    }
                    parent = parent.parentElement;
                }
            }

            // Detect clicks to manage manual scroll state
            document.body.addEventListener('click', (e) => {
                const link = e.target.closest('a[href^="#"]');
                if (link) {
                    isManualScrolling = true;
                    clearTimeout(scrollTimeout);
                    
                    const id = link.hash.substring(1);
                    activateTocLink(id);

                    // Re-enable observer after smooth scroll finishes
                    scrollTimeout = setTimeout(() => {
                        isManualScrolling = false;
                    }, 1000);
                }
            });
        });
    </script>
    
    {{-- Remark/Annotation System --}}
    @if(isset($current))
        @include('norms::partials.remark-panel.remark-panel', ['docId' => $current['slug']])
        @include('norms::partials.remark-panel.remark-styles')
        @include('norms::partials.remark-panel.remark-script', ['docId' => $current['slug']])
    @endif
@endsection
