<?php
$modalpress_wp_footer = new modalpress_wp_footer;

add_action('wp_footer',array($modalpress_wp_footer,'wp_footer'));



class modalpress_wp_footer {
	
		
			
		function wp_footer(){
			global $post;
			
			
			$page_content = $post->post_content;
			
			 echo $content;
			echo '<div style="display:none">
					
				 ';
			
				$args = array(
				'post_type' => 'modalpress',				
				 'posts_per_page' => '-1',
				 'post_status' => 'publish'
				);
			$modals = new WP_Query( $args );
			#print_r($modals);
			foreach ($modals->posts as $modal) {
					
					$content = $modal->post_content;
					$content =  apply_filters('the_content', $content);
					if (strpos($page_content,'#'.$modal->post_name.'') !== false) {

		
				echo ' <div class="modalpress" data-modalpress-id="'.$modal->post_name.'" id="modalpress-'.$modal->post_name.'">
						<div class="modalpress-content">	
						'.$content .'				
						</div>			
				 	 </div>';
				}
			}
			
			echo ' </div>';
		}
	
	
}

?>