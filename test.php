<!DOCTYPE html>

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
        <div class="header-dark" style="background-image: url(&quot;assets/img/golden-particles-bokeh-decorative-background_52683-18848.jpg&quot;);">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="#">Tag the Art</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"></li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                        </form><span class="navbar-text"><a class="login" href="#" id="myModal">Log In</a></span>
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">About us</a>
                            
                            <!--sign in modal start-->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content title1">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                                                    <fieldset>


                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="email"></label>
                                                            <div class="col-md-6">
                                                                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

                                                            </div>
                                                        </div>


                                                        <!-- Password input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="password"></label>
                                                            <div class="col-md-6">
                                                                <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">

                                                            </div>
                                                        </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Log in</button>
                                                </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                <!--sign in modal closed-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#"></a>
                                </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Artist</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">About us</a></li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                    </div>

                    <!--sign in modal start-->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content title1">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title title1"><span style="color:rgb(0, 255, 55)">Log In</span></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                                        <fieldset>


                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="email"></label>
                                                <div class="col-md-6">
                                                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

                                                </div>
                                            </div>


                                            <!-- Password input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="password"></label>
                                                <div class="col-md-6">
                                                    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">

                                                </div>
                                            </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Log in</button>
                                    </fieldset>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!--sign in modal closed-->
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
    </div>
   
   
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">sale art works</a></li>
                            <li>
                                <a href="#"></a>
                            </li>
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
                <p class="copyright">Tag the Art © 2019</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

<script>
function myFuctio(){
var x =document.getElementById("msg");
x.className = "show";
setTimeout(function(){x.className =
x.className.replace("show","");}, 3000);

}

</script>


    </body>
</html>
