<?php
include('../models/Product.php');

$newproduct = new Product();

$res = $newproduct->create($_POST['image'],$_POST['title'],$_POST['category'],$_POST['price'],$_POST['description']);

var_dump($res);
?>