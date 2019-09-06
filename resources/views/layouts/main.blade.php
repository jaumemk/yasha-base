<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="author" content="{{ Setting::get('former_company_name') }}">
    
    <meta name="generator" content="YB">
    
    <!-- Title -->
    <title>
        @if(!empty($meta['title']))
            {{ $meta['title'] }} | {{  __('meta.default-title') }}
        @else
        {{  __('meta.default-title') }}
        @endif
    </title>

    <!-- Description -->
    @if(!empty($meta['description']))
        <meta name="description" content="{{ $meta['description'] }}">
    @else
        <meta name="description" content="{{ __('meta.default-description') }}">
    @endif

    <!-- Keywords -->
    @if(!empty($meta['keywords']))
        <meta name="keywords" content="{{ $meta['keywords'] }}">
    @else
        <meta name="keywords" content="{{ __('meta.default-keywords') }}">
    @endif
    
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
