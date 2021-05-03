<?php

function carimus_setup_headless_theme() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'carimus_setup_headless_theme');


add_action( 'init', function() {
    register_nav_menu('main-nav',__( 'Main Nav' ));
});

require_once(__DIR__ . '/inc/custom-fields.php');
// Register Custom Post Types
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

add_action('init', function() {
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> 'Theme Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false,
            'show_in_graphql' => true,
            'type' => 'options_page',
        ));
    }
});