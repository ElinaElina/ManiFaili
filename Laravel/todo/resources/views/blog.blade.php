

@section('content')
<h1>Blog</h1>
@if(count($posts) > 1)
@foreach($posts as $post)
<div class="well">
<h3>{{$post->title}}</h3>
</div>
@endforeach
@else
 <p>No blogs found</p>
 @endif
 @endsection


 @section('content')
<h1>Creat post</h1>

 @endsection
