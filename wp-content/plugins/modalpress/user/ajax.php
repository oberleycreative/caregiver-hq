<?php
$modalpress_user_ajax = new modalpress_user_ajax;


add_action('wp_ajax_load_modal_content', array($modalpress_user_ajax,'load_modal_content'));
add_action('wp_ajax_nopriv_load_modal_content', array($modalpress_user_ajax,'load_modal_content'));
class modalpress_user_ajax{
	
	
	function load_modal_content(){
					
			$WP_Embed = new WP_Embed;
		$page = get_page_by_path( $_GET['slug'], OBJECT, 'modalpress' );	
		$content = $page->post_content;
		
		echo apply_filters('the_content', $content);
		
		die();
		
	}
	
	
	
}