<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="author" content="{{ config('site.former-company-info.former_company_name') }}">
    
    <meta name="generator" content="YB [dev-develop] <- chng ths 4 vrsn!">
    
    <title>
        {{  __('site/meta.title') }}
    </title>
    <meta name="description" content="{{ __('site/meta.description') }}">
    <meta name="keywords" content="{{ __('site/meta.keywords') }}">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
</head>

<body data-route-name="{{ Route::currentRouteName() }}" data-route-action="{{ Route::current()->getActionMethod() }}" class="route-action-{{ Route::currentRouteName() }} route-name-{{ Route::current()->getActionMethod() }}">
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
        @include('layouts/inc/footer')
    </div>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
</body>

</html>
