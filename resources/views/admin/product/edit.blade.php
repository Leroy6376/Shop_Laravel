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
                    <input type="text" class="form-control" name="price" value="{{$product->price}}">
                </div>
                <div class="form-group">
                    <label>Count</label>
                    <input type="text" class="form-control" name="count" value="{{$product->count}}">
                </div>

                <div class="form-group">
                    <label>Color</label>
                    <select class="form-control" name="color_id">
                        @foreach($colors as $color)
                            <option
                                {{$color->id === $product->color_id ? 'selected' : ''}} value="{{$color->id}}">{{$color->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>New file input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="images[]" class="custom-file-input" multiple>
                            <label class="custom-file-label">Choose file</label>
                        </div>
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
