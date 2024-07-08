<?php include('../admin/sidebar.php'); ?>

<form action="/controllers/category.php" method="post">
<div class="mb-3">	<input class="form-control" type="text" name="name" placeholder="Category Name"> </div>

<div class="mb-3">	<input class="form-control" type="submit" value="Save"> </div>
</form>
<?php include('../admin/footer.php') ?>