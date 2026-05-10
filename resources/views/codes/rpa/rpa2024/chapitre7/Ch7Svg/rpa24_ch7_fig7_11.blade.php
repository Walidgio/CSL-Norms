<div class="rpa-svg-wrapper" style="max-width: 600px; margin: 0 auto;">
    <svg viewBox="0 0 600 350" preserveAspectRatio="xMidYMid meet" class="rpa-svg">
        <defs>
            <marker id="arrow-end" markerWidth="10" markerHeight="10" refX="9" refY="3" orient="auto" markerUnits="strokeWidth">
                <path d="M0,0 L0,6 L9,3 z" fill="currentColor" />
            </marker>
            <marker id="arrow-start" markerWidth="10" markerHeight="10" refX="0" refY="3" orient="auto" markerUnits="strokeWidth">
                <path d="M9,0 L9,6 L0,3 z" fill="currentColor" />
            </marker>
        </defs>
        <!-- Main Lintel rectangle -->
        <rect x="150" y="80" width="300" height="180" fill="none" stroke="currentColor" stroke-width="2" />
        <path d="M150 170 H450" stroke="currentColor" stroke-width="1" stroke-dasharray="5,5" />
        
        <!-- Diagonals -->
        <line x1="150" y1="80" x2="450" y2="260" stroke="currentColor" stroke-width="2" />
        <line x1="150" y1="260" x2="450" y2="80" stroke="currentColor" stroke-width="2" />

        <!-- Forces/Vectors -->
        <!-- Top Left -->
        <line x1="120" y1="50" x2="150" y2="80" stroke="currentColor" stroke-width="2" marker-end="url(#arrow-start)" />
        <text x="100" y="45" font-size="14" fill="currentColor" font-style="italic">F<sub>c</sub></text>
        <!-- Bottom Left -->
        <line x1="120" y1="290" x2="150" y2="260" stroke="currentColor" stroke-width="2" marker-end="url(#arrow-start)" />
        <text x="100" y="305" font-size="14" fill="currentColor" font-style="italic">F<sub>t</sub></text>
        <!-- Top Right -->
        <line x1="450" y1="80" x2="480" y2="50" stroke="currentColor" stroke-width="2" marker-end="url(#arrow-end)" />
        <text x="490" y="45" font-size="14" fill="currentColor" font-style="italic">F<sub>t</sub></text>
        <!-- Bottom Right -->
        <line x1="450" y1="260" x2="480" y2="290" stroke="currentColor" stroke-width="2" marker-end="url(#arrow-end)" />
        <text x="490" y="305" font-size="14" fill="currentColor" font-style="italic">F<sub>c</sub></text>

        <!-- Dimensions -->
        <line x1="470" y1="80" x2="470" y2="260" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="480" y="175" font-size="14" fill="currentColor" font-style="italic">h</text>
        
        <line x1="150" y1="280" x2="450" y2="280" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="295" y="300" font-size="14" fill="currentColor" font-style="italic">l</text>

        <!-- Angle alpha -->
        <path d="M210 260 A60 60 0 0 0 190 225" fill="none" stroke="currentColor" stroke-width="1" />
        <text x="215" y="245" font-size="12" fill="currentColor">&alpha;</text>

        <!-- d' representation -->
        <line x1="460" y1="80" x2="460" y2="100" stroke="currentColor" stroke-width="1" />
        <line x1="465" y1="80" x2="450" y2="80" stroke="currentColor" stroke-width="1" />
        <text x="495" y="105" font-size="12" fill="currentColor">d'</text>
    </svg>
</div>
