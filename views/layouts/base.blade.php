{{--
    Page shell: document, sticky header, one <main>, footer.
    @since 0.2.0
--}}
<x-teme::document>
    <div class="site">
        @include('theme::partials.site-header')
        <main id="main" class="site-main" tabindex="-1">
            @yield('main')
        </main>
        @include('theme::partials.site-footer')
    </div>
</x-teme::document>
