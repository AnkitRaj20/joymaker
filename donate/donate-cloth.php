<?php 
include('../Connection/config.php');

$idealFor = array($_POST['idealFor']);
$ageGrp = array($_POST['ageGrp']);
$season = array($_POST['season']);
$idealForEncode = base64_encode(serialize($idealFor));
$ageGrpEncode = base64_encode(serialize($ageGrp));
$seasonEncode = base64_encode(serialize($season));


echo "<br />";

  $sql = " INSERT INTO cloth (cdName,cdMobile,cdEmail,cdAdd,cdPin,cdIdealFor,cdAgeGrp,cdSeason,cdNoOfItem) 
           VALUES ('$_POST[name]','$_POST[mobile]','$_POST[email]','$_POST[add]','$_POST[pin]','$idealForEncode','$ageGrpEncode','$seasonEncode','$_POST[noOfItem]') ";

      echo $sql;

    if ($conn -> query($sql) === TRUE){
        echo "Cloth form created successfully";
        header('location:../thankyou1.php');

    }
     else{
      
        echo "Failed to create".$conn ->error;
     }

$conn -> close();

?>