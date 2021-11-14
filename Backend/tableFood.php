<?php 
include('../Connection/config.php');

// Create table
   $sql = "CREATE TABLE food(
    fdId INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fdName VARCHAR (255) NOT NULL,
    fdMobile VARCHAR(10) NOT NULL,
    fdEmail VARCHAR(50)  NOT NULL,
    fdAdd VARCHAR(255)  NOT NULL,
    fdPin VARCHAR(6)  NOT NULL,
    fdType VARCHAR(255)  NOT NULL,
    fdDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    fdAprxWt VARCHAR(10)  NOT NULL,
    fdNoOfItem VARCHAR(255)  NOT NULL
)";

if ( $conn -> query($sql) === TRUE)
       echo "Table created successfully";

    else

       echo"Error creating table".$conn->error;

    $conn->close();

 
?>