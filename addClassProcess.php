<?php
    include('connection.php');
    if(isset($_POST['submit'])){

        $class = $_POST['class'];

        $insert = mysqli_query($connection, 
        
        "INSERT INTO class (class_name)
        VALUES ('$class')"
    
        );
        
        if($class){
            header("Location:class.php");
        }else {
            header("Location:addClass.php");
        }
    }
?>