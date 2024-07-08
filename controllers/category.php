<?php
include('../models/Category.php');

$newcategory = new Category();

$res = $newcategory->create($_POST['name']);

var_dump($res);
?>