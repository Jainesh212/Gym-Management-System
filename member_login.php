<?php
 require "connect.php";
  if (isset($_REQUEST['save']))
  {
  
  
    $uname=$_REQUEST['username'];
    $pass1=$_REQUEST['pass'];

   /* if(!isset($_SESSION['adminid'])) 
    { 
          session_start(); 
    }*/ 

    $sql="SELECT * FROM membertbl WHERE email ='".$uname."' and pswd ='".$pass1."'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($res); 
 while($row2 = mysqli_fetch_array($res,MYSQLI_BOTH)) {
    if ($row==1) 
    {
    //session variable created and stored in the value.
    $uid = $row2["mid"];
    $username = $row2["mname"];
      $_SESSION['membername']=$username;
      $_SESSION['mid']  = $uid;
            
    ?>
  <script type="text/javascript">alert('Login successfull'); window.location.href="member/member_home.php";</script>
    <?php        
        }

    else
    { 
  ?>
    <script type="text/javascript"> alert('Login Error Try again!!'); window.location.href="member_login.php";</script>

  <?php 
  }
  ?>

  <script type="text/javascript"> alert('Member not found Try again!!'); window.location.href="index.html";</script>
  <?php

  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gym Management System - Member Login</title>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	<div class="container-login100" style="background-image: url('images/bkg1.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="POST">
				<span class="login100-form-title1 p-b-37">
					Gym Management System
				</span>
				<span class="login100-form-title p-b-37">
					Member Sign In
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username ">
					<input class="input100" type="text" name="username" placeholder="username ">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>
				<div class="container-login100-form-btn">
					<button type="submit" name="save" class="login100-form-btn">
						Sign In
					</button>
					<br/>
					<a href="member_signup.php">New Member ? Register Here</a>
					
				</div>
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
