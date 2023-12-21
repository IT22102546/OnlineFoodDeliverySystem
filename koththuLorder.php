
<?php
	session_start();
	include'connect.php';
	
	$id=isset($_GET['Id'])? $_GET['Id']:"";
	$kname="";
	$kprice="";
	
	$sql="SELECT * FROM koththu WHERE K_id='$id'";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$kid=$row['K_id'];
			$kname=$row['K_name'];
			$kprice=$row['K_Lprice'];
			
		}
	}
	
	$uname=isset($_SESSION['Usname']) ? $_SESSION['Usname']:"";
	$lname="";
	$fname="";
	$num="";
	
	
	$sql="SELECT * FROM customer WHERE U_name='$uname'";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$fname=$row['F_name'];
			$lname=$row['L_name'];
			$num=$row['mnumber'];
			
		}
	}
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Order.css">
<title>Untitled Document</title>
</head>

<body>
<div class="tbleor" id="back">
<form method="post" action="confirmorder.php" class="reg">
<h3 class="topic">Meal Runnner Cash on Delivery</h3>
	
    	<table align="center" class="order">
        
        <tr>
        <td><label class="lbl">User name</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text" name="uname" value="<?php echo $uname?>" readonly="readonly" class="box"></td>
            </tr>
			<td><label class="lbl">Food Name</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text" name= "Fname" value="<?php echo $kname?>" readonly="readonly" class="box"></td>
            </tr>
            <tr>
           <td> <label class="lbl">Mobile Number</label> </td>
           <td></td>
           <td></td>
           <td>:</td>
           <td></td>
			<td><input type="text" name="num" value="<?php echo $num?>" readonly="readonly" class="box"></td>
            </tr>
			<tr>
			<td><label class="lbl">Food Price</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text" name="fprice" value="<?php echo $kprice?>" readonly="readonly" class="box"></td>
            </tr>
            
            <tr>
			<td><label class="lbl">Quanty</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text"  name="qty" class="box" required="required"></td>
            </tr>
            
              <tr>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td><input type="submit" name="submit" value="Confirm Payment" class="fdbtn"></td>&nbsp;
            </tr>
		</table>
		
</form>
</div>
</body>
</html>