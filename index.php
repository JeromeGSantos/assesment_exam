<?php
session_start();
include ('connect.php') ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
</head>
<body>
<!-- As a heading -->
<nav class="navbar bg-body-tertiary" id="nav-style">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">MiniBlog</span>
    <p class="navbar-brand mb-0 h1"><a href="login.php">Login</a></p>
  </div>
</nav>
<div class="container" id="con">
<div class="wrapper ">
<h2 class="d-flex">Login</h2>
<hr class="hr-style">
<form action="" method="post">
  <div class="text-center">
  <?php

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
 
  $result = mysqli_query($dbcon, "select * from account where email = '$email'");
  $row = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION['login'] = true;
      $_SESSION['id'] = $row['id'];
      header('location: homepage.php');
    }

    
    else{
      echo '<div class="alert alert-danger">Username or Password is incorrect </div>';
    }
    
  }
} 
?>
<input class="form-control add-info" id="button" type="email" name="email" placeholder="Enter Email" required>
<input class="form-control add-info" id="button" type="password" name="password" placeholder="Enter Password" required>
</div>
<input class="btn btn-success mt-2 m-auto px-3" id="btn-log" type="submit" name="login" value="LOGIN" required>
<a href="signup.php"><input class="btn btn-success mt-2 m-auto px-3" type="button" name="register" value="REGISTER" ></a>
<p>Currently logged out.</p>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>