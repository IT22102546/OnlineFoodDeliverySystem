
<?php
	include'connect.php';
	
	if(isset($_POST['sub']))
	{
		$sname= isset($_POST['sname']) ? $_POST['sname']:"";
		$sprices= isset($_POST['sprice']) ? $_POST['sprice']:"";
		
		
		$sql="INSERT INTO shorteats (se_name,se_price) VALUES ('$sname','$sprices')";
		
		$result= mysqli_query($conn,$sql);
		
		if($result)
		{
			header("location:shorteats.php");
		}
		else
		{
			header("location:shorteatupdate.php");
		}
	}
?>