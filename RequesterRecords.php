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
            <h1>Blood Requester Records</h1>
        </div>
        <div class="container">
        <table border="3" cellspacing="7">
            <tr>
                <th>Requester_ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Blood Type</th>
                <th>Blood Bag Quantity</th>
                <th>Usage Of Blood</th>
                <th>Date Of Request</th>
                <th>Reason Of Need</th>
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

$query = "SELECT * FROM bloodrequester";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

// echo $result['Name'], " ", $result['Age'], " ", $result['Gender'], " ", $result['Blood_Type'], " ", $result['Date'], " ", $result['BloodType2'], " ", $result['City'], " ", $result['KnownDisease'];
//echo $total;

if($total != 0){

    while($result=mysqli_fetch_assoc($data)){
        echo "
        <tr>
        <td>".$result['Requester_ID']."</td>
        <td>".$result['Name']."</td>
        <td>".$result['Age']."</td>
        <td>".$result['Gender']."</td>
        <td>".$result['Blood_Type']."</td>
        <td>".$result['Blood_Bag_Quantity']."</td>
        <td>".$result['Usage_Of_Blood']."</td>
        <td>".$result['Date_Of_Request']."</td>
        <td>".$result['Reason_Of_Need']."</td>
        <td>".$result['Address']."</td>
        <td>".$result['City']."</td>
        <td>".$result['Contact']."</td>

        <td><a href= './update2.php?Requester_ID=$result[Requester_ID]&Name=$result[Name]&Age=$result[Age]&Gender=$result[Gender]&Blood_Type=$result[Blood_Type]&Blood_Bag_Quantity=$result[Blood_Bag_Quantity]&Usage_Of_Blood=$result[Usage_Of_Blood]&Date_Of_Request=$result[Date_Of_Request]&Reason_Of_Need=$result[Reason_Of_Need]&Address=$result[Address]&City=$result[City]&Contact=$result[Contact]'/><input type='submit' value='Edit' id='editbtn'></td>

        <td><a href= './delete2.php?Requester_ID=$result[Requester_ID]' /><input type='submit' value='Delete' id='deletebtn' ></td>
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