
<!-- nav start -->
<?php 
    session_start();
    $banner_text="About Us";

include('../header/topHeader.php');
include('../header/navbar.php');
include('../header/downHeader.php');
?>

<section class="ftco-section ftco-no-pt ftco-no-pb">
 <div class="container">
  <div class="row d-flex no-gutters">
   <div class="col-md-6 d-flex order-md-last">
    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about-1.jpg);">
    </div>
  </div>
  <div class="col-md-6 pr-md-5 py-md-5">
    <div class="heading-section pt-md-5 mb-4">
     <span class="subheading">About us</span>
     <h2 class="mb-2">Give a helping hand to a needy people</h2>
     <p>JoyMaker helps you to donate money, food, clothes etc. It is an ideal for people who want to help the poor people by donating or feeding them.The people can register and become volunteer and can provide any of these services.Working on the Covid- 19 response since the beginning of the crisis, JoyMaker is evolving its approach with changing needs on the ground.</p>
     <p><a href="<?php echo $actual_link . $dir_path . '/register/registerform.php'; ?>" class="btn btn-secondary">Become a Volunteer</a></p>
   </div>
 </div>
</div>
</div>
</section>

<section class="ftco-section">
 <div class="container">
  <div class="row justify-content-center pb-5">
    <div class="col-md-7 heading-section text-center ftco-animate">
     <span class="subheading">Welcome to JoyMaker</span>
     <h2>We Believe that We Can Save More Lifes with You</h2>
   </div>
 </div>
 <div class="row">
  <div class="col-md-3 services-2 w-100 text-center">
   <div class="icon icon-1 d-flex align-items-center justify-content-center"><span class="flaticon-water-drop"></span></div>
   <div class="text">
    <h4>Water</h4>
  </div>
</div>
<div class="col-md-3 services-2 w-100 text-center">
 <div class="icon icon-2 d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
 <div class="text">
  <h4>Medical</h4>
</div>
</div>
<div class="col-md-3 services-2 w-100 text-center">
 <div class="icon icon-3 d-flex align-items-center justify-content-center"><span class="flaticon-bread"></span></div>
 <div class="text">
  <h4>Food</h4>
</div>
</div>
<div class="col-md-3 services-2 w-100 text-center">
 <div class="icon icon-4 d-flex align-items-center justify-content-center"><span class="flaticon-university"></span></div>
 <div class="text">
  <h4>Education</h4>
</div>
</div>
</div>
</div>
</section>


<section class="ftco-hireme bg-secondary">
 <div class="container">
  <div class="row justify-content-between">
   <div class="col-md-8 col-lg-8 d-flex align-items-center">
    <div class="w-100">
     <h2>Best Way to Make a Difference in the Lives of Others</h2>
   </div>
 </div>
 <div class="col-md-4 col-lg-4 d-flex align-items-center justify-content-end">
  <p class="mb-0"><a href="<?php echo $actual_link . $dir_path . '/register/registerform.php'; ?>" class="btn btn-outline-light py-3 px-4">Become A Volunteer</a></p>
</div>
</div>
</div>
</section>


<?php 
include('../footer/footer.php');
?>

