<?php
function twi_awesome_popup_shortcode_function($popup,$content = null ){
	extract( shortcode_atts( array(
		'twi_popup_effects' => '',
		'twi_close_button_text' => '',
		'twi_modal_opacity' => '',
		'twi_popup_link_text' => '',
		'twi_mo_bg' => '',
		'twi_overlap_close' => '',
		'twi_hide_close_button' => ''
	 ), $popup) );
	$i = mt_rand(1,10000);
	static $a_style;
	$a_style++;
	$twi_modal_uid = "twi_modal_uid_".$i;
	$twi_modal_uid_hide ="#".$twi_modal_uid.' '.".twi_close_button_hide";
    return '<a class="'.$twi_modal_uid.'_open twi_link_style_'.$a_style.'" href="#">'.$twi_popup_link_text.'</a>
    <div id="'.$twi_modal_uid.'" data-uid="#'.$twi_modal_uid.'" class="pop well animated '.$twi_popup_effects.'" data-effeckt-type="" data-modal-bgcolor="'.$twi_mo_bg.'" data-modal-opacity="'.$twi_modal_opacity.'" data-overlap-close="'.$twi_overlap_close.'" data-hide-close-button="'.$twi_hide_close_button.'"  data-hide-id="'.$twi_modal_uid_hide.'">'
			.do_shortcode($content).
	'<span class="twi_close_button_hide"><br/><button class="'.$twi_modal_uid.'_close btn btn-default twi_close_button">'.$twi_close_button_text.'</button></span>
	</div>';
	do_action('twi_awesome_popup_shortcode_function');
}
add_shortcode('twi_awesome_popup_shortcode','twi_awesome_popup_shortcode_function');
add_filter( 'widget_text', 'do_shortcode');
?>