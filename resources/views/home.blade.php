@extends('layouts.app')

@section('content')

<div class="container-fluid pt-10">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @include('filters.index')
        </div>
        <div class="col-md-8">
            <div id="posts-content">
                @include('ads.list', ['colnumber' => 4])
            </div>
        </div>
    </div>
</div>

@section('nav-panel')
    @include('ads.search-panel')
@endsection

@endsection
