@extends('admin.layouts.main')

@section('content header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="row ml-0 mr-0">
                    <h1 class="m-1 mr-3">List of items</h1>
                    <a href="{{route('admin.item.create')}}" class="btn btn-outline-dark">Add item</a>
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
                            <th>Title</th>
                            <th>Description</th>
                            <th>Details</th>
                            <th>Category</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><a href="{{route('admin.item.show', $item->id)}}">{{$item->title}}</a></td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->details}}</td>
                                <td>{{$item->categoryName()}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <th>
                                    <div class="row ml-0 mr-0">
                                        <a href="{{route('admin.item.edit', $item->id)}}"
                                           class="btn mr-2 btn-outline-dark">Edit</a>
                                        <form action="{{route('admin.item.destroy', $item->id)}}" method="post">
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
