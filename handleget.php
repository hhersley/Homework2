<!doctype html>
<html lang="en">
  <?php require_once('header.php'); ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homework 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>GET response</h1>
   Hello <?php echo $_GET["name"]; ?><br>
Your favorite color is: <?php echo $_GET["favoritecolor"]; ?><br>
Your favorite weather is: <php echo $_GET["favoriteweather"]; ?><br>
   
  </body>
</html>
