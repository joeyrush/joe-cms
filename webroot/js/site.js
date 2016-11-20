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

	var webroot = root();

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
			url: webroot + '/projects/list_ajax',
			data: {categoryId: $(this).val()},
			success: function(data){

				$('.items-wrapper').html(data.content);

				// apply the animations
				initRandomPortfolioAnimation();
			}
		});
	});

	// if galleria class is available on the current page, we want to run it!
	if ($('.galleria').length) {
		Galleria.loadTheme(webroot + '/webroot/galleria/themes/classic/galleria.classic.min.js');
    	Galleria.run('.galleria', {
		    // configure
			autoplay: true,
			lightbox: true,
			idleMode: true,

		    // extend theme
			extend: function() {
				var gallery = this; // "this" is the gallery instance

				//fullscreen button
				this.addElement('fscr');
				this.appendChild('stage','fscr');
				var fscr = this.$('fscr').click(function() {
				gallery.toggleFullscreen();
				});
			}
		});
	}

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

function initModalToggle(data) {
	$('.portfolio__overlay a').on('click', function(){
		var dataId = $(this).data('id');

		if (dataId != null && data != null) {
			switchModalContent(data[dataId]);
		}
	});
}

/*
 * Swaps out the modal content (title, description, urls and images) with the data
 * array passed through.
 */
function switchModalContent(data) {
	$('.project__modal .modal-body h2').html(data['title']);
	$('.project__modal .project__text p').html(data['description']);
	$('.project__modal .modal-header a').attr("href", data['url']);

	var newImages = [];

	// loop through and append each image to the images array
	$.each(data['images'], function(key, value) {
		newImages.push({image : value.filepath});
	});

	// using Galleria api to load the new set of images
	Galleria.get(0).load(newImages);
}

/**
 * JS method for getting the webroot - localhost would be dev:8080/joe-cms
 * @return string
 */
function root() {
    var scripts = document.getElementsByTagName( 'script' ),
        script = scripts[scripts.length - 1],
        path = script.getAttribute( 'src' ).split( '/' ),
        pathname = location.pathname.split( '/' ),
        notSame = false,
        same = 0;

    for ( var i in path ) {
        if ( !notSame ) {
            if ( path[i] == pathname[i] ) {
                same++;
            } else {
                notSame = true;
            }
        }
    }
    return location.origin + pathname.slice( 0, same ).join( '/' );
}

var $animation_elements = $('.scroll-to-display');
/**
 * call this on scroll & resize to hide/display page elements based on whether they are within view or not
 * @param  {String} targetElement - the element to hide and show e.g. '.wrapper'
 * @param  {String} classToAdd - the name of the class that will be added when the element is within the viewport
 * @param  {Boolean} fadeOut - if true, the classToAdd will be removed when element is out of viewport
 * @return void
 */
function check_if_in_view(targetElement, classToAdd, fadeOut) {
	
	var window_height = $(window).height();
	var window_top_position = $(window).scrollTop();
	var window_bottom_position = (window_top_position + window_height);
 
	$.each($animation_elements, function() {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);
 
		// Check to see if this current container is within viewport
		if ((element_bottom_position >= window_top_position) &&
		(element_top_position <= window_bottom_position)) {
			$element.addClass(classToAdd);
		} else if (fadeOut) {
			$element.removeClass(classToAdd);
		}
  });
}

$(window).on('scroll resize', function() {
	check_if_in_view('.scroll-to-display', 'visible', true);
});