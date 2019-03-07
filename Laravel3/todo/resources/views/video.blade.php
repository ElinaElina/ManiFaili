@extends('layouts.default')
        <title>Video</title>
        <link rel="stylesheet" href="css/firstpage.css" />
@section('content')
        <div class="embed-responsive embed-responsive-16by9">
            <iframe
                width="956"
                height="717"
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/_Nua3Cjdik0"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            >
            </iframe>
        </div>
        @endsection
