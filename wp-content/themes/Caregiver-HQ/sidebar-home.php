<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     http://caregiverhq.blatbrun.com/wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
	<div id="widgets" class="home-widgets">
		<div id="home_widget_1" class="grid col-300">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if ( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Free Trial', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'Proin non purus pharetra, tincidunt ligula ut, imperdiet nulla. Aenean turpis tortor, tempor ut rutrum sit amet, cursus eget sem. Proin laoreet nulla vitae ipsum varius rhoncus.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-1 ?>

			<?php responsive_widgets_end(); // responsive after widgets hook ?>
		</div><!-- end of .col-300 -->

		<div id="home_widget_2" class="grid col-300">
			<?php responsive_widgets(); // responsive above widgets hook ?>

			<?php if ( !dynamic_sidebar( 'home-widget-2' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Standard', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'Proin non purus pharetra, tincidunt ligula ut, imperdiet nulla. Aenean turpis tortor, tempor ut rutrum sit amet, cursus eget sem. Proin laoreet nulla vitae ipsum varius rhoncus.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-2 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div><!-- end of .col-300 -->

		<div id="home_widget_3" class="grid col-300 fit">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if ( !dynamic_sidebar( 'home-widget-3' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Premium', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'Proin non purus pharetra, tincidunt ligula ut, imperdiet nulla. Aenean turpis tortor, tempor ut rutrum sit amet, cursus eget sem. Proin laoreet nulla vitae ipsum varius rhoncus.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-3 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div><!-- end of .col-300 fit -->
	</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>