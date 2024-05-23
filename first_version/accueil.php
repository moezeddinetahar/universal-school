 <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>universel-school</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

 <style>

 .d-block{
   float: right;

}


.tab{
   width: 70%;
   margin-top: 6%;
   margin-left: 16%;
   margin-bottom: 10%;
}

 </style>
<body>


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


 
 
<?php include 'navbar_Login_Enregistrement.php'?>

  <br>  <br>  <br>  <br>
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block  " width="35%" src="\universal-school\first_version\images\S1.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block  "width="41%" src="\universal-school\first_version\images\S3.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block  "  width="48%" src="\universal-school\first_version\images\S2.png" alt="Third slide">
      </div>
    </div>

    <div class="carousel-caption d-none d-md-block">
        <h5>Universel-School</h5>
        <p>For a scientific future</p>
      </div>





    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




<?php include 'footer.php'?>
</body>

</html>
