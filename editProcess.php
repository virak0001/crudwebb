<?php
    include('connection.php');
    if(isset($_POST['submit'])){
        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $email = $_POST['email'];
        $id = $_POST['id'];

        $edit = mysqli_query($connection, "
        
        UPDATE student
        SET FirstName = '$firstname', LastName = '$lastname', email = '$email'
        WHERE id = '$id';
                
        ");
        
        if($edit){
            header("Location:index.php");
        }else {
            header("Location:edit.php");
        }
    }

?>