<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Renew koththu</title>
</head>

<body>
<?php
	include'connect.php';
	$kid=isset($_POST['kid'])? $_POST['kid']:"";
	$kname=isset($_POST['kname'])? $_POST['kname']:"";
	$Lprice=isset($_POST['Lprice'])? $_POST['Lprice']:"";
	$Sprice=isset($_POST['Sprice']) ? $_POST['Sprice']:"";

	$sql="UPDATE koththu SET K_name='$kname' , K_Lprice='$Lprice',  K_Sprice='$Sprice' WHERE K_id='$kid' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:koththu.php");
	}
	
	
?>
</body>
</html>