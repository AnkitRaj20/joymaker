<?php 
    include('../Connection/config.php');

    session_start();

    if(isset($_POST['amt']) && isset($_POST['name'])){
      $amount =$_POST['amt'];
      $name =$_POST['name'];
      $email =$_POST['email'];
      $mobile =$_POST['mobile'];
      $add =$_POST['add'];
      $street =$_POST['street'];
      $city =$_POST['city'];
      $state =$_POST['state'];
      $pin =$_POST['pin'];
      $payment_status="Pending";
      $added_on= date('Y-m-d h:i:s');
      $payment_id = "";
      

      $sql="INSERT INTO payment(pName,pAmount,pEmail,pMobile,pAdd,pStreet,pCity,pState,pPin,pStatus,pDate,pSId)
         VALUES('$name','$amount','$email','$mobile','$add','$street','$city','$state','$pin','$payment_status','$added_on','$payment_id')";

      echo $sql;
      
    if($conn -> query($sql) === TRUE) 
     echo "Details Added Successfully";

    else
     echo "Error Adding Details".$conn->error;


     $_SESSION['pId'] = mysqli_insert_id($conn);
    }


    if(isset($_POST['payment_id']) && isset($_SESSION['pId'])){
      $payment_id =$_POST['payment_id'];

      echo $payment_id;
      echo $_SESSION['pId'];

      $update="UPDATE payment SET pStatus='Success',pSId='$payment_id' WHERE pId ='".$_SESSION['pId']."'";

      echo $update;
      
    if($conn -> query($update) === TRUE) 
     echo "Details Updated Successfully";
    else
     echo "Error Updating Details".$conn->error;
    }
?>