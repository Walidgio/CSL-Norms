{{-- RPA 2024 Refined TOC for Sidebar --}}
<div class="rpa-toc-root select-none overflow-hidden" id="rpa-toc-app">
    
    {{-- Container for "Chapitres" Mode --}}
    <div id="toc-view-chapters" class="toc-view-container py-4 space-y-0.5">
        @include('norms::codes.rpa.rpa2024.chapitre3.rpa24_ch3_toc', ['type' => 'chapters'])
        @include('norms::codes.rpa.rpa2024.chapitre4.rpa24_ch4_toc', ['type' => 'chapters'])
        @include('norms::codes.rpa.rpa2024.chapitre5.rpa24_ch5_toc', ['type' => 'chapters'])
        @include('norms::codes.rpa.rpa2024.chapitre7.rpa24_ch7_toc', ['type' => 'chapters'])
        
        {{-- More to come --}}
        <div class="opacity-30 py-3 px-4 text-[10px] italic text-gray-400 border-t border-gray-100 dark:border-gray-800 mt-4">
            Autres chapitres en cours de numérisation...
        </div>
    </div>

    {{-- Container for "Pages" Mode --}}
    <div id="toc-view-pages" class="toc-view-container hidden py-4 px-2 space-y-1">
        <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest px-2 mb-2">Pagination RPA 2024</div>
        <div class="grid grid-cols-1 gap-1">
            @include('norms::codes.rpa.rpa2024.chapitre3.rpa24_ch3_toc', ['type' => 'pages'])
            @include('norms::codes.rpa.rpa2024.chapitre4.rpa24_ch4_toc', ['type' => 'pages'])
            @include('norms::codes.rpa.rpa2024.chapitre5.rpa24_ch5_toc', ['type' => 'pages'])
            @include('norms::codes.rpa.rpa2024.chapitre7.rpa24_ch7_toc', ['type' => 'pages'])
        </div>
    </div>


</div>

