<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://pdfcrowd.com/wordpress/
 * @since      1.0.0
 *
 * @package    Save_As_Image_Pdfcrowd
 * @subpackage Save_As_Image_Pdfcrowd/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * @package    Save_As_Image_Pdfcrowd
 * @subpackage Save_As_Image_Pdfcrowd/admin
 * @author     Pdfcrowd <support@pdfcrowd.com>
 */
class Save_As_Image_Pdfcrowd_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct( $plugin_name, $version ) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {
        wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/save-as-image-pdfcrowd-admin.css', array( 'wp-color-picker' ), $this->version, 'all' );
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {
        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/save-as-image-pdfcrowd-admin.js', array( 'jquery', 'wp-color-picker' ), $this->version, false );
    }

    /**
    * Register the administration menu for this plugin into the WordPress Dashboard menu.
    *
    * @since    1.0.0
    */
    public function add_plugin_admin_menu() {
        $plugin_screen_hook_suffix = add_options_page(
            'Save as Image Setup',
            'Save as Image',
            'manage_options',
            $this->plugin_name,
            array($this, 'display_plugin_setup_page')
        );
    }

    public static function get_license_status($options) {
        if(!isset($options['username']) ||
           empty($options['username']) ||
           $options['username'] == 'demo') {
            return 'demo';
        }
        return 'active';
    }

    /**
     * Render the settings page for this plugin.
     *
     * @since    1.0.0
     */
    public function display_plugin_setup_page() {
        include_once( 'partials/save-as-image-pdfcrowd-admin-display.php' );
    }

    /**
     * Add settings action link to the plugins page.
     *
     * @since    1.0.0
     */
    public function add_action_links( $links ) {
        $options = get_option($this->plugin_name);
        if(self::get_license_status($options) == 'demo') {
            $lic_links = array(
                'activate_lic' => '<a href="https://pdfcrowd.com/user/sign_up/">' . __( 'Activate Pdfcrowd License', $this->plugin_name ) . '</a>'
            );
        } else {
            $lic_links = array(
                'delete_lic' => '<a class="delete" href="https://pdfcrowd.com/user/account/api2-license/">' . __( 'Delete Pdfcrowd License', $this->plugin_name ) . '</a>'
            );
        }
        return array_merge(
            array(
                'settings' => '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __( 'Settings', $this->plugin_name ) . '</a>'
            ),
            $lic_links,
            $links
        );
    }

    /**
     *  Save the plugin options
     *
     * @since    1.0.0
     */
    public function options_update() {
        register_setting($this->plugin_name, $this->plugin_name, array($this, 'validate'));
    }

