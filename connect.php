<?php

  $conn = mysqli_connect('localhost', 'root', '', 'blood_management_system');

  if($conn){
    // echo "Connection ok";
  } else {
    echo "Connection failed".mysqli_connect_error();
  }

?>