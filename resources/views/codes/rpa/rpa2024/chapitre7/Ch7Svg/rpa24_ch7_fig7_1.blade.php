<!-- Figure 7.1 SVG: Coffrage des poteaux -->
<svg viewBox="0 0 600 500" class="w-full max-w-[600px] text-black dark:text-white" style="font-family: 'Times New Roman', Times, serif;">
    <g stroke="currentColor" stroke-width="1.5" fill="none">
        <!-- Left Elevation -->
        <!-- Column vertical lines -->
        <line x1="180" y1="30" x2="180" y2="420" stroke-dasharray="20, 5, 5, 5" />
        <line x1="140" y1="50" x2="140" y2="400" />
        <line x1="220" y1="50" x2="220" y2="400" />
        
        <!-- Column top/bottom break lines (double dashes) -->
        <line x1="130" y1="50" x2="230" y2="50" stroke-dasharray="8,4" />
        <line x1="130" y1="45" x2="230" y2="45" stroke-dasharray="8,4" />
        
        <line x1="130" y1="400" x2="230" y2="400" stroke-dasharray="8,4" />
        <line x1="130" y1="405" x2="230" y2="405" stroke-dasharray="8,4" />
        
        <!-- Top Beam -->
        <line x1="60" y1="80" x2="140" y2="80" />
        <line x1="220" y1="80" x2="300" y2="80" />
        <line x1="60" y1="130" x2="140" y2="130" />
        <line x1="220" y1="130" x2="300" y2="130" />
        
        <!-- Beam break lines (double dashes) -->
        <line x1="60" y1="70" x2="60" y2="140" stroke-dasharray="8,4" />
        <line x1="55" y1="70" x2="55" y2="140" stroke-dasharray="8,4" />
        
        <line x1="300" y1="70" x2="300" y2="140" stroke-dasharray="8,4" />
        <line x1="305" y1="70" x2="305" y2="140" stroke-dasharray="8,4" />

        <!-- Bottom Beam -->
        <line x1="60" y1="300" x2="140" y2="300" />
        <line x1="220" y1="300" x2="300" y2="300" />
        <line x1="60" y1="350" x2="140" y2="350" />
        <line x1="220" y1="350" x2="300" y2="350" />
        
        <!-- Beam break lines (double dashes) -->
        <line x1="60" y1="290" x2="60" y2="360" stroke-dasharray="8,4" />
        <line x1="55" y1="290" x2="55" y2="360" stroke-dasharray="8,4" />
        
        <line x1="300" y1="290" x2="300" y2="360" stroke-dasharray="8,4" />
        <line x1="305" y1="290" x2="305" y2="360" stroke-dasharray="8,4" />

        <!-- Dimension l_cl -->
        <line x1="250" y1="130" x2="340" y2="130" stroke-dasharray="4,4" stroke-width="1" />
        <line x1="250" y1="300" x2="340" y2="300" stroke-dasharray="4,4" stroke-width="1" />
        <line x1="330" y1="130" x2="330" y2="300" />
        <polygon points="327,140 333,140 330,130" fill="currentColor" />
        <polygon points="327,290 333,290 330,300" fill="currentColor" />
        <text x="340" y="220" fill="currentColor" stroke="none" font-size="20" font-style="italic">&#8467;<tspan baseline-shift="sub" font-size="14">cl</tspan></text>

        <!-- Section I-I Line -->
        <line x1="100" y1="210" x2="260" y2="210" stroke-width="2" stroke-dasharray="20, 5, 5, 5" />
        <line x1="100" y1="200" x2="100" y2="220" stroke-width="2" />
        <line x1="260" y1="200" x2="260" y2="220" stroke-width="2" />
        <text x="110" y="200" fill="currentColor" stroke="none" font-size="16" font-weight="bold">I</text>
        <text x="240" y="200" fill="currentColor" stroke="none" font-size="16" font-weight="bold">I</text>

        <!-- Section II-II Line -->
        <line x1="260" y1="270" x2="260" y2="380" stroke-width="2" stroke-dasharray="20, 5, 5, 5" />
        <line x1="250" y1="270" x2="270" y2="270" stroke-width="2" />
        <line x1="250" y1="380" x2="270" y2="380" stroke-width="2" />
        <text x="240" y="280" fill="currentColor" stroke="none" font-size="16" font-weight="bold" text-anchor="middle" transform="rotate(-90 260 260)">II</text>
        <text x="285" y="410" fill="currentColor" stroke="none" font-size="16" font-weight="bold" text-anchor="middle" transform="rotate(-90 260 390)">II</text>

        <!-- Right Side: Sections -->
        <!-- Section I-I -->
        <text x="455" y="100" fill="currentColor" stroke="none" font-size="16" font-weight="bold" text-anchor="middle">Section I-I</text>
        <rect x="390" y="110" width="120" height="70" stroke-width="2" />
        
        <!-- Dimensions for Section I -->
        <!-- b_c (right side) -->
        <line x1="530" y1="110" x2="530" y2="180" stroke-width="1" />
        <polygon points="527,120 533,120 530,110" fill="currentColor" />
        <polygon points="527,170 533,170 530,180" fill="currentColor" />
        <text x="540" y="150" fill="currentColor" stroke="none" font-size="16" font-weight="bold">b<tspan baseline-shift="sub" font-size="12">c</tspan></text>
        
        <!-- h_c (bottom side) -->
        <line x1="390" y1="200" x2="510" y2="200" stroke-width="1" />
        <polygon points="400,197 400,203 390,200" fill="currentColor" />
        <polygon points="500,197 500,203 510,200" fill="currentColor" />
        <text x="440" y="220" fill="currentColor" stroke="none" font-size="16" font-weight="bold">h<tspan baseline-shift="sub" font-size="12">c</tspan></text>

        <!-- Section II-II -->
        <text x="455" y="320" fill="currentColor" stroke="none" font-size="16" font-weight="bold" text-anchor="middle">Section II-II</text>
        <rect x="415" y="330" width="80" height="100" stroke-width="2" />
        
        <!-- Dimensions for Section II -->
        <!-- h (right side) -->
        <line x1="510" y1="330" x2="510" y2="430" stroke-width="1" />
        <polygon points="507,340 513,340 510,330" fill="currentColor" />
        <polygon points="507,420 513,420 510,430" fill="currentColor" />
        <text x="520" y="385" fill="currentColor" stroke="none" font-size="16" font-weight="bold">h</text>
        
        <!-- b (bottom side) -->
        <line x1="415" y1="450" x2="495" y2="450" stroke-width="1" />
        <polygon points="425,447 425,453 415,450" fill="currentColor" />
        <polygon points="485,447 485,453 495,450" fill="currentColor" />
        <text x="450" y="470" fill="currentColor" stroke="none" font-size="16" font-weight="bold">b</text>
    </g>
</svg>
