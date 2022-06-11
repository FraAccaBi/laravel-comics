@extends('layout.app')

@section('content')
<div class="jumbo"></div>
<div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="comic-card col-2">
                <a class="d-inline"  href="{{route('comic',['title' => urlencode($comic['title']) ])}}">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </a>
            </div>
            @endforeach
        </div>           
    </div>
    
@endsection
    