
// SMOOTH SECTIONS SCROLL + PARALLAX PLUGIN
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


// NICE Scroll plugin 
//scroll bar custom
jQuery(document).ready(
  function() {  
    jQuery("html").niceScroll({cursorcolor:"#ffffff"});
  }
);

//Minimizes the menu on the mobile after clicking
jQuery('.nav-collapse .nav > li > a').click(function(){
		jQuery('.collapse.in').removeClass('in').css('height', '0');
	});

jQuery('.carousel').carousel({
  interval: 7000
})

//Show top search 
//Slide down and fade in animations
var i=0;
$(document).ready(function() {
    $('#show-search').click(function(){
      if(i == 0){
        $('#dropdown-search').animate({height: 50},800);
        $('#search').fadeIn( "fast", function() {
		      // complete
		    });
    	$('#search').focus();
      i=1;
    } else {
        $('#dropdown-search').animate({height: 7},800);
        $('#search').fadeOut( "fast", function() {
          // complete
        });
        $('#search').focus();
        i=0;
    }
    });
});

$('#search').keypress(function (e) {
  if (e.which == 13) {
  	input = $('#search').val();
  //set
  	alert('test - ' + input);
        window.location = "/search?=" + input;
        return false; 
  }
});


//Video grid tabbed
$('.myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
