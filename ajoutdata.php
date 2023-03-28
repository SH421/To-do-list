<?php
    // Ajouter un tache
    
    require_once("database_conn.php");


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["Task_name"]) && isset($_POST["Due_Date"]) && isset($_POST["priority"])) {
            $T_name = $_POST["Task_name"];
            $Due_date = $_POST["Due_Date"];
            $Priority = $_POST["priority"];

            $query = "INSERT INTO task(T_name,Due_date,Priority) VALUES (?,?,?)";

            $stmt = mysqli_prepare($db_connect, $query);

            mysqli_stmt_bind_param($stmt, "ssi", $T_name, $Due_date, $Priority);

            if (mysqli_stmt_execute($stmt)) {
                echo "<br>Task added succesfuly";
            } else {
                echo ("execution error" . "<br>" . mysqli_error($db_connect));  
            }
            mysqli_stmt_close($stmt);


        }
        else{
          echo "Error!!";
        }
        mysqli_close($db_connect);

    }   
?>