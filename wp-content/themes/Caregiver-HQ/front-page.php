	<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}


 ?>
<?php get_header();?>


<div class="super-hero home">
 	
	<div class="super-hero-inner">
			<div class="super-hero-callout">
				<h5>Your parents didn't raise a caregiver.</span></h5>
				<h1>They raised a person who cares.</span></h1>
			</div>
	</div>

</div>

<div class="provides-frame">
 	
	<div class="provides-frame-inner">
			<div class="super-hero-callout">
				<p><span class="branded">CaregiverHQ</span> provides family caregivers with first-rate guidance, resources, and knowledge, as well as access to premium health and wellness providers, online caregiver support groups, and a variety of personal solutions. Providing caregiver support is our number one priority. Whether you’re a full-time caregiver or you’ve just recently taken on the role, we’re here to provide all the resources you need to properly take care of your loved one – and yourself.</p>
				<div clear="all"></div>
				<div class="btn-home-services-lrn"><a href="#" alt="">Learn more</a></div>
			</div>
	</div>

</div>



				<div class="connection-frame">
 	
						<div class="connection-inner">
								<div class="left-half">
									<img src="http://caregiverhq.blatbrun.com/wp-content/themes/caregiver-hq/images/circles_temp.png" alt="" title="">
								</div>

								<div class="right-half">
									<div class="title"><h2>Our system of support</h2></div>
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
							<div class="section-title-reverse"><h1>Our Services</h1></div>
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


							 ?>


							 <div class="container-thirds">

<div class="third">
	<div class="title"><h5>Free Trial</h5></div>
	<div class="icon home"><img src="http://caregiverhq.blatbrun.com/wp-content/themes/caregiver-hq/images/test_icon.png" class="service-icon" alt="" title=""></div>
	<div class="block">
	<p>Our 30-day free trial comes with one introductory coaching session, access to our CaregiverHQ newsletter, CaregiverHQ calendar of events, and our resource library full of articles, tips, and inspirational posts.</p>
	</div>
</div>


<div class="third">
	<div class="title"><h5>Basic Package</h5></div>
	<div class="icon home"><img src="http://caregiverhq.blatbrun.com/wp-content/themes/caregiver-hq/images/test_icon.png" class="service-icon" alt="" title=""></div>
	<div class="block">
	<p>This subscription places you with your own personal care coach, unlimited coaching sessions, accemss to our premium service provider network, exclusive invitations to webinars and events, and your own personal caregiving roadmap. </p>
	</div>
</div>

<div class="third">
	<div class="title"><h5>Premium Package</h5></div>
	<div class="icon home"><img src="http://caregiverhq.blatbrun.com/wp-content/themes/caregiver-hq/images/test_icon.png" class="service-icon" alt="" title=""></div>
	<div class="block">
	<p>The total care package. This subscription provides everything found in the basic care package plus your own personal, supportive care coach agent at your service. Your coach will search through our premium service providers to schedule appointments and set up services for you.</p>
	</div>
</div>

</div>

<div class="btn-home-services-lrn"><a href="subscriptions/" alt="">Enroll Now</a></div>


	
						</div> <!-- end of services container -->
					</div>


				<div class="featured-resources-frame">

					<div class="section-title"><h1>Featured Resources</h1></div>
 	
						<div class="featured-resources-inner">
					
								<!-- Posts Carousel goes here -->

								<?php if ( have_posts() ) : 

			       					$recentPosts = new WP_Query();
			       					$recentPosts->query('showposts=1'); ?>

									<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>


									<div class="front-date"><?php the_date('M\<\b\r\/\>d\<\b\r\/\>Y', '<h2>', '</h2>'); ?></div>
									
									
									<div class="front-post">
									<?php the_title( '<h3>', '</h3>' ); ?>
									<?php the_excerpt(); ?>
									</div>

								<?php endwhile; else : ?>
									<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
								<?php endif; ?>				
								<!-- end test -->

						</div>

						<div class="btn-home-services-view"><a href="#" alt="">View all resources</a></div>

				</div>
							



			
<?php get_footer(); ?>
</div><!-- end of #wrapper/services-frame -->