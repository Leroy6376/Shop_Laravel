@extends('admin.layouts.main')

@section('content header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-1 mr-3">Add product</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="card card-dark">
        <!-- form start -->
        <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Item</label>
                    <select class="form-control" name="item_id">
                        @foreach($items as $item)
                            <option {{$item->id == old('item_id') ? 'selected' : ''}} value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" name="price"
                           value="{{old('price')}}">
                    <div class="invalid-feedback">{{$errors->first('price')}}</div>
                </div>
                <div class="form-group">
                    <label>Count</label>
                    <input type="text" class="form-control {{$errors->has('count') ? 'is-invalid' : ''}}" name="count"
                           value="{{old('count')}}">
                    <div class="invalid-feedback">{{$errors->first('count')}}</div>
                </div>

                <div class="form-group">
                    <label>Color</label>
                    <select class="form-control" name="color_id">
                        @foreach($colors as $color)
                            <option {{$color->id == old('color_id') ? 'selected' : ''}} value="{{$color->id}}">{{$color->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>File input</label>
                    <div class="custom-file">
                        <input type="file" name="images[]"
                               class="custom-file-input {{$errors->has('images.*') ? 'is-invalid' : ''}}" multiple>
                        <label class="custom-file-label">Choose file</label>
                        <div class="invalid-feedback">{{$errors->first('images.*')}}</div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-dark">Add</button>
                </div>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection








