<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <?php 
        include('../admin/navbar.php'); 
        include('../models/Product.php');

        if(isset($_GET['product_id'])) {
            $product_id = $_GET['product_id'];

            $product = Product::getProductById($product_id);

            if($product) {
                ?>
                <div class="card mt-5 w-75 mx-auto">
                    <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['title']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <p class="card-text">Category: <?php echo $product['category']; ?></p>
                        <p class="card-text">Price: $<?php echo $product['price']; ?></p>
    
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
                <?php
            } else {
                echo "<p>Product not found!</p>";
            }
        } else {
            echo "<p>Product ID not provided!</p>";
        }
        ?>
    </div>
</body>
</html>