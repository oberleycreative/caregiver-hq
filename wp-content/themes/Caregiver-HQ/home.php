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
	<img src="http://localhost:8888/caregiver-hq/wp-content/themes/Caregiver-HQ/images/temp_icon.jpg" alt="" title="">
	<div class="title"><h5>Member Resources</h5></div>

	<div class="block">
	<p>Here, you have access to our full collection of benefits: the CaregiverHQ newsletter, our own blog full of tips and inspiration, fact sheets, how-tos, and a wide variety of resources designed to help and support you.</p>
	</div>
</div>


<div class="third">
	<img src="http://localhost:8888/caregiver-hq/wp-content/themes/Caregiver-HQ/images/temp_icon.jpg" alt="" title=""><p></p>
	<div class="title"><h5>Personal Care Services</h5></div>
	<div class="block">
	<p>Does your loved one require in-home care beyond what you are able to provide alone? Trust CaregiverHQ to find high-quality personal care options for you.</p>
	</div>
</div>

<div class="third">
	<img src="http://localhost:8888/caregiver-hq/wp-content/themes/Caregiver-HQ/images/temp_icon.jpg" alt="" title=""><p></p>
	<div class="title"><h5>Legal</h5></div>
	<div class="block">
	<p>Whether you need a legal services for estate planning, writing a will, or just getting your loved one’s affairs in order – let our premium network of legal professionals help you.</p>
	</div>
</div>

</div>

<div class="btn-home-services"><a href="#" alt="">Find out which plan is right for you</a></div>


	
						</div> <!-- end of services container -->
					</div>


				<div class="featured-resources-frame">
 	
						<div class="featured-resources-inner">
							<div class="section-title"><h1>Featured Resources</h1></div>
								<!-- Posts Carousel goes here -->
							<div class="btn-home-services"><a href="#" alt="">View all resources</a></div>
						</div>

				</div>



<?php get_footer(); ?>