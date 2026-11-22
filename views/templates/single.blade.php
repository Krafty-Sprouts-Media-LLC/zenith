{{--
    Single item floor. Full Zenith article layout (split media + title, prose,
    sidebar) lands in a later slice from zenith-article.html.
    @since 0.1.0
--}}
<x-teme::document>
    <main id="main" data-template="single">
        @if ($isFront)
            <h2>{{ $page->title }}</h2>
        @else
            <h1>{{ $page->title }}</h1>
        @endif
        @if ($page->standfirst !== null && $page->standfirst !== '')
            <p>{{ $page->standfirst }}</p>
        @endif
        <div class="prose">{!! $page->bodyHtml !!}</div>
    </main>
</x-teme::document>
