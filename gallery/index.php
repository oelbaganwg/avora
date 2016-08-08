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

<body class="page gallery">
    
<!-- <div id="fadeoverlay"></div> -->

<div class="wrapper">
    <div class="container">
		
       
        <?php include "../header.php" ?>
     	
        <div id="slides" class="slideshow">
                  
 				 <ul class="slides-container">
                 		
                        <li> 
                             <div class="gradtop"></div>
                             <div class="gradbtm gradlength_mid"></div>
                             <img src="../images/gallery/ViewShot.jpg" alt="">
                             <div class="textbox">
                             <h1>Lobby</h1>
                             </div>
                        </li>
                      
                        <li> 
                             <div class="gradtop"></div>
                             <div class="gradbtm gradlength_mid"></div>
                             <img src="../images/gallery/RoofDeck.jpg" alt="">
                             <div class="textbox">
                             <h1>roof deck</h1>
                             </div>
                      </li>
                      
                      
                      
              </ul>
                 
              <nav class="slides-navigation">
                  <a href="#" class="next hvr-pulse-grow"><img src="../images/next.png" width="35"/></a>
                  <a href="#" class="prev hvr-pulse-grow"><img src="../images/prev.png" width="35"  /></a>
                </nav>
              <nav class="slides-pagination">
                <a class="current" href="#1"><img src="../images/gallery/ViewShot.jpg" /></a>
                <a href="#2"><img src="../images/gallery/RoofDeck.jpg" /></a>
              </nav>                        
                
             
     	 </div>
            
        


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
    }).on('animated.slides', function() { 
    var current_index = $(this).superslides('current');
    $('.slides-pagination a').removeClass('current');
    $('.slides-pagination a').eq(current_index).addClass('current');
});
  </script>
  

</body>
</html>