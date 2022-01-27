<?php
    
if($_POST['username']=="" || $_POST['password']==""){
    echo "<script>alert('No Field can be blank')</script>";
    echo "<script>location.replace('Login.html')</script>";
    //header('location:Login.html');
}else{
    $con = mysqli_connect('localhost', 'root', '','employee_management_system');
    
    // if($con->connect_error)
    // {
    //     echo "Error 404";
    // }
    // else{
    //     echo "connected";
    // }

    $username=$_POST['username'];
    $password=$_POST['password'];
    // echo $username;
    // echo $password;

    $sql = "select * from user where username = '$username' and password='$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    if($row['username']==$username && $row['password']==$password){
        //echo "welcome ".$username." you are successfully logged in.";
        $con = mysqli_connect('localhost', 'root', '','employee_management_system');
        $sql="UPDATE `check_access` SET `flag`='1' ";
        mysqli_query($con,$sql);

        header('location:admin.php');

    }else{
        echo "<script>alert('Check your Credentials')</script>";
        echo "<script>location.replace('Login.html')</script>";
    }
}



?>
