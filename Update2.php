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

$Requester_ID = $_GET['Requester_ID'];
$Name = $_GET['Name'];
$Age = $_GET['Age'];
$Gender = $_GET['Gender'];
$Blood_Type = $_GET['Blood_Type'];
$Blood_Bag_Quantity = $_GET['Blood_Bag_Quantity'];
$Usage_Of_Blood = $_GET['Usage_Of_Blood'];
$Date_Of_Request = $_GET['Date_Of_Request'];
$Reason_Of_Need = $_GET['Reason_Of_Need'];
$Address = $_GET['Address'];
$City = $_GET['City'];
$Contact = $_GET['Contact'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Donate.css">
  <title>Blood Request</title>
</head>

<body>
  <div class="container">
    <form class="form-head" action="" method="POST">
      <h1 class="form-heading">Update Request</h1>

      <div class="input-group">
        <label for="Name" class="label">Name</label>
        <input name="name" id="name" class="input" type="text" required value="<?php echo "$Name"?>">
        <div></div>
      </div>

      <div class="input-group">
        <label for="Age" class="label">Age</label>
        <input name="age" id="age" class="input" type="number" required value="<?php echo"$Age"?>">
        <div></div>
      </div>

      <div class="input-group">
        <label for="Gender" class="label">Gender</label>
        <select class="input" name="gender" id="gender" required>

          <option class="label" value="Undefined">Select</option>
          <option class="label" value="Male"
          <?php 
            if($Gender == 'Male')
            {
              echo "selected";
            }
          ?>
          >Male</option>
          <option class="label" value="Female"
          <?php 
            if($Gender == 'Female')
            {
              echo "selected";
            }
          ?>
          >Female</option>
          <option class="label" value="Other"
          <?php 
            if($Gender == 'Other')
            {
              echo "selected";
            }
          ?>
          >Other</option>

        </select>
      </div>

      <div class="input-group">
        <label for="BloodType" class="label">Blood Type</label>
        <select class="input" name="blood_type" id="blood_type" required>

          <option class="label" value="">Select</option>
          <option class="label" value="A+"
          <?php 
            if($Blood_Type == 'A+')
            {
              echo "selected";
            }
          ?>
          >A+</option>
          <option class="label" value="B+"
          <?php 
            if($Blood_Type == 'B+')
            {
              echo "selected";
            }
          ?>
          >B+</option>
          <option class="label" value="O+"
          <?php 
            if($Blood_Type == 'O+')
            {
              echo "selected";
            }
          ?>
          >O+</option>
          <option class="label" value="AB+"
          <?php 
            if($Blood_Type == 'AB+')
            {
              echo "selected";
            }
          ?>
          >AB+</option>

        </select>
      </div>

      <div class="input-group">
          <label class="label">Blood Bag Quantity</label>
          <select class="input" name="blood_bag_quantity" id="blood_bag_quantity" required>

            <option class="label" value="">Select</option>
            <option class="label" value="1"
            <?php 
            if($Blood_Bag_Quantity == '1')
            {
              echo "selected";
            }
            ?>>1</option>
            <option class="label" value="2"
            <?php 
            if($Blood_Bag_Quantity == '2')
            {
              echo "selected";
            }
            ?>>2</option>
            <option class="label" value="3"
            <?php 
            if($Blood_Bag_Quantity == '3')
            {
              echo "selected";
            }
            ?>>3</option>
            <option class="label" value="4"
            <?php 
            if($Blood_Bag_Quantity == '4')
            {
              echo "selected";
            }
            ?>>4</option>
            <option class="label" value="5"
            <?php 
            if($Blood_Bag_Quantity == '5')
            {
              echo "selected";
            }
            ?>>5</option>

          </select>
        </div>

        <div class="input-group">
          <label class="label">Usage of Blood</label>
          <select class="input" name="blood_bag_usage" id="blood_bag_usage" required>

            <option class="label" value="">Select</option>
            <option class="label" value="Personal"
            <?php 
            if($Usage_Of_Blood == 'Personal')
            {
              echo "selected";
            }
            ?>>Personal</option>
            <option class="label" value="Hospital"
            <?php 
            if($Usage_Of_Blood == 'Hospital')
            {
              echo "selected";
            }
            ?>>Hospital</option>

          </select>
        </div>

        <div class="input-group">
          <label class="label">Date of Request</label>
          <input
            autocomplete="off"
            name="date_of_request"
            id="date_of_request"
            class="input"
            type="date"
            required
            value="<?php echo"$Date_Of_Request"?>"
          />
          <div></div>
        </div>


        <div class="input-group">
          <label class="label">Reason of Need</label>
          <input
            autocomplete="off"
            name="reason"
            id="reason"
            class="input"
            type="text"
            required
            value="<?php echo"$Reason_Of_Need"?>"

          />
          <div></div>
        </div>

      <div class="input-group">
        <label for="Address" class="label">Address</label>
        <input name="address" id="address" class="input" type="text" required value="<?php echo"$Address"?>">
        <div></div>
      </div>

      <div class="input-group">
        <label for="City" class="label">City</label>
        <select class="input" name="city" id="city" required>

          <option class="label" value="">Select</option>
          <option class="label" value="Islamabad"
          <?php 
            if($City == 'Islamabad')
            {
              echo "selected";
            }
          ?>
          >Islamabad</option>
          <option class="label" value="Karachi"
          <?php 
            if($City == 'Karachi')
            {
              echo "selected";
            }
          ?>
          >Karachi</option>
          <option class="label" value="Multan"
          <?php 
            if($City == 'Multan')
            {
              echo "selected";
            }
          ?>
          >Multan</option>
          <option class="label" value="Quetta"
          <?php 
            if($City == 'Quetta')
            {
              echo "selected";
            }
          ?>
          >Quetta</option>
          <option class="label" value="Lahore"
          <?php 
            if($City == 'Lahore')
            {
              echo "selected";
            }
          ?>
          >Lahore</option>
          <option class="label" value="Peshawar"
          <?php 
            if($City == 'Peshawar')
            {
              echo "selected";
            }
          ?>
          >Peshawar</option>

        </select>
      </div>

      <div class="input-group">
        <label for="Contact" class="label">Contact</label>
        <input name="contact" id="contact" class="input" type="number" required value="<?php echo"$Contact"?>">
        <div></div>
      </div>

      <button class="cta" type="submit" name="submit">

        <span class="hover-underline-animation"> Register</span>

        <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
          <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
        </svg>

      </button>

    </form>
  </div>
</body>

</html>

<?php
if(isset($_POST['submit']))
{
    $Name=$_POST['name'];
    $Age=$_POST['age'];
    $Gender=$_POST['gender'];
    $Blood_Type=$_POST['blood_type'];
    $Blood_Bag_Quantity=$_POST['blood_bag_quantity'];
    $Blood_Bag_Usage=$_POST['blood_bag_usage'];
    $RequestDate=$_POST['date_of_request'];
    $Reason=$_POST['reason'];
    $Address=$_POST['address'];
    $City=$_POST['city'];
    $Contact=$_POST['contact'];

  $query = "UPDATE `bloodrequester` SET `Name`='$Name',  `Age`='$Age', `Gender`='$Gender', `Blood_Type`='$Blood_Type', `Blood_Bag_Quantity`='$Blood_Bag_Quantity', `Usage_Of_Blood`='$Usage_Of_Blood', `Date_Of_Request`='$Date_Of_Request', `Reason_Of_Need`='$Reason_Of_Need', `Address`='$Address', `City`='$City', `Contact`='$Contact'  WHERE `Requester_ID`='$Requester_ID' ;";

  // $query="INSERT INTO donor values('$DonorID','$Name', '$Age', '$Gender', '$Blood_Type', '$Date', '$BloodType2', '$City', '$KnownDiseaseStr')";

  $data = mysqli_query($conn, $query);

  if ($data) {
    echo "<script>alert('Record Updated')</script>";
    echo "<script>window.location.assign('RequesterRecords.php')</script>";
  } else {
    echo "Record Not Updated ";
  }
}
?>