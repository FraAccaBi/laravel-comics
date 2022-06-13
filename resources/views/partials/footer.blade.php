<footer id="site_footer">
    <section class="container-fluid footer-top">
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
    </section>
    <section class="container-fluid footer-main">
        <div class="container">
            <div class="row text-light">
                
                <div class="col-4 row-cols-3 d-flex flex-wrap"> 
                    
                        @foreach ($cards as $card)
                        <span class="text-uppercase"> 
                            {{ $card['name']}} 
                        </span>
                        
                            @foreach ($card['links'] as $link)
                            <p>
                                {{ $link }}
                            </p>
                            @endforeach 
                         
                        @endforeach
                    
                      
                </div>
            </div>    
        </div>   
    </section>
    <section class="container-fluid footer-bottom">
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
    </section>
</footer>