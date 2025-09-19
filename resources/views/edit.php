<?php
$title = "Edit car page";
ob_start();
?>
    <form action="index.php?action=update" method="post">
        <div class="form-group">
            <label>Model</label>
            <input type="hidden" name="id" value="<?=$data->getId() ?>" >
            <input type="text" class="form-control" name="model" value="<?=$data->getModel() ?>" >
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price" value="<?=$data->getPrice() ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="edit" name="edit">
        </div>
    </form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php'; ?>