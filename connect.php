<?php

	$conn = mysqli_connect('localhost','root','','gymdb');	  

	if(!isset($_SESSION['aid'])) 
	{ 
        	session_start(); 
    } 

?>