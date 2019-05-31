    <div class="bg-light">
        <div class="container">
            <nav class="nav justify-content-end">
                @guest

                <a class="nav-link" href="{{ route('login') }}">{{ __('site/navigation.login') }}</a>

                @if (Route::has('register'))

                <a class="nav-link" href="{{ route('register') }}">{{ __('site/navigation.register') }}</a>

                @endif
                @else

                <span class="nav-link mr-auto text-muted">
                    {{ Auth::user()->name }}
                </span>

                <a class="nav-link" href="#">{{ __('site/navigation.user') }}
                    <span class="badge badge-pill bg-secondary align-text-bottom text-white">7</span>
                </a>

                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('site/navigation.logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                @endguest

            </nav>
        </div>
    </div>