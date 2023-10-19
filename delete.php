<?php
include ("connect.php");
if(isset($_GET['id'])){
  $id = $_GET['id'];


  $query = "delete from `content` where id = '$id'";

  $result = mysqli_query($dbcon, $query);

  if(!$result){
    die("Query Failed".mysqli_error());
  }
  else{

    header('location:homepage.php');
    echo '<div class="alert alert-danger">Email if already registered! </div>';
    }

}
?>