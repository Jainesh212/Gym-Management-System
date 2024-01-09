<?php
	//session is start
	require "connect.php";
	// on all screens requiring login, redirect if NOT logged in
    if(!isset($_SESSION['aid'])){
        header('location:index.php');
       exit();
    }

	//session blank
	$_SESSION['aid']="";
	$_SESSION['adloginname'] ="";
	unset($_SESSION['aid']);
	unset($_SESSION['adloginname']);
	//session destroy
	//session_destroy();

	//re-locate your page.
	header("Location:index.php");

?>

<html>
<body><center>
	<br><br>
	<label><h2>YOU HAVE LOGGED OUT SUCCESSFULLY...</h2></label>
</center>
</body>
</html>