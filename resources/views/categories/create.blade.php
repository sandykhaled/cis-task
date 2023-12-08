@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('categories.store')}}">
        @csrf
        <div class="form-group">
            <label>Categotry</label>
            <input type="text" class="form-control" placeholder="Category Name" name="name">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" placeholder="Description Name" name="description">
        </div>
        <button type="submit" class="btn btn-success">Add</button>
    </form>
@endsection
