<?php  
    $banner_text="Register";
session_start();
include('../header/topHeader.php');
include('../header/navbar.php');
include('../header/downHeader.php');
?>

<section class="register py-5  animate__animated  animate__bounceInLeft">
    <div class="container">

            <div class="col-md-12 offset=md-1">
        <div class="row">
            <div class="col-md-5 py-0 pl-0">
				<!-- <img src="../images/image_6.jpg" alt="bg" class="img-fluid"> -->
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner"> 
    <div class="carousel-item active">
      <img class="d-block h-100 w-100 img-fluid " src="../images/img001.jpeg" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block h-100 w-100 img-fluid" src="../images/img002.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block h-100 w-100 img-fluid" src="../images/img03.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			</div>
            <div class="col-md-7 text-center py-3 mt-2  register-left">
                <h1 class="animate__animated animate__heartBeat animate__infinite">Join Us</h1>

                <form action="register.php" method="POST" autofocus="on" autocomplete="off">
                    <div class="form-row  g-3 ">
                        <div class="col-md-4">
			                <div class="form-group">
			                	<label class="label" for="fName">First Name</label>
                        <input  type="text" class="form-control" name="firstName" id="firstName" required autofocus>
                        <span id="firstNameSpan"> 
                        </span>
			                </div>
	                	</div>
    
                        <div class="col-md-4"> 
	            	    	<div class="form-group">
				                <label class="label" for="mName">Middle Name</label>
                        <input  type="text" class="form-control"    name="middleName" id="middleName">
                        <span id="middleNameSpan"></span>
		            	    </div>
				    	</div>
                        
                        <div class="col-md-4"> 
	            	    	<div class="form-group">
				                <label class="label" for="lName">Last Name</label>
                        <input required type="text" class="form-control"    name="lastName" id="lastName" >
                        <span id="lastNameSpan"></span>
		            	    </div>
				    	</div>
                        
                        <div class="col-md-6"> 
	            	    	<div class="form-group">
				                <label class="label" for="mobile">Mobile Number</label>
                        <input required type="number" class="form-control"    name="mobile" id="mobile" >
                        <span id="mobileSpan"></span>
		            	    </div>
				    	</div>
                        
                        <div class="col-md-6"> 
	            	    	<div class="form-group">
				                <label class="label" for="email">Email</label>
                        <input required type="email" class="form-control" name="email" id="email">
                        <span id="emailSpan"></span>
		            	    </div>
				           	</div>
                        
                        <div class="col-md-8"> 
	            	    	<div class="form-group">
				                <label class="label" for="address">Address</label>
							          	<input required type="text" class="form-control" name="address" id="address">
		            	    </div>
				            	</div>
                        
                        <div class="col-md-4"> 
	            	    	<div class="form-group">
				                <label class="label" for="street">Street</label>
				                <input required type="text" class="form-control" name="street" id="street">
		            	    </div>
				    	</div>
                        
                        <div class="col-md-4"> 
	            	    	<div class="form-group">
				                <label class="label" for="city">City</label>
				                <input required type="text" class="form-control" name="city" id="city">
		            	    </div>
				    	</div>
                        
                        <div class="col-md-4"> 
	            	    	<div class="form-group">
				                <label class="label" for="state">State</label>
				                <input required type="text" class="form-control" name="state" id="state">
		            	    </div>
				    	</div>
                        
                        <div class="col-md-4"> 
	            	    	<div class="form-group">
				                <label class="label" for="pin">PIN Code</label>
				                <input required type="number" class="form-control" name="pin" id="pin">
                        <span id="pinSpan"></span>
		            	    </div>
				    	</div>
                        
                        <div class="col-md-6"> 
	            	    	<div class="form-group">
				                <label class="label" for="password">Password</label>
                        <input required type="password" class="form-control" name="password" id="password"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                      <span id="passwordSpan"></span>
                      </div>
				    	</div>
                        
                        <div class="col-md-6"> 
	            	    	<div class="form-group">
				                <label class="label" for="confirmPassword">Confirm Password</label>
				                <input required type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                        <span id="confirmPasswordSpan"></span>
		            	    </div>
						</div>
						
						<div class="col-12">
                              <div class="form-group">
                                <input type="checkbox" class="form-check-input required" onclick="showPassword()">
                                <label class="label">
                                  Show Password
                                </label>
                              </div>
                            </div>
                        
                        <div class="col-md-12"> 
	            	    	<div class="form-group">
				                <input type="submit" class="btn btn-secondary  px-2 px-md-4" id="submitbtn" name="submit" value="Register">
		            	    </div>
				    	</div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


