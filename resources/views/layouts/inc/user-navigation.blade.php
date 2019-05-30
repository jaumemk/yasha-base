    <div class="bg-light">
        <div class="container">
            <nav class="nav justify-content-end">
                @guest

                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                @if (Route::has('register'))

                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                @endif
                @else

                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>

                <a class="nav-link" href="#">Mi cuenta</a>
                
                <a class="nav-link" href="#">
                    Notificaciones
                    <span class="badge badge-pill bg-secondary align-text-bottom text-white">7</span>
                </a>

                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                @endguest

            </nav>
        </div>
    </div>