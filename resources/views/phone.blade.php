@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($Articles as $Article)
                <div class="col-8 col-md-10">
                    <p class="h3">{{$Article->title}}</p>
                    <p><a href="/articles/{{$Article->id}}">Подробней</a></p>
                </div>
                <div class="col-4 col-md-2">
                    <img src="/photos/{{$Article->photo}}" class="img-fluid"/>
                </div>
            @endforeach
        </div>
    </div>
@endsection