<script>
      function showPassword() {
var x = document.getElementById("password");
var y = document.getElementById("confirmPassword");

if (x.type === "password") {
  x.type = "text";
} else {
  x.type = "password";
}

if (y.type === "password") {
  y.type = "text";
} else {
  y.type = "password";
}  
}
    </script>
<!-- validation -->
    <script type="text/javascript">
        $(document).ready(function(){
          $('#firstNameSpan').hide();
          $('#middleNameSpan').hide();
          $('#lastNameSpan').hide();
          $('#mobileSpan').hide();
          $('#emailSpan').hide();
          $('#pinSpan').hide();
          $('#passwordSpan').hide();
          $('#confirmPasswordSpan').hide();

          var fName_err = false;
          var mName_err = false;
          var lName_err = false;
          var mobile_err = false;
          var email_err = false;
          var pin_err = false;
          var password_err = false;
          var confirmPassword_err = false;


          // First Name validation start
          $('#firstName').keyup(function(){
            fName_check();
          });

          function fName_check(){
              var val = $('#firstName').val();
              // alert(val);

              if(val.length == ''){
                $('#firstNameSpan').show();
                $('#firstNameSpan').html('Please fill the field');
                $('#firstNameSpan').focus();
                $('#firstNameSpan').css("color", "red");
                $('#firstName').css("border-color", "red");
                fName_err = true;
                return false;
              }
              else if(!val.match('^[a-zA-Z]{2,48}$')){
                // alert(val);
                $('#firstNameSpan').show();
                $('#firstNameSpan').html('Invalid Name');
                $('#firstNameSpan').focus();
                $('#firstNameSpan').css("color", "red");
                $('#firstName').css("border-color", "red");
                fName_err = true;
                return false;
              }else{
                $('#firstNameSpan').hide();
                $('#firstName').css("border-color", "");
              }
          }
          // First Name validation ends
          
          // Middle Name validation start
          $('#middleName').keyup(function(){
            mName_check();
          });

          function mName_check(){
              var val = $('#middleName').val();

              if(val.length != '' && !val.match('^[a-zA-Z]{2,48}$')){
                // alert(val);
                $('#middleNameSpan').show();
                $('#middleNameSpan').html('Invalid Name');
                $('#middleNameSpan').focus();
                $('#middleNameSpan').css("color", "red");
                $('#middleName').css("border-color", "red");
                mName_err = true;
                return false;
              }else{
                $('#middleNameSpan').hide();
                $('#middleName').css("border-color", "");
              }
          }
          // Middle Name validation ends

          // Last Name validation start
          $('#lastName').keyup(function(){
            lName_check();
          });

          function lName_check(){
              var val = $('#lastName').val();
              // alert(val);

              if(val.length == ''){
                $('#lastNameSpan').show();
                $('#lastNameSpan').html('Please fill the field');
                $('#lastNameSpan').focus();
                $('#lastNameSpan').css("color", "red");
                $('#lastName').css("border-color", "red");
                lName_err = true;
                return false;
              }
              else if(!val.match('^[a-zA-Z]{2,48}$')){
                // alert(val);
                $('#lastNameSpan').show();
                $('#lastNameSpan').html('Invalid Name');
                $('#lastNameSpan').focus();
                $('#lastNameSpan').css("color", "red");
                $('#lastName').css("border-color", "red");
                lName_err = true;
                return false;
              }else{
                $('#lastNameSpan').hide();
                $('#lastName').css("border-color", "");
              }
          }
          // Last Name validation ends

           // Mobile validation start
           $('#mobile').keyup(function(){
            mobile_check();
          });

          function mobile_check(){
              var val = $('#mobile').val();
              // alert(val);

              if(val.length == ''){
                $('#mobileSpan').show();
                $('#mobileSpan').html('Please fill the field');
                $('#mobileSpan').focus();
                $('#mobileSpan').css("color", "red");
                $('#mobile').css("border-color", "red");
                mobile_err = true;
                return false;
              }
              else if(val.length != 10){
                // alert(val);
                $('#mobileSpan').show();
                $('#mobileSpan').html('Invalid Mobile Number');
                $('#mobileSpan').focus();
                $('#mobileSpan').css("color", "red");
                $('#mobile').css("border-color", "red");
                mobile_err = true;
                return false;
              }else{
                $('#mobileSpan').hide();
                $('#mobile').css("border-color", "");
              }
          }
          // Mobile validation ends

          // Email Name validation start
          $('#email').keyup(function(){
            email_check();
          });

          function email_check(){
              var val = $('#email').val();
              
              // alert(val);

              if(val.length == ''){
                $('#emailSpan').show();
                $('#emailSpan').html('Please fill the field');
                $('#emailSpan').focus();
                $('#emailSpan').css("color", "red");
                $('#email').css("border-color", "red");
                email_err = true;
                return false;
              }
              else if(!val.match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      )){
                // alert(val);
                $('#emailSpan').show();
                $('#emailSpan').html('Invalid Email');
                $('#emailSpan').focus();
                $('#emailSpan').css("color", "red");
                $('#email').css("border-color", "red");
                email_err = true;
                return false;
              }else{
                $('#emailSpan').hide();
                $('#email').css("border-color", "");
              }
          }
          // Email validation ends

          // Pin validation start
          $('#pin').keyup(function(){
            pin_check();
          });

          function pin_check(){
              var val = $('#pin').val();
              // alert(val);

              if(val.length == ''){
                $('#pinSpan').show();
                $('#pinSpan').html('Please fill the field');
                $('#pinSpan').focus();
                $('#pinSpan').css("color", "red");
                $('#pin').css("border-color", "red");
                pin_err = true;
                return false;
              }
              else if(val.length != 6){
                // alert(val);
                $('#pinSpan').show();
                $('#pinSpan').html('Invalid Pin Code');
                $('#pinSpan').focus();
                $('#pinSpan').css("color", "red");
                $('#pin').css("border-color", "red");
                pin_err = true;
                return false;
              }else{
                $('#pinSpan').hide();
                $('#pin').css("border-color", "");
              }
          }
          // Pin validation ends

           //Password validation start
           $('#password').keyup(function(){
            pass_check();
          });

          function pass_check(){
              var val = $('#password').val();
              // alert(val);

              if(val.length == ''){
                $('#passwordSpan').show();
                $('#passwordSpan').html('Please fill the field');
                $('#passwordSpan').focus();
                $('#passwordSpan').css("color", "red");
                $('#password').css("border-color", "red");
                password_err = true;
                return false;
              }
              else if(!val.match(
      /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/
      )){
                // alert(val);
                $('#passwordSpan').show();
                $('#passwordSpan').html('Must Contain Capital Letter,small letter, numbers and should be of 8 characteres. No special Character allowed');
                $('#passwordSpan').focus();
                $('#passwordSpan').css("color", "red");
                $('#password').css("border-color", "red");
                password_err = true;
                return false;
              }else{
                $('#passwordSpan').hide();
                $('#password').css("border-color", "");
              }
          }
          // Password validation ends
           
          //Confirm Password validation start
           $('#confirmPassword').keyup(function(){
            cnf_pass_check();
          });

          function cnf_pass_check(){
              var val = $('#password').val();
              var con_pass_val = $('#confirmPassword').val();
              // alert(val);

              if(val != con_pass_val){
                $('#confirmPasswordSpan').show();
                $('#confirmPasswordSpan').html("Password didn't match");
                $('#confirmPasswordSpan').focus();
                $('#confirmPasswordSpan').css("color", "red");
                $('#confirmPassword').css("border-color", "red");
                confirmPassword_err = true;
                return false;
              }
              else{
                $('#confirmPasswordSpan').hide();
                $('#confirmPassword').css("border-color", "");
              }
          }
          // Confirm Password validation ends


          $('#submitbtn').click(function(){
             fName_err = false;
           mName_err = false;
           lName_err = false;
           mobile_err = false;
           email_err = false;
           pin_err = false;
           password_err = false;
           confirmPassword_err = false;

          fName_check();
          mName_check();
          lName_check();
          mobile_check();
          email_check();
          pin_check();
          pass_check();
          cnf_pass_check();

            // alert('second check');

            if( (fName_err == false) && (mName_err == false) && (lName_err == false) && (mobile_err == false) && (email_err == false) && (pin_err == false) &&  (password_err == false) && (confirmPassword_err == false) ){
              // alert('true')
              return true
            }else{
              // alert('wrong')
              return false;
            }
          });
          
        });
    </script>

<?php 
include('../footer/footer.php');
?>
