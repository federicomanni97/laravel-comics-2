@extends('layouts.app')

@section('title', 'Home')

@section('content')

<main>
    <div class="container">
        <div class="pb-4">
            <span class="fs-3 py-3 px-5 bg-primary text-light">Current Series</span>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-md-4 col-lg-2 py-3">
                    <div class="">
                        <img class="imgwidth" src="{{$product['thumb']}}" alt="{{$product['title']}}">
                    </div>
                    <div class="py-2">
                        <span class="text-white">{{$product['series']}}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center p-5">
            <span class="fs-5 py-3 px-5 bg-primary text-light">Load More</span>
        </div>    
    </div>
    <div class="text-light bg-primary d-flex align-items-center justify-content-between p-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                @foreach ($advices as $element)
                <div class="smallwidth">
                    <img class="smallwidth" src="{{$element['image']}}" alt="">
                </div>
                <div>
                    <span class="p-3">{{$element['title']}}</span>
                </div>                 
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection