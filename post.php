<?php
 if(isset($_POST['register'])){

    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $gender=$_POST['gender'];
$address=$_POST['address'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];

    include "layout/head.php"
    $_SESSION['register']=true;
    $_SESSION['name']= $name;
    $_SESSION['username']= $username;
    $_SESSION['password']= $password;
    $_SESSION['repassword']= $repassword;
    $_SESSION['gender']= $gender;
$_SESSION['address']= $address;
  $_SESSION['contact']= $contact;
    $_SESSION['email']= $email;

    header("Location:detail.php");
}
?>
