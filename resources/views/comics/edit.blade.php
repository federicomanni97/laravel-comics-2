@extends('layouts.app')

@section('title', 'Edit: 'Comic Create')

@section('content')

<main>
    <div class="container">
        <form action="{{route('comics.store')}}" method="POST" class="p-3">
            @csrf
            @method('PUT')
                <input type="text" id="title" value="{{old('title', $comics->title}}" name="title" placeholder="Title" class="form-control my-2" required>
                <input type="text" id="description" value="{{old('description', $comics->description}}" name="description" placeholder="Description" class="form-control my-2">
                <input type="text" id="price" value="{{old('price', $comics->price}}" name="price" placeholder="Price" class="form-control my-2" required>
                <input type="text" id="sale_date" name="sale_date" placeholder="Sale" class="form-control my-2">
                <input type="text" id="type" name="type" placeholder="Comic Type" class="form-control my-2" required>
                <input type="text" id="series" name="series" placeholder="Series" class="form-control my-2" required>
                <button type="submit" class="btn btn-primary my-4">Add Comic</button>
        </form>
    </div>
</main>

@endsection