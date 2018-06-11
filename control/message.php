<?php
include 'mysql.php';
if (isset($_POST['submit'])){
  $name =  mysqli_real_escape_string($con,$_POST['fullname']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $message = mysqli_real_escape_string($con,$_POST['message']);

  //connect
  $sql =  "INSERT INTO user_message (fullname,email,message) VALUES ('$name',
                  '$email',
                  '$message'
                )";

  $query = mysqli_query ($con,$sql);

  if ($query){
    header("location:../index.php");
  }
  else{
    echo "cannot connect to database";
  }
}
  ?>
