<?php

session_start();


$baseurl="http://localhost/Unify/";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom_site";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function randomid(){
  $characters = '123456789';
     $charactersLength = strlen($characters);
     $randomString = '';
         for ($i = 0; $i < 16; $i++) {
             $randomString .= $characters[rand(0, $charactersLength - 1)];
         }
     $pin=$randomString;
     return $pin;
}
$isloggedin=false;
$isguest=true;
$guestid="";
if(isset($_SESSION["guestid"])){
$guestid=$_SESSION["guestid"];
}else{
  $guestid=randomid();
  $_SESSION["guestid"]=$guestid;
}
