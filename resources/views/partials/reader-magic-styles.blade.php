<style>
    /* ── Reader Magic Bar ── */
    .reader-magic {
        --rm-accent: 99 102 241;
        --rm-accent2: 139 92 246;
        position: fixed;
        z-index: 95;
        left: 50%;
        bottom: max(0.75rem, env(safe-area-inset-bottom));
        transform: translateX(-50%);
        width: min(calc(100vw - 1rem), 52rem);
        pointer-events: none;
    }

    .reader-magic__shell {
        pointer-events: auto;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        padding: 0.5rem;
        border-radius: 1.25rem;
        border: 1px solid rgb(255 255 255 / 0.65);
        background: linear-gradient(135deg, rgb(255 255 255 / 0.92), rgb(248 250 252 / 0.88));
        box-shadow:
            0 4px 6px -1px rgb(15 23 42 / 0.06),
            0 20px 40px -12px rgb(79 70 229 / 0.22),
            0 0 0 1px rgb(99 102 241 / 0.08);
        backdrop-filter: blur(16px) saturate(1.4);
        -webkit-backdrop-filter: blur(16px) saturate(1.4);
    }

    .dark .reader-magic__shell {
        border-color: rgb(71 85 105 / 0.6);
        background: linear-gradient(135deg, rgb(30 41 59 / 0.94), rgb(15 23 42 / 0.9));
        box-shadow:
            0 4px 6px -1px rgb(0 0 0 / 0.35),
            0 20px 40px -12px rgb(99 102 241 / 0.35),
            0 0 0 1px rgb(129 140 248 / 0.15);
    }

    .reader-magic__top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 0.5rem;
        padding: 0 0.25rem;
    }

    .reader-magic__brand {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.65rem;
        font-weight: 800;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgb(var(--rm-accent));
    }

    .dark .reader-magic__brand {
        color: rgb(165 180 252);
    }

    .reader-magic__mode {
        display: inline-flex;
        border-radius: 9999px;
        padding: 0.15rem;
        background: rgb(241 245 249);
        border: 1px solid rgb(226 232 240);
    }

    .dark .reader-magic__mode {
        background: rgb(30 41 59);
        border-color: rgb(51 65 85);
    }

    .reader-magic__mode a {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.3rem 0.65rem;
        border-radius: 9999px;
        font-size: 0.65rem;
        font-weight: 800;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        transition: all 0.2s ease;
        color: rgb(100 116 139);
    }

    .reader-magic__mode a.is-active {
        color: white;
        box-shadow: 0 2px 8px rgb(0 0 0 / 0.12);
    }

    .reader-magic__mode a[data-mode="html"].is-active {
        background: linear-gradient(135deg, rgb(37 99 235), rgb(59 130 246));
    }

    .reader-magic__mode a[data-mode="pdf"].is-active {
        background: linear-gradient(135deg, rgb(220 38 38), rgb(239 68 68));
    }

    .reader-magic__scroll {
        display: flex;
        align-items: stretch;
        gap: 0.35rem;
        overflow-x: auto;
        overscroll-behavior-x: contain;
        scrollbar-width: none;
        padding-bottom: 0.1rem;
    }

    .reader-magic__scroll::-webkit-scrollbar {
        display: none;
    }

    .reader-magic__group {
        display: inline-flex;
        align-items: center;
        gap: 0.2rem;
        flex-shrink: 0;
        padding: 0.2rem;
        border-radius: 0.85rem;
        background: rgb(248 250 252 / 0.85);
        border: 1px solid rgb(226 232 240 / 0.9);
    }

    .dark .reader-magic__group {
        background: rgb(15 23 42 / 0.55);
        border-color: rgb(51 65 85 / 0.8);
    }

    .reader-magic__sep {
        width: 1px;
        align-self: stretch;
        margin: 0.35rem 0.15rem;
        background: linear-gradient(to bottom, transparent, rgb(203 213 225), transparent);
        flex-shrink: 0;
    }

    .dark .reader-magic__sep {
        background: linear-gradient(to bottom, transparent, rgb(71 85 105), transparent);
    }

    .reader-magic__btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.35rem;
        min-width: 2.25rem;
        height: 2.25rem;
        padding: 0 0.55rem;
        border: none;
        border-radius: 0.65rem;
        font-size: 0.7rem;
        font-weight: 700;
        color: rgb(51 65 85);
        background: transparent;
        cursor: pointer;
        transition: background 0.15s ease, color 0.15s ease, transform 0.12s ease, box-shadow 0.15s ease;
    }

    .reader-magic__btn:hover {
        background: rgb(255 255 255);
        color: rgb(var(--rm-accent));
        box-shadow: 0 1px 4px rgb(99 102 241 / 0.15);
    }

    .reader-magic__btn:active {
        transform: scale(0.96);
    }

    .reader-magic__btn.is-active {
        background: linear-gradient(135deg, rgb(var(--rm-accent)), rgb(var(--rm-accent2)));
        color: white;
        box-shadow: 0 2px 10px rgb(99 102 241 / 0.35);
    }

    .dark .reader-magic__btn {
        color: rgb(203 213 225);
    }

    .dark .reader-magic__btn:hover {
        background: rgb(51 65 85);
        color: rgb(199 210 254);
    }

    .reader-magic__btn:disabled {
        opacity: 0.4;
        cursor: not-allowed;
        pointer-events: none;
    }

    .reader-magic__btn-label {
        display: none;
    }

    .reader-magic__value {
        min-width: 2rem;
        text-align: center;
        font-size: 0.65rem;
        font-weight: 800;
        font-variant-numeric: tabular-nums;
        color: rgb(100 116 139);
    }

    .dark .reader-magic__value {
        color: rgb(148 163 184);
    }

    .reader-magic__search {
        display: none;
        align-items: center;
        gap: 0.35rem;
        padding: 0.35rem 0.5rem;
        border-radius: 0.75rem;
        background: rgb(248 250 252);
        border: 1px solid rgb(226 232 240);
    }

    .reader-magic__search.is-open {
        display: flex;
    }

    .dark .reader-magic__search {
        background: rgb(30 41 59);
        border-color: rgb(51 65 85);
    }

    .reader-magic__search input {
        flex: 1;
        min-width: 0;
        border: none;
        background: transparent;
        font-size: 0.75rem;
        font-weight: 600;
        color: rgb(15 23 42);
        outline: none;
    }

    .dark .reader-magic__search input {
        color: rgb(248 250 252);
    }

    .reader-magic__search input::placeholder {
        color: rgb(148 163 184);
    }

    /* Reader preferences on HTML content */
    #norms-content-body {
        --reader-font-scale: 1;
        --reader-line-height: 1.5;
        --reader-page-max: 800px;
    }

    #norms-content-body.reader-line-relaxed {
        --reader-line-height: 1.75;
    }

    #norms-content-body.reader-col-narrow {
        --reader-page-max: 640px;
    }

    #norms-content-body.reader-col-wide {
        --reader-page-max: 960px;
    }

    #norms-content-body #rpa-2024 .rpa-page {
        font-size: calc(15px * var(--reader-font-scale));
        line-height: var(--reader-line-height);
        max-width: var(--reader-page-max);
    }

    #norms-content-body #rpa-2024 .rpa-page p,
    #norms-content-body #rpa-2024 .rpa-page li,
    #norms-content-body #rpa-2024 .rpa-bullet {
        line-height: var(--reader-line-height);
    }

    /* Focus mode */
    body.reader-focus-mode #page-header-bar > div:last-child > *:not(#sidebar-toggle-btn):not(.reader-magic-focus-keep) {
        opacity: 0;
        pointer-events: none;
        width: 0;
        overflow: hidden;
        padding: 0;
        margin: 0;
    }

    body.reader-focus-mode #sidebar-container.collapsed,
    body.reader-focus-mode.reader-focus-sidebar-open #sidebar-container {
        width: 0;
        border: none;
    }

    body.reader-focus-mode .reader-magic {
        bottom: max(1rem, env(safe-area-inset-bottom));
    }

    /* PDF stage */
    #norms-reader-stage.reader-pdf-fullscreen {
        position: fixed !important;
        inset: 0 !important;
        z-index: 200 !important;
        height: 100vh !important;
        min-height: 100vh !important;
        border-radius: 0 !important;
        margin: 0 !important;
    }

    #norms-reader-stage.reader-pdf-fullscreen #norms-pdf-wrap,
    #norms-reader-stage.reader-pdf-fullscreen #norms-pdf-frame {
        min-height: 100vh !important;
        height: 100vh !important;
    }

    @media (min-width: 640px) {
        .reader-magic__btn-label {
            display: inline;
        }

        .reader-magic__btn {
            min-width: auto;
        }
    }

    @media (min-width: 1024px) {
        .reader-magic {
            bottom: 1.25rem;
        }
    }

    @media print {
        .reader-magic {
            display: none !important;
        }
    }

    /* Keep last lines visible above the floating bar */
    body:has(#reader-magic-bar) #norms-content-body {
        scroll-padding-bottom: 6rem;
    }

    body:has(#reader-magic-bar) #norms-content-body > .max-w-5xl {
        padding-bottom: 5.5rem;
    }
</style>
