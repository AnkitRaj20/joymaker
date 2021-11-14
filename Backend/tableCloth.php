<?php 
include('../Connection/config.php');

// Create table
   $sql = "CREATE TABLE cloth(
    cdId INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cdName VARCHAR (255) NOT NULL,
    cdMobile VARCHAR(10) NOT NULL,
    cdEmail VARCHAR(50)  NOT NULL,
    cdAdd VARCHAR(255)  NOT NULL,
    cdPin VARCHAR(6)  NOT NULL,
    cdIdealFor VARCHAR(255)  NOT NULL,
    cdDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    cdAgeGrp VARCHAR(10)  NOT NULL,
    cdSeason VARCHAR(50)  NOT NULL,
    cdNoOfItem VARCHAR(255)  NOT NULL
)";

if ( $conn -> query($sql) === TRUE)
       echo "Table created successfully";

    else

       echo"Error creating table".$conn->error;

    $conn->close();

 
?>