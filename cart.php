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
        <?php
        echo"You are logged In";
        ?></h2>

  <!-- Cart Items -->
  <div class="container-md cart">
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>

      <?php


$sql = "SELECT * FROM cart WHERE accountid='".$guestid."'";
$result = $conn->query($sql);

$subtotal=0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $productdata=array();

              $sql = "SELECT * FROM products where product_id=".$row['productid'];
              $resultxx = $conn->query($sql);

              if ($resultxx->num_rows > 0) {
                // output data of each row
                while($rowb = $resultxx->fetch_assoc()) {
                  $productdata=$rowb;
                }
              }


              $subtotal+=($productdata['product_price']*$row['qty']);

    ?>
    <tr>
      <td>
        <div class="cart-info">
        <img src="<?php echo $baseurl.$productdata['product_img'] ?>" alt="">
          <div>
            <p><?php echo $productdata['product_title']; ?></p>
            <span>Price: <?php echo $productdata['product_price']; ?> BDT</span>
            <br />
            <a href="http://localhost/Unify/api/addcart.php?productid=<?php echo $row['productid']; ?>&qty=0&redirect=true">remove</a>
          </div>
        </div>
      </td>
      <td><input type="number" value="<?php echo $row['qty']; ?>" min="0" onchange="updatecart(<?php echo $row['productid']; ?>,this.value);"></td>
      <td><?php echo ($productdata['product_price']*$row['qty']); ?> BDT</td>
    </tr>
    <?php
  }
} else {
  echo "0 results";
}




      ?>

    </table>

    <div class="total-price">
      <table>
        <tr>
          <td>Subtotal</td>
          <td><?php echo $subtotal; ?></td>
        </tr>
        <tr>
          <td>Tax</td>
          <td><?php
            $taxpercentage=10;
            $multiplier=(100+$taxpercentage)/100;
            $total=$multiplier*$subtotal;
            echo $total-$subtotal;
           ?></td>
        </tr>
        <tr>
          <td>Total</td>
          <td><?php echo $total; ?></td>
        </tr>
      </table>
      <a href="out.php" class="checkout btn">Proceed To Checkout</a>

    </div>

  </div>




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
