  <!doctype html>
<html lang="en">
<?php require_once('header.php'); ?>


    
    <h1> Find your dream Trip!</h1>
    <h1>Sign up for Rewards</h1>
  <p>
    <form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
  </p>
    <h1>OR</h1>
      <h1>Check your coupon code below</h1>
  <p>
          <form action="handleget.php" method="get">
Coupon Code: <input type="text" name="name"><br>


<input type="submit">
</form>
      </p>  
    
    
    <?php require_once('footer.php'); ?>


</html>
