@extends('layouts.app')

@section('content')
<div class="container">
<h1>Categories</h1>
<a href="{{route('category.create')}}" class="btn btn-primary" >Create new Category </a>
<hr>
@include('categories.category')
</div>

@endsection