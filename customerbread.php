 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="add.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer Bread</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php
	
	session_start();
	echo isset($_SESSION['Usname'])? $_SESSION['Usname']:"guest";
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

			
            
 <div id="contl">   <!--cont div left start-->  
            <h3 id="topp">Bread List For You</h3>
            <div>
   <?php
	include"connect.php";
	
	$sql="SELECT * FROM bread";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{ echo'<table border="0" cellspacing="20" cellpadding="20" align="center">
	<tr>
		
		<td><b>Bread Name</b></td>
		<td><b>Bread Price</b></td>
		
		
	</tr>';
		while($row=mysqli_fetch_assoc($result))
		{
			
			 echo'<tr>'.
			 '<td>'.$row['B_name'].'</td>'.'<td>'.$row['B_price'].'</td>'.
			 '<td><button onclick="location.href='."'breadorder.php ? Id=".$row['B_ID']."'".'">Order Now</button></td>'.'</tr>';
			 
		}
		
		echo'</table>';
	}
?>  



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
          
       
