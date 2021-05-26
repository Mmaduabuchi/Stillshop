<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="style.css">
    <script src="function.js" defer></script>
    <title>StillShop.com</title>
  </head>
  <body>
    <div class="container-fulid">

      <div class="row mt-2" id="div-header-holder">

        <div class="col-lg-4">
          <a href="index.php"> <span id='site-name'>StillShop.com</span> </a>
        </div>

        <div class="col-lg-6">
          <a href="log.php"> <button type="button" name="button">sign-in</button> </a>
          <a href="register.php"> <button type="button" name="button">sign-up</button> </a>
        </div>

        <div class="col-lg-2">
          <i class="fas fa-cart-arrow-down" class="text-end" id="cart"></i>
        </div>

      </div>

    </div>
    
    <div class="cart-div-container">

      <i class="fas fa-arrow-up" id='arrowup'></i>

      <p id='text-item'>No Item available..</p>

    </div>

    <div class="">
      <form class="search-form" action="index.php" method="post">
        <input type="text" name="search" placeholder="Search..item.." id="search-bar">
      </form>
    </div>


    <div class="banner-div">

    </div>
    <div class="cate-container">

      <div class="cate">Slippers</div>
      <div class="cate2">Shoes</div>
      <a href="index.php">
      <div class="cate3">Refresh <i class=""></i> </div>
      </a>

    </div>

    <div class="item-displayer-container">
      <div class="name-item-div"> <p id="show-cate">Displaying All Items.</p> </div>

      <div class="hold-images-div">

      <div class="img-div">
        <img src="images/img.jpg" alt="">
        <div class="name-price-div">
          <span id="int">Name: pams</span>
          <br>
          <span id="int">Colour: White</span>
          <br>
          <span id="int">Price: N3000.00</span>
          <button type="button" name="button" id="btu-ad">ADD to CART</button>
        </div>
      </div>

      <div class="img-div">
        <img src="images/img.jpg" alt="">
        <div class="name-price-div">
          <span id="int">Name: pams</span>
          <br>
          <span id="int">Colour: White</span>
          <br>
          <span id="int">Price: N3000.00</span>
          <button type="button" name="button" id="btu-ad">ADD to CART</button>
        </div>
      </div>

      <div class="img-div">
        <img src="images/img.jpg" alt="">
        <div class="name-price-div">
          <span id="int">Name: pams</span>
          <br>
          <span id="int">Colour: White</span>
          <br>
          <span id="int">Price: N3000.00</span>
          <button type="button" name="button" id="btu-ad">ADD to CART</button>
        </div>
      </div>

      </div>

    </div>

    <div class="banner-div">

    </div>

    <?php
    include "footer.html";
     ?>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
