<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 <div class="container-fluid">
 <?php include('../admin/navbar.php') ?>
<br>
<h1 class="text-center">SIGN UP</h1>
<form action="/controllers/register.php" method="post">
<div class="mb-3">				<input type="text" class="form-control" name="firstname" placeholder="Firstname"> </div>

<div class="mb-3">				<input type="text" class="form-control" name="lastname" placeholder="Lastname"> </div>

<div class="mb-3">				<input type="text" class="form-control" name="email" placeholder="Email"> </div>

<div class="mb-3">				<input type="text" class="form-control" name="address" placeholder="Address"> </div>

<div class="mb-3">               <input type="text" class="form-control" name="phone" placeholder="Phone"> </div>
                
<div class="mb-3">				<input type="text" class="form-control" name="password" placeholder="Password"> </div>

<div class="mb-3">				<input type="text" class="form-control" name="gender" placeholder="Gender"> </div>

<div class="mb-3">				<input type="text" class="form-control" name="birthdate" placeholder="Birthdate"> </div>

<div class="mb-3">				<input type="submit" class="form-control" value="Save">
</form>

<br>
<h5 class="text-center">Already have an account? <a href="login.php">Log in</a><h5>

<?php include('../admin/footer.php') ?>