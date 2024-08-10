@extends('admin.layouts.main')

@section('content header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                    <h1 class="m-1">Add category</h1>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-dark">
        <!-- form start -->
        <form action="{{route('admin.category.store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
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
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-dark">Add</button>
            </div>
        </form>
    </div>
@endsection
