<div class="bg-light py-5">
    <footer class="text-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="mb-2">
                        @include('inc/logo-svg', ['color' => '#666'])
                    </div>
                    <small class="d-block mb-3 text-muted">
                        {{ __('footer.under-logo-text') }}
                    </small>
                </div>
                <div class="col-6 col-md">
                    <h5>{{ __('footer.navigation') }}</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="{{ route('index') }}">{{ __('navigation.index') }}</a></li>
                    </ul>
                </div>
<div class="col-6 col-md">
                    <h5>{{ __('footer.help') }}</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="{{ route('login') }}">{{ __('navigation.login') }}</a></li>
                        <li><a class="text-muted" href="{{ route('register') }}">{{ __('navigation.register') }}</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Social</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Facebook</a></li>
                        <li><a class="text-muted" href="#">Twitter</a></li>
                        <li><a class="text-muted" href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>{{ __('footer.legacy') }}</h5>
                    {{--
                    <!-- This routes needs to be converted to dynamic -->
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="{{ route('cookies') }}">{{ __('navigation.cookies') }}</a></li>
                        <li><a class="text-muted" href="{{ route('privacy') }}">{{ __('navigation.privacy') }}</a></li>
                        <li><a class="text-muted" href="{{ route('legacy') }}">{{ __('navigation.legacy') }}</a></li>
                    </ul>
                    --}}
                </div>
            </div>
            <div class="mt-5">
                <p>
                    <a href="#">{!! __('footer.back-to-top') !!}</a>
                </p>
                <div class="small">
                    {!! __('footer.footer-line') !!}
                </div>
            </div>
        </div>
    </footer>
</div>
