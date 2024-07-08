<?php include('../admin/sidebar.php'); ?>

<form action="/controllers/product.php" method="post">
<div class="mb-3">			<input type="text" class="form-control" name="title" placeholder="Product Name"> </div>

<div class="mb-3">			<input type="text" class="form-control" name="category" placeholder="Product Category"> </div>
                
<div class="mb-3">			<input type="text" class="form-control" name="description" placeholder="Product Description"> </div>

<div class="mb-3">			<input type="number" class="form-control" name="price" placeholder="Product Price"> </div>

<div class="mb-3">			<input type="text" class="form-control" name="image" placeholder="Product Image"> </div>

<div class="mb-3">			<input type="submit" class="form-control" value="Save"> </div>
</form>

<?php include('../admin/footer.php') ?>