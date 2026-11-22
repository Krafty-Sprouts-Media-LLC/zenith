{{--
    Floor template (required). Draws until more specific templates exist.
    Home with “latest posts” will use `latest` once that slice lands; until then
    this page is the fallback for every kind except errors.
    @since 0.1.0
--}}
<x-teme::document>
    <main id="main" data-template="index">
        <h1>{{ $site->name }}</h1>
        @if ($site->tagline !== '')
            <p>{{ $site->tagline }}</p>
        @endif
    </main>
</x-teme::document>
