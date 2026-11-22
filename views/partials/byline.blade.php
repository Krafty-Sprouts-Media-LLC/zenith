{{-- Who wrote it and when. @since 0.3.0 --}}
@if ($authors !== [])
    {{ __('By') }}
    @foreach ($authors as $author)
        {{ $loop->first ? '' : ($loop->last ? ' '.__('and').' ' : ', ') }}
        @if ($author->url !== '')
            <a href="{{ $author->url }}" rel="author">{{ $author->name }}</a>
        @else
            {{ $author->name }}
        @endif
    @endforeach
    <span aria-hidden="true"> · </span>
@endif
<time datetime="{{ $published->format(DATE_ATOM) }}">{{ $publishedText }}</time>
@if (($readingMinutes ?? null) !== null)
    <span aria-hidden="true"> · </span>
    <span>{{ trans_choice(':count min read', $readingMinutes, ['count' => $readingMinutes]) }}</span>
@endif
