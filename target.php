<?php
  include "layout/head.php"
  $username = "";
  $password = "";
  if(isset($_POST['username'])) {
    $username = $_POST['username'];
  }

  if(isset($_POST['password'])) {
    $password = $_POST['password'];
  }

  if ($username == "Adrita" && $password == "09876") {
    setcookie("cookieSet", "YES", time() + (86400 * 60), "/");
    header("Location:cart.php");
  } else {
    $_SESSION["error"] = "Invalid Credentials";
    $_SESSION["username"] = $username;
    header("Location:account.php");
  }
