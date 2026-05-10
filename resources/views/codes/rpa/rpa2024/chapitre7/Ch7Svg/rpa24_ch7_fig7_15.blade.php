<div class="rpa-svg-wrapper" style="max-width: 600px; margin: 0 auto;">
    <svg viewBox="0 0 500 400" preserveAspectRatio="xMidYMid meet" class="rpa-svg">
        <!-- Axes -->
        <line x1="100" y1="350" x2="100" y2="50" stroke="currentColor" stroke-width="1" />
        <line x1="100" y1="350" x2="450" y2="350" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-end)" />
        
        <!-- Horizontal story markers -->
        <line x1="80" y1="250" x2="400" y2="250" stroke="currentColor" stroke-width="1" stroke-dasharray="5,5" />
        <line x1="80" y1="150" x2="400" y2="150" stroke="currentColor" stroke-width="1" stroke-dasharray="5,5" />
        <line x1="80" y1="50" x2="400" y2="50" stroke="currentColor" stroke-width="1" stroke-dasharray="5,5" />

        <!-- 1- Analysis Curve -->
        <path d="M100 350 Q250 300 200 50" fill="none" stroke="currentColor" stroke-width="1" />
        
        <!-- 2- Amplified Curve (40%) -->
        <path d="M100 350 Q350 300 280 50" fill="none" stroke="currentColor" stroke-width="1.5" stroke-dasharray="3,3" />

        <!-- 3- Calculation Envelope -->
        <line x1="266" y1="350" x2="266" y2="250" stroke="currentColor" stroke-width="2" />
        <line x1="266" y1="250" x2="180" y2="50" stroke="currentColor" stroke-width="2" />

        <!-- Ground Label -->
        <text x="250" y="370" font-size="12" fill="currentColor">V = 1.4 V<sub>u</sub></text>
        <line x1="200" y1="355" x2="330" y2="355" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        
        <!-- Labels -->
        <text x="310" y="315" font-size="11" fill="currentColor">1- Courbe d'effort tranchant issue de l'analyse</text>
        <text x="310" y="275" font-size="11" fill="currentColor">2- Effort tranchant amplifié</text>
        <text x="310" y="235" font-size="11" fill="currentColor">3- Effort tranchant de calcul</text>

        <!-- Heights -->
        <text x="60" y="305" font-size="11" fill="currentColor" transform="rotate(-90, 60, 305)">h<sub>w</sub>/3</text>
        <text x="60" y="205" font-size="11" fill="currentColor" transform="rotate(-90, 60, 205)">2h<sub>w</sub>/3</text>
        
        <line x1="90" y1="350" x2="90" y2="250" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <line x1="90" y1="250" x2="90" y2="50" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />

        <!-- V/2 offset -->
        <line x1="180" y1="40" x2="266" y2="40" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-start)" marker-end="url(#arrow-end)" />
        <text x="210" y="30" font-size="12" fill="currentColor">V/2</text>
    </svg>
</div>
