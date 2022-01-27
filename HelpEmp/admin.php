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
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <ul class="topnav">
        <h2 style="padding-right: 52%; color: lavender;">HelpEmp</h2>
          <li><a href="admin.php">DashBoard</a></li>
          <li><a href="employee_registration.html">Add Employee</a></li>
          <li><a href="show_leaves.php">Employee Leaves</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
    </div>
<h2 style=" font-family: serif; text-align: center;"> Welcome Admin</h2>
<p style="text-align: center;"> Here are some message </p> <br>
       

<div class="container table-container">
  <div class="row">

      <table class="table table-primary table-hover">
          <tr>
              <!--<th width="10%">Serial No</th>-->
              <th width="20%">Name</th>
              <th width="20%">Email</th>
              <th width="20%">phone</th>
              <th width="40%">Message</th>
          </tr>
          <?php
				$con = mysqli_connect('localhost', 'root', '','employee_management_system');
				$query = "SELECT * FROM contact";
			    $result = mysqli_query($con, $query);
                //$row = mysqli_fetch_array($result);
                if(mysqli_num_rows($result)>0){
                    while($r=mysqli_fetch_assoc($result)){
		    ?>
              <tr>
                  <td><?php echo $r['name'] ?></td>
                  <td><?php echo $r['email'] ?></td>
                  <td><?php echo $r['phone'] ?></td>
                  <td><?php echo $r['message'] ?></td>
              </tr>
            <?php
                    }
                }else{
                    echo "No records Found";
                }
            ?>

      </table>
      <!--<div class="back-button">
          <form action="http://localhost/180204128" method="post" class="icon-button">
              <input type="submit" class="button" style="background-color: #dc3545; margin-left: 40%; margin-bottom: 5%; margin-top:2%" value="Homepage" />
          </form>
      </div>-->
  </div>
</div>
    

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>