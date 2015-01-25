jQuery(document).ready(function($){
       jQuery('body').fitVids();	      
       jQuery('.pop').each(function() {
       var uni_id = $(this).data("uid");
       var modal_bgcolor = $(this).data("modal-bgcolor");
       var modal_opacity = $(this).data("modal-opacity");
       var modal_click_close = $(this).data("overlap-close");
       var modal_hide_close_button = $(this).data("hide-close-button");
       var modal_hide_id = $(this).data("hide-id");
       if(modal_hide_close_button == true){
			jQuery(modal_hide_id).css("display","none"); 
		}
	   jQuery(uni_id).popup({
				  opacity: modal_opacity,
				  color: modal_bgcolor,
				  blur: modal_click_close,
                                  horizontal: 'center',
                                  transition: 'all 1s ease' 
				 });
		});
});