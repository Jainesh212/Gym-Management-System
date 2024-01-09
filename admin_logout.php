<?php
	//session is start
	require "connect.php";
	// on all screens requiring login, redirect if NOT logged in
    if(!isset($_SESSION['aid'])){
        header('location:../index.html');
       exit();
    }

	//session blank
	$_SESSION['aid']="";
	$_SESSION['adminname'] ="";
	unset($_SESSION['aid']);
	unset($_SESSION['adminname']);
	//session destroy
	//session_destroy();

	//re-locate your page.
	header("Location:../index.html");

?>

<html>
<body><center>
	<br><br>
	<label><h2>YOU HAVE LOGGED OUT SUCCESSFULLY...</h2></label>
</center>
</body>
</html>