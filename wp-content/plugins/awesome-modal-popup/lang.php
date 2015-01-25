<?php
add_action('after_setup_theme', 'twi_awesome_popup');

function twi_awesome_popup()
{
	load_theme_textdomain('twi_awesome_popup', plugins_url() . '/lang/');
}