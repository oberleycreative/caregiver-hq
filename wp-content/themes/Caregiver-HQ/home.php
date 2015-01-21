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
	<div class="icon"><img src="http://localhost:8888/caregiver-hq/wp-content/themes/Caregiver-HQ/images/test_icon.png" class="service-icon" alt="" title=""></div>
	<div class="block">
	<p>Proin non purus pharetra, tincidunt ligula ut, imperdiet nulla. Aenean turpis tortor, tempor ut rutrum sit amet, cursus eget sem. Proin laoreet nulla vitae ipsum varius rhoncus.</p>
	</div>
</div>


<div class="third">
	<div class="title"><h5>Standard</h5></div>
	<div class="icon"><img src="http://localhost:8888/caregiver-hq/wp-content/themes/Caregiver-HQ/images/test_icon.png" class="service-icon" alt="" title=""></div>
	<div class="block">
	<p>Proin non purus pharetra, tincidunt ligula ut, imperdiet nulla. Aenean turpis tortor, tempor ut rutrum sit amet, cursus eget sem. Proin laoreet nulla vitae ipsum varius rhoncus.</p>
	</div>
</div>

<div class="third">
	<div class="title"><h5>Premium</h5></div>
	<div class="icon"><img src="http://localhost:8888/caregiver-hq/wp-content/themes/Caregiver-HQ/images/test_icon.png" class="service-icon" alt="" title=""></div>
	<div class="block">
	<p>Proin non purus pharetra, tincidunt ligula ut, imperdiet nulla. Aenean turpis tortor, tempor ut rutrum sit amet, cursus eget sem. Proin laoreet nulla vitae ipsum varius rhoncus.</p>
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
								<img src="http://localhost:8888/caregiver-hq/wp-content/themes/Caregiver-HQ/images/test-feed.png" class="bot-mar" alt="" title="">

							<div class="btn-home-services"><a href="#" alt="">View all resources</a></div>
						</div>

				</div>



<?php get_footer(); ?>