<?php
include('../models/User.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $user = User::readByEmail($_POST['email']);

        if ($user) {
            if ($_POST['password']==$user['password']) {
                echo "Login successful!";
header("Location: /index.php");
               
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "User not found.";
        }
    } else {
        echo "Please provide both email and password.";
    }
}
?>