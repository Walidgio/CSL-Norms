<svg viewBox="0 0 600 350" class="rpa-svg font-sans" style="font-family: 'Times New Roman', serif;">
    <defs>
        <marker id="arrow-118" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="4" markerHeight="4" orient="auto">
            <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
        </marker>
        <marker id="arrow-rev-118" viewBox="0 0 10 10" refX="2" refY="5" markerWidth="4" markerHeight="4" orient="auto">
            <path d="M10,0 L0,5 L10,10 z" fill="currentColor"/>
        </marker>
    </defs>

    <!-- Rectangular Section -->
    <g transform="translate(250, 20)">
        <rect x="0" y="0" width="80" height="15" fill="none" stroke="currentColor" stroke-width="1.5" />
        <line x1="0" y1="-5" x2="0" y2="20" stroke="currentColor" stroke-width="1" stroke-dasharray="2,2" />
        <line x1="80" y1="-5" x2="80" y2="20" stroke="currentColor" stroke-width="1" stroke-dasharray="2,2" />
        <text x="40" y="10" font-size="12" font-style="italic" text-anchor="middle">b<tspan baseline-shift="sub" font-size="9">w</tspan></text>
        <text x="170" y="12" font-size="12">b<tspan baseline-shift="sub" font-size="9">w</tspan> &ge; max (0.15 ; <tspan font-style="italic">h<tspan baseline-shift="sub" font-size="9">e</tspan></tspan>/20)</text>
    </g>

    <!-- T-Section and L-Section -->
    <g transform="translate(130, 80)">
        <!-- T-Section -->
        <path d="M0,0 H100 V15 H57.5 V50 H42.5 V15 H0 Z" fill="none" stroke="currentColor" stroke-width="1.5" />
        <line x1="0" y1="15" x2="-10" y2="15" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <line x1="0" y1="50" x2="-10" y2="50" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <text x="-15" y="35" font-size="12" text-anchor="end">&ge; 3b<tspan baseline-shift="sub" font-size="9">w</tspan></text>
        
        <line x1="42.5" y1="60" x2="32.5" y2="60" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <line x1="57.5" y1="60" x2="67.5" y2="60" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <text x="50" y="70" font-size="12" text-anchor="middle">&ge; 2b<tspan baseline-shift="sub" font-size="9">w</tspan></text>
    </g>

    <g transform="translate(250, 80)">
        <!-- Middle T-Section-like L-shape -->
        <path d="M0,0 H15 V40 H80 V55 H0 Z" fill="none" stroke="currentColor" stroke-width="1.5" />
        <line x1="15" y1="35" x2="25" y2="35" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <line x1="0" y1="35" x2="-10" y2="35" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <text x="7.5" y="50" font-size="12" text-anchor="middle">b<tspan baseline-shift="sub" font-size="9">w</tspan></text>
        <line x1="40" y1="40" x2="40" y2="30" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <line x1="40" y1="55" x2="40" y2="65" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <text x="40" y="25" font-size="12" text-anchor="middle">b<tspan baseline-shift="sub" font-size="9">w</tspan></text>
        
        <line x1="80" y1="48" x2="90" y2="48" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <text x="95" y="52" font-size="12">&ge; 2b<tspan baseline-shift="sub" font-size="9">w</tspan></text>
    </g>

    <g transform="translate(420, 80)">
        <!-- L-Section -->
        <path d="M0,0 H100 V15 H15 V50 H0 Z" fill="none" stroke="currentColor" stroke-width="1.5" />
        <text x="110" y="25" font-size="12">b<tspan baseline-shift="sub" font-size="9">w</tspan> &ge; max (0.15 ; <tspan font-style="italic">h<tspan baseline-shift="sub" font-size="9">e</tspan></tspan>/20)</text>
    </g>

    <!-- I-Section and U-Section -->
    <g transform="translate(180, 180)">
        <!-- I-Section -->
        <path d="M0,0 H15 V40 H-30 V55 H15 V100 H30 V55 H75 V40 H30 V0 Z" fill="none" stroke="currentColor" stroke-width="1.5" />
        <text x="50" y="50" font-size="12" text-anchor="middle">b<tspan baseline-shift="sub" font-size="9">w</tspan></text>
        <line x1="15" y1="55" x2="5" y2="55" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <line x1="30" y1="55" x2="40" y2="55" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <text x="22.5" y="68" font-size="12" text-anchor="middle">b<tspan baseline-shift="sub" font-size="9">w</tspan></text>
        
        <line x1="150" y1="65" x2="160" y2="65" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <text x="165" y="70" font-size="12">&ge; 2b<tspan baseline-shift="sub" font-size="9">w</tspan></text>
    </g>

    <g transform="translate(320, 180)">
        <!-- U-Section -->
        <path d="M0,0 H15 V80 H100 V0 H115 V95 H0 Z" fill="none" stroke="currentColor" stroke-width="1.5" />
        <text x="57" y="90" font-size="12" text-anchor="middle">b<tspan baseline-shift="sub" font-size="9">w</tspan></text>
        <line x1="115" y1="40" x2="125" y2="40" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-118)" />
        <text x="130" y="45" font-size="12">&ge; 3b<tspan baseline-shift="sub" font-size="9">w</tspan></text>
        
        <text x="170" y="80" font-size="12">b<tspan baseline-shift="sub" font-size="9">w</tspan> &ge; max (0.15 ; <tspan font-style="italic">h<tspan baseline-shift="sub" font-size="9">e</tspan></tspan>/20)</text>
    </g>
</svg>
