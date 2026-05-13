<article id="rpa-2024" class="article card p-5 sm:p-8 dark:bg-transparent border-0 shadow-none">
    <header class="relative mb-8 sm:mb-10 overflow-hidden rounded-2xl sm:rounded-3xl border border-orange-200/50 bg-gradient-to-br from-white via-orange-50/40 to-amber-50/60 shadow-lg shadow-orange-900/[0.06] ring-1 ring-orange-500/5 dark:border-orange-500/25 dark:from-slate-900 dark:via-slate-900 dark:to-orange-950/50 dark:shadow-black/30 dark:ring-orange-400/10">
        <div class="pointer-events-none absolute -right-20 -top-28 h-72 w-72 rounded-full bg-gradient-to-br from-orange-400/30 to-amber-300/10 blur-3xl dark:from-orange-500/20 dark:to-transparent" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -bottom-16 -left-16 h-56 w-56 rounded-full bg-orange-300/15 blur-2xl dark:bg-orange-600/10" aria-hidden="true"></div>
        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-orange-400/25 to-transparent dark:via-orange-500/20" aria-hidden="true"></div>

        <div class="relative flex flex-col items-center gap-6 p-6 sm:p-8 md:flex-row md:items-center md:gap-8 md:text-left">
            <div class="relative shrink-0">
                <div class="absolute -inset-1 rounded-[1.15rem] bg-gradient-to-br from-orange-400 via-amber-500 to-orange-600 opacity-50 blur-md dark:opacity-35" aria-hidden="true"></div>
                <div class="relative flex h-[4.5rem] w-[4.5rem] items-center justify-center overflow-hidden rounded-2xl border border-white/90 bg-white shadow-xl shadow-orange-500/15 ring-1 ring-orange-500/10 dark:border-slate-600/80 dark:bg-slate-800 dark:ring-orange-500/20 sm:h-[5.25rem] sm:w-[5.25rem]">
                    @include('norms::codes.rpa.rpa2024.rpa24_icon', ['class' => 'h-full w-full'])
                </div>
            </div>

            <div class="min-w-0 flex-1 text-center md:text-left">
                <p class="mb-3 flex justify-center md:justify-start">
                    <span class="inline-flex items-center gap-2 rounded-full border border-orange-200/90 bg-white/90 px-3.5 py-1.5 text-[10px] font-bold uppercase tracking-[0.22em] text-orange-800 shadow-sm backdrop-blur-sm dark:border-orange-500/35 dark:bg-slate-800/90 dark:text-orange-200">
                        <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-orange-500 shadow-[0_0_8px_rgba(249,115,22,0.8)] dark:bg-orange-400" aria-hidden="true"></span>
                        <span class="lang-en">Seismic code</span>
                        <span class="lang-fr">Code parasismique</span>
                    </span>
                </p>
                <h1 class="text-[clamp(1.5rem,4vw,2.25rem)] font-bold leading-tight tracking-tight text-slate-900 dark:text-white">
                    <span class="lang-en">Original reference</span>
                    <span class="lang-fr">Référence originale</span>
                </h1>
                <p class="mt-2 max-w-2xl text-sm font-medium leading-relaxed text-slate-600 dark:text-slate-300 sm:text-[0.95rem] mx-auto md:mx-0">
                    <span class="lang-en">Official Algerian Seismic Regulations — 2024 edition.</span>
                    <span class="lang-fr">Règlement Parasismique Algérien — édition 2024.</span>
                </p>
                <div class="mx-auto mt-5 h-1 w-16 rounded-full bg-gradient-to-r from-orange-500 via-amber-500 to-orange-400 md:mx-0" aria-hidden="true"></div>
            </div>
        </div>
        {{-- Page theme toggle lives in page-header-bar (index.blade.php) --}}
    </header>

    <div>
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
            .rpa-header-meta .chapter {
                text-transform: none;
                letter-spacing: 0;
                font-weight: 600;
            }
            .rpa-chapter--3 .rpa-page {
                border-radius: 0.75rem;
                border-color: rgba(234, 88, 12, 0.12);
                box-shadow: 0 8px 30px rgba(15, 23, 42, 0.06);
            }
            .dark .doc-theme-responsive .rpa-chapter--3 .rpa-page {
                box-shadow: 0 12px 40px rgba(0, 0, 0, 0.35);
            }
            .rpa-chapter--5 .rpa-page {
                border-radius: 0.75rem;
                border-color: rgba(234, 88, 12, 0.12);
                box-shadow: 0 8px 30px rgba(15, 23, 42, 0.06);
            }
            .dark .doc-theme-responsive .rpa-chapter--5 .rpa-page {
                box-shadow: 0 12px 40px rgba(0, 0, 0, 0.35);
            }
            a.rpa-cover-nav-link {
                border: 1px solid transparent;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.65), rgba(255, 251, 235, 0.45));
            }
            .dark .doc-theme-responsive a.rpa-cover-nav-link {
                background: linear-gradient(135deg, rgba(30, 41, 59, 0.55), rgba(15, 23, 42, 0.35));
            }
            a.rpa-cover-nav-link:hover {
                transform: translateX(4px);
                border-color: rgba(251, 146, 60, 0.4);
                box-shadow: 0 12px 32px rgba(234, 88, 12, 0.14);
            }
            a.rpa-cover-nav-link:focus-visible {
                border-color: rgba(251, 146, 60, 0.85);
            }
            .rpa-chapter--3 h2.rpa-h2,
            .rpa-chapter--5 h2.rpa-h2,
            .rpa-chapter--3 h3.rpa-h2,
            .rpa-chapter--5 h3.rpa-h2,
            .rpa-chapter--3 h3.rpa-h3,
            .rpa-chapter--5 h3.rpa-h3 {
                position: relative;
                padding-left: 0.65rem;
            }
            .rpa-chapter--3 h2.rpa-h2::before,
            .rpa-chapter--5 h2.rpa-h2::before,
            .rpa-chapter--3 h3.rpa-h2::before,
            .rpa-chapter--5 h3.rpa-h2::before,
            .rpa-chapter--3 h3.rpa-h3::before,
            .rpa-chapter--5 h3.rpa-h3::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0.2em;
                bottom: 0.2em;
                width: 3px;
                border-radius: 2px;
                background: linear-gradient(180deg, #fdba74, #ea580c);
            }
            .rpa-chapter--3 a.rpa-inline-link,
            .rpa-chapter--5 a.rpa-inline-link {
                text-decoration: none;
                border-bottom: 2px solid rgba(249, 115, 22, 0.35);
                transition: border-color 0.2s ease, color 0.2s ease, box-shadow 0.2s ease;
            }
            .rpa-chapter--3 a.rpa-inline-link:hover,
            .rpa-chapter--5 a.rpa-inline-link:hover {
                border-bottom-color: #ea580c;
                box-shadow: 0 14px 32px -18px rgba(234, 88, 12, 0.45);
            }
            .dark .doc-theme-responsive .rpa-chapter--3 a.rpa-inline-link,
            .dark .doc-theme-responsive .rpa-chapter--5 a.rpa-inline-link {
                border-bottom-color: rgba(147, 197, 253, 0.45);
            }
            .dark .doc-theme-responsive .rpa-chapter--3 a.rpa-inline-link:hover,
            .dark .doc-theme-responsive .rpa-chapter--5 a.rpa-inline-link:hover {
                border-bottom-color: #fdba74;
            }
            .rpa-header .chapter {
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 0.5px;
            }
            .rpa-h2 { font-size: 16px; font-weight: bold; margin: 25px 0 12px 0; color: #d97706; scroll-margin-top: 100px; } 
            .rpa-h2-black { font-size: 16px; font-weight: bold; margin: 25px 0 12px 0; color: #1e293b; }
            .dark .doc-theme-responsive .rpa-h2-black { color: #f1f5f9; }
            .rpa-h3 { font-size: 15px; font-weight: bold; margin: 20px 0 10px 0; color: #d97706; }
            .rpa-h3-bold { font-size: 15px; font-weight: bold; margin: 20px 0 10px 0; color: #1e293b; }
            .dark .doc-theme-responsive .rpa-h3-bold { color: #f1f5f9; }
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
            [id^="rpa-art-"]:target, [id^="rpa-eqt-"]:target, [id^="rpa-fig-"]:target, [id^="rpa-table-"]:target {
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
            /* Chapter cover pages: subtle gradient in dark responsive (global .rpa-page rule is flat) */
            :root.dark .doc-theme-responsive .rpa-ch3-cover.rpa-page,
            .dark .doc-theme-responsive .rpa-ch3-cover.rpa-page,
            :root.dark .doc-theme-responsive .rpa-ch5-cover.rpa-page,
            .dark .doc-theme-responsive .rpa-ch5-cover.rpa-page {
                background: linear-gradient(to bottom, #0c1222, #0f172a 45%, #1e293b) !important;
            }
            :root.dark .doc-theme-responsive .rpa-header,
            .dark .doc-theme-responsive .rpa-header {
                border-bottom-color: #334155 !important; /* slate-700 */
                color: #94a3b8 !important; /* slate-400 */
            }
            :root.dark .doc-theme-responsive .rpa-header-meta,
            .dark .doc-theme-responsive .rpa-header-meta {
                border-bottom-color: #334155 !important;
                color: #94a3b8 !important;
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
        <div class="rpa-chapter rpa-chapter--3">
        @for($p=44; $p<=73; $p++)
            
            @include('norms::codes.rpa.rpa2024.chapitre3.Ch3Pages.rpa24_ch3_p' . $p)
        @endfor
        </div>

        {{-- ==================== CHAPITRE 4: REGLES DE CALCUL ==================== --}}
        @for($p=76; $p<=84; $p++)
            @include('norms::codes.rpa.rpa2024.chapitre4.Ch4Pages.rpa24_ch4_p' . $p)
        @endfor

        {{-- ==================== CHAPITRE 5: JUSTIFICATION DE LA SECURITE ==================== --}}
        <div class="rpa-chapter rpa-chapter--5">
        @for($p=86; $p<=92; $p++)
            @include('norms::codes.rpa.rpa2024.chapitre5.Ch5Pages.rpa24_ch5_p' . $p)
        @endfor
        </div>

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
