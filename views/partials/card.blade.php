{{--
    One list row: optional thumb, kicker, title, excerpt, byline.
    Expects $item, $context (lead|thumb|card), $showImage, $showMeta;
    optional $priority, $level, $class, $snippetHtml.
    @since 0.3.0
--}}
<article class="card{{ $showImage && $item->image !== null ? ' has-media' : '' }}{{ ($class ?? '') !== '' ? ' '.$class : '' }}">
    @if ($showImage && $item->image !== null)
        <div class="card-media">
            <x-teme::image :id="$item->image->id" :context="$context" :priority="$priority ?? false" :decorative="true" />
        </div>
    @endif
    <div class="card-text">
        @include('theme::partials.kicker', ['kicker' => $item->kicker])
        <h{{ $level ?? 2 }} class="card-title">
            @if ($item->url !== '')
                <a href="{{ $item->url }}">{{ $item->title }}</a>
            @else
                {{ $item->title }}
            @endif
        </h{{ $level ?? 2 }}>
        @if (($snippetHtml ?? null) !== null)
            <p class="standfirst snippet">{!! $snippetHtml !!}</p>
        @elseif ($item->standfirst !== null && $item->standfirst !== '')
            <p class="standfirst">{{ $item->standfirst }}</p>
        @endif
        @if ($showMeta)
            <p class="meta">
                @include('theme::partials.byline', [
                    'authors' => $item->authors,
                    'published' => $item->published,
                    'publishedText' => $item->publishedText,
                    'readingMinutes' => null,
                ])
            </p>
        @endif
    </div>
</article>
