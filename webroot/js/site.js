$(document).scroll(function(){
	var scrollTop = $(this).scrollTop();
	var pixels = 500;

	// slide nav down when we've scrolled past x amnt of pixels
	if (scrollTop > pixels) {
		// reveal
		$('.navbar-fixed-top').removeClass('hidden');

		// hide the spikey border
		$('.zigzag').css({
			'opacity':'0'
		});
		 
	} else {
		// reverse the process on scroll up
		$('.navbar-fixed-top').addClass('hidden');

		$('.zigzag').css({
			'opacity':'1'
		});
	}
});

$(document).ready(function(){
	initRandomPortfolioAnimation();

	// random quotes fade-in-fade-out
	var divs = $('.quote').hide(),
    i = 0;

	(function cycle() { 

	    divs.eq(i).fadeIn(400)
	              .delay(7000)
	              .fadeOut(400, cycle);

	    i = ++i % divs.length;

	})();

	$('select[name="ProjectCategory"]').on('change', function(){
		$.ajax({
			method: 'POST',
			url: '/joe-cms/projects/list_ajax',
			data: {categoryId: $(this).val()},
			success: function(data){

				$('.items-wrapper').html(data.content);

				// apply the animations
				initRandomPortfolioAnimation();
			}
		});
	});
});

function initRandomPortfolioAnimation() {
	// generate a random animation number
	var animateNumber = Math.round(Math.random()*3) + 1;
	// generate a random delay between each animation between 100-350ms
	var animateDelay = Math.round(Math.random()*250) + 100;
	// apply the random number to determine which anim class to select
	var className = 'is-visible-'+animateNumber;

	// add the animate class to each item to trigger it
	$('.portfolio-item').each(function(i){
		setTimeout(function(){
			$('.portfolio-item').eq(i).addClass(className);
		}, animateDelay * i);
	});
}
