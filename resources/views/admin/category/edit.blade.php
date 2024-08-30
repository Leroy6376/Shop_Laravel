@extends('admin.layouts.main')

@section('content header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <h1 class="m-1">Edit category</h1>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-dark">
        <!-- form start -->
        <form action="{{route('admin.category.update', $category->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title" placeholder="Enter title" value="{{old('title') ?? $category->title}}">
                    <div class="invalid-feedback">{{$errors->first('title')}}</div>
                </div>
                <div class="form-group">
                    <label>Parent category</label>
                    <select class="form-control" name="parent_id">
                        <option value="{{null}}">None</option>
                        @foreach($categories as $cat)
                            <option {{(old('parent_id') && $cat->id == old('parent_id')) || ($cat->id === $category->parent_id && !old('parent_id')) ? 'selected' : ''}} value="{{$cat->id}}">{{$cat->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-dark">Save</button>
            </div>
        </form>
    </div>
@endsection
