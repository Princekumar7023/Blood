<?php
include('./connect.php');
error_reporting(0);
session_start();
$userprofile = $_SESSION['user_name'];

if($userprofile == 'muneer'){

}elseif($userprofile == true && $userprofile != 'muneer'){
  header('location:Home.php');
}
else{
    header('location:Login.php');
}

$DonorID = $_GET['DonorID'];
$query = "DELETE FROM donor WHERE Donor_ID = '$DonorID'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script>alert('Record Deleted')</script>";
    echo "<script>window.location.assign('DonorRecords.php')</script>";
  } else {
    "<script>alert('Record Not Deleted')</script>";
  }


?>