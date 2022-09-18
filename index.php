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
    
    <h1> Find your dream Trip!</h1>
    <h1>Sign up for Rewards</h1>
    <form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
     
    <h1>OR<h/1>
      <h1>Tell us more about you!</h1>
  
          <form action="handleget.php" method="get">
Name: <input type="text" name="name"><br>
Favorite Color: <input type="text" name="favorite color"><br>
Favorite Weather: <input type="text" name="favorite weather"><br>

<input type="submit">
</form>
      
    
  </body>
</html>
