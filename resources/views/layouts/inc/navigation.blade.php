@include('layouts/inc/extra-navigation')

<div class="navbar navbar-dark bg-dark shadow">
    <div class="container d-flex justify-content-end">
        <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center mr-auto">
            @include('inc/logo-svg', ['color' => '#ffffff'])
            <strong class="font-weight-light">Javajan Base</strong>
        </a>

        <nav>
            <a class="btn btn-link" href="{{ route('index') }}">{{ __('site/navigation.index') }}</a>

            <button class="btn btn-link" href="#" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">{{ __('site/navigation.contact') }}</button>

            <span class="dropdown">
                <button class="btn btn-link text-decoration-none dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-globe"></i>
                </button>
                <div class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton">
                    @foreach(\Lalo::getSupportedLocales() as $locale => $value)
                    <a class="dropdown-item text-capitalize"
                    rel="alternate"
                    hreflang="{{ $locale }}"
                    @if(Route::currentRouteName() == 'page')
                    href="{{ url("$locale/" . $page->getTranslation('slug', $locale)) }}"
                    @else
                    href="{{ Lalo::getLocalizedURL($locale, null, [], true) }}
                    @endif
                    ">
                        @if(Lalo::getCurrentLocale() == $locale)
                        <span class="text-muted">{{ $value['native'] }}</span> <span class="float-right font-weight-light text-muted">
                        <i class="fas fa-angle-double-left"></i></span>
                        @else
                        {{ $value['native'] }}
                        @endif
                    </a>
                    @endforeach
                    <div role="separator" class="dropdown-divider"></div>
                    <a href="https://translate.google.com/translate?hl={{ Lalo::getCurrentLocale() }}&u={{ Request::url() }}&sandbox=1" class="dropdown-item text-muted small" target="_blank"> Try to autotranslate by Google </a>
                </div>
            </span>

        </nav>
    </div>
</div>
