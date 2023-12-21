<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include'connect.php';
	$rid=isset($_POST['Rid'])? $_POST['Rid']:"";
	$rname=isset($_POST['rname'])? $_POST['rname']:"";
	$Lprice=isset($_POST['Lprice'])? $_POST['Lprice']:"";
	$Sprice=isset($_POST['Sprice']) ? $_POST['Sprice']:"";
	

	$sql="UPDATE fried_rice SET R_name='$rname' , Lprice='$Lprice',  Sprice='$Sprice' WHERE R_id='$rid' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:rice.php");
	}
	else
	{
		echo"wrong";
	}
	
	
?>
</body>
</html>