<svg viewBox="0 0 500 250" class="w-full max-w-lg text-slate-900 dark:text-slate-100" style="font-family: 'Times New Roman', Times, serif;">
    <!-- Ground -->
    <line x1="50" y1="200" x2="450" y2="200" stroke="currentColor" stroke-width="4"/>
    <path d="M50 200 L450 200" stroke="black" stroke-width="1" stroke-dasharray="2,2"/>
    
    <!-- Building 2 (Taller) -->
    <rect x="100" y="50" width="120" height="150" fill="none" stroke="black" stroke-width="2"/>
    <line x1="80" y1="50" x2="80" y2="200" stroke="black" stroke-width="1" marker-start="url(#arrow)" marker-end="url(#arrow)"/>
    <text x="50" y="130" font-family="Arial" font-size="18" font-weight="bold">H2</text>

    <!-- Building 1 (Shorter) -->
    <rect x="240" y="120" width="120" height="80" fill="none" stroke="black" stroke-width="2"/>
    <line x1="390" y1="120" x2="390" y2="200" stroke="black" stroke-width="1" marker-start="url(#arrow)" marker-end="url(#arrow)"/>
    <text x="400" y="165" font-family="Arial" font-size="18" font-weight="bold">H1</text>

    <!-- Gap Measurement -->
    <line x1="220" y1="100" x2="240" y2="100" stroke="black" stroke-width="1" marker-start="url(#arrow)" marker-end="url(#arrow)"/>
    <text x="245" y="90" font-family="Arial" font-size="14" font-weight="bold">dmin = &radic;(&delta;1&sup2; + &delta;2&sup2;) &ge; 40mm</text>

    <defs>
        <marker id="arrow" markerWidth="10" markerHeight="10" refX="5" refY="5" orientation="auto">
            <path d="M0,0 L10,5 L0,10 Z" fill="black" />
        </marker>
    </defs>
</svg>
