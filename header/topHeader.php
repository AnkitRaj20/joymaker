 <!DOCTYPE html>
<html lang="en">
<head>
<?php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

       // if localhost  then,going to  JOYM path  . If in server, then the given server path it will choose in the else part
            if ($_SERVER['SERVER_NAME'] === "localhost") {
            $dir_path = '/JOYM';
           } else {
          $dir_path = '';
        }
      ?>

<style>
  /* Hide Number Arrows */
  
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>

<!-- FAVICON -->
<!-- <link href="<?php echo $actual_link . $dir_path . 'images/logo.png'; ?>" rel="icon" style="height:100px;width:100px"/> -->
<link href="<?php echo $actual_link . $dir_path . '/images/logo1.png'; ?>" rel="icon" sizes="500*500" type="image/png"/>


  <title>JoyMaker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <!-- JQUERY -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <!-- RAZORPAY -->
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  
  <link href="<?php echo $actual_link . $dir_path . '/css/animate.css'; ?>" rel="stylesheet" />

  <link href="<?php echo $actual_link . $dir_path . '/css/gallery.css'; ?>" rel="stylesheet" />
  <link href="<?php echo $actual_link . $dir_path . '/css/thankyou.css'; ?>" rel="stylesheet" />


  <!-- gallery links starts -->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

  <!-- Gallery links ends -->
  
  
  <link href="<?php echo $actual_link . $dir_path . '/css/owl.carousel.min.css'; ?>" rel="stylesheet" />

  <link href="<?php echo $actual_link . $dir_path . '/css/owl.theme.default.min.css'; ?>" rel="stylesheet" />

  <link href="<?php echo $actual_link . $dir_path . '/css/magnific-popup.css'; ?>" rel="stylesheet" />

  <link href="<?php echo $actual_link . $dir_path . '/css/bootstrap-datepicker.css'; ?>" rel="stylesheet" />

  <link href="<?php echo $actual_link . $dir_path . '/css/jquery.timepicker.css'; ?>" rel="stylesheet" />

  <link href="<?php echo $actual_link . $dir_path . '/css/flaticon.css'; ?>" rel="stylesheet" />
 
  <!-- Donate Style CSS -->
  <!-- <link rel="stylesheet" href="css/"> -->
  <link href="<?php echo $actual_link . $dir_path . '/css/donate-style.css'; ?>" rel="stylesheet" />
  
  <link href="<?php echo $actual_link . $dir_path . '/css/donate_try.css'; ?>" rel="stylesheet" />

  <!--DONATE MATERIAL DESIGN ICONIC FONT -->
  <link rel="stylesheet" href="<?php echo $actual_link . $dir_path . '/donate/material-design-iconic-font.min.css'; ?>" />

  <!-- Donation Script -->
  <!-- <script src="<?php echo $actual_link . $dir_path . '/donate/js/jquery-3.3.1.min.js'; ?>" ></script> -->
		<script src="<?php echo $actual_link . $dir_path . '/donate/js/main.js'; ?>"></script>

    
		

 <!-- After isset,..Taking either http/https,:// host path  -->

 <!-- <img src="<?php echo $actual_link . $dir_path . '/images/about-3.jpg'; ?>" alt="check"> -->
  
  <link rel="stylesheet" type="text/css" href="<?php echo $actual_link . $dir_path . '/css/register.css'; ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo $actual_link . $dir_path . '/css/login.css'; ?>">


  <!-- <link rel="stylesheet" href="login1.css"> -->


  <link href="<?php echo $actual_link . $dir_path . '/css/style.css'; ?>" rel="stylesheet" />

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

 <!-- data-aos animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- multiple select -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>
 
 <!-- Top header -->
 <div class="wrap">
    <div class="container">
     <div class="row">
      <!-- <div class="col-md-6 d-flex align-items-center">
       <p class="mb-0 phone pl-md-2">
        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
        <a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
      </p>
    </div>
    <div class="col-md-6 d-flex justify-content-md-end">
     <div class="social-media">
      <p class="mb-0 d-flex">
       <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
       <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
       <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
       <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
       
     </p>
   </div>
 </div> -->
 </div>
 </div>
 </div>

 <!-- Top header -->