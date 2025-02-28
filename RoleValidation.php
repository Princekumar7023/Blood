<?php

include('./connect.php');
error_reporting(0);
session_start();
$userprofile = $_SESSION['user_name'];

if($userprofile == true){

}else{
    header('location:Login.php');
}

$query = "SELECT `Role` FROM `users` WHERE  `Name`='$userprofile' ";
$data = mysqli_query($conn, $query);

$result = mysqli_fetch_assoc($data);
$Result = $result['Role'];


if($Result == 'admin'){
    header('location:DonorRecords.php');
}else{
    echo "<script>alert('You Are Not Authorized')</script>";
    echo "<script>window.location.assign('Home.php')</script>";
}

?>