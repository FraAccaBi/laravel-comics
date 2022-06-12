@extends('layout.app')
    @section('content')
    <div class="container">
        <h1>{{$comic['title']}}</h1>
        <div class="top-main row">
            <div class="col-4">
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>
            <div class="col-8">
                <h4>
                    Description
                </h4>
                <p>
                    {{ $comic['description'] }}
                </p>
            </div>
        </div>
        <div class="bottom-main row">
            <div class="col-4">
               <h5>
                   Artists
               </h5>
               @foreach ($comic['artists'] as $artist)
               <p>
                {{ $artist }}
               </p> 
               @endforeach
            </div>
            <div class="col-4">
            <h5>
                   Writers
               </h5>
               @foreach ($comic['writers'] as $writer)
               <p>
                {{ $writer }}
               </p> 
               @endforeach
            </div>
            <div class="col-4">
                <img class="adv" src="../img/rewards.jpg" alt="" href="">
            </div>
        </div>
        
    </div>
    
        
    @endsection