<?php 
  session_start();
	include("../Connection/config.php");
  $banner_text="Donate Money";

	include('../header/topHeader.php');
	include('../header/navbar.php');
	include('../header/downHeader.php');
?>


	<section class="donate-money">
		<ul class="link">
			<li><a href="donate-money.php" class="active">Donate Money</a></li>
			<li><a href="donate-foodform.php">Donate Food</a></li>
			<li><a href="donate-clothform.php">Donate Clothes</a></li>
		</ul>
		<div class="donate-wrapper">
			<div class="donate-inner">
				<div class="donate-image-holder">
					<img src="<?php 
						echo $actual_link . $dir_path . '/images/donate/dm1.jpg';
					?>" alt="Donate Money" height="480px" width="285px" >
				</div>

				<!-- Form -->
				<form action="javascript:pay()" method="POST" autofocus="on" autocomplete="off">
					<h3 class="animate__animated animate__fadeInDown animate__delay-1s">Donate Money</h3>
          <!-- <label class="label" for="Name">Name</label> -->
					<div class="donate-form-row">
						<input type="text" id="name" name="name" class="form-control name" placeholder="Name" required autofocus/> <br />
            <span class="error" id="nameSpan"></span>
					</div>
		
					<div class="donate-form-row">
						<input type="number" id="mobile" name="mobile" class="form-control mar-right" placeholder="Mobile" required />
						<span id="mobileSpan"></span>
						
						<input type="email" id="email" name="email" class="form-control " placeholder="Email" required />
						<span class="error" id="emailSpan"></span>
					</div>
					

					<div class="donate-form-row">
						<input type="number" id="amt" name="amt" class="form-control mar-right" placeholder="Amount" required />
						<input type="text" id="add" name="add" class="form-control " placeholder="Address" required />
					</div>
					<div class="donate-form-row">
						<input type="text" id="street" name="street" class="form-control mar-right" placeholder="Street" required />
						<input type="text" id="city" name="city" class="form-control " placeholder="City" required />
					</div>
					<div class="donate-form-row">
						<input type="text" id="state" name="state" class="form-control mar-right" placeholder="State" required />
						<input type="number" id="pin" name="pin" class="form-control" placeholder="Pin Code" required />
						<span class="error" id="pinSpan"></span>
					</div>
					<div class="donate-form-row">
					<!-- <input type="text" pattern="\d*" maxlength="4"> -->
					</div>
					<!-- <button type="submit" class="bttn" >Pay
						<i class="zmdi zmdi-long-arrow-right"></i>
					</button> -->
					<input type="submit" class="form-inline my-2 my-lg-0 bttn" name="submit" id="btn" value="Pay Now" /> <br /><br />
				</form>
				
			</div>
		</div>
		</section>


		<!-- Script for Ajaz and RazorPay -->
		<script>
        function pay(){
			var name=jQuery('#name').val();
      var amt=jQuery('#amt').val();
      var email=jQuery('#email').val();
			var mobile=jQuery('#mobile').val();
			var add=jQuery('#add').val();
			var street=jQuery('#street').val();
			var city=jQuery('#city').val();
			var state=jQuery('#state').val();
			var pin=jQuery('#pin').val();
			

      jQuery.ajax({
      type: "post",
      url:'http://localhost/JOYM/donate/payment_process.php',
			data: "amt="+amt+"&name="+name+"&email="+email+"&mobile="+mobile+"&add="+add+"&street="+street+"&city="+city+"&state="+state+"&pin="+pin,
      success: function(result){
			  var options = {
					// RazorPay
				"key": "rzp_test_S3DvF9vnBARyK4", // Enter the Key ID generated from the Dashboard
				"amount": amt*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
				"currency": "INR",
					// company name
        "name": "JoyMaker",
				"description": "Every donation will make an impact",
				"image": "<?php echo $actual_link . $dir_path . '/images/logo1.png'; ?>",
				// "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
				// "account_id": "acc_Ef7ArAsdU5t0XL",
				"handler": function (response){
				jQuery.ajax({
			  type: "post",
			  url:'http://localhost/JOYM/donate/payment_process.php',
        data: "payment_id="+response.razorpay_payment_id,
        success: function(result){
          window.location.href= "../thankyou.php";
        },
    })
               }
              };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            }
		})
	}
	</script>

<!-- JQUERY VALIDATION -->
<script type="text/javascript">
        $(document).ready(function(){
          $('#nameSpan').hide();
          $('#mobileSpan').hide();
          $('#emailSpan').hide();
          $('#pinSpan').hide();

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
          // First Name validation ends
          
         
           // Mobile validation start
           $('#mobile').keyup(function(){
            mobile_check();
          });

          function mobile_check(){
              var val = $('#mobile').val();
    

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

           
          $('#btn').click(function(){
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
              return true
            }else{
              alert('Please fill all the fields')
              return false;
            }
          });
          
        });
    </script>

	

<?php 
	include('../footer/footer.php');
?>