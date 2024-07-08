<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
  <div class="container-fluid">

<?php include('admin/navbar.php') ?>

  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="https://hips.hearstapps.com/hmg-prod/images/barman-equipment-such-as-measuring-cups-and-essence-royalty-free-image-1062066858-1557252311.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="https://lh3.googleusercontent.com/proxy/hIyOLyzYZd2q0kKFMzjjHPVw3wmzwAbQEE1ncrO8Gu4VEAqcmbKXZpFmg3pfEpZ1xkxGu3N0yYArQG5SLQw0ynFsEHpIrmvEvSUpz3uhrmjThncPLO6aTFvf_0_bcXho4DklTsg0gpsm7sPyozFymjAp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.my-vb.com/sites/default/files/styles/image_art/public/2019-05/M%C3%A9tier%20-%20Barman.jpg?itok=Km0Uj04v" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<br>

<?php 
include('models/Product.php') ;

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
            window.location.href = `views/single.php?product_id=${productId}`;
        });
    });
</script>

</div>
</div>
<br>
<h5 class="text-center">Do you want to see more products? <a href="./views/allproducts.php">All Products</a></h5>

</div>
</body>
</html>