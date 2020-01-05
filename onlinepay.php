<!DOCTYPE html>
<?php include('function.php') ?>

<html>
    <body>
    <div>
    <?php
     
    require 'header.php';
?>
   <br><br><br><br><br><br><br><br><br><br>
       

   <div class="container py-5">

<!-- credit card form -->
<div class="row mb-4">
  <div class="col-lg-8 mx-auto text-center">
    <h1 class="display-4"> credit card form</h1>
  </div>
</div>
<!-- End -->


<div class="row">
  <div class="col-lg-7 mx-auto">
    <div class="bg-white rounded-lg shadow-sm p-5">
      <!-- Credit card form tabs -->
      <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
        <li class="nav-item">
          <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                              <i class="fa fa-credit-card"></i>
                              Credit Card
                          </a>
        </li>
        <li class="nav-item">
          <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                              <i class="fa fa-paypal"></i>
                              Paypal
                          </a>
        </li>
        <li class="nav-item">
          <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                              <i class="fa fa-university"></i>
                               Bank Transfer
                           </a>
        </li>
      </ul>
      <!-- End -->


      <!-- Credit card form content -->
      <div class="tab-content">

        <!-- credit card info-->
        <div id="nav-tab-card" class="tab-pane fade show active">
          <p class="alert alert-success">Some text success or error</p>
          <form role="form">
            <div class="form-group">
              <label for="username">Full name (on the card)</label>
              <input type="text" name="username" placeholder="full nameS" required class="form-control">
            </div>
            <div class="form-group">
              <label for="cardNumber">Card number</label>
              <div class="input-group">
                <input type="text" name="cardNumber" placeholder="Your card number" class="form-control" required>
                <div class="input-group-append">
                  <span class="input-group-text text-muted">
                                              <i class="fa fa-cc-visa mx-1"></i>
                                              <i class="fa fa-cc-amex mx-1"></i>
                                              <i class="fa fa-cc-mastercard mx-1"></i>
                                          </span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8">
                <div class="form-group">
                  <label><span class="hidden-xs">Expiration</span></label>
                  <div class="input-group">
                    <input type="number" placeholder="MM" name="" class="form-control" required>
                    <input type="number" placeholder="YY" name="" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group mb-4">
                  <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                                              <i class="fa fa-question-circle"></i>
                                          </label>
                  <input type="text" required class="form-control">
                </div>
              </div>



            </div>
            <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm  </button>
          </form>
        </div>
        <!-- End -->

        <!-- Paypal info -->
        <div id="nav-tab-paypal" class="tab-pane fade">
          <p>Paypal is easiest way to pay online</p>
          <p>
            <button type="button" class="btn btn-primary rounded-pill"><i class="fa fa-paypal mr-2"></i> Log into my Paypal</button>
          
        </div>
        <!-- End -->

        
      </div>
      <!-- End -->

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
                <p class="copyright">TagTheArt online visual art store © 2019</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>