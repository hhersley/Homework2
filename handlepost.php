
  <?php require_once('header.php'); ?>

  <body>
    <h1>Post response</h1>
    Welcome <?php echo $_POST["name"]; ?> !<br>
Your email address is: <?php echo $_POST["email"]; ?><br>
    <img src="https://media0.giphy.com/media/xUPGGDNsLvqsBOhuU0/giphy.gif?cid=ecf05e47td76ml2ubtsgi3y8vsq96449hsu7srtoi8yqyam4&rid=giphy.gif&ct=g" class="img-thumbnail" alt="...">
    
     <?php
    emptypost();
    ?>
  
  </body>
  
      <?php require_once('footer.php'); ?>

</html>
