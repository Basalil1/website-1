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
                        <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php">ABOUT US</a></li>
                        
                    </ul>
                   
                </div>
            </div>
        </nav>
    </div>
    <div class="container" style="height: auto;">
        <div>
            <form><label>First name</label></form>
        </div>
    </div>
    <div class="container">

        <div class="login-clean">
            <form method="post" action="">
                <?php echo display_error(); ?>
                <h2 class="">Register</h2>

                <div class="form-group">
                    <input type="text" name="name" value="" class="form-control" placeholder="firstname">
                </div>
                <div class="form-group">
                    <input type="text" name="Lastname" value="" class="form-control" placeholder="Lastname">
                </div>
                <div class="form-group">

                    <input type="email" name="email" value="" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">

                    <input type="password" name="password_1" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">

                    <input type="password" name="password_2" class="form-control" placeholder="confirm">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="users">Register</button>
                </div>
                <p>
                    Already a member? <a href="customerLog.php">Sign in</a>
                </p>

            </form>
        </div>




        

    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="index.php">sell artworks</a></li>
                            
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="aboutus.php">aboutus</a> </li>
                           
                            <li><a href="#">Developed by shanganani basalili</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Tag the Art ....you tag it we sell it for you easy</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>