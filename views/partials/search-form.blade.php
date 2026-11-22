{{-- Plain GET search. Expects $id and $value. @since 0.2.0 --}}
<form class="search" role="search" action="{{ $site->url }}" method="get">
    <label class="sr-only" for="{{ $id }}">{{ __('Search') }}</label>
    <input id="{{ $id }}" name="s" type="search" value="{{ $value }}" placeholder="{{ __('Search') }}">
    <button class="button quiet" type="submit">{{ __('Search') }}</button>
</form>
