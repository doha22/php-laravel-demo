@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-3"></div>
<div class="raw">

  <h1> edit posts </h1> </div>
   {{-- action here is update --}}
  {{ Form::open(['action' =>  ['PostsController@update', $post->id], 'method' => 'POST']) }}

  <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title!'])}}
    </div>

<br>
    <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'write here!'])}}
        </div>
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    
{{ Form::close() }}
</div>
</div>
@endsection