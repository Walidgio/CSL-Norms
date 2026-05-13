<style>
/**
 * ============================================================
 *  GLOBAL ANNOTATION SYSTEM (Styles - Premium Redesign)
 * ============================================================
 */

/* ── Annotation highlight marks ── */
.rpa-annotation {
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    border-bottom: 2px solid transparent;
}

/* Color Variants */
.rpa-ann-yellow { background: rgba(251, 191, 36, 0.2); border-bottom-color: #f59e0b; }
.rpa-ann-green { background: rgba(34, 197, 94, 0.15); border-bottom-color: #22c55e; }
.rpa-ann-blue { background: rgba(59, 130, 246, 0.15); border-bottom-color: #3b82f6; }
.rpa-ann-rose { background: rgba(244, 63, 94, 0.15); border-bottom-color: #f43f5e; }

.rpa-annotation:hover {
    filter: brightness(1.1);
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.rpa-annotation.active {
    background: rgba(249, 115, 22, 0.1) !important;
    box-shadow: 0 0 0 4px rgba(249, 115, 22, 0.2);
    animation: rpa-soft-pulse 2.5s infinite;
}

@keyframes rpa-soft-pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.02); opacity: 0.9; }
    100% { transform: scale(1); opacity: 1; }
}

/* ── Floating Tooltip ── */
#rpa-add-tooltip {
    position: fixed; z-index: 10000;
    background: rgba(15, 23, 42, 0.9);
    backdrop-filter: blur(12px);
    color: white; border-radius: 99px;
    padding: 8px 18px; font-size: 12px; font-weight: 700;
    display: flex; align-items: center; gap: 8px;
    box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3);
    transition: opacity 0.2s, transform 0.2s;
    cursor: pointer;
}

/* ── Bulb buttons (The floating trigger) ── */
.rpa-bulb-btn {
    position: absolute; right: -48px;
    width: 32px; height: 32px;
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(249, 115, 22, 0.2);
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer; box-shadow: 0 4px 12px rgba(249, 115, 22, 0.1);
    transition: all 0.3s ease;
    z-index: 200;
}
.rpa-bulb-btn:hover {
    transform: translateX(3px) scale(1.1);
    background: white;
    box-shadow: 0 6px 18px rgba(249, 115, 22, 0.2);
    border-color: #f97316;
}
.dark .rpa-bulb-btn {
    background: rgba(30, 41, 59, 0.8);
    border-color: rgba(249, 115, 22, 0.3);
}

/* ── The Side Panel (Redesign) ── */
#rpa-ann-panel {
    position: fixed; right: 0; top: 0; bottom: 0;
    width: 380px; max-width: 95vw;
    background: #ffffff;
    z-index: 10001; display: flex; flex-direction: column;
    transform: translateX(100%); transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border-left: 1px solid #f1f5f9;
    box-shadow: -20px 0 60px rgba(15, 23, 42, 0.1);
}
#rpa-ann-panel.open { transform: translateX(0); }

/* Water / Liquid Background Effect */
#rpa-ann-panel::before {
    content: ""; position: absolute; inset: 0;
    background: 
        radial-gradient(circle at 100% 0%, rgba(56, 189, 248, 0.05) 0%, transparent 40%),
        radial-gradient(circle at 0% 100%, rgba(249, 115, 22, 0.03) 0%, transparent 40%);
    pointer-events: none; z-index: -1;
}

.dark #rpa-ann-panel {
    background: #0b1120;
    border-left-color: #1e293b;
    box-shadow: -20px 0 80px rgba(0,0,0,0.5);
}

/* Header Section */
#rpa-panel-header {
    padding: 24px 20px 16px 20px;
    background: rgba(255,255,255,0.7);
    backdrop-filter: blur(20px);
    border-bottom: 1px solid #f1f5f9;
    position: sticky; top: 0; z-index: 10;
}
.dark #rpa-panel-header {
    background: rgba(11, 17, 32, 0.8);
    border-bottom-color: #1e293b;
}

#rpa-panel-close {
    width: 32px; height: 32px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    background: #f8fafc; color: #64748b;
    transition: all 0.2s;
}
#rpa-panel-close:hover { background: #fee2e2; color: #ef4444; }
.dark #rpa-panel-close { background: #1e293b; }

#rpa-panel-quote {
    margin-top: 16px; padding: 12px 16px;
    background: #fdfaf6; border-left: 4px solid #f97316;
    font-size: 13px; font-style: italic; line-height: 1.6;
    color: #475569; border-radius: 0 8px 8px 0;
    max-height: 100px; overflow-y: auto;
}
.dark #rpa-panel-quote { background: rgba(249,115,22,0.05); color: #cbd5e1; }

