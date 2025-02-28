<?php

  $conn = mysqli_connect('localhost', 'root', '', 'backup_blood_bank');

  if($conn){
    // echo "Connection ok";
  } else {
    echo "Connection failed".mysqli_connect_error();
  }

?>