<?php include('header_ToDoList.php');?>
<?php include('connect.php'); ?>


<div class="container">
    <form  method="post" action="index.php" class="p-2">
        <div >
            <input class="form-control" type="text" name="task" required placeholder="Inter your task">
        </div>
        <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 mt-3" >   
                <input type="submit" class="btn btn-outline-success form-control" name="submit" value="Submit" >
            </div>
            <div class="col-md-6 mt-3" >   
                <input type="reset" class="btn btn-outline-danger form-control" name="reset" value="Reset"  >
            </div>
        </div>
        <hr>
        </div>
    </form>

<?php
//SQL Query insert in database
if(isset($_POST['submit'])){
$task = $_POST ['task'];
$counter = 0;
mysqli_query($connection, "INSERT INTO task VALUES(null,'$counter','$task')");
}

?>


    <div class="table-responsive" id="table-task-overflow" >
    <table class="table table-borderless table-responsive">

     <thead>
            <tr>
                <th>Number</th>
                <th>Task</th>
                <th>Delete</th>
                <th>Update</th>
                <th>Done</th>
            </tr>
        </thead>
    <?PHP
//SQL Query select from database
$counter = 1;
$result = mysqli_query($connection, "SELECT * FROM task");
foreach ($result as $re){
?>
        <tbody>
            <tr>
                <td><?php echo $counter; ?></td>
                <td><?php echo $re['task'];?></td>
                <td class="delete-color"><a href="delete.php?id=<?php echo $re['id']; ?>" class="nav-link text-danger">Delete</a></td>
                <td class="update-color"><a href="update.php?id=<?php echo $re['id']; ?>" class="nav-link text-warning">Update</a></td>
                <td class="done-color "><a href="done.php?id=<?php echo $re['id']; ?>" class="nav-link text-success">Done</a></td>
                
            </tr>      
        </tbody>
<?php 
$counter++;
 } ?>

    </table>
    </div>
</div>


<?php include('footer_ToDoList.php');?>
