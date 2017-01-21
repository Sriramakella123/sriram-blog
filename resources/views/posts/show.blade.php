@extends('app')
@section('content')
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
  
@stop
