<?php include("connect.php");

$id = $_GET['id'];
$delete =  mysqli_query($connection, "DELETE FROM task WHERE id='$id'");
if($delete) {
    header("Location:index.php");
}else {
    echo "Delete not happended";
}
?>
