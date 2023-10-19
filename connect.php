<?php


  //setup database
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "assesment_exam";
  
  if(!$dbcon = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
  {
  
    die("Failed to connect!");
  }


//insert data
if(isset($_POST['add_content'])){


echo $formatted_string;
  // Get the title and content from the form
  $title = $_POST['title'];
  $content1 = $_POST['content-text'];
  $date = $_POST['date-time'];

  // Insert data into the database
  $query = "INSERT INTO content (title, content, tb_date) VALUES ('$title', '$content1', '$date')";
  // Perform the query and check for errors
  $result = mysqli_query($dbcon, $query);

  if ($result) {
    echo "Data inserted successfully!";
    header('location: homepage.php');
  } else {
    echo "Error: " . mysqli_error($dbcon);
  }
exit();
}



//get data after clicking the update button
if(isset($_GET['id'])){

  $id = $_GET['id'];


      //add variable that handle ID info in the database
      $query = "select * from `content` where `id` = '$id'";
      

      //result variable is to connect database and query
      $result = mysqli_query($dbcon, $query);

      if(!$result){
        die("query failed".mysqli_error());
      }
      else{
          //get result
          $row = mysqli_fetch_assoc($result);

          }
          
    }


         //update when click the Update button
    if(isset($_POST['update_content'])){

      //use to get the value of id from the form
      if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
      }

      $title = $_POST['title'];
      $content1 = $_POST['content-text'];


      $query = "update `content` set `title` = '$title', `content` = '$content1' where `id` = '$idnew'";

      $result = mysqli_query($dbcon, $query);

        if(!$result){
          die("query failed".mysqli_error());
        }

        else{ //if success to update the data then it will go to the home page
          header('location:homepage.php?update_msg=You have successfully update the data.');
        }
    }


    
?>