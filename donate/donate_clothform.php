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
                    <li> <a href="donate_money.php" >
                    <span class="icon"><ion-icon name="card-outline"></ion-icon></span>  
                  <span class="title">Money</span>  
                  </a> </li>

                    <li><a href="donate_foodform.php">
                      <span class="icon"><ion-icon name="fast-food-outline"></ion-icon></span>  
                      <span class="title">Food</span>
                    </a></li>
                    <li class="active"><a href="donate_clothform.php">
                    <span class="icon"><ion-icon name="shirt-outline"></ion-icon></span>  
                  <span class="title">Clothes</span>  
                  </a></li>
                  </ul>
                </div>
            </div>
        <div class="col-md-8"><h1 class="text-center py-3 mt-2">Donate Clothes</h1>
        <p>Enter Pin Code to search </p>

        <form action="donate-cloth.php" method="POST" autofocus="on" autocomplete="off">
        <div class="form-row g-3 ">
        <div class="col-md-6">
			 <div class="form-group">
             <label class="label" for="pin">PIN Code</label>
                        <input  type="number" class="form-control" name="pin" id="pin" required autofocus>
                        <span id="pinError"> 
                        </span>
             </div>
            </div>
        <div class="col-md-12">
			 <div class="form-group">
             <label class="label hide" for="name">Name</label>
                        <input  type="text" id="name" class="form-control" name="name" required>
                        <span id="nameSpan"> 
                        </span>
             </div>
            </div>
        
            <div class="col-md-6">
			 <div class="form-group" >
             <label class="label hide" for="mobile">Mobile</label>
                        <input  type="number" id="mobile" class="form-control" name="mobile"  required>
                        <span id="mobileSpan"> 
                        </span>
             </div>
            </div>
            <div class="col-md-6">
			 <div class="form-group" >
             <label class="label hide" for="email">Email</label>
                        <input  type="email" id="email" class="form-control" name="email"  required>
                        <span id="emailSpan"> 
                        </span>
             </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
            <label class="label hide" for="idealFor">Ideal For</label>
            <select class="form-control multiple-select " id="idealFor" name="idealFor[]"  placeholder="ideal For" multiple aria-label=".form-select-lg example" required>
    <!-- <option value="">Gender</option> -->
    <option value="Women">Women</option>
    <option value="Men">Men</option>
    <!-- <option value="others">Both Men and Women</option> -->
    <option value="Girls">Girls</option>
    <option value="Boys">Boys</option>
    <option value="Under 5 Years">Under 5 Years</option>
    <!-- <option value="Both girls and boys">Both girls and boys</option> -->
    </select> 
    <span class="hide">*You can Select multiple option</span>  
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
            <div class="form-group">
            <label class="label hide" for="size">Sizes</label>
            <select class="form-control multiple-select " id="ageGrp" name="ageGrp[]"  placeholder="Size" multiple  aria-label=".form-select-lg example" required>
                <option value="Under 6 Months">Under 6 Months</option>
                <option value="Under 2 Years">Under 2 Years</option>
                <option value="2-5 Years">2-5 Years</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
               <option value="L">L</option>
               <option value="XL">XL</option>
               <option value="XXL">XXL</option>
               <option value="XXXL">XXXL</option>
    </select>    
    <span class="hide">*You can Select multiple option</span>  
             </div>
            </div>

            <div class="col-md-6">
            <div class="form-group" id="noOfItem">
            <label class="label" for="noOfItems">Number Of Items</label>
                        <input  type="number" class="form-control" name="noOfItem"  required autofocus>
                        <span id="itemsSpan"> 
                        </span>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
            <label class="label hide" for="seasons">Seasons</label>
            <select class="form-control multiple-select " id="season" name="season[]"  placeholder="Size" multiple  aria-label=".form-select-lg example" required>
            <option value="Summer">Summer</option>
            <option value="Winter">Winter</option>
            <option value="Others">Others</option>
            <option value="Both Summer and Winter">Both Summer and Winter</option>
            </select>    
    <span class="hide">*You can Select multiple option</span>  
             </div>
            </div>
            
            <div class="col-md-12 text-center">
            <div class="form-group">
            <input type="submit" class="btn btn-quarternary mx-auto" name="submit" id="btn" value="Donate Now" /> <br /><br />
            </div>
            </div>
        </div>
        </form>
    </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
  $(".multiple-select").select2({
  // maximumSelectionLength: 2
});
</script>

<!-- Jquery Validation -->
<script type="text/javascript">
     $(document).ready(function(){
          $('#nameSpan').hide();
          $('#mobileSpan').hide();
          $('#emailSpan').hide();
          $('#pinError').hide();

          $('#name').hide();
          $('#mobile').hide();
          $('#email').hide();
          $('#idealFor').hide();
          $('#add').hide();
          $('.select2-selection--multiple').hide();
          $('#season').hide();
          $('#noOfItem').hide();
          $('.hide').hide();
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

function pin_check() {
    var val = $('#pin').val(),pin_err = false;
    if(val.length){
      if(val.length === 6){
          if (val === '814112' || val === '814113') {
          $('#pinError').hide();
          $('#name').show();
          $('#email').show();
          $('#mobile').show();
          $('#idealFor').show();
          $('#add').show();
          $('.select2-selection--multiple').show();
          $('#season').show();
          $('#noOfItem').show();
          $('.hide').show();
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
          $('#idealFor').hide();
          $('#add').hide();
          $('.select2-selection--multiple').hide();
          $('#season').hide();
          $('#noOfItem').hide();
          $('.hide').hide();
          $('#btn').hide();
          // alert("Sorry! Not in a service area.");
        }
      }else{
        pin_err = true;
        $('#pinError').html('Invalid Pin Code');
        $('#name').hide();
        $('#email').hide();
        $('#mobile').hide();
        $('#idealFor').hide();
        $('#add').hide();
        $('.select2-selection--multiple').hide();
        $('#season').hide();
        $('#noOfItem').hide();
        $('.hide').hide();
        $('#btn').hide();
      }
    }else{
      pin_err = true;
      $('#pinError').html('Invalid Pin Code');
      $('#name').hide();
      $('#email').hide();
          $('#mobile').hide();
          $('#idealFor').hide();
          $('#add').hide();
          $('.select2-selection--multiple').hide();
          $('#season').hide();
          $('#noOfItem').hide();
          $('.hide').hide();
          $('#btn').hide();

    }

    if(pin_err){
      
        $('#pinError').show();
        $('#pinError').focus();
        $('#pinError').css("color", "red");
        $('#pin').css("border-color", "red");
    }

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
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<?php 
	include('../footer/footer.php');
?>