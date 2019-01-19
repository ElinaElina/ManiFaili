<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   
  </head>

  <body>
<h1>{{$title}}</h1>
@if(count($services)>0)
<ul>
@foreach($services as $service)
<li>{{$service}}</li>
@endforeach
</ul>
@endif
 </body>
</html>