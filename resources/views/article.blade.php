@extends('layouts.app')

@section('scripts')
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/lightbox/js/lightbox.js"></script>
    <link href="/lightbox/css/lightbox.css" rel="stylesheet">
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 colm-md-8 col-lg-6">
                <h1>{{$Article->title}}</h1>
                <p>{{$Article->description}}</p>
            </div>
        </div>
        <div class="row">
            @foreach($Article->photos as $Photo)
                <a href="/photos/{{$Photo->file}}" class="col-4 col-md-1" data-lightbox="images" >
                    <img src="/photos/{{$Photo->file}}" class="img-fluid" >
                </a>
            @endforeach
        </div>
    </div>
@endsection
