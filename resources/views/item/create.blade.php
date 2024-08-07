@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="col-sm-0">
            <h1 class="m-0">Add item</h1>
        </div>
    </div>
    <div class="container">
        <form action="{{route('item.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
            <div class="form-group">
                <label>Details</label>
                <textarea class="form-control" name="details" placeholder="Details"></textarea>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id">
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
