@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="col-sm-0">
            <h1 class="m-0">List of categories</h1>
        </div>
    </div>

    <div class="container">
        <div>
            <a href="{{route('category.create')}}" class="btn btn-default">Add category</a>
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
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td><a href="{{route('category.show', $category->id)}}">{{$category->title}}</a></td>
                    <td>{{$category->parent_id}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
