<?php include('../admin/sidebar.php') ?>

<?php
include('../models/Product.php');

$products = Product::read();

 ?>

<table class="table">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TITLE</th>
            <th scope="col">IMAGE</th>
            <th scope="col">PRICE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">CATEGORY</th>          
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <th scope="row"><?php echo $product['id']; ?></th>
                <td><?php echo $product['title']; ?></td>
                <td><?php echo $product['image']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td><?php echo $product['category']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include('../admin/footer.php') ?>