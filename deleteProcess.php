<?php
    include('connection.php');
    $id = $_GET['id'];
    $delete = mysqli_query($connection, "DELETE FROM student WHERE id = $id ");
    if($delete){
        header("Location:index.php");
    }
?>