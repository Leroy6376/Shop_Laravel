@extends('admin.layouts.main')

@section('content header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="row ml-0 mr-0">
                    <h1 class="m-1 mr-3">List of products</h1>
                    <a href="{{route('admin.product.create')}}" class="btn btn-outline-dark">Add product</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
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
                            <th>Price</th>
                            <th>Count</th>
                            <th>Color</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><a href="{{route('admin.product.show', $product->id)}}">{{$product->id}}</a></td>
                                <td>{{$product->item()->title}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->count}}</td>
                                <td>{{$product->color()}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>{{$product->updated_at}}</td>
                                <th>
                                    <div class="row ml-0 mr-0">
                                        <a href="{{route('admin.product.edit', $product->id)}}"
                                           class="btn mr-2 btn-outline-dark">Edit</a>
                                        <form action="{{route('admin.product.destroy', $product->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-outline-danger" value="Delete">
                                        </form>
                                    </div>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@endsection
