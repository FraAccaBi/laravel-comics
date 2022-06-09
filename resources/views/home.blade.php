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
    <!-- <header>
        <nav class="nav justify-content-center">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/about">About</a>
        </nav>
    </header> -->

    <h1>hello dc</h1>
    <div>
        <header >
            
            <nav >
                <ul >
                    @foreach ($comics as $comic)
                    <li>
                        {{ $comic['title'] }}
                    </li>
                    @endforeach
                </ul>
            </nav>
        </header>
    </div>

    
</body>

</html>