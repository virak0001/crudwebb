<?php
include("header/header.php");
include("connection.php");
$query = mysqli_query($connection, "SELECT * FROM  student");
$id = 1;
?>
<h4 class="text-center">Student information </h4>
<hr>
<div class="container">
    <a href="addStudent.php">Add new</a>
    <table class="table table-border">
        <thead>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $value) { ?>
                
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $value['FirstName'] ?></td>
                <td><?php echo $value['LastName'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $value['id']?>">Edit</a>
                    <a onclick="confirm('Are you sure want to delete?')" href="deleteProcess.php?id=<?php echo $value['id']?>">Delete</a>
                </td>
            </tr>

            <?php $id++; }?>
        </tbody>
    </table>
</div>