<?php
include("../Connection/config.php");
 
//sql to insert data 
$sql="INSERT  INTO contact(cName, cEmail, cSubject, cMessage)
VALUES('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";

if ($conn->query($sql) === TRUE) {
  ?>
  <script>
            alert("Message sent");
            location.replace("./contactform.php");
  </script>
  <?php
   // echo "New record created successfully";
  } else {
    ?>
    <script>
              alert("Message Not sent, Retry");
              location.replace("./contactform.php");
    </script>
    <?php
  }
  
  $conn->close();
  
  ?>