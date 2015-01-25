<?php
/**
  * Loading CSS 
*/

function twi_awesome_popup_css(){
	 wp_enqueue_style( 'twi_carousel_tooltip_main_css', plugins_url( '/css/bootstrap.min.css' , __FILE__ ) );
	 wp_enqueue_style( 'twi_modal_effects', plugins_url( '/css/modal_effects.css' , __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'twi_awesome_popup_css' );

/**
  * Loading Javascript 
*/

function twi_awesome_popup_js(){
        wp_enqueue_script('jquery');
		wp_enqueue_script( 'jquery.popupoverlay', plugins_url( '/js/jquery.popupoverlay.js' , __FILE__ ) , array('jquery'), false, false);
		wp_enqueue_script( 'twi_modal', plugins_url( '/js/modal.js' , __FILE__ ) , array('jquery'), false, false);
		wp_enqueue_script( 'twi_video', plugins_url( '/js/video.js' , __FILE__ ) , array('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts', 'twi_awesome_popup_js' );