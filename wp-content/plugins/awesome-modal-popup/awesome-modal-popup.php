<?php
/*
    Plugin Name: TWI Awesome Modal/Popup
	Plugin URI: http://khairul-alam.com
	Description: Simple, easy and super flexible wordpress modal/popup plugin.
	Version: 3.2
	Author: Khairul Alam
	Author URI: http://khairul-alam.com/
*/

define('TWI_AWESOME_POPUP_DIR', plugin_dir_path(__FILE__));
define('TWI_AWESOME_POPUP_URL', plugin_dir_url(__FILE__));

require_once (TWI_AWESOME_POPUP_DIR .'/config.php');

require_once (TWI_AWESOME_POPUP_DIR .'/lang.php');

require_once (TWI_AWESOME_POPUP_DIR .'/scripts_load.php');

if ( is_admin() ) {
require_once (TWI_AWESOME_POPUP_DIR .'/update-notifier.php');
}

require_once (TWI_AWESOME_POPUP_DIR .'/shortcode.php');