@extends('layouts.app')

@section('content')

<div class="container">
<h2>Show all events</h2>
</div>


@foreach($event as $event)
    @include('events.event')
@endforeach

@endsection