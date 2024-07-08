<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
  <div class="container-fluid">

<?php include('../admin/navbar.php') ?>
<br>
<?php 
include('../models/Product.php') ;

$products = Product::read();
?>

<div class=" text-center">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
<?php foreach ($products as $key => $product) { ?>
  <div class="col">
  <div class="card mt-auto" style="width: auto;">
  <img src="<?php echo $product['image']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $product['title'] ?> </h5>
    <p class="card-text mt"> <?php echo $product['description'] ?> </p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> <?php echo $product['category'] ?> </li>
    <li class="list-group-item"> <?php echo $product['price'] ?>$ </li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link buy-btn" data-id="<?php echo htmlspecialchars($product['id']); ?>">Buy</a>
</div>
</div>
  </div>

<?php  } ?>

<script>
    document.querySelectorAll('.buy-btn').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-id');
            window.location.href = `single.php?product_id=${productId}`;
        });
    });
</script>