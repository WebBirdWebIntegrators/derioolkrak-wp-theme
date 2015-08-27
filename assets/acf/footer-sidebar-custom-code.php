<?php

if( function_exists('acf_add_local_field_group') ):

$name_path = 'wbts__custom_body_code';

acf_add_local_field_group(array (
	'key' => 'group_footer_sidebar_custom_code',
	'title' => __('Footer Sidebar Custom Code','eagle'),
	'fields' => array (
		array (
			'key' => 'field_footer_sidebar_custom_code',
			'label' => false,
			'name' => 'footer_sidebar_custom_code',
      'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-settings',
			),
		),
	),
	'menu_order' => 30,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;

?>
