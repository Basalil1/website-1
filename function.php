<?php

session_start();
//connect to database
$db = mysqli_connect('localhost', 'root', '','tagtheart');
// variable declaration

$firstname='';
$lastname='';
$email='';
$password='';
$productname ='';
 $category ='';
  $price = '';
   $description='';
$errors = array();

//call the register() function if the register_btn is pressed 
if(isset($_POST['up1'])){
  imgup();
 
  
 }

 if(isset($_POST['aregister'])){
  register();
 
  
 }

 if(isset($_POST['users'])){
  
 registerU();
 
  
 }

 
  
function imgup(){

 global $db , $productname , $category,$price,$description, $errors;

   

 $productname =e( $_POST['Product']);
   $category =e( $_POST['category']);
     $price =e( $_POST['price']); 
      $description =e( $_POST['description']);
 
      if(empty($productname)){
        array_push($errors, "Product is required");
    }
    
    if (empty($category)){
        array_push($errors, "category is required");
    }
    if(empty($price)){
      array_push($errors, "Username is required");
  }
  
  if (empty($description)){
      array_push($errors, "Email is required");
  }

 if(isset($_FILES['userfile'])){
  
  
$target_path="images/";
$target_path=$target_path.basename($_FILES['userfile']['name']);
if(move_uploaded_file( $_FILES[ 'userfile']['tmp_name'], $target_path)){
$db=new mysqli("localhost", "root", "","tagtheart"); 
$sql="Insert into artworks  values('',' $productname', '$category', '$price', '$description','$target_path')";

if ($db->query($sql)==TRUE){

  echo"...............................................";
  

  

}
else
{
  echo "Error:".$sql.$db->error;
}
 

}

 
 }

}


//order 




//REGISTer a user
function register(){ 

  //call these variables with the global keyword to make them available in the function
  global $db ,$errors, $firstname, $lastname, $email, $password;

  //receive all input values from the form. call the e() function
  //defined below to escape from values

  $firstname =e( $_POST['name']);
  $lastname = e($_POST['lname']);
  $email= e($_POST['email']);
  $password_1= e($_POST['password']);
  $password_2= e($_POST['password1']);


  // form validation: ensure that the form is correcttly filled

if(empty($firstname)){
  array_push($errors, "Username is required");
}
if(empty($lastname)){
  array_push($errors, "Username is required");
}

if (empty($email)){
  array_push($errors, "Email is required");
}

if (empty($password_1)){
  array_push($errors, "password is required");
}
if($password_1 != $password_2){

  array_push($errors, "the passwords does not match");
}

//register users if there are no errors in the form
if(count($errors)==0){
  $password =md5($password_1);//encrypt the password before saving in the database


  $q3=mysqli_query($db,"INSERT INTO artist VALUES  ( '','$firstname' , '$lastname', '$email' ,'$password')");
if($q3)
{
      
      
      session_start();

      
      header ('location:artist.php');
      
      

  }
}
}

function registerU(){

  //call these variables with the global keyword to make them available in the function
  global $db ,$errors, $firstname, $lastname, $email, $password;

  //receive all input values from the form. call the e() function
  //defined below to escape from values

  $firstname =e( $_POST['name']);
  $lastname = e($_POST['Lastname']);
  $email= e($_POST['email']);
  $password_1= e($_POST['password_1']);
  $password_2= e($_POST['password_2']);


  // form validation: ensure that the form is correcttly filled

if(empty($firstname)){
  array_push($errors, "Username is required");
}
if(empty($lastname)){
  array_push($errors, "Username is required");
}

if (empty($email)){
  array_push($errors, "Email is required");
}

if (empty($password_1)){
  array_push($errors, "password is required");
}
if($password_1 != $password_2){

  array_push($errors, "the passwords does not match");
}

//register users if there are no errors in the form
if(count($errors)==0){
  $password =md5($password_1);//encrypt the password before saving in the database


  $q3=mysqli_query($db,"INSERT INTO users VALUES  ( '','$firstname' , '$lastname', '$email' ,'$password')");
if($q3)
{
      
      
      session_start();

      
      header ('location:customerLog.php');
      
      

  }
}
}





function e($val){
  global $db ;
  return mysqli_real_escape_string($db, trim($val));

}
function display_error() {
  global $errors;

  if (count($errors) > 0){
      echo '<div class="error">';
          foreach ($errors as $error){
              echo $error .'<br>';
          }
      echo '</div>';
  }




}





?>