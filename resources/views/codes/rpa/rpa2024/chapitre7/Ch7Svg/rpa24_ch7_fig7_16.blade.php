<div class="rpa-svg-wrapper" style="max-width: 600px; margin: 0 auto;">
    <svg viewBox="0 0 600 400" preserveAspectRatio="xMidYMid meet" class="rpa-svg">
        <defs>
            <marker id="arrow-start" viewBox="0 0 10 10" refX="0" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M10,0 L0,5 L10,10 z" fill="currentColor"/>
            </marker>
            <marker id="arrow-end" viewBox="0 0 10 10" refX="10" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
            </marker>
        </defs>
        <!-- Strain Diagram -->
        <line x1="100" y1="50" x2="500" y2="150" stroke="currentColor" stroke-width="1.5" />
        <line x1="100" y1="100" x2="500" y2="100" stroke="currentColor" stroke-width="1" stroke-dasharray="3,3" />
        <line x1="100" y1="50" x2="100" y2="100" stroke="currentColor" stroke-width="1" />
        <line x1="500" y1="100" x2="500" y2="150" stroke="currentColor" stroke-width="1" />
        <line x1="400" y1="100" x2="400" y2="125" stroke="currentColor" stroke-width="1" stroke-dasharray="3,3" />
        
        <text x="320" y="90" font-size="12" fill="currentColor">&phi;<sub>u</sub></text>
        <text x="430" y="60" font-size="14" fill="currentColor">X<sub>u</sub></text>
        <line x1="400" y1="65" x2="500" y2="65" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        
        <text x="410" y="120" font-size="11" fill="currentColor">&epsilon;<sub>cu</sub></text>
        <text x="460" y="125" font-size="11" fill="currentColor">&epsilon;<sub>cu,c</sub></text>

        <!-- Length l_c -->
        <line x1="400" y1="180" x2="500" y2="180" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="440" y="170" font-size="14" fill="currentColor">l<sub>c</sub></text>

        <!-- Wall Section -->
        <rect x="100" y="250" width="400" height="40" fill="none" stroke="currentColor" stroke-width="1.5" />
        <rect x="105" y="255" width="60" height="30" fill="none" stroke="currentColor" stroke-width="1" />
        <rect x="435" y="255" width="60" height="30" fill="none" stroke="currentColor" stroke-width="1" />
        
        <!-- Bars in section -->
        @for($x = 110; $x <= 160; $x += 40)
            <circle cx="{{$x}}" cy="260" r="2" fill="currentColor" />
            <circle cx="{{$x}}" cy="280" r="2" fill="currentColor" />
        @endfor
        @for($x = 440; $x <= 490; $x += 40)
            <circle cx="{{$x}}" cy="260" r="2" fill="currentColor" />
            <circle cx="{{$x}}" cy="280" r="2" fill="currentColor" />
        @endfor
        @for($x = 180; $x <= 420; $x += 60)
            <circle cx="{{$x}}" cy="260" r="1.5" fill="currentColor" />
            <circle cx="{{$x}}" cy="280" r="1.5" fill="currentColor" />
        @endfor

        <!-- Dimensions -->
        <line x1="100" y1="310" x2="500" y2="310" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="290" y="330" font-size="14" fill="currentColor">l<sub>w</sub></text>
        
        <line x1="510" y1="250" x2="510" y2="290" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="520" y="260" font-size="12" fill="currentColor">b<sub>w</sub></text>
        <text x="520" y="285" font-size="12" fill="currentColor">b<sub>c</sub>=b<sub>w</sub></text>
    </svg>
</div>
