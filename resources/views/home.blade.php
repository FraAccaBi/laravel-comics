<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

   <div class="over-header text-light text-uppercase ">
       <div class="container d-flex justify-content-end">
            <div class="visa-link p-1">dc power visa </div>
            <div class="dc-sites p-1">additional dc sites</div>
       </div>
   </div>
    <div class="container">
        @include('partials.header')
    </div>
    <div class="jumbo"></div>
    <div class="container">
       
        <div class="row">
        @foreach ($comics as $comic)
            <div class="comic-card col-2">

                
                <img class="d-inline" src="{{ $comic['thumb'] }}" alt=""> 
                

            </div>
            @endforeach
        </div>
       
               
    </div>
    

    
</body>

</html>