<?php
/** Post Type: Services */

function register_services_post_type() {
	$labels = [
		"name" => __( "Services", "carimus" ),
		"singular_name" => __( "Services", "carimus" ),
	];

	$args = [
		"label" => __( "Services", "carimus" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"menu_icon" => "dashicons-embed-photo",
		'show_in_graphql' => true,
		'graphql_single_name' => 'service',
		'graphql_plural_name' => 'services',
	];

	register_post_type( "services", $args );
}

add_action('init', 'register_services_post_type');

/**
 * Post Type: Crew.
 */
function register_crew_post_type() {
	$labels = [
		"name" => __( "Crew", "carimus" ),
		"singular_name" => __( "Crew", "carimus" ),
	];

	$args = [
		"label" => __( "Crew", "carimus" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		'all_items'             => __( 'All Crew', 'carimus' ),
		'add_new_item'          => __( 'Add New Crew', 'carimus' ),
		'add_new'               => __( 'Add New Crew', 'carimus' ),
		'new_item'              => __( 'New Crew', 'carimus' ),
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"menu_icon" => "dashicons-businessperson",
		"query_var" => true,
		"supports" => [ "title", "thumbnail" ],
		'show_in_graphql' => true,
		'graphql_single_name' => 'crew',
		'graphql_plural_name' => 'crews',
	];

	register_post_type( "crew", $args );
}


add_action( 'init', 'register_crew_post_type' );

add_action('init', function() {
	$labels = [
		'name' => __( 'News' ),
		'singular_name' => __( 'News' ),
	];

	$args = [
		'label' => __( 'News' ),
		'labels' => $labels,
		'description' => '',
		'public' => true,
		'show_in_graphql' => true,
		'graphql_single_name' => 'news_s',
		'graphql_plural_name' => 'news',
		'supports' => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
		'taxonomies' => [ 'category' ],
		'menu_icon' => 'dashicons-megaphone',
	];

	register_post_type( 'news', $args );
});