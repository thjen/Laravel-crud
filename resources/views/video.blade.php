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
          <div class="col-md-3">
            <form class="md-form" style="margin: 20px;" action="{{ route('upload') }}"  method="post" enctype="multipart/form-data"> 
              <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                  <span>Choose file</span>
                  <input type="file" name="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Upload your file">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </form>
           
            <ul>
              @foreach($videos as $video)
              <li>
                  <!-- <a href="{{ route('download', $video->uuid) }}">{{ $video->file }}</a> -->
                  <a href="#">{{ $video->file }}</a>
              </li>
              @endforeach
            </ul>

          </div>
          <div class="col-md-9">
             <!-- <div class="avia-video avia-video-16-9" itemprop="video" itemtype="https://schema.org/VideoObject">
              <div class="avia-iframe-wrap">
                <iframe width="100%" height="70%" src="https://www.youtube.com/embed/AwEBIqtRbzk?feature=oembed&amp;wmode=opaque" frameborder="0" allowfullscreen="">
                </iframe>
              </div>
            </div>  -->
            <!-- <video width="100%" controls>
              <source src="https://www.youtube.com/embed/AwEBIqtRbzk?feature=oembed&amp;wmode=opaque" type="video/mp4">
            </video> -->
          </div>
        </div>
      </div>
    </body>
</html>
