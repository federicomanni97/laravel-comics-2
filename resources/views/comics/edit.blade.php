@extends('layouts.app')

@section('title', 'Edit: ' .$comic->title)

@section('content')
<main>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('comics.update', $comic->id)}}" method="POST" class="p-3">
            @csrf
            @method('PUT')
                <input type="text" id="title" value="{{old('title', $comic->title)}}" name="title" placeholder="Title" class="form-control my-2" required>
                <input type="text" id="description" value="{{old('description', $comic->description)}}" name="description" placeholder="Description" class="form-control my-2">
                <input type="text" id="price" value="{{old('price', $comic->price)}}" name="price" placeholder="Price" class="form-control my-2" required>
                <input type="url" id="thumb" name="thumb" placeholder="add url image" class="form-control">
                <input type="text" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}" name="sale_date" placeholder="Sale" class="form-control my-2">
                <input type="text" id="type" name="type" value="{{old('type', $comic->type)}}" placeholder="Comic Type" class="form-control my-2" required>
                <input type="text" id="series" name="series" value="{{old('series', $comic->series)}}" placeholder="Series" class="form-control my-2" required>
                <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
@endsection