<style>
    .rpa-toc-root {
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }

    .toc-node {
        transition: all 0.3s ease;
    }

    .toc-header {
        display: flex;
        items-center: center;
        gap: 8px;
        padding: 4px 8px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .toc-header:hover {
        background-color: rgba(249, 115, 22, 0.05);
    }

    .dark .toc-header:hover {
        background-color: rgba(249, 115, 22, 0.1);
    }

    .toc-toggle-btn {
        width: 16px;
        height: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .toc-link {
        flex: 1;
        text-decoration: none;
        transition: color 0.2s ease;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .toc-leaf {
        display: block;
        padding: 4px 8px 4px 28px;
        font-size: 9px;
        font-weight: 500;
        color: #64748b;
        border-radius: 6px;
        transition: all 0.2s ease;
    }

    .dark .toc-leaf {
        color: #94a3b8;
    }

    .toc-leaf:hover {
        color: #f97316;
        background-color: rgba(249, 115, 22, 0.05);
    }

    .toc-leaf-wrapper:hover {
        background-color: rgba(249, 115, 22, 0.03);
        border-radius: 8px;
    }

    .fav-btn.is-active svg {
        fill: #fbbf24;
        color: #fbbf24;
    }
    
    .fav-btn.is-active {
        opacity: 1 !important;
    }

    /* Active States */
    .toc-node.is-expanded > .toc-content {
        display: block !important;
    }

    .toc-node.is-expanded > .toc-header .toc-toggle-btn svg {
        transform: rotate(90deg);
    }

    .toc-link.is-active {
        color: #f97316 !important;
        font-weight: 800 !important;
    }

    .toc-leaf.is-active, .toc-leaf-wrapper.is-active {
        background-color: rgba(249, 115, 22, 0.08) !important;
        color: #f97316 !important;
        box-shadow: inset 2px 0 0 #f97316;
    }

    /* Page Heading Highlight */
    .rpa-heading-highlight {
        animation: rpa-flash 2s ease-out;
    }

    @keyframes rpa-flash {
        0% { border-left: 6px solid #f97316; background-color: rgba(249, 115, 22, 0.1); }
        100% { border-left-width: 0; }
    }

    .hidden { display: none !important; }
</style>

<script>
(function() {
    const root = document.getElementById('rpa-toc-app');
    if (!root) return;

    const mainContent = document.querySelector('main');
    const nodes = root.querySelectorAll('.toc-node');
    const links = root.querySelectorAll('.toc-link');
    const STORAGE_KEY = 'rpa_norm_favs';
    let currentMode = 'chapters';

    // --- Favorites Logic ---
    
    function getFavs() {
        return JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]');
    }

    function saveFav(id) {
        let favs = getFavs();
        if (!favs.includes(id)) {
            favs.push(id);
            localStorage.setItem(STORAGE_KEY, JSON.stringify(favs));
        }
    }

    function removeFav(id) {
        let favs = getFavs();
        favs = favs.filter(f => f !== id);
        localStorage.setItem(STORAGE_KEY, JSON.stringify(favs));
    }

    window.toggleFav = function(id, event) {
        event.preventDefault();
        event.stopPropagation();
        const btn = event.currentTarget;
        const isActive = btn.classList.contains('is-active');
        
        if (isActive) {
            btn.classList.remove('is-active');
            removeFav(id);
        } else {
            btn.classList.add('is-active');
            saveFav(id);
        }

        if (currentMode === 'favs') {
            refreshFavView();
        }
    }

    function initFavIcons() {
        const favs = getFavs();
        document.querySelectorAll('.fav-btn').forEach(btn => {
            const onclick = btn.getAttribute('onclick');
            if (onclick) {
                const match = onclick.match(/'([^']+)'/);
                if (match && favs.includes(match[1])) {
                    btn.classList.add('is-active');
                }
            }
        });
    }

    // --- View Modes Logic ---

    window.setTocMode = function(mode) {
        currentMode = mode;
        
        // Update Sidebar Buttons
        document.querySelectorAll('.toc-mode-btn').forEach(btn => {
            btn.classList.remove('bg-white', 'dark:bg-gray-800', 'shadow-sm', 'text-indigo-600', 'dark:text-indigo-400');
            btn.classList.add('text-gray-500', 'hover:text-gray-700', 'dark:text-gray-400', 'dark:hover:text-gray-200');
        });
        
        const activeBtn = document.getElementById('btn-mode-' + mode);
        if (activeBtn) {
            activeBtn.classList.remove('text-gray-500', 'hover:text-gray-700', 'dark:text-gray-400', 'dark:hover:text-gray-200');
            activeBtn.classList.add('bg-white', 'dark:bg-gray-800', 'shadow-sm', 'text-indigo-600', 'dark:text-indigo-400');
        }

        // Hide all views
        document.querySelectorAll('.toc-view-container').forEach(v => v.classList.add('hidden'));

        if (mode === 'chapters') {
            document.getElementById('toc-view-chapters').classList.remove('hidden');
            resetView();
        } else if (mode === 'pages') {
            document.getElementById('toc-view-pages').classList.remove('hidden');
        } else if (mode === 'favs') {
            // Favoris uses the chapters structure but filtered
            document.getElementById('toc-view-chapters').classList.remove('hidden');
            refreshFavView();
        }
    }

    function resetView() {
        nodes.forEach(n => {
            n.classList.remove('hidden');
            n.classList.remove('is-expanded');
            n.querySelector(':scope > .toc-content')?.classList.add('hidden');
            const btn = n.querySelector(':scope > .toc-header .toc-toggle-btn');
            if (btn && !n.querySelector('svg')) btn.textContent = '+';
        });
        document.querySelectorAll('.toc-leaf-wrapper').forEach(l => l.classList.remove('hidden'));
    }

    function refreshFavView() {
        const favs = getFavs();
        resetView();
        
        if (favs.length === 0) return;

        // Hide everything in the chapters view first
        nodes.forEach(n => n.classList.add('hidden'));
        document.querySelectorAll('#toc-view-chapters .toc-leaf-wrapper').forEach(l => l.classList.add('hidden'));

        favs.forEach(id => {
            const el = root.querySelector(`#toc-view-chapters [data-section="${id}"]`);
            if (el) {
                el.classList.remove('hidden');
                let parent = el.parentElement.closest('.toc-node');
                while (parent) {
                    parent.classList.remove('hidden');
                    expandToNode(parent);
                    parent = parent.parentElement.closest('.toc-node');
                }
            }
        });
    }

    // --- Core Navigation ---

    function expandToNode(node) {
        if (!node) return;
        node.classList.add('is-expanded');
        const content = node.querySelector(':scope > .toc-content');
        if (content) content.classList.remove('hidden');
        
        const btn = node.querySelector(':scope > .toc-header .toc-toggle-btn');
        if (btn && !btn.querySelector('svg')) {
            btn.innerHTML = '&#8722;'; // Use HTML entity for minus to ensure consistency
        }

        const parentNode = node.parentElement.closest('.toc-node');
        if (parentNode) expandToNode(parentNode);
    }

    function collapseAllExcept(activeNode) {
        nodes.forEach(node => {
            if (activeNode && !node.contains(activeNode)) {
                node.classList.remove('is-expanded');
                const content = node.querySelector(':scope > .toc-content');
                if (content) content.classList.add('hidden');
                
                const btn = node.querySelector(':scope > .toc-header .toc-toggle-btn');
                if (btn && !btn.querySelector('svg')) {
                    btn.innerHTML = '+';
                }
            }
        });
    }

    function highlightLink(targetId) {
        links.forEach(l => l.classList.remove('is-active'));
        document.querySelectorAll('.toc-leaf-wrapper').forEach(l => l.classList.remove('is-active'));
        
        const activeLink = root.querySelector(`.toc-link[href="#${targetId}"]`);
        if (activeLink) {
            activeLink.classList.add('is-active');
            const leafWrapper = activeLink.closest('.toc-leaf-wrapper');
            if (leafWrapper) leafWrapper.classList.add('is-active');
            
            activeLink.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    }

    // --- Event Listeners ---

    root.addEventListener('click', (e) => {
        const toggleBtn = e.target.closest('.toc-toggle-btn');
        const link = e.target.closest('.toc-link');
        const node = e.target.closest('.toc-node');

        if (toggleBtn) {
            e.preventDefault();
            e.stopPropagation();
            const isExpanded = node.classList.contains('is-expanded');
            if (isExpanded) {
                node.classList.remove('is-expanded');
                node.querySelector(':scope > .toc-content').classList.add('hidden');
                if (!toggleBtn.querySelector('svg')) toggleBtn.innerHTML = '+';
            } else {
                expandToNode(node);
            }
            return;
        }

        if (link) {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetEl = document.getElementById(targetId);
            
            if (targetEl) {
                const targetNode = link.closest('.toc-node') || link.parentElement.closest('.toc-node');
                if (currentMode !== 'favs' && targetNode) collapseAllExcept(targetNode);
                if (targetNode) expandToNode(targetNode);
                
                highlightLink(targetId);

                const offset = 100;
                const bodyRect = document.body.getBoundingClientRect().top;
                const elementRect = targetEl.getBoundingClientRect().top;
                const elementPosition = elementRect - bodyRect;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                targetEl.classList.add('rpa-heading-highlight');
                setTimeout(() => targetEl.classList.remove('rpa-heading-highlight'), 2000);
                history.pushState(null, null, '#' + targetId);
            }
        }
    });

    // --- Initialization ---
    initFavIcons();
    setTocMode('chapters');

    const sections = Array.from(links).map(l => document.getElementById(l.getAttribute('href').substring(1))).filter(Boolean);
    const observerOptions = {
        root: null,
        rootMargin: '-15% 0px -75% 0px',
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.id;
                const link = root.querySelector(`.toc-link[href="#${id}"]`);
                if (link) {
                    const node = link.closest('.toc-node');
                    if (currentMode !== 'favs' && node) {
                        collapseAllExcept(node);
                        expandToNode(node);
                    }
                    highlightLink(id);
                }
            }
        });
    }, observerOptions);

    sections.forEach(s => observer.observe(s));

    if (window.location.hash) {
        const id = window.location.hash.substring(1);
        const link = root.querySelector(`.toc-link[href="#${window.location.hash}"]`);
        if (link) {
            const node = link.closest('.toc-node');
            if(node) expandToNode(node);
            highlightLink(id);
        }
    }
})();
</script>
