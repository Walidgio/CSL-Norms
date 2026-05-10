<div class="rpa-svg-container py-4">
    <svg viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-full max-w-[400px]">
        <!-- Main building boundary -->
        <rect x="50" y="50" width="300" height="300" fill="none" stroke="black" stroke-width="2"/>
        
        <!-- Columns on boundary -->
        <rect x="45" y="45" width="10" height="10" fill="black"/>
        <rect x="195" y="45" width="10" height="10" fill="black"/>
        <rect x="345" y="45" width="10" height="10" fill="black"/>
        
        <rect x="45" y="145" width="10" height="10" fill="black"/>
        <rect x="345" y="145" width="10" height="10" fill="black"/>
        
        <rect x="45" y="245" width="10" height="10" fill="black"/>
        <rect x="345" y="245" width="10" height="10" fill="black"/>
        
        <rect x="45" y="345" width="10" height="10" fill="black"/>
        <rect x="195" y="345" width="10" height="10" fill="black"/>
        <rect x="345" y="345" width="10" height="10" fill="black"/>

        <!-- Inner structure -->
        <rect x="100" y="100" width="200" height="200" fill="none" stroke="black" stroke-width="1"/>
        
        <!-- Walls -->
        <!-- Vertical walls -->
        <rect x="100" y="180" width="10" height="60" fill="black"/> <!-- Ix1 -->
        <text x="115" y="310" font-size="10" font-style="italic">Ix1</text>
        
        <rect x="160" y="180" width="10" height="40" fill="black"/> <!-- Ix2 -->
        <text x="175" y="300" font-size="10" font-style="italic">Ix2</text>
        
        <rect x="290" y="175" width="10" height="65" fill="black"/> <!-- Ix3 -->
        <text x="305" y="305" font-size="10" font-style="italic">Ix3</text>
        
        <!-- Horizontal walls -->
        <rect x="180" y="100" width="40" height="10" fill="black"/> <!-- Iy1 -->
        <text x="230" y="95" font-size="10" font-style="italic">Iy1</text>
        
        <rect x="180" y="290" width="40" height="10" fill="black"/> <!-- Iy2 -->
        <text x="230" y="330" font-size="10" font-style="italic">Iy2</text>

        <!-- Axes and dimensions -->
        <line x1="50" y1="200" x2="350" y2="200" stroke="black" stroke-dasharray="4 2"/>
        <line x1="200" y1="50" x2="200" y2="350" stroke="black" stroke-dasharray="4 2"/>

        <!-- Points G and T -->
        <circle cx="215" cy="235" r="4" fill="red" stroke="black"/> <!-- G -->
        <text x="225" y="240" font-size="12" font-weight="bold">G</text>
        
        <circle cx="205" cy="245" r="3" fill="black"/> <!-- T -->
        <text x="210" y="255" font-size="12" font-weight="bold">T</text>

        <!-- e_0x and e_0y -->
        <line x1="200" y1="110" x2="215" y2="110" stroke="black"/>
        <path d="M 200 110 l 3 -2 v 4 z" fill="black"/>
        <path d="M 215 110 l -3 -2 v 4 z" fill="black"/>
        <text x="205" y="105" font-size="10">e<sub>0x</sub></text>

        <line x1="310" y1="235" x2="310" y2="245" stroke="black"/>
        <path d="M 310 235 l -2 3 h 4 z" fill="black"/>
        <path d="M 310 245 l -2 -3 h 4 z" fill="black"/>
        <text x="315" y="243" font-size="10">e<sub>0y</sub></text>

        <!-- Labels Lx, Ly -->
        <line x1="50" y1="380" x2="350" y2="380" stroke="black"/>
        <path d="M 50 380 l 3 -2 v 4 z" fill="black"/>
        <path d="M 350 380 l -3 -2 v 4 z" fill="black"/>
        <text x="200" y="395" font-size="12" text-anchor="middle">Lx</text>

        <line x1="30" y1="50" x2="30" y2="350" stroke="black"/>
        <path d="M 30 50 l -2 3 h 4 z" fill="black"/>
        <path d="M 30 350 l -2 -3 h 4 z" fill="black"/>
        <text x="20" y="200" font-size="12" transform="rotate(-90 20 200)" text-anchor="middle">Ly</text>

        <!-- x and y labels -->
        <line x1="105" y1="230" x2="200" y2="230" stroke="black"/>
        <path d="M 105 230 l 3 -2 v 4 z" fill="black"/>
        <path d="M 200 230 l -3 -2 v 4 z" fill="black"/>
        <text x="150" y="225" font-size="10">x1</text>

        <line x1="165" y1="220" x2="200" y2="220" stroke="black"/>
        <path d="M 165 220 l 3 -2 v 4 z" fill="black"/>
        <path d="M 200 220 l -3 -2 v 4 z" fill="black"/>
        <text x="180" y="215" font-size="10">x2</text>

        <line x1="295" y1="170" x2="200" y2="170" stroke="black"/>
        <path d="M 295 170 l -3 -2 v 4 z" fill="black"/>
        <path d="M 200 170 l 3 -2 v 4 z" fill="black"/>
        <text x="245" y="165" font-size="10">x3</text>

        <line x1="190" y1="105" x2="190" y2="235" stroke="black"/>
        <path d="M 190 105 l -2 3 h 4 z" fill="black"/>
        <path d="M 190 235 l -2 -3 h 4 z" fill="black"/>
        <text x="180" y="170" font-size="10" transform="rotate(-90 180 170)" text-anchor="middle">y1</text>

        <line x1="210" y1="295" x2="210" y2="235" stroke="black"/>
        <path d="M 210 295 l -2 -3 h 4 z" fill="black"/>
        <path d="M 210 235 l -2 3 h 4 z" fill="black"/>
        <text x="220" y="265" font-size="10" transform="rotate(-90 220 265)" text-anchor="middle">y2</text>
    </svg>
</div>
