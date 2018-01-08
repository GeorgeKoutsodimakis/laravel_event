@extends('layouts.app')

@section('content')

<div class="container">
<h2>Manage Users</h2>

<ul class="list-group">
    @foreach($user as $user)
     <li class="list-group-item">{{$user->name}}
        <form method="POST" action="{{route('user.destroy', $user)}}" class="pull-right">
            {{csrf_field()}}
         <input type="hidden" name="_method" value="DELETE">
         <input type="submit" class="btn btn-danger" value="Delete"/>
     </form>
      </li>
    @endforeach
</ul>
</div>

 
@endsection