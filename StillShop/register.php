<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="function.js" defer></script>
    <title>register</title>
  </head>
  <body>

    <div class="container-fulid">

      <div class="row" id="dd">

        <div class="col bg-danger col-lg-2"> <a href="index.php"> <h2>StillShop.com</h2> </a> </div>
        <div class="col text-right col-lg-9"> <h2>Register Here</h2> </div>

      </div>

      <div class="row">

        <div class="col mt-5 ml-5 mb-5">

          <form class="form-re col-lg-6" action="register.php" method="post">

            <input type="text" name="firstname" placeholder="Firstname:" class="input col-lg-8" required><br>
            <input type="surname" name="surname" placeholder="Surname:" class="input col-lg-8" required><br>
            <input type="email" name="email" placeholder="Email:" class="input col-lg-8" required><br>
            <input type="password" name="password" placeholder="**********" class="input col-lg-8" required><br>
            <input type="password" name="re-password" placeholder="re-********" class="input col-lg-8" required><br>
            <input type="text" name="country" placeholder="Country:" class="input col-lg-8" required><br>
            <input type="text" name="state" placeholder="State:" class="input col-lg-8" required><br>
            <input type="number" name="number" placeholder="+000 000 000 00" class="input col-lg-8" required><br>
            <input type="submit" name="submit" class='submit-re col-lg-8' value="register">

            <p id='text-p-acc'>Already have an account: <a href="log.php" id="link">Click here!</a> </p>

          </form>



        </div>


      </div>

    </div>

    <?php
    include 'footer.html';
     ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
