
<?php
	include'connect.php';
	
	if(isset($_POST['sub']))
	{
		$Rname= isset($_POST['rname']) ? $_POST['rname']:"";
		$Rlprices= isset($_POST['Lprice']) ? $_POST['Lprice']:"";
		$Rsprices= isset($_POST['Sprice']) ? $_POST['Sprice']:"";
		
		$sql="INSERT INTO fried_rice (R_name,Lprice,Sprice) VALUES ('$Rname','$Rlprices','$Rsprices')";
		
		$result= mysqli_query($conn,$sql);
		
		if($result)
		{
			header("location:rice.php");
		}
		else
		{
			header("location:friedriceupdate.php");
		}
	}
?>