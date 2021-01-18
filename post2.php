<?php
include "database2.php";
   $db2 = new Database2();
 if(isset($_POST['signin'])){

    $name=$_POST['contact_name'];

  $email=$_POST['contact_email'];
    $comment=$_POST['contact_message'];


    $query = "insert into contact (contact_name,contact_email,contact_message)
    Values('$name','$email','$comment')";
    $qResult = $db2->insert($query);
    if($qResult){
         header("Location:account.php?msg=' Successul'");
      }
  else {

    header("Location:registration.php?msg='Recheck'");
  }
}

?>
