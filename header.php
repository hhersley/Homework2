<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homework2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="StyleSheet2.css" />

  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://homework2.hahersley.oucreate.com/#">Homework2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://homework2.hahersley.oucreate.com/#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.rottentomatoes.com/">Rotten Tomatoes</a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="https://www.cinemark.com/">Cinemark</a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="https://www.amctheatres.com/">AMC</a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="https://www.regmovies.com/">Regal</a>
        </li>
        
       
    
    
      </ul>
         <img id="img1" src="https://www.nicepng.com/png/detail/356-3565814_png-file-movie-icon-vector-png.png" class="rounded float-end" alt="tiny picture">

    </div>
  </div>
</nav>
    
    
    <?php
    function emptypost() {
$name = $_POST["name"];
    $email = $_POST["email"];

if (empty($name))
    echo "You need to enter your name; ";
 
if (empty($email))
    echo "You need to enter an email address";
    }
?>
      <?php
    function emptyget() {
$name = $_GET["name"];
if (empty($name))
    echo "You need to enter your Coupon code";
    }
?>
    
    
    <?php
    function hello() {
     echo "Lights, Camera, ACTION!";
    }
    ?>
