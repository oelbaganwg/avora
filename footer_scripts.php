<script src="<?php echo $masterdomain; ?>wowanimations/wow.min.js"></script>
<script>
 new WOW().init();
</script>



<script>

$('document').ready(function(){
	    $("#fadeoverlay").fadeOut(1000);
		
	<?php if (isset($_GET['cms'])) { ?>
			 setTimeout(function(){
				$('.updatemsg').animate({"top":"0%"},500,'swing');
				 }, 600);
	<?php } ?>
		
	$('.closex').click(function () {
			 $('.updatemsg').animate({"top":"-100px"},200,'swing');
			
			 
  	 })
	 
	 
	 
}); 
  </script> 

<script>
  //hamburger menu

  (function() {

    "use strict";

    var toggles = document.querySelectorAll(".c-hamburger");

    for (var i = toggles.length - 1; i >= 0; i--) {
      var toggle = toggles[i];
      toggleHandler(toggle);
    };

    function toggleHandler(toggle) {
      toggle.addEventListener( "click", function(e) {
        e.preventDefault();
        (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
      });
    }

  })();

	document.querySelector( "#nav-toggle" )
 	 	.addEventListener( "click", function() {
   	 	this.classList.toggle( "active" );
  });
  
  // hamburger menu
  $(document).ready(function() {
 		$('#nav-toggle').click(function () {
      	 //$('#hamburgermenu').stop(true).fadeToggle();
		  $('.popupmenu').fadeToggle();
		   $('.textinslide').fadeToggle();
  	  })
});

  //http://callmenick.com/_development/css-hamburger-menu-icons/

  </script>
  
  
  