<?php
    include("header/header.php");
    include ("connection.php");
    $class = mysqli_query($connection, "SELECT * FROM class");

?>
<div class="container mt-5">
    <form action="addProcess.php" method="post">
        <div class="card">
            <div class="card-header">
                <h6 class="text-center">add new student</h6>
            </div>
            <div class="card-body">
                <input type="text" name="Firstname" class="form-control" placeholder="firstname"><br>
                <input type="text" name="Lastname" class="form-control" placeholder="lastname"><br>
                <input type="email" name="email" class="form-control" placeholder="email"><br>
                <input type="password" name="password" class="form-control" placeholder="password"><br>
                <select name="class" id="" class="form-control">
                        <?php foreach ($class as $key => $value) { ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['class_name'] ?></option>
                        <?php }?>
                </select>
            </div>
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>