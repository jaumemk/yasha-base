<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <i class="fa fa-globe"></i> {{ __('yasha/backend::sidebar.language') }} <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
        @foreach(Lalo::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ Lalo::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
        @endforeach
    </ul>
</li>
