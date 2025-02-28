<?php
include('./connect.php');
error_reporting(0);
session_start();
$userprofile = $_SESSION['user_name'];

if($userprofile == true){

}else{
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

    <title>Blood Request</title>

  </head>

  <body>
    <div class="container">
      <form class="form-head" action="" method="POST">
        <h1 class="form-heading">Make a Blood Request</h1>

        <div class="input-group">
          <label class="label">Name</label>
          <input
            autocomplete="off"
            name="name"
            id="name"
            class="input"
            type="text"
            required
          />
          <div></div>
        </div>

        <div class="input-group">
          <label class="label">Age</label>
          <input
            autocomplete="off"
            name="age"
            id="age"
            class="input"
            type="number"
            required
          />
          <div></div>
        </div>

        <div class="input-group">
          <label class="label">Gender</label>
          <select class="input" name="gender" id="gender" required>

          <option class="label" value="">Select</option>
          <option class="label" value="Male">Male</option>
          <option class="label" value="Female">Female</option>
          <option class="label" value="Other">Other</option>
  
          </select>
        </div>

        <div class="input-group">
          <label class="label">Blood Type</label>
          <select class="input" name="blood_type" id="blood_type" required>

            <option class="label" value="">Select</option>
            <option class="label" value="A+">A+</option>
            <option class="label" value="B+">B+</option>
            <option class="label" value="O+">O+</option>
            <option class="label" value="AB+">AB+</option>

          </select>
        </div>

        <div class="input-group">
          <label class="label">Blood Bag Quantity</label>
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
          <label class="label">Usage of Blood</label>
          <select class="input" name="blood_bag_usage" id="blood_bag_usage" required>

            <option class="label" value="">Select</option>
            <option class="label" value="Personal">Personal</option>
            <option class="label" value="Hospital">Hospital</option>

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
          />
          <div></div>
        </div>

        <div class="input-group">
          <label class="label">Address</label>
          <input
            autocomplete="off"
            name="address"
            id="address"
            class="input"
            type="text"
            required
          />
          <div></div>
        </div>

        <div class="input-group">
          <label class="label">City</label>
          <select class="input" name="city" id="city" required >

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
          <label class="label">Contact</label>
          <input
            autocomplete="off"
            name="contact"
            id="contact"
            class="input"
            type="number"
            required
          />
          <div></div>
        </div>

        <button class="cta" type="submit" name="submit">

          <span class="hover-underline-animation"> Request</span>

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

// $DiseaseStr=implode(",", $Disease);

if($Name !="" && $Age != "" && $Gender != "" && $Blood_Type != "" && $Blood_Bag_Quantity != "" && $Blood_Bag_Usage != "" && $RequestDate != "" && $Reason != "" && $Address != "" && $City != "" && $Contact != "")
{

    $query = "INSERT INTO `bloodrequester`(`Name`, `Age`, `Gender`, `Blood_Type`, `Blood_Bag_Quantity`, `Usage_Of_Blood`, `Date_Of_Request`, `Reason_Of_Need`, `Address`, `City`, `Contact`) VALUES ('$Name','$Age','$Gender','$Blood_Type','$Blood_Bag_Quantity','$Blood_Bag_Usage','$RequestDate','$Reason','$Address','$City','$Contact')";

  $data=mysqli_query($conn,$query);

  if($data){
    // echo "Data inserted into db";
      echo "<script>alert('Request Made');
      window.location.assign('Home.php');</script>";
      // echo "<script>alert('Request Made')</script>";
  }
}
else{
  echo "<script>alert('Request Failed')</script>";
}
}

?>
