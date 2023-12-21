<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="userprofile.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user_profile</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" language="javascript" src="home.js"></script>



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
            
			
            <div id="contl">   <!--cont div left start-->  
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
  
  <div id="usdt">
  
		<img src="Backgrounds/images.png" id="user4to"/>
<?php
session_start();
	include"connect.php";
	if(isset($_SESSION['Usname']))
{
	$user=isset($_SESSION['Usname']) ? $_SESSION['Usname']:"";
	$fname="";
	$lname="";
	$mnumber="";
	$email="";
	$cid="";
	
	
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
		}
		
		 
		
	}
}
else
{
	header("Location:signin.php");
}
?>
<div>
<form method="post" action="editprofile.php" >
	
    	<table align="center">
        
        <tr>
        <td><label class="lbl">User ID</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text" value="<?php echo $cid?>" readonly="readonly" class="box"></td>
            </tr>
			<td><label class="lbl">User Name</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text" value="<?php echo $user?>" readonly="readonly" class="box"></td>
            </tr>
			<tr>
			<td><label class="lbl">First Name</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text" value="<?php echo $fname?>" readonly="readonly" class="box"></td>
            </tr>
            
            <tr>
			<td><label class="lbl">Last Name</label></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td>
			<td><input type="text" value="<?php echo $lname?>" readonly="readonly" class="box"></td>
            </tr>
           
             <tr>
           <td> <label class="lbl">Email</label> </td>
           <td></td>
           <td></td>
           <td>:</td>
           <td></td>
			<td><input type="text" value="<?php echo $email?>" readonly="readonly" class="box"></td>
             </tr>
           
           <tr>
           <td> <label class="lbl">Mobile Number</label> </td>
           <td></td>
           <td></td>
           <td>:</td>
           <td></td>
			<td><input type="text" value="<?php echo $mnumber?>" readonly="readonly" class="box"></td>
            </tr>
              <tr>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td><input type="submit" name="submit" value="Edit Profile" class="fdbtn"></td>&nbsp;
           <td><input type="button" name="logout" onclick=" location.href='logout.php'" value="Log out" class="fdbtn"></td>
            </tr>
		</table>
		
</form>
</div>
  	
  </div>
                 
            </div> <!--cont div left end--> 
       <div id="usdtr">
       
       		<p id="tp">My Orders</p>
       		<?php
			include'connect.php';
				
				$user1=isset($_SESSION['Usname']) ? $_SESSION['Usname']:"";
				
				$sql1="SELECT * FROM orders WHERE Uname='$user1'";
				$result1=mysqli_query($conn,$sql1);
				
				if(mysqli_num_rows($result1)>0)
				{
					echo'<table align="" cellspacing="30" cellpadding="10" border="4" class="tble1" align="center"> 
					<tr>
						<td>Order Id</td>
						
						
						<td>Food Name</td>
					
						<td>Food Price</td>
						<td>Food Quantity</td>
						
						
						<td>Order Price</td>
					</tr>';
					while($row1=mysqli_fetch_assoc($result1))
					{
						echo'<tr><td>'.$row1['Oid'].'</td><td>'.$row1['Fname'].'</td><td>'
						.$row1['Fprice'].'</td><td>'.
						$row1['qty'].'</td><td>'.$row1['Totprice'].
						'</td>';
					}
					
					echo'</table>';
				}
				
				
				
				
				
            ?>
           
        
       </div>     	
                	
       
        </div><!--main div end-->
        
        
        </body>
             
		<div id="ftr">
        	<div id="lftftr">
            	<p class="tp">Meal Runner Food Deilivery and Takeout</p>
               <p align="left" class="sb"> 
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-pinterest"></a>
                <a href="#" class="fa fa-google"></a>
                </p>
                
            </div>
            <div id="rtftr">
				<table id="tbl">
                	<tr>
                    	<td>Email:</td>
                        <td>mealrunner@gmail.com</td>
                    </tr>
                    <tr>
                    	<td>Contact Number:</td>
                        <td>0769899882</td>
                    </tr>
                     <tr>
                    	<td>Fax:</td>
                        <td>037-3974569</td>
                    </tr>
                    <tr>
                    	<td>Whatsapp:</td>
                        <td>0769899882</td>
                    </tr>
                    <tr>
                    	<td>Adress:</td>
                        <td>Kurunegala</td>
                    </tr>
                    
                </table>
                
            </div>
        </div> 
        
                
        </html>
          
       
