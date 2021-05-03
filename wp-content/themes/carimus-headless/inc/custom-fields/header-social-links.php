<?php
/**
 * Add Social Links field group to header options page for ACF Pro
 *
 * @package    Everest_Agency
 * @subpackage Everest_Agency_Core
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
		array(
			'key'                   => 'group_5b295e581b7b9',
			'title'                 => 'Social Links',
			'fields'                => array(
				array(
					'key'               => 'field_5b295efdcc4eb',
					'label'             => 'Email',
					'name'              => 'email',
					'type'              => 'email',
					'instructions'      => 'Leave blank to hide.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
				),
				array(
					'key'               => 'field_5b295eeccc4ea',
					'label'             => 'Facebook URL',
					'name'              => 'facebook',
					'type'              => 'url',
					'instructions'      => 'Leave blank to hide.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_5b295f18cc4ec',
					'label'             => 'Twitter URL',
					'name'              => 'twitter',
					'type'              => 'url',
					'instructions'      => 'Leave blank to hide.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_5b295f25cc4ed',
					'label'             => 'Instagram URL',
					'name'              => 'instagram',
					'type'              => 'url',
					'instructions'      => 'Leave blank to hide.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_5b295f32cc4ee',
					'label'             => 'LinkedIn URL',
					'name'              => 'linkedin',
					'type'              => 'url',
					'instructions'      => 'Leave blank to hide.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_5b295f4acc4ef',
					'label'             => 'YouTube URL',
					'name'              => 'youtube',
					'type'              => 'url',
					'instructions'      => 'Leave blank to hide.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_5b295f56cc4f0',
					'label'             => 'Vimeo URL',
					'name'              => 'vimeo',
					'type'              => 'url',
					'instructions'      => 'Leave blank to hide.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'acf-options-header',
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
