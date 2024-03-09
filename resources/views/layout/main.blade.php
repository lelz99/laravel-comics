<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comic | @yield('title')</title>
    <link rel="icon" href="{{Vite::asset('resources/img/favicon.ico')}}" type="image/icon">

    @vite('resources/js/app.js')
</head>
<body>
    {{-- Header --}}
    @include('includes.header')

    <main>
        {{-- Jumbotron --}}
        <section id="jumbotron"></section>

        {{-- Main Content --}}
        @yield('main-content')

        {{-- Info --}}
        @include('includes.section-info')
    </main>

    {{-- Footer Top --}}
    @include('includes.footer-top')

    {{-- Footer Bottom --}}
    @include('includes.footer-bottom')
</body>
</html>