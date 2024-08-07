@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <a href="{{route('item.edit', $item->id)}}" class="btn btn-default">Edit</a>
            </div>
            <form action="{{route('item.destroy', $item->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Details</th>
                <th scope="col">Category</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</a></td>
                <td>{{$item->description}}</td>
                <td>{{$item->details}}</td>
                <td>{{$item->categoryName()}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
