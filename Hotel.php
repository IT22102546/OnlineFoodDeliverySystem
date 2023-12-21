<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="hotel.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" language="javascript" src="home.js"></script>



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
            
			<!--start of carsoul-->
       <div class="slideshow-container2">

            <div class="mySlides2 fade2">
              
              <img class="im" src="Restaurant_page_4tos/10 restaurants in Mumbai that offer the best sunset views.webp" >
             
            </div>
            
            <div class="mySlides2 fade2">
              
              <img class="im" src="Restaurant_page_4tos/2028241782.jpg" >
              
            </div>
            
            <div class="mySlides2 fade2">
              
              <img class="im" src="Restaurant_page_4tos/Ditas Interior Image - 1 (8).webp" >
             
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
				  <li><a href="food.php">Foods</a></li>
				  <li><a href="#">Hotels</a></li>
				  <li><a href="#about">Services</a></li>
				  <li><a href="#about">Tutorials</a></li>
				  <li><a href="#about">Contact Us</a></li>
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
  	<h3 id="topi">Hotel Catagories<h3>
    <div class="des"> <!--1st-->
    	<div class="sub">
        	<img src="user home photo/decorated-with-sri-lankan.jpg" class="hot">
        </div>
        <div class="sub2">
        		<h3 class="fdtp">Restaurants</h3>
                        <p class="dis">We have gathered all restaurent in to a one section for you, visit and order your favourite food from your favourite restaurant and enjoy your meal.</p>
                        <input type="button" onclick="" class="fdbtn" name="Visitb" value="Click here to Visit">
        </div>
    </div> <!--end1st-->
    
    <div class="des"> <!--2st-->
    	<div class="sub">
        	<img src="user home photo/infinity-pool.jpg" class="hot">
        </div>
        <div class="sub2">
        	<h3 class="fdtp">Hotels</h3>
                        <p class="dis">We have gathered all Hotels in to a one section for you, book your favourite hotel or order food food from your favourite hotel. Visit and enjoy your holidays with tasty foods.Book your favourite hotel from meal Runner and get valueble discounts.</p>
                        <input type="button" onclick="" class="fdbtn" name="Visitb" value="Click here to Visit">
        </div>
    </div> <!--end2st-->
    <div class="des"> <!--2st-->
    	<div class="sub">
        	
            <img src="user home photo/photo-1554118811-1e0d58224f24.jpeg" class="hot">
        </div>
        <div class="sub2">
        		<h3 class="fdtp">Cafe</h3>
                        <p class="dis">We have gathered all restaurent in to a one section for you, visit and order your favourite food from your favourite restaurant and enjoy your meal and get your favourite dishes to your door step from Meal Runner Delivery Service.</p>
                        <input type="button" onclick="" class="fdbtn" name="Visitb" value="Click here to Visit">
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
