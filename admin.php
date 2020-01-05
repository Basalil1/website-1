<!DOCTYPE html>
<?php
    session_start();
    require 'conn.php';
    if(!isset($_SESSION['email'])){
        header('location: adminLog.php');
    }
    $user_id=$_SESSION['id'];
    $query="select * from artworks ";
    $result=mysqli_query($db,$query) or die(mysqli_error($db));
    $products= mysqli_num_rows($result);
    $sum=0;
    
?>
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
    <div class="header-dark" style="background-image: url(&quot;assets/img/golden-particles-bokeh-decorative-background_52683-18848.jpg&quot;);">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="#">Tag the Art</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                    </form>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">HOME</a></li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="customerLog.php">lOGIN</a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">VIEW ARTIST</a></li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="logout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container hero">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center">TagTheArt visual Art Store</h1>
                </div>
            </div>
        </div>
    </div>
    
     <div class="container">
                <h5>UPLOADED ARTWORKS</h5>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                        <th>no.</th><th>Artwork ID</th><th>Artwork</th><th>Name</th><th>Price</th><th>Action</th>
                        </tr>
                       <?php 
                        $result=mysqli_query($db,$query) or die(mysqli_error($db));
                        $products= mysqli_num_rows($result);
                        $counter=1;
                       while($row=mysqli_fetch_array($result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th> <?php echo $row['artid'] ?></th><th> <img src="<?php echo $row['img_dir']; ?>"  height="200px" width="150px" /></th><th><?php echo $row['product_name']?></th><th>BWP<?php echo $row['price']?></th>
                            <th><a href='delete.php?id=<?php echo $row['id'] ?>' class="btn btn-danger">Delete</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
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
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
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