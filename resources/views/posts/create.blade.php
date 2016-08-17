@extends('app')
@section('content')
    
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Laravel Blog</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="/posts">Home</a></li>
          <!--<li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li> 
          <li><a href="#">Page 3</a></li>--> 
        </ul>
      </div>
    </nav>
    <div class="container">
      <h1>Create Post</h1>
      {!! Form::open(['url' => 'posts']) !!}
      <div class="form-group">
          {!! Form::label('Title', 'Title:') !!}
          {!! Form::text('title',null,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
          {!! Form::label('Description', 'Description:') !!}
          {!! Form::text('description',null,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
          {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
      </div>
      {!! Form::close() !!}
    </div>
@stop
