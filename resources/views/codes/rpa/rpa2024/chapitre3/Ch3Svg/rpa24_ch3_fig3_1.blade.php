{{--
    Figure 3.1 — Official map raster embedded in SVG for crisp scaling + modern HTML/CSS chrome.
    Source asset: assets/norms/rpa24/ch3/Ch3Img/rpa24_ch3_fig3_1_official.png (publish norms-assets).
    Crops (px): tuned for the bundled 383×605 composite (a) top / (b) bottom.
--}}
@php
    $rel = 'rpa24/ch3/Ch3Img/rpa24_ch3_fig3_1_official.png';
    $published = public_path('assets/norms/' . $rel);
    $src = is_file($published)
        ? asset('assets/norms/' . $rel)
        : route('norms.package-asset', ['f' => $rel]);
    $W = 383;
    $H = 605;
    $aY = 0;
    $aH = 258;
    $bY = 254;
    $bH = $H - $bY;
@endphp
<div class="rpa-fig31-mapgrid">
    <div class="rpa-fig31-mapcard rpa-fig31-mapcard--a">
        <span class="rpa-fig31-mapcard__ribbon" aria-hidden="true">(a)</span>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 {{ $W }} {{ $aH }}"
            class="rpa-fig31-panel-svg"
            role="img"
            aria-labelledby="rpa31-title-a"
        >
            <title id="rpa31-title-a">(a) Zonage sismique de l'Alg&eacute;rie : toutes les zones 0 &agrave; VI</title>
            <defs>
                <clipPath id="rpa31a-clip"><rect x="0" y="0" width="{{ $W }}" height="{{ $aH }}" rx="10" ry="10" /></clipPath>
                <linearGradient id="rpa31a-frame" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="#38bdf8" stop-opacity="0.35" />
                    <stop offset="100%" stop-color="#ea580c" stop-opacity="0.35" />
                </linearGradient>
            </defs>
            <rect x="0" y="0" width="{{ $W }}" height="{{ $aH }}" rx="12" class="rpa-fig31-panel-bg" fill="#f1f5f9" />
            <rect x="0.5" y="0.5" width="{{ $W - 1 }}" height="{{ $aH - 1 }}" rx="11" fill="none" stroke="url(#rpa31a-frame)" stroke-width="1.5" opacity="0.9" />
            <g clip-path="url(#rpa31a-clip)">
                <image
                    href="{{ $src }}"
                    xlink:href="{{ $src }}"
                    width="{{ $W }}"
                    height="{{ $H }}"
                    x="0"
                    y="{{ -$aY }}"
                    preserveAspectRatio="none"
                />
            </g>
        </svg>
    </div>
    <div class="rpa-fig31-mapcard rpa-fig31-mapcard--b">
        <span class="rpa-fig31-mapcard__ribbon rpa-fig31-mapcard__ribbon--b" aria-hidden="true">(b)</span>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 {{ $W }} {{ $bH }}"
            class="rpa-fig31-panel-svg"
            role="img"
            aria-labelledby="rpa31-title-b"
        >
            <title id="rpa31-title-b">(b) Zonage sismique de l'Alg&eacute;rie : zoom sur les zones I &agrave; VI</title>
            <defs>
                <clipPath id="rpa31b-clip"><rect x="0" y="0" width="{{ $W }}" height="{{ $bH }}" rx="10" ry="10" /></clipPath>
                <linearGradient id="rpa31b-frame" x1="1" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#fb923c" stop-opacity="0.45" />
                    <stop offset="100%" stop-color="#f97316" stop-opacity="0.25" />
                </linearGradient>
            </defs>
            <rect x="0" y="0" width="{{ $W }}" height="{{ $bH }}" rx="12" class="rpa-fig31-panel-bg" fill="#fffbeb" />
            <rect x="0.5" y="0.5" width="{{ $W - 1 }}" height="{{ $bH - 1 }}" rx="11" fill="none" stroke="url(#rpa31b-frame)" stroke-width="1.5" opacity="0.95" />
            <g clip-path="url(#rpa31b-clip)">
                <image
                    href="{{ $src }}"
                    xlink:href="{{ $src }}"
                    width="{{ $W }}"
                    height="{{ $H }}"
                    x="0"
                    y="{{ -$bY }}"
                    preserveAspectRatio="none"
                />
            </g>
        </svg>
    </div>
</div>
