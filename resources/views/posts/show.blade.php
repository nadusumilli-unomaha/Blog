	@extends('app')
@section('content')

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="../">Laravel Blog</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="{{ action('PostController@index') }}">Home</a></li>
          <!--<li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li> 
          <li><a href="#">Page 3</a></li>--> 
        </ul>
      </div>
    </nav>

    <div class="container">
      <h1>Show Post </h1>

      <div class="container">
          <table class="table table-bordered table-hover " bgcolor="#00FF00">
              <tbody>
              <colgroup>
                <col span="2" style="background-color:white">
              </colgroup>
              <tr class="bg-info">
              <tr>
                  <th>ID</th>
                  <td><?php echo ($post['id']); ?></td>
              </tr>
              <tr>
                  <th>Title</th>
                  <td><?php echo ($post['title']); ?></td>
              </tr>
              <tr>
                  <th>Description</th>
                  <td><?php echo ($post['description']); ?></td>
              </tr>
                    
              </tbody>
        </table>
      </div>
    </div>
  
@stop
