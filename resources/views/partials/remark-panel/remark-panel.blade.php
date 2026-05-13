{{-- ── DOM: Floating Tooltip ── --}}
<div id="rpa-add-tooltip" style="opacity:0;pointer-events:none;top:0;left:0;">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
        <path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    @auth
        Annoter la sélection
    @else
        Se connecter pour annoter
    @endauth
</div>

{{-- ── DOM: Overlay ── --}}
<div id="rpa-ann-overlay"></div>

{{-- ── DOM: Slide Panel ── --}}
<div id="rpa-ann-panel" role="dialog" aria-modal="true">
    {{-- Header --}}
    <div id="rpa-panel-header">
        <div style="display:flex; align-items:flex-start; justify-content:space-between; gap:12px;">
            <div style="flex:1;">
                <div style="display:flex; align-items:center; gap:10px;">
                    <div style="width:10px; height:10px; border-radius:50%; background:#f97316;"></div>
                    <span id="rpa-panel-title" style="font-size:16px; font-weight:900; letter-spacing:-0.02em; color:#0f172a;" class="dark:text-white uppercase">Remarques</span>
                </div>
                <div id="rpa-panel-count" style="font-size:12px; color:#64748b; margin-top:2px; font-weight:600;">0 remarques</div>
            </div>

            <button id="rpa-panel-close" onclick="RpaAnnotator.closePanel()">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>

        {{-- Quote Area --}}
        <div id="rpa-panel-quote"></div>

        {{-- Interactive Controls Row --}}
        <div style="margin-top:16px; display:flex; align-items:center; justify-content:space-between;">
            <div style="display:flex; align-items:center; gap:12px;">
                {{-- Compact Color Picker --}}
                <div class="rpa-color-master-wrap">
                    <div id="rpa-active-color-circle" class="rpa-active-color-circle" onclick="RpaAnnotator.toggleColorMenu()"></div>
                    <div id="rpa-color-menu" class="rpa-color-menu hidden">
                        <div class="rpa-color-dot dot-yellow" onclick="RpaAnnotator.changeColor('yellow')"></div>
                        <div class="rpa-color-dot dot-green" onclick="RpaAnnotator.changeColor('green')"></div>
                        <div class="rpa-color-dot dot-blue" onclick="RpaAnnotator.changeColor('blue')"></div>
                        <div class="rpa-color-dot dot-rose" onclick="RpaAnnotator.changeColor('rose')"></div>
                    </div>
                    <div class="rpa-hex-label-wrap">
                        <span style="font-size:9px; color:#94a3b8; font-weight:900;">#</span>
                        <span id="rpa-hex-editable" class="rpa-hex-editable" contenteditable="true" spellcheck="false">fbbf24</span>
                    </div>
                </div>

                <div style="display:flex; gap:6px;">
                    <button id="filter-all" class="rpa-filter-btn active" onclick="RpaAnnotator.setFilter('all')">Tout</button>
                    <button id="filter-mine" class="rpa-filter-btn" onclick="RpaAnnotator.setFilter('mine')">Moi</button>
                </div>
            </div>
            
            <div style="display:flex; gap:6px; align-items:center;">
                <button class="rpa-nav-btn" onclick="RpaAnnotator.goPrev()">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <button class="rpa-nav-btn" onclick="RpaAnnotator.goNext()">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M9 18l6-6-6-6"/></svg>
                </button>
                <button id="rpa-toggle-highlights" onclick="RpaAnnotator.toggleHighlights()" class="rpa-filter-btn" title="Masquer surbrillances">
                    👁️
                </button>
            </div>
        </div>
    </div>

    {{-- List --}}
    <div id="rpa-remarks-list"></div>

    {{-- Form (Compact) — Auth vs Guest --}}
    <div id="rpa-add-form">
        @auth
            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:10px;">
                <span id="rpa-form-label" style="font-size:12px; font-weight:800; color:#0f172a;" class="dark:text-white uppercase">Nouvelle remarque</span>
                <div id="rpa-privacy-toggle-wrap" style="display:flex; align-items:center; gap:6px;">
                    <input type="checkbox" id="rpa-is-private" style="width:12px; height:12px;"> 
                    <label for="rpa-is-private" style="font-size:11px; font-weight:700; color:#f59e0b;">PRIVÉ</label>
                </div>
            </div>
            <textarea id="rpa-input-text" class="rpa-input" placeholder="Écrivez votre message technique... (Ctrl+Entrée)" rows="3"></textarea>
            <div style="display:flex; gap:8px;">
                <button id="rpa-form-submit" class="rpa-submit-btn" style="flex:1;">PUBLIER LA REMARQUE</button>
                <button id="rpa-edit-cancel" class="rpa-submit-btn" style="display:none; flex:0; padding:8px 14px; background:#64748b; font-size:10px;" onclick="RpaAnnotator.cancelEdit()">✕ ANNULER</button>
            </div>
        @else
            <a href="{{ Route::has('login') ? route('login') : url('/login') }}" class="rpa-submit-btn" style="text-align:center; display:block; text-decoration:none; margin-top:12px;">
                🔒 Se connecter pour commenter
            </a>
        @endauth
    </div>
</div>

<div id="rpa-toast"></div>
