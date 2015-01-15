<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}


 ?>
<?php get_header();?>


<div class="super-hero">
 	<!-- <img src="wp-content/themes/pr2014/images/tem-homebknd.jpg">  --><!-- place for main hero image. img for placeholder but use php or whatever for final -->

 

<div class="super-hero-inner">
		<div class="super-hero-callout">
			<h1>Every child thrives.<br><span class="every-child">Together, we pave the path for their success.</span></h1>
			<p>Since 1832, Pressley Ridge has understood that all children can change and grow and that all family can use support. We help over 5,200 children and families annually through Educational Opportunities, Foster Care Connections, Residential Options, and Community-based Support with locations in Pennsylvania, Delaware, Maryland, Ohio, Virginia, West Virginia, as well as internationally in Portugal and Hungary.</p>
			<div class="super-hero-links">Hear Our Story &#8226; Become a Parent &#8226; Donate Today</div>
		</div>
</div>

	<div class="our-mission">
		<div class="our-mission-inner"><h4>Our Misson is to</h4>&nbsp;<em> improve the lives of children and families everywhere and especially those whose lives we touch.</em></div>
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
