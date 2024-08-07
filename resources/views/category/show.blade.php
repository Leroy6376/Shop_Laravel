@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <a href="{{route('category.edit', $category->id)}}" class="btn btn-default">Edit</a>
            </div>
            <form action="{{route('category.destroy', $category->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Parent_id</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->title}}</td>
                <td>{{$category->parent_id}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
