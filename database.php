<?php
// --------------------------------------page utulisateur-------------------------------//
session_start();
$username="";
$email="";
$errors=array();
// connect to the database //
$db=mysqli_connect("localhost","root","","users");
 
// if the register button is clicked //
  if(isset($_POST['btlogin'])){
     $username= mysqli_real_escape_string($db, $_POST['username']);
     $email=mysqli_real_escape_string($db, $_POST['email']);
     $password_1=mysqli_real_escape_string($db, $_POST['pass1']);
     $password_2=mysqli_real_escape_string($db, $_POST['pass2']);

// if the input is failed //
  if(empty($username)){
      array_push($errors,"username is required");
  }
  if(empty($email)){
    array_push($errors,"email is required");
}
if(empty($password_1)){
    array_push($errors,"password is required");
}
if($password_1 != $password_2){
    array_push($errors,"The two password is not match");
}
 // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM compte_utulisateur WHERE username='$username' OR email='$email' LIMIT 1";
  $result1 = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result1);
  
   // if user exists
   if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  

// if there are no errors , save in the database //
 if(count($errors) == 0){
   $password=md5($password_1); //encrypte password before storing in the datatbase//
   $sql="INSERT INTO compte_utulisateur(username,email,password) values ('$username','$email','$password')";
    mysqli_query($db,$sql);
     $_SESSION;
     header("location:blog2.html");
 }
 }
 // --------------------------------------------- Page login----------------------------------------//
 if(isset($_POST['login'])){
  $username= mysqli_real_escape_string($db, $_POST['username']);
  $password=mysqli_real_escape_string($db, $_POST['password']);
   // if the input is failed //
  if(empty($username)){
    array_push($errors,"username is required");
}
if(empty($password)){
  array_push($errors,"password is required");
}
if(count($errors) == 0){
  $password=md5($password); //encrypte password before storing in the datatbase//*
   $query="select * from compte_utulisateur where username='$username' and password='$password'";
   $result=mysqli_query($db,$query);
    if(mysqli_num_rows($result) == 1){
      session_start();
      $_SESSION;
      echo "<h1 style= 'color:red'> welcom.$username</h1>" ;
      header("location:blog2.html");
    }else{
      array_push($errors,"wrong username or password");
    }
  }
 }

?>





<!----------------------------------------------------------page creer article----------------------------------->





 