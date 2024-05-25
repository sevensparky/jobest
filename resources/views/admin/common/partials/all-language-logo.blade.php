@foreach (config('app.available_locales') as $locale_name => $available_locale)
    <li class="cursor-pointer">
        <a class="dropdown-item d-flex align-items-center py-2" href="{{ route('switch.language', $available_locale) }}">
            @if ($available_locale === 'en')
                <img src="{{ asset('admin/assets/images/county/05.png') }}" width="20" alt="">
            @elseif ($available_locale === 'fa')
                <img src="{{ asset('admin/assets/images/county/09.png') }}" width="20" alt="">
            @endif
            {{-- <span class="{{ app()->isLocale('en') ? 'ms-2' : 'me-2' }}"> --}}
            <span class="ms-2">
                {{ __($locale_name) }}
            </span>
        </a>
    </li>
@endforeach
