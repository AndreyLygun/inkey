@extends('layouts.app')

@section('scripts')
    <script src="/lib/jquery/jquery-3.6.0.min.js"></script>
    <script src="/lib/lightbox/lightbox.js"></script>
    <link href="/lib/lightbox/lightbox.css" rel="stylesheet">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=d5251b8b-7907-42ff-bbf1-284fde59a90a" type="text/javascript"></script>
    <script src="/lib/yandex/maps.js" type="text/javascript"></script>
    <style type="text/css">
        #map {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
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
                <a href="/photos/{{$Photo->file}}" class="col-3 col-md-1 my-2" data-lightbox="images" >
                    <img src="/photos/{{$Photo->file}}" class="img-fluid" >
                </a>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6">
                <div id="map" style="height: 500px"></div>
            </div>
        </div>
    </div>
@endsection
