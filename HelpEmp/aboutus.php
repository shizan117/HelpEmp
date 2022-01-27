                <?php
				
                
				//$no_of_rows= mysqli_num_rows($result);
				//if($no_of_rows){
					//while($section= mysqli_fetch_assoc($result)){
						?>
				
				
				



<!DOCTYPE html>
<html lang="en">

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style1.css">
    <title>Team Mate</title>
    <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>

<body>

	<ul class="topnav">
    <h2 style="padding-right: 52%; color: lavender;">HelpEmp</h2>
    <li><a href="index.html">Home</a></li>
    
    <li><a href="aboutus.php">Team Mate</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="Login.html">Login</a></li>
	</ul>
   
</div>
   
    <div class="container" style="padding-left: 2%; ">
 <div class="row">
               
                <?php
				    $con = mysqli_connect('localhost', 'root', '','employee_management_system');
				    $query = "SELECT * FROM about_us_image where name='shizan'";
				    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($result);
                    $photo=$row['photo_name'];
				?> 
                
            <div class="column" >
                <img class="shizan" src="pictures/aboutus/<?php echo $photo; ?>" alt="" style="width: 80%; ">
                <h5>Name: Md. Mominul Islam Shizan</h5>
                <h5> ID: 18.02.04.117</h5>
                <h5> AUST, CSE</h5>
            </div>


            <div class="column" >
                 <p style= "margin-top: 40%; "> We are two studens from AUST named Shizan & Bondhon are managing this website. We created this website to help people. We always
                    try to make sure the information on our website is up to date on regular basis.</p> 
                  
            </div>
                <?php
				    $con = mysqli_connect('localhost', 'root', '','employee_management_system');
				    $query = "SELECT * FROM about_us_image where name='bondhon'";
				    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($result);
                    $photo=$row['photo_name'];
				?>
            <div class="column"  >
                <img class="bondhon" src="pictures/aboutus/<?php echo $photo; ?>" alt="" style="width:100%;">
                <h5> Name: Afridi Rahman Bondhon</h5>
                <h5> ID: 18.02.04.128</h5>
                <h5> AUST, CSE</h5>
            </div>
</div>
   

</div> 









    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>