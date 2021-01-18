<?php


  include "layout/head.php"

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Products</title>
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
                    <a href="cart.php" class="nav-link icon"> <i class="bx bx-shopping-bag"></i></a>
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

    <!-- All Products -->
    <section class="section all-products" id="products">
        <div class="top container">
            <h1>All Products</h1>

        </div>

        <div class="product-center container">


<?php

          $sql = "SELECT * FROM products";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              // var_dump($row);
              ?>
              <div class="product">
                  <div class="product-header">
                      <img src="<?php echo $baseurl.$row['product_img'] ?>" alt="">
                      <ul class="icons">
                          <a href="product-details.php"><span><i class="bx bx-heart"></i></span></a>
                          <a href="http://localhost/Unify/api/addcart.php?productid=<?php echo $row['product_id']; ?>&qty=1&redirect=true"> <span><i class="bx bx-shopping-bag"></i></span>
                          </a>
                          <span><i class="bx bx-search"></i></span>
                      </ul>
                  </div>
                  <div class="product-footer">
                      <a href="product-details.php">
                          <h3><?php echo $row['product_title']; ?></h3>
                      </a>
                      <div class="rating">
                          <i class="bx bxs-star"></i>
                          <i class="bx bxs-star"></i>
                          <i class="bx bxs-star"></i>
                          <i class="bx bxs-star"></i>
                          <i class="bx bx-star"></i>
                      </div>
                      <h4 class="price"><?php echo $row['product_price']; ?> BDT</h4>
                  </div>

              </div>
              <?php
            }
          } else {
            echo "0 results";
          }

?>

        </div>
    </section>

    <section class="pagination">
        <div class=" container">
            <span>1</span>
            <a href="product-details.php"><span><i class='bx bx-right-arrow-alt'></i></span></a>
        </div>
    </section>



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
