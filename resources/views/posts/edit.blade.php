@extends('layouts.app')

@section('content')
  <h1>Edit Post</h1>
  
  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}    
    <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
      {{Form::label('title', 'Body')}}
      {{Form::textarea('body', $post->body, ['id' => 'editor1','class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}    
  {!! Form::close() !!}
@endsection

@section('footer')
  <h5>This is footer.</h5>
@endsection