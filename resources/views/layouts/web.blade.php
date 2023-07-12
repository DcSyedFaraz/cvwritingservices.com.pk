<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

     <meta name="robots" content="index,follow"> 
    {{-- <meta name="robots" content="noindex"> --}}

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">

    {{-- Meta --}}
    <meta name="author" content="@yield('meta_author', '')">
    <meta name="keywords" content="@yield('meta_keywords', '')">
    <meta name="description" content="@yield('description')" />
    <meta property="og:site_name" content="{{ '' }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="@yield('canonical')" />
    <link rel="canonical" href="@yield('canonical')" />

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">

    {{-- intl Tel Input CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style>
        .iti {
            width: 100%;
        }


    </style>

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{--<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">--}}

    @yield('styles')

    {{-- Jquery --}}
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>  --}}

</head>

<body class="">

    <div class="w-full bg-hero-bg bg-no-repeat bg-cover bg-right">
        <div class="w-full text-gray-700 dark-mode:text-gray-200 dark-mode:bg-gray-800 px-4 lg:px-16">
            @include('partials.frontend.navbar')
            @yield('hero-section')
        </div>
    </div>

    {{-- @include('partials.frontend.navbar')

    @yield('hero-section') --}}

    @yield('content')

    @include('partials.frontend.footer')
    {{-- Tawto --}}
     {{ \TawkTo::widgetCode('https://embed.tawk.to/63ce729e47425128790f26e9/1gnf6vfjf') }} 
    {{-- scripts --}}

    {{-- jQuery cdn --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- AJAX jQuery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- Alpine Js Cdn --}}
    <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    {{-- FontAwsome 6 --}}
    <script src="https://kit.fontawesome.com/2c6b599d00.js" crossorigin="anonymous"></script>
    {{-- intl Tel Input JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    @yield('scripts')
</body>

</html>
