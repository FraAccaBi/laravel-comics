@extends('layout.app')
    @section('content')
    <div class="container">
       
        <div class="row">
        @foreach ($comics as $comic)
            <div class="comic-card col-2">

                
                <img class="d-inline" src="{{ $comic['thumb'] }}" alt=""> 
                

            </div>
            @endforeach
        </div>
       
               
    </div>
        
    @endsection