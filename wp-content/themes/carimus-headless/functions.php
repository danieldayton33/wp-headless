<?php

add_action( 'init', function() {
    register_nav_menu('main-nav',__( 'Main Nav' ));
});

// TODO: Register custom post types

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