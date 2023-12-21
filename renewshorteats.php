<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Renewshorteats Document</title>
</head>

<body>
	<?php
	include'connect.php';
	$seid=isset($_POST['kid'])? $_POST['kid']:"";
	$sename=isset($_POST['kname'])? $_POST['kname']:"";
	$seprice=isset($_POST['Lprice'])? $_POST['Lprice']:"";
	

	$sql="UPDATE shorteats SET se_name='$sename' , se_price='$seprice'  WHERE seID='$seid' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:shorteats.php");
	}
	
	
?>
</body>
</html>