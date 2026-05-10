<svg viewBox="0 0 800 350" class="rpa-svg" style="font-family: 'Times New Roman', Times, serif;">
    <defs>
        <pattern id="brickPattern" width="40" height="20" patternUnits="userSpaceOnUse">
            <rect width="40" height="20" fill="none" />
            <line x1="0" y1="10" x2="40" y2="10" stroke="currentColor" stroke-width="1" />
            <line x1="0" y1="20" x2="40" y2="20" stroke="currentColor" stroke-width="1" />
            <line x1="20" y1="0" x2="20" y2="10" stroke="currentColor" stroke-width="1" />
            <line x1="0" y1="10" x2="0" y2="20" stroke="currentColor" stroke-width="1" />
        </pattern>
    </defs>
    <g stroke="currentColor" stroke-width="1.5" fill="none">
        <!-- Top Beams -->
        <line x1="100" y1="50" x2="250" y2="50" />
        <line x1="250" y1="50" x2="250" y2="80" />
        <line x1="250" y1="80" x2="100" y2="80" />

        <line x1="330" y1="50" x2="560" y2="50" />
        <line x1="330" y1="80" x2="560" y2="80" />
        
        <line x1="640" y1="50" x2="780" y2="50" />
        <line x1="640" y1="50" x2="640" y2="80" />
        <line x1="640" y1="80" x2="780" y2="80" />

        <!-- Left Column & Masonry -->
        <!-- Column -->
        <line x1="250" y1="80" x2="250" y2="260" />
        <line x1="290" y1="80" x2="290" y2="260" />
        <text x="270" y="145" fill="currentColor" stroke="none" font-size="18" font-weight="bold" text-anchor="middle">a</text>
        <!-- Masonry -->
        <rect x="150" y="150" width="100" height="110" fill="url(#brickPattern)" stroke="currentColor" stroke-width="1.5" />

        <!-- Middle Column & Masonry -->
        <!-- Column -->
        <line x1="425" y1="80" x2="425" y2="260" />
        <line x1="465" y1="80" x2="465" y2="260" />
        <!-- Masonry Left -->
        <rect x="330" y="190" width="95" height="70" fill="url(#brickPattern)" stroke="currentColor" stroke-width="1.5" />
        <!-- Masonry Right -->
        <rect x="465" y="190" width="95" height="70" fill="url(#brickPattern)" stroke="currentColor" stroke-width="1.5" />
        <!-- Dimension h -->
        <line x1="445" y1="80" x2="445" y2="190" />
        <polygon points="442,90 448,90 445,80" fill="currentColor" />
        <polygon points="442,180 448,180 445,190" fill="currentColor" />
        <text x="455" y="145" fill="currentColor" stroke="none" font-size="18" font-weight="bold">h</text>
        
        <!-- Small dimension arrow horizontal in middle column -->
        <line x1="390" y1="140" x2="425" y2="140" stroke-width="1" />
        <polygon points="415,137 415,143 425,140" fill="currentColor" />

        <!-- Right Column & Masonry -->
        <!-- Column -->
        <line x1="600" y1="80" x2="600" y2="260" />
        <line x1="640" y1="80" x2="640" y2="260" />
        <!-- Masonry -->
        <rect x="640" y="150" width="100" height="110" fill="url(#brickPattern)" stroke="currentColor" stroke-width="1.5" />
        
        <!-- Text lambda -->
        <text x="750" y="190" fill="currentColor" stroke="none" font-size="18" font-weight="bold">&lambda;<tspan baseline-shift="sub" font-size="12">g</tspan> = h'/a</text>

        <!-- Bottom Beams/Floor -->
        <line x1="100" y1="260" x2="250" y2="260" />
        <line x1="250" y1="260" x2="250" y2="290" />
        <line x1="250" y1="290" x2="100" y2="290" />

        <line x1="330" y1="260" x2="560" y2="260" />
        <line x1="330" y1="290" x2="560" y2="290" />
        <!-- 'a' dimension text for middle bottom -->
        <line x1="425" y1="260" x2="425" y2="290" stroke-dasharray="2,2" stroke-width="1" />
        <line x1="465" y1="260" x2="465" y2="290" stroke-dasharray="2,2" stroke-width="1" />
        <text x="445" y="280" fill="currentColor" stroke="none" font-size="18" font-weight="bold" text-anchor="middle">a</text>
        
        <line x1="640" y1="260" x2="780" y2="260" />
        <line x1="640" y1="260" x2="640" y2="290" />
        <line x1="640" y1="290" x2="780" y2="290" />
        
    </g>
</svg>
