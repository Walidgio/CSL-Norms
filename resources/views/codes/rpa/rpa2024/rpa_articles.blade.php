<article id="rpa-2024" class="article card p-8 dark:bg-transparent border-0 shadow-none">
    <div class="mb-10">
        <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 bg-orange-600 rounded-2xl flex items-center justify-center shadow-lg shadow-orange-500/20">
                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
                    <span class="lang-en">RPA 2024 (Original Reference)</span>
                    <span class="lang-fr">RPA 2024 (Référence Originale)</span>
                </h2>
                <p class="text-sm text-slate-500 font-medium">
                    <span class="lang-en">Official Algerian Seismic Regulations (2024 Edition)</span>
                    <span class="lang-fr">Règlement Parasismique Algérien (Édition 2024)</span>
                </p>
            </div>
            {{-- delete explanation: Page Theme toggle moved to the main page-header-bar in index.blade.php for better accessibility and UX --}}
        </div>

        {{-- Page Styles for Exact Replica --}}
        <style>
            .rpa-page {
                position: relative; /* Required for floating annotation bulbs */
                background: white;
                color: black;
                font-family: 'Times New Roman', Times, serif;
                font-size: 15px;
                line-height: 1.5;
                padding: 3rem 4rem;
                margin: 0 auto 2rem auto;
                max-width: 800px;
                box-shadow: 0 10px 25px rgba(0,0,0,0.1);
                border: 1px solid #e5e7eb;
                scroll-margin-top: 100px; /* Offset for fixed headers when scrolling to anchor */
            }

            @media (max-width: 640px) {
                .rpa-page {
                    padding: 1.5rem 1rem;
                    margin: 0;
                    max-width: 100%;
                    box-shadow: none;
                    border-left: none;
                    border-right: none;
                    border-top: none;
                }
            }
            .rpa-header {
                display: flex;
                justify-content: space-between;
                border-bottom: 1px solid black;
                padding-bottom: 5px;
                margin-bottom: 20px;
                font-size: 14px;
            }
            .rpa-header .chapter {
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 0.5px;
            }
            .rpa-h2 { font-size: 16px; font-weight: bold; margin: 25px 0 12px 0; color: #d97706; scroll-margin-top: 100px; } 
            .rpa-h2-black { font-size: 16px; font-weight: bold; margin: 25px 0 12px 0; color: #1e293b; }
            .dark .rpa-theme-responsive .rpa-h2-black { color: #f1f5f9; }
            .rpa-h3 { font-size: 15px; font-weight: bold; margin: 20px 0 10px 0; color: #d97706; }
            .rpa-h3-bold { font-size: 15px; font-weight: bold; margin: 20px 0 10px 0; color: #1e293b; }
            .dark .rpa-theme-responsive .rpa-h3-bold { color: #f1f5f9; }
            .rpa-equation-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 15px 0;
                scroll-margin-top: 100px;
            }
            .rpa-equation {
                flex-grow: 1;
                text-align: center;
                font-style: italic;
            }
            .rpa-eq-num {
                min-width: 50px;
                text-align: right;
            }
            .rpa-bullet { margin-left: 20px; margin-bottom: 5px; }
            .rpa-indent { margin-left: 20px; }
            .rpa-indent-2 { margin-left: 40px; }
            .rpa-fraction { display: inline-block; text-align: center; vertical-align: middle; margin: 0 5px; }
            .rpa-fraction-top { border-bottom: 1px solid black; padding: 0 2px; display: block; }
            .rpa-fraction-bottom { padding: 0 2px; display: block; }
            .rpa-system { display: inline-flex; align-items: center; }
            .rpa-system-brace { font-size: 3em; font-weight: lighter; margin-right: 5px; }
            .rpa-system-lines { display: flex; flex-direction: column; gap: 5px; }
            
            .rpa-inline-link {
                color: #2563eb;
                text-decoration: underline;
                cursor: pointer;
            }
            .rpa-inline-link:hover {
                color: #1d4ed8;
            }

            /* Highlight element when navigated to via anchor */
            :target:not(.rpa-page) {
                animation: rpa-highlight 2s ease-out;
            }
            @keyframes rpa-highlight {
                0% { background-color: rgba(249, 115, 22, 0.3); box-shadow: 0 0 0 10px rgba(249, 115, 22, 0.1); }
                100% { box-shadow: none; }
            }

            /* Permanent highlight for section title in target */
            [id^="rpa-art-"]:target, [id^="rpa-eqt-"]:target, [id^="rpa-fig-"]:target {
                border-left: 4px solid #f97316;
                padding-left: 10px;
                margin-left: -14px;
            }

            /* Self-linkable elements (Click to set hash/highlight) */
            .rpa-h2, .rpa-h3, .rpa-h3-bold, .rpa-eq-num, [id^="rpa-fig-"] {
                cursor: pointer;
                transition: background-color 0.2s ease;
            }
            .rpa-h2:hover, .rpa-h3:hover, .rpa-h3-bold:hover, .rpa-eq-num:hover, [id^="rpa-fig-"]:hover {
                background-color: rgba(0, 0, 0, 0.04);
            }
            .dark .doc-theme-responsive .rpa-h2:hover, 
            .dark .doc-theme-responsive .rpa-h3:hover, 
            .dark .doc-theme-responsive .rpa-h3-bold:hover,
            .dark .doc-theme-responsive .rpa-eq-num:hover,
            .dark .doc-theme-responsive [id^="rpa-fig-"]:hover {
                background-color: rgba(255, 255, 255, 0.08);
            }

            /* Theme Responsive Styles (Optimized for Night Reading / Low Eye Strain) */
            :root.dark .doc-theme-responsive .rpa-page,
            .dark .doc-theme-responsive .rpa-page {
                background-color: #0f172a !important; /* slate-900: Deep soft navy */
                color: #cbd5e1 !important; /* slate-300: Soft grey-blue text, reduces halation */
                border-color: #1e293b !important; /* slate-800 */
                box-shadow: 0 10px 40px rgba(0,0,0,0.4) !important;
            }
            :root.dark .doc-theme-responsive .rpa-header,
            .dark .doc-theme-responsive .rpa-header {
                border-bottom-color: #334155 !important; /* slate-700 */
                color: #94a3b8 !important; /* slate-400 */
            }
            :root.dark .doc-theme-responsive .rpa-fraction-top,
            .dark .doc-theme-responsive .rpa-fraction-top {
                border-bottom-color: #cbd5e1 !important;
            }
            :root.dark .doc-theme-responsive .rpa-h2,
            .dark .doc-theme-responsive .rpa-h2 {
                color: #fdba74 !important; /* orange-300: Softer than orange-400 */
            }
            :root.dark .doc-theme-responsive .rpa-h2-black,
            .dark .doc-theme-responsive .rpa-h2-black {
                color: #e2e8f0 !important; /* slate-200 */
            }
            :root.dark .doc-theme-responsive .rpa-h3,
            .dark .doc-theme-responsive .rpa-h3 {
                color: #e2e8f0 !important; /* slate-200 */
            }
            :root.dark .doc-theme-responsive .rpa-inline-link,
            .dark .doc-theme-responsive .rpa-inline-link {
                color: #93c5fd !important; /* blue-300: Softer than blue-400 */
            }
        </style>

        {{-- delete explanation: toggleRpaTheme script moved to index.blade.php to support the relocated header toggle button --}}

        {{-- ==================== CHAPITRE 3: CRITERES DE CLASSIFICATION ==================== --}}
        @for($p=44; $p<=73; $p++)
            
            @include('norms::codes.rpa.rpa2024.chapitre3.Ch3Pages.rpa24_ch3_p' . $p)
        @endfor

        {{-- ==================== CHAPITRE 4: REGLES DE CALCUL ==================== --}}
        @for($p=76; $p<=84; $p++)
            @include('norms::codes.rpa.rpa2024.chapitre4.Ch4Pages.rpa24_ch4_p' . $p)
        @endfor

        {{-- ==================== CHAPITRE 5: JUSTIFICATION DE LA SECURITE ==================== --}}
        @for($p=86; $p<=92; $p++)
            @include('norms::codes.rpa.rpa2024.chapitre5.Ch5Pages.rpa24_ch5_p' . $p)
        @endfor

        {{-- ==================== CHAPITRE 7: STRUCTURES EN BETON ARME ==================== --}}
        
        @for($p=104; $p<=130; $p++)
            @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Pages.rpa24_ch7_p' . $p)
        @endfor

        {{-- delete explanation: Test chapter removed as requested by USER to focus on real chapters. --}}

    </div>

    <script>
        /**
         * Robust Scroll to Section with Header Offset
         */
        function scrollToSection(id) {
            const target = document.getElementById(id);
            if (target) {
                const offset = 100; // Match scroll-margin-top
                const elementPosition = target.getBoundingClientRect().top + window.pageYOffset;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
                
                // Update URL hash without abrupt jump
                history.pushState(null, null, '#' + id);
            }
        }

        /**
         * Initialize Navigation & Scroll-Spy
         */
        /* delete explanation: Redundant scroll spy logic removed. Now handled by the unified TOC system in toc.blade.php to avoid conflicts and jumping. */
    </script>
</article>
