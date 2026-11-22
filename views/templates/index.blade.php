{{--
    Floor template. Home with latest posts will use `latest` in a later slice.
    @since 0.1.0
    @since 0.2.0 Uses the site layout shell.
--}}
@extends('theme::layouts.base')

@section('main')
    <div class="wrap">
        <div class="page-stack">
            @unless ($isFront)
                <h1>{{ $site->name }}</h1>
            @endunless
            @if ($site->tagline !== '')
                <p class="standfirst">{{ $site->tagline }}</p>
            @endif
        </div>
    </div>
@endsection
