<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Renew dessert Document</title>
</head>

<body>
	<?php
	include'connect.php';
	$Bid=isset($_POST['kid'])? $_POST['kid']:"";
	$Bname=isset($_POST['kname'])? $_POST['kname']:"";
	$Bprice=isset($_POST['Lprice'])? $_POST['Lprice']:"";
	

	$sql="UPDATE bread SET B_name='$Bname' , B_price='$Bprice'  WHERE B_ID='$Bid' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:bread.php");
	}
	
	
?>
</body>
</html>