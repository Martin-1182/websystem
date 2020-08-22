<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <meta name="author" content="WebSystem" href="https://websystem.sk">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="e-shop, webovú stránku, blog, aplikáciu, vývoj, design">
    <meta name="description" content="Venujeme sa vývoju a designu webových stránok a aplikácií. Ak potrebujete e-shop webovú stránku, alebo blog či
        aplikáciu na mieru,
        tak neváhajte a kľudne sa nám ozvyte upresníme detaili a začneme na tom pracovať.">
    <meta property="og:site_name" content="WebSystem">
    <meta property="og:locale" content="sk_SK">
    <meta property="og:image:height" content="503">
    <meta property="og:image:width" content="961">
    <meta property="og:description"
        content="Ak potrebujete e-shop webovú stránku, alebo blog či aplikáciu na mieru, tak neváhajte a pokojne nás kontaktujte upresníme detaili a začneme na tom pracovať">
    <meta property="og:title" content="WebSystem | Tvorba E-shopov Portálov & Webstránok">
    <meta property="og:url" content="https://websystem.sk">
    <meta property="og:image" content="{{ asset('og/facebook_og_img.png') }}">
    <!-- end SEO -->

    <!-- end Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- end Favicons -->

    <title>Tvorba E-shopov Portálov & Webstránok</title>

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>



<body class=" bg-gray-900 text-white font-serif">
    <header class="border-t-14 border-green-700">
        <div id="navBar">
            @if (\Request::is('cookies', 'ochrana-osobnych-udajov'))
            <nav-bar-nav />
            @else
            <nav-bar />
            @endif

        </div>
    </header>
    <main>
        <div class="flex-grow">
            @yield('content')
        </div>
    </main>
    @include('cookieConsent::index')
    <footer class="bg-green-700 text-white">
        @include('partials.footer')
    </footer>
</body>

</html>
