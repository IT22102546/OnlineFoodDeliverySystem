<?php
	$conn= mysqli_connect("localhost:3308", "root", "", "meal_runner");
	
	if(!$conn)
	{
	
		die("connection error". mysqli_connect_error());
	}
	
?>