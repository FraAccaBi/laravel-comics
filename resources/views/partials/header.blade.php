
<header class="container" >        
    <nav class="d-flex row align-items-center">
        <a class="col-2 logo-sm" href="{{route('home')}}">
            <img  src="../../img/dc-logo.png" alt="" href="">
        </a>
        <ul class="col-8 list-unstyled d-flex justify-content-around py-4">
            @foreach ($navbar as $element)
            <li class="text-uppercase">
                <a class="text-decoration-none" href="{{route(strtolower($element['text']))}}">
                    {{ $element['text'] }}
                </a>
            </li>
            @endforeach
        </ul>
        <div class="col-2 search"></div>
    </nav>
</header>