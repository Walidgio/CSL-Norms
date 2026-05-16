{{-- Modern regulatory table wrapper: $id, $caption, $footnote (optional), $kicker (optional). Put <table class="rpa-table"> inside via @include ... @slot not available — pass HTML in $content --}}
<div @if(!empty($id)) id="{{ $id }}" @endif class="rpa-table-showcase my-8" style="scroll-margin-top: 100px;">
    @if(!empty($kicker))
        <p class="rpa-table-showcase__kicker">{{ $kicker }}</p>
    @endif
    <div class="rpa-table-showcase__surface overflow-x-auto">
        {!! $content !!}
    </div>
    @if(!empty($caption))
        <p class="rpa-table-showcase__caption">{{ $caption }}</p>
    @endif
    @if(!empty($footnote))
        <p class="rpa-table-showcase__footnote">{{ $footnote }}</p>
    @endif
</div>
