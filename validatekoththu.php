
<?php
	include'connect.php';
	
	if(isset($_POST['sub']))
	{
		$kname= isset($_POST['kname']) ? $_POST['kname']:"";
		$klprices= isset($_POST['Lprice']) ? $_POST['Lprice']:"";
		$ksprices= isset($_POST['Sprice']) ? $_POST['Sprice']:"";
		
		$sql="INSERT INTO koththu (K_name,K_Lprice,K_Sprice) VALUES ('$kname','$klprices','$ksprices')";
		
		$result= mysqli_query($conn,$sql);
		
		if($result)
		{
			header("location:koththu.php");
		}
		else
		{
			header("location:koththuupdate.php");
		}
	}
?>