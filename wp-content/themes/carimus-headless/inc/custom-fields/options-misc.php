<?php
/**
 * Add misc options field group to general settings page
 *
 * @package    Everest_Agency
 * @subpackage Everest_Agency_Core
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
		array(
			'key'                   => 'group_5b427b1227dcc',
			'title'                 => 'General Site Settings',
			'fields'                => array(
				array(
					'key'               => 'field_5b427b151e8c8',
					'label'             => 'Primary Site Logo',
					'name'              => 'site_logo_primary',
					'type'              => 'image',
					'instructions'      => 'The logo to show in the header and other places.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'return_format'     => 'url',
					'preview_size'      => 'medium',
					'library'           => 'all',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => '',
				),
				array(
					'key'               => 'ea_core_field_misc_default_header_image',
					'label'             => 'Default Header Image',
					'name'              => 'default_header_image',
					'type'              => 'image',
					'instructions'      => 'The default image to use in the header when one can\'t be resolved.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'return_format'     => 'url',
					'preview_size'      => 'thumbnail',
					'library'           => 'all',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => '',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'theme-general-settings',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => 1,
			'description'           => '',
		)
	);

endif;
