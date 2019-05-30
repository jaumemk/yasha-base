
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4 text-muted ">
                    <h4 class="font-weight-light">About Javajan Base</h4>
                    {!! __('site/basics.about') !!}
                </div>
                <div class="col-sm-4 offset-md-1 py-4 text-right">
                    <h4 class="text-white font-weight-light text-white-50">Side info</h4>
                    <p class="text-white-50">
                        Multipourpose functiona area (contact, info, login...)
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow">
        <div class="container d-flex justify-content-end">
            <a href="#" class="navbar-brand d-flex align-items-center mr-auto">
                @include('inc/logo-svg', ['color' => '#ffffff'])
                <strong class="font-weight-light">Javajan Base</strong>
            </a>

            <nav class="">
                <a class="btn btn-link active" href="#">Inicio</a>
                <a class="btn btn-link" href="#">Alta</a>
                <a class="btn btn-link" href="#">Preguntas</a>
                <button class="btn btn-link" href="#" data-toggle="collapse" data-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">Contacto</button>
        
                <button class="btn btn-link dropdown-toggle position-relative" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Idioma
                    <div class="dropdown-menu mt-3">
                        <a class="dropdown-item" href="#">Español</a>
                        <a class="dropdown-item" href="#">Català</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <span class="dropdown-item text-muted">Français</span>
                    </div>
                </button>

            </nav>
        </div>
    </div>

