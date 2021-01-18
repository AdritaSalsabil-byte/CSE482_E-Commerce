<?php

include "../layout/head.php";
if(isset($_GET['productid'])){
if(isset($_GET['qty'])){
  $valueisguest=$isguest?1:0;
  $accountid=$guestid?$guestid:0;

if($_GET['qty']==0){

$sql = "DELETE FROM cart WHERE accountid='".$guestid."' AND productid='".$_GET['productid']."'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

}else{

  $sql = "SELECT * FROM cart WHERE accountid='".$guestid."' AND productid='".$_GET['productid']."'";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {

  $sql = "UPDATE cart SET qty='".$_GET['qty']."',size='".$_GET['size']."' WHERE accountid='".$guestid."' AND productid='".$_GET['productid']."'";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

}else{
  $sql = "INSERT INTO cart (productid, isguest, accountid,qty,size)
  VALUES ('".$_GET['productid']."','".$valueisguest."','".$accountid."','".$_GET['qty']."','".$_GET['size']."')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

}

}
}

if(isset($_GET['redirect'])){
  $newURL="http://localhost/Unify/cart.php";
  header('Location: '.$newURL);
}
