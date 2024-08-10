@extends('admin.layouts.main')

@section('content header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-1 mr-3">Show item </h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
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
                            <th>Category</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
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
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-6">
            <!-- Custom Tabs -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Description</h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            {{$item->description}}
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
        </div>


        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Details</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <dl>
                        <dt>Details lists</dt>
                        <dd>{{$item->details}}</dd>
                    </dl>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
