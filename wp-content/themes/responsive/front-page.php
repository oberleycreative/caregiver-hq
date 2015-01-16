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

<div class="provides-frame">
 	
	<div class="provides-frame-inner">
			<div class="super-hero-callout">
				<p>CaregiverHQ provides family caregivers with high-quality support, guidance, resources, and a variety of personal solutions – because everyone matters. Let CaregiverHQ care for you.</p>
			</div>
	</div>

</div>



				<div class="connection-frame">
 	
						<div class="connection-inner">
								<div class="left-half">
									<img src="http://localhost:8888/caregiver-hq/wp-content/themes/responsive/images/circles_temp.jpg" alt="" title="">
								</div>

								<div class="right-half">
									<div class="title"><h2>Caregiver Connection</h2></div>
									<div class="block"><h5>We can give you a guiding hand</h5><br /><p>“Your advice in your last email was excellent as well. The more I hear it the more I can see more clearly. It feels like I am coming out of a fog after fixating on what is wrong vs. what can help. Thanks so much.”</p></div>
									<div clear="all"></div>
									<div class="btn"><a href="#" alt="">More Testimonials</a></div>
								</div>
						</div>

				</div>


<?php responsive_wrapper(); // before wrapper container hook ?>
	<!-- orig <div id="wrapper" class="clearfix services-frame"> -->
	<!-- custom --> <div class="clearfix services-frame">
						<div class="services-inner">
						<?php responsive_wrapper_top(); // before wrapper content hook ?>
						<?php responsive_in_wrapper(); // wrapper hook ?>

						 <?

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

						 if ( 'posts' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
							get_template_part( 'home' );
						} elseif ( 'page' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
							$template = get_post_meta( get_option( 'page_on_front' ), '_wp_page_template', true );
							$template = ( $template == 'default' ) ? 'index.php' : $template;
							locate_template( $template, true );
						} else {
							get_header();

							/* get_template_part( 'template-parts/featured-area' ); */


							get_sidebar( 'home' ); ?>

							<div clear="all"></div>
							<div class="btn"><a href="#" alt="">More Testimonials</a></div>

							</div> <!-- end of services container -->
						</div>



				<div class="featured-resources-frame">
 	
						<div class="featured-resources-inner">
								<!-- Posts Carousel goes here -->
						</div>

				</div>





			 <?
				get_footer();
}

 responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper/services-frame -->