@extends('admin.layouts.main')

@section('content header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-1 mr-3">Edit product</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="card card-dark">
        <!-- form start -->
        <form action="{{route('admin.product.update', $product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="form-group">
                    <label>Item</label>
                    <select class="form-control" name="item_id">
                        <option value="{{$product->item()->id}}">{{$product->item()->title}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" name="price"
                           value="{{old('price') ?? $product->price}}">
                    <div class="invalid-feedback">{{$errors->first('price')}}</div>
                </div>
                <div class="form-group">
                    <label>Count</label>
                    <input type="text" class="form-control {{$errors->has('count') ? 'is-invalid' : ''}}" name="count"
                           value="{{old('count') ?? $product->count}}">
                    <div class="invalid-feedback">{{$errors->first('count')}}</div>
                </div>

                <div class="form-group">
                    <label>Color</label>
                    <select class="form-control" name="color_id">
                        @foreach($colors as $color)
                            <option
                                {{(old('color_id') && $color->id == old('color_id')) || ($color->id === $product->color_id && !old('color_id')) ? 'selected' : ''}} value="{{$color->id}}">{{$color->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>New file input</label>
                    <div class="custom-file">
                        <input type="file" name="images[]"
                               class="custom-file-input {{$errors->has('images.*') ? 'is-invalid' : ''}}" multiple>
                        <label class="custom-file-label">Choose file</label>
                        <div class="invalid-feedback">{{$errors->first('images.*')}}</div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-dark">Save</button>
            </div>
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
