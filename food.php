<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="Food.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Foods</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" language="javascript" src="home.js"></script>



</head>

<body>
<?php
session_start();
	echo isset($_SESSION['Usname'])? $_SESSION['Usname']:"guest";
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
            
			<!--start of carsoul-->
       <div class="slideshow-container2">

            <div class="mySlides2 fade2">
              
              <img class="im" src="food_page_4tos/360_F_519490841_BBz2X2mQ2dfI72P7wOjNQGu0TJ8bDutr.jpg" >
             
            </div>
            
            <div class="mySlides2 fade2">
              
              <img class="im" src="food_page_4tos/fast-food-concept-greasy-fried-restaurant-take-out-as-onion-rings-burger-hot-dogs-fried-chicken-french-fries-31114163.jpg" >
              
            </div>
            
            <div class="mySlides2 fade2">
              
              <img class="im" src="food_page_4tos/assorted-american-food-top-view-109748438.jpg" >
             
            </div>

	</div>
<br>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    <script>
			let slideIndex = 0;
			showSlides();
			
			function showSlides() {
			  let i;
			  let slides = document.getElementsByClassName("mySlides2");
			  let dots = document.getElementsByClassName("dot");
			  for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}    
			  for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			  setTimeout(showSlides, 5000); 
			}
        </script>

		

            <!--end of carsoul-->
            
    
			<ul id="nav">
				  <li><a class="" href="customerhome.php">Home</a></li>
				  <li><a href="#">Foods</a></li>
				  <li><a href="userprofile.php">User Profile</a></li>
            </ul>
            
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
  
  <div id="body-2">
  	<h3 id="topi">Food Catagories<h3>
    <div class="des"> <!--1st-->
    	<div class="sub">
        	<img src="user home photo/chicken-koththu-sawan.jpg" class="food">
        </div>
        <div class="sub2">
        	<h3 class="fdtp">Koththu World</h3>
                        <p class="dis">Koththu is considered as the Sri Lankan equivalent of the hamburger, in terms of its popularity. It's a common dinner dish. Koththu is made from Godhamba roti (a type of Sri Lankan roti) and vegetables, egg and/or meat, and spices; the bread is described as similar to parata.</p>
                        <input type="button" onclick="window.location.href='customerkoththu.php'" class="fdbtn" name="Visitb" value="Click here to Visit">
        </div>
    </div> <!--end1st-->
    
    <div class="des"> <!--2st-->
    	<div class="sub">
        	<img src="user home photo/images.jpeg" class="food">
        </div>
        <div class="sub2">
        	<h3 class="fdtp">Bread Corner</h3>
                        <p class="dis">Baked food product made of flour or meal that is moistened, kneaded, and sometimes fermented. A major food since prehistoric times, it has been made in various forms using a variety of ingredients and methods throughout the world.</p>
                        <input type="button" onclick="window.location.href='customerbread.php'" class="fdbtn" name="Visitb" value="Click here to Visit">
        </div>
    </div> <!--end2st-->
    <div class="des"> <!--2st-->
    	<div class="sub">
        	<img src="user home photo/132892.jpeg" class="food">
        </div>
        <div class="sub2">
        		<h3 class="fdtp">Short Eats</h3>
                        <p class="dis">A short eat is usually stuffed and fried, and it comes in many shapes and sizes. There are rolls filled with vegetables, meat, and egg; patties that resemble empanadas stuffed with potatoes and fish; and curry rotis, in which vegetables or meat are packed tightly between flatbread and browned in a pan</p>
                        <input type="button" onclick="window.location.href='customershorteats.php'" class="fdbtn" name="Visitb" value="Click here to Visit">
        </div>
    </div> <!--end2st-->
    <div class="des"> <!--2st-->
    	<div class="sub">
        	<img src="user home photo/Fried-Rice-Blog-Thumbnail.jpg" class="food">

        </div>
        <div class="sub2">
        	<h3 class="fdtp">Rice Section</h3>
                        <p class="dis">All the fried vegetables, cashew nuts, ground nuts, raisins, cardamom and cloves are mixed up with the rice. Then some salt and sugar are added too to the rice. Then the pot is put over the oven for some time at medium temperature. Finally, fried rice is ready and served to the guests. You can order different varities of rice visit the page Rice Section for more details</p>
                        <input type="button" onclick="window.location.href='customerrice.php'" class="fdbtn" name="Visitb" value="Click here to Visit">
        </div>
    </div> <!--end2st-->
    <div class="des"> <!--2st-->
    	<div class="sub">
        	<img src="user home photo/desserts-table-filled-33606446.jpg" class="food">
        </div>
        <div class="sub2">
        <h3 class="fdtp">Dessert Corner</h3>
                        <p class="dis">Desserts can be defined as a usually sweeter course that concludes a meal. This definition includes a range of courses ranging from fruits or dried nuts to multi-ingredient cakes and pies. Many cultures have different variations of dessert.</p>
                        <input type="button" onclick="window.location.href='customerdessert.php'" class="fdbtn" name="Visitb" value="Click here to Visit">
        </div>
    </div> <!--end2st-->
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
