@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="col-sm-0">
            <h1 class="m-0">Add category</h1>
        </div>
    </div>
    <div class="container">
        <form action="{{route('category.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Parent category</label>
                <select class="form-control" name="parent_id">
                    <option value="{{null}}">None</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Add">
            </div>
        </form>
    </div>
@endsection
