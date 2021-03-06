<?php
$tile = 'Register | Page';
include 'db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$tile?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="" method="POST">
    <img class="mb-4 img-circle" src="https://picsum.photos/72" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal"><?=(isset($user) ? $user:'Please sign up')?></h1>
    <h5>
      <?php
      if(isset($_POST['sub_btn'])){

        $user = $_POST['username'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $query = $db->query("INSERT INTO `users` (username,email,password) VALUES('$user','$email','$pwd')");
        if($query){
          echo 'User Registered Successfully!
          <script>setTimeout(function(){
            window.location.href="login.php";
          },2800)</script>
          ';
        }
    }
      ?>
    </h5>
    <div class="form-floating">
      <input type="text"  name="username" class="form-control" id="floatingInput" placeholder="username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating my-3">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" name="sub_btn" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; <?= date('D-M-Y'); ?></p>
  </form>
</main>
    

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>