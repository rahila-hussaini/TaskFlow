<?php
include("connect.php");
 
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    mysqli_query($connection, "INSERT INTO task SELECT * FROM task_result WHERE id='$id'");

    $delete =  mysqli_query($connection, "DELETE FROM task_result WHERE id='$id'");

    header("Location:index.php");
    
}
?>