
<header >
            
            <nav >
                <ul class="list-unstyled d-flex justify-content-end py-4">
                    @foreach ($navbar as $element)
                    <li class="text-uppercase">
                        {{ $element['text'] }}
                    </li>
                    @endforeach
                </ul>
            </nav>
        </header>