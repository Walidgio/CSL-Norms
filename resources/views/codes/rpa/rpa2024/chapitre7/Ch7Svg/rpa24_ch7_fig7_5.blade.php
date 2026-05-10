<svg viewBox="0 0 600 560" class="w-full max-w-2xl text-slate-800 dark:text-slate-200 font-sans" style="font-family: 'Times New Roman', serif;">
    <defs>
        <!-- Hatching pattern for beam/column boundary representation if needed, though simple lines are used here -->
        <pattern id="hatch-115" patternUnits="userSpaceOnUse" width="10" height="10">
            <path d="M0,10 L10,0" stroke="currentColor" stroke-width="0.5" opacity="0.3"/>
        </pattern>
        <marker id="arrow-115" viewBox="0 0 10 10" refX="10" refY="5" markerWidth="6" markerHeight="6" orient="auto">
            <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
        </marker>
        <marker id="arrow-rev-115" viewBox="0 0 10 10" refX="0" refY="5" markerWidth="6" markerHeight="6" orient="auto">
            <path d="M10,0 L0,5 L10,10 z" fill="currentColor"/>
        </marker>
    </defs>

    <!-- Column Lines -->
    <rect x="400" y="50" width="120" height="350" fill="none" stroke="currentColor" stroke-width="2" />
    
    <!-- Beam Lines (Left side attaching to column) -->
    <line x1="100" y1="120" x2="400" y2="120" stroke="currentColor" stroke-width="2" />
    <line x1="100" y1="330" x2="400" y2="330" stroke="currentColor" stroke-width="2" />
    
    <!-- Cut lines for beam -->
    <path d="M90,110 Q110,120 90,130 Q110,225 90,320 Q110,330 90,340" fill="none" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4,4" />
    <!-- Cut lines for column top/bottom -->
    <path d="M390,40 Q460,60 530,40" fill="none" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4,4" />
    <path d="M390,410 Q460,390 530,410" fill="none" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4,4" />

    <!-- Stirrups in Beam -->
    <!-- Critical zone stirrups (close spacing) -->
    <line x1="150" y1="120" x2="150" y2="330" stroke="currentColor" stroke-width="1" />
    <line x1="170" y1="120" x2="170" y2="330" stroke="currentColor" stroke-width="1" />
    <line x1="190" y1="120" x2="190" y2="330" stroke="currentColor" stroke-width="1" />
    <line x1="210" y1="120" x2="210" y2="330" stroke="currentColor" stroke-width="1" />
    <line x1="230" y1="120" x2="230" y2="330" stroke="currentColor" stroke-width="1" />
    <!-- Normal zone stirrups -->
    <line x1="280" y1="120" x2="280" y2="330" stroke="currentColor" stroke-width="1" />
    <line x1="330" y1="120" x2="330" y2="330" stroke="currentColor" stroke-width="1" />
    <line x1="380" y1="120" x2="380" y2="330" stroke="currentColor" stroke-width="1" />

    <!-- Stirrups in Column -->
    <!-- Top column -->
    <line x1="400" y1="60" x2="520" y2="60" stroke="currentColor" stroke-width="1" />
    <line x1="400" y1="80" x2="520" y2="80" stroke="currentColor" stroke-width="1" />
    <line x1="400" y1="100" x2="520" y2="100" stroke="currentColor" stroke-width="1" />
    <!-- Node zone -->
    <line x1="400" y1="150" x2="520" y2="150" stroke="currentColor" stroke-width="1" />
    <line x1="400" y1="190" x2="520" y2="190" stroke="currentColor" stroke-width="1" />
    <line x1="400" y1="230" x2="520" y2="230" stroke="currentColor" stroke-width="1" />
    <line x1="400" y1="270" x2="520" y2="270" stroke="currentColor" stroke-width="1" />
    <line x1="400" y1="310" x2="520" y2="310" stroke="currentColor" stroke-width="1" />
    <!-- Bottom column -->
    <line x1="400" y1="350" x2="520" y2="350" stroke="currentColor" stroke-width="1" />
    <line x1="400" y1="370" x2="520" y2="370" stroke="currentColor" stroke-width="1" />
    <line x1="400" y1="390" x2="520" y2="390" stroke="currentColor" stroke-width="1" />

    <!-- Longitudinal Rebars in Beam -->
    <!-- Top Rebar -->
    <path d="M100,135 L480,135 L480,315" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" />
    <circle cx="480" cy="315" r="3" fill="currentColor" /> <!-- Hook end -->
    <!-- Bottom Rebar -->
    <path d="M100,315 L460,315 L460,135" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" />
    <circle cx="460" cy="135" r="3" fill="currentColor" /> <!-- Hook end -->

    <!-- Annotations and Dimensions -->
    <!-- Top Hook dimension -->
    <line x1="480" y1="120" x2="480" y2="110" stroke="currentColor" stroke-width="1" />
    <line x1="420" y1="115" x2="480" y2="115" stroke="currentColor" stroke-width="1" marker-end="url(#arrow-115)" />
    <text x="450" y="105" font-size="12" text-anchor="middle">&ge; 50&phi;<tspan baseline-shift="sub" font-size="9">l</tspan></text>

    <!-- Spacing text in beam -->
    <text x="180" y="145" font-size="12" font-style="italic">s</text>
    <text x="305" y="145" font-size="12" font-style="italic">s'</text>
    <text x="355" y="145" font-size="12" font-style="italic">h</text>

    <!-- Dimension lines for beam critical length -->
    <line x1="150" y1="155" x2="150" y2="165" stroke="currentColor" stroke-width="1" />
    <line x1="240" y1="155" x2="240" y2="165" stroke="currentColor" stroke-width="1" />
    <line x1="150" y1="160" x2="240" y2="160" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-115)" marker-end="url(#arrow-115)" />
    <text x="195" y="155" font-size="12" font-style="italic">l'</text>

    <!-- Column Dimensions -->
    <!-- h_c -->
    <line x1="530" y1="120" x2="540" y2="120" stroke="currentColor" stroke-width="1" />
    <line x1="530" y1="330" x2="540" y2="330" stroke="currentColor" stroke-width="1" />
    <line x1="535" y1="120" x2="535" y2="330" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-115)" marker-end="url(#arrow-115)" />
    <text x="545" y="230" font-size="12" font-style="italic">h<tspan baseline-shift="sub" font-size="9">c</tspan></text>

    <!-- l_d -->
    <line x1="560" y1="50" x2="570" y2="50" stroke="currentColor" stroke-width="1" />
    <line x1="560" y1="400" x2="570" y2="400" stroke="currentColor" stroke-width="1" />
    <line x1="565" y1="50" x2="565" y2="400" stroke="currentColor" stroke-width="1" marker-start="url(#arrow-rev-115)" marker-end="url(#arrow-115)" />
    <text x="575" y="230" font-size="12" font-style="italic">l<tspan baseline-shift="sub" font-size="9">d</tspan></text>

    <!-- l_cr and t markings on the left side of column -->
    <line x1="90" y1="120" x2="140" y2="120" stroke="currentColor" stroke-width="1" stroke-dasharray="2,2"/>
    <line x1="90" y1="150" x2="140" y2="150" stroke="currentColor" stroke-width="1" stroke-dasharray="2,2"/>
    <text x="75" y="138" font-size="12" font-style="italic">l<tspan baseline-shift="sub" font-size="9">cr</tspan></text>

    <line x1="90" y1="330" x2="140" y2="330" stroke="currentColor" stroke-width="1" stroke-dasharray="2,2"/>
    <line x1="90" y1="300" x2="140" y2="300" stroke="currentColor" stroke-width="1" stroke-dasharray="2,2"/>
    <text x="75" y="318" font-size="12" font-style="italic">l<tspan baseline-shift="sub" font-size="9">cr</tspan></text>

    <text x="135" y="175" font-size="10" font-style="italic">5cm</text>
    <text x="135" y="200" font-size="12" font-style="italic">t'</text>

    <!-- Rebar Text -->
    <text x="155" y="325" font-size="11">A<tspan baseline-shift="sub" font-size="8">1</tspan></text>
    <text x="350" y="345" font-size="11">A<tspan baseline-shift="sub" font-size="8">l</tspan></text>
    <text x="155" y="130" font-size="11">A<tspan baseline-shift="sub" font-size="8">1</tspan>'</text>
    <text x="360" y="130" font-size="11">A<tspan baseline-shift="sub" font-size="8">2</tspan>'</text>

    <!-- Text Block inside the diagram -->
    <g font-size="11" transform="translate(180, 180)">
        <text x="0" y="0" font-weight="bold">l' = 1.5h</text>
        <text x="0" y="15" font-weight="bold">l<tspan baseline-shift="sub" font-size="8">cr</tspan> = max (1.5h<tspan baseline-shift="sub" font-size="8">c</tspan>, l<tspan baseline-shift="sub" font-size="8">d</tspan>/6, 60cm)</text>
        
        <text x="0" y="35">t &le; min (10&phi;<tspan baseline-shift="sub" font-size="8">l</tspan>, 12.5cm) en zone I, II, III</text>
        <text x="0" y="50">t &le; min (b<tspan baseline-shift="sub" font-size="8">0</tspan>/3, 10cm, 6&phi;<tspan baseline-shift="sub" font-size="8">l</tspan>) en zone IV, V, VI</text>
        
        <text x="0" y="70">s &le; min (h/4, 24&phi;<tspan baseline-shift="sub" font-size="8">t</tspan>, 17.5cm, 6&phi;<tspan baseline-shift="sub" font-size="8">l</tspan>)</text>
        <text x="0" y="85">s' &le; h/2 ou s' &le; min (h/4, 12&phi;<tspan baseline-shift="sub" font-size="8">l</tspan>)</text>
        
        <text x="0" y="105">t' &le; 15&phi;<tspan baseline-shift="sub" font-size="8">l</tspan> en zone I, II, III</text>
        <text x="0" y="120">t' &le; min (b<tspan baseline-shift="sub" font-size="8">c</tspan>/2, h<tspan baseline-shift="sub" font-size="8">c</tspan>/2, 10&phi;<tspan baseline-shift="sub" font-size="8">t</tspan>) en zone IV, V, VI</text>
        
        <text x="30" y="145">A<tspan baseline-shift="sub" font-size="8">1</tspan>' &ge; max(A<tspan baseline-shift="sub" font-size="8">1</tspan>'/4, A<tspan baseline-shift="sub" font-size="8">2</tspan>'/4, 3cm&sup2;)</text>
    </g>
    <text x="180" y="400" font-size="11">A<tspan baseline-shift="sub" font-size="8">1</tspan> &ge; max(A<tspan baseline-shift="sub" font-size="8">1</tspan>/2, A<tspan baseline-shift="sub" font-size="8">l</tspan>/4, 3cm&sup2;)</text>

    <!-- Cross sections at bottom -->
    <text x="300" y="450" font-size="12" text-anchor="middle">(a) Détail d'un cours d'armatures transversales de la zone nodale</text>
    
    <rect x="230" y="465" width="40" height="40" rx="4" fill="none" stroke="currentColor" stroke-width="1.5" />
    <path d="M230,475 L240,465" stroke="currentColor" stroke-width="1.5" />
    
    <rect x="290" y="465" width="40" height="40" rx="4" fill="none" stroke="currentColor" stroke-width="1.5" />
    <path d="M330,495 L320,505" stroke="currentColor" stroke-width="1.5" />

    <text x="280" y="525" font-size="12" text-anchor="middle">(b) Deux cadres fermés (avec al-</text>
    <text x="280" y="540" font-size="12" text-anchor="middle">ternance dans l'orientation)</text>
</svg>
