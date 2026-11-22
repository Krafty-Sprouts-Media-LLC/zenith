{{-- Footer: mark, footer menu, copyright. @since 0.2.0 --}}
<footer class="site-footer">
    <div class="wrap footer-inner">
        <a href="{{ $site->url }}" class="footer-brand">
            <span class="site-mark" aria-hidden="true"></span>
            <span>{{ $site->name }}</span>
        </a>
        <x-teme::navigation slot="footer" :label="__('Footer')" />
        <p class="copyright">© {{ $site->year }} {{ $site->name }}</p>
    </div>
</footer>
