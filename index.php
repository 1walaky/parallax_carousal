<!DOCTYPE html>
<html>
<head>
  <title>parallax - slide</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
  <h2>GO DOWN</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner" role="listbox">
      <div class="item active image-container">
        <section class="module parallax parallax-1">
          <div class="container">
            <h1 class="animate-appear">Waking...</h1>
          </div>
        </section>
        <img src="./img/fa.jpg">
      </div>

      <div class="item image-container">
        <section class="module parallax parallax-2">
          <div class="container">
            <h1 class="animate-appear">Running...</h1>
          </div>
        </section>
        <img src="./img/hev.jpg">
      </div>

      <div class="item image-container">
        <section class="module parallax parallax-3">
          <div class="container">
            <h1 class="animate-appear">Sleeping...</h1>
          </div>
        </section>
        <img src="./img/hid.jpg">
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <h2>GO UP</h2>
<script   src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./js/parallax.js"></script>
</body>
</html>
