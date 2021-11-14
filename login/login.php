<?php
    session_start();

    include("../Connection/config.php");

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        // Getting the data from login form
        $email=$_POST['email'];
        $password= $_POST['password'];

        // Query
        $sql = "SELECT * FROM register where uEmail='$email'";
        $result= mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);  

        if($num === 1){
            while($row = mysqli_fetch_assoc($result)){
                // print_r($row);
                if(password_verify($password, $row['uPassword'])){
                    // Logged In
                    $_SESSION['isLoggedIn'] = 'login' ;

                    // Fetching id and email from db
                    $_SESSION['id'] = $row['uId'];
                    $_SESSION['email'] = $row['uEmail'];

                        if($_POST['rememberme']){
                            // set the cookie to expire in 30 days
                            setcookie('JM_email',$email,time()+60*60*24*30);
                            setcookie('JM_password',$password,time()+60*60*24*30);
                        }

                    header('location: ../dashboard/dashboard/user.php');
                }else
                $_SESSION['msg'] = "Wrong Email Id or Password";
                
                ?>
                  <script> 
                //   alert("Wrong Email Id or Password");
                  location.replace("./loginForm.php");
                  </script>
                 
                <?php
            }
        }
        else{
            $_SESSION['msg'] = "Wrong Email";
            ?>
                <script>  location.replace("./loginForm.php"); </script>
            <?php
        }
}
?>

