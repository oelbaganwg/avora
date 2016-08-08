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

<body class="page amenities">
    
<!-- <div id="fadeoverlay"></div> -->

<div class="wrapper">
    <div class="container">
		
       
        <?php include "../header.php" ?>
     	
        <div id="slides" class="slideshow">
                  
 				 <ul class="slides-container">
 					
                  	  <li> 
                      <!----> 
                      <div class="gradtop"></div>
                      <div class="gradbtm"></div> 
                    	 <div class="halfpagecontainer">
                         <!-- <div class="overlay_bg overlay_home"></div>  -->
                         <div class="desktop"><img src="../images/amenities/pool_home.jpg" alt=""></div>
                         <div class="mobile"><img src="../images/amenities/Pool2_Blue_Full.jpg" alt=""></div>
                         
                         <div class="greenbox">
                            <h1>a lifestyle couture</h1>
                            <p>The beautifully orchestrated design of Avora leaves no stone unturned in the quest for perfection. Residents will enjoy a magnificent lobby with concierge service, a private screening theater, elegant boardroom, an exclusive grand salon lounge with a bar and catering kitchen, as well as a private dining room for entertaining with available wine storage. A state-of-the-art strength and cardio fitness center, on-site pet grooming, bike storage and secure garage parking are all available.</p>
                           
                         </div>
                         
                        
                         </div><!-- /halfpagecontainer -->
                         
                      </li>
                      
                      <li> 
                      <div class="gradtop"></div>
                      <div class="gradbtm"></div> 
                         <img src="../images/amenities/pool.jpg" alt="">
                          <div class="textbox">
                            <h1>pool</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          
                         </div>
                         
                      </li>
                      
                      <li> 
                         <div class="gradtop"></div>
                      <div class="gradbtm gradlength_long"></div> 
                      <img src="../images/amenities/roofdeck.jpg" alt="">
                           <div class="textbox">
                            <h1>roof deck</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          
                         </div>
                      </li>
                      
                        <li> 
                         <div class="gradtop"></div>
                      <div class="gradbtm"></div> 
                      <img src="../images/amenities/gym.jpg" alt="">
                          <div class="textbox">
                            <h1>gym</h1>
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