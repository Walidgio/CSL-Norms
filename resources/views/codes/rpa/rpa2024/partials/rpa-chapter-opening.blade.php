{{-- Titre d'ouverture de chapitre : $numeral, $title, $id (optionnel), $lead (optionnel) --}}
<div @if(!empty($id)) id="{{ $id }}" @endif class="rpa-chapter-opening my-10" style="scroll-margin-top: 100px;">
    <span class="rpa-chapter-opening__eyebrow">Chapitre {{ $numeral }}</span>
    <h1 class="rpa-chapter-opening__title">{!! $title !!}</h1>
    @if(!empty($lead))
        <p class="rpa-chapter-opening__lead">{{ $lead }}</p>
    @endif
</div>
