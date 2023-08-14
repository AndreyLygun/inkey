@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="h5">По номеру {{$Articles[0]->phone}} мы нашли {{$Articles->count()}} объявления:</p>
            </div>
        </div>
        <hr>
        @foreach($Articles as $Article)
            <div class="row">
                <div class="col-8 col-md-10">
                    <p class="h3">{{$Article->title}}</p>
                    <p><a href="/articles/{{$Article->id}}">Подробней</a></p>
                </div>
                <div class="col-4 col-md-2">
                    <img src="/photos/{{$Article->photo}}" class="img-fluid"/>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
