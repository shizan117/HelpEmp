<?php
  $con = mysqli_connect('localhost', 'root', '','employee_management_system');
  $query = "UPDATE `check_access` SET `flag`='0' ";
  $result = mysqli_query($con, $query);
  //$row = mysqli_fetch_array($result);
  //$flag=$row['flag'];
  

     echo "<script>alert('Logged Out')</script>";
     echo "<script>location.replace('index.html')</script>";


?>