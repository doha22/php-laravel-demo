@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="border border-info" > --}}

    <div class="col-md-3"></div>
<div class="raw" style="background: beige";>
<h4 > the title of post : </h4>
  
<div >
  <h3> {{$post->title}} </h3> 
</div>

</div>
  
  <div style="background: beige"; class="raw">
  <h4 style="float:left";> the body of post : </h4>
  <br> <br>
 
  
 <div class="raw" >
<p >{{$post->body}}</p>
 </div>
  </div>
  

 <br> <br>
 <div class="raw col-md-2">
 {{-- edit button  --}}
 <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> EDIT </a>
 </div>
 <div> </div>
 <div class="raw col-md-2"> 
 {{-- delete button --}}
 {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
  {{Form::hidden('_method', 'DELETE')}}
  {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
 </div>

    {{-- </div> --}}
</div>
@endsection