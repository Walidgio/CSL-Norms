<article id="rpa-2024" class="article card p-5 sm:p-8 dark:bg-transparent border-0 shadow-none">
    <header class="relative mb-8 sm:mb-10 overflow-hidden rounded-2xl sm:rounded-3xl border border-orange-200/50 bg-gradient-to-br from-white via-orange-50/40 to-amber-50/60 shadow-lg shadow-orange-900/[0.06] ring-1 ring-orange-500/5 dark:border-orange-500/25 dark:from-slate-900 dark:via-slate-900 dark:to-orange-950/50 dark:shadow-black/30 dark:ring-orange-400/10">
        <div class="pointer-events-none absolute -right-20 -top-28 h-72 w-72 rounded-full bg-gradient-to-br from-orange-400/30 to-amber-300/10 blur-3xl dark:from-orange-500/20 dark:to-transparent" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -bottom-16 -left-16 h-56 w-56 rounded-full bg-orange-300/15 blur-2xl dark:bg-orange-600/10" aria-hidden="true"></div>
        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-orange-400/25 to-transparent dark:via-orange-500/20" aria-hidden="true"></div>

        <div class="relative flex flex-col items-center gap-6 p-6 sm:p-8 md:flex-row md:items-center md:gap-8 md:text-left">
            <div class="relative shrink-0">
                <div class="absolute -inset-1 rounded-[1.15rem] bg-gradient-to-br from-orange-400 via-amber-500 to-orange-600 opacity-50 blur-md dark:opacity-35" aria-hidden="true"></div>
                <div class="relative flex h-[4.5rem] w-[4.5rem] items-center justify-center overflow-hidden rounded-2xl border border-white/90 bg-white shadow-xl shadow-orange-500/15 ring-1 ring-orange-500/10 dark:border-slate-600/80 dark:bg-slate-800 dark:ring-orange-500/20 sm:h-[5.25rem] sm:w-[5.25rem]">
                    <x-icon name="rpa-seismic" class="h-11 w-11 text-orange-600 dark:text-orange-400 sm:h-12 sm:w-12" />
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
            .rpa-chapter--4 .rpa-page,
            .rpa-chapter--5 .rpa-page,
            .rpa-chapter--7 .rpa-page {
                border-radius: 0.75rem;
                border-color: rgba(234, 88, 12, 0.12);
                box-shadow: 0 8px 30px rgba(15, 23, 42, 0.06);
            }
            .dark .doc-theme-responsive .rpa-chapter--4 .rpa-page,
            .dark .doc-theme-responsive .rpa-chapter--5 .rpa-page,
            .dark .doc-theme-responsive .rpa-chapter--7 .rpa-page {
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
            .rpa-chapter--4 h2.rpa-h2,
            .rpa-chapter--5 h2.rpa-h2,
            .rpa-chapter--7 h2.rpa-h2,
            .rpa-chapter--3 h3.rpa-h2,
            .rpa-chapter--4 h3.rpa-h2,
            .rpa-chapter--5 h3.rpa-h2,
            .rpa-chapter--7 h3.rpa-h2,
            .rpa-chapter--3 h3.rpa-h3,
            .rpa-chapter--4 h3.rpa-h3,
            .rpa-chapter--5 h3.rpa-h3,
            .rpa-chapter--7 h3.rpa-h3 {
                position: relative;
                padding-left: 0.65rem;
            }
            .rpa-chapter--3 h2.rpa-h2::before,
            .rpa-chapter--4 h2.rpa-h2::before,
            .rpa-chapter--5 h2.rpa-h2::before,
            .rpa-chapter--7 h2.rpa-h2::before,
            .rpa-chapter--3 h3.rpa-h2::before,
            .rpa-chapter--4 h3.rpa-h2::before,
            .rpa-chapter--5 h3.rpa-h2::before,
            .rpa-chapter--7 h3.rpa-h2::before,
            .rpa-chapter--3 h3.rpa-h3::before,
            .rpa-chapter--4 h3.rpa-h3::before,
            .rpa-chapter--5 h3.rpa-h3::before,
            .rpa-chapter--7 h3.rpa-h3::before {
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
            .rpa-chapter--4 a.rpa-inline-link,
            .rpa-chapter--5 a.rpa-inline-link,
            .rpa-chapter--7 a.rpa-inline-link,
            .rpa-chapter--7 a.rpa-link {
                text-decoration: none;
                border-bottom: 2px solid rgba(249, 115, 22, 0.35);
                transition: border-color 0.2s ease, color 0.2s ease, box-shadow 0.2s ease;
            }
            .rpa-chapter--3 a.rpa-inline-link:hover,
            .rpa-chapter--4 a.rpa-inline-link:hover,
            .rpa-chapter--5 a.rpa-inline-link:hover,
            .rpa-chapter--7 a.rpa-inline-link:hover,
            .rpa-chapter--7 a.rpa-link:hover {
                border-bottom-color: #ea580c;
                box-shadow: 0 14px 32px -18px rgba(234, 88, 12, 0.45);
            }
            .dark .doc-theme-responsive .rpa-chapter--3 a.rpa-inline-link,
            .dark .doc-theme-responsive .rpa-chapter--4 a.rpa-inline-link,
            .dark .doc-theme-responsive .rpa-chapter--5 a.rpa-inline-link,
            .dark .doc-theme-responsive .rpa-chapter--7 a.rpa-inline-link,
            .dark .doc-theme-responsive .rpa-chapter--7 a.rpa-link {
                border-bottom-color: rgba(147, 197, 253, 0.45);
            }
            .dark .doc-theme-responsive .rpa-chapter--3 a.rpa-inline-link:hover,
            .dark .doc-theme-responsive .rpa-chapter--4 a.rpa-inline-link:hover,
            .dark .doc-theme-responsive .rpa-chapter--5 a.rpa-inline-link:hover,
            .dark .doc-theme-responsive .rpa-chapter--7 a.rpa-inline-link:hover,
            .dark .doc-theme-responsive .rpa-chapter--7 a.rpa-link:hover {
                border-bottom-color: #fdba74;
            }
            .rpa-header .chapter {
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 0.5px;
            }
            .rpa-chapter-opening {
                position: relative;
                padding: 1.35rem 1.25rem 1.5rem;
                border-radius: 1rem;
                border: 1px solid rgba(251, 191, 36, 0.35);
                background: linear-gradient(135deg, rgba(255, 251, 235, 0.95), rgba(255, 247, 237, 0.88));
                box-shadow: 0 10px 36px -12px rgba(234, 88, 12, 0.22);
            }
            .rpa-chapter-opening::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0.85rem;
                bottom: 0.85rem;
                width: 4px;
                border-radius: 0 4px 4px 0;
                background: linear-gradient(180deg, #fdba74, #ea580c);
            }
            .rpa-chapter-opening__eyebrow {
                display: block;
                margin-bottom: 0.35rem;
                padding-left: 0.65rem;
                font-size: 0.65rem;
                font-weight: 800;
                letter-spacing: 0.28em;
                text-transform: uppercase;
                color: #c2410c;
            }
            .rpa-chapter-opening__title {
                margin: 0;
                padding-left: 0.65rem;
                font-size: clamp(1.35rem, 3.5vw, 1.85rem);
                font-weight: 900;
                line-height: 1.15;
                letter-spacing: -0.02em;
                background: linear-gradient(90deg, #c2410c, #ea580c 55%, #d97706);
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
            }
            .rpa-chapter-opening__lead {
                margin: 0.65rem 0 0;
                padding-left: 0.65rem;
                font-size: 0.9rem;
                line-height: 1.55;
                color: #64748b;
            }
            .dark .doc-theme-responsive .rpa-chapter-opening {
                background: linear-gradient(135deg, rgba(30, 41, 59, 0.92), rgba(15, 23, 42, 0.88));
                border-color: rgba(251, 146, 60, 0.28);
            }
            .dark .doc-theme-responsive .rpa-chapter-opening__eyebrow { color: #fdba74; }
            .dark .doc-theme-responsive .rpa-chapter-opening__title {
                background: linear-gradient(90deg, #fed7aa, #fb923c 55%, #fdba74);
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
            }
            .dark .doc-theme-responsive .rpa-chapter-opening__lead { color: #94a3b8; }
            .rpa-chapter--4 h2.rpa-h2,
            .rpa-chapter--5 h2.rpa-h2,
            .rpa-chapter--7 h2.rpa-h2,
            .rpa-chapter--4 h3.rpa-h2,
            .rpa-chapter--5 h3.rpa-h2,
            .rpa-chapter--7 h3.rpa-h2 {
                font-size: clamp(1rem, 2.2vw, 1.125rem);
                font-weight: 800;
                color: #c2410c;
                letter-spacing: -0.01em;
                margin: 1.75rem 0 0.85rem;
            }
            .rpa-chapter--4 h3.rpa-h3,
            .rpa-chapter--5 h3.rpa-h3,
            .rpa-chapter--7 h3.rpa-h3 {
                font-size: clamp(0.95rem, 2vw, 1.05rem);
                font-weight: 700;
                color: #ea580c;
                margin: 1.35rem 0 0.65rem;
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
            :root.dark .doc-theme-responsive .rpa-ch4-cover.rpa-page,
            .dark .doc-theme-responsive .rpa-ch4-cover.rpa-page,
            :root.dark .doc-theme-responsive .rpa-ch5-cover.rpa-page,
            .dark .doc-theme-responsive .rpa-ch5-cover.rpa-page,
            :root.dark .doc-theme-responsive .rpa-ch7-cover.rpa-page,
            .dark .doc-theme-responsive .rpa-ch7-cover.rpa-page {
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

            /* Figure 3.1 showcase (HTML + vector SVG) */
            .rpa-figure-showcase {
                margin: 2.75rem auto;
                max-width: 56rem;
            }
            .rpa-figure-showcase__surface {
                position: relative;
                border-radius: 1.35rem;
                padding: 1.35rem 1.1rem 1.6rem;
                background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(255, 251, 235, 0.55) 45%, rgba(254, 243, 199, 0.35) 100%);
                border: 1px solid rgba(251, 191, 36, 0.35);
                box-shadow:
                    0 1px 0 rgba(255, 255, 255, 0.8) inset,
                    0 10px 28px -8px rgba(234, 88, 12, 0.14),
                    0 4px 12px -4px rgba(15, 23, 42, 0.08);
                transition: box-shadow 0.28s ease, border-color 0.28s ease;
            }
            .rpa-figure-showcase__surface:hover {
                border-color: rgba(251, 146, 60, 0.55);
                box-shadow:
                    0 1px 0 rgba(255, 255, 255, 0.85) inset,
                    0 16px 40px -10px rgba(234, 88, 12, 0.2),
                    0 6px 16px -4px rgba(15, 23, 42, 0.1);
            }
            .rpa-figure-showcase__kicker {
                text-align: center;
                font-size: 0.7rem;
                font-weight: 800;
                letter-spacing: 0.22em;
                text-transform: uppercase;
                color: #b45309;
                margin: 0 0 0.35rem;
            }
            .rpa-figure-showcase__svg {
                margin-top: 0.5rem;
                border-radius: 1.05rem;
                overflow: hidden;
                line-height: 0;
            }
            .rpa-figure-showcase__caption {
                margin: 1.15rem 0 0;
                text-align: center;
                font-size: 0.95rem;
                font-weight: 800;
                color: #0f172a;
                letter-spacing: -0.01em;
            }
            .rpa-figure-showcase__chips {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 0.65rem;
                margin-top: 1rem;
            }
            .rpa-figure-showcase__chip {
                display: inline-flex;
                align-items: flex-start;
                gap: 0.45rem;
                max-width: min(100%, 20rem);
                padding: 0.55rem 0.9rem 0.6rem;
                border-radius: 0.85rem;
                font-size: 0.72rem;
                line-height: 1.35;
                font-weight: 600;
                border: 1px solid rgba(148, 163, 184, 0.35);
                background: rgba(255, 255, 255, 0.75);
                box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
            }
            .rpa-figure-showcase__chip--a {
                border-color: rgba(59, 130, 246, 0.28);
                background: linear-gradient(135deg, rgba(239, 246, 255, 0.95), rgba(255, 255, 255, 0.9));
            }
            .rpa-figure-showcase__chip--b {
                border-color: rgba(249, 115, 22, 0.35);
                background: linear-gradient(135deg, rgba(255, 247, 237, 0.98), rgba(255, 255, 255, 0.9));
            }
            .rpa-figure-showcase__chip-key {
                flex-shrink: 0;
                font-weight: 900;
                font-size: 0.68rem;
                letter-spacing: 0.04em;
                color: #ea580c;
            }
            .rpa-figure-showcase__chip--a .rpa-figure-showcase__chip-key {
                color: #2563eb;
            }
            .rpa-figure-showcase__chip-txt {
                color: #475569;
                text-align: left;
            }
            .rpa-figure-showcase__fineprint {
                margin: 1rem 0 0;
                text-align: center;
                font-size: 0.62rem;
                line-height: 1.45;
                color: #94a3b8;
            }
            .dark .doc-theme-responsive .rpa-figure-showcase__surface {
                background: linear-gradient(155deg, rgba(30, 41, 59, 0.97) 0%, rgba(15, 23, 42, 0.99) 55%, rgba(15, 23, 42, 1) 100%);
                border-color: rgba(251, 146, 60, 0.28);
                box-shadow:
                    0 1px 0 rgba(255, 255, 255, 0.04) inset,
                    0 18px 40px -12px rgba(0, 0, 0, 0.45);
            }
            .dark .doc-theme-responsive .rpa-figure-showcase__surface:hover {
                border-color: rgba(251, 146, 60, 0.42);
                box-shadow:
                    0 1px 0 rgba(255, 255, 255, 0.06) inset,
                    0 22px 48px -10px rgba(0, 0, 0, 0.55);
            }
            .dark .doc-theme-responsive .rpa-figure-showcase__kicker {
                color: #fdba74;
            }
            .dark .doc-theme-responsive .rpa-figure-showcase__caption {
                color: #f1f5f9 !important;
            }
            .dark .doc-theme-responsive .rpa-figure-showcase__chip {
                background: rgba(30, 41, 59, 0.85);
                border-color: rgba(71, 85, 105, 0.55);
            }
            .dark .doc-theme-responsive .rpa-figure-showcase__chip-txt {
                color: #cbd5e1 !important;
            }
            .dark .doc-theme-responsive .rpa-figure-showcase__fineprint {
                color: #64748b !important;
            }

            .rpa-figure-showcase__fineprint code {
                font-size: 0.58rem;
                padding: 0.08rem 0.28rem;
                border-radius: 0.25rem;
                background: rgba(15, 23, 42, 0.06);
                color: #475569;
            }
            .dark .doc-theme-responsive .rpa-figure-showcase__fineprint code {
                background: rgba(148, 163, 184, 0.12);
                color: #94a3b8 !important;
            }

            /* Figure 3.1 — dual SVG panels (embedded official map) */
            .rpa-fig31-mapgrid {
                display: grid;
                gap: 1.35rem;
                grid-template-columns: 1fr;
                margin-top: 0.35rem;
            }
            @media (min-width: 960px) {
                .rpa-fig31-mapgrid {
                    grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
                    align-items: start;
                }
            }
            .rpa-fig31-mapcard {
                position: relative;
                border-radius: 1.05rem;
                padding: 0.65rem 0.65rem 0.75rem;
                background: linear-gradient(160deg, rgba(255, 255, 255, 0.96), rgba(248, 250, 252, 0.99));
                border: 1px solid rgba(148, 163, 184, 0.38);
                box-shadow:
                    0 1px 0 rgba(255, 255, 255, 0.9) inset,
                    0 18px 38px -18px rgba(15, 23, 42, 0.12);
                transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
            }
            .rpa-fig31-mapcard:hover {
                transform: translateY(-3px);
                border-color: rgba(251, 146, 60, 0.45);
                box-shadow:
                    0 1px 0 rgba(255, 255, 255, 0.95) inset,
                    0 26px 50px -22px rgba(234, 88, 12, 0.2);
            }
            .rpa-fig31-mapcard--b {
                background: linear-gradient(165deg, rgba(255, 251, 235, 0.92), rgba(255, 255, 255, 0.98));
            }
            .rpa-fig31-mapcard__ribbon {
                position: absolute;
                top: 0.55rem;
                left: 0.6rem;
                z-index: 2;
                font-size: 0.62rem;
                font-weight: 900;
                letter-spacing: 0.08em;
                color: #fff;
                background: linear-gradient(135deg, #2563eb, #0ea5e9);
                padding: 0.2rem 0.45rem;
                border-radius: 0.35rem;
                box-shadow: 0 2px 8px rgba(37, 99, 235, 0.35);
            }
            .rpa-fig31-mapcard__ribbon--b {
                background: linear-gradient(135deg, #ea580c, #fb923c);
                box-shadow: 0 2px 8px rgba(249, 115, 22, 0.38);
            }
            .rpa-fig31-panel-svg {
                display: block;
                width: 100%;
                height: auto;
                border-radius: 0.65rem;
            }
            .rpa-fig31-panel-svg image {
                image-rendering: auto;
            }
            .dark .doc-theme-responsive .rpa-fig31-mapcard {
                background: linear-gradient(155deg, rgba(30, 41, 59, 0.94), rgba(15, 23, 42, 0.99));
                border-color: rgba(71, 85, 105, 0.55);
                box-shadow:
                    0 1px 0 rgba(255, 255, 255, 0.04) inset,
                    0 18px 42px -16px rgba(0, 0, 0, 0.45);
            }
            .dark .doc-theme-responsive .rpa-fig31-mapcard:hover {
                border-color: rgba(251, 146, 60, 0.42);
            }
            .dark .doc-theme-responsive .rpa-fig31-panel-bg {
                fill: #1e293b !important;
            }

            /* Raster inside SVG: single coordinate system, responsive width, crisp framing */
            .rpa-figure-raster-svg {
                max-height: min(85vh, 52rem);
            }
            .rpa-figure-raster-svg image {
                shape-rendering: geometricPrecision;
            }
            .dark .doc-theme-responsive .rpa-figure-raster-frame {
                border-color: #475569 !important;
                background-color: rgba(15, 23, 42, 0.85) !important;
            }
            .dark .doc-theme-responsive .rpa-figure-raster-notes {
                color: #94a3b8 !important;
            }
            .rpa-chapter--7 a.rpa-link {
                color: #2563eb;
                text-decoration: none;
                border-bottom: 2px solid rgba(249, 115, 22, 0.35);
                transition: border-color 0.2s ease, color 0.2s ease;
            }
            .rpa-figure-showcase__toolbar {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                gap: 0.65rem;
                margin-bottom: 0.85rem;
            }
            .rpa-figure-showcase__toolbar-title {
                font-size: 0.68rem;
                font-weight: 800;
                letter-spacing: 0.18em;
                text-transform: uppercase;
                color: #b45309;
            }
            .rpa-figure-showcase__controls {
                display: inline-flex;
                gap: 0.35rem;
                padding: 0.25rem;
                border-radius: 0.65rem;
                background: rgba(255, 255, 255, 0.65);
                border: 1px solid rgba(251, 191, 36, 0.35);
            }
            .rpa-fig-ctrl {
                min-width: 2rem;
                height: 2rem;
                padding: 0 0.5rem;
                border-radius: 0.45rem;
                border: 1px solid rgba(251, 146, 60, 0.35);
                background: linear-gradient(180deg, #fff 0%, #fff7ed 100%);
                color: #c2410c;
                font-size: 0.95rem;
                font-weight: 700;
                line-height: 1;
                cursor: pointer;
                transition: transform 0.15s ease, box-shadow 0.15s ease, border-color 0.15s ease;
            }
            .rpa-fig-ctrl:hover {
                transform: translateY(-1px);
                border-color: #ea580c;
                box-shadow: 0 4px 12px rgba(234, 88, 12, 0.2);
            }
            .rpa-fig-ctrl--ghost { background: transparent; font-size: 0.85rem; }
            .rpa-figure-showcase__viewport {
                overflow: auto;
                max-height: min(72vh, 36rem);
                border-radius: 0.85rem;
                border: 1px solid rgba(148, 163, 184, 0.25);
                background: rgba(248, 250, 252, 0.6);
                cursor: grab;
            }
            .rpa-figure-showcase__viewport.is-panning { cursor: grabbing; }
            .rpa-figure-showcase__stage {
                transform-origin: center center;
                transition: transform 0.12s ease-out;
                padding: 0.5rem;
            }
            .rpa-figure-showcase__stage svg {
                display: block;
                width: 100%;
                height: auto;
                color: #0f172a;
            }
            .dark .doc-theme-responsive .rpa-figure-showcase__controls {
                background: rgba(30, 41, 59, 0.85);
                border-color: rgba(71, 85, 105, 0.55);
            }
            .dark .doc-theme-responsive .rpa-fig-ctrl {
                background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
                color: #fdba74;
                border-color: rgba(251, 146, 60, 0.28);
            }
            .dark .doc-theme-responsive .rpa-figure-showcase__viewport {
                background: rgba(15, 23, 42, 0.65);
                border-color: rgba(71, 85, 105, 0.45);
            }
            .dark .doc-theme-responsive .rpa-figure-showcase__stage svg { color: #e2e8f0; }

            /* Tables, comments, equations — ch. 4, 5, 7 */
            .rpa-chapter--4 .rpa-table-showcase,
            .rpa-chapter--5 .rpa-table-showcase,
            .rpa-chapter--7 .rpa-table-showcase {
                max-width: 100%;
            }
            .rpa-table-showcase__surface {
                border-radius: 1rem;
                overflow: hidden;
                box-shadow: 0 8px 30px -6px rgba(234, 88, 12, 0.16), 0 0 0 1px rgba(251, 191, 36, 0.35);
            }
            .rpa-table-showcase__kicker {
                font-size: 0.68rem;
                font-weight: 800;
                letter-spacing: 0.2em;
                text-transform: uppercase;
                color: #b45309;
                margin: 0 0 0.5rem 0.35rem;
            }
            .rpa-table-showcase__caption {
                margin: 0;
                padding: 0.85rem 1rem;
                text-align: center;
                font-size: 0.9rem;
                font-weight: 700;
                color: #334155;
                border-top: 1px solid rgba(251, 191, 36, 0.25);
                background: linear-gradient(to right, rgba(255, 251, 235, 0.95), rgba(254, 243, 199, 0.5));
            }
            .rpa-table-showcase__footnote {
                margin: 0.65rem 0 0;
                padding: 0 0.35rem;
                font-size: 0.8rem;
                font-style: italic;
                color: #64748b;
            }
            .rpa-table-showcase table.rpa-table,
            .rpa-chapter--4 .rpa-table-showcase table,
            .rpa-chapter--5 .rpa-table-showcase table,
            .rpa-chapter--7 .rpa-table-showcase table {
                width: 100%;
                border-collapse: collapse;
                font-size: 0.9rem;
                line-height: 1.45;
                background: #fff;
            }
            .rpa-table-showcase table.rpa-table thead tr,
            .rpa-table-showcase table thead tr {
                background: linear-gradient(90deg, #ea580c, #f59e0b);
                color: #fff;
            }
            .rpa-table-showcase table.rpa-table th,
            .rpa-table-showcase table th {
                padding: 0.65rem 0.85rem;
                font-weight: 700;
                font-size: 0.72rem;
                text-transform: uppercase;
                letter-spacing: 0.06em;
                border: none;
                border-left: 1px solid rgba(255, 255, 255, 0.2);
            }
            .rpa-table-showcase table.rpa-table th:first-child,
            .rpa-table-showcase table th:first-child { border-left: none; }
            .rpa-table-showcase table.rpa-table td,
            .rpa-table-showcase table.rpa-table th[scope="row"],
            .rpa-table-showcase table td,
            .rpa-table-showcase table th[scope="row"] {
                padding: 0.6rem 0.85rem;
                border-bottom: 1px solid rgba(226, 232, 240, 0.9);
                color: #1e293b;
                vertical-align: middle;
            }
            .rpa-table-showcase table.rpa-table tbody tr:nth-child(even),
            .rpa-table-showcase table tbody tr:nth-child(even) {
                background: rgba(248, 250, 252, 0.85);
            }
            .rpa-table-showcase table.rpa-table tbody tr:hover,
            .rpa-table-showcase table tbody tr:hover {
                background: rgba(255, 247, 237, 0.9);
            }
            .rpa-table-showcase table.rpa-table th[scope="row"],
            .rpa-table-showcase table th[scope="row"] {
                text-align: left;
                font-weight: 700;
                background: rgba(254, 243, 199, 0.35);
            }
            .rpa-table-showcase table.rpa-table td.text-center,
            .rpa-table-showcase table td.text-center { text-align: center; }
            .rpa-comment-box {
                position: relative;
                border-radius: 0.85rem;
                border: 1px solid rgba(251, 191, 36, 0.4);
                border-left: 4px solid #f97316;
                padding: 1rem 1.15rem 1rem 1.25rem;
                background: linear-gradient(135deg, rgba(255, 251, 235, 0.92), rgba(255, 255, 255, 0.75));
                box-shadow: 0 4px 18px -6px rgba(234, 88, 12, 0.12);
            }
            .rpa-comment-box p {
                margin: 0 0 0.75rem;
                text-align: justify;
                line-height: 1.55;
                font-size: 0.9rem;
                color: #475569;
            }
            .rpa-comment-box p:last-child { margin-bottom: 0; }
            .rpa-comment-box em, .rpa-comment-box .italic { font-style: italic; }
            .rpa-chapter--4 .rpa-comment,
            .rpa-chapter--7 .rpa-comment {
                border-radius: 0.85rem;
                border: 1px solid rgba(251, 191, 36, 0.4);
                border-left: 4px solid #f97316;
                padding: 1rem 1.15rem;
                background: linear-gradient(135deg, rgba(255, 251, 235, 0.92), rgba(255, 255, 255, 0.75));
                box-shadow: 0 4px 18px -6px rgba(234, 88, 12, 0.12);
            }
            .rpa-chapter--4 .rpa-comment p,
            .rpa-chapter--7 .rpa-comment p {
                margin: 0;
                text-align: justify;
                font-size: 0.9rem;
                font-style: italic;
                color: #475569;
                line-height: 1.55;
            }
            .rpa-chapter--4 .rpa-equation-container,
            .rpa-chapter--5 .rpa-equation-container,
            .rpa-chapter--7 .rpa-equation-container {
                margin: 1.25rem 0;
                padding: 0.85rem 1rem;
                border-radius: 0.65rem;
                background: linear-gradient(90deg, rgba(248, 250, 252, 0.9), rgba(255, 251, 235, 0.45));
                border: 1px solid rgba(226, 232, 240, 0.8);
            }
            .rpa-chapter--4 .rpa-eq-num,
            .rpa-chapter--5 .rpa-eq-num,
            .rpa-chapter--7 .rpa-eq-num {
                font-weight: 700;
                color: #c2410c;
                min-width: 3.5rem;
            }
            .rpa-spec-card {
                border-radius: 0.85rem;
                border: 1px solid rgba(148, 163, 184, 0.35);
                background: linear-gradient(160deg, rgba(255, 255, 255, 0.98), rgba(248, 250, 252, 0.95));
                overflow: hidden;
            }
            .rpa-spec-card__head {
                padding: 0.65rem 1rem;
                font-weight: 800;
                font-size: 0.8rem;
                text-transform: uppercase;
                letter-spacing: 0.08em;
                color: #c2410c;
                background: linear-gradient(90deg, rgba(254, 243, 199, 0.65), transparent);
                border-bottom: 1px solid rgba(226, 232, 240, 0.8);
            }
            .rpa-spec-card__body { padding: 0.85rem 1rem; }
            .rpa-spec-card__row {
                display: grid;
                grid-template-columns: minmax(5rem, auto) 1fr;
                gap: 0.75rem;
                padding: 0.55rem 0;
                border-bottom: 1px dashed rgba(203, 213, 225, 0.8);
            }
            .rpa-spec-card__row:last-child { border-bottom: none; }
            .rpa-spec-card__key {
                font-weight: 800;
                font-size: 0.85rem;
                color: #ea580c;
            }
            .dark .doc-theme-responsive .rpa-table-showcase__surface {
                box-shadow: 0 12px 40px -8px rgba(0, 0, 0, 0.45), 0 0 0 1px rgba(251, 146, 60, 0.22);
            }
            .dark .doc-theme-responsive .rpa-table-showcase table.rpa-table,
            .dark .doc-theme-responsive .rpa-table-showcase table {
                background: rgba(15, 23, 42, 0.6);
            }
            .dark .doc-theme-responsive .rpa-table-showcase table td,
            .dark .doc-theme-responsive .rpa-table-showcase table th[scope="row"] {
                color: #e2e8f0;
                border-bottom-color: rgba(71, 85, 105, 0.55);
            }
            .dark .doc-theme-responsive .rpa-table-showcase table tbody tr:nth-child(even) {
                background: rgba(30, 41, 59, 0.55);
            }
            .dark .doc-theme-responsive .rpa-table-showcase table tbody tr:hover {
                background: rgba(51, 65, 85, 0.65);
            }
            .dark .doc-theme-responsive .rpa-table-showcase table th[scope="row"] {
                background: rgba(51, 65, 85, 0.45);
            }
            .dark .doc-theme-responsive .rpa-table-showcase__caption {
                color: #e2e8f0;
                background: linear-gradient(to right, rgba(30, 41, 59, 0.95), rgba(15, 23, 42, 0.85));
                border-top-color: rgba(71, 85, 105, 0.5);
            }
            .dark .doc-theme-responsive .rpa-comment-box,
            .dark .doc-theme-responsive .rpa-chapter--4 .rpa-comment,
            .dark .doc-theme-responsive .rpa-chapter--7 .rpa-comment {
                background: linear-gradient(135deg, rgba(30, 41, 59, 0.92), rgba(15, 23, 42, 0.88));
                border-color: rgba(251, 146, 60, 0.28);
            }
            .dark .doc-theme-responsive .rpa-comment-box p,
            .dark .doc-theme-responsive .rpa-chapter--4 .rpa-comment p,
            .dark .doc-theme-responsive .rpa-chapter--7 .rpa-comment p {
                color: #cbd5e1;
            }
            .dark .doc-theme-responsive .rpa-chapter--4 .rpa-equation-container,
            .dark .doc-theme-responsive .rpa-chapter--5 .rpa-equation-container,
            .dark .doc-theme-responsive .rpa-chapter--7 .rpa-equation-container {
                background: linear-gradient(90deg, rgba(30, 41, 59, 0.85), rgba(15, 23, 42, 0.65));
                border-color: rgba(71, 85, 105, 0.55);
            }
            .dark .doc-theme-responsive .rpa-spec-card {
                background: linear-gradient(160deg, rgba(30, 41, 59, 0.95), rgba(15, 23, 42, 0.9));
                border-color: rgba(71, 85, 105, 0.55);
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
        <div class="rpa-chapter rpa-chapter--4">
        @for($p=76; $p<=84; $p++)
            @include('norms::codes.rpa.rpa2024.chapitre4.Ch4Pages.rpa24_ch4_p' . $p)
        @endfor
        </div>

        {{-- ==================== CHAPITRE 5: JUSTIFICATION DE LA SECURITE ==================== --}}
        <div class="rpa-chapter rpa-chapter--5">
        @for($p=86; $p<=92; $p++)
            @include('norms::codes.rpa.rpa2024.chapitre5.Ch5Pages.rpa24_ch5_p' . $p)
        @endfor
        </div>

        {{-- ==================== CHAPITRE 7: STRUCTURES EN BETON ARME ==================== --}}
        <div class="rpa-chapter rpa-chapter--7">
        @for($p=104; $p<=130; $p++)
            @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Pages.rpa24_ch7_p' . $p)
        @endfor
        </div>

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

        (function initRpaFigureControls() {
            const state = new Map();
            const getState = (id) => {
                if (!state.has(id)) state.set(id, { scale: 1, tx: 0, ty: 0 });
                return state.get(id);
            };
            const apply = (id) => {
                const s = getState(id);
                const stage = document.querySelector('[data-fig-stage="' + id + '"]');
                if (stage) stage.style.transform = 'translate(' + s.tx + 'px,' + s.ty + 'px) scale(' + s.scale + ')';
            };
            document.addEventListener('click', (e) => {
                const btn = e.target.closest('[data-fig-action]');
                if (!btn) return;
                const id = btn.dataset.figTarget;
                const action = btn.dataset.figAction;
                const s = getState(id);
                if (action === 'zoom-in') s.scale = Math.min(3, s.scale + 0.2);
                else if (action === 'zoom-out') s.scale = Math.max(0.5, s.scale - 0.2);
                else if (action === 'reset' || action === 'fit') { s.scale = 1; s.tx = 0; s.ty = 0; }
                apply(id);
            });
            document.querySelectorAll('[data-fig-viewport]').forEach((vp) => {
                const id = vp.dataset.figViewport;
                let pan = null;
                vp.addEventListener('pointerdown', (e) => {
                    if (e.target.closest('.rpa-fig-ctrl')) return;
                    pan = { x: e.clientX, y: e.clientY, tx: getState(id).tx, ty: getState(id).ty };
                    vp.classList.add('is-panning');
                    vp.setPointerCapture(e.pointerId);
                });
                vp.addEventListener('pointermove', (e) => {
                    if (!pan) return;
                    const s = getState(id);
                    s.tx = pan.tx + (e.clientX - pan.x);
                    s.ty = pan.ty + (e.clientY - pan.y);
                    apply(id);
                });
                const end = () => { pan = null; vp.classList.remove('is-panning'); };
                vp.addEventListener('pointerup', end);
                vp.addEventListener('pointercancel', end);
            });
        })();
    </script>
</article>
