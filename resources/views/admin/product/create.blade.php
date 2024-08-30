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
    <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Item</label>
                <select class="form-control" name="item_id">
                    @foreach($items as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label>Count</label>
                <input type="text" class="form-control" name="count">
            </div>

            <div class="form-group">
                <label>Color</label>
                <select class="form-control" name="color_id">
                    @foreach($colors as $color)
                        <option value="{{$color->id}}">{{$color->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="images[]" class="custom-file-input" multiple>
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-dark">Add</button>
            </div>
        </div>
        <!-- /.card-body -->
    </form>
@endsection

@section('script')
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection








