@extends('layouts.app')

@section('title', 'comics')

@section('content')

<main>
    <div class="container">
        <div class="pb-4">
            <span class="fs-3 py-3 px-5 bg-primary text-light">{{$comic->title}}</span>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-12 p-3">
                <div class="d-flex align-items-center">
                    <div class="">
                        <img class="imgwidth2" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    </div>
                    <div class="p-4 d-flex flex-column text-white">
                        <h1 class="text-danger ">{{$comic->title}}</h1>
                        <p class="fs-6">{{$comic->description}}</p>
                        <span class="text-white fs-4">{{$comic->series}}</span>
                        <span class="text-white fs-6">{{$comic->type}}</span>
                        <span class="text-white fs-5"><span class="fs-5 text-success">sale:</span> {{$comic->sale_date}}</span>
                    </div>
                    <span class="fs-5 py-1 px-3 bg-success text-light">{{$comic->price}} </span>
                </div>
            </div>
        </div>
        <div class="text-center p-5">
            <span class="fs-5 py-3 px-5 bg-primary text-light"><a class="fs-5 text-white" href="{{route('comics.index')}}"><i class="fa-solid fa-arrow-left"></i> Back</a></span>
        </div>    
    </div>
</main>
@endsection