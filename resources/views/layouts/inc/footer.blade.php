<div class="bg-light py-5">
    <footer class="text-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="mb-2">
                        @include('inc/logo-svg', ['color' => '#666'])
                    </div>
                    <small class="d-block mb-3 text-muted">
                        {{ __('site/footer.under-logo-text') }}
                    </small>
                </div>
                <div class="col-6 col-md">
                    <h5>{{ __('site/footer.navigation') }}</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="{{ route('index') }}">{{ __('site/navigation.index') }}</a></li>
                    </ul>
                </div>
<div class="col-6 col-md">
                    <h5>{{ __('site/footer.help') }}</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="{{ route('login') }}">{{ __('site/navigation.login') }}</a></li>
                        <li><a class="text-muted" href="{{ route('register') }}">{{ __('site/navigation.register') }}</a></li>
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
                    <h5>{{ __('site/footer.legacy') }}</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="{{ route('cookies') }}">{{ __('site/navigation.cookies') }}</a></li>
                        <li><a class="text-muted" href="{{ route('privacy') }}">{{ __('site/navigation.privacy') }}</a></li>
                        <li><a class="text-muted" href="{{ route('legacy') }}">{{ __('site/navigation.legacy') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-5">
                <p>
                    <a href="#">{!! __('site/footer.back-to-top') !!}</a>
                </p>
                <div class="small">
                    {!! __('site/footer.footer-line') !!}
                </div>
            </div>
        </div>
    </footer>
</div>
