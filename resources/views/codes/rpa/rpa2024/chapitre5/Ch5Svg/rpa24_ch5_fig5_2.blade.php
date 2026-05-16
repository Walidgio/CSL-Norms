<svg viewBox="0 0 400 300" class="w-full max-w-sm text-slate-900 dark:text-slate-100" style="font-family: 'Times New Roman', Times, serif;">
    <!-- Ground -->
    <line x1="50" y1="250" x2="350" y2="250" stroke="currentColor" stroke-width="3"/>
    
    <!-- Original Structure (Dashed) -->
    <rect x="150" y="50" width="100" height="200" fill="none" stroke="black" stroke-width="1" stroke-dasharray="5,5"/>
    
    <!-- Deformed Structure (Solid) -->
    <path d="M150 250 Q160 150 200 50 L300 50 Q260 150 250 250 Z" fill="none" stroke="black" stroke-width="2"/>
    
    <!-- Forces -->
    <line x1="50" y1="100" x2="140" y2="100" stroke="black" stroke-width="2" marker-end="url(#arrow)"/>
    <text x="60" y="90" font-family="Arial" font-size="16" font-weight="bold">Vk</text>
    
    <!-- Vertical Pk -->
    <line x1="225" y1="60" x2="225" y2="120" stroke="black" stroke-width="1" marker-end="url(#arrow)"/>
    <text x="235" y="80" font-family="Arial" font-size="16" font-weight="bold">Pk</text>

    <!-- Delta k -->
    <line x1="200" y1="50" x2="150" y2="50" stroke="black" stroke-width="1" stroke-dasharray="2,2"/>
    <line x1="220" y1="180" x2="245" y2="180" stroke="black" stroke-width="1" marker-start="url(#arrow)" marker-end="url(#arrow)"/>
    <text x="225" y="170" font-family="Arial" font-size="14" font-weight="bold">&Delta;k</text>
    
    <!-- height hk -->
    <line x1="170" y1="100" x2="170" y2="200" stroke="black" stroke-width="1" marker-start="url(#arrow)" marker-end="url(#arrow)"/>
    <text x="140" y="160" font-family="Arial" font-size="14" font-weight="bold">hk</text>

    <defs>
        <marker id="arrow" markerWidth="10" markerHeight="10" refX="5" refY="5" orientation="auto">
            <path d="M0,0 L10,5 L0,10 Z" fill="black" />
        </marker>
    </defs>
</svg>
