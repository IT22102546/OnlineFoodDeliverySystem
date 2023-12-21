<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include'connect.php';
	
	if(isset($_POST['sub']))
	{
		$uname=isset($_POST['usname'])? $_POST['usname']:"";
		$mob=isset($_POST['cont']) ? $_POST['cont']:"";
		$mail=isset($_POST['email']) ? $_POST['email']:"";
		$inq=isset($_POST['sug']) ? $_POST['sug']:"";
		
		
		$sql="INSERT INTO contactus (Uname,contact,email,inquery) VALUES ('$uname','$mob','$mail','$inq')";
		
		
		
		$result=mysqli_query($conn,$sql);
	
		if($result)
			header("location:customerhome.php");
		else{
			mysqli_connect_error($result);
		}
	}
	 
?>
</body>
</html>