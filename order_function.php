

<?php
    require 'conn.php';
    //require 'header.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $user_products="select artid,product_name,price from users_items ut inner join artworks it on artid=ut.item_id where ut.user_id='$user_id'";
   
    //$product="select * from user_item where user_id='$user_id'";

    $user_products_result=mysqli_query($db,$user_products_query) or die(mysqli_error($db));
    $art_id=$row['artid'] ;
    $price=$row['price'] ;
    $firstname =e( $_POST['fname']);
    $lastname = e($_POST['lname']);
    $address= e($_POST['address']);
    $city= e($_POST['city']);
    $email= e($_POST['email']);
  
    $add_to_cart_query="insert into order values('',' $art_id', '$price', '$user_id', '$firstname','$lastname','$address','$city','$email')";
    $add_to_cart_result=mysqli_query($db,$add_to_cart_query) or die(mysqli_error($db));
    header('location: index.php');
?>















function order(){


$q3=mysqli_query( $db,"INSERT INTO artist VALUES  ( '','$firstname' , '$lastname', '$email' ,'$password')");
if($q3)
{
      
      
      session_start();

      
      header ('location:artist.php');
      
      

  
}

}
