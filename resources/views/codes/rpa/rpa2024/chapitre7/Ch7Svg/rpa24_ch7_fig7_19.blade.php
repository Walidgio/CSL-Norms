<div class="rpa-svg-wrapper" style="max-width: 600px; margin: 0 auto;">
    <svg viewBox="0 0 500 250" preserveAspectRatio="xMidYMid meet" class="rpa-svg">
        <defs>
            <marker id="arrow-start" viewBox="0 0 10 10" refX="0" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M10,0 L0,5 L10,10 z" fill="currentColor"/>
            </marker>
            <marker id="arrow-end" viewBox="0 0 10 10" refX="10" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
            </marker>
        </defs>
        <!-- Top Bars Lap -->
        <g transform="translate(50, 40)">
            <line x1="0" y1="20" x2="300" y2="20" stroke="currentColor" stroke-width="2" />
            <line x1="150" y1="0" x2="400" y2="0" stroke="currentColor" stroke-width="2" />
            
            <line x1="150" y1="35" x2="300" y2="35" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="170" y="50" font-size="12" fill="currentColor">&ge; 0.3l<sub>0</sub></text>
            
            <text x="0" y="15" font-size="12" fill="currentColor">F<sub>s</sub></text>
            <text x="410" y="5" font-size="12" fill="currentColor">F<sub>s</sub></text>
            
            <line x1="320" y1="0" x2="320" y2="20" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="330" y="10" font-size="11" fill="currentColor">&le; 50mm</text>
            <text x="330" y="25" font-size="11" fill="currentColor">&le; 4&phi;</text>
        </g>

        <!-- Bottom Bars Lap -->
        <g transform="translate(50, 140)">
            <line x1="0" y1="20" x2="250" y2="20" stroke="currentColor" stroke-width="2" />
            <line x1="150" y1="40" x2="400" y2="40" stroke="currentColor" stroke-width="2" />
            <line x1="80" y1="55" x2="350" y2="55" stroke="currentColor" stroke-width="1" stroke-dasharray="2,2" />

            <text x="0" y="15" font-size="12" fill="currentColor">F<sub>s</sub></text>
            <text x="0" y="45" font-size="12" fill="currentColor">F<sub>s</sub></text>
            <text x="410" y="35" font-size="12" fill="currentColor">F<sub>s</sub></text>
            <text x="410" y="55" font-size="12" fill="currentColor">F<sub>s</sub></text>

            <line x1="180" y1="20" x2="180" y2="40" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="170" y="35" font-size="12" fill="currentColor" transform="rotate(-90, 170, 35)">a</text>
            
            <text x="300" y="35" font-size="11" fill="currentColor">&ge; 2&phi;</text>
            <text x="300" y="50" font-size="11" fill="currentColor">&ge; 20mm</text>
        </g>
    </svg>
</div>
