<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Renew koththu</title>
</head>

<body>
<?php
	include'connect.php';
	
	$hid=isset($_POST['hid'])? $_POST['hid']:"";
	$hname=isset($_POST['hname'])? $_POST['hname']:"";
	$htel=isset($_POST['hmob']) ? $_POST['hmob']:"";

	$sql="UPDATE hotel SET Hotel_name='$hname' ,Tele='$htel' WHERE Hotel_ID='$hid' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:updatehotel.php");
	}
	
	
?>
</body>
</html>