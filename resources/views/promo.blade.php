@extends('layouts.main')

@section('content')
    <div class="container p-0">
        <div class="row">
            @foreach($Articles as $Article)
                <div class="col-12">
                    <p class="h2">{{ $Article->title }}</p>
                    <p class="h4">{{ $Article->phone }}</p>
                    <p> {{ $Article->description }}</p>
                    <div class="row">
                        @foreach($Article->photos as $photo)
                            <div class="col-3 col-md-1">
                                <img src="/photos/{{$photo->file}}" class="img-fluid">
                            </div>
                        @endforeach

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
