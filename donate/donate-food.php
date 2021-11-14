<?php 
include('../Connection/config.php');


$sql = "INSERT INTO food (fdName,fdMobile,fdEmail,fdAdd,fdPin,fdType,fdAprxWt,fdNoOfItem) 
        VALUES ('$_POST[name]','$_POST[mobile]','$_POST[email]','$_POST[add]','$_POST[pin]','$_POST[type]','$_POST[aprxWt]','$_POST[noOfItem]')";

      echo $sql;

   if($conn -> query($sql) === TRUE){
     echo "Food form added successfuly";

     header('location:../thankyou1.php');

   }
       else
{ 
  echo "Food form failed to add".$conn->error;}
    

     $conn->close();
?>