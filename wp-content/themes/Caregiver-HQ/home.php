<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Blog Template
 *
 * @file           home.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.1.0
 * @filesource     wp-content/themes/responsive/home.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header();

global $more;
$more = 0;
?>

	


<div class="container-thirds">

<div class="third">
	<div class="title"><h5>Free Trial</h5></div>
	<div class="icon home"><img src="http://localhost:8888/caregiver-hq/wp-content/themes/Caregiver-HQ/images/test_icon.png" class="service-icon" alt="" title=""></div>
	<div class="block">
	<p>Our 30-day free trial comes with one introductory coaching session, access to our CaregiverHQ newsletter, CaregiverHQ calendar of events, and our resource library full of articles, tips, and inspirational posts.</p>
	</div>
</div>


<div class="third">
	<div class="title"><h5>Basic Package</h5></div>
	<div class="icon home"><img src="http://localhost:8888/caregiver-hq/wp-content/themes/Caregiver-HQ/images/test_icon.png" class="service-icon" alt="" title=""></div>
	<div class="block">
	<p>This subscription places you with your own personal care coach, unlimited coaching sessions, accemss to our premium service provider network, exclusive invitations to webinars and events, and your own personal caregiving roadmap. </p>
	</div>
</div>

<div class="third">
	<div class="title"><h5>Premium Package</h5></div>
	<div class="icon home"><img src="http://localhost:8888/caregiver-hq/wp-content/themes/Caregiver-HQ/images/test_icon.png" class="service-icon" alt="" title=""></div>
	<div class="block">
	<p>The total care package. This subscription provides everything found in the basic care package plus your own personal, supportive care coach agent at your service. Your coach will search through our premium service providers to schedule appointments and set up services for you.</p>
	</div>
</div>

</div>

<div class="btn-home-services"><a href="subscriptions/" alt="">Enroll Now</a></div>


	
						</div> <!-- end of services container -->
					</div>


				<div class="featured-resources-frame">
 	
						<div class="featured-resources-inner">
							<div class="section-title"><h1>Featured Resources</h1></div>
								<!-- Posts Carousel goes here -->
								<img src="http://localhost:8888/caregiver-hq/wp-content/themes/Caregiver-HQ/images/test-feed.png" class="bot-mar" alt="" title="">

							<div class="btn-home-services"><a href="#" alt="">View all resources</a></div>
						</div>

				</div>



<?php get_footer(); ?>