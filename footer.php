
<!-- FOOTER -->
<footer id="foot-sec">
  <p>CDI Sports</p>
</footer>
<!-- / FOOTER -->
   

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js" type="text/javascript"></script> 
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/responsiveslides.js"></script>


<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
<script src="assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
<script src="assets/js/jquery.scrollTo.min.js" type="text/javascript" ></script>
<!-- PAGE CUSTOM SCROLLER -->
<script type="text/javascript" src="assets/js/jquery.nicescroll.min.js"></script>



<!-- SMOOTH SECTIONS SCROLL + PARALLAX PLUGIN -->
<script>
//http://www.ianlunn.co.uk/plugins/jquery-parallax/
jQuery(document).ready(function(){
	jQuery('#topnav').localScroll(3000);
	jQuery('.gobtnwrapper').localScroll(3000);
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	//jQuery('#section-1').parallax("50%", 0.1);
	//jQuery('#section-2').parallax("50%", 0.1);
	//jQuery('#section-3').parallax("50%", 0.1);

})
</script>

<!-- NICE Scroll plugin -->
<script>
//scroll bar custom
	jQuery(document).ready(
  function() {  
    jQuery("html").niceScroll({cursorcolor:"#ffffff"});
  }
);
</script>

<script>
//Minimizes the menu on the mobile after clicking
jQuery('.nav-collapse .nav > li > a').click(function(){
		jQuery('.collapse.in').removeClass('in').css('height', '0');
	});
</script>

<script>
	jQuery('.carousel').carousel({
  interval: 7000
})
</script>


<script>

$(document).ready(function() {
    $('#show-search').click(function(){
        $('#dropdown-search').animate({height: 50},1500);
        $('#search').fadeIn( "fast", function() {
		    // Animation complete
		  });
    	$('#search').focus();

    });
});

$('#search').keypress(function (e) {
  if (e.which == 13) {
  	input = $('#search').val();
//set

  	alert('test - ' + input);
        window.location = "/search?=" + input;

    return false;    //<---- Add this line

  }
});

$('.myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

</script>
</body>
</html>