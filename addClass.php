<?php
    include("header/header.php");
?>
<div class="container mt-5">
    <h4 class="text-center">Add new class</h4>
    <form action="addClassProcess.php" method="post">
        <input type="text" class="form-control" name="class" placeholder="class name"><br>
        <button type="submit" class="btn btn-success" name="submit">Add new class</button>
    </form>
</div>