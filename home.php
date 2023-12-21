<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link rel="stylesheet" type="text/css" href="cshome.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" language="javascript" src="home.js"></script>



</head>

<body>

<?php
	include'connect.php';
	session_start();
	echo isset($_SESSION['Usname'])? $_SESSION['Usname']:"guest";
		$uname=isset($_SESSION['Usname']) ? $_SESSION['Usname']:"";
						$email="";
						$cont="";
						
						
						
						$sql="SELECT * FROM customer WHERE U_name='$uname'";
						$result=mysqli_query($conn,$sql);
						
						if(mysqli_num_rows($result)==1)
						{
							while($row=mysqli_fetch_assoc($result))
							{
								$email=$row['email'];
								$cont=$row['mnumber'];
							}
						}
?>
  
	<div id="mai">                 <!--main div start-->
             <p align="right">
             	<input type="button" onclick="window.location.href='signup.php'" value="Sign Up" class="btn1">
                 <input type="button" onclick="window.location.href='signin.php'" value="Login" class="btn1"> 
             </p>  
            
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
              
              <img class="im" src="user home photo/a69dd445cc32cc3ad5184861561c1559.jpg" >
             
            </div>
            
            <div class="mySlides2 fade2">
              
              <img class="im" src="user home photo/chicken-wings-barbecue-sweetly-sour-sauce-picnic-summer-menu-tasty-food-top-view-flat-lay_2829-6470.avif" >
              
            </div>
            
            <div class="mySlides2 fade2">
              
              <img class="im" src="user home photo/unnamed.jpg" >
             
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
				  <li><a class="" href="#home">Home</a></li>
				  <li><a href="signin.php">Foods</a></li>
				  <li><a href="userprofile.php">User Profile</a></li>
				 
            </ul>
            
            <div id="contl">   <!--cont div left start-->  
            	<h3 class="conttop">We have customized Foods For you.</h3>
                <div class="cont1p1"> <!--con1--> 
                	<div class="cont1p1l">
                    	<img src="user home photo/chicken-koththu-sawan.jpg" class="food">
                    </div>
                    
                    <div class="cont1p1r">
                    	<h3 class="fdtp">Koththu World</h3>
                        <p class="dis">Koththu is considered as the Sri Lankan equivalent of the hamburger, in terms of its popularity. It's a common dinner dish. Koththu is made from Godhamba roti (a type of Sri Lankan roti) and vegetables, egg and/or meat, and spices; the bread is described as similar to parata.</p>
                        <input type="button" onclick="window.location.href='signin.php'" class="fdbtn" name="Visitb" value="Click here to Visit">
                    </div>
                </div>
                  <div class="cont1p1"> <!--con2--> 
                  	<div class="cont1p1l">
                    	<img src="user home photo/images.jpeg" class="food">
                    </div>
                    
                    <div class="cont1p1r">
                    	<h3 class="fdtp">Bread Corner</h3>
                        <p class="dis">Baked food product made of flour or meal that is moistened, kneaded, and sometimes fermented. A major food since prehistoric times, it has been made in various forms using a variety of ingredients and methods throughout the world.</p>
                        <input type="button" onclick="window.location.href='signin.php'" class="fdbtn" name="Visitb" value="Click here to Visit">
                      
                    </div>
                </div>
                 <div class="cont1p1"> <!--con3--> 
                 	<div class="cont1p1l">
                    	<img src="user home photo/132892.jpeg" class="food">
                    </div>
                    
                    <div class="cont1p1r">
                    	<h3 class="fdtp">Short Eats</h3>
                        <p class="dis">A short eat is usually stuffed and fried, and it comes in many shapes and sizes. There are rolls filled with vegetables, meat, and egg; patties that resemble empanadas stuffed with potatoes and fish; and curry rotis, in which vegetables or meat are packed tightly between flatbread and browned in a pan</p>
                        <input type="button" onclick="window.location.href='signin.php'" class="fdbtn" name="Visitb" value="Click here to Visit">
                    </div>
                </div>
                 <div class="cont1p1"> <!--con4--> 
                 	<div class="cont1p1l">
                    	<img src="user home photo/desserts-table-filled-33606446.jpg" class="food">
                    </div>
                    
                    <div class="cont1p1r">
                    	<h3 class="fdtp">Dessert Corner</h3>
                        <p class="dis">Desserts can be defined as a usually sweeter course that concludes a meal. This definition includes a range of courses ranging from fruits or dried nuts to multi-ingredient cakes and pies. Many cultures have different variations of dessert.</p>
                        <input type="button"onclick="window.location.href='signin.php'" class="fdbtn" name="Visitb" value="Click here to Visit">
                    </div>
                </div>
                 <div id="cont1p1s"> <!--con5-->
                 	<div class="cont1p1ls">
                    	<img src="user home photo/Fried-Rice-Blog-Thumbnail.jpg" class="food1">
                    </div>
                    
                    <div class="cont1p1rs">
                    	<h3 class="fdtp">Rice Section</h3>
                        <p class="dis">All the fried vegetables, cashew nuts, ground nuts, raisins, cardamom and cloves are mixed up with the rice. Then some salt and sugar are added too to the rice. Then the pot is put over the oven for some time at medium temperature. Finally, fried rice is ready and served to the guests. You can order different varities of rice visit the page Rice Section for more details</p>
                        <input type="button" onclick="window.location.href='signin.php'" class="fdbtn" name="Visitb" value="Click here to Visit">
                    </div> 
                </div>
            </div> <!--cont div left end--> 
            	
                	
           
                    
         
         
            <div id="cont2">   <!--cont div right start--> 
            	<h2 class="conttop"> Here is the Hotel Information of Meal Runner</h2>
                <h4 class="conttop">Tste Your Favourite Foods As Your Desires<h4> 
            	<div id="toplc">
                	<h2 class="conttop"> <i><b><u>About Hotel</u></b></i></h2>
                    <img src="Backgrounds/bar.jpg" class="ownml">
                    <p class="downm" >We provide you the best and fast service from our hotel throuh our delivery system. We provide you the quality foods for reasonable prices.Facilities provided inside  hotel rooms are ranged from a modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a refrigerator, and other kitchen facilities, upholstered chairs, a flat-screen television, and en-suite bathrooms. We provide a wide array of guest services and on-site facilities. Commonly found amenities may include: on-site food and beverage (room service and restaurants), meeting and conference services and facilities, fitness center, and business center. Upscale full-service hotels range in quality from upscale to luxury.<p>
                    
                </div>
                <div id="botlc">
                	<h2 class="conttop">Contact Us</h2>
                     <img src="Backgrounds/contact-us-image.jpg" class="ownml">
                     
                    
                    <div id="det">
                    <form method="post" action="inquery.php">
                    	<table>
                        	<tr>
                            	<td><label>User Name</label></td>
                                <td><input type="text" name="usname" value="<?php echo $uname?>" readonly="readonly"
                                 class="contus" ></td>
                            </tr>
                            <tr>
                            	<td><label>Mobile Number</label></td>
                                <td><input type="text" name="cont" value="<?php echo $cont?>" readonly="readonly"  class="contus" ></td>
                            </tr>
                            <tr>
                            	<td><label>Email</label></td>
                                <td><input type="text" name="email" value="<?php echo $email?>" readonly="readonly"  class="contus" ></td>
                            </tr>
                             <tr>
                            	<td><label>Your Suggestions or problems</label></td>
                                <td><textarea rows="20" cols="50" class="contus1" name="sug"></textarea></td>
                            </tr>
                            <tr>
                            	<td></td>
                                <td></td>
                                <td><input type="button" name="sub" value="Submit" class="btn1" onclick="window.location.href='signin.php'">
                            </tr>
                        </table>
                    </form>
                    </div>
                    </div>
                    
                </div>

                    
                
            </div> <!--cont div right end--> 
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
