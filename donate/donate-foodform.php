
		<!-- <section class="donate-money">
		<ul class="link">
			<li><a href="donate-money.php" >Donate Money</a></li>
			<li><a href="donate-food.php" class="active">Donate Food</a></li>
			<li><a href="donate-clothes.php">Donate Clothes</a></li>
		</ul>
		<div class="donate-wrapper">
			<div class="donate-inner">
				<div class="donate-image-holder">
					<img src="images/registration-form-6.jpg" alt="">
				</div>
				<form action="">
					<h3>Make An Appointment(Food)</h3>
					<div class="donate-form-row">
						<input type="text" class="form-control mar-right" placeholder="Name">
						<input type="text" class="form-control" placeholder="Mail">
					</div>
					<div class="donate-form-row">
						<input type="text" class="form-control mar-right" placeholder="Phone">
						<div class="form-holder">
							<select name="" id="" class="form-control">
								<option value="" disabled selected>Choose Your Class</option>
								<option value="class 01">Class 01</option>
								<option value="class 02">Class 02</option>
								<option value="class 03">Class 03</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					<textarea name="" id="" placeholder="Message" class="form-control" style="height: 130px;"></textarea>
					<button class="bttn">Submit
						<i class="zmdi zmdi-long-arrow-right"></i>
					</button>
				</form>
				
			</div>
		</div>
		</section> -->


<?php 
  session_start();
	include("../Connection/config.php");
  $banner_text="Donate Food";

  
	include('../header/topHeader.php');
	include('../header/navbar.php');
	include('../header/downHeader.php');
?>


	<section class="donate-money">

		<ul class="link">
			<li><a href="donate-money.php">Donate Money</a></li>
			<li><a href="donate-foodform.php"  class="active">Donate Food</a></li>
			<li><a href="donate-clothform.php">Donate Clothes</a></li>
		</ul>
		<div class="donate-wrapper">
			<div class="donate-inner">
				<div class="donate-image-holder">
					<img src="<?php 
						echo $actual_link . $dir_path . '/images/donate/dm1.jpg';
					?>" alt="Donate Money" height="480px" width="285px" >
				</div>
				<form action="donate-food.php" method="POST">
					<h3>Donate Food</h3>

					<div class="donate-form-row">
						<!-- <input type="checkbox" onclick="onclick()" id="state" name="state" class="form-control mar-right" placeholder="State" required /> --> 
               <!-- onblur="alertt()" -->
               
						<input type="number" id="pin" name="pin" class="form-control" placeholder="Pin Code"   required  />
						<span class="error" id="pinError"></span>
					</div>

					<div class="donate-form-row">
						<!-- <label class="label" for="name">Name</label> -->
						<input type="text" id="name" name="name" class="form-control name" placeholder="Name" required autofocus /><br>
						<span class="error" id="nameError"></span>
						<!-- <input type="text" class="form-control" placeholder="Email"> -->
					</div>

					<div class="donate-form-row">
						<input type="number" id="mobile" name="mobile" class="form-control mar-right" placeholder="Mobile" required />
						<span id="mobileSpan"></span>
						
						<input type="email" id="email" name="email" class="form-control " placeholder="Email" required />
						<span class="error" id="emailSpan"></span>
					</div>

					<div class="donate-form-row">
						<!-- <input type="number" id="amt" name="amt" class="form-control mar-right" placeholder="Amount" required /> -->
						<input type="text" id="type" name="type" class="form-control mar-right" placeholder="Type radio" required />

            <!-- <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">HTML</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">CSS</label><br> -->

						<input type="text" id="add" name="add" class="form-control " placeholder="Address" required />
					</div>
					<div class="donate-form-row">
					
						<input type="text" id="aprxWt" name="aprxWt" class="form-control mar-right" placeholder="Approx Weight  dropdownrange" required />

            <!-- <select name="pets" id="aprxWt" name="aprxWt" class="form-control mar-right" placeholder="Approx Weight" require >
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select> -->
					
						<input type="number" id="noOfItem" name="noOfItem" class="form-control" placeholder="No. Of. Item" required />

					</div>

				
					<!-- <button type="submit" class="bttn" onclick="pay()">Pay
						<i class="zmdi zmdi-long-arrow-right"></i>
					</button> -->
					<input type="submit" class="bttn" name="submit" id="btn" value="Donate Now" /> <br /><br />
				</form>
				
			</div>
		</div>

		</section>

		<!-- Jquery for pin check -->
<!-- <script type="text/javascript">
function alertt(){
	var pin = $('#pin').val();
	if(pin === '814112' || pin === '814113'){
		alert("Inside our area");
	}
	else{
		alert("outside our area");
	}
}
</script> -->
<!-- ends -->

