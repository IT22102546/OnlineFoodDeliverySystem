	<?php
		session_start();
		include'connect.php';
		if(isset($_POST['submit']))
		{
			$user=isset($_SESSION['Usname']) ? $_SESSION['Usname']:"";
			$fname="";
			$lname="";
			$mnumber="";
			$email="";
			$cid="";
			$pass="";
			
		$sql="SELECT * FROM customer WHERE U_name='$user'";
		$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)==1)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$fname=$row['F_name'];
			$lname=$row['L_name'];
			$mnumber=$row['mnumber'];
			$email=$row['email'];
			$cid=$row['CID'];
			$pass=$row['password'];
		}
		
		 
		
	}
		}
    ?>
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="userprofile.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit User Details</title>
</head>

<body>

<div id="mai">                 <!--main div start-->
            
			<div id="logo"><!--logo div start-->
              <img src="Backgrounds/478d7088-b22f-49a9-96ae-3f4aa470643a.jpeg" class="lg">
            </div> <!--logo div end-->  
			<div id="mainh">
            
            	   <div class="mainhsub">
                   
					<p ><h2 id="topic">Meal Runner Food Delivery and Takeout</h2><br><h3 id="subtop">Deliciousness Delivered with a 					Smile</h3></p>
				
				  </div>
			</div><!--End of main topic part-->
            
			
            <div id="contl1">   <!--cont div left start-->  
            	 <div id="bodytop">
     <div id="bodytopL">
     </div>
     
    <div id="bodytopR">
    <form action="">
    <table>
    <tr>
    <td>
      <input type="text" placeholder="Search.." name="search" class="srch">
      </td>
      
      <td>
      <button type="submit"><img src="Backgrounds/3031293.png" class="sim"></button>
      </td>
    </tr>
     </table>
    </form>
    </div>
  </div> <!--end of the top-->
  

<div id="back" align="center">
    <form  action="renewuser.php" method="post" class="reg" >
    <h3 id="top">Edit Profile</h3>
	
    	<table align="center">
        
        <tr>
        <td><label class="lbl">User ID</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text" name="cid" value="<?php echo $cid?>" readonly="readonly" class="box"></td>
            </tr>
			<td><label class="lbl">User Name</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text" name="uname" value="<?php echo $user?>"  class="box"></td>
            </tr>
			<tr>
			<td><label class="lbl">First Name</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text" name="fn" value="<?php echo $fname?>"  class="box"></td>
            </tr>
            
            <tr>
			<td><label class="lbl">Last Name</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text" name="ln" value="<?php echo $lname?>"  class="box"></td>
            </tr>
           
             <tr>
           <td> <label class="lbl">Email</label> </td>
           <td></td>
           <td></td>
           <td>:</td>
           <td></td>
			<td><input type="text" name="mail" value="<?php echo $email?>"  class="box"></td>
             </tr>
           
           <tr>
           <td> <label class="lbl">Mobile Number</label> </td>
           <td></td>
           <td></td>
           <td>:</td>
           <td></td>
			<td><input type="text" name="mn" value="<?php echo $mnumber?>" class="box"></td>
            </tr>
            
             <tr>
           <td> <label class="lbl">Change password</label> </td>
           <td></td>
           <td></td>
           <td>:</td>
           <td></td>
			<td><input type="text" name="cp" value="<?php echo $pass?>" class="box"></td>
            </tr>
            <br>
          <tr>
             	<td></td>
           		<td></td>
                <td></td>
                <td></td>
                
            	<td>
                <input type="submit" name="renew" id="renew" class="fdbtn" value="Update">
                </td>
            </tr>
            
		</table>
		
</form>
</div>
</div>
</body>
</html>