<?php  
session_start();
$banner_text="Contact Us";
include('../header/topHeader.php');
include('../header/navbar.php');
include('../header/downHeader.php');
?>

<section class="register py-5 bg-light animate__animated  animate__bounceInLeft">
    <div class="container">

            <div class="col-md-10 offset=md-1">
        <div class="row">
            <div class="col-md-5 py-0 pl-0">
				<!-- <img src="../images/image_6.jpg" alt="bg" class="img-fluid"> -->
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block h-100 w-100 img-fluid " src="../images/contact-us-1.jpg" alt="First slide"  >
    </div>
    <div class="carousel-item">
      <img class="d-block h-100 w-100 img-fluid" src="../images/contact-us-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block h-100 w-100 img-fluid" src="../images/contact-us-3.jpg" alt="Third slide">
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
                <h1 class="animate__animated animate__heartBeat animate__infinite">Contact Us</h1>

                <form action="contact.php" method="POST" autofocus="on" autocomplete="off">
                    <div class="form-row  g-3 ">
                        <div class="col-md-6">
			                <div class="form-group">
			                	<label class="label" for="fName">Full Name</label>
                        <input  type="text" class="form-control" name="name"  id="name" required autofocus>
                        <span id="nameSpan"> 
                        </span>
			                </div>
	                	</div>
                        
                        <div class="col-md-6"> 
	            	    	<div class="form-group">
				                <label class="label" for="email">Email</label>
                        <input required type="email" class="form-control" name="email" id="email">
                        <span id="emailSpan"></span>
		            	    </div>
				           	</div>
                        
                        <div class="col-md-12"> 
	            	    	<div class="form-group">
				                <label class="label" for="subject">Subject</label>
							          	<input required type="text" class="form-control" name="subject" id="subject">
		            	    </div>
				            	</div>
                        
                      <div class="col-md-12">
												<div class="form-group">
													<label class="label" for="message">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
												</div>
											</div>
                        <div class="col-md-12"> 
	            	    	<div class="form-group">
				                <input type="submit" class="btn  btn-secondary px-2 px-md-4" id="submitbtn" name="submit" value="Send Message">
		            	    </div>
				    	</div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>



<!-- JQUERY VALIDATION -->
    <script type="text/javascript">
        $(document).ready(function(){
          $('#nameSpan').hide();
          $('#emailSpan').hide();

          var fName_err = false;
          var email_err = false;


          //Name validation start
          $('#name').keyup(function(){
            fName_check();
          });

          function fName_check(){
              var val = $('#name').val();
              // alert(val);

              if(val.length == ''){
                $('#nameSpan').show();
                $('#nameSpan').html('Please fill the field');
                $('#nameSpan').focus();
                $('#nameSpan').css("color", "red");
                $('#name').css("border-color", "red");
                fName_err = true;
                return false;
              }
              else if(!val.match(/^[a-zA-Z]+( [a-zA-Z]+)+$/)){
                // alert(val);
                $('#nameSpan').show();
                $('#nameSpan').html('Invalid Name');
                $('#nameSpan').focus();
                $('#nameSpan').css("color", "red");
                $('#name').css("border-color", "red");
                fName_err = true;
                return false;
              }else{
                $('#nameSpan').hide();
                $('#name').css("border-color", "");
              }
          }
          //Name validation ends
          
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

           
          
          $('#submitbtn').click(function(){
            alert('submit')
             fName_err = false;
             email_err = false;

              fName_check();
              email_check();

            // alert('second check');

            if( (fName_err == false)  && (email_err == false)){
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
