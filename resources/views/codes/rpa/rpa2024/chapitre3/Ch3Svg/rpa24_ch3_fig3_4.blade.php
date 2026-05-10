<div class="rpa-svg-container" style="max-width: 500px; margin: 0 auto;">
    <svg viewBox="0 0 500 300" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
        <!-- Axes -->
        <line x1="50" y1="260" x2="480" y2="260" stroke="black" stroke-width="1.5" />
        <line x1="50" y1="260" x2="50" y2="20" stroke="black" stroke-width="1.5" />

        <!-- Path -->
        <!-- 0 to T2: quadratic (represented as curve) -->
        <!-- T2 to T3: linear -->
        <!-- T3 to T4: plateau -->
        <!-- T4 to T5: linear down -->
        <!-- T5 to end: plateau -->
        <path d="M 50 260 
                 Q 80 200 100 150 
                 L 140 80 
                 L 250 80 
                 L 350 180 
                 L 450 180" 
              fill="none" stroke="black" stroke-width="2" />

        <!-- Vertical markers -->
        <line x1="80" y1="260" x2="80" y2="200" stroke="black" stroke-dasharray="2" /> <text x="75" y="275" font-size="10">T₁</text>
        <line x1="100" y1="260" x2="100" y2="150" stroke="black" stroke-dasharray="2" /> <text x="95" y="275" font-size="10">T₂</text>
        <line x1="140" y1="260" x2="140" y2="80" stroke="black" stroke-dasharray="2" /> <text x="135" y="275" font-size="10">T₃</text>
        <line x1="250" y1="260" x2="250" y2="80" stroke="black" stroke-dasharray="2" /> <text x="245" y="275" font-size="10">T₄</text>
        <line x1="350" y1="260" x2="350" y2="180" stroke="black" stroke-dasharray="2" /> <text x="345" y="275" font-size="10">T₅</text>

        <!-- Y labels -->
        <text x="10" y="85" font-size="10">2.5 η dg</text>
        <text x="30" y="185" font-size="10">dg</text>

        <text x="250" y="295" font-size="12" text-anchor="middle">Period (sec)</text>
        <text x="20" y="150" font-size="12" transform="rotate(-90 20,150)" text-anchor="middle">SDe(A)</text>
    </svg>
</div>