/* Compact Remark Cards */
#rpa-remarks-list {
    flex: 1; overflow-y: auto; padding: 16px;
    display: flex; flex-direction: column; gap: 10px;
    scrollbar-width: thin;
}

.rpa-remark-card {
    background: white;
    border: 1px solid #f1f5f9;
    border-radius: 12px; padding: 12px;
    display: flex; gap: 10px;
    transition: transform 0.2s, box-shadow 0.2s;
}
.rpa-remark-card:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(0,0,0,0.04); }
.dark .rpa-remark-card { background: #1e293b; border-color: #334155; }

.rpa-remark-avatar {
    width: 32px; height: 32px; border-radius: 8px;
    background: linear-gradient(135deg, #f97316, #fb923c);
    color: white; display: flex; align-items: center; justify-content: center;
    font-size: 12px; font-weight: 800; flex-shrink: 0;
}

.rpa-remark-body { flex: 1; min-width: 0; }
.rpa-remark-author { font-size: 12px; font-weight: 700; color: #0f172a; margin-bottom: 2px; }
.dark .rpa-remark-author { color: #f8fafc; }
.rpa-remark-text { font-size: 12px; color: #475569; line-height: 1.5; word-wrap: break-word; }
.dark .rpa-remark-text { color: #94a3b8; }

/* Voting */
.rpa-vote-row { display: flex; align-items: center; gap: 4px; margin-top: 8px; }
.rpa-vote-btn {
    padding: 2px 8px; font-size: 10px; font-weight: 700;
    border: 1px solid #f1f5f9; border-radius: 6px;
    background: #f8fafc; cursor: pointer; transition: all 0.2s;
}
.rpa-vote-btn:hover { background: #f1f5f9; }
.rpa-vote-btn.voted-up { background: #dcfce7; color: #16a34a; border-color: #bbf7d0; }
.rpa-vote-btn.voted-down { background: #fee2e2; color: #dc2626; border-color: #fecaca; }
.rpa-vote-score { font-size: 11px; font-weight: 800; min-width: 20px; text-align: center; }

/* Form at the Bottom */
#rpa-add-form {
    padding: 16px 20px;
    background: #ffffff;
    border-top: 1px solid #f1f5f9;
}
.dark #rpa-add-form { background: #0b1120; border-top-color: #1e293b; }

.rpa-input {
    width: 100%; border: 1px solid #e2e8f0; border-radius: 10px;
    padding: 10px 14px; font-size: 13px; outline: none;
    transition: border-color 0.2s, box-shadow 0.2s;
    background: #f8fafc; margin-bottom: 12px;
}
.dark .rpa-input { background: #1e293b; border-color: #334155; color: white; }
.rpa-input:focus { border-color: #f97316; box-shadow: 0 0 0 3px rgba(249,115,22,0.1); }

.rpa-submit-btn {
    width: 100%; height: 42px;
    background: linear-gradient(135deg, #f97316, #ea580c);
    color: white; border: none; border-radius: 10px;
    font-weight: 700; font-size: 14px; cursor: pointer;
    box-shadow: 0 4px 12px rgba(249,115,22,0.3);
    transition: all 0.2s;
}
.rpa-submit-btn:hover { transform: translateY(-1px); box-shadow: 0 6px 18px rgba(249,115,22,0.4); }

/* Compact Controls */
.rpa-filter-row { display: flex; gap: 4px; }
.rpa-filter-btn {
    font-size: 10px; font-weight: 700; padding: 4px 10px; border-radius: 20px;
    background: #f1f5f9; color: #64748b; border: none; cursor: pointer;
}
.rpa-filter-btn.active { background: #f97316; color: white; }
.dark .rpa-filter-btn { background: #1e293b; }

.rpa-nav-btn {
    width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;
    border-radius: 8px; background: #f1f5f9; color: #64748b;
}
.dark .rpa-nav-btn { background: #1e293b; }

#rpa-ann-overlay {
    position: fixed; inset: 0; background: rgba(0,0,0,0.2);
    backdrop-filter: blur(4px); z-index: 10000;
    opacity: 0; pointer-events: none; transition: opacity 0.3s;
}
#rpa-ann-overlay.open { opacity: 1; pointer-events: auto; }

#rpa-toast {
    position: fixed; bottom: 32px; left: 50%; transform: translateX(-50%) translateY(20px);
    background: rgba(15, 23, 42, 0.95); backdrop-filter: blur(8px);
    color: white; padding: 12px 24px; border-radius: 99px;
    font-size: 13px; font-weight: 700; opacity: 0; pointer-events: none;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 10002;
}
#rpa-toast.show { opacity: 1; transform: translateX(-50%) translateY(0); }

/* Document lecture (Fixe blanc / Responsive): see norms::partials.doc-lecture-theme — loaded from index when viewing a norm. */
</style>
