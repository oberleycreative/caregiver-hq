(function($){

	// Defining our jQuery plugin

	$.fn.caregiver_modal_box = function(prop){

		// Default parameters

		var options = $.extend({
			height : "250",
			width : "500",
			title:"JQuery Modal Box Demo",
			description: "Example of how to create a modal box.",
			top: "20%",
			left: "30%",
		},prop);
				
		return this.click(function(e){
		     //Do stuff here
		});
				 		
		return this;
	};
	
})(jQuery);


return this.click(function(e){
	add_block_page();
	add_popup_box();
	add_styles();
			
	$('.caregiver_modal_box').fadeIn();
});


function add_block_page(){
	var block_page = $('<div class="caregiver_block_page"></div>');
						
	$(block_page).appendTo('body');
}


function add_styles(){			
        /*Block page overlay*/
	var pageHeight = $(document).height();
	var pageWidth = $(window).width();

	$('.caregiver_block_page').css({
		'position':'absolute',
		'top':'0',
		'left':'0',
		'background-color':'rgba(0,0,0,0.6)',
		'height':pageHeight,
		'width':pageWidth,
		'z-index':'10'
	});
}


function add_popup_box(){
	 var pop_up = $('<div class="caregiver_modal_box"><a href="#" class="caregiver_modal_close"></a><div class="caregiver_inner_modal_box"><h2>' + options.title + '</h2><p>' + options.description + '</p></div></div>');
	$(pop_up).appendTo('.caregiver_block_page');
			 			 
	$('.caregiver_modal_close').click(function(){
            $('.caregiver_block_page').fadeOut().remove();		
            $(this).parent().fadeOut().remove();					 
	});
}


$('.caregiver_modal_box').css({ 
		'position':'absolute', 
		'left':options.left,
		'top':options.top,
		'display':'none',
		'height': options.height + 'px',
		'width': options.width + 'px',
		'border':'1px solid #fff',
		'box-shadow': '0px 2px 7px #292929',
		'-moz-box-shadow': '0px 2px 7px #292929',
		'-webkit-box-shadow': '0px 2px 7px #292929',
		'border-radius':'10px',
		'-moz-border-radius':'10px',
		'-webkit-border-radius':'10px',
		'background': '#f2f2f2', 
		'z-index':'50',
	});
	$('.caregiver_modal_close').css({
		'position':'relative',
		'top':'-25px',
		'left':'20px',
		'float':'right',
		'display':'block',
		'height':'50px',
		'width':'50px',
		'background': 'url(images/close.png) no-repeat',
	});
	$('.caregiver_inner_modal_box').css({
		'background-color':'#fff',
		'height':(options.height - 50) + 'px',
		'width':(options.width - 50) + 'px',
		'padding':'10px',
		'margin':'15px',
		'border-radius':'10px',
		'-moz-border-radius':'10px',
	        '-webkit-border-radius':'10px'
	});