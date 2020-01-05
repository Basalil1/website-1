<!DOCTYPE html>
<html>
<?php
     session_start();
    require 'check.php';
    
?>

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
        <div>

            <?php
     
     require 'header.php';
 ?>
                <div class="container hero">

                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center">welcome to TagTheArt visual Art Store</h1>
                    </div>

                </div>
        </div>

        <!-- Modal HTML Markup -->
        <div id="ModalLoginForm" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <h1 class="modal-title">ARTIST</h1>
                    <div class="modal-header">
                        <h5 class="modal-title">LOGIN</h5>


                    </div>
                    <div class="modal-body">
                        <form role="form" method="POST" action="artist_login_function.php">
                            <input type="hidden" name="_token" value="">

                            <div class="form-group">
                                <div>
                                    <input type="email" class="form-control input-lg" name="email" value="" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type="password" class="form-control input-lg" name="password" placeholder="Password">
                                </div>
                            </div>


                            <div class="form-group">
                                <div>
                                    <div class="checkbox">
                                        <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-success">Login</button>

                                    <a class="btn btn-link" href="">Forgot Your Password?</a>
                                </div>
                            </div>
                        </form>
                        <h5>REGISTER</h5>
                        <form role="form" method="POST" action="function.php">
                            <div class="form-group">
                                <div>
                                    <input type="text" class="form-control input-lg" name="name" value="" placeholder="Firstname">
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type="text" class="form-control input-lg" name="lname" value="" placeholder="lasstname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">E-Mail Address</label>
                                <div>
                                    <input type="email" class="form-control input-lg" name="email" value="" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">

                                <div>
                                    <input type="password" class="form-control input-lg" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">

                                <div>
                                    <input type="password" class="form-control input-lg" name="password1" placeholder="Confrim Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-success" name="aregister" onclick=" myFunction()">
                                    Register
                                </button>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        </div>






        <!--Admin modal login-->
        <div id="AdminLoginForm" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title">ADMIN </h1>
                        <h1 class="modal-title">Signin </h1>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="POST" action="adminlog.php">
                            <input type="hidden" name="_token" value="">

                            <div class="form-group">
                                <div>
                                    <input type="email" class="form-control input-lg" name="email" value="" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type="password" class="form-control input-lg" name="password" placeholder="Password">
                                </div>
                            </div>


                            <div class="form-group">
                                <div>
                                    <div class="checkbox">
                                        <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-success">Login</button>

                                    <a class="btn btn-link" href="">Forgot Your Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="photo-gallery">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">visual art works</h2>
                    <p class="text-center"><br />WE BRING THE ART GALLERY TO YOU...ORDER WITH A CLICK OF A PIC<br /><br /></p>
                </div>
                <!--display Artworks code-->
                <div class="row">
                    <?php
$db = mysqli_connect('localhost', 'root', '', 'tagtheart');
if($db){
    
 
}

$query= "SELECT * FROM artworks  ";
$result= mysqli_query($db,$query);
if (mysqli_num_rows($result)>0 )
{  
 
    while($row =mysqli_fetch_array($result)){
     
        $iid=$row['artid'];
        

?>

                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                            <div class="thumbnail">
                                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; " align="center">
                                    <img src="<?php echo $row['img_dir']; ?>" height="200px" width="150px" />
                                    <h4 class="text-info">
                                        <?php echo $row['product_name'];?>
                                    </h4>
                                    <h4 class="text-info"> BWP
                                        <?php echo  $row['price'];?>
                                    </h4>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                    <a href="customerLog.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                    <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart($iid)){

                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';

                                            }
                                            else{
                                                ?>

                                        <a href="cart_add.php?id=<?php echo $row['artid'] ?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <?php
    }
   
}

  
 ?>
                </div>
            </div>
        </div>
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="index.php">sale art works</a></li>
                                <li>
                                    <a href="#"></a>
                                </li>
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
                        <div class="col-sm-6 col-md-3 item">

                        </div>

                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">Tag the Art © 2019</p>
                </div>
            </footer>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    </body>

</html>