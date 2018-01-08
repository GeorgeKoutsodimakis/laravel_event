@extends('layouts.app')

@section('content')

<div class="container">
<h2>Create new event</h2>


  {!! Form::open(['route'=>'event.store']) !!}
    <div class="form-group">
      {!! Form::label('name','Events Name') !!}
      {!! Form::text('name','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('category','Category') !!}
      {!! Form::select('category', $category, $eventCategory,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('price','Price') !!}
      {!! Form::text('price','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('country','Country') !!}
      {!! Form::text('country','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('city','City') !!}
      {!! Form::text('city','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('date_from','Date From') !!}
      {!! Form::date('date_from','',['class' => 'form-control']) !!}
    </div>
     <div class="form-group">
      {!! Form::label('date_to','Date To') !!}
      {!! Form::date('date_to','',['class' => 'form-control']) !!}
    </div>

  <button type="submit" class="btn btn-primary">Create</button>  

  {!! Form::close() !!}






  </div>

  
    @include('layouts.errors')



@endsection