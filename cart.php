<?php
    session_start();
    require 'conn.php';
    if(!isset($_SESSION['email'])){
        header('location: customerLog.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select artid,product_name,price from users_items ut inner join artworks it on artid=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($db,$user_products_query) or die(mysqli_error($db));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
       }
    }
?>
<!DOCTYPE html>
<html>
    <body>
    <div>
    <?php
     
    require 'header.php';
?>


        
        <br><br><br><br><br><br><br><br><br><br>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th> item id</th><th>Item Name</th><th>Price</th><th>Action</th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($db,$user_products_query) or die(mysqli_error($db));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th> <?php echo $row['artid'] ?></th><th><?php echo $row['product_name']?></th><th><?php echo $row['price']?></th>
                            <th><a href='delete.php?id=<?php echo $row['artid'] ?>' class="btn btn-danger">Delete</a></th>
                            
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th>Total</th><th>BWP<?php echo $sum;?></th><th> </th><th><a href="changecart.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th><th><a href="onlinepay.php?id=<?php echo $user_id?>" class="btn btn-primary">pay Online</a> </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>



            
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">sale art works</a></li>
                            <li><a href="#"></a></li>
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
    </div>
</body>

</html>