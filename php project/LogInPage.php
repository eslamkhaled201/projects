<?php
session_start();
 $pageName= "Sign in";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <?php require_once'includes/styleSheetsLinks.php'; ?>
</head>

<body>
<?php require_once'includes/navbar.php'; ?>
<section class="container loginForm">
<h2 class="text-center"> Bertmentos</h2>
<form action="http://localhost/project1/valitade.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class=" py-0 my-0 form-control" name="InputEmail" aria-describedby="emailHelp" <?php if (isset($_SESSION['errors'])){
      echo "value='".$_SESSION['inputVal']['email']."'";   
    }?> />
    <?php 
    if (isset($_SESSION['errors'])){
    echo"<div class='alert alert-danger' role='alert'>".
    $_SESSION['errors']['email']. "</div>";
    unset($_SESSION['errors']);
    } ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="InputPassword" <?php if (isset($_SESSION['passError'])){
      echo "value='".$_SESSION['unvalidPass']."'";   
    }?> />
    <?php 
    if (isset($_SESSION['passError'])){
    echo"<div class='alert alert-danger' role='alert'>".
    $_SESSION['passError']. "</div>";
    } ?>
  </div>
  <button type="submit" class="btn btn-dark">Confirm</button>
</form>
</section>
<?php require_once'includes/script_links.php'; ?>
</body>
</html>

