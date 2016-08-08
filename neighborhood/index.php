<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<title>Avora</title>
<meta name="description" content="Avora">


<?php include "../domain.php" ?>
<?php include "../header_scripts.php" ?>


</head>

<body class="page neighborhood">
    
<!-- <div id="fadeoverlay"></div> -->

<div class="wrapper">
    <div class="container">
		
       
        <?php include "../header.php" ?>
     	
        <div id="slides" class="slideshow">
                  
 				 <ul class="slides-container">
 					
                  	  <li> 
                      <div class="gradtop"></div>
                      <div class="gradbtm"></div>
                    	 <div class="halfpagecontainer">
                         <!-- <div class="overlay_bg overlay_home"></div>  -->
                         <div class="desktop"><img src="../images/neighborhood/Neighborhood_Skyline_Blue.jpg" alt=""></div>
                         <div class="mobile"><img src="../images/neighborhood/Neighborhood_Skyline_Blue_Full.jpg" alt=""></div>
                         
                         <div class="greenbox">
                            <h1>an address worth waiting for</h1>
                            <p>Located in the highly desirable and affluent Port Imperial of Weehawken, Avora casts its splendor directly across the river from Midtown Manhattan: only minutes from the city, while maintaining the peace and luxury of suburban waterfront living.</p>
                           <div class="videoplay">
                              <h1><a href="#">neighborhood map</a></h1>
                           </div>
                         </div>
                         
                        
                         </div><!-- /halfpagecontainer -->
                         
                      </li>
                      
                      <li> 
                         <div class="gradtop"></div>
                      <div class="gradbtm gradlength_mid"></div>
                      <img src="../images/neighborhood/Restaurants.jpg" alt="">
                          <div class="textbox">
                            <h1>restaurants</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          
                         </div>
                         
                      </li>
                      
                      <li> 
                      <div class="gradtop"></div>
                      <div class="gradbtm"></div>
                      <img src="../images/neighborhood/Transportation.jpg" alt="">
                           <div class="textbox">
                            <h1>transportation</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          
                         </div>
                      </li>
                      
                       <li> 
                         <div class="gradtop"></div>
                      <div class="gradbtm gradlength_mid"></div>
                      <img src="../images/neighborhood/Groceries.jpg" alt="">
                           <div class="textbox">
                            <h1>food and wine shops</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          
                         </div>
                      </li>
                      
                       
                      
                      
                </ul>
                
                
                <nav class="slides-navigation">
                  <a href="#" class="next hvr-pulse-grow"><img src="../images/next.png" width="35"/></a>
                  <a href="#" class="prev hvr-pulse-grow"><img src="../images/prev.png" width="35"  /></a>
                </nav>
     	 </div>
            
        
 <!--         
        
         <section>
        	<div class="hero_main hero_home">
            	
           
            		<div class="textinslide">
                    <div class="hometitle_shadow"></div>
                          <h1>a wealth<br />
                         of luxury<br />
                         awaits</h1>
                            <p></p>
                     </div>
           
           
                
            </div>
            
        </section>
        
 -->
    


             <?php include "../footer.php" ?>

	</div><!--/.container -->
</div><!--/.wrapper -->




<?php include "../footer_scripts.php" ?>

<script>
   //for superslider
    $('#slides').superslides({
       animation: 'slide',
	   animation_speed: 600,
	   pagination: false,
	   prevText: "",
	   play	: 0
	   //https://github.com/nicinabox/superslides
    });
  </script>
  

</body>
</html>