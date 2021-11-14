    <?php
    session_start();
    ob_start();
    
        // Connection 
        include('../Connection/config.php');

        // Header
        include('../header/topHeader.php');
        include('../header/navbar.php');
        include('../header/downHeader.php');

        $getPassword = $_POST['password'];
        $email = $_POST['email'];

        $pass = password_hash($getPassword, PASSWORD_BCRYPT);
        $emailquery = "select * from register where uEmail='$email'";
        $query = mysqli_query($conn, $emailquery);
        $emailcount = mysqli_num_rows ($query);

        if ($emailcount > 0) {
           ?>
        <script>
            alert(" This Email  is Already Registered.");
            location.replace("./registerform.php");
        </script>
        <?php

        } else {
        // Query
        $sql="INSERT INTO register(
           uFirstName,uMiddleName,uLastName,uMobile,uEmail,uAdd,uStreet,uCity,uState,uPin,uType,uPassword)
            VALUES (
                '$_POST[firstName]','$_POST[middleName]','$_POST[lastName]','$_POST[mobile]','$_POST[email]','$_POST[address]','$_POST[street]','$_POST[city]','$_POST[state]','$_POST[pin]','user' , '$pass'
        )";

        if($conn->query($sql)===TRUE){
                $_SESSION['isLoggedIn'] = 'login' ;
                $last_id = mysqli_insert_id($conn);
                $_SESSION['id'] = $last_id;
                $_SESSION['email'] = $_POST['email'];
                echo "Account Created Successfully";
                header('location: ../dashboard/dashboard/user.php');
        }

        else
            echo "Error".$conn->error;
            }

        $conn->close();

        
        // Footer
        include('../footer/footer.php');
    ?>
