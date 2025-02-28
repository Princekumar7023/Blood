<?php
include('./connect.php');
error_reporting(0);
session_start();
// echo "Welcome ".$_SESSION['user_name'];

?>


<html>
    <head>
        <title>Display</title>
        <link rel="stylesheet" href="Display.scss">
    </head>
    <body>
        <div class="heading">
            <h1>Donor Records</h1>
        </div>
        <div class="container">
        <table border="3" cellspacing="7">
            <tr>
                <th>Donor_ID</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Weight</th>
                <th>Blood Type</th>
                <th>Blood Bag Quantity</th>
                <th>KnownDisease</th>
                <th>Registration Date</th>
                <th>Address</th>
                <th>City</th>
                <th>Contact</th>
                
                <th colspan="2" align="center">Operations</th>
            </tr>


<?php

$userprofile = $_SESSION['user_name'];

if($userprofile == 'muneer'){

}elseif($userprofile == true && $userprofile != 'muneer'){
    header('location:Home.php');
}
else{
    header('location:Login.php');
}

$query = "SELECT * FROM donor";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

// echo $result['Name'], " ", $result['Age'], " ", $result['Gender'], " ", $result['Blood_Type'], " ", $result['Date'], " ", $result['BloodType2'], " ", $result['City'], " ", $result['KnownDisease'];
//echo $total;

if($total != 0){

    while($result=mysqli_fetch_assoc($data)){
        echo "
        <tr>
        <td>".$result['Donor_ID']."</td>
        <td>".$result['Name']."</td>
        <td>".$result['FatherName']."</td>
        <td>".$result['Age']."</td>
        <td>".$result['Gender']."</td>
        <td>".$result['Weight']."</td>
        <td>".$result['Blood_Type']."</td>
        <td>".$result['Blood_Bag_Quantity']."</td>
        <td>".$result['KnownDisease']."</td>
        <td>".$result['RegistrationDate']."</td>
        <td>".$result['Address']."</td>
        <td>".$result['City']."</td>
        <td>".$result['Contact']."</td>

        <td><a href= './update.php?DonorID=$result[Donor_ID]&Name=$result[Name]&FatherName=$result[FatherName]&Age=$result[Age]&Gender=$result[Gender]&Weight=$result[Weight]&Blood_Type=$result[Blood_Type]&KnownDisease=$result[KnownDisease]&RegistrationDate=$result[RegistrationDate]&Address=$result[Address]&City=$result[City]&Contact=$result[Contact]'/><input type='submit' value='Edit' id='editbtn'></td>

        <td><a href= './delete.php?DonorID=$result[Donor_ID]' /><input type='submit' value='Delete' id='deletebtn' ></td>
        </tr>
        ";
    }
   // echo "Table has Records";
}
else{
    echo "No Records found";
}

?>

</table>
</div>
</body>
</html>
