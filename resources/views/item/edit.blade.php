@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="col-sm-0">
            <h1 class="m-0">Edit item</h1>
        </div>
    </div>
    <div class="container">
        <form action="{{route('item.update', $item->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{$item->name}}" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" >{{$item->description}}</textarea>
            </div>
            <div class="form-group">
                <label>Details</label>
                <textarea class="form-control" name="details">{{$item->details}}</textarea>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option {{$category->id === $item->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Save">
            </div>
        </form>
    </div>
@endsection
