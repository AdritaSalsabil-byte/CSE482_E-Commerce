<!DOCTYPE html>
<html lang="en">

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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Hero -->
    <img src="./images/product5.jpg" alt="" class="hero-img" />

    <div class="hero-content">
      <h2><span class="discount">30% </span> SALE OFF</h2>
      <h1>
        <span>Winter Vibes</span>
        <span>Going on</span>
      </h1>
      <a class="btn" href="product.php">shop now</a>
    </div>
  </header>

  <div class="about">
    <div class="content">


      <div class="login-box" ''>
  <?php
         if(isset($_GET['msg'])){
           $msg = $_GET['msg'];
           echo "<br><p style='color:blue;text-align:center;'>".$msg."</p>";
         }

         ?>
  <div>
  <form  name="LoginForms"  action="post.php" method="POST" onsubmit="return formValidation();">

<div class="user-box">  <label for="username" >Name :       </label><br><label style="color:blue;margin-left:10px;" id="nameError"></label>
  <input type="text"  id="name" name="name" required><br></div>
    <div class="user-box">  <label for="username" >Username :       </label><br><label style="color:blue;margin-left:10px;" id="usernameError"></label>
      <input type="text" id="username" name="username" required><br></div>
      <div class="user-box">  <label for="pass" >Password :      </label><br><label style="color:blue;margin-left:10px;" id="passwordError"></label>
        <input type="password" id="password" name="password"><br></div>
      <div class="user-box">  <label for="pass">Re-type Password :      </label><br>
        <input type="password" id="password" name="repassword"><br></div><br>

  <div class="you">    <label> Gender :       </label><label style="color:blue;margin-left:10px;" id="genderError"></label>
    <input  type="radio" id="male" name="gender"  value="male" >
      Male
      <input  type="radio" id="female" name="gender" value="female">
      Female
      <input type="radio" id="other" name="gender" value="other">
      Other
      <br>
      <div class="user-box"> <label for="con" >Address :       </label><br><label style="color:blue;margin-left:10px;" id=addressError></label>
        <input type="text" name="address" required><br></div>
    <div class="user-box"> <label for="con" >Contact no :       </label><br><label style="color:blue;margin-left:10px;" id=contactError></label>
      <input type="text" name="contact_no" required><br></div>
    <div class="user-box">  <label for="mail">Email :       </label><br><input type="text" name="email" required><br></div>

<div class="user-box">
    <a href="#">

<span></span>
<span></span>
            <span></span>
              <input type="submit" name="register" value="Register">
          </a>
<p><br><a class="credit" href="account.php" target="_self">Login</a></p>
    </form>



<script type="text/javascript">
    function formValidation() {
        var name = document.forms["LoginForms"]["name"].value;
      var username = document.forms["LoginForms"]["username"].value;
      var password = document.forms["LoginForms"]["password"].value;
        var gender = document.forms["LoginForms"]["gender"].value;
        var address = document.forms["LoginForms"]["address"].value;
          var contact_no = document.forms["LoginForms"]["contact_no"].value;
      var flag = true;
      var passwordLength = /^(?=.*[0-9])[a-zA-z0-9!@$%]/;
        var nameChk = /^$/;
        var whiteSpace =/\s/;
      var usernameChk = /^$/;
        var genderChk = /^$/;
        var addressChk = /^$/;
          var contact_noChk = /^[0-9]/;
      if (name == ' ') {
        document.getElementById('nameError').innerHTML="Name is empty please enter a Name";

        flag = false;
      }
      if (username == ' ') {
        document.getElementById('usernameError').innerHTML="Username is empty please enter a Name";

        flag = false;
      }
      if (gender == ' ') {
        document.getElementById('genderError').innerHTML="Please Select gender don't leave it empty";

        flag = false;
      }
      if (address == ' ') {
        document.getElementById('addressError').innerHTML="Please give your address don't leave it empty";

        flag = false;
      }
      if(whiteSpace.test(username)) {
    document.getElementById('usernameError').innerHTML="Username cannot contains white space";
    flag = false;
  }
  if(!passwordLength.test(password)) {
       document.getElementById('passwordError').innerHTML="Password must contains at  least one special ($,%,@,#,!), a number and a capital letter";
        flag = false;
        }

  if(!contact_noChk.test(contact_no)) {
          document.getElementById('contactError').innerHTML="Contact must contains numbers only";
          flag = false;
        }


    return flag;
  }
  </script>
</div>
</div>
</div>
</div>
<br>
<br>
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
            <a href="pd.php">Order History</a>
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
