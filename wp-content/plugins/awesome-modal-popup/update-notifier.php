<?php
/**************************************************************
 *                                                            *
 *   Provides a notification to the user everytime            *
 *   your WordPress plugin is updated                         *
 *															  *
 *	 Based on the script by Unisphere:						  *
 *   https://github.com/unisphere/unisphere_notifier          *
 *                                                            *
 *   Author: Pippin Williamson                                *
 *   Profile: http://codecanyon.net/user/mordauk              *
 *   Follow me: http://twitter.com/pippinsplugins             *
 *                                                            *
 **************************************************************/
 
/*
	Replace XXX and xxx by your plugin prefix to prevent conflicts between plugins using this script.
*/

// Constants for the plugin name, folder and remote XML url
define( 'LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_NAME', 'TWI Awesome Modal/Popup' ); // The plugin name
define( 'LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_SHORT_NAME', 'TWI Awesome Modal/Popup' ); // The plugin short name, only if needed to make the menu item fit. Remove this if not needed
define( 'LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_FOLDER_NAME', 'awesome-modal-popup' ); // The plugin folder name
define( 'LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_FILE_NAME', 'awesome-modal-popup.php' ); // The plugin file name
define( 'LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_XML_FILE', 'http://khairul-alam.com/codecaneyon/updates/modal/notifier.xml' ); // The remote notifier XML file containing the latest version of the plugin and changelog
define( 'LOGO_AWESOME_POPUP_PLUGIN_NOTIFIER_CACHE_INTERVAL', 21600 ); // The time interval for the remote XML cache in the database (21600 seconds = 6 hours)
define( 'LOGO_AWESOME_POPUP_PLUGIN_NOTIFIER_CODECANYON_USERNAME', 'twibd' ); // Your Codecanyon username


// Adds an update notification to the WordPress Dashboard menu
function logo_awesome_popup_update_plugin_notifier_menu() {  
	if ( function_exists( 'simplexml_load_string' ) ) { // Stop if simplexml_load_string funtion isn't available
	    $xml 			= awesome_popup_get_latest_plugin_version( LOGO_AWESOME_POPUP_PLUGIN_NOTIFIER_CACHE_INTERVAL ); // Get the latest remote XML file on our server
		$plugin_data 	= get_plugin_data( WP_PLUGIN_DIR . '/' . LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_FOLDER_NAME . '/' . LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_FILE_NAME ); // Read plugin current version from the style.css

		if ( (string) $xml->latest > (string) $plugin_data['Version'] ) { // Compare current plugin version with the remote XML version
			if ( defined( 'LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_SHORT_NAME' ) ) {
				$menu_name = LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_SHORT_NAME;
			} else {
				$menu_name = LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_NAME;
			}
			add_dashboard_page( LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_NAME . ' Plugin Updates', $menu_name . ' <span class="update-plugins count-1"><span class="update-count">New Updates</span></span>', 'administrator', 'awesome-popup-plugin-update-notifier', 'awesome_popup_update_notifier');
		}
	}	
}
add_action('admin_menu', 'logo_awesome_popup_update_plugin_notifier_menu');  



// Adds an update notification to the WordPress 3.1+ Admin Bar
function awesome_popup_update_notifier_bar_menu() {
	if ( function_exists( 'simplexml_load_string' ) ) { // Stop if simplexml_load_string funtion isn't available
		global $wp_admin_bar, $wpdb;

		if ( ! is_super_admin() || ! is_admin_bar_showing() ) // Don't display notification in admin bar if it's disabled or the current user isn't an administrator
		return;

		$xml 		= awesome_popup_get_latest_plugin_version( LOGO_AWESOME_POPUP_PLUGIN_NOTIFIER_CACHE_INTERVAL ); // Get the latest remote XML file on our server
		$plugin_data 	= get_plugin_data( WP_PLUGIN_DIR . '/' . LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_FOLDER_NAME . '/' .LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_FILE_NAME ); // Read plugin current version from the main plugin file

		if( (string) $xml->latest > (string) $plugin_data['Version'] ) { // Compare current plugin version with the remote XML version
			$wp_admin_bar->add_menu( array( 'id' => 'plugin_update_notifier', 'title' => '<span>' . LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_NAME . ' <span id="ab-updates" style="color:red;">New Updates</span></span>', 'href' => get_admin_url() . 'index.php?page=awesome-popup-plugin-update-notifier' ) );
		}
	}
}
add_action( 'admin_bar_menu', 'awesome_popup_update_notifier_bar_menu', 1000 );



