@extends('layout.app')

@section('content')
<br><br>
<div class="container shadow rounded p-3">
<form action="{{route('publisher.create')}}" method="POST">
    @csrf
    <h1>Create Publisher Data</h1>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{old('name')}}">
    </div>
    @error('name')
        <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="description" value="{{old('description')}}" >
    </div>
    @error('description')
        <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Location</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="location"  value="{{old('location')}}">
    </div>

    @error('release_date')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
