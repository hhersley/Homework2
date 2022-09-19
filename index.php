  <!doctype html>
<html lang="en">
<?php require_once('header.php'); ?>


    
    <h2> Join the Movie Club!</h2>
  <p>We offer recommendations for movies and discount codes for local movie theaters!</p>
    <h1>Sign up for Rewards</h1>
  <h1>
    <form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input id="submit" type="submit">
</form>
  </h1>
    <h1>OR</h1>
      <h1>Check your coupon code below</h1>
  <h1>
          <form action="handleget.php" method="get">
Coupon Code: <input type="text" name="name"><br>


<input id="submit" type="submit">
</form>
       
  </h1>
    
    <?php require_once('footer.php'); ?>


</html>
