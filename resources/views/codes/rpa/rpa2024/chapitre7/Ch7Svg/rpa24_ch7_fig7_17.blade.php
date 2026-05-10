<div class="rpa-svg-wrapper" style="max-width: 600px; margin: 0 auto;">
    <svg viewBox="0 0 500 300" preserveAspectRatio="xMidYMid meet" class="rpa-svg">
        <defs>
            <marker id="arrow-start" viewBox="0 0 10 10" refX="0" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M10,0 L0,5 L10,10 z" fill="currentColor"/>
            </marker>
            <marker id="arrow-end" viewBox="0 0 10 10" refX="10" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
            </marker>
        </defs>
        <!-- Case 1: b_c > h_e/10 -->
        <g transform="translate(100, 50)">
            <rect x="0" y="20" width="100" height="15" fill="none" stroke="currentColor" stroke-width="1" />
            <rect x="100" y="0" width="50" height="55" fill="none" stroke="currentColor" stroke-width="1.5" />
            <text x="30" y="45" font-size="12" fill="currentColor">b<sub>w</sub></text>
            <text x="115" y="35" font-size="12" fill="currentColor">b<sub>c</sub></text>
            <text x="160" y="35" font-size="14" fill="currentColor">> h<sub>e</sub>/10</text>
            
            <line x1="100" y1="70" x2="150" y2="70" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="105" y="85" font-size="12" fill="currentColor">l<sub>c</sub> > 2b<sub>w</sub>, 0.2l<sub>w</sub></text>
        </g>

        <!-- Case 2: b_c > h_e/15 -->
        <g transform="translate(100, 180)">
            <rect x="0" y="20" width="100" height="15" fill="none" stroke="currentColor" stroke-width="1" />
            <rect x="100" y="0" width="40" height="55" fill="none" stroke="currentColor" stroke-width="1.5" />
            <text x="30" y="45" font-size="12" fill="currentColor">b<sub>w</sub></text>
            <text x="110" y="35" font-size="12" fill="currentColor">b<sub>c</sub></text>
            <text x="160" y="35" font-size="14" fill="currentColor">> h<sub>e</sub>/15</text>
            
            <line x1="100" y1="70" x2="140" y2="70" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="105" y="85" font-size="12" fill="currentColor">l<sub>c</sub> &le; 2b<sub>w</sub>, 0.2l<sub>w</sub></text>
        </g>
    </svg>
</div>
