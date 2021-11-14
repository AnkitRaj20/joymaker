<?php
    include('../Connection/config.php');

    include('../header/topHeader.php');
    include('../header/navbar.php');
    include('../header/downHeader.php');

    // Create Table
    $sql = "CREATE TABLE payment(
        pId INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        pName VARCHAR(255) NOT NULL,
        pMobile VARCHAR(10)  NOT NULL,
        pEmail VARCHAR(50)  NOT NULL,
        pAmount VARCHAR(255)  NOT NULL,
        pAdd VARCHAR(255)  NOT NULL,
        pStreet VARCHAR(100)  NOT NULL,
        pCity VARCHAR(100)  NOT NULL,
        pState VARCHAR(100)  NOT NULL,
        pPin INT(6)  NOT NULL,
        pStatus VARCHAR(10)  NOT NULL,
        pSId VARCHAR(255)  NOT NULL,
        pDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if($conn -> query($sql) === TRUE) 
        echo "Table Created Successfully";

    else
        echo "Error Creating Table".$conn->error;

    $conn->close();


    include('../footer/footer.php');
?>