    public function validate($input) {
        $options = get_option($this->plugin_name);
        $valid = $input;

        if (!isset($input['username']) || empty($input['username'])) {
            add_settings_error(
                'username',
                'empty_username',
                'Pdfcrowd username can not be empty'
            );
        }

        if (!isset($input['api_key']) || empty($input['api_key'])) {
            add_settings_error(
                'api_key',
                'empty_api_key',
                'Pdfcrowd API key can not be empty'
            );
        }

        if (isset($input['output_format']) && !empty($input['output_format'])) {
            $output_format = $input['output_format'];
            if (!preg_match("/(?i)^(png|jpg|gif|tiff|bmp|ico|ppm|pgm|pbm|pnm|psb|pct|ras|tga|sgi|sun|webp)$/", $output_format))
                add_settings_error(
                'output_format',
                'empty_output_format',
                pdfcrowd_create_invalid_value_message($output_format, 'Output Format', 'Allowed values are png, jpg, gif, tiff, bmp, ico, ppm, pgm, pbm, pnm, psb, pct, ras, tga, sgi, sun, webp.'));
            
        }
        $valid['output_format'] = $input['output_format'];

        $valid['no_background'] = (isset($input['no_background']) && !empty($input['no_background'])) ? 1: 0;

        $valid['disable_javascript'] = (isset($input['disable_javascript']) && !empty($input['disable_javascript'])) ? 1: 0;

        $valid['disable_image_loading'] = (isset($input['disable_image_loading']) && !empty($input['disable_image_loading'])) ? 1: 0;

        $valid['disable_remote_fonts'] = (isset($input['disable_remote_fonts']) && !empty($input['disable_remote_fonts'])) ? 1: 0;

        $valid['block_ads'] = (isset($input['block_ads']) && !empty($input['block_ads'])) ? 1: 0;

        $valid['default_encoding'] = $input['default_encoding'];

        $valid['http_auth_user_name'] = $input['http_auth_user_name'];

        $valid['http_auth_password'] = $input['http_auth_password'];

        $valid['use_print_media'] = (isset($input['use_print_media']) && !empty($input['use_print_media'])) ? 1: 0;

        $valid['no_xpdfcrowd_header'] = (isset($input['no_xpdfcrowd_header']) && !empty($input['no_xpdfcrowd_header'])) ? 1: 0;

        $valid['cookies'] = $input['cookies'];

        $valid['verify_ssl_certificates'] = (isset($input['verify_ssl_certificates']) && !empty($input['verify_ssl_certificates'])) ? 1: 0;

        $valid['fail_on_main_url_error'] = (isset($input['fail_on_main_url_error']) && !empty($input['fail_on_main_url_error'])) ? 1: 0;

        $valid['fail_on_any_url_error'] = (isset($input['fail_on_any_url_error']) && !empty($input['fail_on_any_url_error'])) ? 1: 0;

        if (isset($input['custom_javascript']) && !empty($input['custom_javascript'])) {
            $custom_javascript = $input['custom_javascript'];
            if (!($custom_javascript != null && $custom_javascript !== ''))
                add_settings_error(
                'custom_javascript',
                'empty_custom_javascript',
                pdfcrowd_create_invalid_value_message($custom_javascript, 'Custom Javascript', 'The string must not be empty.'));
            
        }
        $valid['custom_javascript'] = $input['custom_javascript'];

        if (isset($input['on_load_javascript']) && !empty($input['on_load_javascript'])) {
            $on_load_javascript = $input['on_load_javascript'];
            if (!($on_load_javascript != null && $on_load_javascript !== ''))
                add_settings_error(
                'on_load_javascript',
                'empty_on_load_javascript',
                pdfcrowd_create_invalid_value_message($on_load_javascript, 'On Load Javascript', 'The string must not be empty.'));
            
        }
        $valid['on_load_javascript'] = $input['on_load_javascript'];

        if (isset($input['custom_http_header']) && !empty($input['custom_http_header'])) {
            $custom_http_header = $input['custom_http_header'];
            if (!preg_match("/^.+:.+$/", $custom_http_header))
                add_settings_error(
                'custom_http_header',
                'empty_custom_http_header',
                pdfcrowd_create_invalid_value_message($custom_http_header, 'Custom Http Header', 'A string containing the header name and value separated by a colon.'));
            
        }
        $valid['custom_http_header'] = $input['custom_http_header'];

        if (isset($input['javascript_delay']) && !empty($input['javascript_delay'])) {
            $javascript_delay = $input['javascript_delay'];
            if (!(intval($javascript_delay) >= 0))
                add_settings_error(
                'javascript_delay',
                'empty_javascript_delay',
                pdfcrowd_create_invalid_value_message($javascript_delay, 'Javascript Delay', 'Must be a positive integer number or 0.'));
            
        }
        $valid['javascript_delay'] = $input['javascript_delay'];

        if (isset($input['element_to_convert']) && !empty($input['element_to_convert'])) {
            $selectors = $input['element_to_convert'];
            if (!($selectors != null && $selectors !== ''))
                add_settings_error(
                'selectors',
                'empty_selectors',
                pdfcrowd_create_invalid_value_message($selectors, 'Element To Convert', 'The string must not be empty.'));
            
        }
        $valid['element_to_convert'] = $input['element_to_convert'];

        if (isset($input['element_to_convert_mode']) && !empty($input['element_to_convert_mode'])) {
            $mode = $input['element_to_convert_mode'];
            if (!preg_match("/(?i)^(cut-out|remove-siblings|hide-siblings)$/", $mode))
                add_settings_error(
                'mode',
                'empty_mode',
                pdfcrowd_create_invalid_value_message($mode, 'Element To Convert Mode', 'Allowed values are cut-out, remove-siblings, hide-siblings.'));
            
        }
        $valid['element_to_convert_mode'] = $input['element_to_convert_mode'];

        if (isset($input['wait_for_element']) && !empty($input['wait_for_element'])) {
            $selectors = $input['wait_for_element'];
            if (!($selectors != null && $selectors !== ''))
                add_settings_error(
                'selectors',
                'empty_selectors',
                pdfcrowd_create_invalid_value_message($selectors, 'Wait For Element', 'The string must not be empty.'));
            
        }
        $valid['wait_for_element'] = $input['wait_for_element'];

        if (isset($input['screenshot_width']) && !empty($input['screenshot_width'])) {
            $screenshot_width = $input['screenshot_width'];
            if (!(intval($screenshot_width) >= 96 && intval($screenshot_width) <= 7680))
                add_settings_error(
                'screenshot_width',
                'empty_screenshot_width',
                pdfcrowd_create_invalid_value_message($screenshot_width, 'Screenshot Width', 'The value must be in the range 96-7680.'));
            
        }
        $valid['screenshot_width'] = $input['screenshot_width'];

        if (isset($input['screenshot_height']) && !empty($input['screenshot_height'])) {
            $screenshot_height = $input['screenshot_height'];
            if (!(intval($screenshot_height) > 0))
                add_settings_error(
                'screenshot_height',
                'empty_screenshot_height',
                pdfcrowd_create_invalid_value_message($screenshot_height, 'Screenshot Height', 'Must be a positive integer number.'));
            
        }
        $valid['screenshot_height'] = $input['screenshot_height'];

        if (isset($input['scale_factor']) && !empty($input['scale_factor'])) {
            $scale_factor = $input['scale_factor'];
            if (!(intval($scale_factor) > 0))
                add_settings_error(
                'scale_factor',
                'empty_scale_factor',
                pdfcrowd_create_invalid_value_message($scale_factor, 'Scale Factor', 'Must be a positive integer number.'));
            
        }
        $valid['scale_factor'] = $input['scale_factor'];

        $valid['debug_log'] = (isset($input['debug_log']) && !empty($input['debug_log'])) ? 1: 0;

        $valid['tag'] = $input['tag'];

        if (isset($input['http_proxy']) && !empty($input['http_proxy'])) {
            $http_proxy = $input['http_proxy'];
            if (!preg_match("/(?i)^([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z0-9]{1,}:\d+$/", $http_proxy))
                add_settings_error(
                'http_proxy',
                'empty_http_proxy',
                pdfcrowd_create_invalid_value_message($http_proxy, 'Http Proxy', 'The value must have format DOMAIN_OR_IP_ADDRESS:PORT.'));
            
        }
        $valid['http_proxy'] = $input['http_proxy'];

        if (isset($input['https_proxy']) && !empty($input['https_proxy'])) {
            $https_proxy = $input['https_proxy'];
            if (!preg_match("/(?i)^([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z0-9]{1,}:\d+$/", $https_proxy))
                add_settings_error(
                'https_proxy',
                'empty_https_proxy',
                pdfcrowd_create_invalid_value_message($https_proxy, 'Https Proxy', 'The value must have format DOMAIN_OR_IP_ADDRESS:PORT.'));
            
        }
        $valid['https_proxy'] = $input['https_proxy'];

        if (isset($input['client_certificate']) && !empty($input['client_certificate'])) {
            $client_certificate = $input['client_certificate'];
            if (!(filesize($client_certificate) > 0))
                add_settings_error(
                'client_certificate',
                'empty_client_certificate',
                pdfcrowd_create_invalid_value_message($client_certificate, 'Client Certificate', 'The file must exist and not be empty.'));
            
        }
        $valid['client_certificate'] = $input['client_certificate'];

        $valid['client_certificate_password'] = $input['client_certificate_password'];


        return $valid;
    }
}

/**
 *  Create error message for wrong option value
 *
 * @since    1.0.0
 */
if(!function_exists('pdfcrowd_create_invalid_value_message')) {
    function pdfcrowd_create_invalid_value_message($value, $field, $hint) {
        $message = "Invalid value '$value' for an option '$field'.";
        if($hint != null) {
            $message = $message . " " . $hint;
        }
        return $message;
    }
}
