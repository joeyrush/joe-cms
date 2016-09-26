$(document).ready(function(){

	var divs = $('.quote').hide(),
    i = 0;

	(function cycle() { 

	    divs.eq(i).fadeIn(400)
	              .delay(7000)
	              .fadeOut(400, cycle);

	    i = ++i % divs.length;

	})();

});