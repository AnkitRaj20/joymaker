<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoyMaker</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="gallery3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
</head>

<body>
    <?php 
    $banner_text="Gallery";
    include('./header/topHeader.php');
    include('./header/navbar.php');
    include('./header/downHeader.php');
    ?>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center"> Gallery</h2>
                <p class="text-center">Our collection of art </p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./images/causes-1.jpg" data-lightbox="photos"><img class="img-fluid" src="./images/causes-1.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./images/causes-2.jpg" data-lightbox="photos"><img class="img-fluid" src="./images/causes-2.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./images/causes-3.jpg" data-lightbox="photos"><img class="img-fluid" src="./images/causes-3.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/loft.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/desk.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

    <?php 
    include('./footer/footer.php');
    ?>
</body>

</html>