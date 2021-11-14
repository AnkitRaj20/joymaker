    <?php 
    session_start();
    $banner_text="Login";

    include('../header/topHeader.php');
    include('../header/navbar.php');
    include('../header/downHeader.php');
    ?>
	<section class="login" >
    <div data-aos="flip-left" data-aos-duration="5s">
<!--  Request me for a signup form or any type of help  -->
<div class="login-form">    
    <form action="login.php" method="POST">
		<!-- <div class="avatar"><i class="material-icons">&#xE7FF;</i></div> -->
		<img class="loginimg" src="./images/loginimg.png" alt="img" width="35%" style="display:flex;margin-left:30%;">
        <h4 class="modal-title">Login to Your Account</h4>
        <p class="bg-danger text-white text-center px-3"> <?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                $_SESSION['msg'] = "";
            }else{
                $_SESSION['msg'] = "";
            }
        ?> </p>
        <p class="bg-success text-white text-center px-3"> <?php 
            if(isset($_SESSION['pass-update'])){
                echo $_SESSION['pass-update'];
                $_SESSION['pass-update'] = "";
            }else{
                $_SESSION['pass-update'] = "";
            }
        ?> </p>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" value=" <?php if(isset($_COOKIE['JM_email'])){
                echo $_COOKIE['JM_email']; } ?>" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php if(isset($_COOKIE['JM_password'])){ echo $_COOKIE['JM_password']; } ?>" required>
        </div>
        <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox" name="rememberme"> Remember me</label>
            <a href="./forgotPassword.php" class="forgot-link">Forgot Password?</a>
        </div> 
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
        <br>           
        <div class="text-center small">Don't have an account? <a href="../register/registerform.php">Sign up</a></div>
    </form>			
</div>
</div>
</section>
<?php 
include('../footer/footer.php');
?>

  
  
  
  
  