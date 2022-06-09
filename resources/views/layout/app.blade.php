<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('partials.logo')
        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')

        <script src="{{asset('js/app.js')}}"></script>
        @yield('script-footer')
                
    </body>
</html>
<!-- <header id="site_header">

    @include('partials.logo')
    <nav class="nav justify-content-center">
        <a class="nav-link active" href="{{route('home')}}">Home</a>
        <a class="nav-link" href="{{route('products')}}">Prodotti</a>
        <a class="nav-link" href="{{route('news')}}">News</a>

    </nav>
</header> -->