<?php

$modalpress_editor = new modalpress_editor;

add_filter('wp_link_query',array($modalpress_editor, 'wp_link_query'),10,2);

class modalpress_editor{
	
	
	
	function wp_link_query( $results, $query){
		
		
		
		for($i=0; $i<count(	 $results); $i++){
			
			
			if( $results[$i]['info'] == 'ModalPress'){
			
			$post_info = get_post($results[$i]['ID']);
					
			 $results[$i]['permalink'] = '#'.$post_info->post_name.'';	
				
			}
		}
		#print_r($results);
		
	return  $results;	
	}
	
	
	
}