{{--
    Single item floor. Full list/article skin lands later.
    @since 0.1.0
    @since 0.2.0 Uses the site layout shell.
--}}
@extends('theme::layouts.base')

@section('main')
    <div class="wrap">
        <article class="page-stack">
            @if ($isFront)
                <h2>{{ $page->title }}</h2>
            @else
                <h1>{{ $page->title }}</h1>
            @endif
            @if ($page->standfirst !== null && $page->standfirst !== '')
                <p class="standfirst">{{ $page->standfirst }}</p>
            @endif
            <div class="prose">{!! $page->bodyHtml !!}</div>
        </article>
    </div>
@endsection
