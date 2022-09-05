<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://pdfcrowd.com/save-as-image-wordpress-plugin/
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

        wp_enqueue_style($this->plugin_name . 'indicators',
                         plugin_dir_url( __FILE__ ) . '../public/css/save-as-image-pdfcrowd-indicators.css',
                         array(),
                         $this->version,
                         'all');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {
        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/save-as-image-pdfcrowd-admin.js', array( 'jquery', 'wp-color-picker' ), $this->version, false );

        wp_enqueue_script($this->plugin_name . 'indicators',
                          plugin_dir_url( __FILE__ ) . '../public/js/save-as-image-pdfcrowd-indicators.js',
                          array('jquery'),
                          $this->version,
                          false);
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

    /**
    * Build dict holding license status and other info.
    *
    * @since    1.0.0
    */
    private static function build_status($status, $product='', $credits=NULL) {
        return array('status' => $status,
                     'credits' => $credits,
                     'product' => $product);
    }

    /**
    * Get status of the Pdfcrowd API license.
    *
    * @since    1.0.0
    */
    public static function get_license_status($options) {
        if($options['license_type'] === 'demo' ||
           (empty($options['username']) && empty($options['api_key']))) {
            return null;
        }

        if(empty($options['username'])) {
            $options['username'] = 'null';
        } else if($options['username'] === 'demo' ||
                  $options['username'] === 'wp_demo') {
            return array('status' => 'invalid');
        }

        $url = 'https://pdfcrowd.com/admin-api/api2/username:' . $options['username'] . '/';
        // small timeout so client doesn't wait too long for the license getter
        $args = array(
            'timeout' => 3,
            'headers' => array(
                'Authorization' => 'Basic ' . base64_encode($options['username'] . ':' . $options['api_key'])));
        $response = wp_remote_get($url, $args);
        if(is_wp_error($response) || !is_array($response)) {
            return self::build_status('null');
        }

        $code = wp_remote_retrieve_response_code($response);
        if($code == 401) {
            return array('status' => 'invalid');
        }

        if($code == 404) {
            return self::build_status('', 'None');
        }

        if($code != 200) {
            return self::build_status('error');
        }

        $data = json_decode(wp_remote_retrieve_body($response));
        return self::build_status($data->status,
                                  $data->product->name,
                                  $data->credits);
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
        return array_merge(
            array(
                'settings' => '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __( 'Settings', $this->plugin_name ) . '</a>'
            ),
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
        $valid['version'] = 2110;

        if(isset($input['wp_submit_action'])) {
            if($input['wp_submit_action'] === 'reset') {
                delete_option('save-as-image-pdfcrowd');
                $valid = Save_As_Image_Pdfcrowd_Public::get_options();
                return $valid;
            }

            if($input['wp_submit_action'] === 'wizard') {
                set_transient('save_as_image_pdfcrowd_show_wizard', true, 30);
            }
        }

        if(isset($input['username'])) {
            $valid['username'] = trim($input['username']);
        }

        if(isset($input['api_key'])) {
            $valid['api_key'] = trim($input['api_key']);
        }

        if(isset($input['license_type'])) {
            switch($input['license_type']) {
            case 'regular':
                // check syntax of credentials
                if(empty($valid['username'])) {
                    add_settings_error(
                        'username',
                        'empty_username',
                        'Username can not be empty.');
                } else if(!preg_match("/^[\w.@+-]*$/", $valid['username'])) {
                    add_settings_error(
                        'username',
                        'invalid_username',
                        pdfcrowd_create_invalid_value_message(
                            $valid['username'],
                            'Username',
                            'Allowed values are alphanumeric, _, @, +, . and - characters.'));
                }
                if(empty($valid['api_key'])) {
                    add_settings_error(
                        'api_key',
                        'empty_api_key',
                        'API key can not be empty.');
                } else if(!preg_match("/^[a-f0-9]{32}$/", $valid['api_key'])) {
                    add_settings_error(
                        'api_key',
                        'invalid_api_key',
                        pdfcrowd_create_invalid_value_message(
                            $valid['api_key'],
                            'API key',
                            'Must be 32-characters long and have only letters a-f and numbers.'));
                }
                break;
            case 'demo':
                // reset credentials
                $valid['username'] = '';
                $valid['api_key'] = '';
                break;
            }
        }

        if (isset($input['output_format']) &&
            $input['output_format'] != '') {
            $output_format = $input['output_format'];
            if (!preg_match("/(?i)^(png|jpg|gif|tiff|bmp|ico|ppm|pgm|pbm|pnm|psb|pct|ras|tga|sgi|sun|webp)$/", $output_format))
                add_settings_error(
                'output_format',
                'empty_output_format',
                pdfcrowd_create_invalid_value_message($output_format, 'Output Format', 'Allowed values are png, jpg, gif, tiff, bmp, ico, ppm, pgm, pbm, pnm, psb, pct, ras, tga, sgi, sun, webp.'));
            
        }
        $valid['output_format'] = isset($input['output_format']) ? $input['output_format'] : '';

        $valid['use_print_media'] = empty($input['use_print_media']) ? 0 : 1;

        $valid['no_background'] = empty($input['no_background']) ? 0 : 1;

        $valid['disable_javascript'] = empty($input['disable_javascript']) ? 0 : 1;

        $valid['disable_image_loading'] = empty($input['disable_image_loading']) ? 0 : 1;

        $valid['disable_remote_fonts'] = empty($input['disable_remote_fonts']) ? 0 : 1;

        $valid['use_mobile_user_agent'] = empty($input['use_mobile_user_agent']) ? 0 : 1;

        if (isset($input['load_iframes']) &&
            $input['load_iframes'] != '') {
            $load_iframes = $input['load_iframes'];
            if (!preg_match("/(?i)^(all|same-origin|none)$/", $load_iframes))
                add_settings_error(
                'load_iframes',
                'empty_load_iframes',
                pdfcrowd_create_invalid_value_message($load_iframes, 'Load Iframes', 'Allowed values are all, same-origin, none.'));
            
        }
        $valid['load_iframes'] = isset($input['load_iframes']) ? $input['load_iframes'] : '';

        $valid['block_ads'] = empty($input['block_ads']) ? 0 : 1;

        $valid['default_encoding'] = isset($input['default_encoding']) ? $input['default_encoding'] : '';

        $valid['locale'] = isset($input['locale']) ? $input['locale'] : '';

        $valid['http_auth_user_name'] = isset($input['http_auth_user_name']) ? $input['http_auth_user_name'] : '';

        $valid['http_auth_password'] = isset($input['http_auth_password']) ? $input['http_auth_password'] : '';

        $valid['cookies'] = isset($input['cookies']) ? $input['cookies'] : '';

        $valid['verify_ssl_certificates'] = empty($input['verify_ssl_certificates']) ? 0 : 1;

        $valid['fail_on_main_url_error'] = empty($input['fail_on_main_url_error']) ? 0 : 1;

        $valid['fail_on_any_url_error'] = empty($input['fail_on_any_url_error']) ? 0 : 1;

        $valid['no_xpdfcrowd_header'] = empty($input['no_xpdfcrowd_header']) ? 0 : 1;

        if (isset($input['custom_javascript']) &&
            $input['custom_javascript'] != '') {
            $custom_javascript = $input['custom_javascript'];
            if (!($custom_javascript != null && $custom_javascript !== ''))
                add_settings_error(
                'custom_javascript',
                'empty_custom_javascript',
                pdfcrowd_create_invalid_value_message($custom_javascript, 'Custom Javascript', 'The string must not be empty.'));
            
        }
        $valid['custom_javascript'] = isset($input['custom_javascript']) ? $input['custom_javascript'] : '';

        if (isset($input['on_load_javascript']) &&
            $input['on_load_javascript'] != '') {
            $on_load_javascript = $input['on_load_javascript'];
            if (!($on_load_javascript != null && $on_load_javascript !== ''))
                add_settings_error(
                'on_load_javascript',
                'empty_on_load_javascript',
                pdfcrowd_create_invalid_value_message($on_load_javascript, 'On Load Javascript', 'The string must not be empty.'));
            
        }
        $valid['on_load_javascript'] = isset($input['on_load_javascript']) ? $input['on_load_javascript'] : '';

        if (isset($input['custom_http_header']) &&
            $input['custom_http_header'] != '') {
            $custom_http_header = $input['custom_http_header'];
            if (!preg_match("/^.+:.+$/", $custom_http_header))
                add_settings_error(
                'custom_http_header',
                'empty_custom_http_header',
                pdfcrowd_create_invalid_value_message($custom_http_header, 'Custom Http Header', 'A string containing the header name and value separated by a colon.'));
            
        }
        $valid['custom_http_header'] = isset($input['custom_http_header']) ? $input['custom_http_header'] : '';

        if (isset($input['javascript_delay']) &&
            $input['javascript_delay'] != '') {
            $javascript_delay = $input['javascript_delay'];
            if (!(intval($javascript_delay) >= 0))
                add_settings_error(
                'javascript_delay',
                'empty_javascript_delay',
                pdfcrowd_create_invalid_value_message($javascript_delay, 'Javascript Delay', 'Must be a positive integer number or 0.'));
            
        }
        $valid['javascript_delay'] = isset($input['javascript_delay']) ? $input['javascript_delay'] : '';

        if (isset($input['element_to_convert']) &&
            $input['element_to_convert'] != '') {
            $element_to_convert = $input['element_to_convert'];
            if (!($element_to_convert != null && $element_to_convert !== ''))
                add_settings_error(
                'element_to_convert',
                'empty_element_to_convert',
                pdfcrowd_create_invalid_value_message($element_to_convert, 'Element To Convert', 'The string must not be empty.'));
            
        }
        $valid['element_to_convert'] = isset($input['element_to_convert']) ? $input['element_to_convert'] : '';

        if (isset($input['element_to_convert_mode']) &&
            $input['element_to_convert_mode'] != '') {
            $element_to_convert_mode = $input['element_to_convert_mode'];
            if (!preg_match("/(?i)^(cut-out|remove-siblings|hide-siblings)$/", $element_to_convert_mode))
                add_settings_error(
                'element_to_convert_mode',
                'empty_element_to_convert_mode',
                pdfcrowd_create_invalid_value_message($element_to_convert_mode, 'Element To Convert Mode', 'Allowed values are cut-out, remove-siblings, hide-siblings.'));
            
        }
        $valid['element_to_convert_mode'] = isset($input['element_to_convert_mode']) ? $input['element_to_convert_mode'] : '';

        if (isset($input['wait_for_element']) &&
            $input['wait_for_element'] != '') {
            $wait_for_element = $input['wait_for_element'];
            if (!($wait_for_element != null && $wait_for_element !== ''))
                add_settings_error(
                'wait_for_element',
                'empty_wait_for_element',
                pdfcrowd_create_invalid_value_message($wait_for_element, 'Wait For Element', 'The string must not be empty.'));
            
        }
        $valid['wait_for_element'] = isset($input['wait_for_element']) ? $input['wait_for_element'] : '';

        $valid['auto_detect_element_to_convert'] = empty($input['auto_detect_element_to_convert']) ? 0 : 1;

        if (isset($input['readability_enhancements']) &&
            $input['readability_enhancements'] != '') {
            $readability_enhancements = $input['readability_enhancements'];
            if (!preg_match("/(?i)^(none|readability-v1|readability-v2|readability-v3)$/", $readability_enhancements))
                add_settings_error(
                'readability_enhancements',
                'empty_readability_enhancements',
                pdfcrowd_create_invalid_value_message($readability_enhancements, 'Readability Enhancements', 'Allowed values are none, readability-v1, readability-v2, readability-v3.'));
            
        }
        $valid['readability_enhancements'] = isset($input['readability_enhancements']) ? $input['readability_enhancements'] : '';

        if (isset($input['screenshot_width']) &&
            $input['screenshot_width'] != '') {
            $screenshot_width = $input['screenshot_width'];
            if (!(intval($screenshot_width) >= 96 && intval($screenshot_width) <= 65000))
                add_settings_error(
                'screenshot_width',
                'empty_screenshot_width',
                pdfcrowd_create_invalid_value_message($screenshot_width, 'Screenshot Width', 'The value must be in the range 96-65000.'));
            
        }
        $valid['screenshot_width'] = isset($input['screenshot_width']) ? $input['screenshot_width'] : '';

        if (isset($input['screenshot_height']) &&
            $input['screenshot_height'] != '') {
            $screenshot_height = $input['screenshot_height'];
            if (!(intval($screenshot_height) > 0))
                add_settings_error(
                'screenshot_height',
                'empty_screenshot_height',
                pdfcrowd_create_invalid_value_message($screenshot_height, 'Screenshot Height', 'Must be a positive integer number.'));
            
        }
        $valid['screenshot_height'] = isset($input['screenshot_height']) ? $input['screenshot_height'] : '';

        if (isset($input['scale_factor']) &&
            $input['scale_factor'] != '') {
            $scale_factor = $input['scale_factor'];
            if (!(intval($scale_factor) > 0))
                add_settings_error(
                'scale_factor',
                'empty_scale_factor',
                pdfcrowd_create_invalid_value_message($scale_factor, 'Scale Factor', 'Must be a positive integer number.'));
            
        }
        $valid['scale_factor'] = isset($input['scale_factor']) ? $input['scale_factor'] : '';

        if (isset($input['background_color']) &&
            $input['background_color'] != '') {
            $background_color = $input['background_color'];
            if (!preg_match("/^[0-9a-fA-F]{6,8}$/", $background_color))
                add_settings_error(
                'background_color',
                'empty_background_color',
                pdfcrowd_create_invalid_value_message($background_color, 'Background Color', 'The value must be in RRGGBB or RRGGBBAA hexadecimal format.'));
            
        }
        $valid['background_color'] = isset($input['background_color']) ? $input['background_color'] : '';

        $valid['data_string'] = isset($input['data_string']) ? $input['data_string'] : '';

        $valid['data_file'] = isset($input['data_file']) ? $input['data_file'] : '';

        if (isset($input['data_format']) &&
            $input['data_format'] != '') {
            $data_format = $input['data_format'];
            if (!preg_match("/(?i)^(auto|json|xml|yaml|csv)$/", $data_format))
                add_settings_error(
                'data_format',
                'empty_data_format',
                pdfcrowd_create_invalid_value_message($data_format, 'Data Format', 'Allowed values are auto, json, xml, yaml, csv.'));
            
        }
        $valid['data_format'] = isset($input['data_format']) ? $input['data_format'] : '';

        $valid['data_encoding'] = isset($input['data_encoding']) ? $input['data_encoding'] : '';

        $valid['data_ignore_undefined'] = empty($input['data_ignore_undefined']) ? 0 : 1;

        $valid['data_auto_escape'] = empty($input['data_auto_escape']) ? 0 : 1;

        $valid['data_trim_blocks'] = empty($input['data_trim_blocks']) ? 0 : 1;

        $valid['data_options'] = isset($input['data_options']) ? $input['data_options'] : '';

        $valid['debug_log'] = empty($input['debug_log']) ? 0 : 1;

        $valid['tag'] = isset($input['tag']) ? $input['tag'] : '';

        if (isset($input['http_proxy']) &&
            $input['http_proxy'] != '') {
            $http_proxy = $input['http_proxy'];
            if (!preg_match("/(?i)^([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z0-9]{1,}:\d+$/", $http_proxy))
                add_settings_error(
                'http_proxy',
                'empty_http_proxy',
                pdfcrowd_create_invalid_value_message($http_proxy, 'Http Proxy', 'The value must have format DOMAIN_OR_IP_ADDRESS:PORT.'));
            
        }
        $valid['http_proxy'] = isset($input['http_proxy']) ? $input['http_proxy'] : '';

        if (isset($input['https_proxy']) &&
            $input['https_proxy'] != '') {
            $https_proxy = $input['https_proxy'];
            if (!preg_match("/(?i)^([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z0-9]{1,}:\d+$/", $https_proxy))
                add_settings_error(
                'https_proxy',
                'empty_https_proxy',
                pdfcrowd_create_invalid_value_message($https_proxy, 'Https Proxy', 'The value must have format DOMAIN_OR_IP_ADDRESS:PORT.'));
            
        }
        $valid['https_proxy'] = isset($input['https_proxy']) ? $input['https_proxy'] : '';

        if (isset($input['client_certificate']) &&
            $input['client_certificate'] != '') {
            $client_certificate = $input['client_certificate'];
            if (!(filesize($client_certificate) > 0))
                add_settings_error(
                'client_certificate',
                'empty_client_certificate',
                pdfcrowd_create_invalid_value_message($client_certificate, 'Client Certificate', 'The file must exist and not be empty.'));
            
        }
        $valid['client_certificate'] = isset($input['client_certificate']) ? $input['client_certificate'] : '';

        $valid['client_certificate_password'] = isset($input['client_certificate_password']) ? $input['client_certificate_password'] : '';

        if (isset($input['converter_version']) &&
            $input['converter_version'] != '') {
            $converter_version = $input['converter_version'];
            if (!preg_match("/(?i)^(latest|20.10|18.10)$/", $converter_version))
                add_settings_error(
                'converter_version',
                'empty_converter_version',
                pdfcrowd_create_invalid_value_message($converter_version, 'Converter Version', 'Allowed values are latest, 20.10, 18.10.'));
            
        }
        $valid['converter_version'] = isset($input['converter_version']) ? $input['converter_version'] : '';

        $valid['use_http'] = empty($input['use_http']) ? 0 : 1;

        $valid['retry_count'] = isset($input['retry_count']) ? $input['retry_count'] : '';


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
