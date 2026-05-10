<div class="rpa-svg-wrapper" style="max-width: 700px; margin: 0 auto;">
    <svg viewBox="0 0 800 400" preserveAspectRatio="xMidYMid meet" class="rpa-svg">
        <!-- Lintel structure -->
        <rect x="150" y="100" width="400" height="200" fill="none" stroke="currentColor" stroke-width="1.5" />
        <path d="M100 100 H150 M100 300 H150 M550 100 H600 M550 300 H600" stroke="currentColor" stroke-width="1.5" />
        
        <!-- Main Horizontal Reinforcement -->
        <line x1="100" y1="120" x2="600" y2="120" stroke="currentColor" stroke-width="2" />
        <line x1="100" y1="280" x2="600" y2="280" stroke="currentColor" stroke-width="2" />
        
        <!-- Diagonal Reinforcement -->
        <line x1="150" y1="120" x2="550" y2="280" stroke="currentColor" stroke-width="2.5" />
        <line x1="150" y1="280" x2="550" y2="120" stroke="currentColor" stroke-width="2.5" />
        
        <!-- Transverse ties (vertical) -->
        @for($x = 180; $x <= 520; $x += 40)
            <line x1="{{$x}}" y1="110" x2="{{$x}}" y2="290" stroke="currentColor" stroke-width="1" />
        @endfor

        <!-- Labels and arrows -->
        <line x1="120" y1="80" x2="160" y2="120" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" />
        <text x="100" y="70" font-size="14" fill="currentColor">F<sub>c</sub></text>
        
        <line x1="120" y1="320" x2="160" y2="280" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" />
        <text x="100" y="340" font-size="14" fill="currentColor">F<sub>t</sub></text>

        <!-- b, h dimensions -->
        <line x1="150" y1="330" x2="550" y2="330" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="340" y="350" font-size="14" fill="currentColor">l</text>
        
        <line x1="580" y1="100" x2="580" y2="300" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="590" y="205" font-size="14" fill="currentColor">h</text>

        <!-- Section View A-A -->
        <g transform="translate(650, 150)">
            <text x="0" y="-30" font-size="16" fill="currentColor" font-weight="bold">Coupe A-A( a)</text>
            <rect x="0" y="0" width="80" height="150" fill="none" stroke="currentColor" stroke-width="2" />
            <!-- Stirrups -->
            <rect x="10" y="10" width="60" height="130" fill="none" stroke="currentColor" stroke-width="1" />
            <!-- Labels in section -->
            <text x="85" y="80" font-size="12" fill="currentColor">A<sub>t</sub></text>
            <text x="85" y="135" font-size="12" fill="currentColor">A<sub>l</sub></text>
            <text x="35" y="165" font-size="14" fill="currentColor">b</text>
            <line x1="0" y1="170" x2="80" y2="170" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        </g>
    </svg>
</div>
