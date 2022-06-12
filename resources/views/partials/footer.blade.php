<footer id="site_footer">
    <div class="container-fluid footer-top">
            <div class="container">
                <ul class="row row-cols-5 list-unstyled">
                    @foreach ($links as $link)
                    <div class="col">
                        <img src="{{ $link['url'] }}" alt="">
                        {{ $link['text'] }}
                    </div>
                    @endforeach
                </ul>
            </div>
    </div>
    <div class="container-fluid footer-main">
        <div class="container">
            <div class="row">
                
                <div class="col-4 row-cols-3 d-flex flex-wrap"> 
                    <div class="col">
                        @foreach ($cards as $card)
                        <span> 
                            {{ $card['name']}} 
                        </span>
                        <ul class="list-unstyled">
                            @foreach ($card['links'] as $link)
                            <li>
                                {{ $link }}
                            </li>
                            @endforeach 
                        </ul> 
                        @endforeach
                    </div>
                      
                </div>
                
        </div>
        
    </div>
    <div class="container-fluid footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="button col">
                        sign up
                    </div>
                    <div class="socials col">
                        follow us
                    </div>
                </div>
            </div>
    </div>
</footer>