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
      <!--<div style="padding-left: 50%;">
        <button type="button" class="btn btn-outline-primary">Accept</button>
        <button type="button" class="btn btn-outline-primary">Decline</button>
      </div>-->

      <div>
        
        <table class="table table-primary table-hover">
            <tr>
                <!--<th width="10%">Serial No</th>-->
                <th width="20%">Name</th>
                <th width="20%">Employee ID</th>
                <th width="20%">Start Date</th>
                <th width="20%">End Date</th>
                <th width="30%">Message</th>
                <th width="20%">
                  
                </th>
            </tr>
          <?php

            
            $con = mysqli_connect('localhost', 'root', '','employee_management_system');
            $query = "SELECT * FROM leave_request";
            $result = mysqli_query($con, $query);
            
                  //$row = mysqli_fetch_array($result);
                  if(mysqli_num_rows($result)>0 ){
                      while($r=mysqli_fetch_assoc($result)){
                        if($r['status']==0){
                          break;
                        }
                      }

                        // $r=mysqli_fetch_assoc($result);
                        if($r['status']==0){
                          

          ?>
                <tr>
                    <td><?php echo $r['name'] ?></td>
                    <td><?php echo $r['employee_id'] ?></td>
                    
                    <td><?php echo $r['start_date'] ?></td>
                    <td><?php echo $r['end_date'] ?></td>
                    <td><?php echo $r['message'] ?></td>
                    <td>
                      <form method="post">
                        <input type="submit" class="btn btn-outline-primary" name="button1" value="Accept">
                        <input type="submit" class="btn btn-outline-primary" name="button2" value="Decline">
                      </form>
                    </td>
                </tr>

          <?php
                  if(isset($_POST['button1'])) {
                    $query = "UPDATE leave_request SET status='1' WHERE employee_id='".$r['employee_id']."'";
                    mysqli_query($con, $query);
                    header('location:show_leaves.php');
                  }
                  if(isset($_POST['button2'])) {
                    $query = "UPDATE `leave_request` SET `status`='-1' WHERE employee_id='".$r['employee_id']."'";
                    mysqli_query($con, $query);
                    header('location:show_leaves.php');
                  }

                        }
                      //$r=mysqli_fetch_assoc($result);
                      //echo $r['name'] ; 

                     // }
                  }else{
                      echo "No records Found";
                  }
          ?>
          <?php
                      
                        while($r=mysqli_fetch_assoc($result)){
                          if($r['status']==0){
                            break;
                          }
                        }
                        if($r['status']==0){
                          

          ?>
                  <tr>
                    <td><?php echo $r['name'] ?></td>
                    <td><?php echo $r['employee_id'] ?></td>
                    
                    <td><?php echo $r['start_date'] ?></td>
                    <td><?php echo $r['end_date'] ?></td>
                    <td><?php echo $r['message'] ?></td>
                    <td>
                      <form method="post">
                        <input type="submit" class="btn btn-outline-primary" name="button3" value="Accept">
                        <input type="submit" class="btn btn-outline-primary" name="button4" value="Decline">
                      </form>
                    </td>
                </tr>
          
          <?php
                  
                  if(isset($_POST['button3'])) {
                    $query = "UPDATE leave_request SET status='1' WHERE employee_id='".$r['employee_id']."'";
                    mysqli_query($con, $query);
                    header('location:show_leaves.php');
                  }
                  if(isset($_POST['button4'])) {
                    $query = "UPDATE `leave_request` SET `status`='-1' WHERE employee_id='".$r['employee_id']."'";
                    mysqli_query($con, $query);
                    header('location:show_leaves.php');
                  }

                        }
                      //$r=mysqli_fetch_assoc($result);
                      //echo $r['name'] ; 

                     // }
                  //}else{
                  //    echo "No records Found";
                  //}
          ?>
          <?php
                        while($r=mysqli_fetch_assoc($result)){
                          if($r['status']==0){
                            break;
                          }
                        }
                        if($r['status']==0){
                          

          ?>
                  <tr>
                    <td><?php echo $r['name'] ?></td>
                    <td><?php echo $r['employee_id'] ?></td>
                    
                    <td><?php echo $r['start_date'] ?></td>
                    <td><?php echo $r['end_date'] ?></td>
                    <td><?php echo $r['message'] ?></td>
                    <td>
                      <form method="post">
                        <input type="submit" class="btn btn-outline-primary" name="button5" value="Accept">
                        <input type="submit" class="btn btn-outline-primary" name="button6" value="Decline">
                      </form>
                    </td>
                </tr>
          
          <?php
                  
                  if(isset($_POST['button5'])) {
                    $query = "UPDATE leave_request SET status='1' WHERE employee_id='".$r['employee_id']."'";
                    mysqli_query($con, $query);
                    header('location:show_leaves.php');
                  }
                  if(isset($_POST['button6'])) {
                    $query = "UPDATE `leave_request` SET `status`='-1' WHERE employee_id='".$r['employee_id']."'";
                    mysqli_query($con, $query);
                    header('location:show_leaves.php');
                  }

                        }
                      
          ?>
          <?php
                     
                        while($r=mysqli_fetch_assoc($result)){
                          if($r['status']==0){
                            break;
                          }
                        }
                        if($r['status']==0){
                          

          ?>
                  <tr>
                    <td><?php echo $r['name'] ?></td>
                    <td><?php echo $r['employee_id'] ?></td>
                    
                    <td><?php echo $r['start_date'] ?></td>
                    <td><?php echo $r['end_date'] ?></td>
                    <td><?php echo $r['message'] ?></td>
                    <td>
                      <form method="post">
                        <input type="submit" class="btn btn-outline-primary" name="button7" value="Accept">
                        <input type="submit" class="btn btn-outline-primary" name="button8" value="Decline">
                      </form>
                    </td>
                </tr>
          
          <?php
                  
                  if(isset($_POST['button7'])) {
                    $query = "UPDATE leave_request SET status='1' WHERE employee_id='".$r['employee_id']."'";
                    mysqli_query($con, $query);
                    header('location:show_leaves.php');
                  }
                  if(isset($_POST['button8'])) {
                    $query = "UPDATE `leave_request` SET `status`='-1' WHERE employee_id='".$r['employee_id']."'";
                    mysqli_query($con, $query);
                    header('location:show_leaves.php');
                  }

                        }
                      
          ?>
          <?php
                      
                        while($r=mysqli_fetch_assoc($result)){
                          if($r['status']==0){
                            break;
                          }
                        }
                        if($r['status']==0){
                          

          ?>
                  <tr>
                    <td><?php echo $r['name'] ?></td>
                    <td><?php echo $r['employee_id'] ?></td>
                    
                    <td><?php echo $r['start_date'] ?></td>
                    <td><?php echo $r['end_date'] ?></td>
                    <td><?php echo $r['message'] ?></td>
                    <td>
                      <form method="post">
                        <input type="submit" class="btn btn-outline-primary"  name="button9" value="Accept">
                        <input type="submit" class="btn btn-outline-primary" name="button10" value="Decline">
                      </form>
                    </td>
                  </tr>
          
          <?php
                  
                  if(isset($_POST['button9'])) {
                    $query = "UPDATE leave_request SET status='1' WHERE employee_id='".$r['employee_id']."'";
                    mysqli_query($con, $query);
                    header('location:show_leaves.php');
                  }
                  if(isset($_POST['button10'])) {
                    $query = "UPDATE `leave_request` SET `status`='-1' WHERE employee_id='".$r['employee_id']."'";
                    mysqli_query($con, $query);
                    header('location:show_leaves.php');
                  }

                        }
                     
          ?>

        </table>


      </div>

    

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>