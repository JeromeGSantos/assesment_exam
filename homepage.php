<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <!--css-->
  <link rel="stylesheet" href="css/styles.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
<?php

?>

<nav class="navbar bg-body-tertiary" id="nav-style">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">MiniBlog</span>
    <div class="d-flex m-end">
    <p class="navbar-brand mb-0 h1">Hi <?php?>!</p>
    <p class="navbar-brand mb-0 h1"><a href="homepage.php">Home</a></p>
    <p class="navbar-brand mb-0 h1"><a href="logout.php">Logout</a></p>
  </div>
  </div>
</nav>
    <div class="container">
      
     
      
   
        <?php
        //select all variable that handle students info in the database
        $query = "select * from `content`";
        

        //result variable is to connect database and query
        $result = mysqli_query($dbcon, $query);

        if(!$result){
          die("query failed".mysqli_error());
        }
        else{
            //gets data from the students database
            while($row = mysqli_fetch_assoc($result)){
              ?>
               <div class="container">
                <div class="wrapper2">
        <h2><?php echo $row['title'];?></h2><!--gets the data of title from the database-->
        <p><?php echo $row['content'];?></p><!--gets the data of content from the database-->
        <p><?php echo $row['tb_date'];?></p>
        <hr>
        <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a><!--go to the delete page after clicking the button-->
        <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">EDIT</a><!--go to the update page after clicking the button-->
        </div>
        </div>
              <?php
            }
        }
        ?>

      <div class="box1">
      <a href="insert.php"><input class="btn btn-primary mt-5" value="CREATE NEW POST"></input></a>
      </div>
      </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>