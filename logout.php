<?php
	session_start();
	include'connect.php';
	
	session_unset();
	header("Location:home.php");
?>