<?php
    include('../Connection/config.php');
    include('../header/topHeader.php');
    include('../header/navbar.php');
    include('../header/downHeader.php');

    // Create Table
    $sql = "CREATE TABLE register(
        uId INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        uFirstName VARCHAR(50) NOT NULL,
        uMiddleName VARCHAR(50) NOT NULL,
        uLastName VARCHAR(50) NOT NULL,
        uMobile VARCHAR(10)  NOT NULL,
        uEmail VARCHAR(50)  NOT NULL UNIQUE,
        uAdd VARCHAR(255)  NOT NULL,
        uStreet VARCHAR(100)  NOT NULL,
        uCity VARCHAR(100)  NOT NULL,
        uState VARCHAR(100)  NOT NULL,
        uPin INT(6)  NOT NULL,
        uPassword VARCHAR(255)  NOT NULL,
        uType VARCHAR(50)  NOT NULL,
        uRegDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if($conn -> query($sql) === TRUE) 
        echo "Table Created Successfully";

    else
        echo "Error Creating Table".$conn->error;

    $conn->close();


    include('../footer/footer.php');
?>