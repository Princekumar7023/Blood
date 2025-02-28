<?php
include('./connect.php');
error_reporting(0);
session_start();
$userprofile = $_SESSION['user_name'];

if ($userprofile == 'muneer') {
} elseif ($userprofile == true && $userprofile != 'muneer') {
    header('location:Home.php');
} else {
    header('location:Login.php');
}
?>

<html>

<head>
    <title>Inventory</title>
    <link rel="stylesheet" href="Display.scss">
</head>

<body>
    <div class="heading">
        <h1>Inventory</h1>
    </div>
    <div class="container">
        <table border="3" cellspacing="7">
            <tr>
                <th>Blood ID</th>
                <th>Blood Type</th>
                <th>Blood Bag Quantity</th>
                <th>Received Date</th>
                <th>Expiry Date</th>

            </tr>

            <?php

            $query = "SELECT * FROM `inventory` WHERE `Blood_Type`= 'A+' ";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            $BloodCount = 0;

            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    $BloodCount = $BloodCount + $result['Blood_Bag_Quantity'];
                    $ReceiveDate = $result['Blood_Bag_RecievedDate'];
                    $ExpiryDate = $result['Blood_Bag_Expiry'];
                }
            } else {
                echo "No Records found";
            }

            echo "
                <tr>
                <td>" . '1' . "</td>
                <td>" . 'A+' . "</td>
                <td>" . $BloodCount . "</td>
                <td>" . $ReceiveDate . "</td>
                <td>" . $ExpiryDate . "</td>
                </tr>
                ";

            $query = "SELECT * FROM `inventory` WHERE `Blood_Type`= 'B+' ";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            $BloodCount = 0;

            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    $BloodCount = $BloodCount + $result['Blood_Bag_Quantity'];
                    $ReceiveDate = $result['Blood_Bag_RecievedDate'];
                    $ExpiryDate = $result['Blood_Bag_Expiry'];
                }
            } else {
                echo "No Records found";
            }


            echo "
                    <tr>
                    <td>" . '2' . "</td>
                    <td>" . 'B+' . "</td>
                    <td>" . $BloodCount . "</td>
                    <td>" . $ReceiveDate . "</td>
                    <td>" . $ExpiryDate . "</td>
                    </tr>
                    ";

            $query = "SELECT * FROM `inventory` WHERE `Blood_Type`= 'O+' ";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            $BloodCount = 0;

            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    $BloodCount = $BloodCount + $result['Blood_Bag_Quantity'];
                    $ReceiveDate = $result['Blood_Bag_RecievedDate'];
                    $ExpiryDate = $result['Blood_Bag_Expiry'];
                }
            } else {
                echo "No Records found";
            }

            echo "
                <tr>
                <td>" . '3' . "</td>
                <td>" . 'O+' . "</td>
                <td>" . $BloodCount . "</td>
                <td>" . $ReceiveDate . "</td>
                <td>" . $ExpiryDate . "</td>
                </tr>
                ";

            $query = "SELECT * FROM `inventory` WHERE `Blood_Type`= 'AB+' ";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            $BloodCount = 0;

            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    $BloodCount = $BloodCount + $result['Blood_Bag_Quantity'];
                    $ReceiveDate = $result['Blood_Bag_RecievedDate'];
                    $ExpiryDate = $result['Blood_Bag_Expiry'];
                }
            } else {
                echo "No Records found";
            }

            echo "
                <tr>
                <td>" . '4' . "</td>
                <td>" . 'AB+' . "</td>
                <td>" . $BloodCount . "</td>
                <td>" . $ReceiveDate . "</td>
                <td>" . $ExpiryDate . "</td>
                </tr>
                ";

            ?>


        </table>
    </div>
</body>

</html>