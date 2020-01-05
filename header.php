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
    <div>
    <div class="header-dark">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="index.php"  ><img src="images/tagtheart.jpg" alt="" WIDTH=250 HEIGHT=100></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <form class="form-inline mr-auto" target="_self">
                           </form>
                    <ul class="nav navbar-nav">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li class="nav-item" role="presentation">
                                <a class="nav-link" href="cart.php">CART</a>
                            </li>
                           <li class="nav-item" role="presentation">
                                <a class="nav-link" href="logout.php">LOGOUT</a>
                            </li>
                           <?php
                           }else{
                            ?>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="modal"   data-target="#ModalLoginForm" href="#">ARTIST</a></li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="customerLog.php">lOGIN</a>
                            </li>
                             <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php">ABOUT US</a></li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="modal" data-target="#AdminLoginForm" href="">ADMIN</a>
                            </li> <?php
                           }
                          
                           ?>
                           
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    </div>
</body>
        
    
</html>