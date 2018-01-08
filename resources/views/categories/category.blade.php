<ul class="list-group">

    @foreach($category as $category)

     <li class="list-group-item">
     {{$category->title}}

     

        {{!! Form::open(['route'=>['category.destroy','$category'],'method'=>'delete'],['class'=>'pull-right']) !!}}
        <button type="submit" class="btn btn-danger">Delete</button>

         {{!! Form::close() !!}}

     </li>

    @endforeach

</ul>

@include('layouts.errors')

