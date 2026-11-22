{{--
    Sticky header: mark + name, primary menu, search.
    Wide nav and narrow <details> — CSS chooses; no script.
    @since 0.2.0
--}}
<header class="site-header">
    <div class="wrap header-inner">
        @if ($isFront)
            <h1 class="site-title">@include('theme::partials.site-name')</h1>
        @else
            <p class="site-title">@include('theme::partials.site-name')</p>
        @endif

        <div class="nav-wide">
            <x-teme::navigation slot="primary" :label="__('Primary')" />
        </div>

        <div class="header-tools">
            @include('theme::partials.search-form', ['id' => 'search-wide', 'value' => ''])
        </div>

        <details class="nav-narrow">
            <summary>{{ __('Menu') }}</summary>
            <div class="nav-narrow-body">
                <x-teme::navigation slot="primary" :label="__('Primary')" />
                @include('theme::partials.search-form', ['id' => 'search-narrow', 'value' => ''])
            </div>
        </details>
    </div>
</header>
