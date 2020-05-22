<?php
    include('connection.php');
    if(isset($_POST['submit'])){
        $firstname = $_POST['Firstname'];
        $lastname = $_POST['Lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $class_id = $_POST['class'];


        $insert = mysqli_query($connection, "
        
        INSERT INTO student (Firstname, Lastname, pwd, email, class_id)
        VALUES ('$firstname', '$lastname', '$password', '$email', $class_id);
        
        ");

        if($insert){
            header("Location:index.php");
        }else {
            header("Location:addStudent.php");
        }

    }

?>