<?php
include('./connect.php');
error_reporting(0);
session_start();
$userprofile = $_SESSION['user_name'];

if ($userprofile == true) {
} else {
  header('location:Login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="Donate.css" />
  <script src="./Registration.js"></script>

  <title>Donor Registration</title>

</head>

<body>
  <div class="container">
    <form class="form-head" action="" method="POST">
      <h1 class="form-heading">Become a Donor</h1>

      <div class="input-group">
        <label for="Name" class="label">Name</label>
        <input name="name" id="name" class="input" type="text" required>
        <div></div>
      </div>

      <div class="input-group">
        <label for="FatherName" class="label">Father Name</label>
        <input name="father_name" id="father_name" class="input" type="text" required>
        <div></div>
      </div>

      <div class="input-group">
        <label for="Age" class="label">Age</label>
        <input name="age" id="age" class="input" type="number" required>
        <div></div>
      </div>

      <div class="input-group">
        <label for="Gender" class="label">Gender</label>
        <select class="input" name="gender" id="gender" required>

          <option class="label" value="Undefined">Select</option>
          <option class="label" value="Male">Male</option>
          <option class="label" value="Female">Female</option>
          <option class="label" value="Other">Other</option>

        </select>
      </div>

      <div class="input-group">
        <label for="Weight" class="label">Weight ( In Kg )</label>
        <input name="weight" id="weight" class="input" type="number" required>
        <div></div>
      </div>

      <div class="input-group">
        <label for="BloodType" class="label">Blood Type</label>
        <select class="input" name="blood_type" id="blood_type" required>

          <option class="label" value="">Select</option>
          <option class="label" value="A+">A+</option>
          <option class="label" value="B+">B+</option>
          <option class="label" value="O+">O+</option>
          <option class="label" value="AB+">AB+</option>

        </select>
      </div>

      <div class="input-group">
        <label for="BloodBagQuantity" class="label">Blood Bag Quantity</label>
        <select class="input" name="blood_bag_quantity" id="blood_bag_quantity" required>

          <option class="label" value="">Select</option>
          <option class="label" value="1">1</option>
          <option class="label" value="2">2</option>
          <option class="label" value="3">3</option>
          <option class="label" value="4">4</option>
          <option class="label" value="5">5</option>

        </select>
      </div>

      <div class="input-group">
        <label for="KnownDisease" class="label">Known Disease</label>
        <input name="known_disease" id="known_disease" class="input" type="text" required>
        <div></div>
      </div>

      <div class="input-group">
        <label for="DOR" class="label">Date of Registration</label>
        <input name="date_of_donation" id="date_of_donation" class="input" type="date" required>
        <div></div>
      </div>

      <div class="input-group">
        <label for="Address" class="label">Address</label>
        <input name="address" id="address" class="input" type="text" required>
        <div></div>
      </div>

      <div class="input-group">
        <label for="City" class="label">City</label>
        <select class="input" name="city" id="city" required>

          <option class="label" value="">Select</option>
          <option class="label" value="Islamabad">Islamabad</option>
          <option class="label" value="Karachi">Karachi</option>
          <option class="label" value="Multan">Multan</option>
          <option class="label" value="Quetta">Quetta</option>
          <option class="label" value="Lahore">Lahore</option>
          <option class="label" value="Peshawar">Peshawar</option>

        </select>
      </div>

      <div class="input-group">
        <label for="Contact" class="label">Contact</label>
        <input name="contact" id="contact" class="input" type="number" required>
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
if (isset($_POST['submit'])) {
  $Name = $_POST['name'];
  $FatherName = $_POST['father_name'];
  $Age = $_POST['age'];
  $Gender = $_POST['gender'];
  $Weight = $_POST['weight'];
  $Blood_Type = $_POST['blood_type'];
  $Blood_Bag_Quantity = $_POST['blood_bag_quantity'];
  $KnownDisease = $_POST['known_disease'];
  $RegistrationDate = $_POST['date_of_donation'];
  $Address = $_POST['address'];
  $City = $_POST['city'];
  $Contact = $_POST['contact'];

  // $DiseaseStr=implode(",", $Disease);

  if ($Name != "" && $FatherName != "" && $Age != "" && $Gender != "" && $Weight != "" && $Blood_Type != "" && $Blood_Bag_Quantity != "" && $KnownDisease != "" && $RegistrationDate != "" && $Address != "" && $City != "" && $Contact != "") {

    $query = "INSERT INTO `donor`(`Name`, `FatherName`, `Age`, `Gender`, `Weight`, `Blood_Type`, `Blood_Bag_Quantity`, `KnownDisease`, `RegistrationDate`, `Address`, `City`, `Contact`) VALUES ('$Name','$FatherName','$Age','$Gender','$Weight','$Blood_Type','$Blood_Bag_Quantity','$KnownDisease','$RegistrationDate','$Address','$City','$Contact')";

    $data = mysqli_query($conn, $query);

    if ($data) {
      // echo "Data inserted into db";
      $insert = "INSERT INTO `inventory`(`Blood_Type`,`Blood_Bag_Quantity`) VALUES ('$Blood_Type','$Blood_Bag_Quantity')";
      $data2 = mysqli_query($conn, $insert);

      echo "<script>alert('Registered');
      window.location.assign('Home.php');</script>";
    }
  } else {
    echo "Data not inserted into db";
  }
}

?>