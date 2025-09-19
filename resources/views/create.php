<?php
$title = "Add new car";
ob_start();
?>
    <form action="index.php?action=store" method="post">
        <div class="form-group">
            <label>Model</label>
            <input type="text" class="form-control" name="model">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Add" name="add">
        </div>
    </form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php'; ?>