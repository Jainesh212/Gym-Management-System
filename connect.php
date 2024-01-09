<?php

	$conn = mysqli_connect('localhost','root','','gymdb');	  

	if(!isset($_SESSION['adlogin'])) 
	{ 
        	session_start(); 
    } 

?>