<?php
    include('connection.php');
    if(isset($_POST['submit'])){
        $firstname = $_POST['Firstname'];
        $lastname = $_POST['Lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert = mysqli_query($connection, "
        
        INSERT INTO student (Firstname, Lastname, pwd, email)
        VALUES ('$firstname', '$lastname', '$password', '$email');
        
        ");

        if($insert){
            header("Location:index.php");
        }else {
            header("Location:addStudent.php");
        }

    }

?>