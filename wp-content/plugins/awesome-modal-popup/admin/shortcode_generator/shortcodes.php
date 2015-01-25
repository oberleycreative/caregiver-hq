<?php

return array(

	'TWI Awesome Modal/Popup' => array(
		'elements' => array(

			'twi_awesome_popup_shortcode' => array(
				'title'   => __('TWI Awesome Modal/Popup Shortcode', 'twi_carousel'),
				'code'    => '[twi_awesome_popup_shortcode]<br/>'.__('Your Content','twi_carousel').'<br/>[/twi_awesome_popup_shortcode]',
				'attributes' => array(
									array(
											'name'  => 'twi_popup_effects',
											'type'  => 'select',
											'label' => __('Effects', 'twi_awesome_popup'),
											'items' => array(
											    array(
													'value' => 'from-below',
													'label' => __('From below','twi_awesome_popup')
												),
												array(
													'value' => 'from-above',
													'label' => __('From above','twi_awesome_popup')
												),
												array(
													'value' => 'slide-in-top',
													'label' => __('Slide in top','twi_awesome_popup')
												),
												array(
													'value' => 'slide-in-right',
													'label' => __('Slide in right','twi_awesome_popup')
												),
												array(
													'value' => 'slide-in-bottom',
													'label' => __('Slide in bottom','twi_awesome_popup')
												),
												array(
													'value' => 'slide-in-left',
													'label' => __('Slide in left','twi_awesome_popup')
												),
												array(
													'value' => 'newspaper',
													'label' => __('Newspaper 1','twi_awesome_popup')
												),
												array(
													'value' => 'newspaper2',
													'label' => __('Newspaper 2','twi_awesome_popup')
												),
												array(
													'value' => 'newspaper3',
													'label' => __('Newspaper 3','twi_awesome_popup')
												),
												array(
													'value' => 'newspaper4',
													'label' => __('Newspaper 4','twi_awesome_popup')
												),
												array(
													'value' => 'fade-in',
													'label' => __('Fade in','twi_awesome_popup')
												),
												array(
													'value' => 'super-scaled',
													'label' => __('Super scaled 1','twi_awesome_popup')
												),
												array(
													'value' => 'super-scaled1',
													'label' => __('Super scaled 2','twi_awesome_popup')
												),
												array(
													'value' => 'tada',
													'label' => __('Tada','twi_awesome_popup')
												),
												array(
													'value' => 'fall',
													'label' => 'Fall'
												),
												array(
													'value' => 'side-fall',
													'label' => __('Side fall','twi_awesome_popup')
												),
												array(
													'value' => 'flip-horizontal-3D',
													'label' => __('Flip horizontal 3D 1','twi_awesome_popup')
												),
												array(
													'value' => 'flip-horizontal-D',
													'label' => __('Flip horizontal 3D 2','twi_awesome_popup')
												),
												array(
													'value' => 'flip-vertical-3D',
													'label' => __('Flip vertical 3D 1','twi_awesome_popup')
												),
												array(
													'value' => 'flip-vertical-D',
													'label' => __('Flip vertical 3D 2','twi_awesome_popup')
												),
												array(
													'value' => 'sign-3D',
													'label' => __('Sign 3D 1','twi_awesome_popup')
												),
												array(
													'value' => 'sign-D',
													'label' => __('Sign 3D 2','twi_awesome_popup')
												),
												array(
													'value' => 'slit-3D',
													'label' => __('Slit 3D','twi_awesome_popup')
												),
												array(
													'value' => 'rotate-from-bottom-3D',
													'label' => __('Rotate from bottom 3D','twi_awesome_popup')
												),
												array(
													'value' => 'rotate-from-top-3D',
													'label' => __('Rotate from top 3D','twi_awesome_popup')
												),
												array(
													'value' => 'rotate-from-left-3D',
													'label' => __('Rotate from left 3D 1','twi_awesome_popup')
												),
												array(
													'value' => 'rotate-from-left-D',
													'label' => __('Rotate from left 3D 2','twi_awesome_popup')
												),
												array(
													'value' => 'rotate-from-right-3D',
													'label' => __('Rotate from right 3D 1','twi_awesome_popup')
												),
												array(
													'value' => 'rotate-from-right-D',
													'label' => __('Rotate from right 3D 2','twi_awesome_popup')
												),
												array(
													'value' => 'rotate-easing',
													'label' => __('Rotate easing','twi_awesome_popup')
												),
												array(
													'value' => 'bounce',
													'label' => __('Bounce','twi_awesome_popup')
												),
												array(
													'value' => 'flash',
													'label' => __('Flash','twi_awesome_popup')
												),
												array(
													'value' => 'pulse',
													'label' => __('Pulse','twi_awesome_popup')
												),
												array(
													'value' => 'rubberBand',
													'label' => __('Rubber Band','twi_awesome_popup')
												),
												array(
													'value' => 'shake',
													'label' => __('Shake','twi_awesome_popup')
												),
												array(
													'value' => 'swing',
													'label' => __('Swing','twi_awesome_popup')
												),
												array(
													'value' => 'tada',
													'label' => __('Tada','twi_awesome_popup')
												),
												array(
													'value' => 'wobble',
													'label' => __('Wobble','twi_awesome_popup')
												),
												array(
													'value' => 'bounceIn',
													'label' => __('Bounce In','twi_awesome_popup')
												),
												array(
													'value' => 'bounceInDown',
													'label' => __('Bounce In Down','twi_awesome_popup')
												),
												array(
													'value' => 'bounceInLeft',
													'label' => __('Bounce In Left','twi_awesome_popup')
												),
												array(
													'value' => 'bounceInRight',
													'label' => __('Bounce In Right','twi_awesome_popup')
												),
												array(
													'value' => 'bounceInUp',
													'label' => __('Bounce In Up','twi_awesome_popup')
												),
												array(
													'value' => 'fadeInDown',
													'label' => __('Fade In Down','twi_awesome_popup')
												),
												array(
													'value' => 'flip',
													'label' => __('Flip','twi_awesome_popup')
												),
												array(
													'value' => 'lightSpeedIn',
													'label' => __('Light Speed In','twi_awesome_popup')
												),
												array(
													'value' => 'rotateInDownLeft',
													'label' => __('Rotate In Down Left','twi_awesome_popup')
												),
												array(
													'value' => 'rotateInDownRight',
													'label' => __('Rotate In Down Right','twi_awesome_popup')
												),
												array(
													'value' => 'rotateInUpLeft',
													'label' => __('Rotate In Up Left','twi_awesome_popup')
												),
												array(
													'value' => 'rotateInUpRight',
													'label' => __('Rotate In Up Right','twi_awesome_popup')
												),
												array(
													'value' => 'wiggle',
													'label' => __('Wiggle','twi_awesome_popup')
												),
												array(
													'value' => 'twisterInDown',
													'label' => __('Twister In Down','twi_awesome_popup')
												),
												array(
													'value' => 'twisterInUp',
													'label' => __('Twister In Up','twi_awesome_popup')
												),
												array(
													'value' => 'vanishIn',
													'label' => __('Vanish In','twi_awesome_popup')
												),
												array(
													'value' => 'openDownLeftRetourn',
													'label' => __('Open Down Left Retourn','twi_awesome_popup')
												),
												array(
													'value' => 'openDownRightRetourn',
													'label' => __('Open Down Right Retourn','twi_awesome_popup')
												),
												array(
													'value' => 'openUpLeftRetourn',
													'label' => __('Open Up Left Retourn','twi_awesome_popup')
												),
												array(
													'value' => 'openUpRightRetourn',
													'label' => __('Open Up Right Retourn','twi_awesome_popup')
												),
												array(
													'value' => 'foolishIn',
													'label' => __('Foolish In','twi_awesome_popup')
												),
											),
											'default' => 'fade-in',
										),
										array(
											'type' => 'textbox',
											'name' => 'twi_close_button_text',
											'label' => __('Popup close button', 'twi_awesome_popup'),
											'default' => __('Close me!','twi_awesome_popup'),
										),
										array(
											'type' => 'textbox',
											'name' => 'twi_popup_link_text',
											'label' => __('Popup link text', 'twi_awesome_popup'),
											'default' => __('My modal link','twi_awesome_popup'),
										),
										array(
											'type' => 'color',
											'name' => 'twi_mo_bg',
											'label' => __('Overlay background', 'twi_awesome_popup'),
											'default' => '#000',
										),
										array(
											'type'    => 'slider',
											'name'    => 'twi_modal_opacity',
											'label'   => __('Modal opacity', 'twi_awesome_popup'),
											'min'     => '0',
											'max'     => '1',
											'default' => '0.3',
											'step'    => '0.01',
										),
										array(
											'type' => 'radiobutton',
											'name' => 'twi_overlap_close',
											'label' => __('Overlap click close', 'twi_awesome_popup'),
											'items' => array(
												array(
													'value' => 'true',
													'label' => 'Yes'
												),
												array(
													'value' => 'false',
													'label' => 'No'
											),
											),
											'default' => 'true',
										),
										
										array(
											'type' => 'radiobutton',
											'name' => 'twi_hide_close_button',
											'label' => __('Hide close button', 'twi_awesome_popup'),
											'items' => array(
												array(
													'value' => 'true',
													'label' => 'Yes'
												),
												array(
													'value' => 'false',
													'label' => 'No'
											),
											),
											'default' => 'false',
										),
			
				),
			),
		),
	),

);

/**
 * EOF
 */