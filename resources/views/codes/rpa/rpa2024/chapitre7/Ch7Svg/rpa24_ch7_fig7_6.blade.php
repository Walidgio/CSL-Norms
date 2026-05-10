<svg viewBox="0 0 600 500" class="w-full max-w-2xl text-slate-800 dark:text-slate-200 font-sans" style="font-family: 'Times New Roman', serif;">
    <defs>
        <marker id="arrow-116" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="5" markerHeight="5" orient="auto">
            <path d="M0,0 L10,5 L0,10 z" fill="currentColor"/>
        </marker>
    </defs>

    <!-- (a) Noeud poteau-poutres: jonction complète -->
    <g transform="translate(0, 0)">
        <!-- Left node (unprimed) -->
        <g transform="translate(180, 80)">
            <!-- Beams and Columns -->
            <rect x="-80" y="-15" width="60" height="30" fill="none" stroke="currentColor" stroke-width="1.5" />
            <rect x="20" y="-15" width="60" height="30" fill="none" stroke="currentColor" stroke-width="1.5" />
            <rect x="-15" y="-80" width="30" height="60" fill="none" stroke="currentColor" stroke-width="1.5" />
            <rect x="-15" y="20" width="30" height="60" fill="none" stroke="currentColor" stroke-width="1.5" />
            <rect x="-15" y="-15" width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.5" />

            <!-- Moment arcs with arrows -->
            <!-- MRbw (Left beam) Clockwise arc -->
            <path d="M-30,-25 A 25 25 0 0 1 -30,25" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="-55" y="5" font-size="12" font-style="italic">M<tspan baseline-shift="sub" font-size="9">Rbw</tspan></text>

            <!-- MRbe (Right beam) Counter-clockwise arc -->
            <path d="M30,25 A 25 25 0 0 1 30,-25" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="35" y="5" font-size="12" font-style="italic">M<tspan baseline-shift="sub" font-size="9">Rbe</tspan></text>

            <!-- MRcn (Top column) Counter-clockwise arc -->
            <path d="M25,-30 A 25 25 0 0 1 -25,-30" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="-5" y="-40" font-size="12" font-style="italic" text-anchor="middle">M<tspan baseline-shift="sub" font-size="9">Rcn</tspan></text>

            <!-- MRcs (Bottom column) Clockwise arc -->
            <path d="M-25,30 A 25 25 0 0 1 25,30" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="-5" y="50" font-size="12" font-style="italic" text-anchor="middle">M<tspan baseline-shift="sub" font-size="9">Rcs</tspan></text>
        </g>

        <!-- Right node (primed) -->
        <g transform="translate(420, 80)">
            <!-- Beams and Columns -->
            <rect x="-80" y="-15" width="60" height="30" fill="none" stroke="currentColor" stroke-width="1.5" />
            <rect x="20" y="-15" width="60" height="30" fill="none" stroke="currentColor" stroke-width="1.5" />
            <rect x="-15" y="-80" width="30" height="60" fill="none" stroke="currentColor" stroke-width="1.5" />
            <rect x="-15" y="20" width="30" height="60" fill="none" stroke="currentColor" stroke-width="1.5" />
            <rect x="-15" y="-15" width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.5" />

            <!-- Moment arcs with arrows (Reversed directions) -->
            <!-- M'Rbw (Left beam) CCW arc -->
            <path d="M-30,25 A 25 25 0 0 1 -30,-25" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="-55" y="5" font-size="12" font-style="italic">M'<tspan baseline-shift="sub" font-size="9">Rbw</tspan></text>

            <!-- M'Rbe (Right beam) CW arc -->
            <path d="M30,-25 A 25 25 0 0 1 30,25" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="35" y="5" font-size="12" font-style="italic">M'<tspan baseline-shift="sub" font-size="9">Rbe</tspan></text>

            <!-- M'Rcn (Top column) CW arc -->
            <path d="M-25,-30 A 25 25 0 0 1 25,-30" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="-5" y="-40" font-size="12" font-style="italic" text-anchor="middle">M'<tspan baseline-shift="sub" font-size="9">Rcn</tspan></text>

            <!-- M'Rcs (Bottom column) CCW arc -->
            <path d="M25,30 A 25 25 0 0 1 -25,30" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="-5" y="50" font-size="12" font-style="italic" text-anchor="middle">M'<tspan baseline-shift="sub" font-size="9">Rcs</tspan></text>
        </g>

        <text x="300" y="160" font-size="12" text-anchor="middle">(a) Noeud poteau-poutres: jonction complète</text>
    </g>

    <!-- (b) Noeud poteau-poutres: jonctions particulières -->
    <g transform="translate(0, 260)">
        <!-- Top Left Node -->
        <g transform="translate(180, -20)">
            <rect x="0" y="0" width="80" height="15" fill="currentColor" opacity="0.3" /> <!-- Right beam -->
            <rect x="-15" y="0" width="15" height="70" fill="currentColor" opacity="0.8" /> <!-- Bottom column -->
            <!-- Arcs -->
            <!-- MRbe CW -->
            <path d="M 40,-5 A 15 15 0 0 1 40,20" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="45" y="-10" font-size="10" font-style="italic">M<tspan baseline-shift="sub" font-size="8">Rbe</tspan></text>
            <!-- MRcs CCW -->
            <path d="M 5,50 A 15 15 0 0 1 -20,50" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="10" y="60" font-size="10" font-style="italic">M<tspan baseline-shift="sub" font-size="8">Rcs</tspan></text>
        </g>

        <!-- Top Center Node -->
        <g transform="translate(320, -20)">
            <rect x="-80" y="0" width="160" height="15" fill="currentColor" opacity="0.3" /> <!-- Left and Right beam -->
            <rect x="-7.5" y="0" width="15" height="70" fill="currentColor" opacity="0.8" /> <!-- Bottom column -->
            <!-- Arcs -->
            <path d="M -40,-5 A 15 15 0 0 1 -40,20" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="-45" y="-10" font-size="10" font-style="italic" text-anchor="end">M<tspan baseline-shift="sub" font-size="8">Rbw</tspan></text>
            
            <path d="M 40,20 A 15 15 0 0 1 40,-5" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="45" y="-10" font-size="10" font-style="italic">M<tspan baseline-shift="sub" font-size="8">Rbe</tspan></text>
            
            <path d="M 10,50 A 15 15 0 0 1 -10,50" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="15" y="60" font-size="10" font-style="italic">M<tspan baseline-shift="sub" font-size="8">Rcs</tspan></text>
        </g>

        <!-- Bottom Left Node -->
        <g transform="translate(180, 80)">
            <rect x="0" y="0" width="80" height="15" fill="currentColor" opacity="0.3" /> <!-- Right beam -->
            <rect x="-15" y="-60" width="15" height="140" fill="currentColor" opacity="0.8" /> <!-- Full column -->
            <!-- Arcs -->
            <path d="M -5,-30 A 15 15 0 0 1 -25,-30" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="-15" y="-40" font-size="10" font-style="italic" text-anchor="middle">M<tspan baseline-shift="sub" font-size="8">Rcn</tspan></text>
            
            <path d="M 40,-5 A 15 15 0 0 1 40,20" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="45" y="30" font-size="10" font-style="italic">M<tspan baseline-shift="sub" font-size="8">Rbe</tspan></text>
            
            <path d="M -25,50 A 15 15 0 0 1 -5,50" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="-15" y="70" font-size="10" font-style="italic" text-anchor="middle">M<tspan baseline-shift="sub" font-size="8">Rcs</tspan></text>
        </g>

        <!-- Bottom Center Node -->
        <g transform="translate(320, 80)">
            <rect x="-80" y="0" width="160" height="15" fill="currentColor" opacity="0.3" /> <!-- Left and Right beam -->
            <rect x="-7.5" y="-60" width="15" height="140" fill="currentColor" opacity="0.8" /> <!-- Full column -->
            <!-- Arcs -->
            <path d="M 10,-30 A 15 15 0 0 1 -10,-30" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="0" y="-40" font-size="10" font-style="italic" text-anchor="middle">M<tspan baseline-shift="sub" font-size="8">Rcn</tspan></text>

            <path d="M -40,-5 A 15 15 0 0 1 -40,20" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="-45" y="30" font-size="10" font-style="italic" text-anchor="end">M<tspan baseline-shift="sub" font-size="8">Rbw</tspan></text>
            
            <path d="M 40,20 A 15 15 0 0 1 40,-5" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="45" y="30" font-size="10" font-style="italic">M<tspan baseline-shift="sub" font-size="8">Rbe</tspan></text>
            
            <path d="M -10,50 A 15 15 0 0 1 10,50" fill="none" stroke="currentColor" stroke-width="1.5" marker-end="url(#arrow-116)"/>
            <text x="0" y="70" font-size="10" font-style="italic" text-anchor="middle">M<tspan baseline-shift="sub" font-size="8">Rcs</tspan></text>
        </g>

        <text x="300" y="200" font-size="12" text-anchor="middle">(b) Noeud poteau-poutres: jonctions particulières</text>
    </g>

</svg>
