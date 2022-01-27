<?php
    if($_POST['name']=="" || $_POST['employee_id']=="" || $_POST['start_date']=="" || $_POST['end_date']=="" || $_POST['message']==""){
        echo "<script>alert('No Field can be blank')</script>";
        echo "<script>location.replace('leaves.html')</script>";
        //header('location:Login.html');
    }else{
        $con = mysqli_connect('localhost', 'root', '','employee_management_system');
        
        $name=$_POST['name'];
        $employee_id=$_POST['employee_id'];
        $start_date=$_POST['start_date'];
        $end_date=$_POST['end_date'];
        $message=$_POST['message'];
        // echo $name;
        // echo $employee_id;
        // echo $start_date;
        // echo $end_date;
        // echo $message;
        
        
        $sql = "INSERT INTO leave_request (name, employee_id,start_date,end_date,message) 
                 VALUES ('$name','$employee_id', '$start_date', '$end_date','$message')";
        $result = mysqli_query($con,$sql);
        
        if($result)
        {
            //echo "Contact Records Inserted";
            echo "<script>alert('Succesfully Requested')</script>";
            echo "<script>location.replace('leaves.html')</script>";
        }
        else
        {
            //echo "Are you a genuine visitor?";
            echo "<script>alert('Are you a genuine visitor?')</script>";
            echo "<script>location.replace('leaves.html')</script>";
            
        }

        

    }



?>