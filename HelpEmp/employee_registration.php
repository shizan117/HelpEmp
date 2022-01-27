<?php
    if($_POST['employee_id']=="" || $_POST['department']=="" || $_POST['designation']=="" || $_POST['name']=="" || $_POST['father']=="" || $_POST['birthday']=="" || $_POST['gender']=="" || $_POST['nid']=="" || $_POST['email']=="" || $_POST['phone']=="" || $_POST['address']=="" || $_POST['password']==""){
        echo "<script>alert('No Field can be blank')</script>";
        echo "<script>location.replace('employee_registration.html')</script>";
        //header('location:Login.html');
    }else{
        $con = mysqli_connect('localhost', 'root', '','employee_management_system');
        
        $employee_id=$_POST['employee_id'];
        $department=$_POST['department'];
        $designation=$_POST['designation'];
        $name=$_POST['name'];
        $father=$_POST['father'];
        $birthday=$_POST['birthday'];
        $gender=$_POST['gender'];
        $nid=$_POST['nid'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $pssword=$_POST['password'];

    
        $sql = "INSERT INTO employee_info (employee_id, department, designation, name,father,birthday,gender,nid, email,phone,address,password) 
                VALUES ('$employee_id', '$department', '$designation', '$name', '$father','$birthday','$gender','$nid','$email','$phone','$address','$pssword')";
        $result = mysqli_query($con,$sql);
        
        if($result)
        {
            //echo "Contact Records Inserted";
            echo "<script>alert('Succesfully Registered')</script>";
            echo "<script>location.replace('employee_registration.html')</script>";
        }
        else
        {
            //echo "Are you a genuine visitor?";
            echo "<script>alert('Are you a genuine visitor?')</script>";
            echo "<script>location.replace('employee_registration.html')</script>";
            
        }
    }
?>