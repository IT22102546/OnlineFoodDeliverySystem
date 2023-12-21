<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
	include'connect.php';
	
	if(isset($_POST['submit']))
	{
		$hname=$_POST['hname'];

		$htel=$_POST['contact'];
		
		$sql="INSERT INTO hotel (Hotel_name,Tele) VALUES ('$hname','$htel')";
		
		$result=mysqli_query($conn,$sql);
		
		if($result)
		{
			header("location:updatehotel.php");
		}
	}
	?>
</body>
</html>