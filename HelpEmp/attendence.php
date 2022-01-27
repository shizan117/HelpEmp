<?php
    
    include "sendEmail.php";
    date_default_timezone_set("Asia/Dhaka");
    $success="";
    $error_message="";

    $con = mysqli_connect('localhost', 'root', '','employee_management_system');
    
    if(!empty($_POST['submit_email'])){
        $result=mysqli_query($con,"select * from registered_users where email='".$_POST['email']."'");
        //$row = mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        if($count>0){
            $otp=rand(100000,999999);

            $mail_status=sendOTP($_POST['email'],$otp);

            if($mail_status==1){
                $result=mysqli_query($con,"insert into otp_expiry(otp,is_expired,create_at) 
                                        values('".otp."',0,'".date("Y-m-d H:i:s")."')");
                
                $current_id=mysqli_insert_id($con);

                if(!empty($current_id)){
                    $success=1;
                }
            }
        }else{
            $error_message = "Eail not exist";
        }
    }

    if(!empty($_POST['submit_otp'])){
        $result=mysqli_query($con, "select * from otp_expiry where otp='".$_POST['otp']."' and 
                                    is_expired!=1 and NOW() <= DATE_ADD(create_at, INTERVAL 15 MINUTE)");
        $count = mysqli_num_rows($result);
        
        if(!empty($count)){
            $result=mysqli_query($con, "update otp_expiry set is_expired=1 where otp = '".$_POST['otp']."'");
            $success=2;
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
  
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/newStyle.css">
    <title>Attendence Formm</title>
    
</head>
<body>
   
  <div>
    <ul class="topnav">
    <h2 style="padding-right: 52%; color: lavender;">HelpEmp</h2>
          <li><a href="employee.php">Profile</a></li>
          <li><a href="attendence.php">Attendence</a></li>
          <li><a href="leaves.html">Leaves</a></li>
          <li><a href="logout.php">Log out</a></li>
    </ul>
  </div>

  <div class="wrapper fadeInDown">
    <div id="formContent">


      <!-- Icon -->
      <div class="fadeIn first">
        <h1>Welcome</h1> <br> <br>
      </div>

      <!-- Login Form -->
      <form method="post" action="attendence.php">
        <?php
        if(!empty($success==1)){
        ?>
            <input type="text" id="login" class="fadeIn second" name="otp" placeholder="OTP">
        
            <input type="submit" class="fadeIn third" value="Click me to Verify">
    
        <?php
        }elseif($success==2){
        ?>
            <p > Your Attendence is given</p>
        <?php
        }else{
        ?>
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
        
            <input type="submit" class="fadeIn third" name="submit_email" value="Click me to Verify">
        
        <?php
        }
        ?>
        
      </form>

    </div>
  </div>
</body>

</html>