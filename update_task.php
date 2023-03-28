<?php
  require_once("database_conn.php");
  
  if($_SERVER["REQUEST_METHOD"]=="POST"){
     
    if(isset($_POST["upd_sumbit"])&&isset($_POST["Task_name"])&&isset($_POST["due_date"])&&isset($_POST["priority"])&&isset($_POST["id"])){
       $id=$_POST["id"];
       $Task_name=$_POST["Task_name"];
       $Due_date=$_POST["due_date"];
       $priority=$_POST["priority"];

       $query="UPDATE task SET T_name=?,Due_date=?,priority=? Where id=?";

       $stmt=mysqli_prepare($db_connect,$query);

       mysqli_stmt_bind_param($stmt,"ssii",$Task_name,$Due_date,$priority,$id);

       if(mysqli_stmt_execute($stmt)){
          echo"<br> Task Updated Succefully";
        }
       else{
        echo"<br>Error on the update";
       }
       mysqli_stmt_close($stmt);
    }
    else{
      echo"Error!";
    }
    mysqli_close($db_connect);
 }  

?>