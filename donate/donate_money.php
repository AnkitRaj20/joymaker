<?php  
$banner_text="Donate";
session_start();
include('../header/topHeader.php');
include('../header/navbar.php');
include('../header/downHeader.php');
?>

<section class="donate py-5 ">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
            <div class="col-md-4 left" >
                  <h2 class="text-center py-3 mt-2 text-white animate__animated animate__heartBeat animate__infinite">Donate</h2>
                <div class="sidebar">
                  <ul>
                  <li class="active"> <a href="donate_money.php" >
                    <span class="icon"><ion-icon name="card-outline"></ion-icon></span>  
                    <span class="title">Money</span>  
                  </a> </li>

                    <li><a href="donate_foodform.php">
                      <span class="icon"><ion-icon name="fast-food-outline"></ion-icon></span>  
                      <span class="title">Food</span>
                    </a></li>
                    <li><a href="donate_clothform.php">
                    <span class="icon"><ion-icon name="shirt-outline"></ion-icon></span>  
                  <span class="title">Clothes</span>  
                  </a></li>
                  </ul>
                </div>
            </div>
        <div class="col-md-8"><h1 class="text-center py-3 mt-2">Donate Money</h1>

        <form action="javascript:pay()" method="POST" autofocus="on" autocomplete="off">
        <div class="form-row g-3 ">
        
        <div class="col-md-12">
			 <div class="form-group">
             <label class="label hide" for="name">Name</label>
                        <input  type="text" id="name" class="form-control" name="name" required>
                        <span class="error" id="nameSpan"></span>
             </div>
            </div>
        
            <div class="col-md-6">
			 <div class="form-group" >
             <label class="label hide" for="mobile">Mobile</label>
                        <input  type="number" id="mobile" class="form-control" name="mobile"  required>
                        <span class="error"  id="mobileSpan"> 
                        </span>
             </div>
            </div>
            <div class="col-md-6">
			 <div class="form-group" >
             <label class="label hide" for="email">Email</label>
                        <input  type="email" id="email" class="form-control" name="email"  required>
                        <span class="error" id="emailSpan"> 
                        </span>
             </div>
            </div>
            <div class="col-md-6">
			 <div class="form-group" >
             <label class="label hide" for="amt">Amount</label>
                        <input  type="number" id="amt" class="form-control" name="amt"  required>
             </div>
            </div>
            


            <div class="col-md-6">
			 <div class="form-group" >
             <label class="label hide" for="address">Address</label>
                        <input  type="text" id="add"   class="form-control" name="add"  required>
                        <span id="addSpan"> 
                        </span>
             </div>
            </div>
            <div class="col-md-6">
			 <div class="form-group" >
             <label class="label hide" for="street">Street</label>
                        <input  type="text" id="street" class="form-control" name="street"  required>
             </div>
            </div>
      <div class="col-md-6">
            <div class="form-group">
            <label class="label" for="city">City</label>
                        <input  type="text" class="form-control" id="city" name="city"  required autofocus>
            </div>
            </div>
            
            <div class="col-md-6">
            <div class="form-group">
            <label class="label" for="state">State</label>
                        <input  type="text" class="form-control" id="state" name="state"  required autofocus>
            </div>
            </div>

            <div class="col-md-6">
			 <div class="form-group">
             <label class="label" for="pin">PIN Code</label>
                        <input  type="number" class="form-control" name="pin" id="pin" required autofocus>
                        <span class="error" id="pinSpan"></span>
             </div>
            </div>
            
            <div class="col-md-12 text-center">
            <div class="form-group">
            <input type="submit" class="btn btn-quarternary mx-auto" name="submit" id="btn" value="Pay Now" /> <br /><br />
            </div>
            </div>
        </div>
        </form>
    </div>
            </div>
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

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<?php 
	include('../footer/footer.php');
?>