<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          .login {
            
          }
          .crud {
            
          }
          .remove {
            height: 35px;
            width: 35px;
            margin-left: 10px;
          }
        </style>
    </head>
    <body>
        <div class="content">
          <div class="row">
            <div class="col-sm-4">
              <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" name="password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
            <div class="col-sm-8 crud">
              <table class="table">
                <thead>
                  <tr>
                    <th>Task name</th>
                    <th>Task description</th>
                    <th>User</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @if (!empty($tasks))
                  @foreach($tasks as $task)
                    <tr>
                      <td><?= $task->task_name  ?></td>
                      <td><?= $task->task_description ?></td>
                      <td><?= $task->name ?></td>
                      <td><?= $task->created_at ?></td>
                      <td>
                        <a href="edit/<?= $task->task_id ?>"><i class="fa fa-pencil"></i> </a>
                        <a href="{{ action('TaskController@delete', $task->task_id) }}"><i class="fa fa-remove remove"></i></a>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                @endif
              </table>
              <a type="button" class="btn btn-primary" name="add"
                href="add">Add</a>
              <a type="button" class="btn btn-danger" name="upload"
                href="upload">Upload</a>
            </div>
          </div>
        </div>
    </body>
</html>