<?php

/*
  Plugin Name: Find & Replace Ads Code
  Plugin URI: http://sarabjit-singh.com
  Description: a plugin to find and replace the ad code
  Version: 1.0
  Author: Sarabjit Singh
  Author URI: http://sarabjit-singh.com
  License: GPL2
 */


/* JS Script added to non-admin pages*/
add_action("wp_head", "wp_add_find_replace");

function wp_add_find_replace() {
    // Register the script
    wp_register_script( 'find_replace_handle', plugins_url('wp-find-replace-ads-code/find_replace.js') );
    // Localize the script with new data
    $translation_array = array(
        'find_replace_ads_code_iframe_src' => get_option( 'find_replace_ads_code_iframe_src' ),
        'find_replace_ads_code_floating_iframe_src' => get_option( 'find_replace_ads_code_floating_iframe_src' )
    );
    wp_localize_script( 'find_replace_handle', 'find_replaceObject', $translation_array );

    // Enqueued script with localized data.
    wp_enqueue_script( 'find_replace_handle' );

}


/* Blank JS Script added to admin pages*/
add_action( 'admin_head', 'wp_add_admin_script' );

function wp_add_admin_script() {
	echo '<script type="text/javascript" src="'. plugins_url('wp-find-replace-ads-code/admin_script.js').'"></script>';
}

/**
 * Register a custom menu page.
 */
function find_replace_ads_settings() {
    add_menu_page(
        __( 'Find Replace Ads', 'textdomain' ),
        'Find Replace Ads',
        'manage_options',
        'wp-find-replace-ads-code/plugin-settings.php',
        '',
        '',
        6
    );
    
}
add_action( 'admin_menu', 'find_replace_ads_settings' );

add_action( 'admin_init', 'register_find_replace_ads_settings' );

function register_find_replace_ads_settings() {
	//register plugin option settings
	register_setting( 'find-replace-ads-code-group', 'find_replace_ads_code_iframe_src' );
	register_setting( 'find-replace-ads-code-group', 'find_replace_ads_code_floating_iframe_src' );
}

?>