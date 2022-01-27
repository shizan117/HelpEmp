
<?php
  $con = mysqli_connect('localhost', 'root', '','employee_management_system');
  $query = "SELECT * FROM check_access ";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
  $flag=$row['flag'];
  //echo $flag;
  if($flag!=1)
  {
    echo "<script>alert('Log In First')</script>";
    echo "<script>location.replace('login_employee.html')</script>";
  }

?>
  




<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Emloyee</title>
<style>

  
.s1 .container {
	display:grid;
	width: 500px;
	background: white ;
	box-shadow: 0 6px 10px 0 rgba(0,0,0,0.2);
	padding: 3px 30px;
	height: auto;   
  padding-bottom: 3%; 
}


.s1 .container .circle{  
  background-color: #43bcf0;  
  width: 100px;
  height: 100px;
  line-height: 60px;
  border-radius: 100%;
margin-left: auto;
  margin-right: auto;
margin-top: -35px;
}
tbody, td, tfoot, th, thead, tr {
  border-color: inherit;
  border-style: solid;
  border-width: 1.5px;
  padding-left: 50px;
}
s1 .table {
  font-family: arial, sans-serif;
 
  width: 100%;
  border: 1px solid black;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 7px;
}

tr:nth-child(odd) {
  background-color: #dddddd;
}
</style>



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

<section class="s1 " style="padding-top: 5%;" >
  <div class= "container">

    <div class="circle">
      
    </div>
    <h4 style=" margin: auto; font-size:25px; font-weight:600; margin-bottom: 10%;">Personal Details</h4>

    <table >

        
        <?php
        
        session_start();
        $temp="";
        $temp=$_SESSION['email'];

				$con = mysqli_connect('localhost', 'root', '','employee_management_system');
				$query = "SELECT * FROM employee_info where email ='".$temp."'";
			    $result = mysqli_query($con, $query);
                $row = mysqli_fetch_array($result);
                //if(mysqli_num_rows($result)>0){
                //    while($r=mysqli_fetch_assoc($result)){
                  $employee_id=$row['employee_id'];
                  $department=$row['department'];
                  $designation=$row['designation'];
                  $name=$row['name'];
                  $father=$row['father'];
                  $birthday=$row['birthday'];
                  $gender=$row['gender'];
                  $nid=$row['nid'];
                  $email=$row['email'];
                  $phone=$row['phone'];
                  $address=$row['address'];
                  //$pssword=$row['password'];
		    ?>
    
        <tr>
          <td>Employee ID</td>
          <td><?php echo $employee_id ?></td>
        </tr>
        <tr>
          <td>Department</td>
          <td><?php echo $department ?></td>
        </tr>
        <tr>
          <td>Designation</td>
          <td><?php echo $designation ?></td>
        </tr>
      <tr>
        <td>Name</td>
        <td><?php echo $name ?></td>
      </tr>
      <tr>
        <td>Father's Name</td>
        <td><?php echo $father ?></td>
      
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td><?php echo $birthday ?></td>
       
      </tr>
      <tr>
        <td>Gender</td>
        <td><?php echo $gender ?></td>
       
      </tr>

      <tr>
        <td>Nid</td>
        <td><?php echo $nid ?></td>
  
      </tr>

      <tr>
        <td>Email</td>
        <td><?php echo $email ?></td>
  
      </tr>
      <tr>
        <td>Phone</td>
        <td><?php echo $phone ?></td>
      </tr>

      <tr>
        <td>Address</td>
        <td><?php echo $address ?></td>
      </tr>

     
    </table>
  </div>

  

</section>


<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>