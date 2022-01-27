<?php
    
if($_POST['email']=="" || $_POST['password']==""){
    echo "<script>alert('No Field can be blank')</script>";
    echo "<script>location.replace('login_employee.html')</script>";
    //header('location:Login.html');
}else{
    $con = mysqli_connect('localhost', 'root', '','employee_management_system');

    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql = "select * from employee_info where email = '$email' and password='$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    if($row['email']==$email && $row['password']==$password){
        //echo "welcome ".$row['name']." you are successfully logged in.";
        session_start();
        $_SESSION['email']=$email;

        $sql="UPDATE `check_access` SET `flag`='1' ";
        mysqli_query($con,$sql);

        header('location:employee.php');

    }else{
        echo "<script>alert('Check your Credentials')</script>";
        echo "<script>location.replace('login_employee.html')</script>";
    }
}
?>

