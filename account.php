

<!DOCTYPE html>
<html lang="en">
<?php
  include "layout/head.php"
//  if (isset($_COOKIE["cookieSet"])) {
  //  header("Location:cart.php");
 //}
?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <!-- Box icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Unify</title>
</head>

<body>
  <!-- Header -->
  <header id="home" class="header">
    <!-- Navigation -->
    <nav class="nav">
      <div class="navigation container">
        <div class="logo">
          <h1>Unify</h1>
        </div>

        <div class="menu">
          <div class="top-nav">
            <div class="logo">
              <h1>Unify</h1>
            </div>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
          </div>

          <ul class="nav-list">
            <li class="nav-item">
              <a href="index.php" class="nav-link ">Home</a>
            </li>
            <li class="nav-item">
              <a href="product.php" class="nav-link">Products</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link ">Contact</a>
            </li>
            <li class="nav-item">
              <a href="account.php" class="nav-link ">Account</a>
            </li>
            <li class="nav-item">
              <a href="cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
            </li>
          </ul>
        </div>

        <a href="cart.php" class="cart-icon">
          <i class="bx bx-shopping-bag"></i>
        </a>

        <div class="hamburger">
          <i class="bx bx-menu"></i>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <img src="./images/product5.jpg" alt="" class="hero-img" />

    <div class="hero-content">
      <h2><span class="discount">30% </span> SALE </h2>
      <h1>
        <span>Winter Vibes</span>
        <span>Going on</span>
      </h1>
      <a class="btn" href="product.php">shop now</a>
    </div>
  </header>

  <div class="about">
    <div class="content">
      <div class="title"></div>

        <div class="login-box" class="login-box" style="margin-left: 20px;margin-top: 150px;">
          <?php
                 if(isset($_GET['msg'])){
                   $msg = $_GET['msg'];
                   echo "<br><p style='color:blue;text-align:center;'>".$msg."</p>";
                 }

                 ?>
  <h2>Login</h2>
  <form action="./target.php" method="post">
    <h2>
  <?php

    if (isset($_SESSION["error"])) {
      echo $_SESSION["error"];
    }

   ?></h2>
   <form  name="LoginForms"  action="post.php" method="POST" onsubmit="return formValidation();">
   <div class="user-box" style="height: 40px;margin-left: 60px;"><label for="username" >Username :       </label><br><label style="color:blue;margin-left:10px;" id="nameError"></label><input type="text" id="username" name="username" required><?php  if (isset($_SESSION["username"])) {
     echo $_SESSION["username"];}?><br></div><br><br>
     <div  class="user-box" style="height: 40px;margin-left: 60px;"><label for='pass'>Password :      </label><br> <label style="color:blue;margin-left:10px;" id="passwordError"></label> <input type="password" id="password" name="password" required><br></div>
     <a href="#">

         <span></span>
        <p><br><a class="credit" href="cart.php" target="_self">submit</a></p>
       </a>
    <p><br><a class="credit" href="registration.php" target="_self">Registration</a></p>
  </form>
  <script type="text/javascript">
      function formValidation() {

        var username = document.forms["LoginForms"]["username"].value;
        var password = document.forms["LoginForms"]["password"].value;

        var flag = true;
        var passwordLength = /^(?=.*[0-9])/;

          var whiteSpace =/\s/;
        var usernameChk = /^$/;


        if (username == ' ') {
          document.getElementById('usernameError').innerHTML="Username is empty please enter a Name";

          flag = false;
        }

        if(whiteSpace.test(username)) {
      document.getElementById('usernameError').innerHTML="Username cannot contains white space";
      flag = false;
    }
    if(!passwordLength.test(password)) {
         document.getElementById('passwordError').innerHTML="Password length should be 0 to 9";
          flag = false;
          }



      return flag;
    }
    </script>
  </div>
  </div>
</div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br><br><br><br><br><br>
    <!-- Footer -->
    <footer id="footer" class="section footer">
      <div class="container">
        <div class="footer-container">
          <div class="footer-center">
            <h3>MY ACCOUNT</h3>
            <a href="account.php">My Account</a>
            <a href="pd.php">Our Stock</a>
            <a href="cart.php">Wish List</a>
            <a href="product.php">Returns</a>
          </div>
          <div class="footer-center">
            <h3>CONTACT US</h3>
            <div>
              <span>
                <i class="fas fa-map-marker-alt"></i>
              </span>
              39 Dream Palace, Gulshan, Dhaka, Bangladesh
            </div>
            <div>
              <span>
                <i class="far fa-envelope"></i>
              </span>
              unify@gmail.com
            </div>
            <div>
              <span>
                <i class="fas fa-phone"></i>
              </span>
              +031-025412421
            </div>
            <div>
              <span>
                <i class="far fa-paper-plane"></i>
              </span>
              Dhaka, Bangladesh
            </div>
          </div>
        </div>
      </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Custom Script -->
    <script src="./js/index.js"></script>

  </body>
</html>
<?php
  session_destroy();
 ?>
