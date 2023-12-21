
<?php
	include'connect.php';
	
	if(isset($_POST['sub']))
	{
		$dname= isset($_POST['dname']) ? $_POST['dname']:"";
		$dprices= isset($_POST['dprice']) ? $_POST['dprice']:"";
		
		
		$sql="INSERT INTO dessert (Dname,Dprice) VALUES ('$dname','$dprices')";
		
		$result= mysqli_query($conn,$sql);
		
		if($result)
		{
			header("location:desert.php");
		}
		else
		{
			header("location:dessertupdate.php");
		}
	}
?>