<!DOCTYPE html>
<html lang="en">

<!-- <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/js/style.css" />
        
</head>

<body>
    <div class="container">
        <div class="row justify-content-center app--header align-items-center">
            <div class="col-12 col-sm-9 col-md-5 text-md-center">
                <h1>Simple To-Do list</h1>
            </div>
            <div class="col-12 col-sm-3 col-md-1 text-md-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNote">Add New</button>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-12 col-lg-9">
                <div class="card-columns">

                      @include('partials.card')
                        </div>

                    

                </div>
            </div>
        </div>
    </div> -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="addNote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="">

                    @csrf

                    <div class="modal-body">
                        <textarea name="note" class="form-control" id="noteTextArea" rows="10"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Add Note</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>

</html> -->

<head>
    <title>Gallery</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<body>

<div class="container">
  <h2 style="text-align: center;">Gallery</h2>  
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



</body>
</html>

