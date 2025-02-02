<?php
include("connect.php");
 
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    mysqli_query($connection, "INSERT INTO task_result SELECT * FROM task
    WHERE id='$id'");

    $delete =  mysqli_query($connection, "DELETE FROM task WHERE id='$id'");

    header("Location:task_result.php");
    
}
?>