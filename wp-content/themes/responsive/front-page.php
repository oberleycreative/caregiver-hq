<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}


 ?>
<?php get_header();?>


<div class="super-hero">
 	

<div class="super-hero-inner">
		<div class="super-hero-callout">
			<h5>Your parents didn't raise a caregiver.</span></h5>
			<h1>They raised a person who cared.</span></h1>
		</div>
</div>


</div>


/**
 * Globalize Theme Options
 */
$responsive_options = responsive_get_options();
/**
 * If front page is set to display the
 * blog posts index, include home.php;
 * otherwise, display static front page
 * content
 */

 <? if ( 'posts' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
	get_template_part( 'home' );
} elseif ( 'page' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
	$template = get_post_meta( get_option( 'page_on_front' ), '_wp_page_template', true );
	$template = ( $template == 'default' ) ? 'index.php' : $template;
	locate_template( $template, true );
} else {
	get_header();

	get_template_part( 'template-parts/featured-area' );

	get_sidebar( 'home' );

	get_footer();
}
