<?php 
    // $servername = "remotemysql.com";
    // $username = "atl9Ug6jDL";
    // $password = "a63yAsqvis";
    // $dbname = "atl9Ug6jDL";
    
    // Heliohost
    // $servername = 'localhost';
    // $username = 'joymaker_sas';
    // $password = 'Sas032118';
    // $dbname = 'joymaker_sas_charity';
    // $port = '3306';
    
    // 000webhost
    // $servername = 'localhost';
    // $username = 'id17240722_sas';
    // $password = '[M05LC)Njw[Q@1\L';
    // $dbname = 'id17240722_joymaker';
    // $port = '3306';

    // Cloud server(running)
    $servername = 'bpvubgnbxrwph1gl0bmy-mysql.services.clever-cloud.com';
    $username = 'u08mrclizcosqrma';
    $password = 'tXaZlxWkTEWiT13WDwpf';
    $dbname = 'bvj5kl6qcgsxk7zv8bhp';
    $port = '3306';
   
    // $servername = "freedb.tech";
    // $username = "freedbtech_sas";
    // $password = "sas032118";
    // $dbname = "freedbtech_sascharity";
    

    // $servername = "sql311.epizy.com";
    // $username = "epiz_29133698";
    // $password = "ZgDMe9YjVoMOme7";
    // $dbname = "epiz_29133698_joymaker";
    
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "joymaker";
    
    // $servername = "sql100.epizy.com";
    // $username = "epiz_28499401";
    // $password = "Sas032118";
    // $dbname = "epiz_28499401_onlinedb";

    // Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    // Check connection
    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }

    // echo "Connected Successfully";

?>