<?php
include('../models/User.php');
if(isset($_POST['signup_user'])){
$newuser = new User();

$res = $newuser->create($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['address'],$_POST['phone'],$_POST['password'],$_POST['gender'],$_POST['birthdate']);

header("location: /index.php");

}
else
{
    $newuser = new User();

    $res = $newuser->create($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['address'],$_POST['phone'],$_POST['password'],$_POST['gender'],$_POST['birthdate']);
    
    var_dump($res); 
}

?>