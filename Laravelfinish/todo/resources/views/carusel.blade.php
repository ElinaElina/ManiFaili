<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gallery</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/firstpage.css" />
</head>
<body>
@include('header')
<div class="container">
  

  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://wallpapercave.com/wp/bdrRaFH.jpg" alt="Cat" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://wallpapercave.com/wp/k1ElkKw.jpg" alt="Cat" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://wallpapercave.com/wp/H16qy1E.jpg" alt="Cat" style="width:100%;">
      </div>
      <div class="item">
        <img src="https://wallpaper-house.com/data/out/9/wallpaper2you_326343.jpg" alt="Cat" style="width:100%;">
      </div>
    
    <div class="item">
      <img src="https://i.ytimg.com/vi/Zc2GlX__L4g/maxresdefault.jpg" alt="Cat" style="width:100%;">
    </div>
    </div>
    
</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@include('footer')

</body>
</html>
