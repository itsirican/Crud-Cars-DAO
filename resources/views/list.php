<?php 
$title = "List of cars";
ob_start();
?>
<a href="index.php?action=create" class="btn btn-primary">Add new car</a>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Id</th>
        <th>Model</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>

    </thead>
    <tbody>
      <?php /** @var app\models\Car[] $cars */ ?>
      <?php foreach ($cars as $car): ?>
          <tr>
              <td><?= $car->getId() ?></td>
              <td><?= $car->getModel() ?></td>
              <td><?= $car->getPrice() ?>$</td>
              <td>
                  <a href="index.php?action=edit&id=<?php echo $car->getId()?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="index.php?action=delete&id=<?php echo $car->getId()?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>
      <?php endforeach; ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
include_once "layout.php"; 
?>