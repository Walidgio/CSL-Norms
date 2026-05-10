<div class="rpa-svg-wrapper" style="max-width: 500px; margin: 0 auto;">
    <svg viewBox="0 0 400 450" preserveAspectRatio="xMidYMid meet" class="rpa-svg">
        <defs>
            <marker id="arrow-start" viewBox="0 0 10 10" refX="0" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M10,0 L0,5 L10,10 z" fill="currentColor"/>
            </marker>
            <marker id="arrow-end" viewBox="0 0 10 10" refX="10" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
            </marker>
        </defs>
        <!-- Wall representation with stories -->
        <rect x="150" y="50" width="100" height="300" fill="none" stroke="currentColor" stroke-width="1.5" />
        @for($y = 50; $y <= 350; $y += 50)
            <line x1="150" y1="{{$y}}" x2="250" y2="{{$y}}" stroke="currentColor" stroke-width="1" />
        @endfor
        
        <!-- Floor slabs extensions -->
        @for($y = 50; $y <= 350; $y += 50)
            <line x1="130" y1="{{$y}}" x2="150" y2="{{$y}}" stroke="currentColor" stroke-width="1" />
            <line x1="250" y1="{{$y}}" x2="270" y2="{{$y}}" stroke="currentColor" stroke-width="1" />
        @endfor

        <!-- Ground -->
        <line x1="100" y1="350" x2="300" y2="350" stroke="currentColor" stroke-width="2" />

        <!-- h_cr dimension -->
        <line x1="120" y1="350" x2="120" y2="300" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="90" y="330" font-size="12" fill="currentColor">h<sub>cr</sub></text>

        <!-- h_e dimension -->
        <line x1="280" y1="350" x2="280" y2="300" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="290" y="330" font-size="12" fill="currentColor">h<sub>e</sub></text>

        <!-- h_w dimension -->
        <line x1="320" y1="350" x2="320" y2="50" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="330" y="200" font-size="12" fill="currentColor">h<sub>w</sub></text>

        <!-- l_w dimension -->
        <line x1="150" y1="370" x2="250" y2="370" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="190" y="390" font-size="12" fill="currentColor">l<sub>w</sub></text>
    </svg>
</div>
