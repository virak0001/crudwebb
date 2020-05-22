<?php
include("header/header.php");
include('connection.php');
$id = $_GET['id'];
$edit = mysqli_query($connection, "SELECT * FROM student WHERE id = $id");
$class = mysqli_query($connection, "SELECT * FROM class");
?>
<div class="container mt-5">
    <?php foreach ($edit as $key => $value) { ?>
        <form action="editProcess.php" method="post">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">add new student</h6>
                </div>
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                    <input type="text" name="FirstName" class="form-control" value="<?php echo $value['FirstName'] ?>"><br>
                    <input type="text" name="LastName" class="form-control" value="<?php echo $value['LastName'] ?>"><br>
                    <input type="email" name="email" class="form-control" value="<?php echo $value['email'] ?>"><br>

                    <select name="class" id="" class="form-control">
                        <?php foreach ($class as $key => $class) { ?>

                            <?php if ($class['id'] == $value['class_id']) { ?>
                                <option selected value="$class['id']"><?php echo $class['class_name'] ?></option>
                            <?php } ?>​​​​
                            <option <?php if ($class['id'] == $value['class_id']) { ?>​​​​​​​​​​​​​ hidden <?php } ?> value="$class['id']"><?php echo $class['class_name'] ?></option>
                        <?php } ?>

                    </select>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    <?php } ?>
</div>