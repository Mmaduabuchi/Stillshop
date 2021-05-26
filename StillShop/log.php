<?php

if (isset($_POST['submit'])) {
  echo header('location: admin.php');
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="function.js" defer></script>
    <title>log in as admin</title>
  </head>
  <body class="container-fulid body-log-in">

    <div class="row divlogo">

      <div class="col bg-danger col-lg-2"> <a href="index.php"> <h2>StillShop.com</h2> </a> </div>
      <div class="col-lg-9 text-right"><h2>LOG IN HERE</h2></div>

    </div>

    <div class="row mt-5">

      <div class="col-lg-8 pl-5 bg-light border">

        <form class=" p-5  bg-light " id="form" action="log.php" method="post">
          <input type="text" name="username" placeholder="Username:" id='username' required><br>
          <input type="password" name="password" placeholder="***********" id="password" class="mt-5" required><br>
          <input type="submit" name="submit" value="sign in" id='submit' class="col-6 mt-5">

          <p id='text-p-acc'>Not have an account yet: <a href="register.php" id="link">Click here!</a> </p>

        </form>

        </div>

        <div class="col-lg-4 bg-light border">
          <p>j</p>
        </div>

    </div>


    <?php
    include 'footer.html';
     ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
