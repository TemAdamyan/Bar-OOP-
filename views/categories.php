<?php include('../admin/sidebar.php') ?>

<?php
include('../models/Category.php');

$categories = Category::read();

 ?>
 
<table class="table">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CATEGORY</th>  
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <th scope="row"><?php echo $category['id']; ?></th>
                <td><?php echo $category['category_name']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include('../admin/footer.php') ?>