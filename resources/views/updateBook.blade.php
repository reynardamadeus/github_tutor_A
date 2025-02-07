@extends('layout.app')

@section('content')
<br><br>
<div class="container shadow rounded p-3">
<form action="{{route('book.update', $book->id)}}" method="POST">
    @method('patch')
    @csrf
    <h1>Update Book Data</h1>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$book->name}}">
    </div>
    @error('name')
        <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="description" value="{{$book->description}}" >
    </div>
    @error('description')
        <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Author</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="author"  value="{{$book->author}}">
    </div>

    @error('author')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="price"  value="{{$book->price}}">
    </div>
    @error('price')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Stock</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="stock"  value="{{$book->stock}}">
    </div>
    @error('stock')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Release Date</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="release_date"  value="{{$book->release_date}}">
    </div>
    @error('release_date')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
