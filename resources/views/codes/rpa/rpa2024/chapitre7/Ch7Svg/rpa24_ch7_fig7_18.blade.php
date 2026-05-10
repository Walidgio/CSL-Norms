<div class="rpa-svg-wrapper" style="max-width: 700px; margin: 0 auto;">
    <svg viewBox="0 0 700 450" preserveAspectRatio="xMidYMid meet" class="rpa-svg">
        <defs>
            <marker id="arrow-start" viewBox="0 0 10 10" refX="0" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M10,0 L0,5 L10,10 z" fill="currentColor"/>
            </marker>
            <marker id="arrow-end" viewBox="0 0 10 10" refX="10" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
            </marker>
        </defs>
        <!-- Top T-Shape Wall -->
        <g transform="translate(250, 20)">
            <rect x="0" y="80" width="120" height="15" fill="none" stroke="currentColor" stroke-width="1" />
            <rect x="120" y="0" width="20" height="180" fill="none" stroke="currentColor" stroke-width="1.5" />
            <line x1="-20" y1="87.5" x2="0" y2="87.5" stroke="currentColor" stroke-width="1" stroke-dasharray="3,3" />
            
            <line x1="0" y1="70" x2="20" y2="70" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="-30" y="75" font-size="12" fill="currentColor">b<sub>w</sub></text>
            
            <line x1="150" y1="0" x2="150" y2="180" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="160" y="90" font-size="14" fill="currentColor">l<sub>f</sub></text>
            <text x="190" y="80" font-size="12" fill="currentColor">l<sub>f</sub> > h<sub>e</sub>/5</text>
            <text x="190" y="100" font-size="12" fill="currentColor">b<sub>f</sub> &ge; h<sub>e</sub>/15</text>

            <line x1="120" y1="-10" x2="140" y2="-10" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="125" y="-20" font-size="12" fill="currentColor">b<sub>f</sub></text>
        </g>

        <!-- Bottom cases (L-shapes/T-shapes with extensions) -->
        <g transform="translate(100, 250)">
            <!-- Case left -->
            <rect x="0" y="50" width="100" height="15" fill="none" stroke="currentColor" stroke-width="1" />
            <rect x="100" y="0" width="20" height="120" fill="none" stroke="currentColor" stroke-width="1.5" />
            <line x1="0" y1="75" x2="140" y2="75" stroke="currentColor" stroke-width="1" stroke-dasharray="2,2" />
            
            <line x1="50" y1="40" x2="70" y2="40" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="30" y="45" font-size="12" fill="currentColor">b<sub>w</sub></text>
            
            <line x1="100" y1="130" x2="120" y2="130" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="105" y="145" font-size="12" fill="currentColor">&lt; 3b<sub>c</sub></text>

            <!-- Strain diagram below -->
            <g transform="translate(0, 160)">
                <line x1="0" y1="0" x2="120" y2="40" stroke="currentColor" stroke-width="1" />
                <line x1="0" y1="20" x2="120" y2="20" stroke="currentColor" stroke-width="0.5" stroke-dasharray="2,2" />
                <text x="60" y="35" font-size="10" fill="currentColor">&epsilon;<sub>cu</sub></text>
            </g>
        </g>

        <g transform="translate(450, 250)">
            <!-- Case right (L-shape) -->
            <rect x="0" y="50" width="100" height="15" fill="none" stroke="currentColor" stroke-width="1" />
            <line x1="100" y1="50" x2="100" y2="120" stroke="currentColor" stroke-width="1.5" />
            <line x1="115" y1="50" x2="115" y2="120" stroke="currentColor" stroke-width="1.5" />
            <line x1="100" y1="120" x2="115" y2="120" stroke="currentColor" stroke-width="1.5" />
            
            <line x1="125" y1="40" x2="145" y2="40" stroke="currentColor" stroke-width="1" />
            <text x="120" y="30" font-size="12" fill="currentColor">b<sub>c</sub>= b<sub>w</sub></text>

            <line x1="50" y1="40" x2="70" y2="40" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="30" y="45" font-size="12" fill="currentColor">b<sub>w</sub></text>
            
            <line x1="100" y1="130" x2="115" y2="130" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
            <text x="100" y="145" font-size="12" fill="currentColor">&lt; 3b<sub>c</sub></text>

            <!-- Strain diagram below -->
            <g transform="translate(0, 160)">
                <line x1="0" y1="0" x2="120" y2="40" stroke="currentColor" stroke-width="1" />
                <line x1="0" y1="20" x2="120" y2="20" stroke="currentColor" stroke-width="0.5" stroke-dasharray="2,2" />
                <text x="60" y="35" font-size="10" fill="currentColor">&epsilon;<sub>cu</sub></text>
            </g>
        </g>
    </svg>
</div>
