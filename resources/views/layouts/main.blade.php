<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ __('site.meta.description') }}">
    <meta name="author" content="Javajan Serveis Internet SL">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>@yield('page_title') | {{ __('site/meta.title') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
</head>

<body>
    <header>
        <div id="navigation">
            @include('layouts/inc/navigation')
            @include('layouts/inc/user-navigation')
        </div>
    </header>
    <div id="page">
        <main role="main" id="content">
            @yield('content')
        </main>
        <div class="bg-light py-5">
            <footer class="text-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="mb-2">
                            @include('inc/logo-svg', ['color' => '#666'])
                            </div>
                            <small class="d-block mb-3 text-muted">© 2018-2019</small>
                        </div>
                        <div class="col-6 col-md">
                            <h5>Páginas</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Inicio</a></li>
                                <li><a class="text-muted" href="#">Noticias</a></li>
                                <li><a class="text-muted" href="#">Contacto</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h5>Ayuda</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Preguntas</a></li>
                                <li><a class="text-muted" href="#">Manuales</a></li>
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
                            <h5>Empresa</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Cookies</a></li>
                                <li><a class="text-muted" href="#">Privacy</a></li>
                                <li><a class="text-muted" href="#">Terms</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-5">
                    <p>
                        <a href="#">{!! __('site/basics.back-to-top') !!}</a>
                    </p>
                    <div class="small">
                    {!! __('site/basics.footer') !!}
                    </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
