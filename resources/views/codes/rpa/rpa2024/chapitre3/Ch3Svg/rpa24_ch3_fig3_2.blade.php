<svg viewBox="0 0 500 350" class="w-full max-w-lg">
    <!-- Axes -->
    <line x1="50" y1="300" x2="450" y2="300" stroke="black" stroke-width="2"/>
    <line x1="50" y1="300" x2="50" y2="50" stroke="black" stroke-width="2"/>
    
    <!-- Y-axis Label -->
    <text x="20" y="180" font-family="serif" font-size="14" transform="rotate(-90, 20, 180)">Sae/g(T)</text>
    <text x="380" y="320" font-family="serif" font-size="14">T sec.</text>
    
    <!-- Y-axis Ticks -->
    <text x="15" y="105" font-family="serif" font-size="12">2.5 A S &eta;</text>
    <text x="25" y="205" font-family="serif" font-size="12">A I S</text>

    <!-- Spectrum Curve -->
    <!-- Start at (50, 200) - T=0 -->
    <!-- Linear up to T1 (100, 100) -->
    <!-- Horizontal plateau to T2 (180, 100) -->
    <!-- Hyperbolic decay to T3 (350, 250) -->
    <!-- More decay to 4s (450, 280) -->
    <path d="M50 200 L100 100 L180 100 Q250 150 350 250 L450 280" fill="none" stroke="black" stroke-width="3"/>
    
    <!-- T ticks -->
    <line x1="100" y1="300" x2="100" y2="310" stroke="black"/>
    <text x="95" y="325" font-family="serif" font-size="14">T1</text>
    
    <line x1="180" y1="300" x2="180" y2="310" stroke="black"/>
    <text x="175" y="325" font-family="serif" font-size="14">T2</text>

    <line x1="350" y1="300" x2="350" y2="310" stroke="black"/>
    <text x="345" y="325" font-family="serif" font-size="14">T3</text>

    <!-- Grid lines -->
    <line x1="100" y1="300" x2="100" y2="100" stroke="gray" stroke-width="1" stroke-dasharray="2,2"/>
    <line x1="180" y1="300" x2="180" y2="100" stroke="gray" stroke-width="1" stroke-dasharray="2,2"/>
    <line x1="350" y1="300" x2="350" y2="250" stroke="gray" stroke-width="1" stroke-dasharray="2,2"/>
</svg>
