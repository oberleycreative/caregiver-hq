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
			<h1>All kids thrive.<br><span class="every-child">Together, we pave the path for their success.</span></h1>
			<p>Since 1832, Pressley Ridge has understood that all children can change and grow and that all family can use support. We help over 5,200 children and families annually through Educational Opportunities, Foster Care Connections, Residential Options, and Community-based Support with locations in Pennsylvania, Delaware, Maryland, Ohio, Virginia, West Virginia, as well as internationally in Portugal and Hungary.</p>
			<div class="super-hero-links"><a href="http://dev.pressleyridge.com/?page_id=38163" alt="Hear Our Story">Hear Our Story</a> &#8226; <a href="http://dev.pressleyridge.com/?page_id=71" alt="Become a Parent">Become a Parent</a> &#8226; <a href="http://dev.pressleyridge.com/?page_id=67" alt="Donate Today">Donate Today</a></div>
		</div>
</div>

	<div class="our-mission">
		<div class="our-mission-inner"><h4>Our Misson is to</h4>&nbsp;<em> improve the lives of children and families everywhere and especially those whose lives we touch.</em></div>
	</div>
</div>

	
<!-- restart container and wrapper -->
<div id="container" class="front">
		<?php responsive_header_end(); // after header container hook ?>

		<?php responsive_wrapper(); // before wrapper container hook ?>
			<div id="wrapper" class="clearfix">
		<?php responsive_wrapper_top(); // before wrapper content hook ?>
		<?php responsive_in_wrapper(); // wrapper hook ?>



		<div class="unique-home">
			<h1>Improving the lives of children and families everywhere.</h1>
			<p>Pressley Ridge is much more than “schools.“ We began as a refuge for orphans and have developed into an innovative leader in the treatment of children and families. Those who come to Pressley Ridge have serious emotional and behavioral problems, but not every child is the same, nor are every child’s issues. At Pressley Ridge, we create a highly individualized programs that best meet the needs of a child and their family.</p>
		</div>


		<div class="home-services">
			<div class="main-service">
				<h1><a href="<?php echo get_permalink( 38176 ); ?>"><?php echo get_the_title( 38176 ); ?></a></h1>
				<div class="home-service-thumb"><img src="http://dev.pressleyridge.com/wp-content/uploads/2015/01/home_thumb_1.jpg" class="Foster Care Connections" alt="Pressley Ridge" />
					<!--<?php echo get_the_post_thumbnail( 38176, '400,400', array( 'class' => 'alignleft' )  ); ?> --></div>
				<!--<p>We provide family havens for safety, renewal, and return. Our Foster Care Connections are designed to provide a nurturing home environment for children and youth. Working together, each foster care team helps children thrive with individualized treatment within safe, supportive, normative environments.</p>
				<div class="main-service-btn"><a href="<?php echo get_permalink( 38176 ); ?>">Learn More</a></div>-->
			</div>

			<div class="main-service right">
				<h1><a href="<?php echo get_permalink( 38178 ); ?>"><?php echo get_the_title( 38178 ); ?></a></h1>
				<div class="home-service-thumb"><img src="http://dev.pressleyridge.com/wp-content/uploads/2015/01/home_thumb_2.jpg" class="Foster Care Connections" alt="Pressley Ridge" />
					<!--<?php echo get_the_post_thumbnail( 38178, '400,400' ); ?> --></div>
				<!--<p>Our Educational Opportunities welcome kids into schools that start with their strengths - places of joy, belonging, confidence and generous contribution. At Pressley Ridge, education is collaborative, experiential, and most importantly, fun. We know that success at school is not only about grades. </p>
				<div class="main-service-btn"><a href="<?php echo get_permalink( 38178 ); ?>">Learn More</a></div>-->
			</div>

			<div class="main-service">
				<h1><a href="<?php echo get_permalink( 38180 ); ?>"><?php echo get_the_title( 38180 ); ?></a></h1>
				<div class="home-service-thumb"><img src="http://dev.pressleyridge.com/wp-content/uploads/2015/01/home_thumb_3.jpg" class="Foster Care Connections" alt="Pressley Ridge" />
					<!--<?php echo get_the_post_thumbnail( 38180, '400,400' ); ?>--></div>
				<!--<p>Our Community-Based Support helps to strengthen and keep families together, to assist with educational resources, and to offer coaching and self-discovery – in the home, in the moment, and over time.</p>
				<div class="main-service-btn"><a href="<?php echo get_permalink( 38180 ); ?>">Learn More</a></div>-->
			</div>

			<div class="main-service right">
				<h1><a href="<?php echo get_permalink( 38182 ); ?>"><?php echo get_the_title( 38182 ); ?></a></h1>
				<div class="home-service-thumb"><img src="http://dev.pressleyridge.com/wp-content/uploads/2015/01/home_thumb_4.jpg" class="Foster Care Connections" alt="Pressley Ridge" />
					<!--<?php echo get_the_post_thumbnail( 38182, '400,400' ); ?>--></div>
				<!--<p>Our Residential Options create supportive places to practice new possibilities and life contributions that are based on strengths and unique gifts and help create productive lives. Our goal is to help children and their families learn the skills that will enable them to return home to their communities successfully.</p>
				<div class="main-service-btn"><a href="<?php echo get_permalink( 38182 ); ?>">Learn More</a></div>-->
			</div>

			<div class="main-service">
				<h1><a href="<?php echo get_permalink( 38184 ); ?>"><?php echo get_the_title( 38184 ); ?></a></h1>
				<div class="home-service-thumb"><img src="http://dev.pressleyridge.com/wp-content/uploads/2015/01/home_thumb_5.jpg" class="Foster Care Connections" alt="Pressley Ridge" />
					<!--<?php echo get_the_post_thumbnail( 38184, '400,400' ); ?>--></div>
				<!--<p>We help other family and child serving agencies achieve a higher level of organizational excellence. Our experienced and dynamic trainers and consultants demonstrate how to embrace new ideas and deliberate change. They have enlightened and energized professionals around the world with better ways to serve children and their families.</p>
				<div class="main-service-btn"><a href="<?php echo get_permalink( 38184 ); ?>">Learn More</a></div>-->
			</div>

			<div class="main-service right">
				<h1><a href="<?php echo get_permalink( 67 ); ?>"><?php echo get_the_title( 67 ); ?></a></h1>
				<div class="home-service-thumb"><img src="http://dev.pressleyridge.com/wp-content/uploads/2015/01/home_thumb_6.jpg" class="Foster Care Connections" alt="Pressley Ridge" />
					<!--<?php echo get_the_post_thumbnail( 67, '400,400' ); ?>--></div>
				<!--<p>Over the next year, Pressley Ridge expects to help over 5,400 children and their families. It is our hope is that all children regardless of where they are in life will have the opportunity to thrive and experience success in their future by being prepared to deal with life’s challenges and live independently.</p>
				<div class="main-service-btn"><a href="<?php echo get_permalink( 67 ); ?>">Give the gift of hope</a></div>-->
			</div>
			
			

		</div> <!-- end .home-services -->
		</div> <!-- end #container -->
		</div> <!-- end #wrapper -->

		<div class="green-callout">
			<div class="callout-inner">
				<div class="third">
					<h1><i class="fa fa-calendar-o"></i>&nbsp;&nbsp;Upcoming Events</h1>
										
					<?php 	//upcoming events category loop
				 		$event_args = array(
						'showposts' => 1,
						'cat' => 7
					);
					$event_query = new WP_Query( $event_args );

					while ( $event_query->have_posts() ) :
						$event_query->the_post();
						?>
						
						<strong><?php the_title(); ?></strong>
						<?php the_excerpt(); ?>
						

					<?php endwhile; wp_reset_postdata(); ?>
				</div>				

				<div class="third">
					<h1><i class="fa fa-star"></i>&nbsp;&nbsp;Employee Spotlight</h1>
					
					<?php 	//employee spotlight category loop
				 		$spotlight_args = array(
						'showposts' => 1,
						'cat' => '166,167,168'
						
					);
					$spotlight_query = new WP_Query( $spotlight_args );

					while ( $spotlight_query->have_posts() ) :
						$spotlight_query->the_post();
						?>
						
						<strong><?php the_title(); ?></strong>
						<?php the_excerpt(); ?>
						

					<?php endwhile; wp_reset_postdata(); ?>
				</div>

				<div class="third">
					<h1><i class="fa fa-slideshare"></i>&nbsp;&nbsp;Career Opportunities</h1>
					<strong>View Our Current Openings</strong>
					<p>Are you a creative thinker who strives for innovation? Are you seeking a work environment that is challenging and supportive? Then you might be a great fit for Pressley Ridge.</p>
					<div class="main-service-btn"><a href="http://dev.pressleyridge.com/?page_id=36033" alt="Career Opportunities">View Current Openings</a></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div class="blue-callout">
			<h1>The Latest from Pressley Ridge</h1>
			<div class="callout-inner">
				<div class="half">
				
				 <?php 	//success story category loop
				 		$args = array(
						'showposts' => 1,
						'cat' => 11
					);
					$the_query = new WP_Query( $args );

					// The Loop
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>
						<?php if ( has_post_thumbnail() ) { 
							the_post_thumbnail(); } ?>
						<?php the_title( '<h3><span class="spotlight-heading">Success Spotlight: </span>', '</h3>' ); ?>
						<?php the_excerpt(); ?> 


					<?php endwhile; wp_reset_postdata(); ?>

				</div>
				<div class="vertical-slash"></div>
				<div class="half">
					<?php if ( have_posts() ) : 

       					$recentPosts = new WP_Query();
       					$recentPosts->query('showposts=3'); ?>

						<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
						
						
						<?php the_title( '<h3><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;', '</h3>' ); ?>
						<div class="front-date"><?php the_date(); ?></div>
						<?php the_excerpt(); ?> 

					<?php endwhile; else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>				
				</div>

			</div>
			<div class="clear"></div>
		</div>


<?php get_footer(); ?>
