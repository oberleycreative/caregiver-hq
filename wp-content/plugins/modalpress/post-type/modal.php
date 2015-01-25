<?php

$modalpress_posttype = new modalpress_posttype;

add_action( 'init', array($modalpress_posttype,'post_type'));
class modalpress_posttype{
	
	
	function __construct(){
		
		
	}
	function post_type(){
		
				$post_type = array(
			'labels' => array(
				'name' => __('ModalPress', 'modalpress'),
				'singular_name' => __('ModalPress', 'modalpress')
			),
		'public' => true,
		'has_archive' => true,
		'show_in_nav_menus' => true,
		
		'show_in_menu'       => true,
		'rewrite' => array('slug' =>  'modalpress'),
		'supports' => array('title','editor','thumbnail','revisions','page-attributes','excerpt')
		);
		
		$post_type = apply_filters('modalpress_posttype_array', $post_type);
		
		register_post_type('modalpress',$post_type);	
		
		
	}
	
	
}


?>