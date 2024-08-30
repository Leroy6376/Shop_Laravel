@extends('admin.layouts.main')

@section('content header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-1 mr-3">Show product </h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')

    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="{{asset('plugins/ekko-lightbox/ekko-lightbox.css')}}">

    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0">

                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Item</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Count</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->item()->title}}</td>
                            <td>{{$product->color()}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->count}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>{{$product->updated_at}}</td>
                            <th>
                                <div class="row ml-0 mr-0">
                                    <a href="{{route('admin.product.edit', $product->id)}}"
                                       class="btn mr-2 btn-outline-dark">Edit</a>
                                    <form action="{{route('admin.product.destroy', $product->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <div class="top-cover center-block">
                                            <input type="submit" class="btn btn-outline-danger" value="Delete">
                                        </div>
                                    </form>
                                </div>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Images</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($product->images() as $image)
                                    <div class="col-sm-2">
                                        <a href="{{$image->url}}" data-toggle="lightbox"
                                           data-title="{{$image->name}}" data-gallery="gallery">
                                            <img src="{{$image->url}}" class="img-fluid mb-2"/>
                                        </a>
                                        <form action="{{route('admin.image.destroy', $image->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-outline-danger" value="Delete">
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function (event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });
        })
    </script>
@endsection




