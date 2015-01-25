<?php
/*
Plugin Name: ModalPress
Plugin URI: http://www.modalpress.com
Description: ModalPress Wordpress info  popups
Author: Anthony Brown
Author URI: http://www.modalpress.com
Version: 1.0.0
*/
define("MODALPRESS_VERSION", '1.0.0');


include_once ''.dirname(__FILE__).'/post-type/modal.php';
include_once ''.dirname(__FILE__).'/admin/editor.php';
include_once ''.dirname(__FILE__).'/admin/license.php';
include_once ''.dirname(__FILE__).'/user/wp_footer.php';
include_once ''.dirname(__FILE__).'/user/ajax.php';
$modalpress = new modalpress;
add_action('wp_print_styles', array($modalpress ,'css'));
add_action('init', array($modalpress ,'js'));


register_activation_hook(''.dirname(__FILE__).'/index.php', array($modalpress,'activate_license') );
register_deactivation_hook(''.dirname(__FILE__).'/index.php', array($modalpress,'deactivate_license') );

class modalpress{
	

		function __construct(){
			
			$this->namesake = 'modalpress';
		
			$this->version = MODALPRESS_VERSION;
			$this->name = 'ModalPress';
			$this->item_name = $this->name;
			$this->license_key = trim( get_option(''.$this->namesake.'_license')); 
			$this->store_url = 'http://www.modalpress.com';
			
		
			
	
		if( !class_exists( 'EDD_SL_Plugin_Updater' ) ) {
			// load our custom updater if it doesn't already exist
			include( dirname( __FILE__ ) . '/EDD_SL_Plugin_Updater.php' );
		}
		
		// setup the updater
		$edd_updater = new EDD_SL_Plugin_Updater( $this->store_url, ''.dirname(__FILE__).'/index.php', array( 
				'version' 	=> $this->version, 		// current version number
				'license' 	=> $this->license_key, 	// license key (used get_option above to retrieve from DB)
				'item_name'     => $this->item_name, 	// name of this plugin
				'author' 	=> 'Anthony Brown'  // author of this plugin
			)
		);
			
		}

		function js(){
			
			wp_enqueue_script('jquery');
			wp_enqueue_script(''.$this->namesake.'-modalpress', plugins_url('/js/jquery.modalpress.js', __FILE__),array('jquery') );
			wp_localize_script(''.$this->namesake.'-modalpress','ajax_object', array('ajax_url'=>admin_url('admin-ajax.php'),'modalpress_images'=>plugins_url('/images/', __FILE__)));
		}
		
		function css(){
			
			wp_register_style( ''.$this->namesake.'-modalpress',plugins_url('/css/jquery.modalpress.css', __FILE__) );
		 	wp_enqueue_style( ''.$this->namesake.'-modalpress' );	
		}
		
		

		

# License stuff just ignore
function activate_license() {
		global $edd_options;
	
		if( get_option( ''.$this->namesake.'_license_active' ) == 'valid' )
			return;

		

		// data to send in our API request
		$api_params = array(
			'edd_action'=> 'activate_license',
			'license' 	=> trim( get_option(''.$this->namesake.'_license_key')),
			'item_name' => urlencode( $this->item_name ) // the name of our product in EDD
		);

		// Call the custom API.
		$response = wp_remote_get( add_query_arg( $api_params,$this->store_url ), array( 'timeout' => 15, 'body' => $api_params, 'sslverify' => false ) );

		// make sure the response came back okay
		if ( is_wp_error( $response ) )
			return false;

		// decode the license data
		$license_data = json_decode( wp_remote_retrieve_body( $response ) );
	
		update_option( ''.$this->namesake.'_license_active', $license_data->license );
		
	}
	
	
	function deactivate_license() {
		global $edd_options;
	
		// data to send in our API request
		$api_params = array(
			'edd_action'=> 'deactivate_license',
			'license' 	=> trim( get_option(''.$this->namesake.'_license_key')),
			'item_name' => urlencode( $this->item_name ) // the name of our product in EDD
		);


		// Call the custom API.
		$response = wp_remote_get( add_query_arg( $api_params,$this->store_url ), array( 'timeout' => 15, 'body' => $api_params, 'sslverify' => false ) );

		// decode the license data
		$license_data = json_decode( wp_remote_retrieve_body( $response ) );

		update_option(  ''.$this->namesake.'_license_active', $license_data->license );
		
	}
	
	
	
}

?>