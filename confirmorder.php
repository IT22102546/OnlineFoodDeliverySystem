<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	include'connect.php';
	
	if(isset($_POST['submit']))
	{
		$uname=isset($_POST['uname'])? $_POST['uname']:"";
		$Fname=isset($_POST['Fname'])? $_POST['Fname']:"";
		$Fprice=isset($_POST['fprice'])? $_POST['fprice']:"";
		$qty=isset($_POST['qty'])? $_POST['qty']:"";
		$num=isset($_POST['num'])? $_POST['num']:"";
		$Total= $Fprice*$qty;
		
		if($qty>0){
		
		$sql="INSERT INTO orders(Fname,Fprice,qty,Uname,Cnumber,Totprice) VALUES ('$Fname','$Fprice','$qty','$uname','$num','$Total')";
		
		$result=mysqli_query($conn,$sql);
		
		if($result)
		{
			header("location:userprofile.php");
		}
		
		}
		
		else{
			echo '<script type="text/JavaScript"> 
    		 		alert("Invalid Order!");
     				</script>';
					
				header("location:food.php");	
		}
		
	}
?>
</body>
</html>