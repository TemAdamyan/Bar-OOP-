<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 <div class="container-fluid">
     
<?php include('../admin/navbar.php') ?>

<br>
<h1 class="text-center">LOG IN</h1>
<form action="/controllers/login.php" method="post">
<div class="mb-3">				<input type="text" class="form-control" name="email" placeholder="Email"> </div>
                
<div class="mb-3">				<input type="text" class="form-control" name="password" placeholder="Password"> </div>

<div class="mb-3">				 <input type="submit" class="form-control btn btn-primary" value="Log in"> </div>
</form>
<br>
<h5 class="text-center">Don't have an account yet? <a href="register.php">Sign up</a><h5>

<?php include('../admin/footer.php') ?>