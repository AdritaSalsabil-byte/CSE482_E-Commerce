<?php


  include "layout/head.php"

?>

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
  <script>
function usersearchTxt(str) {
  var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
if(this.readyState == 4 && this.status == 200){
document.getElementById('searchTxt').innerHTML = this.responseText;
}
}
xmlhttp.open("GET","search.php?search="+str,true);
xmlhttp.send();
}
</script>
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
  <h2>

    <input id="searchBox" type="text"  onkeyup="usersearchTxt(document.getElementById('searchBox').value);">
<div id="searchTxt">
    <div class="you">


</div>
</div>
<?php
include 'search.php';
echo fetch('');
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
<script>
function updatecart(productid,qty){

if(qty==0){
var url="http://localhost/Unify/api/addcart.php?productid="+productid+"&qty="+qty+"&redirect=true";
window.location.href = url;
}else{
var url="http://localhost/Unify/api/addcart.php?productid="+productid+"&qty="+qty;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
  location.reload();

}
};
xhttp.open("GET", url, true);
xhttp.send();
}

}
</script>

</body>

</html>
