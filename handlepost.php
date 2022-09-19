<!doctype html>
<html lang="en">
  <?php require_once('header.php'); ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homework 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
       <link rel="stylesheet" href="StyleSheet2.css" />

  </head>
  <body>
    <h1>Post response</h1>
    Welcome <?php echo $_POST["name"]; ?> !<br>
Your email address is: <?php echo $_POST["email"]; ?><br>
    <img src="https://media0.giphy.com/media/xUPGGDNsLvqsBOhuU0/giphy.gif?cid=ecf05e47td76ml2ubtsgi3y8vsq96449hsu7srtoi8yqyam4&rid=giphy.gif&ct=g" class="img-thumbnail" alt="...">
    
    
  </body>
  
      <?php require_once('footer.php'); ?>

</html>
