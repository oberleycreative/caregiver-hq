// main menu shrink function
	
	$(window).scroll(function() {
	  if ($(document).scrollTop() > 50) {
	    $('#header-container').addClass('shrink');
	    $('#social-top').addClass('hide');
	    $('#sub-menu-container').addClass('shrink');


	  } else {
	    $('#header-container').removeClass('shrink');
	    $('#social-top').removeClass('hide');
	    $('#sub-menu-container').removeClass('shrink');
	  }
	});

