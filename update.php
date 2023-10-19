<?php
include('connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
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
    <h3>Edit Post - Post Title</h3>
  <form action="index.php? id_new=<?php echo $id;?>" method="post">
          <div class="form-group"> <!--style form-->

            <input type="text" name="title" class="form-control" placeholder="Enter New Title" value="<?php echo $row['title'];?>"> <!--f_name will use to target the database-->

            
            <textarea placeholder="Enter Content" name="content-text" class="form-control"><?php echo $row['content'];?></textarea><!--l_name will use to target the database-->
          </div>

        <input type="submit" class="btn btn-success mt-2 add-content" name="update_content" value="SAVE">
      </div>
      
      <div>
        
      </div>
    </div>
  </div>
</div>

   </div>
   </form>


   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>