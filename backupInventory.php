<?php
include('./connect2.php');
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
    <link rel="stylesheet" href="./backup.css">
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

            $query = "SELECT * FROM `inventory` WHERE `Blood_Type`= 'B-' ";
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
                    <td>" . 'B-' . "</td>
                    <td>" . $BloodCount . "</td>
                    <td>" . $ReceiveDate . "</td>
                    <td>" . $ExpiryDate . "</td>
                    </tr>
                    ";

                    $query = "SELECT * FROM `inventory` WHERE `Blood_Type`= 'A-' ";
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
                        <td>" . 'A-' . "</td>
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

                $query = "SELECT * FROM `inventory` WHERE `Blood_Type`= 'O-' ";
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
                    <td>" . '5' . "</td>
                    <td>" . 'O-' . "</td>
                    <td>" . $BloodCount . "</td>
                    <td>" . $ReceiveDate . "</td>
                    <td>" . $ExpiryDate . "</td>
                    </tr>
                    ";

                    $query = "SELECT * FROM `inventory` WHERE `Blood_Type`= 'AB-' ";
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
                        <td>" . '6' . "</td>
                        <td>" . 'AB-' . "</td>
                        <td>" . $BloodCount . "</td>
                        <td>" . $ReceiveDate . "</td>
                        <td>" . $ExpiryDate . "</td>
                        </tr>
                        ";

            ?>


        </table>
    </div>

    <div class="form-container">
        <form class="form-head" action="" method="post">
        <h1 class="form-heading">Order Blood</h1>

        <div class="input-group">
          <label for="email" class="label">Email</label>
          <input name="email" id="email" class="input" type="email" required>
          <div></div>
        </div>

        <div class="input-group">
        <label for="BloodType" class="label">Blood Type</label>
        <select class="input" name="blood_type" id="blood_type" required>

          <option class="label" value="">Select</option>
          <option class="label" value="A+">A+</option>
          <option class="label" value="A-">A-</option>
          <option class="label" value="B-">B-</option>
          <option class="label" value="O-">O-</option>
          <option class="label" value="AB+">AB+</option>
          <option class="label" value="AB-">AB-</option>

        </select>
      </div>

        <div class="input-group">
          <label for="Quantity" class="label">Quantity</label>
          <input name="quantity" id="Quantity" class="input" type="number" required>
          <div></div>
        </div>

        <button class="cta" type="submit" name="submit">

        <span class="hover-underline-animation"> Order</span>

        <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
          <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
        </svg>

      </button>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $Email = $_POST['email'];
    $Blood_Type = $_POST['blood_type'];
    $Quantity = $_POST['quantity'];

    $query = "INSERT INTO `order`(`Email`, `BloodType`, `Quantity`) VALUES ('$Email','$Blood_Type','$Quantity') ";

    $data = mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('Order Placed')</script>";
    } else{
        echo "<script>alert('Order Failed')</script>";
    }
}

?>