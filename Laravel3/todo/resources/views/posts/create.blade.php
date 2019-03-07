@extends('layouts.default')
<link rel="stylesheet" href="css/firstpage.css" />
@section('content')

<h1>Create post</h1>
{!!Form::open(['action' => 'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
    <div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '' , ['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::text('body', '' , ['class'=>'form-control','placeholder'=>'Body Text'])}}
    </div>
    <div class="form-group">
    {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['clss'=>'btn btn-primary'])}}
{!!Form::close()!!}

@endsection