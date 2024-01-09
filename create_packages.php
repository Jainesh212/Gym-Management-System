<?php

require "connect.php";  
	if(!isset($_SESSION['aid'])){
       /* header('location:../index.php');
       exit();*/
    }


if (isset($_REQUEST['save']))
{
	$p_name=$_REQUEST['p_name'];
	$p_price=$_REQUEST['p_price'];
	$p_details=$_REQUEST['p_details'];
	



$insert_sql="insert into packagetbl (pname, pprice, pdetails)
 values ('$p_name', '$p_price', '$p_details')";
$result_update=mysqli_query($conn,$insert_sql);
if($result_update)
{
	?>
	<script type="text/javascript">alert('Package Created Successfully'); window.location.href="adminhome.php";
</script>
<?php
}


else
{
	?>
	<script type="text/javascript">alert('Failed to update !!'); window.location.href="adminhome.php";
</script>
<?php
}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Gym Admin Panel - Create Packages</title>

		<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<link rel="stylesheet" href="assets/css/custome.css">
		
	</head>

	<body>

<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.html" class="logo" style="color: white;font-size: 16px;font-family:Calibri (Body);     text-shadow: 1px 1px 1px; ">
					Gym Management System
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto more" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<!-- <i class="fa fa-bars"></i> -->
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="assets/img/avatar.jpg" alt="image" class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="assets/img/avatar.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Admin</h4>
												<p class="text-muted">admin@gmail.com</p><a href="" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										
										<a class="dropdown-item" href="../logout.php">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="aassets/img/avatar.jpg" alt="Divyang" class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									
									<li>
										
											<a href="../logout.php">
											<span class="link-collapse">Logout</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a  href="adminhome.php" >
								<i class="fa fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
							<a  href="manage_users.php">
								<i class="fa fa-users"></i>
								<p>Members</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="manage_trainers.php">
								<i class="fa fa-graduation-cap"></i>
								<p>Trainers</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="manage_packages.php">
								<i class="fa fa-gift"></i>
								<p>Packages</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="manage_payment.php">
								<i class="fa fa-inr"></i>
								<p>Payment</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="../logout.php">
								<i class="fa fa-lock"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="adminhome.php">
									<i class="fa fa-home"></i> Dashboard
								</a>
							</li>
							<li class="separator">
								>
							</li>
							<li class="nav-home">
								<a href="manage_packages.php">
									<i class="fa fa-gift"></i> Manage Packages
								</a>
							</li>
							<li class="separator">
								>
							</li>
							<li class="nav-item">
								<a href="create_packages.php"><i class="fa fa-gift"></i> Create Packages</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title"><i class="fa fa-gift"></i> Create Packages</div>
								</div>
								<form method="POST">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-3">
											
										</div>
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="pname">Package Name</label>
												<input type="text" class="form-control" id="p_name" placeholder="Enter Name"  name="p_name">

												</div>
											<div class="form-group">
												<label for="Price">Price</label>
												<input type="text" class="form-control" id="price" placeholder="Enter Price" name="p_price">
											</div>
											<div class="form-group">
												<label for="Price">Package Details</label>
												<textarea rows =10 cols = 10 class="form-control" name="p_details" > </textarea>
</div>
											
											
											
										</div>
										<div class="col-md-6 col-lg-3">
											
										</div>
									</div>
								</div>
								<div class="card-action">
									<div class="row">
									<div class="col-md-6 col-lg-3">
											
									</div>
									<div class="col-md-6 col-lg-3">
										<button type="submit" class="btn btn-success" name="save">Submit</button>
										<a href="create_packages.php"  class="btn btn-danger">Cancel</a>
									</div>
									<div class="col-md-6 col-lg-3">
											
									</div>
									</div>
								</div>
								</form>
							</div>							
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2020-2021 Admin Panel , made with <i class="fa fa-heart heart text-danger"></i> by <a href="">Gym Team</a>
					</div>		
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>

	
</body>
</html>
