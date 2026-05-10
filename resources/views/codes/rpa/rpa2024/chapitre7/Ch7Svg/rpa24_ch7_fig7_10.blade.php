<svg viewBox="0 0 500 350" class="rpa-svg font-sans" style="font-family: 'Times New Roman', serif;">
    <defs>
        <marker id="arrow-120" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="5" markerHeight="5" orient="auto">
            <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
        </marker>
    </defs>

    <!-- Beam diagram -->
    <g transform="translate(100, 50)">
        <line x1="0" y1="0" x2="300" y2="0" stroke="currentColor" stroke-width="2" />
        <!-- Supports -->
        <line x1="0" y1="-20" x2="0" y2="20" stroke="currentColor" stroke-width="2" />
        <path d="M-5,-20 L0,-20 M-5,-10 L0,-10 M-5,0 L0,0 M-5,10 L0,10 M-5,20 L0,20" stroke="currentColor" stroke-width="1" />
        
        <line x1="300" y1="-20" x2="300" y2="20" stroke="currentColor" stroke-width="2" />
        <path d="M305,-20 L300,-20 M305,-10 L300,-10 M305,0 L300,0 M305,10 L300,10 M305,20 L300,20" stroke="currentColor" stroke-width="1" />

        <!-- Moment arrows -->
        <path d="M -30,-10 A 30 30 0 0 1 0,-40" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-120)" />
        <path d="M 330,10 A 30 30 0 0 1 300,40" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-120)" />

        <!-- Length label -->
        <line x1="0" y1="30" x2="300" y2="30" stroke="currentColor" stroke-width="1" />
        <line x1="0" y1="25" x2="0" y2="35" stroke="currentColor" stroke-width="1" />
        <line x1="300" y1="25" x2="300" y2="35" stroke="currentColor" stroke-width="1" />
        <text x="150" y="25" font-size="14" font-style="italic" text-anchor="middle">l<sub>ij</sub></text>
        
        <text x="10" y="-5" font-size="12">i</text>
        <text x="290" y="-5" font-size="12">j</text>
    </g>

    <!-- Moment Diagram -->
    <g transform="translate(100, 160)">
        <polygon points="0,0 300,0 300,40 0,-40" fill="currentColor" opacity="0.1" stroke="currentColor" stroke-width="1" />
        <line x1="0" y1="0" x2="300" y2="0" stroke="currentColor" stroke-width="1" />
        <text x="-10" y="-20" font-size="12" font-weight="bold" text-anchor="end">M<sub>ci</sub></text>
        <text x="310" y="30" font-size="12" font-weight="bold" text-anchor="start">M<sub>cj</sub></text>
    </g>

    <!-- Shear Diagram -->
    <g transform="translate(100, 260)">
        <rect x="0" y="0" width="300" height="30" fill="currentColor" opacity="0.1" stroke="currentColor" stroke-width="1" />
        <text x="310" y="20" font-size="14" font-weight="bold">V<tspan baseline-shift="sub" font-size="10">i</tspan> = <tspan font-weight="normal">|</tspan><tspan font-style="italic">M<tspan baseline-shift="sub" font-size="9">ci</tspan> + M<tspan baseline-shift="sub" font-size="9">cj</tspan></tspan><tspan font-weight="normal">|</tspan> / <tspan font-style="italic">l<tspan baseline-shift="sub" font-size="9">ij</tspan></tspan></text>
    </g>
</svg>
