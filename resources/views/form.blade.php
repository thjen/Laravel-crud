<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          
        </style>

    </head>
    <body>    
      <div class="content">
        <div class="row">
          <div class="col-sm-2 col-sm-offset-2">
          
          </div>
          <div class="col-sm-4">
          @if (!empty($task))
            @foreach($task as $value)
            <form action="{{ route('update', $value->task_id) }}" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label>Task name: </label>
                <input class="form-control" name="task_name" value="<?= $value->task_name ?>">
              </div>
              <div class="form-group">
                <label>Description: </label>
                <input class="form-control" name="task_description" value="<?= $value->task_description ?>">
              </div>
              <div class="form-group">
                <label>User id: </label>
                <input class="form-control" name="user_id" value="<?= $value->user_id ?>">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            @endforeach
          @endif
          @if (empty($task))         
            <form action="{{ route('insert') }}" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label>Task name: </label>
                <input class="form-control" name="task_name">
              </div>
              <div class="form-group">  
                <label>Description: </label>
                <input class="form-control" name="task_description">
              </div>
              <div class="form-group">
                <label>User id: </label>
                <input class="form-control" name="user_id">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>       
          @endif
          </div>
          <div class="col-sm-2 col-sm-offset-2">
          
          </div>
        </div>
      </div>
    </body>
</html>
