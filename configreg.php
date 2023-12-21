
<?php

include'connect.php';

if(isset($_POST['sign']))
	{
	$fnam= isset($_POST['fname']) ? $_POST['fname']:"";
	$lnam= isset($_POST['lname']) ? $_POST['lname']:"";
	$unam= isset($_POST['Uname'])? $_POST['Uname']:"";
	$number= isset($_POST['Mnumber']) ? $_POST['Mnumber']:"0";
	$mail= isset($_POST['myEmail'])? $_POST['myEmail']:"";
	$passw= isset($_POST['pwrd']) ? $_POST['pwrd']:"";
	
	$sql= "INSERT INTO customer(F_name,L_name,U_name,mnumber,email,password) VALUES ('$fnam','$lnam','$unam'
	,'$number','$mail','$passw')";
	
	$result=mysqli_query($conn,$sql);
	
	
	header("location:signin.php");
}
	
?>
