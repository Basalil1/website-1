<?php

require 'conn.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
else{
    $user_id=$_GET['id'];
    $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
    $confirm_query_result=mysqli_query($db,$confirm_query) or die(mysqli_error($db));
    
}


?>
<!DOCTYPE html>
<?php include('function.php') ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>visualart</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div class="header-dark">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="#">Tag the Art</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <form class="form-inline mr-auto" target="_self">
                           </form>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">HOME</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">ABOUT US</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container hero">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center">welcome to TagTheArt visual Art Store</h1>
                </div>
            </div>
        </div>
    </div>
    




    <div class="contact-clean">
<
   
<form method="post" enctype="multipart/form-data">
<?php echo display_error(); ?>
    <h2 class="text-center">Building details</h2>
    <h5 class="text-center"> provide Building details</h5>
    <div class="form-group"><input type="text" class="form-control" name="fname" placeholder=" First Name" value="<?php echo $productname; ?> " required="required"></div>
    <div class="form-group"><input type="text" class="form-control "  name="lnam" placeholder="last Name" value="<?php echo $category; ?>"  required="required"></div>
    <div class="form-group"><input class="form-control " type="text" name="address" placeholder="Address" value="<?php echo $price; ?>"  required="required"/></div>
    <div class="form-group"><input class="form-control " type="text" name="address" placeholder="city" value="<?php echo $price; ?>"  required="required"/></div>
    <div class="form-group"><input class="form-control " type="text" name="email" placeholder="Email address" value="<?php echo $price; ?>"  required="required"/></div>
    <div class="form-group"><button class="btn btn-primary" type="submit" name="up1" >Order </button></div>
   
 
    </div>

    
</form>
<br>
<br>
<br>
<br>
<h2 class="text-center">Added Artwork</h2>




</div>













    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="index.php">sell artworks</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Tag the Art ....you tag it we sell it for you easy</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>

                <p class="copyright">Company Name © 2019</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>