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

delete_option('save-as-image-pdfcrowd');
delete_option('save-as-image-pdfcrowd_encryption_secret');
