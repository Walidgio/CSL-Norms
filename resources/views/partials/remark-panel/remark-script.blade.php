@php
    $docId = $docId ?? 'default_book';
@endphp

<script>
/**
 * ============================================================
 *  GLOBAL REMARK SYSTEM (Logic - Final Redesign)
 * ============================================================
 */
(function () {
    'use strict';

    const DOC_ID = '{{ $docId }}';
    const STORAGE_KEY = 'ann_data_book_' + DOC_ID;
    const COLOR_MAP = { yellow: 'fbbf24', green: '22c55e', blue: '3b82f6', rose: 'f43f5e' };
    const COLOR_MAP_REV = Object.fromEntries(Object.entries(COLOR_MAP).map(([k,v]) => [v,k]));

    // In-memory cache of annotations loaded from DB
    let _annotations = [];

    function uid() {
        return 'ann_' + Date.now() + '_' + Math.random().toString(36).slice(2, 7);
    }

    // ── API Helper ──
    async function api(url, method = 'GET', body = null) {
        const opts = { method, headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' } };
        if (body) { opts.headers['Content-Type'] = 'application/json'; opts.body = JSON.stringify(body); }
        if (window.csrfToken) opts.headers['X-CSRF-TOKEN'] = window.csrfToken;
        const resp = await fetch(url, opts);
        if (!resp.ok) {
            if (resp.status === 401) { showToast('Veuillez vous connecter.', 'warn'); throw new Error('Unauthorized'); }
            throw new Error('API error: ' + resp.status);
        }
        return resp.json();
    }

    async function fetchAnnotations() {
        try { _annotations = await api('/api/annotations/' + DOC_ID); } catch (e) { console.warn('[Annotator] Fetch failed', e); _annotations = []; }
        return _annotations;
    }

    function loadAll() { return _annotations; }

    // delete explanation: saveAll() removed — each mutation now uses its own API endpoint

    function showToast(msg, type = 'info') {
        const t = document.getElementById('rpa-toast');
        if (!t) return;
        t.textContent = msg;
        t.className = 'show' + (type === 'warn' ? ' warn' : '');
        clearTimeout(t._timer);
        t._timer = setTimeout(() => { t.className = ''; }, 3200);
    }

    function getXPath(node, root) {
        if (node === root || !root.contains(node)) return '/';
        if (node.nodeType === Node.TEXT_NODE) {
            const parent = node.parentNode;
            const siblings = Array.from(parent.childNodes).filter(n => n.nodeType === Node.TEXT_NODE);
            const idx = siblings.indexOf(node) + 1;
            return getXPath(parent, root) + '/text()[' + idx + ']';
        }
        const tag = node.tagName.toLowerCase();
        const siblings = Array.from(node.parentNode.children).filter(n => n.tagName.toLowerCase() === tag);
        const idx = siblings.indexOf(node) + 1;
        return getXPath(node.parentNode, root) + '/' + tag + '[' + idx + ']';
    }

    function resolveXPath(xpath, root) {
        try {
            const result = document.evaluate('.' + xpath, root, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
            return result.singleNodeValue;
        } catch (e) { return null; }
    }

    function serializeRange(range) {
        const startNode = range.startContainer;
        const endNode   = range.endContainer;
        const startEl = startNode.nodeType === Node.TEXT_NODE ? startNode.parentElement : startNode;
        const section = startEl.closest('[id^="rpa-p"], [id^="art-"], [id^="section-"]');
        if (!section) return null;

        return {
            sectionId:   section.id,
            startXPath:  getXPath(startNode, section),
            startOffset: range.startOffset,
            endXPath:    getXPath(endNode, section),
            endOffset:   range.endOffset,
            quote:       range.toString().trim().slice(0, 300),
        };
    }

    function applyHighlight(ann) {
        const section = document.getElementById(ann.sectionId);
        if (!section) return;

        const startNode = resolveXPath(ann.startXPath, section);
        const endNode   = resolveXPath(ann.endXPath, section);
        if (!startNode || !endNode) return;

        try {
            const range = document.createRange();
            range.setStart(startNode, ann.startOffset);
            range.setEnd(endNode, ann.endOffset);

            const mark = document.createElement('mark');
            const cName = ann.colorName || COLOR_MAP_REV[ann.color] || 'yellow';
            const colorClass = `rpa-ann-${cName}`;
            mark.className = `rpa-annotation ${colorClass}`;
            
            // If color is a hex not in our map, apply directly
            if (!COLOR_MAP_REV[ann.color] && ann.color && ann.color.length === 6) {
                mark.style.backgroundColor = `#${ann.color}44`;
                mark.style.borderBottomColor = `#${ann.color}`;
            }
            mark.dataset.annId = ann.id;
            mark.addEventListener('click', () => openPanel(ann.id));

            if (range.startContainer === range.endContainer) {
                range.surroundContents(mark);
            } else {
                const frag = range.extractContents();
                mark.appendChild(frag);
                range.insertNode(mark);
            }
        } catch (e) { console.warn('[Annotator] Failed for', ann.id); }
    }

    function renderBulbIcons() {
        document.querySelectorAll('.rpa-bulb-btn').forEach(b => b.remove());
        const annotations = loadAll();
        const bySection = {};
        annotations.forEach(ann => {
            // Apply filter: if mode is 'mine', only show if user is owner or has a remark
            if (filterMode === 'mine') {
                const isMine = ann.user_id === window.authUserId || ann.remarks.some(r => r.user_id === window.authUserId);
                if (!isMine) return;
            }
            if (!bySection[ann.sectionId]) bySection[ann.sectionId] = [];
            bySection[ann.sectionId].push(ann);
        });

        Object.entries(bySection).forEach(([sectionId, anns]) => {
            const section = document.getElementById(sectionId);
            if (!section) return;
            
            // Ensure section is relative for absolute bulbs
            section.style.position = 'relative';

            const usedTops = new Set();

            anns.forEach((ann, idx) => {
                const mark = section.querySelector(`[data-ann-id="${ann.id}"]`);
                const sectionRect = section.getBoundingClientRect();
                const markRect = mark ? mark.getBoundingClientRect() : null;
                
                const topOffset = markRect
                    ? Math.round(markRect.top - sectionRect.top + section.scrollTop)
                    : 60 + idx * 48;

                const lineKey = Math.round(topOffset / 12);
                if (usedTops.has(lineKey)) return;
                usedTops.add(lineKey);

                const btn = document.createElement('button');
                btn.className = 'rpa-bulb-btn';
                btn.dataset.annId = ann.id;
                btn.style.top = Math.max(topOffset, 40) + 'px';
                btn.innerHTML = `
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .5 2.2 1.5 3.1.7.7 1.3 1.5 1.5 2.5"/>
                        <path d="M9 18h6M10 22h4"/>
                    </svg>
                    ${ann.remarks.length > 0 ? `<span class="rpa-bulb-count">${ann.remarks.length}</span>` : ''}
                `;
                btn.addEventListener('click', () => openPanel(ann.id));
                section.appendChild(btn);
            });
        });
    }

    let currentAnnId = null;
    let activeMarkEl = null;
    let filterMode = 'all';
    let hideHighlights = false;

    // --- COLOR PICKER LOGIC ---
    
    window.toggleColorMenu = function() {
        const menu = document.getElementById('rpa-color-menu');
        menu.classList.toggle('hidden');
    };

    window.changeColor = async function(color) {
        if (!currentAnnId) return;
        const hex = COLOR_MAP[color] || color;
        try {
            await api('/api/annotations/' + currentAnnId + '/color', 'PATCH', { color: hex });
            const ann = loadAll().find(a => a.id === currentAnnId);
            if (ann) { ann.color = hex; ann.colorName = color; }
            updateColorUI({ color: hex });
            if (activeMarkEl) {
                activeMarkEl.style.backgroundColor = '';
                activeMarkEl.style.borderBottomColor = '';
                activeMarkEl.classList.remove('rpa-ann-yellow', 'rpa-ann-green', 'rpa-ann-blue', 'rpa-ann-rose');
                const preset = COLOR_MAP_REV[hex];
                if (preset) activeMarkEl.classList.add('rpa-ann-' + preset);
                else { activeMarkEl.style.backgroundColor = '#' + hex + '44'; activeMarkEl.style.borderBottomColor = '#' + hex; }
            }
            document.getElementById('rpa-color-menu').classList.add('hidden');
            showToast('Couleur: ' + (COLOR_MAP_REV[hex] || hex));
        } catch (e) { showToast('Erreur couleur', 'warn'); }
    };

    function updateColorUI(ann) {
        const hex = ann.color || 'fbbf24';
        const circle = document.getElementById('rpa-active-color-circle');
        circle.style.backgroundColor = '#' + hex;
        const label = document.getElementById('rpa-hex-editable');
        label.textContent = hex.toUpperCase();
        label.classList.remove('invalid');
    }

    function initHexEditor() {
        const label = document.getElementById('rpa-hex-editable');
        if (!label) return;

        label.addEventListener('blur', () => {
            const hex = label.textContent.trim().replace('#', '');
            const isValid = /^([0-9A-F]{3}){1,2}$/i.test(hex);

            if (isValid && currentAnnId) {
                const all = loadAll();
                const ann = all.find(a => a.id == currentAnnId);
                if (ann) {
                    ann.color = 'custom';
                    ann.hex = hex;
                    saveAll(all);
                    updateColorUI(ann);
                    if (activeMarkEl) {
                        activeMarkEl.classList.remove('rpa-ann-yellow', 'rpa-ann-green', 'rpa-ann-blue', 'rpa-ann-rose');
                        activeMarkEl.style.backgroundColor = `#${hex}44`;
                        activeMarkEl.style.borderBottomColor = `#${hex}`;
                    }
                    showToast('Couleur personnalisée appliquée');
                }
            } else {
                label.classList.add('invalid');
                showToast('Format HEX invalide (ex: FF0000)', 'warn');
                // Revert after a short delay
                setTimeout(() => {
                    if (currentAnnId) {
                        const ann = loadAll().find(a => a.id == currentAnnId);
                        if (ann) updateColorUI(ann);
                    }
                }, 1500);
            }
        });

        label.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') { e.preventDefault(); label.blur(); }
        });
    }

    // --- PANEL LOGIC ---

    function openPanel(annId) {
        currentAnnId = annId;
        const panel   = document.getElementById('rpa-ann-panel');
        const overlay = document.getElementById('rpa-ann-overlay');
        
        if (activeMarkEl) activeMarkEl.classList.remove('active');
        activeMarkEl = document.querySelector(`mark[data-ann-id="${annId}"]`);
        if (activeMarkEl) activeMarkEl.classList.add('active');

        panel.classList.add('open');
        overlay.classList.add('open');
        renderPanel(annId);

        setTimeout(() => {
            const txt = document.getElementById('rpa-input-text');
            if (txt) txt.focus();
        }, 300);
    }

    function closePanel() {
        document.getElementById('rpa-ann-panel').classList.remove('open');
        document.getElementById('rpa-ann-overlay').classList.remove('open');
        document.getElementById('rpa-color-menu').classList.add('hidden');
        if (activeMarkEl) activeMarkEl.classList.remove('active');
        activeMarkEl = null;
        currentAnnId = null;
    }

    function renderPanel(annId) {
        const annotations = loadAll();
        const ann = annotations.find(a => a.id == annId);
        if (!ann) return;

        updateColorUI(ann);

        const quoteEl = document.getElementById('rpa-panel-quote');
        quoteEl.textContent = '"' + ann.quote + '"';
        document.getElementById('rpa-panel-count').textContent =
            ann.remarks.length + ' remarque' + (ann.remarks.length !== 1 ? 's' : '');

        const list = document.getElementById('rpa-remarks-list');
        let filtered = [...ann.remarks];
        if (filterMode === 'mine') filtered = filtered.filter(r => r.user_id === window.authUserId);
        const sorted = filtered.sort((a, b) => b.votes - a.votes);

        if (sorted.length === 0) {
            list.innerHTML = '<div style="text-align:center; padding:40px 20px; color:#94a3b8; font-size:12px;">Soyez le premier à commenter ce point.</div>';
            return;
        }

        list.innerHTML = sorted.map(rem => {
            const isOwner = rem.user_id === window.authUserId;
            const isSA = window.isSuperAdmin;
            let actions = '';
            if (isOwner || isSA) {
                actions += '<button class="rpa-action-btn" onclick="RpaAnnotator.editRemark(' + rem.id + ')" title="Modifier">✏️</button>';
                actions += '<button class="rpa-action-btn" onclick="RpaAnnotator.deleteRemark(' + rem.id + ')" title="Supprimer">🗑️</button>';
            }
            if (!isOwner && window.authUserId) {
                actions += '<button class="rpa-action-btn" onclick="RpaAnnotator.reportRemark(' + rem.id + ')" title="Signaler">🚩</button>';
            }
            if (isSA && rem.status === 'reported') {
                actions += '<button class="rpa-action-btn" onclick="RpaAnnotator.moderateRemark(' + rem.id + ',\'approve\')" title="Approuver">✅</button>';
                actions += '<button class="rpa-action-btn" onclick="RpaAnnotator.moderateRemark(' + rem.id + ',\'hide\')" title="Masquer">🚫</button>';
                actions += '<button class="rpa-action-btn" onclick="RpaAnnotator.moderateRemark(' + rem.id + ',\'delete\')" title="Supprimer">🗑️</button>';
            }
            let statusBadge = '';
            if (rem.status === 'reported') {
                if (isOwner) {
                    statusBadge = '<span style="font-size:9px;color:#ef4444;font-weight:700;text-transform:uppercase;">⚠️ Signalée - En attente de modération</span>';
                } else if (isSA) {
                    statusBadge = '<span style="font-size:9px;color:#ef4444;font-weight:700;">⚠️ SIGNALÉ</span>';
                }
            }
            return '<div class="rpa-remark-card" data-rem-id="' + rem.id + '">' +
                '<div class="rpa-remark-avatar">' + (rem.author || '?').charAt(0).toUpperCase() + '</div>' +
                '<div class="rpa-remark-body">' +
                    '<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:4px;">' +
                        '<span class="rpa-remark-author">' + (rem.author || 'Anonyme') + (isOwner ? ' (Moi)' : '') + '</span>' +
                        (rem.isPrivate ? '<span style="font-size:9px;color:#f59e0b;">🔒 PRIVÉ</span>' : '') +
                        statusBadge +
                    '</div>' +
                    '<div class="rpa-remark-text">' + rem.text + '</div>' +
                    '<div class="rpa-vote-row">' +
                        '<button class="rpa-vote-btn ' + (rem.userVote === 'up' ? 'voted-up' : '') + '" onclick="RpaAnnotator.vote(' + annId + ',' + rem.id + ',\'up\')">UTILE</button>' +
                        '<span class="rpa-vote-score">' + rem.votes + '</span>' +
                        '<span class="rpa-action-row">' + actions + '</span>' +
                    '</div>' +
                '</div>' +
            '</div>';
        }).join('');
    }

    // ── Edit state ──
    let _editingRemId = null;

    async function addRemark(annId) {
        // If in edit mode, delegate to saveEdit
        if (_editingRemId) { await saveEdit(); return; }
        const textInput = document.getElementById('rpa-input-text');
        const privCheck = document.getElementById('rpa-is-private');
        const text = textInput.value.trim();
        const isPrivate = privCheck ? privCheck.checked : false;
        if (!text) { showToast('Veuillez écrire un message.', 'warn'); return; }
        try {
            const resp = await api('/api/annotations/' + annId + '/remarks', 'POST', { text, is_private: isPrivate });
            const ann = loadAll().find(a => a.id == annId);
            if (ann && resp.remark) ann.remarks.push(resp.remark);
            textInput.value = '';
            if (privCheck) privCheck.checked = false;
            renderPanel(annId);
            renderBulbIcons();
            showToast('✓ Remarque publiée');
        } catch (e) { showToast('Erreur publication', 'warn'); }
    }

    async function vote(annId, remId, dir) {
        try {
            const resp = await api('/api/remarks/' + remId + '/vote', 'POST', { direction: dir });
            const ann = loadAll().find(a => a.id == annId);
            if (ann) {
                const rem = ann.remarks.find(r => r.id == remId);
                if (rem) { rem.votes = resp.votes; rem.userVote = rem.userVote === dir ? null : dir; }
            }
            renderPanel(annId);
        } catch (e) { showToast('Erreur vote', 'warn'); }
    }

    function editRemark(remId) {
        // Find the remark in the current annotation
        if (!currentAnnId) return;
        const ann = loadAll().find(a => a.id == currentAnnId);
        if (!ann) return;
        const rem = ann.remarks.find(r => r.id == remId);
        if (!rem) return;

        _editingRemId = remId;

        // Populate the textarea with existing text
        const textInput = document.getElementById('rpa-input-text');
        const privCheck = document.getElementById('rpa-is-private');
        const submitBtn = document.getElementById('rpa-form-submit');
        const formLabel = document.getElementById('rpa-form-label');
        const cancelBtn = document.getElementById('rpa-edit-cancel');

        if (textInput) { textInput.value = rem.text; textInput.focus(); }
        if (privCheck) privCheck.checked = !!rem.isPrivate;
        if (submitBtn) { submitBtn.textContent = '💾 SAUVEGARDER'; submitBtn.classList.add('editing'); }
        if (formLabel) formLabel.textContent = 'Modifier la remarque';
        if (cancelBtn) cancelBtn.style.display = 'inline-block';

        // Highlight the card being edited
        document.querySelectorAll('.rpa-remark-card').forEach(c => c.classList.remove('editing'));
        const card = document.querySelector(`.rpa-remark-card[data-rem-id="${remId}"]`);
        if (card) card.classList.add('editing');
    }

    function cancelEdit() {
        _editingRemId = null;
        const textInput = document.getElementById('rpa-input-text');
        const privCheck = document.getElementById('rpa-is-private');
        const submitBtn = document.getElementById('rpa-form-submit');
        const formLabel = document.getElementById('rpa-form-label');
        const cancelBtn = document.getElementById('rpa-edit-cancel');

        if (textInput) textInput.value = '';
        if (privCheck) privCheck.checked = false;
        if (submitBtn) { submitBtn.textContent = 'PUBLIER LA REMARQUE'; submitBtn.classList.remove('editing'); }
        if (formLabel) formLabel.textContent = 'Nouvelle remarque';
        if (cancelBtn) cancelBtn.style.display = 'none';

        document.querySelectorAll('.rpa-remark-card').forEach(c => c.classList.remove('editing'));
    }

    async function saveEdit() {
        if (!_editingRemId) return;
        const textInput = document.getElementById('rpa-input-text');
        const privCheck = document.getElementById('rpa-is-private');
        const text = textInput ? textInput.value.trim() : '';
        const isPrivate = privCheck ? privCheck.checked : false;
        if (!text) { showToast('Le texte ne peut pas être vide.', 'warn'); return; }

        try {
            const resp = await api('/api/remarks/' + _editingRemId, 'PATCH', { text, is_private: isPrivate });
            // Update local cache
            const ann = loadAll().find(a => a.id == currentAnnId);
            if (ann) {
                const rem = ann.remarks.find(r => r.id == _editingRemId);
                if (rem) { rem.text = resp.text; rem.isPrivate = resp.isPrivate; }
            }
            cancelEdit();
            if (currentAnnId) renderPanel(currentAnnId);
            showToast('✓ Remarque modifiée');
        } catch (e) { showToast('Erreur modification', 'warn'); }
    }

    async function deleteRemark(remId) {
        if (!confirm('Supprimer cette remarque ?')) return;
        try {
            await api('/api/remarks/' + remId, 'DELETE');
            await fetchAnnotations();
            if (currentAnnId) { renderPanel(currentAnnId); renderBulbIcons(); }
            showToast('✓ Remarque supprimée');
        } catch (e) { showToast('Erreur suppression', 'warn'); }
    }

    async function reportRemark(remId) {
        if (!confirm('Signaler cette remarque aux administrateurs ?')) return;
        try {
            await api('/api/remarks/' + remId + '/report', 'POST');
            await fetchAnnotations();
            if (currentAnnId) renderPanel(currentAnnId);
            showToast('✓ Remarque signalée');
        } catch (e) { showToast(e.message || 'Erreur signalement', 'warn'); }
    }

    async function moderateRemark(remId, action) {
        try {
            await api('/api/remarks/' + remId + '/moderate', 'POST', { action });
            await fetchAnnotations();
            if (currentAnnId) { renderPanel(currentAnnId); renderBulbIcons(); }
            showToast('✓ Action: ' + action);
        } catch (e) { showToast('Erreur modération', 'warn'); }
    }

    function goNext() {
        const all = loadAll();
        if (all.length < 2) return;
        let idx = all.findIndex(a => a.id == currentAnnId);
        idx = (idx + 1) % all.length;
        openPanel(all[idx].id);
        const mark = document.querySelector(`mark[data-ann-id="${all[idx].id}"]`);
        if (mark) mark.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    function goPrev() {
        const all = loadAll();
        if (all.length < 2) return;
        let idx = all.findIndex(a => a.id == currentAnnId);
        idx = (idx - 1 + all.length) % all.length;
        openPanel(all[idx].id);
        const mark = document.querySelector(`mark[data-ann-id="${all[idx].id}"]`);
        if (mark) mark.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    function setFilter(mode) {
        filterMode = mode;
        document.querySelectorAll('.rpa-filter-btn[id^="filter-"]').forEach(btn => {
            btn.classList.toggle('active', btn.id === `filter-${mode}`);
        });

        // Update highlight marks visibility
        const annotations = loadAll();
        annotations.forEach(ann => {
            const isMine = ann.user_id === window.authUserId || ann.remarks.some(r => r.user_id === window.authUserId);
            const shouldShow = (filterMode === 'all' || isMine);
            document.querySelectorAll(`mark[data-ann-id="${ann.id}"]`).forEach(m => {
                m.classList.toggle('rpa-hidden-mark', !shouldShow);
            });
        });

        renderBulbIcons();
        if (currentAnnId) renderPanel(currentAnnId);
    }

    function toggleHighlights() {
        hideHighlights = !hideHighlights;
        document.body.classList.toggle('rpa-hide-highlights', hideHighlights);
        showToast(hideHighlights ? 'Surbrillances masquées' : 'Surbrillances affichées');
    }

    function showTooltip(range) {
        const rect = range.getBoundingClientRect();
        const tooltip = document.getElementById('rpa-add-tooltip');
        tooltip.style.left = (rect.left + rect.width / 2 - tooltip.offsetWidth / 2) + 'px';
        tooltip.style.top  = (rect.top - 48) + 'px'; // rect.top is viewport-relative, so is the fixed tooltip
        tooltip.style.opacity = '1'; tooltip.style.pointerEvents = 'auto';
    }

    function hideTooltip() {
        const tooltip = document.getElementById('rpa-add-tooltip');
        tooltip.style.opacity = '0'; tooltip.style.pointerEvents = 'none';
    }

    async function saveAnnotation(meta) {
        try {
            const resp = await api('/api/annotations', 'POST', {
                doc_id: DOC_ID,
                section_id: meta.sectionId,
                start_xpath: meta.startXPath,
                start_offset: meta.startOffset,
                end_xpath: meta.endXPath,
                end_offset: meta.endOffset,
                quote: meta.quote,
                color: 'fbbf24' // default yellow hex
            });
            
            if (resp.annotation) {
                _annotations.push(resp.annotation);
                applyHighlight(resp.annotation);
                renderBulbIcons();
                openPanel(resp.annotation.id);
            }
        } catch (e) {
            showToast('Erreur lors de la sauvegarde de l\'annotation', 'warn');
        }
    }

    async function init() {
        await fetchAnnotations();
        loadAll().forEach(ann => applyHighlight(ann));
        renderBulbIcons();
        initHexEditor();

        // ── Migration Banner ──
        const legacyDataRaw = localStorage.getItem(STORAGE_KEY);
        if (legacyDataRaw && window.authUserId) {
            try {
                const legacyAnns = JSON.parse(legacyDataRaw);
                if (legacyAnns.length > 0 && !localStorage.getItem(STORAGE_KEY + '_migrated')) {
                    const banner = document.createElement('div');
                    banner.innerHTML = `
                        <div style="position:fixed; bottom:20px; left:20px; z-index:9999; background:white; padding:15px; border-radius:8px; box-shadow:0 10px 25px rgba(0,0,0,0.1); border:1px solid #e2e8f0; display:flex; align-items:center; gap:12px; max-width:400px;" class="dark:bg-slate-800 dark:border-slate-700">
                            <div style="font-size:24px;">📦</div>
                            <div style="flex:1;">
                                <h4 style="margin:0; font-size:14px; font-weight:700; color:#0f172a;" class="dark:text-white">Données locales détectées</h4>
                                <p style="margin:2px 0 0; font-size:12px; color:#64748b;" class="dark:text-slate-400">Vous avez ${legacyAnns.length} annotation(s) non synchronisée(s).</p>
                            </div>
                            <button id="rpa-sync-btn" style="background:#4f46e5; color:white; border:none; padding:6px 12px; border-radius:4px; font-size:12px; font-weight:600; cursor:pointer;">Synchroniser</button>
                            <button id="rpa-sync-dismiss" style="background:transparent; color:#94a3b8; border:none; padding:4px; cursor:pointer;">✕</button>
                        </div>
                    `;
                    document.body.appendChild(banner);
                    
                    document.getElementById('rpa-sync-dismiss').addEventListener('click', () => {
                        banner.remove();
                        localStorage.setItem(STORAGE_KEY + '_migrated', 'true'); // don't ask again
                    });
                    
                    document.getElementById('rpa-sync-btn').addEventListener('click', async () => {
                        try {
                            const btn = document.getElementById('rpa-sync-btn');
                            btn.textContent = '...';
                            btn.disabled = true;
                            
                            const resp = await api('/api/annotations/sync', 'POST', {
                                doc_id: DOC_ID,
                                annotations: legacyAnns
                            });
                            
                            showToast(`✓ ${resp.imported} annotations synchronisées !`);
                            localStorage.removeItem(STORAGE_KEY);
                            banner.remove();
                            
                            // reload to show the merged data
                            await fetchAnnotations();
                            document.querySelectorAll('.rpa-ann-highlight, .rpa-remark-bulb').forEach(el => el.remove());
                            loadAll().forEach(ann => applyHighlight(ann));
                            renderBulbIcons();
                        } catch(e) {
                            showToast('Erreur de synchronisation', 'warn');
                            document.getElementById('rpa-sync-btn').textContent = 'Réessayer';
                            document.getElementById('rpa-sync-btn').disabled = false;
                        }
                    });
                }
            } catch(e) {}
        }

        document.addEventListener('mouseup', (e) => {
            if (e.target.closest('#rpa-add-tooltip') || e.target.closest('#rpa-ann-panel')) return;
            const sel = window.getSelection();
            if (!sel || sel.isCollapsed || !sel.toString().trim()) { hideTooltip(); return; }
            const range = sel.getRangeAt(0);
            
            // Check if within annotatable area
            const annotatableRoot = range.startContainer.parentElement.closest('[data-annotatable="true"]');
            if (!annotatableRoot) { hideTooltip(); return; }
            
            if (sel.toString().trim().length < 3) { hideTooltip(); return; }
            const meta = serializeRange(range);
            if (!meta) { hideTooltip(); return; }
            showTooltip(range);
            window._pendingMeta = meta;
        });

        // Click-to-annotate for Figures and Equations
        document.addEventListener('click', (e) => {
            const target = e.target.closest('[id^="rpa-fig-"], [id^="rpa-eqt-"]');
            if (target && !e.target.closest('mark')) {
                // If clicking a figure/equation that isn't already inside an annotation
                const section = target.closest('[id^="rpa-p"], [id^="art-"], [id^="section-"]');
                if (!section) return;

                // Create a "whole element" annotation meta
                const meta = {
                    sectionId:   section.id,
                    startXPath:  getXPath(target, section),
                    startOffset: 0,
                    endXPath:    getXPath(target, section),
                    endOffset:   1, // Dummy offset for whole element
                    quote:       target.innerText.trim().slice(0, 100) || target.id,
                };
                
                // Show tooltip near the target
                const rect = target.getBoundingClientRect();
                const tooltip = document.getElementById('rpa-add-tooltip');
                tooltip.style.left = (rect.left + rect.width / 2 - tooltip.offsetWidth / 2) + 'px';
                tooltip.style.top  = (rect.top - 30) + 'px';
                tooltip.style.opacity = '1'; tooltip.style.pointerEvents = 'auto';
                window._pendingMeta = meta;
            }
        });

        const addTooltip = document.getElementById('rpa-add-tooltip');
        if (addTooltip) {
            addTooltip.addEventListener('click', () => {
                if (!window.authUserId) {
                    window.location.href = '/login';
                    return;
                }
                if (!window._pendingMeta) return;
                saveAnnotation(window._pendingMeta);
                hideTooltip();
                window.getSelection().removeAllRanges();
            });
        }

        const overlay = document.getElementById('rpa-ann-overlay');
        if (overlay) overlay.addEventListener('click', closePanel);
        
        const closeBtn = document.getElementById('rpa-panel-close');
        if (closeBtn) closeBtn.addEventListener('click', closePanel);
        
        const formSubmit = document.getElementById('rpa-form-submit');
        if (formSubmit) {
            formSubmit.addEventListener('click', () => { if (currentAnnId) addRemark(currentAnnId); });
        }
        
        const inputText = document.getElementById('rpa-input-text');
        if (inputText) {
            inputText.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' && (e.ctrlKey || e.metaKey)) { if (currentAnnId) addRemark(currentAnnId); }
            });
        }
        document.addEventListener('mousedown', (e) => { 
            if (!e.target.closest('#rpa-add-tooltip')) hideTooltip();
            const colorMenu = document.getElementById('rpa-color-menu');
            if (colorMenu && !e.target.closest('.rpa-color-master-wrap')) colorMenu.classList.add('hidden');
        });
    }

    window.RpaAnnotator = { init, vote, openPanel, closePanel, addRemark, changeColor, goNext, goPrev, setFilter, toggleHighlights, toggleColorMenu, editRemark, cancelEdit, saveEdit, deleteRemark, reportRemark, moderateRemark };
    init();
})();
</script>
