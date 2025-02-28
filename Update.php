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
$Name = $_GET['Name'];
$FatherName = $_GET['FatherName'];
$Age = $_GET['Age'];
$Gender = $_GET['Gender'];
$Weight = $_GET['Weight'];
$Blood_Type = $_GET['Blood_Type'];
$KnownDisease = $_GET['KnownDisease'];
$RegistrationDate = $_GET['RegistrationDate'];
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
  <title>Document</title>
</head>

<body>
  <div class="container">
    <form class="form-head" action="" method="POST">
      <h1 class="form-heading">Become a Donor</h1>

      <div class="input-group">
        <label for="Name" class="label">Name</label>
        <input name="name" id="name" class="input" type="text" required value="<?php echo "$Name"?>">
        <div></div>
      </div>

      <div class="input-group">
        <label for="FatherName" class="label">Father Name</label>
        <input name="father_name" id="father_name" class="input" type="text" required value="<?php echo"$FatherName"?>">
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
        <label for="Weight" class="label">Weight ( In Kg )</label>
        <input name="weight" id="weight" class="input" type="number" required value="<?php echo"$Weight"?>">
        <div></div>
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
        <label for="KnownDisease" class="label">Known Disease</label>
        <input name="known_disease" id="known_disease" class="input" type="text" required value="<?php echo"$KnownDisease"?>">
        <div></div>
      </div>

      <div class="input-group">
        <label for="DOR" class="label">Date of Registration</label>
        <input name="date_of_donation" id="date_of_donation" class="input" type="date" required value="<?php echo"$RegistrationDate"?>">
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
$FatherName=$_POST['father_name'];
$Age=$_POST['age'];
$Gender=$_POST['gender'];
$Weight=$_POST['weight'];
$Blood_Type=$_POST['blood_type'];
$KnownDisease=$_POST['known_disease'];
$RegistrationDate=$_POST['date_of_donation'];
$Address=$_POST['address'];
$City=$_POST['city'];
$Contact=$_POST['contact'];

  $query = "UPDATE `donor` SET `Name`='$Name', `FatherName`='$FatherName',  `Age`='$Age', `Gender`='$Gender', `Weight`='$Weight', `Blood_Type`='$Blood_Type', `KnownDisease`='$KnownDisease', `RegistrationDate`='$RegistrationDate', `Address`='$Address', `City`='$City', `Contact`='$Contact'  WHERE `Donor_ID`='$DonorID' ;";


  $data = mysqli_query($conn, $query);

  if ($data) {
    echo "<script>alert('Record Updated')</script>";
    echo "<script>window.location.assign('DonorRecords.php')</script>";
  } else {
    echo "Record Not Updated ";
  }
}
?>