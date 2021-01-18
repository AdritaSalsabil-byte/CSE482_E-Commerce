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
      <div class="background">
        <div class="container">
          <div class="screen">
            <div class="screen-header">
              <div class="screen-header-left">
                <div class="screen-header-button close"></div>
                <div class="screen-header-button maximize"></div>
                <div class="screen-header-button minimize"></div>
              </div>
              <div class="screen-header-right">
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
              </div>
            </div>

                <div class="login-box" style="margin-left: 20px;margin-top: 15px;">
    <div>
      <form action="post2.php" method="POST">
        <div class="user-box" style="height: 40px;margin-left: 60px;"><label >Name : </label><br><input type="text"  name="contact_name"> </div><br><br>
        <div class="user-box" style="height: 40px;margin-left: 60px;"><label>Email :      </label><br><input type="text" name="contact_email"><br></div><br><br>
        <div  class="user-box" style="height: 40px;margin-left: 60px;"><label> Comments :   </label><br><input type="text" name="contact_message"><br><br></div><br>
        <div class="user-box">
            <a href="#">

        <span></span>
        <span></span>
                    <span></span>
                      <input type="submit" name="signin" value="signin">
                  </a>

      </form>
    </div>
  </div>
              </div>
            </div>
          </div>

        </div>
      </div>



      </div>
    </div>


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
