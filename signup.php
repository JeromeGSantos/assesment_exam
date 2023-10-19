<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
</head>
<body>
<nav class="navbar bg-body-tertiary" id="nav-style">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">MiniBlog</span>
    <p class="navbar-brand mb-0 h1"><a href="login.php">Login</a></p>
  </div>
</nav>
<h3 class="text-center mt-2">Registration</h3>
<div class="container">

  <div class="wrapper">
  <h2>See the Registration Rules</h2>
  <hr>
<form action="" method="post">
  <div class="text-center">
  <?php
if(isset($_POST['register'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];


  $sql = mysqli_query($dbcon, "select * from account where email ='$email'");

  if(mysqli_num_rows($sql) > 0){
    echo '<div class="alert alert-danger">Email if already registered! </div>';
  }
  else{
    if($password == $confirmpassword){
      $query = "insert into account values('', '$username', '$email', '$password')";
      mysqli_query($dbcon, $query);

      echo '<div class="alert alert-success text-center">Registration Successful! </div>';
    }
    else{
      echo '<div class="alert alert-danger text-center">Password does not match! </div>';
    }
  }
}
?>
<input class="form-control mt-2" type="text" name="username" placeholder="Enter Username">
<input class="form-control mt-2" type="email" name="email" placeholder="Enter Email">
<input class="form-control mt-2" type="password" name="password" placeholder="Enter Password">
<input class="form-control mt-2" type="password" name="confirmpassword" placeholder="Confirm Password">
</div>
<input class="btn btn-success mt-2" type="submit" name="register" value="REGISTER">
<p>Return to the<a href="index.php"> LOGIN PAGE</a></p>
</form>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>