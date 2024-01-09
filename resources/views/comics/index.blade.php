@extends('layouts.app')

@section('title', 'comics')

@section('content')

<main>
    <div class="container">
        <div class="pb-4">
            <span class="fs-3 py-3 px-5 bg-primary text-light">Current Series</span>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-primary">{{session('message')}}</div>
        @endif    
        <div class="row">
            @foreach ($comics as $product)
                <div class="col-12 col-md-4 col-lg-2 py-3">
                    <div class="">
                        <img class="imgwidth" src="{{$product->thumb}}" alt="{{$product->title}}">
                    </div>
                    <div class="py-2 d-flex flex-column">
                        <span class="text-white py-2">{{$product->series}}</span>
                    </div>
                    <span class="bg-danger p-2"><a class="text-white" href="{{route('comics.show', $product->id)}}">Read More</a></span>
                    <form action="{{route('comics.destroy', $product->id)}}" method="POST">
                        @csrf
                        @method ('DELETE')
                        <button type="submit" class="p-1 my-2 bg-primary text-white">Remove</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="text-center p-5">
            <span class="fs-5 py-3 px-5 bg-primary text-light">Load More</span>
            <span class="fs-5 py-3 px-5 bg-primary text-light"><a href="{{route('comics.create')}}" class="text-light">Create Your Comics</a></span>
        </div>    
    </div>
    <div class="text-light bg-primary d-flex align-items-center justify-content-between p-4">
        <div class="container">
            
        </div>
    </div>
</main>

@endsection