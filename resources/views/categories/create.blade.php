@extends('layouts.app')

@section('content')

<div class="container">
<h2>Create new category</h2>

  {!! Form::open(['route'=>'category.store'],'method'=>'post']) !!}
      <div class="form-group">
            {!! Form::label('category','Category Name') !!}
            {!! Form::text('title','',['class'=>'form_control']) !!}
            <button type="submit" class="btn btn-primary">Create</button>
      </div>
{!! Form::close() !!}

    @include('layouts.errors')


</div>
@endsection