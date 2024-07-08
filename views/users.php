<?php include('../admin/sidebar.php'); ?>

<?php
include('../models/User.php');

$users = User::read();
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">FIRSTNAME</th>
            <th scope="col">LASTNAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">PHONE</th>
            <th scope="col">PASSWORD</th>          
            <th scope="col">GENDER</th>          
            <th scope="col">BIRTHDATE</th>          

        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <th scope="row"><?php echo $user['id']; ?></th>
                <td><?php echo $user['firstname']; ?></td>
                <td><?php echo $user['lastname']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['address']; ?></td>
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo $user['password']; ?></td>
                <td><?php echo $user['gender']; ?></td>
                <td><?php echo $user['birthdate']; ?></td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include('../admin/footer.php') ?>