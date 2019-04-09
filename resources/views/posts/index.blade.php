@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-3"></div>
  <div class="raw">
  <h1> new posts </h1> </div>
  @if (count($posts)>1)
    @foreach ($posts as $post)
        <div class="well">
          {{-- adding id for each post --}}
          <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
              <br>
            <small>Written on {{$post->created_at}} </small>
        </div>
    @endforeach
      
   
  @else
      <h3> No posts found </h3>
  @endif 
  <a href="/posts/create" style="float: left";>{{Form::submit('create new post', ['class' => 'btn btn-danger'])}}  </a> 
  <div class="col-md-3"></div>
</div>
@endsection