@php
    $readerMode = isset($showPdf) && $showPdf ? 'pdf' : (($viewMode ?? 'html') === 'pdf' ? 'pdf' : 'html');
    $pdfAsset = isset($current['pdf_file']) ? asset('assets/norms/' . $current['pdf_file']) : '';
    $slug = $current['slug'] ?? '';
    $hasPdf = !empty($current['pdf']);
    $hasHtml = !empty($current['html']);
@endphp

<div id="reader-magic-bar" class="reader-magic" role="toolbar" aria-label="Contrôles de lecture"
     data-mode="{{ $readerMode }}"
     data-pdf-src="{{ $pdfAsset }}"
     data-slug="{{ $slug }}">
    <div class="reader-magic__shell">
        <div class="reader-magic__top">
            <span class="reader-magic__brand">
                <x-icon name="sparkles" class="w-3.5 h-3.5" />
                Lecture
            </span>
            @if($hasPdf && $hasHtml)
                <div class="reader-magic__mode" role="group" aria-label="Format du document">
                    <a href="{{ route('norms.show', ['slug' => $slug, 'view' => 'html']) }}"
                       data-mode="html"
                       class="{{ $readerMode === 'html' ? 'is-active' : '' }}"
                       title="Version HTML structurée">HTML</a>
                    <a href="{{ route('norms.show', ['slug' => $slug, 'view' => 'pdf']) }}"
                       data-mode="pdf"
                       class="{{ $readerMode === 'pdf' ? 'is-active' : '' }}"
                       title="PDF officiel">PDF</a>
                </div>
            @else
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">
                    {{ $readerMode === 'pdf' ? 'PDF' : 'HTML' }}
                </span>
            @endif
        </div>

        <div class="reader-magic__search" id="reader-magic-search" hidden>
            <x-icon name="search" class="w-4 h-4 text-slate-400 shrink-0" />
            <input type="search" id="reader-magic-search-input" placeholder="Aller à une section (#rpa-p107…)" autocomplete="off" />
            <button type="button" class="reader-magic__btn" style="min-width:2rem;height:2rem;padding:0" data-reader-action="search-go" title="Aller">OK</button>
        </div>

        <div class="reader-magic__scroll">
            {{-- Navigation --}}
            <div class="reader-magic__group" role="group" aria-label="Navigation">
                <button type="button" class="reader-magic__btn" data-reader-action="sidebar" title="Sommaire (barre latérale)">
                    <x-icon name="bars-3-bottom-left" class="w-4 h-4" />
                    <span class="reader-magic__btn-label">Sommaire</span>
                </button>
                <button type="button" class="reader-magic__btn" data-reader-action="prev-section" title="Section précédente" data-html-only>
                    <x-icon name="chevron-right" class="w-4 h-4 rotate-180" />
                </button>
                <button type="button" class="reader-magic__btn" data-reader-action="next-section" title="Section suivante" data-html-only>
                    <x-icon name="chevron-right" class="w-4 h-4" />
                </button>
                <button type="button" class="reader-magic__btn" data-reader-action="scroll-top" title="Haut de page">
                    <x-icon name="arrow-up" class="w-4 h-4" />
                </button>
            </div>

            <span class="reader-magic__sep" aria-hidden="true"></span>

            {{-- HTML typography --}}
            <div class="reader-magic__group" role="group" aria-label="Typographie" data-html-only>
                <button type="button" class="reader-magic__btn" data-reader-action="font-down" title="Réduire le texte" aria-label="Réduire le texte">A−</button>
                <span class="reader-magic__value" id="reader-font-value" aria-live="polite">100%</span>
                <button type="button" class="reader-magic__btn" data-reader-action="font-up" title="Agrandir le texte" aria-label="Agrandir le texte">A+</button>
                <button type="button" class="reader-magic__btn" data-reader-action="line-height" title="Interligne confortable">
                    <x-icon name="adjustments-horizontal" class="w-4 h-4" />
                </button>
                <button type="button" class="reader-magic__btn" data-reader-action="column-cycle" title="Largeur de colonne">
                    <span class="text-[10px] font-black" id="reader-col-label">Std</span>
                </button>
            </div>

            {{-- PDF zoom --}}
            <div class="reader-magic__group" role="group" aria-label="Zoom PDF" data-pdf-only>
                <button type="button" class="reader-magic__btn" data-reader-action="pdf-zoom-out" title="Zoom arrière">
                    <x-icon name="zoom-out" class="w-4 h-4" />
                </button>
                <span class="reader-magic__value" id="reader-pdf-zoom-value">100%</span>
                <button type="button" class="reader-magic__btn" data-reader-action="pdf-zoom-in" title="Zoom avant">
                    <x-icon name="zoom-in" class="w-4 h-4" />
                </button>
                <button type="button" class="reader-magic__btn" data-reader-action="pdf-fit-width" title="Ajuster à la largeur">
                    <span class="text-[9px] font-black">Fit</span>
                </button>
                @if($pdfAsset)
                    <a href="{{ $pdfAsset }}" target="_blank" rel="noopener" class="reader-magic__btn" title="Ouvrir le PDF dans un nouvel onglet">
                        <x-icon name="eye" class="w-4 h-4" />
                    </a>
                    <a href="{{ $pdfAsset }}" download class="reader-magic__btn" title="Télécharger le PDF">
                        <x-icon name="download" class="w-4 h-4" />
                    </a>
                @endif
            </div>

            <span class="reader-magic__sep" aria-hidden="true"></span>

            {{-- Tools --}}
            <div class="reader-magic__group" role="group" aria-label="Outils">
                <button type="button" class="reader-magic__btn" data-reader-action="search-toggle" title="Rechercher une section">
                    <x-icon name="search" class="w-4 h-4" />
                </button>
                <button type="button" class="reader-magic__btn" data-reader-action="focus" title="Mode focus (lecture immersive)">
                    <x-icon name="sparkles" class="w-4 h-4" />
                    <span class="reader-magic__btn-label">Focus</span>
                </button>
                <button type="button" class="reader-magic__btn" data-reader-action="fullscreen" title="Plein écran">
                    <x-icon name="arrows-pointing-out" class="w-4 h-4" />
                </button>
                <button type="button" class="reader-magic__btn" data-reader-action="print" title="Imprimer">
                    <x-icon name="printer" class="w-4 h-4" />
                </button>
            </div>
        </div>
    </div>
</div>
