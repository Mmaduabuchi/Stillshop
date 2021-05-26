<?php
//create connection to the server
$connection = mysqli_connect('localhost','root','','slippers');

//check if the connection is successful
if (!$connection) {
  echo "connection failed";
}

//create empty error variable
$nameErr = $priceErr = $imageErr = $colorErr = '';

//check if the form have been submited
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //get the image file name
	$image = pathinfo($_FILES['picture']['name'], PATHINFO_FILENAME);

//create the destination of the image to be uploaded
	$target = "imageTable/".basename($image);

  $imagename = $_POST['imagename'];
  $imageprice = $_POST['imageprice'];
  $imagecolor = $_POST['imagecolour'];

  //validate item name
  if (empty($imagename) || strlen($imagename) < 3 || is_numeric($imagename)) {
    $nameErr = "Item name is empty/numbers or your character is less than five character!";
  }else {
    if (!preg_match("/^[A-Z\d ]+$/i", $imagename)) {
      $nameErr = "only letters and white space allowed";
    }else {

      //validate item price
      if (empty($imageprice)) {
        $priceErr = "Image price is empty";
      }else {
        if (is_numeric($imageprice) && $imageprice > 100 && $imageprice == round($imageprice, 0)) {

          //add naira symbol to the price tag
          $imageprice .= ' :NGN';

          //validate item colour
          if (empty($imagecolor) || strlen($imagecolor) < 3 || is_numeric($imagecolor)) {
            $colorErr = "item color is empty/numbers or your character is less than three character!";
          }else {
            if (!preg_match("/^[A-Z\d]+$/i", $imagecolor)) {
              $colorErr = "only letters and white space allowed";
            }else {

              //create array holding vaild extensions
              $arrExtension = array('jpg', 'jpeg', 'png', 'gif');

              //get image file extension
              $getimageExtension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);

              //covert extension to lowercase
              $tolowercase = strtolower($getimageExtension);

              //check if the file extension is inside the array
              if (in_array($tolowercase, $arrExtension)) {

                //insert into your database table
                $setimage = "INSERT INTO all_item (image, name, price, colour) VALUES ('$image','$imagename','$imageprice','$imagecolor')";

                //check mysqli query
                if (!mysqli_query($connection, $setimage)) {
                  echo "<script> alert('there was an error while trying to upload the item');</script>";
                }else {

                    //move the image file the destination
                		if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {

                		 // echo "<script> alert('sucessfully added into the image folder!'); </script>";
                		}else {
                			//if false alert the user
                			 echo "<script> alert('an error occur while trying to add image to the folder!'); </script>";
                		}
                }

              }else {
                $imageErr = "invaild file or image extension";
              }
            }
          }
        }else {
          $priceErr = "Enter a vaild item number price";
        }
      }
    }
  }
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="style.css">
    <script src="admin.js" defer></script>
    <title>admin page</title>
  </head>
  <body class="container-fulid">

    <div class="row">


    <div class="col-lg-2 bg-light border">

        <div class="row border p-5">1</div>
        <div class="row border ">

          <ul class="ul-admin pb-3">
            <li class="li-admin" id="booked-item">Booked Items</li>
            <li class="li-admin" id="selled-item">Selled Items</li>
            <li class="li-admin">Advert</li>
            <li class="li-admin" id="upload-admin-btu">Upload</li>
            <li class="li-admin" id="items-list">Items</li>
            <nav class="li-admin-other-holder">
            <li class="li-admin-other">All Items</li>
            <li class="li-admin-other">Slipers Items</li>
            <li class="li-admin-other">Shoes Items</li>
          </nav>
            <li class="li-admin">Users</li>
            <li class="li-admin">Space</li>
            <li class="li-admin" id='account'>Account</li>
          </ul>

        </div>

    </div>

    <div class="col-lg-10 bg-light border">

      <div class="row p-5">
        <div class="col-lg-10">

        </div>

        <div class="col-lg-2 icons">
        <i class="fas fa-user fa-pull-left fa-2x" style="margin-right: 20%;"></i>
        <i class="fas fa-sync fa-2x" id='icon-refresh'></i>
        <i class="fas fa-cog fa-2x fa-pull-right fa-spin"></i>
        </div>

      </div>

      <!-- booked item page displayer -->
      <div class="col p-5" id="col-booked-item">
        <div class="col-name-holder2"> <p>Booked Items</p> </div>
      </div>
      <!-- selled item page displayer -->
      <div class="col p-5" id="col-booked-item2">
        <div class="col-name-holder2"> <p>Selled Items</p> </div>
      </div>
      <!-- account page for admin -->
      <div class="row" id="account-div-holder" style="display: none;">
        <p id="admin-area">Admin area</p>
        <div class="row">
          <div class="col-lg-7 border p-5">
            <i class="fas fa-user fa-4x"></i>
            <span id="admin-name">Mr.pinnacle</span>
            <br><br>
            <button type="button" name="button" id="btu-change-pass">Change password</button>
            <button type="button" name="button" id="btu-change-email">Change email</button>
            </div>
          <div class="col-lg-5 border p-5">
            <form class="new-form" action="admin.php" method="post">
              <p id="text-change-pass">Change admin password:</p>
              <input type="password" name="first-pass" id="new-change-input" placeholder="Enter old password" required><br>
              <input type="password" name="new-pass" id="new-change-input" placeholder="Enter new password" required><br>
              <input type="submit" name="submit-new" id="new-btu-submit" value="change">
            </form>

            <form class="new-form-email" action="admin.php" method="post">
              <p id="text-change-pass">Change admin email:</p>
              <input type="email" name="first-email" id="new-change-input" placeholder="Enter old email" required><br>
              <input type="email" name="new-email" id="new-change-input" placeholder="Enter new email" required><br>
              <input type="submit" name="submit-new" id="new-btu-submit" value="change">
            </form>
          </div>
        </div>
      </div>

      <div class="row"  id='displayer-div-holder'>

        <div class="col bg-light">
          <div class="col-name-holder"> <p>Upload Items</p> </div>

            <form class="pb-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">

              <select  class="admin-input" name="select">
                <option value="all">All</option>
                <option value="slippers">Slippers</option>
                <option value="pams">Shoes</option>
              </select>
              <br>
              <input type="file" name="picture" class="admin-input" required><br>
              <span class="error-span">
              <?php echo $imageErr; ?>
              </span>
              <br>
              <input type="text" name="imagename" placeholder="Item name:" class="admin-input" required><br>
              <span class="error-span">
              <?php echo $nameErr; ?>
              </span>
              <br>
              <input type="text" name="imageprice" placeholder="Item price:" class="admin-input" required><br>
              <span class="error-span">
              <?php echo $priceErr; ?>
              </span>
              <br>
              <input type="text" name="imagecolour" placeholder="Item colour:" class="admin-input" required><br>
              <span class="error-span">
              <?php echo $colorErr; ?>
              </span>
              <br>
              <input type="submit" name="submit" class="admin-input-submit" value="upload">
            </form>

        </div>
        <div class="col bg-light ">

          <div class="col-name-holder"> <p>Uploaded Items</p> </div>
          <?php

          //select all item form the database table
          $getitem = "SELECT * FROM all_item";

          //run mysqli query
          $queryit = mysqli_query($connection, $getitem);

          //check query
          if (!$queryit) {
            echo '<script> alert("table not selected!"); </script>';
          }else {

            //check if the data in the table is greaterthan zero
            while ($getData = mysqli_fetch_array($queryit)) {

              // echo $getData['image'];
              // echo $getData['name'];
              // echo $getData['price'];
              // echo $getData['colour'];

              echo "<div class = 'row pb-1' id = 'details-admin-display'>
              <div class = 'col-lg-4 border bg-secondary'><img src= imageTable/". $getData['image'] ." id='dbImage'></div>
              <div class = 'col-lg-4 border bg-dark'> Name: " . $getData['name'] ."<br> Price: ". $getData['price'] ."<br> Colour: ".  $getData['colour']  ."</div>
              <div class = 'col-lg-4 border bg-secondary'> <button name='delete'>Delete</button> <button name='edit'>Edit</button> </div>
              </div>";

            }
          }

           ?>
        </div>

      </div>

    </div>

        <div class="col border">
          <?php include "footer.html"; ?>
        </div>

      </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
