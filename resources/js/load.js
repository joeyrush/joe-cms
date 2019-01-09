$(document).ready(function(){
	setTimeout(function(){	
		$('#loading').fadeOut().remove();
		$(window).trigger('resize');
	}, 350);
});