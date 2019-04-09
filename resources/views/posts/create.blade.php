@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-3"></div>
<div class="raw">
  <h1> create posts </h1>  </div>
  {{-- action here is store --}}
  {{ Form::open(['action' => 'PostsController@store', 'method' => 'POST']) }}

  <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title!'])}}
    </div>

<br>
    <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'write here!'])}}
        </div>
<br>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    
{{ Form::close() }}
  
@endsection