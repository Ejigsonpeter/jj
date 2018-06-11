<?php
//connect to mysqli database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "ojlaury_db";

$con =  mysqli_connect($hostname,$username,$password);
if ($con){
  //echo "connect successfully";
}
else{
    echo "connection not succesfull";
}
mysqli_select_db($con,$database);

 ?>
