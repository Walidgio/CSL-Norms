<svg viewBox="0 0 400 300" class="rpa-svg font-sans" style="font-family: 'Times New Roman', serif;">
    <defs>
        <marker id="arrow-117" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="5" markerHeight="5" orient="auto">
            <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
        </marker>
        <marker id="arrow-rev-117" viewBox="0 0 10 10" refX="2" refY="5" markerWidth="5" markerHeight="5" orient="auto">
            <path d="M10,0 L0,5 L10,10 z" fill="currentColor"/>
        </marker>
    </defs>

    <!-- Isometric Drawing of Wall and Slabs -->
    <g transform="translate(100, 40) scale(0.9)">
        <!-- Back slab top face -->
        <polygon points="120,40 180,10 200,20 140,50" fill="currentColor" opacity="0.1" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
        <!-- Front slab top face -->
        <polygon points="20,90 80,60 100,70 40,100" fill="currentColor" opacity="0.1" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
        
        <!-- Bottom slab back top face -->
        <polygon points="120,160 180,130 200,140 140,170" fill="currentColor" opacity="0.1" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
        <!-- Bottom slab front top face -->
        <polygon points="20,210 80,180 100,190 40,220" fill="currentColor" opacity="0.1" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>

        <!-- Top Vertical Wall -->
        <polygon points="100,70 120,40 140,50 120,80" fill="currentColor" opacity="0.2" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
        <polygon points="100,20 120,-10 140,0 120,30" fill="currentColor" opacity="0.1" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
        <!-- Vertical lines of top wall -->
        <line x1="100" y1="70" x2="100" y2="20" stroke="currentColor" stroke-width="1.5" />
        <line x1="120" y1="40" x2="120" y2="-10" stroke="currentColor" stroke-width="1.5" />
        <line x1="140" y1="50" x2="140" y2="0" stroke="currentColor" stroke-width="1.5" />

        <!-- Bottom Vertical Wall (below bottom slab) -->
        <polygon points="100,190 120,160 140,170 120,200" fill="currentColor" opacity="0.2" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
        <!-- Vertical lines going down -->
        <line x1="100" y1="190" x2="100" y2="240" stroke="currentColor" stroke-width="1.5" />
        <line x1="120" y1="160" x2="120" y2="210" stroke="currentColor" stroke-width="1.5" />
        <line x1="140" y1="170" x2="140" y2="220" stroke="currentColor" stroke-width="1.5" />
        <polygon points="100,240 120,210 140,220 120,250" fill="currentColor" opacity="0.1" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>

        <!-- Middle Vertical Wall (Between slabs) -->
        <polygon points="100,190 120,160 140,170 120,200" fill="currentColor" opacity="0.3" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
        <polygon points="100,70 120,40 140,50 120,80" fill="currentColor" opacity="0.3" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
        
        <polygon points="100,70 120,80 120,200 100,190" fill="currentColor" opacity="0.1" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
        <polygon points="120,80 140,50 140,170 120,200" fill="currentColor" opacity="0.2" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>

        <!-- Annotations -->
        <line x1="10" y1="120" x2="-10" y2="120" stroke="currentColor" stroke-width="1"/>
        <line x1="10" y1="190" x2="-10" y2="190" stroke="currentColor" stroke-width="1"/>
        <line x1="0" y1="120" x2="0" y2="190" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-117)" marker-end="url(#arrow-117)"/>
        <text x="-10" y="160" font-size="14" font-style="italic" text-anchor="end">h<tspan baseline-shift="sub" font-size="10">e</tspan></text>

        <line x1="100" y1="130" x2="120" y2="140" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-117)" marker-end="url(#arrow-117)"/>
        <text x="90" y="145" font-size="14" font-style="italic">b<tspan baseline-shift="sub" font-size="10">w</tspan></text>

        <line x1="120" y1="140" x2="140" y2="110" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-117)" marker-end="url(#arrow-117)"/>
        <text x="145" y="130" font-size="14" font-style="italic">l<tspan baseline-shift="sub" font-size="10">w</tspan></text>
    </g>
</svg>
