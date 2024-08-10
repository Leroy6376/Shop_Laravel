@extends('admin.layouts.main')

@section('content')
{{--    @include('includes.shopCollections')--}}

    @include('includes.newProducts')

    @include('includes.hotDealSection')

    @include('includes.topSelling')

{{--    @include('includes.miniTopSelling')--}}

    @include('includes.newsletter')
@endsection
