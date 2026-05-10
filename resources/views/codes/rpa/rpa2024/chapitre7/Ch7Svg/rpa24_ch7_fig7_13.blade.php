<div class="rpa-svg-wrapper" style="max-width: 800px; margin: 0 auto;">
    <svg viewBox="0 0 800 450" preserveAspectRatio="xMidYMid meet" class="rpa-svg font-sans">
        <defs>
            <pattern id="hatch-713" patternUnits="userSpaceOnUse" width="10" height="10" patternTransform="rotate(45)">
                <line x1="0" y1="0" x2="0" y2="10" stroke="currentColor" stroke-width="1.5" opacity="0.4" />
            </pattern>
            <marker id="arrow-713" viewBox="0 0 10 10" refX="10" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
            </marker>
            <marker id="arrow-rev-713" viewBox="0 0 10 10" refX="0" refY="5" markerWidth="6" markerHeight="6" orient="auto">
                <path d="M10,0 L0,5 L10,10 z" fill="currentColor"/>
            </marker>
        </defs>

        <!-- Subfigure (a) -->
        <g transform="translate(150, 40)">
            <!-- Wall background (The shaded area) -->
            <rect x="180" y="50" width="35" height="250" fill="url(#hatch-713)" stroke="currentColor" stroke-width="1" />
            
            <!-- Axes -->
            <line x1="20" y1="300" x2="260" y2="300" stroke="currentColor" stroke-width="1.2" marker-end="url(#arrow-713)" />
            <line x1="198" y1="310" x2="198" y2="10" stroke="currentColor" stroke-width="1.2" marker-end="url(#arrow-713)" />
            
            <!-- Labels -->
            <text x="250" y="325" font-size="14" fill="currentColor" font-weight="bold" font-style="italic">M</text>
            <text x="205" y="20" font-size="14" fill="currentColor" font-weight="bold" font-style="italic">h</text>

            <!-- Curve 1: Analysis (Solid thin) -->
            <path d="M198 50 C180 150 120 250 80 300" fill="none" stroke="currentColor" stroke-width="1.2" />
            
            <!-- Curve 2: Linear Envelope (Dashed thin) -->
            <line x1="198" y1="50" x2="80" y2="300" stroke="currentColor" stroke-width="1.2" stroke-dasharray="6,3" />
            
            <!-- Curve 3: Shifted Envelope (Thick solid) -->
            <path d="M198 50 L140 250 L140 300" fill="none" stroke="currentColor" stroke-width="2.5" />

            <!-- Annotation Arrows & Text -->
            <g font-size="11" fill="currentColor">
                <line x1="100" y1="80" x2="160" y2="100" stroke="currentColor" stroke-width="0.8" marker-end="url(#arrow-713)" />
                <text x="-130" y="75">3- Enveloppe de calcul décalée de h<sub>cr</sub></text>
                
                <line x1="100" y1="120" x2="140" y2="150" stroke="currentColor" stroke-width="0.8" marker-end="url(#arrow-713)" />
                <text x="-40" y="125">2- Enveloppe linéaire</text>
                
                <line x1="100" y1="170" x2="120" y2="210" stroke="currentColor" stroke-width="0.8" marker-end="url(#arrow-713)" />
                <text x="-140" y="175">1- Diagramme de moment fléchissant issu de l'analyse</text>
            </g>

            <!-- Dimensions -->
            <line x1="80" y1="300" x2="80" y2="250" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-713)" marker-end="url(#arrow-713)" />
            <text x="65" y="275" font-size="12" font-style="italic">h<sub>cr</sub></text>
            
            <line x1="225" y1="300" x2="225" y2="50" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-713)" marker-end="url(#arrow-713)" />
            <text x="235" y="175" font-size="12" font-style="italic">h<sub>w</sub></text>

            <text x="140" y="360" font-size="14" fill="currentColor" font-weight="bold">(a)</text>
        </g>

        <!-- Subfigure (b) -->
        <g transform="translate(530, 40)">
            <rect x="180" y="50" width="35" height="250" fill="url(#hatch-713)" stroke="currentColor" stroke-width="1" />
            
            <line x1="20" y1="300" x2="260" y2="300" stroke="currentColor" stroke-width="1.2" marker-end="url(#arrow-713)" />
            <line x1="198" y1="310" x2="198" y2="10" stroke="currentColor" stroke-width="1.2" marker-end="url(#arrow-713)" />
            
            <text x="250" y="325" font-size="14" fill="currentColor" font-weight="bold" font-style="italic">M</text>
            <text x="205" y="20" font-size="14" fill="currentColor" font-weight="bold" font-style="italic">h</text>

            <!-- Curve 1: Analysis crosses axis -->
            <path d="M80 300 C150 250 230 150 215 50" fill="none" stroke="currentColor" stroke-width="1.2" />
            
            <!-- Curve 2: Linear -->
            <line x1="198" y1="50" x2="80" y2="300" stroke="currentColor" stroke-width="1.2" stroke-dasharray="6,3" />
            
            <!-- Curve 3: Shifted -->
            <path d="M198 50 L140 250 L140 300" fill="none" stroke="currentColor" stroke-width="2.5" />

            <line x1="80" y1="300" x2="80" y2="250" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-713)" marker-end="url(#arrow-713)" />
            <text x="65" y="275" font-size="12" font-style="italic">h<sub>cr</sub></text>
            
            <line x1="225" y1="300" x2="225" y2="50" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-713)" marker-end="url(#arrow-713)" />
            <text x="235" y="175" font-size="12" font-style="italic">h<sub>w</sub></text>

            <text x="140" y="360" font-size="14" fill="currentColor" font-weight="bold">(b)</text>
        </g>
    </svg>
</div>
