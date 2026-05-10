@php
    $class = $class ?? 'w-full h-full';
@endphp

<svg class="{{ $class }}" viewBox="0 0 400 560" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background with subtle gradient -->
    <rect width="400" height="560" rx="32" fill="white" />
    <rect width="400" height="560" rx="32" fill="url(#bg_grad)" fill-opacity="0.03" />
    
    <!-- Stylized 'R' lines -->
    <path d="M40 440 L280 40" stroke="url(#orange_grad)" stroke-width="14" stroke-linecap="round" />
    <path d="M140 500 L380 160" stroke="url(#orange_grad)" stroke-width="14" stroke-linecap="round" />
    
    <!-- RPA Badge -->
    <circle cx="120" cy="240" r="80" fill="white" stroke="#ea580c" stroke-width="6" />
    <text x="120" y="235" font-family="system-ui, -apple-system, sans-serif" font-weight="900" font-size="38" text-anchor="middle" fill="#111827">RPA</text>
    <text x="120" y="275" font-family="system-ui, -apple-system, sans-serif" font-weight="900" font-size="38" text-anchor="middle" fill="#111827">2024</text>
    
    <!-- Title Text -->
    <g font-family="system-ui, -apple-system, sans-serif" font-weight="900" font-size="34" letter-spacing="-0.02em">
        <text x="215" y="220">
            <tspan fill="#ea580c">R</tspan><tspan fill="#1f2937">ÈGLES</tspan>
        </text>
        <text x="215" y="270">
            <tspan fill="#ea580c">P</tspan><tspan fill="#1f2937">ARASISMIQUES</tspan>
        </text>
        <text x="215" y="320">
            <tspan fill="#ea580c">A</tspan><tspan fill="#1f2937">LGÉRIENNES</tspan>
        </text>
    </g>
    
    <!-- Bottom Waveform (Seismic) -->
    <path d="M0 480 H400" stroke="#ea580c" stroke-width="1" stroke-dasharray="4 4" opacity="0.2" />
    <path d="M20 480 L40 475 L60 485 L80 470 L100 495 L120 460 L140 510 L160 440 L180 540 L200 420 L220 540 L240 440 L260 510 L280 460 L300 495 L320 470 L340 485 L360 475 L380 480" 
          stroke="#ea580c" stroke-width="2.5" fill="none" stroke-linejoin="round" />
          
    <!-- Bottom Banner -->
    <path d="M0 500 H400 V560 H0 Z" fill="url(#orange_grad)" />
    <text x="200" y="535" font-family="system-ui, sans-serif" font-weight="700" font-size="14" text-anchor="middle" fill="white">RÉPUBLIQUE ALGÉRIENNE</text>

    <defs>
        <linearGradient id="bg_grad" x1="0" y1="0" x2="400" y2="560" gradientUnits="userSpaceOnUse">
            <stop stop-color="#ea580c" />
            <stop offset="1" stop-color="#f97316" />
        </linearGradient>
        <linearGradient id="orange_grad" x1="0" y1="0" x2="400" y2="0" gradientUnits="userSpaceOnUse">
            <stop stop-color="#ea580c" />
            <stop offset="1" stop-color="#fb923c" />
        </linearGradient>
    </defs>
</svg>
