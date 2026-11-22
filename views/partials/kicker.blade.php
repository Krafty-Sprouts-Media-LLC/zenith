{{-- Primary category as a badge link. @since 0.3.0 --}}
@if ($kicker !== null)
    <p class="kicker"><a href="{{ $kicker->url }}">{{ $kicker->name }}</a></p>
@endif
