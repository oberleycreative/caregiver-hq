// main menu shrink function
	
	$(window).scroll(function() {
	  if ($(document).scrollTop() > 50) {
	    $('#header-container').addClass('shrink');

	  } else {
	    $('#header-container').removeClass('shrink');
	  }
	});



// hide scroll hint on scroll

	 $(window).scroll(function(){
	            var top=$(this).scrollTop();
	            if(top<100){
	                var dif=1-top/100;
	                $(".scroll-hint").css({opacity:dif});
	            }
	        });