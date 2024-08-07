@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="col-sm-0">
            <h1 class="m-0">Edit category</h1>
        </div>
    </div>
    <div class="container">
        <form action="{{route('category.update', $category->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{$category->title}}" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Parent category</label>
                <select class="form-control" name="parent_id" value="{{$category->parent_id}}">
                    <option value="{{null}}">None</option>
                    @foreach($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Save">
            </div>
        </form>
    </div>
@endsection
