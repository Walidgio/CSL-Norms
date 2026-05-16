{{-- Regulatory comment / note box: pass HTML in $content --}}
<aside class="rpa-comment-box my-6" @if(!empty($label)) aria-label="{{ $label }}" @endif>
    {!! $content !!}
</aside>
