@extends('app')

@section('content')

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Laravel Blog</a>
        </div>
        <ul class="nav navbar-nav">
          <li class='active'><a href="/posts">Home</a></li>
          <!--<li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li> 
          <li><a href="#">Page 3</a></li>--> 
        </ul>
      </div>
    </nav>

    <div class="container">
        <h1>Blog</h1>
        <a href="{{url('/posts/create')}}" class="btn btn-success">Create Post</a>
        <hr>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td><a href="{{url('posts',$post->id)}}" class="btn btn-primary">Read</a></td>
                    <td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning">Update</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['posts.destroy', $post->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
@endsection
