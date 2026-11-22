{{-- Listing pages. @since 0.3.0 --}}
@if ($pagination->previous !== null || $pagination->next !== null)
    <nav class="pagination" aria-label="{{ __('Pages') }}">
        <ol>
            @if ($pagination->previous !== null)
                <li><a href="{{ $pagination->previous }}" rel="prev">{{ __('Previous') }}</a></li>
            @endif
            @foreach ($pagination->pages() as $link)
                <li>
                    @if ($link['number'] === null)
                        <span class="gap" aria-hidden="true">…</span>
                    @elseif ($link['current'])
                        <span aria-current="page"><span class="sr-only">{{ __('Page') }} </span>{{ $link['number'] }}</span>
                    @else
                        <a href="{{ $link['url'] }}"><span class="sr-only">{{ __('Page') }} </span>{{ $link['number'] }}</a>
                    @endif
                </li>
            @endforeach
            @if ($pagination->next !== null)
                <li><a href="{{ $pagination->next }}" rel="next">{{ __('Next') }}</a></li>
            @endif
        </ol>
    </nav>
@endif
