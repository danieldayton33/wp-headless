<?php
// TODO: Register custom post types
// TODO: Register ACF fields/settings

add_action('init', function() {
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> 'Theme Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false,
            'show_in_graphql' => true,
        ));
        
        // TODO: Save for later usage
        // acf_add_options_sub_page(array(
        //     'page_title' 	=> 'Theme Header Settings',
        //     'menu_title'	=> 'Header',
        //     'parent_slug'	=> 'theme-general-settings',
        // ));
        
        // acf_add_options_sub_page(array(
        //     'page_title' 	=> 'Theme Footer Settings',
        //     'menu_title'	=> 'Footer',
        //     'parent_slug'	=> 'theme-general-settings',
        // ));
    }
});