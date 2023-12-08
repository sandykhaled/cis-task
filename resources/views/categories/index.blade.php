@extends('layouts.app')
@section('content')

    <table class="table">
        <a href="{{route('categories.create')}}" class="btn btn-primary">Add New Category</a>
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=0;?>
        @foreach($categories as $category)
            <tr>
                <td>{{ ++$i}}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">Edit</a>

                    <form method="post" action="{{ route('categories.destroy', $category->id) }}" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
@endsection
