<?php 
    session_start();
    ob_start();
    include('../header/topHeader.php');
    include('../header/navbar.php');
    include('../header/downHeader.php');

    session_destroy();

    $path ='/JOYM/login';

     setcookie("JM_email", '', 1, $path);
     setcookie("JM_password", '', 1, $path);

    unset($_COOKIE['JM_email']);
    unset($_COOKIE['JM_password']);

    header('location: ../login/loginForm.php');

    include('../footer/footer.php');
?>