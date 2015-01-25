<?php
/**
  * Include Vafpress Framework
*/
require_once (TWI_AWESOME_POPUP_DIR .'/inc/bootstrap.php');

/**
  * Shortcode
*/

function twi_init_shortcodegenerator()
{
       // Built path to shortcode generator template array file
        $shortcode_path = TWI_AWESOME_POPUP_DIR . '/admin/shortcode_generator/shortcodes.php';
        // Initialize the ShortcodeGenerator's object
        $tmpl_shortcode = array(
        'name'           => 'twi_awesome_popup_shortcode',
        'template'       => $shortcode_path,
        'modal_title'    => __( 'TWI Awesome Modal/Popup Shortcodes', 'twi_awesome_popup'),
        'button_title'   => __( 'TWI Awesome Modal/Popup', 'twi_awesome_popup'),
        'types'          => array( '*' ),
        'main_image'     => TWI_AWESOME_POPUP_URL . '/images/shortcode.png',
        'sprite_image'   => TWI_AWESOME_POPUP_URL . '/images/shortcode.png',
     );
    $twi_awesome_popup_shortcode = new VP_ShortcodeGenerator($tmpl_shortcode);
}
// the safest hook to use, since Vafpress Framework may exists in Theme or Plugin
add_action( 'after_setup_theme', 'twi_init_shortcodegenerator' );