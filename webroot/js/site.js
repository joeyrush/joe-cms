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

	if ($('.controls').length > 0) {
		initControls();
	}

	if ($('.scroll-to-display').length > 0) {
		check_if_in_view('.scroll-to-display', 'visible', true);
	}

});

$(document).ready(function(){

	if ( $('#particles-js').length > 0 ) {
		/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
		particlesJS.load('particles-js', 'js/particles.json', function() {
		  $('#particles-js canvas').insertBefore($('#particles-js canvas').prev());
		});
	}

	if ($('.scroll-to-display').length > 0) {
		check_if_in_view('.scroll-to-display', 'visible', true);
	}

	initCustomCheckbox();
	initSmoothScroll();
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
		// show the loader and lower the opacity of the project listing - reverse this on ajax success
		$('.items-wrapper .row').css('opacity', 0.2);
		$('#ajaxLoader').show();

		$.ajax({
			method: 'POST',
			url: webroot + '/projects/list_ajax',
			data: {categoryId: $(this).val()},
			success: function(data){

				$('.items-wrapper').html(data.content);

				// apply the animations
				initRandomPortfolioAnimation();

				$('#ajaxLoader').hide();
				$('.items-wrapper .row').css('opacity', 1);


			}
		});
	});

	// if galleria class is available on the current page, we want to run it!
	if ($('.galleria').length) {
		// we grab the css height property and pass that through just to make sure there are no issues with height setting
		var galleriaHeight = $('.galleria').height();

		Galleria.loadTheme(webroot + '/webroot/galleria/themes/classic/galleria.classic.min.js');
    	Galleria.run('.galleria', {
			height: galleriaHeight,
		    // configure
			autoplay: true,
			lightbox: true,
			idleMode: true,
			wait: true,
			transition: 'fade',

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
	$('.portfolio__overlay').hide();

	// generate a random animation number
	var animateNumber = Math.round(Math.random()*3) + 1;
	// generate a random delay between each animation between 35-350ms
	var animateDelay = Math.round(Math.random()*250) + 35;
	// apply the random number to determine which anim class to select
	var className = 'is-visible-'+animateNumber;

	// this will store the total time spent animating so we can trigger stuff afterwards
	var totalAnimTime = 0;

	// add the animate class to each item to trigger it
	$('.portfolio-item').each(function(i){
		setTimeout(function(){
			$('.portfolio-item').eq(i).addClass(className);
			// re-enable overlay as each item is animated in
			$('.portfolio__overlay').eq(i).show();
		}, animateDelay * i);

		totalAnimTime += animateDelay*i;
	});
}

function initModalToggle(data) {
	$('.portfolio__overlay a').on('click', function(){
		var dataId = $(this).data('id');

		if (dataId != null && data != null) {
			// hide the old images - the new ones will automatically show when calling the load() method
			$('.galleria img').hide();
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
	if (data['full_description'] == '') {
		$('.project__modal .project__text p').html(data['description']);
	} else {
		$('.project__modal .project__text p').html(data['full_description']);
	}
	$('.project__modal .modal-header a').attr("href", data['url']);

	var newImages = [];

	var categoryButtons = '';
	// loop through the associated categories and create a form button for each then replace the forms html
	$.each(data['categories'], function(key, value) {
		categoryButtons += '<button value="'+value.id+'" name="category" type="submit">'+value.name+'</button>';
	});
	$('.project__modal .modal-body form').html(categoryButtons);

	// loop through and append each image to the images array
	$.each(data['images'], function(key, value) {
		// if the image is the placeholder one, dont add it to the gallery
		if (value.filename != 'upload-empty.png' && value.filename != '' ) {
			newImages.push({image : 'files/Images/'+value.filename});
		}
	});

	// if there aren't any images - hide the gallery - else load the new set of images
	if (newImages.length > 0) {
		// using Galleria api to load the new set of images
		Galleria.get(0).load(newImages);
	} else {
		Galleria.get(0).load({image : 'img/no-image.png'});
	}

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

	$.each($(targetElement), function() {
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

function initSmoothScroll() {
	if ($('.smooth-scroll').length > 0) {
		$('.smooth-scroll').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		        || location.hostname == this.hostname) {

		        var target = $(this.hash);
		        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		           if (target.length) {
		             $('html,body').animate({
		                 scrollTop: target.offset().top
		            }, 1000);
		            return false;
		        }
		    }
		});
	}
}

function initCustomCheckbox() {
	if ($('.custom-checkbox').length > 0) {
		$('.custom-checkbox').iCheck({
			checkboxClass: 'icheckbox_flat-purple',
			radioClass: 'iradio_flat-purple',
		});
	}
}

/*
enable up/down controls - dynamically set links and show/hide based on scroll location
 */
function initControls() {
	var guitar = $("a[name='guitar']").offset().top;
	var fitness = $("a[name='fitness']").offset().top;
	var charity = $("a[name='charity']").offset().top;
	var gaming = $("a[name='gaming']").offset().top;
	var scrollTop = $(this).scrollTop();

	if (scrollTop > (guitar - 20)) {
		$('.controls').fadeIn();
		$('#up').attr('href', '#top');
		$('#down').attr('href', '#fitness');
	} else {
		$('.controls').fadeOut();
	}

	if (scrollTop > (fitness - 20)) {
		$('#up').attr('href', '#guitar');
		$('#down').attr('href', '#charity');
	}

	if (scrollTop > (charity - 20)) {
		$('#up').attr('href', '#fitness');
		$('#down').attr('href', '#gaming');
	}

	if (scrollTop > (gaming - 20)) {
		$('#up').attr('href', '#charity');
	}
}
