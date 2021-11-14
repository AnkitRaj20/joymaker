<!-- nav start -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <img src="<?php echo $actual_link . $dir_path . '/images/logo.png'; ?>" alt="logo" height="220vh" width="80%">
      <a class="navbar-brand" href="<?php echo $actual_link . $dir_path . '/index.php'; ?>" style="font-family:cursive; font-size:100%">JoyMaker</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
   
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item"><a href="<?php echo $actual_link . $dir_path . '/index.php'; ?>" class="nav-link">Home</a></li>

          <li class="nav-item active"><a href="<?php echo $actual_link . $dir_path . '/about/about.php'; ?>" class="nav-link">About</a></li>

          <li class="nav-item"><a href="<?php echo $actual_link . $dir_path . '/volunteer.php'; ?>" class="nav-link">Volunteer</a></li>

          <li class="nav-item"><a href="<?php echo $actual_link . $dir_path . '/causes.php'; ?>" class="nav-link">Causes</a></li>

          <li class="nav-item"><a href="<?php echo $actual_link . $dir_path . '/blog.php'; ?>" class="nav-link">Blog</a></li>

          <li class="nav-item"><a href="<?php echo $actual_link . $dir_path . '/contact/contactForm.php'; ?>" class="nav-link">Contact</a></li>

          <li class="nav-item"><a href="<?php echo $actual_link . $dir_path . '/login/loginForm.php'; ?>" class="nav-link">Login</a></li>
         
          
          <li class="nav-item"><a href="<?php echo $actual_link . $dir_path . '/register/registerform.php'; ?>" class="nav-link">Register</a></li>

          <li class="nav-item cta"><a href="<?php echo $actual_link . $dir_path . '/donate/donate-money.php'; ?>" class="nav-link">Donate</a></li>
        </ul>
      </div>
    </div>
   </nav> -->
   <!-- END nav -->

   <!-- nav Start -->
  <php session_start(); ?> 
 <nav class="navbar  fixed-top navbar-expand-lg  navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ml-3" id="navbarTogglerDemo01">
    <a class="navbar-brand " href="<?php echo $actual_link . $dir_path . '/index.php'; ?>">
    <!-- <img src="<?php echo $actual_link . $dir_path . '/images/logo2.png'; ?>" width="30" height="30" alt="logo"> -->
    <img src="<?php echo $actual_link . $dir_path . '/images/logo1.png'; ?>" width="30" height="30" alt="logo">
    JoyMaker
  </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $actual_link . $dir_path . '/index.php'; ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $actual_link . $dir_path . '/about/about.php'; ?>">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $actual_link . $dir_path . '/gallery.php'; ?>">Gallery</a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="<?php echo $actual_link . $dir_path . '/causes.php'; ?>">Services</a> -->
      </li>
      <!-- <li class="nav-item"><a href="<?php echo $actual_link . $dir_path . '/blog.php'; ?>" class="nav-link">Blog</a></li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $actual_link . $dir_path . '/register/registerform.php'; ?>">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $actual_link . $dir_path . '/contact/contactForm.php'; ?>">Contact Us</a>
      </li>
    </ul>

    <?php if(isset($_SESSION['isLoggedIn'])){ ?>
    <a href="<?php echo $actual_link . $dir_path . '../dashboard/dashboard/user.php'; ?>">
    <button class="form-inline my-2 mr-3 my-lg-0 btn btn-outline-light"> Welcome <?php echo $_SESSION['name'] ?>  </button></a>
    <?php } ?>
    
    <?php if(!isset($_SESSION['isLoggedIn'])){ ?>
    <a href="<?php echo $actual_link . $dir_path . '/login/loginForm.php'; ?>">
    <button class="form-inline my-2 mr-3 my-lg-0 btn btn-outline-light">Log In </button></a>
    <?php } ?>


    <a href="<?php echo $actual_link . $dir_path . '/donate/donate_money.php'; ?>">
    <button class="form-inline my-2 my-lg-0 btn btn-quarternary"> Donate </button></a>
  </div>
</nav>
<!-- nav End -->