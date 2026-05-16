<script>
(function () {
    const STORAGE = {
        fontScale: 'reader-font-scale',
        lineRelaxed: 'reader-line-relaxed',
        colMode: 'reader-col-mode',
        pdfZoom: 'reader-pdf-zoom',
        focus: 'reader-focus-mode',
    };

    const bar = document.getElementById('reader-magic-bar');
    const content = document.getElementById('norms-content-body');
    const stage = document.getElementById('norms-reader-stage');
    const pdfFrame = document.getElementById('norms-pdf-frame');

    if (!bar || !content) return;

    const mode = bar.dataset.mode || 'html';
    const pdfBase = (bar.dataset.pdfSrc || '').split('#')[0];

    let fontScale = parseFloat(localStorage.getItem(STORAGE.fontScale) || '1') || 1;
    let colMode = localStorage.getItem(STORAGE.colMode) || 'default';
    let lineRelaxed = localStorage.getItem(STORAGE.lineRelaxed) === 'true';
    let pdfZoom = parseInt(localStorage.getItem(STORAGE.pdfZoom) || '100', 10) || 100;
    let sectionIndex = 0;
    let sections = [];

    function $(sel) { return bar.querySelector(sel); }
    function setHidden(el, hidden) {
        if (!el) return;
        el.hidden = hidden;
        el.style.display = hidden ? 'none' : '';
    }

    function applyHtmlPrefs() {
        content.style.setProperty('--reader-font-scale', String(fontScale));
        const fv = $('#reader-font-value');
        if (fv) fv.textContent = Math.round(fontScale * 100) + '%';

        content.classList.toggle('reader-line-relaxed', lineRelaxed);
        content.classList.remove('reader-col-narrow', 'reader-col-wide');
        if (colMode === 'narrow') content.classList.add('reader-col-narrow');
        if (colMode === 'wide') content.classList.add('reader-col-wide');

        const colLabel = $('#reader-col-label');
        if (colLabel) {
            colLabel.textContent = colMode === 'narrow' ? 'Étroit' : (colMode === 'wide' ? 'Large' : 'Std');
        }

        const lhBtn = bar.querySelector('[data-reader-action="line-height"]');
        if (lhBtn) lhBtn.classList.toggle('is-active', lineRelaxed);

        const colBtn = bar.querySelector('[data-reader-action="column-cycle"]');
        if (colBtn) colBtn.classList.toggle('is-active', colMode !== 'default');
    }

    function applyPdfZoom(fit) {
        if (!pdfFrame || !pdfBase) return;
        const zv = $('#reader-pdf-zoom-value');
        if (fit === 'width') {
            pdfFrame.src = pdfBase + '#toolbar=1&navpanes=0&scrollbar=1&view=FitH';
            if (zv) zv.textContent = 'Fit';
            return;
        }
        pdfFrame.src = pdfBase + '#toolbar=1&navpanes=0&scrollbar=1&zoom=' + pdfZoom;
        if (zv) zv.textContent = pdfZoom + '%';
        localStorage.setItem(STORAGE.pdfZoom, String(pdfZoom));
    }

    function collectSections() {
        sections = Array.from(content.querySelectorAll(
            '[id^="rpa-art-"], [id^="rpa-p"], [id^="rpa-ch-"], [id^="rpa-fig-"]'
        )).filter((el) => el.id && el.offsetParent !== null);
    }

    function scrollToSection(delta) {
        if (!sections.length) collectSections();
        if (!sections.length) return;
        if (delta === 0) {
            sectionIndex = 0;
        } else {
            sectionIndex = Math.max(0, Math.min(sections.length - 1, sectionIndex + delta));
        }
        const target = sections[sectionIndex];
        if (typeof window.scrollToSection === 'function') {
            window.scrollToSection(target.id);
        } else {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    function syncSectionFromScroll() {
        if (!sections.length) return;
        const root = content;
        const top = root.scrollTop + root.clientHeight * 0.2;
        for (let i = sections.length - 1; i >= 0; i--) {
            const el = sections[i];
            if (el.offsetTop <= top) {
                sectionIndex = i;
                break;
            }
        }
    }

    function toggleFocus() {
        const on = document.body.classList.toggle('reader-focus-mode');
        localStorage.setItem(STORAGE.focus, on ? 'true' : 'false');
        const btn = bar.querySelector('[data-reader-action="focus"]');
        if (btn) btn.classList.toggle('is-active', on);
        if (on && window.innerWidth >= 1024) {
            const sidebar = document.getElementById('sidebar-container');
            if (sidebar && !sidebar.classList.contains('collapsed')) {
                if (typeof toggleSidebar === 'function') toggleSidebar();
            }
        }
    }

    function toggleFullscreen() {
        const el = stage || content;
        if (!document.fullscreenElement) {
            el.requestFullscreen?.().catch(() => {
                el.classList.add('reader-pdf-fullscreen');
            });
        } else {
            document.exitFullscreen?.();
        }
    }

    document.addEventListener('fullscreenchange', () => {
        if (!document.fullscreenElement && stage) {
            stage.classList.remove('reader-pdf-fullscreen');
        }
    });

    function togglePdfHtmlGroups() {
        bar.querySelectorAll('.reader-magic__group[data-html-only]').forEach((el) => {
            el.style.display = mode === 'pdf' ? 'none' : 'inline-flex';
        });
        bar.querySelectorAll('.reader-magic__group[data-pdf-only]').forEach((el) => {
            el.style.display = mode === 'pdf' ? 'inline-flex' : 'none';
        });
    }

  function handleAction(action) {
        switch (action) {
            case 'sidebar':
                if (typeof toggleSidebar === 'function') toggleSidebar();
                break;
            case 'prev-section':
                scrollToSection(-1);
                break;
            case 'next-section':
                scrollToSection(1);
                break;
            case 'scroll-top':
                content.scrollTo({ top: 0, behavior: 'smooth' });
                break;
            case 'font-up':
                fontScale = Math.min(1.35, Math.round((fontScale + 0.05) * 100) / 100);
                localStorage.setItem(STORAGE.fontScale, String(fontScale));
                applyHtmlPrefs();
                break;
            case 'font-down':
                fontScale = Math.max(0.85, Math.round((fontScale - 0.05) * 100) / 100);
                localStorage.setItem(STORAGE.fontScale, String(fontScale));
                applyHtmlPrefs();
                break;
            case 'line-height':
                lineRelaxed = !lineRelaxed;
                localStorage.setItem(STORAGE.lineRelaxed, lineRelaxed ? 'true' : 'false');
                applyHtmlPrefs();
                break;
            case 'column-cycle':
                colMode = colMode === 'default' ? 'narrow' : (colMode === 'narrow' ? 'wide' : 'default');
                localStorage.setItem(STORAGE.colMode, colMode);
                applyHtmlPrefs();
                break;
            case 'pdf-zoom-in':
                pdfZoom = Math.min(200, pdfZoom + 10);
                applyPdfZoom();
                break;
            case 'pdf-zoom-out':
                pdfZoom = Math.max(50, pdfZoom - 10);
                applyPdfZoom();
                break;
            case 'pdf-fit-width':
                applyPdfZoom('width');
                break;
            case 'search-toggle': {
                const box = document.getElementById('reader-magic-search');
                if (!box) break;
                const open = !box.classList.contains('is-open');
                box.classList.toggle('is-open', open);
                box.hidden = !open;
                if (open) document.getElementById('reader-magic-search-input')?.focus();
                break;
            }
            case 'search-go': {
                const input = document.getElementById('reader-magic-search-input');
                if (!input || !input.value.trim()) break;
                let id = input.value.trim().replace(/^#/, '');
                if (!document.getElementById(id) && /^\d+$/.test(id)) {
                    id = 'rpa-p' + id;
                }
                if (window.scrollToSection) window.scrollToSection(id);
                else document.getElementById(id)?.scrollIntoView({ behavior: 'smooth', block: 'start' });
                break;
            }
            case 'focus':
                toggleFocus();
                break;
            case 'fullscreen':
                toggleFullscreen();
                break;
            case 'print':
                window.print();
                break;
            default:
                break;
        }
    }

    bar.addEventListener('click', (e) => {
        const btn = e.target.closest('[data-reader-action]');
        if (!btn || btn.disabled) return;
        e.preventDefault();
        handleAction(btn.getAttribute('data-reader-action'));
    });

    const searchInput = document.getElementById('reader-magic-search-input');
    searchInput?.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            handleAction('search-go');
        }
        if (e.key === 'Escape') {
            const box = document.getElementById('reader-magic-search');
            box?.classList.remove('is-open');
            box.hidden = true;
        }
    });

    content.addEventListener('scroll', () => syncSectionFromScroll(), { passive: true });

    document.addEventListener('DOMContentLoaded', () => {
        togglePdfHtmlGroups();
        if (mode === 'html') {
            applyHtmlPrefs();
            collectSections();
        } else {
            applyPdfZoom();
        }
        if (localStorage.getItem(STORAGE.focus) === 'true') {
            document.body.classList.add('reader-focus-mode');
            bar.querySelector('[data-reader-action="focus"]')?.classList.add('is-active');
        }
    });

    if (document.readyState !== 'loading') {
        togglePdfHtmlGroups();
        if (mode === 'html') {
            applyHtmlPrefs();
            collectSections();
        } else {
            applyPdfZoom();
        }
    }
})();
</script>
