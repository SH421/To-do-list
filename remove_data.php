<?php
 require_once("database_conn.php");
  
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     
    if(isset($_POST["deleted"])){
       
        $Task_id=$_POST["task_id"];
        
        $query="DELETE FROM task where id=?";

        $stmt= mysqli_prepare($db_connect,$query);

        mysqli_stmt_bind_param($stmt,"i",$Task_id);

        if (mysqli_stmt_execute($stmt)){
            echo"<br> Task deleted succefully";                    
        }
        else{
            echo"<br> Delete error !!". "<br>". mysqli_error($db_connect);        
        }
        mysqli_stmt_close($stmt);
    }
    else{
      echo"Error!!!";
    }
    mysqli_close($db_connect); 
    header("location : test.php");  
    exit();
 }

?>