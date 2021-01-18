<?php


  include "layout/head.php"

?>
<!DOCTYPE html>
<html>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #pink;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #ff9999;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
  <div class="hamburger">
    <i class="bx bx-menu"></i>
</div>
<h2> Checkout </h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3> Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" >

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" >
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" >
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" >
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" >
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" >
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address
        </label>
      <a href="product.php" class="checkout btn"> Continue Your Shopping</a>
      </form>
    </div>
  </div>
  <div class="col-25">
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
</div>
</div>
<!-- Footer -->
<footer id="footer" class="section footer">

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
