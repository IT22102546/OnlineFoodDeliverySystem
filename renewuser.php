<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Renew User</title>
</head>

<body>
<?php
	include'connect.php';
	if(isset($_POST['renew']))
	{
	$cid=isset($_POST['cid']) ? $_POST['cid']:"" ;
	$uname=isset($_POST['uname']) ? $_POST['uname']:"";
	$fname=isset($_POST['fn']) ? $_POST['fn']:"";
	$lname=isset($_POST['ln']) ? $_POST['ln']:"";
	$email=isset($_POST['mail']) ? $_POST['mail']:"";
	$mobile=isset($_POST['mn']) ? $_POST['mn']:"" ;
	$pass= isset($_POST['cp'])? $_POST['cp']:"";
	
	

	$sql="UPDATE customer SET F_name='$fname' , L_name='$lname' ,  U_name='$uname',email='$email', mnumber='$mobile', password='$pass' WHERE CID='$cid' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:customerhome.php");
	}
}
	
?>
</body>
</html>