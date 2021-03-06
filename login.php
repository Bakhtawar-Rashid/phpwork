<?php
include 'db/connect.php';
include 'functions/helper.php';
$title = 'Login | Page';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="text-center">
    
<main class="form-signin w-100 m-auto">

<?php

if(isset($_POST['login_sub_btn'])){
  $email = $_POST['email'];
  $pass = $_POST['pass'];
   login($email,$pass,$db);  

   echo '<h5 class="text-center">Redirecting to Home...</h5>
   <script>setTimeout(function(){window.location.href="index.php"},2800)</script>';
  
}

?>

  <form action="" method="post">
    <img class="mb-4 img-circle" src="https://picsum.photos/72" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" name="login_sub_btn" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2022</p>
  </form>
</main>
    

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>