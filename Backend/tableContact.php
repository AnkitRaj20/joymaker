<?php 
    include('../Connection/config.php');

    $sql = "CREATE TABLE contact(
        cId INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        cName VARCHAR(255) NOT NULL,
        cEmail VARCHAR(50)  NOT NULL,
        cSubject VARCHAR(255)  NOT NULL,
        cMessage VARCHAR(255)  NOT NULL,
        cDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if($conn -> query($sql) === TRUE) 
echo "Table Created Successfully";

else
echo "Error Creating Table".$conn->error;

$conn->close();
?>