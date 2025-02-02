<?php include('header_ToDoList.php') ?>
<?php include('connect.php') ?>


<div class="col-md-12 ">
    <h3" style="font-family: 'Caveat', cursive; font-size: 30px;">Compleated Task 😊😉</h3>
    <hr>
</div>

<div class="table-responsive" id="table-result-overflow"  >
    <table class="table table-borderless table-responsive">
        <thead>
            <tr>
                <th>Number</th>
                <th>Task</th>
                <th>Status</th>
                <th>Undo</th>
            </tr>
        </thead>
        
<!-- SQL Query select from database -->
<?php
$counter = 1;
$result = mysqli_query($connection,"SELECT * FROM task_result");
foreach ($result as $re){
?>
        <tbody>
            <tr>
                <td><?php echo $counter; ?> </td>
                <td><?php echo $re['task'];?> </td>
                <td class="welldone-color">Well Done</td>
                <td class="undo-color"><a href="undo.php?id=<?php echo $re['id']; ?>" class="nav-link text-danger">Undo</a></td>
            </tr>
            
        </tbody>
<?php
$counter++;
}
 ?>

    </table>
    </div>
<?php include('footer_ToDoList.php') ?>


