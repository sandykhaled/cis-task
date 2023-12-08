@extends('layouts.app')
@section('content')
    <form method="post" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Category</label>
            <input type="text" class="form-control" name="name" placeholder="Category Name" value="{{ old('name', $category->name) }}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description Name" value="{{ old('description', $category->description) }}">
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>
@endsection
