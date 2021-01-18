<!DOCTYPE html>
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
  <title>Unify</title>
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

  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details container-md">
      <div class="left">
        <div class="main">
          <img src="./images/promo4.jpg" alt="">
        </div>
        <div class="thumbnails">
          <div class="thumbnail">
            <img src="./images/promo4.jpg" alt="">
          </div>
          <div class="thumbnail">
            <img src="./images/pic5.jpg" alt="">
          </div>
          <div class="thumbnail">
            <img src="./images/product6.jpg" alt="">
          </div>
          <div class="thumbnail">
            <img src="./images/product5.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="right">
        <span>Home/Boy's Belt</span>
        <h1>Boy’s Belt By Handsome</h1>
        <div class="price">500 BDT</div>
        <form>
          <div>
            <select>
              <option value="Select Size" selected disabled>Select Size</option>
              <option value="1">32</option>
              <option value="2">42</option>
              <option value="3">52</option>
              <option value="4">62</option>
            </select>
            <span><i class='bx bx-chevron-down'></i></span>
          </div>
        </form>

        <form class="form">
          <input type="text" placeholder="1">
          <a href="cart.php" class="addCart">Add To Cart</a>
        </form>
        <h3>Product Detail</h3>
        <p>It is very soft</p>
      </div>
    </div>
  </section>

  <!-- Related -->
  <section class="section featured">
    <div class="top container">
      <h1>Related Products</h1>
      <a href="product.php" class="view-more">View more</a>
    </div>

    <div class="product-center container">
      <div class="product">
        <div class="product-header">
          <img src="./images/product6.jpg" alt="">
          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>Boy’s T-Shirt</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">2500 BDT</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src="./images/product7.jpg" alt="">

          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>Hand Bag</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">2400 BDT</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src="./images/pic3.jpg" alt="">

          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>Girl’s Top</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">1500 BDT</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src="./images/promo2.jpg" alt="">

          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>Boy’s Shoes</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">1200 BDT</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="cart">Wish List</a>
          <a href="#">Returns</a>
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

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Custom Script -->
  <script src="./js/index.js"></script>
</body>

</html>
