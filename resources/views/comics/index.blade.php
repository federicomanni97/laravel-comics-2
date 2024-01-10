@extends('layouts.app')

@section('title', 'comics')

@section('content')

<main>
    <div class="container">
        <div class="pb-4">
            <span class="fs-3 py-3 px-5 bg-primary text-light">Current Series</span>
            <form class="mt-4" action="{{route('comics.index')}}" method="GET">
                <select name="search" id="search" class="p-1 bg-primary text-white border-0 fs-5">
                    <option value="">All</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
                <button type="submit" class="btn btn-danger ms-3">Cerca</button>
            </form>
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
                        <button type="submit" class="p-2 border-0 my-2 bg-primary text-white cancel-button" data-item-title="{{$product->title}}">Remove</button>
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
@include('partials.modal_delete');
@endsection