<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<title>Avora</title>
<meta name="description" content="Avora">


<?php include "../domain.php" ?>
<?php include "../header_scripts.php" ?>


<script>
if((Browser.Platform.ios) || (Browser.Platform.webos) || (Browser.Platform.android)) {
	window.addEventListener("load",function() {
		// Set a timeout...
		setTimeout(function(){
			// Hide the address bar!
			window.scrollTo(0, 1);
		}, 0);
	});
}
</script>
   <meta name="apple-mobile-web-app-capable" content="yes" /> 
</head>

<body class="page residences">
    
<!-- <div id="fadeoverlay"></div> -->

<div class="wrapper">
    <div class="container">
		
       
        <?php include "../header.php" ?>
     	
        <div id="slides" class="slideshow">
                  
 				 <ul class="slides-container">
 					
                  	  <li> 
                      <!-- --><div class="gradtop"></div>
                      <div class="gradbtm"></div> 
                    	 <div class="halfpagecontainer">
                         <!-- <div class="overlay_bg overlay_home"></div>  -->
                         <div class="desktop"><img src="../images/residences/Building_Exterior_Blue.jpg" alt=""></div>
                         <div class="mobile"><img src="../images/residences/Building_Exterior_Blue_Full.jpg" alt=""></div>
                         
                         <div class="greenbox">
                            <h1>the finer things</h1>
                            <p>We invite you to experience Avora, Port Imperial's newest and most sophisticated residential collection. Here, contemporary style blends seamlessly with an unparalleled level of convenience, breathtaking beauty and a LEED certified stadard that boasts the latest in renewable energy technologies and progressive sustainable practices.</p>
                           <div class="videoplay">
                               <a href="#"><img src="../images/vidbtn.png" width="51" height="51" /></a>
                              <a href="#"> <h1>discover avora</h1></a>
                           </div>
                         </div>
                         
                        
                         </div><!-- /halfpagecontainer -->
                         
                      </li>
                      
                      <li> 
                         <div class="gradtop"></div>
                      <div class="gradbtm"></div> 
                      <img src="../images/residences/Living_Room.jpg" alt="">
                          <div class="textbox">
                            <h1>living area</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          
                         </div>
                         
                      </li>
                      
                      <li> 
                         <div class="gradtop"></div>
                      <div class="gradbtm"></div> 
                      <img src="../images/residences/Bathroom.jpg" alt="">
                           <div class="textbox">
                            <h1>bathroom</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          
                         </div>
                      </li>
                      
                        <li> 
                         <div class="gradtop"></div>
                      <div class="gradbtm gradlength_mid"></div> 
                      <img src="../images/residences/Kitchen1.jpg" alt="">
                          <div class="textbox">
                            <h1>kitchen</h1>
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