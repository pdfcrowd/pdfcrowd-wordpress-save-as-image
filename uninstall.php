<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @link       https://pdfcrowd.com/save-as-image-wordpress-plugin/
 * @since      1.0.0
 *
 * @package    Save_As_Image_Pdfcrowd
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

$options = get_option('save-as-image-pdfcrowd');

if(!empty($options['username']) && !empty($options['api_key'])) {
    // notify an user about removing Pdfcrowd plugin
    // so the user can delete Pdfcrowd API license
    $url = 'https://pdfcrowd.com/admin-api/api2/username:' . $options['username'] . '/wp-plugin-removed/';
    // small timeout so client doesn't wait too long
    $args = array(
        'method' => 'POST',
        'timeout' => 5,
        'headers' => array(
            'Authorization' => 'Basic ' . base64_encode($options['username'] . ':' . $options['api_key'])));
    wp_remote_post($url, $args);
}

delete_option('save-as-image-pdfcrowd');
