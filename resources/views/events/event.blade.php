<div class="container card">
  <div class="container header"><h2>{{$event->name}}</h2> </div>
  <hr>

    <h4><strong>Category </strong>:{{ $event->category_id}}</h4>
    <p class="card-text">
        <h4><strong>Price </strong>: {{$event->price}}$</h4>
        <h4><strong>Where </strong>: {{$event->country}} / {{$event->city}}</h4>
        <h4><strong>From </strong>: {{$event->date_from}}</h4>
        <h4><strong>To </strong>: {{$event->date_to}}</h4>
    </p>
  <hr>

  <h4><strong>Posted by </strong>: {{$event->user_id}}</h4>

  <div class="container footer">
  <ul class="list-unstyled buttons">
    <li>
         <a href="{{route('event.edit', $event)}}" class="btn btn-primary">Edit</a>
    </li>     
    <li>
    <form method="POST" action="{{route('event.destroy', $event)}}" >
            {{csrf_field()}}
         <input type="hidden" name="_method" value="DELETE">
         <input type="submit" class="btn btn-danger" value="Delete"/>
     </form>
     </li>
     <li><form method="POST" action="{{route('event.show', $event)}}">
            {{csrf_field()}}
         <input type="hidden" name="_method" value="GET">
         <input type="submit" class="btn btn-success" value="Details"/>
     </form>
     </li>
  </ul>
  </div>
</div>