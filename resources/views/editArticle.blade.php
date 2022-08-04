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
    <form class="container" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <x-form.input key="title" label="Заголовок объявления" class="mb-3" value="{{$Article->title}}"></x-form.input>
                <x-form.input key="phone" label="Номер телефона объявления" class="mb-3" value="{{$Article->phone}}"></x-form.input>
                <x-form.textarea key="description" label="Текст объявления" class="mb-3" value="{{$Article->description}}"></x-form.textarea>
                <x-form.input key="city" label="Город" class="mb-3" value="{{$Article->city}}"></x-form.input>
                <x-form.input key="address" label="Адрес размещения объявления" class="mb-3" value="{{$Article->address}}"></x-form.input>
                <x-form.input key="coord" label="Координаты" class="mb-3" value="{{$Article->coord}}"></x-form.input>
                <button class="btn btn-primary">Определить координаты по адресу</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div id="map" style="height: 300px"></div>
            </div>
        </div>
        <div class="row">
            @foreach($Article->photos as $Photo)
                <a href="/photos/{{$Photo->file}}" class="col-3 col-md-2 my-2" data-lightbox="images" >
                    <img src="/photos/{{$Photo->file}}" class="img-fluid img-thumbnail"  >
                </a>
            @endforeach
        </div>
    </form>
@endsection
