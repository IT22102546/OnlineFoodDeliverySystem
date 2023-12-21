 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link rel="stylesheet" type="text/css" href="adm.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php
	include"connect.php";
?>  
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
            <h3 id="topp">Admin Control Pannel</h3>
            <div class="tpcon">
            	<h2 align="center">Edit Foods</h2>
            	<div class="fooded">
                	<h5 align="center">Koththu</h5>
                    <div class="foodR">
                    	<img src="food_page_4tos/admin koththu.jpg" class="ad4to">
                    </div>
                    <div class="foodL">
                    	<input type="button" name="Add" id="Add" value="Add"  onclick="window.location.href='koththuupdate.php'" class="btn" >
                        <input type="button" name="Edit" id="Edit" value="Edit" onclick="window.location.href='koththu.php'" class="btn"  >
                    </div>
                </div>
     
                <div class="fooded">
                	<h5 align="center">Fried Rice</h5>
                     <div class="foodR">
                    	<img src="food_page_4tos/spoonful-of-fried-rice-thumbnail.jpg" class="ad4to">
                    </div>
                    <div class="foodL">
                    	<input type="button" name="Add2" id="Add2" value="Add" onclick="window.location.href='friedriceupdate.php'" class="btn"/>
                        <input type="button" name="Edit" id="Edit2" value="Edit" onclick="window.location.href='rice.php'"  class="btn"/>
                    </div>
                </div>
                <div class="fooded">
                	<h5 align="center">Bread</h5>
                     <div class="foodR">
                    	<img src="food_page_4tos/Mixed-Breads-in-Basket-and-Wooden-Cutting-Board.jpg" class="ad4to">
                    </div>
                    <div class="foodL">
                    	<input type="button" name="Add2" id="Add2" value="Add" onclick="window.location.href='breadupdate.php'"  class="btn" />
                        <input type="button" name="Edit2" id="Edit2" value="Edit" onclick="window.location.href='bread.php'"  class="btn"/>
                    </div>
                </div>
                 <div class="fooded">
                	<h5 align="center">Short Eats</h5>
                     <div class="foodR">
                    	<img src="food_page_4tos/Short_Eats_in_Sri_Lanka.jpg" class="ad4to">
                    </div>
                    <div class="foodL">
                    	<input type="button" name="Add2" id="Add2" value="Add" onclick="window.location.href='shorteatupdate.php'"  class="btn" />
                        <input type="button" name="Edit2" id="Edit2" value="Edit" onclick="window.location.href='shorteats.php'"  class="btn"/>
                    </div>
                </div>
                 <div class="fooded">
                	<h5 align="center">Dessert</h5>
                     <div class="foodR">
                    	<img src="food_page_4tos/360_F_96198695_oyJg0I7ELpXI6608FI942PX9LlRRyEnd.jpg" class="ad4to">
                    </div>
                    <div class="foodL">
                    	<input type="button" name="Add2" id="Add2" value="Add" onclick="window.location.href='dessertupdate.php'" class="btn" />
                        <input type="button" name="Edit2" id="Edit2" value="Edit" onclick="window.location.href='desert.php'"  class="btn"/>
                    </div>
                   
                </div>
                
            </div>
             <div id="right">
            	<h2 align="center">Edit Hotel</h2>
                 <div class="foodR">
                    	<img src="user home photo/photo-1554118811-1e0d58224f24.jpeg" class="ad4to">
                    </div>
                    <div class="foodL">
                    	<input type="button" name="Add2" id="Add2" value="Add" onclick="window.location.href='adminhotel.php'" class="btn" />
                        <input type="button" name="Edit2" id="Edit2" value="Edit" onclick="window.location.href='updatehotel.php'"  class="btn"/>
                    </div>
            </div>  
            
            
             
  </div> <!--cont div left end--> 
            	   	
            
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
        
                
        </div><!--main div end-->
        </body>
        </html>
          
       
