<!-- <style>

.pattern{
  margin-top: 5rem;
}


    @import url('https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap');
.thank{
  font-family: 'Rock Salt', cursive;
  font-size:  750%;
  color: grey;
}

.size{
  font-size: 150%;
}

.confetti {
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1000;
}
.confetti-piece {
    position: absolute;
    width: 10px;
    height: 30px;
    background: #ffd300;
    top: 0;
    opacity: 0;
}
.confetti-piece:nth-child(1) {
    left: 7%;
    -webkit-transform: rotate(-40deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 182ms;
    -webkit-animation-duration: 1116ms;
}
.confetti-piece:nth-child(2) {
    left: 14%;
    -webkit-transform: rotate(4deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 161ms;
    -webkit-animation-duration: 1076ms;
}
.confetti-piece:nth-child(3) {
    left: 21%;
    -webkit-transform: rotate(-51deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 481ms;
    -webkit-animation-duration: 1103ms;
}
.confetti-piece:nth-child(4) {
    left: 28%;
    -webkit-transform: rotate(61deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 334ms;
    -webkit-animation-duration: 708ms;
}
.confetti-piece:nth-child(5) {
    left: 35%;
    -webkit-transform: rotate(-52deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 302ms;
    -webkit-animation-duration: 776ms;
}
.confetti-piece:nth-child(6) {
    left: 42%;
    -webkit-transform: rotate(38deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 180ms;
    -webkit-animation-duration: 1168ms;
}
.confetti-piece:nth-child(7) {
    left: 49%;
    -webkit-transform: rotate(11deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 395ms;
    -webkit-animation-duration: 1200ms;
}
.confetti-piece:nth-child(8) {
    left: 56%;
    -webkit-transform: rotate(49deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 14ms;
    -webkit-animation-duration: 887ms;
}
.confetti-piece:nth-child(9) {
    left: 63%;
    -webkit-transform: rotate(-72deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 149ms;
    -webkit-animation-duration: 805ms;
}
.confetti-piece:nth-child(10) {
    left: 70%;
    -webkit-transform: rotate(10deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 351ms;
    -webkit-animation-duration: 1059ms;
}
.confetti-piece:nth-child(11) {
    left: 77%;
    -webkit-transform: rotate(4deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 307ms;
    -webkit-animation-duration: 1132ms;
}
.confetti-piece:nth-child(12) {
    left: 84%;
    -webkit-transform: rotate(42deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 464ms;
    -webkit-animation-duration: 776ms;
}
.confetti-piece:nth-child(13) {
    left: 91%;
    -webkit-transform: rotate(-72deg);
    -webkit-animation: makeItRain 1000ms infinite ease-out;
    -webkit-animation-delay: 429ms;
    -webkit-animation-duration: 818ms;
}
.confetti-piece:nth-child(odd) {
    background: #7431e8;
}
.confetti-piece:nth-child(even) {
    z-index: 1;
}
.confetti-piece:nth-child(4n) {
    width: 5px;
    height: 12px;
    -webkit-animation-duration: 2000ms;
}
.confetti-piece:nth-child(3n) {
    width: 3px;
    height: 10px;
    -webkit-animation-duration: 2500ms;
    -webkit-animation-delay: 1000ms;
}
.confetti-piece:nth-child(4n-7) {
  background: red;
  right: 30%;
}
@-webkit-keyframes makeItRain {
    from {opacity: 0;}
    50% {opacity: 1;}
    to {-webkit-transform: translateY(350px);}
}
</style> -->

<?php 
 
include('./header/topHeader.php');
include('./header/navbar.php');
// include('./header/downHeader.php');
?>

<section class="pattern ">
<div class="card text-center m-5" >
<div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
    <div class="confetti-piece"></div>
 
  <div class="card-body">
    <!-- <h5 class="card-title ">Card </h5> -->
    <!-- <p class="card-text">Some quick </p> -->
    <h1 class="thank" >Thank you !</h1>
    <p class="size">Thank you for donating.  We will contact you soon. </p>
    <a href="#" class="btn btn-secondary">Go to homepage</a><br>
    <!-- <p>Any Trouble<a href="#">Contact Us</a> -->
</p>
  </div>
<svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 350" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(208.517, 251.813, 245.799, 1)" offset="0%"></stop><stop stop-color="rgba(198.717, 229.045, 228.942, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,315L34.3,274.2C68.6,233,137,152,206,122.5C274.3,93,343,117,411,134.2C480,152,549,163,617,186.7C685.7,210,754,245,823,215.8C891.4,187,960,93,1029,99.2C1097.1,105,1166,210,1234,245C1302.9,280,1371,245,1440,215.8C1508.6,187,1577,163,1646,140C1714.3,117,1783,93,1851,70C1920,47,1989,23,2057,17.5C2125.7,12,2194,23,2263,52.5C2331.4,82,2400,128,2469,175C2537.1,222,2606,268,2674,268.3C2742.9,268,2811,222,2880,186.7C2948.6,152,3017,128,3086,151.7C3154.3,175,3223,245,3291,227.5C3360,210,3429,105,3497,99.2C3565.7,93,3634,187,3703,192.5C3771.4,198,3840,117,3909,122.5C3977.1,128,4046,222,4114,233.3C4182.9,245,4251,175,4320,175C4388.6,175,4457,245,4526,280C4594.3,315,4663,315,4731,268.3C4800,222,4869,128,4903,81.7L4937.1,35L4937.1,350L4902.9,350C4868.6,350,4800,350,4731,350C4662.9,350,4594,350,4526,350C4457.1,350,4389,350,4320,350C4251.4,350,4183,350,4114,350C4045.7,350,3977,350,3909,350C3840,350,3771,350,3703,350C3634.3,350,3566,350,3497,350C3428.6,350,3360,350,3291,350C3222.9,350,3154,350,3086,350C3017.1,350,2949,350,2880,350C2811.4,350,2743,350,2674,350C2605.7,350,2537,350,2469,350C2400,350,2331,350,2263,350C2194.3,350,2126,350,2057,350C1988.6,350,1920,350,1851,350C1782.9,350,1714,350,1646,350C1577.1,350,1509,350,1440,350C1371.4,350,1303,350,1234,350C1165.7,350,1097,350,1029,350C960,350,891,350,823,350C754.3,350,686,350,617,350C548.6,350,480,350,411,350C342.9,350,274,350,206,350C137.1,350,69,350,34,350L0,350Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(207.223, 231.321, 227.974, 1)" offset="0%"></stop><stop stop-color="rgba(192.656, 235.875, 231.336, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,105L34.3,87.5C68.6,70,137,35,206,64.2C274.3,93,343,187,411,239.2C480,292,549,303,617,280C685.7,257,754,198,823,192.5C891.4,187,960,233,1029,239.2C1097.1,245,1166,210,1234,180.8C1302.9,152,1371,128,1440,122.5C1508.6,117,1577,128,1646,151.7C1714.3,175,1783,210,1851,210C1920,210,1989,175,2057,186.7C2125.7,198,2194,257,2263,268.3C2331.4,280,2400,245,2469,198.3C2537.1,152,2606,93,2674,93.3C2742.9,93,2811,152,2880,169.2C2948.6,187,3017,163,3086,163.3C3154.3,163,3223,187,3291,175C3360,163,3429,117,3497,110.8C3565.7,105,3634,140,3703,134.2C3771.4,128,3840,82,3909,87.5C3977.1,93,4046,152,4114,180.8C4182.9,210,4251,210,4320,180.8C4388.6,152,4457,93,4526,105C4594.3,117,4663,198,4731,192.5C4800,187,4869,93,4903,46.7L4937.1,0L4937.1,350L4902.9,350C4868.6,350,4800,350,4731,350C4662.9,350,4594,350,4526,350C4457.1,350,4389,350,4320,350C4251.4,350,4183,350,4114,350C4045.7,350,3977,350,3909,350C3840,350,3771,350,3703,350C3634.3,350,3566,350,3497,350C3428.6,350,3360,350,3291,350C3222.9,350,3154,350,3086,350C3017.1,350,2949,350,2880,350C2811.4,350,2743,350,2674,350C2605.7,350,2537,350,2469,350C2400,350,2331,350,2263,350C2194.3,350,2126,350,2057,350C1988.6,350,1920,350,1851,350C1782.9,350,1714,350,1646,350C1577.1,350,1509,350,1440,350C1371.4,350,1303,350,1234,350C1165.7,350,1097,350,1029,350C960,350,891,350,823,350C754.3,350,686,350,617,350C548.6,350,480,350,411,350C342.9,350,274,350,206,350C137.1,350,69,350,34,350L0,350Z"></path><defs><linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(201.954, 245.878, 247.259, 1)" offset="0%"></stop><stop stop-color="rgba(198.177, 249.536, 245.882, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 100px); opacity:0.8" fill="url(#sw-gradient-2)" d="M0,70L34.3,64.2C68.6,58,137,47,206,35C274.3,23,343,12,411,11.7C480,12,549,23,617,46.7C685.7,70,754,105,823,116.7C891.4,128,960,117,1029,99.2C1097.1,82,1166,58,1234,75.8C1302.9,93,1371,152,1440,151.7C1508.6,152,1577,93,1646,75.8C1714.3,58,1783,82,1851,87.5C1920,93,1989,82,2057,75.8C2125.7,70,2194,70,2263,58.3C2331.4,47,2400,23,2469,11.7C2537.1,0,2606,0,2674,5.8C2742.9,12,2811,23,2880,75.8C2948.6,128,3017,222,3086,262.5C3154.3,303,3223,292,3291,268.3C3360,245,3429,210,3497,204.2C3565.7,198,3634,222,3703,198.3C3771.4,175,3840,105,3909,64.2C3977.1,23,4046,12,4114,52.5C4182.9,93,4251,187,4320,221.7C4388.6,257,4457,233,4526,186.7C4594.3,140,4663,70,4731,58.3C4800,47,4869,93,4903,116.7L4937.1,140L4937.1,350L4902.9,350C4868.6,350,4800,350,4731,350C4662.9,350,4594,350,4526,350C4457.1,350,4389,350,4320,350C4251.4,350,4183,350,4114,350C4045.7,350,3977,350,3909,350C3840,350,3771,350,3703,350C3634.3,350,3566,350,3497,350C3428.6,350,3360,350,3291,350C3222.9,350,3154,350,3086,350C3017.1,350,2949,350,2880,350C2811.4,350,2743,350,2674,350C2605.7,350,2537,350,2469,350C2400,350,2331,350,2263,350C2194.3,350,2126,350,2057,350C1988.6,350,1920,350,1851,350C1782.9,350,1714,350,1646,350C1577.1,350,1509,350,1440,350C1371.4,350,1303,350,1234,350C1165.7,350,1097,350,1029,350C960,350,891,350,823,350C754.3,350,686,350,617,350C548.6,350,480,350,411,350C342.9,350,274,350,206,350C137.1,350,69,350,34,350L0,350Z"></path><defs><linearGradient id="sw-gradient-3" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(149.752, 231.321, 225.518, 1)" offset="0%"></stop><stop stop-color="rgba(144.062, 224.491, 216.044, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 150px); opacity:0.7" fill="url(#sw-gradient-3)" d="M0,140L34.3,116.7C68.6,93,137,47,206,70C274.3,93,343,187,411,186.7C480,187,549,93,617,52.5C685.7,12,754,23,823,64.2C891.4,105,960,175,1029,204.2C1097.1,233,1166,222,1234,204.2C1302.9,187,1371,163,1440,145.8C1508.6,128,1577,117,1646,116.7C1714.3,117,1783,128,1851,157.5C1920,187,1989,233,2057,221.7C2125.7,210,2194,140,2263,105C2331.4,70,2400,70,2469,64.2C2537.1,58,2606,47,2674,81.7C2742.9,117,2811,198,2880,233.3C2948.6,268,3017,257,3086,233.3C3154.3,210,3223,175,3291,169.2C3360,163,3429,187,3497,192.5C3565.7,198,3634,187,3703,175C3771.4,163,3840,152,3909,140C3977.1,128,4046,117,4114,145.8C4182.9,175,4251,245,4320,262.5C4388.6,280,4457,245,4526,215.8C4594.3,187,4663,163,4731,169.2C4800,175,4869,210,4903,227.5L4937.1,245L4937.1,350L4902.9,350C4868.6,350,4800,350,4731,350C4662.9,350,4594,350,4526,350C4457.1,350,4389,350,4320,350C4251.4,350,4183,350,4114,350C4045.7,350,3977,350,3909,350C3840,350,3771,350,3703,350C3634.3,350,3566,350,3497,350C3428.6,350,3360,350,3291,350C3222.9,350,3154,350,3086,350C3017.1,350,2949,350,2880,350C2811.4,350,2743,350,2674,350C2605.7,350,2537,350,2469,350C2400,350,2331,350,2263,350C2194.3,350,2126,350,2057,350C1988.6,350,1920,350,1851,350C1782.9,350,1714,350,1646,350C1577.1,350,1509,350,1440,350C1371.4,350,1303,350,1234,350C1165.7,350,1097,350,1029,350C960,350,891,350,823,350C754.3,350,686,350,617,350C548.6,350,480,350,411,350C342.9,350,274,350,206,350C137.1,350,69,350,34,350L0,350Z"></path></svg>  
</div>


</section>



<?php 
include('./footer/footer.php');
?>
