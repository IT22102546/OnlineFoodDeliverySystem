
<?php
	include'connect.php';
	
	if(isset($_POST['sub']))
	{
		$bname= isset($_POST['bname']) ? $_POST['bname']:"";
		$bprices= isset($_POST['bprice']) ? $_POST['bprice']:"";
		
		
		$sql="INSERT INTO bread (B_name,B_price) VALUES ('$bname','$bprices')";
		
		$result= mysqli_query($conn,$sql);
		
		if($result)
		{
			header("location:bread.php");
		}
		else
		{
			header("location:updatebread.php");
		}
	}
?>