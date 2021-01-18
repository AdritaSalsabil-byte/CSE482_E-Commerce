
<?php include "database.php";

        $db = new Database();
         ?>
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
  <title>Your Cart</title>
</head>

<body>
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
  <?php
               $query = "select * from accounts ";
               $qResult = $db->select($query);
               if($qResult){
                   while($result = $qResult->fetch_assoc()){
                     $name=$result['name'];
                     $username=$result['username'];
                     $password=$result['password'];
                     //$repassword=$result['repassword'];
                     $gender=$result['gender'];
                   $address=$result['address'];
                   $contact=$result['contact_no'];
                   $email=$result['email'];
                   }
               }



        ?>
  <?php
    include "layout/head.php"

      if(isset($_SESSION['register'])){

          $name= $_SESSION['name'];
          $username= $_SESSION['username'] ;
          $password = $_SESSION['password'];
          $repassword = $_SESSION['repassword'];
          $gender = $_SESSION['gender'];
          $address = $_SESSION['address'];
          $contact= $_SESSION['contact'];
          $email= $_SESSION['email'];


     ?>
     <div class="you">
       <?php echo "Wellcome to Unify" ?>
     <p> Name : <?php echo $name; ?></p>
    <p> Username : <?php echo $username; ?></p>
    <p>Gender : <?php echo $gender; ?></p>
      <p>Address : <?php echo $address; ?></p>
    <p> Contact No. : <?php echo $contact; ?></p>
    <p> Email : <?php echo $email; ?></p>

</div>

          <?php
      }


?>
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

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<!-- Custom Script -->
<script src="./js/index.js"></script>
</body>

</html>
