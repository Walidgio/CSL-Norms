{{--
    Raster figure shown through an SVG <image> for predictable scaling and layout control.

    Required:
      $path — public-relative path passed to asset(), e.g. 'assets/norms/rpa24/ch3/Ch3Img/rpa24_ch3_p47.jpg'
      $alt  — short accessible name (also used in SVG <title>)

    Recommended:
      $vbW, $vbH — viewBox width/height; use the real pixel size of the file (or any matching ratio) so preserveAspectRatio behaves correctly.

    Optional:
      $figureId — anchor id (e.g. 'rpa-fig-3.1')
      $caption — HTML-safe caption under the graphic (use entities or Blade escaping in the caller)
      $notes    — smaller secondary line under the caption
      $maxWidth — Tailwind max-width class for the SVG (default: max-w-4xl)

    Fully vector figures: prefer a dedicated blade under Ch3Svg/… with raw <svg> paths (see Figure 3.3). Use this partial when the source stays a scan or export (PNG/JPG/WebP).
--}}
@php
    $path = $path ?? '';
    $alt = $alt ?? '';
    $vbW = isset($vbW) ? (int) $vbW : 4;
    $vbH = isset($vbH) ? (int) $vbH : 3;
    $figureId = $figureId ?? null;
    $caption = $caption ?? null;
    $notes = $notes ?? null;
    $maxWidth = $maxWidth ?? 'max-w-4xl';
    $href = (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) ? $path : asset($path);
@endphp
<figure
    @if($figureId) id="{{ $figureId }}" @endif
    class="rpa-figure-container rpa-figure-raster-figure my-10 text-center"
    style="scroll-margin-top: 100px;"
>
    <div class="rpa-figure-raster-frame relative mx-auto inline-block max-w-full rounded-xl border border-slate-200/90 bg-white p-2 shadow-sm dark:border-slate-600 dark:bg-slate-900/60">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 {{ $vbW }} {{ $vbH }}"
            class="rpa-figure-raster-svg {{ $maxWidth }} block h-auto w-full"
            role="img"
            aria-label="{{ e($alt) }}"
        >
            <title>{{ e($alt) }}</title>
            <image
                href="{{ $href }}"
                xlink:href="{{ $href }}"
                x="0"
                y="0"
                width="{{ $vbW }}"
                height="{{ $vbH }}"
                preserveAspectRatio="xMidYMid meet"
            />
        </svg>
    </div>
    @if(filled($caption))
        <figcaption class="rpa-figure-title mt-4 px-2 text-center text-sm font-semibold">{!! $caption !!}</figcaption>
    @endif
    @if(filled($notes))
        <p class="rpa-figure-raster-notes mt-1 px-2 text-center text-xs text-slate-500 dark:text-slate-400">{{ $notes }}</p>
    @endif
</figure>
