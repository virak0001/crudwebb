<?php
    include ("header/header.php");
    include ("connection.php");
    $class = mysqli_query($connection, "SELECT * FROM class");
    
?>
<div class="container">
    <h1 class="text-center">Class information</h1>
    <a href="addClass.php">Add new class</a>
    <?php foreach ($class as $key => $value) { ?>
        
        <h6><?php echo $value['class_name'] ?></h6>

    <?php } ?>
</div>