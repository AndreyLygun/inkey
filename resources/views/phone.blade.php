@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($Articles as $Article)
                    <h1>{{$Article->title}}</h1>
                    <p><a href="/articles/{{$Article->id}}">Подробней</a></p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
