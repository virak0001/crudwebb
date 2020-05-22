<?php
include("header/header.php");
include("connection.php");

$query = mysqli_query($connection, "SELECT * FROM  student");
$classed = mysqli_query($connection, "SELECT * FROM class");

$id = 1;
?>
<h4 class="text-center">Student information </h4>
<hr>
<div class="container">
    <a class="btn btn-success" href="addStudent.php">Add new</a>
    <a class="btn btn-danger" href="class.php">Class</a>
    <table class="table table-border">
        <thead>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>class</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $student) { ?>
                
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $student['FirstName'] ?></td>
                <td><?php echo $student['LastName'] ?></td>
                <td><?php echo $student['email'] ?></td>
                <td>

                <?php foreach ($classed as $class) { ?>
                    <?php if($class['id'] == $student['class_id'] ){ ?>
                        <?php echo $class['class_name'] ?>
                    <?php } ?>
                <?php } ?>

                </td>

                <td>
                    <a href="edit.php?id=<?php echo $student['id']?>">Edit</a>
                    <a onclick="confirm('Are you sure want to delete?')" href="deleteProcess.php?id=<?php echo $student['id']?>">Delete</a>
                </td>
            </tr>

            <?php $id++; }?>
        </tbody>
    </table>
</div>