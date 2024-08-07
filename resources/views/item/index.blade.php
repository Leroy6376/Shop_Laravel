@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="col-sm-0">
            <h1 class="m-0">List of items</h1>
        </div>
    </div>

    <div class="container">
        <div>
            <a href="{{route('item.create')}}" class="btn btn-default">Add item</a>
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
            @foreach($items as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td><a href="{{route('item.show', $item->id)}}">{{$item->name}}</a></td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->details}}</td>
                    <td>{{$item->categoryName()}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
