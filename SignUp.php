<?php
include('./connect.php');
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood</title>
    <link rel="stylesheet" href="./Login.css">
    <!-- <script src="./Login.js"></script> -->
</head>

<body>
    <div class="login-box">
        <h2>Sign Up</h2>
        <form autocomplete="off" action="" method="POST">
            <div class="user-box">
                <input id="username" type="text" name="name" required="" />
                <label>Username</label>
            </div>
            <div class="user-box">
                <input id="password" type="password" name="password" required="" />
                <label>Password</label>
            </div>
            <div class="user-box">
                <input id="confirm_password" type="password" name="confirm_password" required="" />
                <label>Confirm Password</label>
            </div>


            <div class="button-form">
                <button id="submit" type="submit" name="submit">Sign Up</button>
            </div>
        </form>
    </div>
</body>

</html>


<?php
if (isset($_POST['submit'])) {
    $UserName = $_POST['name'];
    $Password = $_POST['password'];
    $Confirm_Password = $_POST['confirm_password'];


    if ($UserName != "" && $Password != "" && $Confirm_Password != "") {

        if ($Password == $Confirm_Password) {

            $query = "INSERT INTO `users`(`Name`, `Password`, `ConfirmPassword`) VALUES ('$UserName', '$Password', '$Confirm_Password')";

            $data = mysqli_query($conn, $query);

            if ($data) {
                echo "<script>alert('Registered');
            window.location.assign('Login.php');</script>";
            }
        } else {
            echo "<script>alert('Password does not match')";
        }
    } else {
        echo "<script>alert('Sign up Failed')";
    }
}

?>