// The notifier page
function awesome_popup_update_notifier() { 
	$xml 			= awesome_popup_get_latest_plugin_version( LOGO_AWESOME_POPUP_PLUGIN_NOTIFIER_CACHE_INTERVAL ); // Get the latest remote XML file on our server
	$plugin_data 	= get_plugin_data( WP_PLUGIN_DIR . '/' . LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_FOLDER_NAME . '/' .LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_FILE_NAME ); // Read plugin current version from the main plugin file ?>

	<style>
		.update-nag { display: none; }
		#instructions {max-width: 670px;}
		h3.title {margin: 30px 0 0 0; padding: 30px 0 0 0; border-top: 1px solid #ddd;}
	</style>

	<div class="wrap">

		<div id="icon-tools" class="icon32"></div>
		<h2><?php echo LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_NAME ?> Plugin Updates</h2>
	    <div id="message" class="updated below-h2"><p><strong>There is a new version of the <?php echo LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_NAME; ?> plugin available.</strong> <em><strong><span style="color:red;">You have version <?php echo $plugin_data['Version']; ?> installed. Update to version <?php echo $xml->latest; ?>.</span></strong></em></p></div>
		
		<div id="instructions">
		    <h3>Update Download and Instructions</h3>
		    <p><strong>Please note:</strong> make a <strong>backup</strong> of the Plugin inside your WordPress installation folder <strong>/wp-content/plugins/<?php echo LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_FOLDER_NAME; ?>/</strong></p>
		    <p>To update the Plugin, login to <a href="http://www.codecanyon.net/?ref=<?php echo LOGO_AWESOME_POPUP_PLUGIN_NOTIFIER_CODECANYON_USERNAME; ?>" target="_blank">CodeCanyon</a>, head over to your <strong>downloads</strong> section and re-download the plugin like you did when you bought it.</p>
		    <p>Extract the zip's contents, look for the extracted plugin folder, and after you have all the new files upload them using FTP to the <strong>/wp-content/plugins/<?php echo LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_FOLDER_NAME; ?>/</strong> folder overwriting the old ones (this is why it's important to backup any changes you've made to the plugin files).</p>
		    <p>If you didn't make any changes to the plugin files, you are free to overwrite them with the new ones without the risk of losing any plugins settings, and backwards compatibility is guaranteed.</p>
		</div>
	    
	    <h3 class="title">Changelog</h3>
	    <?php echo $xml->changelog; ?>

	</div>
    
<?php } 



// Get the remote XML file contents and return its data (Version and Changelog)
// Uses the cached version if available and inside the time interval defined
function awesome_popup_get_latest_plugin_version( $interval ) {
	$notifier_file_url = LOGO_AWESOME_POPUP_NOTIFIER_PLUGIN_XML_FILE;	
	$db_cache_field = 'notifier-cache';
	$db_cache_field_last_updated = 'notifier-cache-last-updated';
	$last = get_option( $db_cache_field_last_updated );
	$now = time();
	// check the cache
	if ( ! $last || ( ( $now - $last ) > $interval ) ) {
		// cache doesn't exist, or is old, so refresh it
		if( function_exists( 'curl_init' ) ) { // if cURL is available, use it...
			$ch = curl_init( $notifier_file_url );
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt( $ch, CURLOPT_HEADER, 0 );
			curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );
			$cache = curl_exec( $ch );
			curl_close( $ch );
		} else {
			$cache = file_get_contents( $notifier_file_url ); // ...if not, use the common file_get_contents()
		}

		if ( $cache ) {			
			// we got good results	
			update_option( $db_cache_field, $cache );
			update_option( $db_cache_field_last_updated, time() );
		} 
		// read from the cache file
		$notifier_data = get_option( $db_cache_field );
	}
	else {
		// cache file is fresh enough, so read from it
		$notifier_data = get_option( $db_cache_field );
	}

	// Let's see if the $xml data was returned as we expected it to.
	// If it didn't, use the default 1.0 as the latest version so that we don't have problems when the remote server hosting the XML file is down
	if( strpos( (string) $notifier_data, '<notifier>' ) === false ) {
		$notifier_data = '<?xml version="1.0" encoding="UTF-8"?><notifier><latest>1.0</latest><changelog></changelog></notifier>';
	}

	// Load the remote XML data into a variable and return it
	$xml = simplexml_load_string( $notifier_data ); 

	return $xml;
}
