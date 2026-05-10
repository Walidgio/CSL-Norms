<svg viewBox="0 0 400 200" class="rpa-svg font-sans" style="font-family: 'Times New Roman', serif;">
    <defs>
        <marker id="arrow-119" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="5" markerHeight="5" orient="auto">
            <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
        </marker>
        <marker id="arrow-rev-119" viewBox="0 0 10 10" refX="2" refY="5" markerWidth="5" markerHeight="5" orient="auto">
            <path d="M10,0 L0,5 L10,10 z" fill="currentColor"/>
        </marker>
    </defs>

    <!-- T-intersecting walls -->
    <rect x="50" y="50" width="120" height="15" fill="#4a5568" opacity="0.8" /> <!-- flange -->
    <rect x="102" y="65" width="15" height="100" fill="#cbd5e0" opacity="0.8" stroke="currentColor" stroke-width="1" /> <!-- web -->
    
    <!-- L-intersecting walls -->
    <rect x="220" y="140" width="120" height="15" fill="#4a5568" opacity="0.8" /> <!-- flange -->
    <rect x="272" y="65" width="15" height="75" fill="#cbd5e0" opacity="0.8" stroke="currentColor" stroke-width="1" /> <!-- web -->

    <!-- Annotations -->
    <line x1="50" y1="40" x2="170" y2="40" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-119)" marker-end="url(#arrow-119)" />
    <text x="110" y="35" font-size="12" font-weight="bold" text-anchor="middle">d<tspan baseline-shift="sub" font-size="9">t</tspan></text>
    
    <line x1="220" y1="165" x2="340" y2="165" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-119)" marker-end="url(#arrow-119)" />
    <text x="280" y="178" font-size="12" font-weight="bold" text-anchor="middle">d<tspan baseline-shift="sub" font-size="9">t</tspan></text>

    <line x1="287" y1="100" x2="340" y2="100" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-119)" marker-end="url(#arrow-119)" />
    <text x="313" y="95" font-size="12" font-weight="bold" text-anchor="middle">d<tspan baseline-shift="sub" font-size="9">w</tspan></text>
    
    <line x1="287" y1="115" x2="313" y2="115" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-119)" marker-end="url(#arrow-119)" />
    <text x="300" y="128" font-size="11" font-weight="bold" text-anchor="middle">d<tspan baseline-shift="sub" font-size="8">w</tspan>/2</text>
</svg>
