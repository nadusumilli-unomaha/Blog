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
      <h1>Show Post </h1>

      <div class="container">
          <table class="table table-striped table-bordered table-hover">
              <tbody>
              <tr class="bg-info">
              <tr>
                  <td>ID</td>
                  <td><?php echo ($post['id']); ?></td>
              </tr>
              <tr>
                  <td>Title</td>
                  <td><?php echo ($post['title']); ?></td>
              </tr>
              <tr>
                  <td>Description</td>
                  <td><?php echo ($post['description']); ?></td>
              </tr>
                    
              </tbody>
        </table>
      </div>
    </div>
  
@stop
