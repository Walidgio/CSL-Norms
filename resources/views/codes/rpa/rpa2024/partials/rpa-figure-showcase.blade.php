{{-- Figure showcase with zoom/pan controls (id, kicker?, caption, svg, chips?, fineprint?) --}}
@php
    $uid = preg_replace('/[^a-z0-9-]/', '', $id ?? 'rpa-fig');
@endphp
<figure id="{{ $id }}" class="rpa-figure-showcase my-8" style="scroll-margin-top: 100px;" data-figure-viewport="{{ $uid }}">
    <div class="rpa-figure-showcase__surface">
        <div class="rpa-figure-showcase__toolbar" role="toolbar" aria-label="Contrôles de la figure">
            @if(!empty($kicker))
                <span class="rpa-figure-showcase__toolbar-title">{{ $kicker }}</span>
            @endif
            <div class="rpa-figure-showcase__controls">
                <button type="button" class="rpa-fig-ctrl" data-fig-action="zoom-out" data-fig-target="{{ $uid }}" aria-label="Réduire" title="Réduire">−</button>
                <button type="button" class="rpa-fig-ctrl" data-fig-action="reset" data-fig-target="{{ $uid }}" aria-label="Réinitialiser" title="Réinitialiser">⟲</button>
                <button type="button" class="rpa-fig-ctrl" data-fig-action="zoom-in" data-fig-target="{{ $uid }}" aria-label="Agrandir" title="Agrandir">+</button>
                <button type="button" class="rpa-fig-ctrl rpa-fig-ctrl--ghost" data-fig-action="fit" data-fig-target="{{ $uid }}" aria-label="Ajuster à la largeur" title="Ajuster">⤢</button>
            </div>
        </div>
        <div class="rpa-figure-showcase__viewport" data-fig-viewport="{{ $uid }}">
            <div class="rpa-figure-showcase__stage" data-fig-stage="{{ $uid }}">
                @include($svg)
            </div>
        </div>
        <figcaption class="rpa-figure-showcase__caption">{{ $caption }}</figcaption>
        @if(!empty($chips))
            <div class="rpa-figure-showcase__chips">
                @foreach($chips as $chip)
                    <span class="rpa-figure-showcase__chip rpa-figure-showcase__chip--{{ $chip['variant'] ?? 'a' }}">
                        @if(!empty($chip['key']))
                            <span class="rpa-figure-showcase__chip-key">{{ $chip['key'] }}</span>
                        @endif
                        <span class="rpa-figure-showcase__chip-txt">{{ $chip['text'] }}</span>
                    </span>
                @endforeach
            </div>
        @endif
        @if(!empty($fineprint))
            <p class="rpa-figure-showcase__fineprint">{!! $fineprint !!}</p>
        @endif
    </div>
</figure>
