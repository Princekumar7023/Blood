<?php
include('./connect.php');
error_reporting(0);
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blood</title>
  <link rel="stylesheet" href="./Login.css">
  <script src="./Login.js"></script>
</head>

<body>
  <div class="login-box">
    <h2>Login</h2>
    <form autocomplete="off" method="POST" action="">
      <div class="user-box">
        <input id="username" type="text" name="name" required="" />
        <label>Username</label>
      </div>
      <div class="user-box">
        <input id="password" type="password" name="password" required="" />
        <label>Password</label>
      </div>

      <div class="button-form">
        <button id="submit" type="submit" name="login"> Log In </button>

        <div id="register">
          Don't have an account ?
          <a href="./SignUp.php"> Register </a>
        </div>
      </div>
    </form>
  </div>
</body>

</html>


<?php

if (isset($_POST['login'])) {
  $UserName = $_POST['name'];
  $Password = $_POST['password'];

  $query = "SELECT * FROM `users` WHERE  `Name`='$UserName' && `Password`= '$Password' ";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);


  if ($total == 1) {
    $_SESSION['user_name'] = $UserName; 
    echo "<script>alert('Login Successful')</script>";
    echo "<script>window.location.assign('Home.php')</script>";
  } else {
    echo "<script>alert('Login Failed')</script>";
    echo "<script>window.location.assign('Login.php')</script>";
  }
}
?>