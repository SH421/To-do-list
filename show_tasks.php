<?php
 require_once("database_conn.php");
 
 if($_SERVER["REQUEST_METHOD"]=="GET"){
    
    $query="SELECT * FROM task ORDER BY Due_date DESC";

    $stmt=mysqli_prepare($db_connect,$query);

    if(mysqli_connect_errno()>0){
       echo"Error 404";
    }
    mysqli_stmt_execute($stmt);
	 $result = mysqli_stmt_get_result($stmt);
    $n_rows=mysqli_num_rows($result);
    
    if ($n_rows > 0) { 
      
      while($row = mysqli_fetch_assoc($result)) {
       echo"<tr>";
       echo "<td>" . $row["T_name"]. "<br>";
       echo "<td>". $row["Due_date"]. "<br>";
       echo "<td>" . $row["Priority"]. "<br>";
       echo "<td>";
		 echo "<a href='remove_data.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a>";
		 echo "<a href='update_task.php?id=" . $row["id"] . "' class='btn btn-primary'>Update</a>";
		 echo "</td>";
		 echo "</tr>";
      }
   
   } else {
  echo "No tasks found.";
  }

 }   


?>