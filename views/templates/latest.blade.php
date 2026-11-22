{{--
    Latest posts: a simple vertical list (lead, then the rest).
    Home address or the posts page. Page 1 gets lead + featured + feed;
    later pages get the feed alone.
    @since 0.3.0
--}}
@extends('theme::layouts.base')

@section('main')
    <div class="wrap">
        @if (! $isFront && $page->feed->subject !== null)
            <h1 class="page-title">{{ $page->feed->subject->title }}</h1>
        @endif

        @if ($page->lead === null && $page->featured === [] && $page->feed->items === [])
            <div class="empty"><p>{{ __('Nothing published yet.') }}</p></div>
        @else
            <div class="feed-list">
                @if ($page->lead !== null)
                    @include('theme::partials.card', [
                        'item' => $page->lead,
                        'context' => 'lead',
                        'showImage' => true,
                        'showMeta' => true,
                        'priority' => true,
                        'class' => 'lead',
                        'level' => $isFront ? 2 : 2,
                    ])
                @endif

                @foreach ($page->featured as $item)
                    @include('theme::partials.card', [
                        'item' => $item,
                        'context' => 'thumb',
                        'showImage' => true,
                        'showMeta' => true,
                    ])
                @endforeach

                @foreach ($page->feed->items as $item)
                    @include('theme::partials.card', [
                        'item' => $item,
                        'context' => 'thumb',
                        'showImage' => true,
                        'showMeta' => true,
                    ])
                    <x-teme::between-items :after="$loop->iteration" :last="$loop->last" />
                @endforeach
            </div>

            @include('theme::partials.pagination', ['pagination' => $page->feed->pagination])
        @endif
    </div>
@endsection
