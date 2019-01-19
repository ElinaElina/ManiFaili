<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 
</head>
<body>

<h1>Edit post</h1>
{!!Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST'])!!}
    <div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $post->title , ['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::text('body', $post->body , ['class'=>'form-control','placeholder'=>'Body Text'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['clss'=>'btn btn-primary'])}}
{!!Form::close()!!}

</body>
</html>