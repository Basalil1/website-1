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
    <link rel="stylesheet" href="assets/css/styles.msg.css">
</head>
<style>
    
    
    #msg {
    visibility: hidden;
    min-width: 250px;
    background-color: yellow;
    color: #000;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    right: 30%;
    top: 30px;
    font-size: 17px;
}

#msg.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.100s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {
        top: 0;
        opacity: 0;
    }
    to {
        top: 30px;
        opacity: 1;
    }
}

@keyframes fadein {
    from {
        top: 30px;
        opacity: 1;
    }
    to {
        top: 0;
        opacity: 0;
    }
}

@keyframes fadeout {
    form {
        text-outline: 30px;
        opacity: 1;
    }
    to {
        top: 0;
        opacity: 0
    }
}
    
    
    </style>
</head>
<body>
    
    <div class="header-dark">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="#">Tag the Art</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                <form class="form-inline mr-auto" target="_self">
                              </form>
                        <ul class="nav navbar-nav">  
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="modal" data-target="#ModalLoginForm" href="#">ARTIST</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php">ABOUT US</a></li>
                           
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
                    <h1 class="text-center"> TagTheArt visual Art Store Artist Home page</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-clean">

   
        <form method="post" enctype="multipart/form-data">
        <?php echo display_error(); ?>
            <h2 class="text-center">Add Artwork</h2>
            <div class="form-group"><input type="text" class="form-control" name="Product" placeholder=" product Name" value="<?php echo $productname; ?> " required="required"></div>
            <div class="form-group"><input type="text" class="form-control "  name="category" placeholder=" artwork Category" value="<?php echo $category; ?>"  required="required"></div>
            <div class="form-group"><input class="form-control " type="text" name="price" placeholder="price" value="<?php echo $price; ?>"  required="required"/></div>
            <div class="form-group"><textarea class="form-control" name="description" placeholder="description" rows="14" value="<?php echo $description; ?>"  required="required"></textarea></div>
            <div class="form-group"><input class="btn btn-primary" type="file" name="userfile"/>
            </div>

            <div class="form-group"><button class="btn btn-primary" type="submit" name="up1" onclick="myFunction()" >Upload </button></div>
            <div id="msg">Congratulations you have uploaded</div>
            <script>
function myFunction(){
var x =document.getElementById("msg");
x.className = "show";
setTimeout(function(){x.className =
x.className.replace("show","");}, 3000);

}

</script>
        </form>
        <br>
        <br>
        <br>
        <br>
        




    </div>
    
  
 





































    <div class="contact-clean">

   
<form method="post" enctype="multipart/form-data">
<?php echo display_error(); ?>
    <h2 class="text-center">Add Artwork</h2>
    <div class="form-group"><input type="text" class="form-control" name="Product" placeholder=" product Name" value=" " required="required"></div>
    <div class="form-group"><input type="text" class="form-control "  name="category" placeholder=" artwork Category" value=""  required="required"></div>
    <div class="form-group"><input class="form-control " type="text" name="price" placeholder="price" value=""  required="required"/></div>
    <div class="form-group"><textarea class="form-control" name="description" placeholder="description" rows="14" value=""  required="required"></textarea></div>
    <div class="form-group"><input class="btn btn-primary" type="file" name="userfile"/>
    </div>

<div class="form-group"><button class="btn btn-primary" type="submit" name="up1" onclick="" >Upload </button></div>
   
</form>
<br>
<br>
<br>
<br>





</div>































    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="index.php">sale art works</a></li>
                            <li><a href="#"></a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                    <ul>
                            <li><a href="aboutus.php">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul
                          
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Tag the Art ....you tag it we sell it for you easy</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <div class="modal fade" role="dialog" tabindex="-1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Title</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                            <div class="modal-body">
                                <p>The content of your modal.</p>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                        </div>
                    </div>
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