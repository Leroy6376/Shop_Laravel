@extends('admin.layouts.main')

@section('content header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-1 mr-3">Add item</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="card card-dark">
        <!-- form start -->
        <form action="{{route('admin.item.store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title"
                           placeholder="Enter title" value="{{old('title')}}">
                    <div class="invalid-feedback">{{$errors->first('title')}}</div>
                </div>
                <div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
                                  name="description" placeholder="Enter ...">{{old('description')}}</textarea>
                        <div class="invalid-feedback">{{$errors->first('description')}}</div>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label>Details</label>
                        <textarea class="form-control {{$errors->has('details') ? 'is-invalid' : ''}}" name="details"
                                  placeholder="Enter ...">{{old('details')}}</textarea>
                        <div class="invalid-feedback">{{$errors->first('details')}}</div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option {{$category->id == old('category_id') ? 'selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
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
