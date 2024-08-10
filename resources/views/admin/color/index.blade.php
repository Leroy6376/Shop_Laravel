@extends('admin.layouts.main')

@section('content header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="row ml-0 mr-0">
                    <h1 class="m-1 mr-3">List of colors</h1>
                    <a href="{{route('admin.color.create')}}" class="btn btn-outline-dark">Add color</a>
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
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($colors as $color)
                            <tr>
                                <td>{{$color->id}}</td>
                                <td>{{$color->title}}</td>
                                <td>{{$color->created_at}}</td>
                                <td>{{$color->updated_at}}</td>
                                <th>
                                    <div class="row ml-0 mr-0">
                                        <a href="{{route('admin.color.edit', $color->id)}}"
                                           class="btn mr-2 btn-outline-dark">Edit</a>
                                        <form action="{{route('admin.color.destroy', $color->id)}}" method="post">
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
