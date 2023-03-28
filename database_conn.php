<?php
// Database

$server_name="localhost";
$user_name="root";
$password="";
$database_name="to_do_list";

//Connect to database

$db_connect=mysqli_connect($server_name,$user_name,$password,$database_name);

//Check Connection

if(!$db_connect){
  
  die("Error!!!!".mysqli_connect_error());

}
else{
  echo "connected successfully";
}  

?>
