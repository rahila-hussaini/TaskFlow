<?php 
include('header_ToDoList.php');
include("connect.php");

    if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $edit = mysqli_query($connection, "SELECT * FROM task WHERE id='$id'");
    foreach($edit as $e){
 ?>
 
 <div class="container">
    <form  method="post" action="update.php" class="p-5">
        <div >
            <input type="hidden" name="id"  value="<?php echo $e['id'];?>" >
            <input class="form-control" type="text" name="task" required placeholder="Inter your tasks" value="<?php echo $e['task'];?>" >
        </div>
        <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 mt-3" >   
                <input type="submit" class="btn btn-outline-success form-control" name="submit" value="Update" >
            </div>
            <div class="col-md-6 mt-3" >   
                <input type="reset" class="btn btn-outline-danger form-control" name="reset" value="Reset"  >
            </div>
        </div>
        <hr>
        </div>
    </form>
</div>

<?php 
}
}

if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $task = $_POST["task"];

    $update = mysqli_query($connection, "UPDATE task SET task='$task' WHERE id='$id'");


    if($update){
        //echo "done";
        header("Location:index.php");
    }else{
        echo "oops";
    }
}

include('footer_ToDoList.php');
?>