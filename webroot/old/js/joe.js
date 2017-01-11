//Start Scroll Effects
    function Scroll(){
    	var top = document.getElementById('my-navbar');
    	var ypos = window.pageYOffset;
    	if(ypos > 600) {
    		top.style.background = "#1a1a1a";
    		$('.nav.navbar-nav li a').css('color', 'white');
    		$(".nav.navbar-nav li a").hover(function(e) { 
		    $(this).css("color",e.type === "mouseenter"?"#cc0066":"white") 
		})
    		//recolour linkedin and logo
    		$("#linkedinlogo").attr("src", "img/linkedin.png");
    		$("#whitelogo").attr("src", "img/whitelogo.png");
    		//recolour responsive menu
    		$(".icon-bar").css("background-color", "white");
    		$(".navbar-inverse .navbar-toggle").css("border-color", "white");
    	}
    	else{
    		top.style.background = "white";
    		$('.nav.navbar-nav li a').css('color', 'black');
    		$(".nav.navbar-nav li a").hover(function(e) { 
    		$(this).css("color",e.type === "mouseenter"?"#801053":"black") 
		})
    		//recolour linkedin and logo
    		$("#linkedinlogo").attr("src", "img/linkedinblack.png");
    		$("#whitelogo").attr("src", "img/blacklogo.png");

    		//recolour responsive menu
    		$(".icon-bar").css("background-color", "black");
    		$(".navbar-inverse .navbar-toggle").css("border-color", "black");

    		
    	}
    }
    window.addEventListener("scroll",Scroll);
    //End Scroll Effects


//TRIGGER ANIMATIONS WHEN ELEMENTS IN VIEW
var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      //REMOVE ON SCROLL OUT IF I WANT TO// $element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
//END SCROLL IN VIEW