<!-- Jquery Validation -->
<script type="text/javascript">

$(document).ready(function(){
          $('#nameError').hide();
          $('#mobileSpan').hide();
          $('#emailSpan').hide();
          $('#pinError').hide();

          $('#name').hide();
          $('#mobile').hide();
          $('#email').hide();
          $('#type').hide();
          $('#add').hide();
          $('#aprxWt').hide();
          $('#noOfItem').hide();
          $('#btn').hide();


          var fName_err = false;
          var mobile_err = false;
          var email_err = false;
          var pin_err = false;


          // First Name validation start
          $('#name').keyup(function(){
            fName_check();
          });

          function fName_check(){
              var val = $('#name').val();
              // alert(val);

              if(val.length == ''){
                $('#nameError').show();
                $('#nameError').html('Please fill the field');
                $('#nameError').focus();
                $('#nameError').css("color", "red");
                $('#name').css("border-color", "red");
                fName_err = true;
                return false;
              }
              else if(!val.match(/^[a-zA-Z]+( [a-zA-Z]+)+$/)){
                // alert(val);
                $('#nameError').show();
                $('#nameError').html('Invalid Name');
                $('#nameError').focus();
                $('#nameError').css("color", "red");
                $('#name').css("border-color", "red");
                fName_err = true;
                return false;
              }else{
                $('#nameError').hide();
                // $('#name').show();
                $('#name').css("border-color", "");
              }
          }
          // First Name validation ends
          
         
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

function pin_check() {
    var val = $('#pin').val(),pin_err = false;
    if(val.length){
      if(val.length === 6){
          if (val === '814112' || val === '814113') {
          $('#pinError').hide();
          $('#name').show();
          $('#email').show();
          $('#mobile').show();
          $('#type').show();
          $('#add').show();
          $('#aprxWt').show();
          $('#noOfItem').show();
          $('#btn').show();
          $('#pin').css("border-color", "");
          // $('#pin').html('Welcome! in our service area.');
          // alert("Welcome! Inside our area.");
        } else {
          pin_err = true;
          $('#pinError').html('Sorry! Not in a service area.');
          $('#name').hide();
          $('#email').hide();
          $('#mobile').hide();
          $('#type').hide();
          $('#add').hide();
          $('#aprxWt').hide();
          $('#noOfItem').hide();
          $('#btn').hide();
          // alert("Sorry! Not in a service area.");
        }
      }else{
        pin_err = true;
        $('#pinError').html('Invalid Pin Code');
        $('#name').hide();
        $('#email').hide();
        $('#mobile').hide();
        $('#type').hide();
        $('#add').hide();
        $('#aprxWt').hide();
        $('#noOfItem').hide();
        $('#btn').hide();
      }
    }else{
      pin_err = true;
      $('#pinError').html('Invalid Pin Code');
      $('#name').hide();
      $('#email').hide();
          $('#mobile').hide();
          $('#type').hide();
          $('#add').hide();
          $('#aprxWt').hide();
          $('#noOfItem').hide();
          $('#btn').hide();

    }

    if(pin_err){
      
        $('#pinError').show();
        $('#pinError').focus();
        $('#pinError').css("color", "red");
        $('#pin').css("border-color", "red");
    }

// Pin validation ends


/*
    if (val.length == '') {
        $('#pinError').show();
        $('#pinError').html('Please fill the field');
        $('#pinError').focus();
        $('#pinError').css("color", "red");
        $('#pin').css("border-color", "red");
        //pin_err = true;
        //return false;
    } else if (val.length != 6) {
        // alert(val);
        $('#pinError').show();
        $('#pinError').html('Invalid Pin Code');
        $('#pinError').focus();
        $('#pinError').css("color", "red");
        $('#pin').css("border-color", "red");
        //pin_err = true;
        //return false;
    } else {
      if (pin === '814112' || pin === '814113') {
        $('#pinError').hide();
        $('#pin').css("border-color", "");
        alert("Welcome! Inside our area.");
      } else {
        alert("Sorry! Not in a service area.");
      }
    }
    */
    
}
          // Pin validation ends

           
          $('#btn').click(function(){
            alert('submit')
           fName_err = false;
           mobile_err = false;
           email_err = false;
           pin_err = false;

          //  Rechecking the error
          fName_check();  
          mobile_check();
          email_check();
          pin_check();


            if( (fName_err == false) && (mobile_err == false) && (email_err == false) && (pin_err == false) ){
              alert('true')
              return true
            }else{
              alert('wrong')
              return false;
            }
          });
          
        });

</script>

<?php 
	include('../footer/footer.php');
?>