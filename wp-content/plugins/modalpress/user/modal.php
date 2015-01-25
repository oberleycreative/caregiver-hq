<?php


$modalpress_user = new modalpress_user;


add_filter('the_content', array($modalpress_user, 'the_content'));
class modalpress_user{
	
	
	
	function the_content($content){
		
		
		
		
		
		return $content;
		
	}
	
	
}

?>