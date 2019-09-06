<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://pdfcrowd.com/save-as-pdf-image-wordpress-plugin/
 * @since      1.0.0
 *
 * @package    Save_As_Image_Pdfcrowd
 * @subpackage Save_As_Image_Pdfcrowd/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Save_As_Image_Pdfcrowd
 * @subpackage Save_As_Image_Pdfcrowd/public
 * @author     Pdfcrowd <support@pdfcrowd.com>
 */
class Save_As_Image_Pdfcrowd_Public {

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
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct( $plugin_name, $version ) {
        global $wpdb;

        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->table_name = $wpdb->prefix . "save-as-image-pdfcrowd";

        add_filter('the_content', array(&$this, 'show_button'));
        add_filter('the_excerpt', array(&$this, 'show_button'));
    }

    private $table_name;

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {
        wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/save-as-image-pdfcrowd-public.css', array(), $this->version, 'all' );

    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {
        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/save-as-image-pdfcrowd-public.js', array( 'jquery' ), $this->version, false );
    }

    public function setup_shortcodes() {
        add_shortcode('save_as_image_pdfcrowd',
                      array($this, 'save_as_image_pdfcrowd_shortcode'));
        add_shortcode('block_save_as_image_pdfcrowd',
                      array($this, 'block_save_as_image_pdfcrowd_shortcode'));
        add_action('wp_ajax_save_as_image_pdfcrowd', array($this, 'save_as_image_pdfcrowd'));
        add_action('wp_ajax_nopriv_save_as_image_pdfcrowd', array($this, 'save_as_image_pdfcrowd'));
        add_action('wp_head', array($this, 'add_ajaxurl'), 1);
    }

    function add_ajaxurl() { ?>
            <script type="text/javascript">
            //<![CDATA[
            var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
            //]]>
            </script>
        <?php
    }

    public static $DEFAULTS = array(
        'api_key' => '',
        'button_alignment' => 'center',
        'button_background_color' => '#007bff',
        'button_border_color' => '#007bff',
        'button_border_style' => 'solid',
        'button_border_width' => '1',
        'button_disposition' => 'attachment',
        'button_format' => 'image-text',
        'button_hidden' => '1',
        'button_image' => 'image1.svg',
        'button_image_height' => '24',
        'button_image_url' => '',
        'button_image_width' => '24',
        'button_margin_bottom' => '6',
        'button_margin_left' => '6',
        'button_margin_right' => '6',
        'button_margin_top' => '6',
        'button_on_categories' => '1',
        'button_on_front' => '1',
        'button_on_home' => '1',
        'button_on_pages' => '1',
        'button_on_posts' => '1',
        'button_on_taxonomies' => '1',
        'button_padding_bottom' => '6',
        'button_padding_left' => '6',
        'button_padding_right' => '6',
        'button_padding_top' => '6',
        'button_position' => 'below',
        'button_radius' => '3',
        'button_styling' => 'custom',
        'button_text' => 'Save as Image',
        'button_text_color' => '#fff',
        'button_text_size' => '14',
        'button_text_weight' => 'bold',
        'dev_mode' => '0',
        'output_format' => 'png',
        'use_print_media' => '1',
        'username' => '',
    );

    private static $API_OPTIONS = array(
        'output_format',
        'no_background',
        'disable_javascript',
        'disable_image_loading',
        'disable_remote_fonts',
        'block_ads',
        'default_encoding',
        'http_auth_user_name',
        'http_auth_password',
        'use_print_media',
        'no_xpdfcrowd_header',
        'cookies',
        'verify_ssl_certificates',
        'fail_on_main_url_error',
        'fail_on_any_url_error',
        'custom_javascript',
        'on_load_javascript',
        'custom_http_header',
        'javascript_delay',
        'element_to_convert',
        'element_to_convert_mode',
        'wait_for_element',
        'screenshot_width',
        'screenshot_height',
        'scale_factor',
        'debug_log',
        'tag',
        'http_proxy',
        'https_proxy',
        'client_certificate',
        'client_certificate_password',
        'url',
        'text'
    );

    private static $DEFAULT_IMAGES = array(
        'image1.svg' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzBweCIgaGVpZ2h0PSIzMHB4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3QgeD0iMS4zODA4IiB5PSIxLjI1NTIiIHdpZHRoPSIyNy42MTUiIGhlaWdodD0iMjYuMTA5IiBmaWxsPSIjZmZmIiBzdHJva2Utd2lkdGg9IjAiLz48cGF0aCBkPSJNMjkuOTI4LDI4LjU4M0gwVjBoMjkuOTI4VjI4LjU4MyBNMi44NzYsMjUuNzA3ICBIMjcuMDVWMi44NzZIMi44NzYgTTguMjE3LDcuMTA2YzEuNjExLDAsMi45MTYsMS4yMTYsMi45MTYsMi43MTZjMCwxLjUtMS4zMDUsMi43MTctMi45MTYsMi43MTdjLTEuNjEsMC0yLjkxNC0xLjIxNi0yLjkxNC0yLjcxNyAgQzUuMzAzLDguMzIyLDYuNjA3LDcuMTA2LDguMjE3LDcuMTA2eiBNNC4zNzQsMjEuMDIxbDQuMzItMy4yNGwyLjE5OSwxLjYwNWw4LjcxNS02LjQ1bDMuMjQsMi40MDhsMi4xOTgtMS42MDR2Ny4yODFINC4zNzR6IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiM1QjJEOEQiIGZpbGwtcnVsZT0iZXZlbm9kZCIgb3BhY2l0eT0iLjg5OCIvPjwvc3ZnPgo=',
        'image2.svg' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzBweCIgaGVpZ2h0PSIzMHB4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3QgeD0iMS4zODA4IiB5PSIxLjI1NTIiIHdpZHRoPSIyNy42MTUiIGhlaWdodD0iMjYuMTA5IiBmaWxsPSIjZmZmIiBzdHJva2Utd2lkdGg9IjAiLz48cGF0aCBkPSJtMS42MjI1IDI0LjM0OXM0LjIxMzQtNS45OTc5IDUuODczMy02LjA2MzZjMS40OTA3LTAuMDU5MDMgMS43OCAxLjY1MDMgNC4xMDczIDEuNDE2NCAyLjI3MDktMC4yMjgzMSAxLjg4MDUtNS4yNTczIDUuNjUyOC01LjMwMTcgMy43NzI0LTAuMDQ0MzkgMy4zOTc3IDMuNjA1MyA0LjgzNzYgMy42MTE4IDAuOTY5MTggMC4wMDQ0IDUuNzQ4My0zLjEwMTYgNS43NDgzLTMuMTAxNmwwLjA4ODc2IDguNjg0MnoiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iIzAwNjQwMCIgZmlsbC1ydWxlPSJldmVub2RkIiBvcGFjaXR5PSIuODk4IiBzdHJva2Utd2lkdGg9IjEuMDg5MyIvPjxwYXRoIGQ9Im05Ljg4MDkgNS4wMjAyYzIuMTM4MyAwIDMuODcwNSAxLjYxNCAzLjg3MDUgMy42MDUgMCAxLjk5MS0xLjczMjIgMy42MDYzLTMuODcwNSAzLjYwNjMtMi4xMzcgMC0zLjg2NzgtMS42MTQtMy44Njc4LTMuNjA2MyAwLTEuOTkxIDEuNzMwOC0zLjYwNSAzLjg2NzgtMy42MDV6IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNmZmE1MDAiIGZpbGwtcnVsZT0iZXZlbm9kZCIgb3BhY2l0eT0iLjg5OCIgc3Ryb2tlLXdpZHRoPSIxLjMyNzMiLz48cGF0aCBkPSJtMS45NTI3IDI0LjcxOXMyLjAzMTgtMS43MjA1IDMuMjg0MS0xLjk1MjdjMS41NDk1LTAuMjg3MyAzLjA4NTkgMC43MTk5NiA0LjY1OTggMC43OTg4MiAxLjI3MzcgMC4wNjM4MiAyLjU0MTQtMC4yNzY4MyAzLjgxNjYtMC4yNjYyNyAxLjIwMjcgMC4wMSAyLjM5NTcgMC40MDQ0NSAzLjU5NDcgMC4zMTA2NSAxLjM1MjEtMC4xMDU3NiAyLjYxMjktMC43NDc2OSAzLjk0OTctMC45NzYzNCAwLjkwODI2LTAuMTU1MzUgMS44Mzg2LTAuMzkxNDMgMi43NTE1LTAuMjY2MjggMS4xNzg1IDAuMTYxNTYgNC4wODI5IDEuNDY0NSA0LjA4MjkgMS40NjQ1bDFlLTYgMi45NzM0LTI2LjAwNi0wLjMxMDY1eiIgZmlsbD0iIzQwZTBkMCIvPjxwYXRoIGQ9Ik0gMjkuOTI4LDI4LjU4MyBIIDAgViAwIEggMjkuOTI4IFYgMjguNTgzIE0gMi44NzYsMjUuNzA3IEggMjcuMDUgViAyLjg3NiBIIDIuODc2IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiM1YjJkOGQiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPgo=',
        'image3.svg' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzBweCIgaGVpZ2h0PSIzMHB4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIwIj48cmVjdCB4PSIyMi4yOTIiIHk9IjkuMTQ2MyIgd2lkdGg9IjYuNjE0NCIgaGVpZ2h0PSIxOS4wNTYiLz48cmVjdCB4PSI3LjAzMTIiIHk9IjEuNTA2IiB3aWR0aD0iMTUuODMzIiBoZWlnaHQ9IjI2Ljc4NiIvPjxyZWN0IHg9Ii43ODEyNSIgeT0iNy41IiB3aWR0aD0iMTguNzUiIGhlaWdodD0iMTYuNTY3Ii8+PC9nPjxwb2x5bGluZSBwb2ludHM9IjIuOTU0IDIwLjMzMSA1Ljg2NyAxOC4xNDUgNy4zNTIgMTkuMjI5IDEzLjIzNiAxNC44NzUgMTUuNDIyIDE2LjUgMTYuOTA1IDE1LjQxNyAxNi45MDUgMjAuMzMxIDIuOTU0IDIwLjMzMSIgZmlsbD0iIzVCMkQ4RCIgb3BhY2l0eT0iLjg5OCIvPjxwYXRoIGQ9Im01LjU0NyAxMC45MzljMS4wODUgMCAxLjk2NyAwLjgyMiAxLjk2NyAxLjgzMyAwIDEuMDE0LTAuODgyIDEuODMzLTEuOTY3IDEuODMzLTEuMDg4IDAtMS45NjgtMC44MTktMS45NjgtMS44MzMgMC0xLjAxMSAwLjg4LTEuODMzIDEuOTY4LTEuODMzIiBmaWxsPSIjNUIyRDhEIiBvcGFjaXR5PSIuODk4Ii8+PHBhdGggZD0ibTI4LjY3NiA3LjU4LTUuNDU0LTYuMzI3LTEuMDgyLTEuMjUzaC0xMi44ODdjLTEuNzMxIDAtMy4xMzIgMS40MDEtMy4xMzIgMy4xMzJ2My45ODFoMS45NDFsLTFlLTMgLTMuMjE4YzRlLTMgLTAuOTc0IDAuNzg2LTEuNzYxIDEuNzU3LTEuNzYxbDExLjAyNC0wLjAxdjUuMjIyYzJlLTMgMS45NDUgMS41NzIgMy41MiAzLjUxOCAzLjUyaDMuODE2bC0wLjE4NiAxNS4wNjVjLTZlLTMgMC45NjktMC43ODggMS43NTEtMS43NTkgMS43NTlsLTE2LjU1Mi04ZS0zYy0wLjg4NiAwLTEuNTk4LTAuODctMS42MDQtMS45Mzl2LTEuMjc3aC0xLjk0NHYxLjkwMWMwIDEuOTE0IDEuMjggMy40NjUgMi44NTMgMy40NjVsMTcuODEyLTVlLTNjMS43MzIgMCAzLjEzNC0xLjQwNiAzLjEzNC0zLjEzNHYtMTcuNjU1bC0xLjI1NC0xLjQ1OCIgZmlsbD0iIzQzNDQ0MCIvPjxwYXRoIGQ9Ik0yMC4yMDEsMjUuNDM3SDBWNi4xNDNoMjAuMjAxVjI1LjQzNyBNMS45NCwyMy40OTRoMTYuMzE5VjguMDg1SDEuOTQiIGZpbGw9IiM1QjJEOEQiLz48L3N2Zz4K',
        'image4.svg' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkuNzE0IiBoZWlnaHQ9IjI3LjQwOCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0xLjAwMDYgMSAxMi40NCAwLjA5NTg3OSA1LjI3MzMgNi40MjM5LTAuMDcxOTEgMTguODg4aC0xNy42NDJ6IiBmaWxsPSIjZmZmYWZhIi8+PHBhdGggZD0ibTEyLjY5OCAwLjkwNDA5IDAuMzM1NTggNi40NzE4IDUuODAwNyAwLjMzNTU4eiIgZmlsbD0iIzY5Njk2OSIvPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC02Ljc2NTYgLTIuNzYzNykiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGcgZmlsbD0iIzkyOTI5MiI+PHBhdGggZD0ibTE5LjUgM2gtMTAuNDk3Yy0xLjEwNjEgMC0yLjAwMjggMC44OTgzNC0yLjAwMjggMi4wMDczdjIyLjk4NWMwIDEuMTA4NiAwLjg5MDkzIDIuMDA3MyAxLjk5NzQgMi4wMDczaDE1LjAwNWMxLjEwMzEgMCAxLjk5NzQtMC44OTgyMSAxLjk5NzQtMS45OTA4di0xOC4wMDlsLTYtN3ptLTAuNSAxaC0xMC4wMDRjLTAuNTQ5ODQgMC0wLjk5NTU4IDAuNDU1MjYtMC45OTU1OCAwLjk5NTQ2djIzLjAwOWMwIDAuNTQ5NzggMC40NTQ3MSAwLjk5NTQ2IDAuOTk5OTYgMC45OTU0NmgxNWMwLjU1MjI2IDAgMC45OTk5Ni0wLjQ0NDk1IDAuOTk5OTYtMC45OTM0di0xNy4wMDdoLTQuMDAyMWMtMS4xMDM0IDAtMS45OTc5LTAuODg2NTYtMS45OTc5LTIuMDA1OXptMSAwLjV2NC40OTEyYzAgMC41NTcxNCAwLjQ1MDY1IDEuMDA4OCAwLjk5Njc0IDEuMDA4OGgzLjcwMzJ6Ii8+PC9nPjxwYXRoIGQ9Im0yMS45NzYgMjMuMDM5di02LjA0NTdoLTExdjdsMi41LTIgMS40NTc5IDEuMjQ5NyAzLjYzNTEtMy4yNDk3em0tMTItNy4wNDU3djEwaDEzdi0xMHptNCA0YzAuNTUyMjggMCAxLTAuNDQ3NzIgMS0xcy0wLjQ0NzcyLTEtMS0xLTEgMC40NDc3Mi0xIDEgMC40NDc3MiAxIDEgMXoiIGZpbGw9IiM1YjJkOGQiLz48cGF0aCBkPSJtMTAgN2g3IiBzdHJva2U9IiM4MDgwODAiIHN0cm9rZS13aWR0aD0iMXB4Ii8+PHBhdGggZD0ibTEwIDEwaDUiIHN0cm9rZT0iIzgwODA4MCIgc3Ryb2tlLXdpZHRoPSIxcHgiLz48L2c+PC9zdmc+Cg==',
        'pdfcrowd.svg' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTkuMjI3IiBoZWlnaHQ9IjQzLjI1NiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03My44MDIgLTM4Ni4wNikiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDEuNzk0OCAwIDAgMS43OTQ4IC0yNjI2LjUgLTIxMi4wNikiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmOTUwMCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0ibTE1MTQuNSAzMzUuODZjMC40NDI2IDAuMDU0IDEuMjM2Ni0wLjI0MzM2IDEuMDAwMiAwLjQ4OTY1djE4LjUxMWMtMC40NDI2LTAuMDU0LTEuMjM2NiAwLjI0MzM3LTEuMDAwMi0wLjQ4OTY1di0xOC41MTF6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC45OTk4Ii8+PHBhdGggZD0ibTE1MDYuMyAzNDQuNTRoMS40NzQ4djEwLjU1NWgtMS40NzQ4di0xMC41NTV6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC41MjUxIi8+PHBhdGggZD0ibTE1MjIuNCAzMzkuNzhjMC4zNzU1IDAuMTIzMSAxLjI5ODYtMC4zMDEzMyAxLjE2OTQgMC4zMjY0M3YxNC44NDNjLTAuMzc1NS0wLjEyMzExLTEuMjk4NiAwLjMwMTMzLTEuMTY5NC0wLjMyNjQzdi0xNC44NDN6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC44MzA2Ii8+PHBhdGggZD0ibTE1MzUuMSAzNTMuMjh2Mi4xNjQ5aC01LjE2NDl2LTIuMTY0OWg1LjE2NDl6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iMy44MzUxIi8+PC9nPjwvZz48L3N2Zz4K',
    );

    private static $ERROR_MESSAGES = array(
        400 => "The user sent an invalid request.",
        401 => "Authentication is required and has failed or has not yet been provided or your license does not exist.",
        403 => "Your license is suspended or there are no credits left.",
        405 => "The method specified in the request is not allowed. The request method must be POST.",
        413 => "<p>The size limit for the uploaded data is 50MB.</p> <p>You can zip your HTML to avoid this error.</p>
",
        429 => "The user has sent too many requests in a given amount of time (rate limiting).",
        430 => "<p>The limit of max concurrent requests was exceeded.</p>",
        452 => "There is nothing specified to be converted.",
        453 => "Some conversion option is unknown. See details in HTTP response body.",
        454 => "The input is too complex or large. It can not be converted. Try to simplify your input data.",
        455 => "The conversion can not be finished due to a system error.",
        456 => "The input file is not specified correctly. Files are accepted only in multipart POST requests.",
        457 => "The type of the input file is unknown. The file has no extension.",
        458 => "<p>The request was aborted because it took long time.</p> <p>A typical cause of this error is too many images in the HTML page which take too long to download. Another cause might be a long running JavaScript.</p> <p>Try to simplify your input data or speed up the page load time.</p>
",
        459 => "The archive uploaded can not be accepted. It is too large, corrupted or contains symbolic links.",
        460 => "The output is too large. Try to simplify your input data or compress images.",
        470 => "A conversion option is set to an invalid value.",
        471 => "The converted URL can not be navigated to.",
        472 => "Exceeded the maximum number of sub-requests during a conversion.",
        473 => "The main frame loaded with an HTTP code >= 400.",
        474 => "The URL loaded with an HTTP code >= 400 or some requests are still pending. See details in a debug log.",
        475 => "The request was aborted because the custom JavaScript took long time.",
        476 => "The element specified for print or wait was not found in the input document.",
        477 => "The input document type is unknown or not supported. For example, the HTML content type should be text/html.",
        478 => "The URL hostname could not be resolved.",
        479 => "The URL is invalid.",
        480 => "The converter could not establish an HTTPS connection because of an invalid SSL certificate.",
        481 => "<p>There was a problem connecting to Pdfcrowd servers over HTTPS. This could be caused by several reasons, one of them is that your local CA certificate store is out of date or not configured correctly.</p> <p>An alternative is to use the API over HTTP. The HTTP mode can be enabled by the <a href='/doc/api/method-index/#html_to_pdf_set_use_http'>setUseHttp</a> method.<p>
",
        502 => "The 502 status code indicates a temporary network issue. Try the request again.",
    );

    private function get_options() {
        return get_option($this->plugin_name, self::$DEFAULTS);
    }

    private static function rect_to_style($prefix, $options) {
        $result = '';
        foreach(array('top', 'right', 'bottom', 'left') as $d) {
            $value = $options["button_{$prefix}_{$d}"];
            if(strlen($value)) {
                $result .= "{$prefix}-{$d}: {$value}px; ";
            }
        }
        return $result;
    }

    public static function create_button_from_style(
        $options, $custom_options, $content='') {
        $image = '';
        if(strpos($options['button_format'], 'image') !== false) {
            $image_style = "style='width: {$options['button_image_width']}px; height: {$options['button_image_height']}px;'";
            $image_url = $options['button_image'] == 'custom_image' ? $options['button_image_url'] : self::$DEFAULT_IMAGES[$options['button_image']];
            $image = "<img $image_style src=\"$image_url\"/>";
        }

        $btn_style = self::rect_to_style('margin', $options);

        $classes = 'save-as-image-pdfcrowd-button-wrap';
        if(isset($options['button_hidden']) && $options['button_hidden'] == 1) {
            $classes .= ' pdfcrowd-remove';
        }
        if($options['button_styling'] == 'custom') {
            $btn_style .= self::rect_to_style('padding', $options);
            if(strlen($options['button_text_size'])) {
                $btn_style .= "font-size: {$options['button_text_size']}px; ";
            }
            if(strlen($options['button_text_weight'])) {
                $btn_style .= "font-weight: {$options['button_text_weight']}; ";
            }
            if(strlen($options['button_text_color'])) {
                $btn_style .= "color: {$options['button_text_color']}; ";
            }
            if(strlen($options['button_background_color'])) {
                $btn_style .= "background-color: {$options['button_background_color']}; ";
            }
            if(strlen($options['button_border_color'])) {
                $btn_style .= "border-color: {$options['button_border_color']}; ";
            }
            if(strlen($options['button_border_style'])) {
                $btn_style .= "border-style: {$options['button_border_style']}; ";
            }
            if(strlen($options['button_border_width'])) {
                $btn_style .= "border-width: {$options['button_border_width']}px; ";
            }
            if(strlen($options['button_radius'])) {
                $btn_style .= "border-radius: {$options['button_radius']}px; ";
            }
            $classes .= ' save-as-image-pdfcrowd-reset';
        }

        $div_style = '';
        if($options['button_alignment']) {
            $div_style .= "text-align: {$options['button_alignment']}; ";
        }
        if($options['button_position'] == 'left') {
            $div_style .= "float: left; ";
        } elseif($options['button_position'] == 'right') {
            $div_style .= "float: right; ";
        }

        if(!empty($btn_style)) {
            $btn_style = " style='{$btn_style}'";
        }
        if(!empty($div_style)) {
            $div_style = " style='{$div_style}'";
        }
        $button = "<div class='$classes'{$div_style}><div class='save-as-image-pdfcrowd-button'{$btn_style} onclick='window.SaveAsImagePdfcrowd(\"$custom_options\");'>";

        $button_content = '';
        switch($options['button_format']) {
        case 'image-text':
            $button_content = $image . '&nbsp;' . $options['button_text'];
            break;
        case 'text-image':
            $button_content = $options['button_text'] . '&nbsp;' . $image;
            break;
        case 'text':
            $button_content = $options['button_text'];
            break;
        case 'image':
            $button_content = $image;
            break;
        }

        $button .= $button_content . "</div></div>";

        if($options['button_position'] == 'below') {
            return $content . $button;
        }
        return $button . $content;
    }

    private function create_button($options, $custom_options, $content='') {
        // serialize custom attributes to string
        $custom_options = $custom_options ? $this->encrypt(serialize($custom_options), $options['api_key']) : '';

        return $this->create_button_from_style($options,
                                               urlencode($custom_options),
                                               $content);
    }

    function show_button($content) {
        $options = $this->get_options();

        if(!(
            (is_home() && isset($options['button_on_home']) && $options['button_on_home']) ||
            (is_front_page() && isset($options['button_on_front']) && $options['button_on_front']) ||
            (!is_home() && !is_front_page() && is_page() && isset($options['button_on_pages']) && $options['button_on_pages']) ||
            (is_single() && isset($options['button_on_posts']) && $options['button_on_posts']) ||
            (is_category() && isset($options['button_on_categories']) && $options['button_on_categories']) ||
            (is_tax() && isset($options['button_on_taxonomies']) && $options['button_on_taxonomies'])
        )) return $content;

        return $this->create_button($options,
                                    array('url' => get_permalink()),
                                    $content);
    }

    private function eval_shortcode($attrs, $content, $custom_options) {
        // merge attrs with the default options defined on the settings page
        $options = $this->get_options();

        if($attrs) {
            foreach($attrs as $key => $value) {
                if(self::starts_with($key, 'button_')) {
                    $options[$key] = $value;
                } else {
                    $custom_options[$key] = $value;
                }
            }
        }

        return $this->create_button($options, $custom_options, $content);
    }

    function save_as_image_pdfcrowd_shortcode($attrs = array(), $content = null) {
        $custom_options = array('url' => get_permalink());
        return $this->eval_shortcode($attrs, $content, $custom_options);
   }

    function block_save_as_image_pdfcrowd_shortcode($attrs = array(), $content = null) {
        // merge attrs with the default options defined on the settings page
        $options = $this->get_options();

        // run shortcode parser recursively
        $content = do_shortcode($content);

        $custom_options = array('text' => $content);
        if(!isset($attrs['output_name'])) {
            // add url so default name can be created
            $custom_options['url'] = get_permalink();
        }
        return $this->eval_shortcode($attrs, $content, $custom_options);
    }

    private static function embed_styles($html) {
        $my_domain = $_SERVER['SERVER_NAME'];
        $output = preg_replace_callback(
            "/(?i)\<link rel=[\'\"]stylesheet[\'\"](?<pre>.*?)href=[\'\"](?<url>https?:\/\/{$my_domain}.*?)[\'\"](?<post>.*?)\/\>/",
            function ($match) {
                $content = wp_remote_retrieve_body(wp_remote_get($match['url']));
                return '<style ' . $match['pre'] . $match['post'] . ">\r\n" . $content . '</style>';
            },
            $html);
        return $output ? $output : $html;
    }

    private static $MIME_TYPES = array(
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'gif' => 'image/gif',
        'tiff' => 'image/tiff',
        'bmp' => 'image/x-ms-bmp',
        'ico' => 'image/vnd.microsoft.icon',
        'ppm' => 'image/x-portable-pixmap',
        'pgm' => 'image/x-portable-graymap',
        'pbm' => 'image/x-portable-bitmap',
        'pnm' => 'image/x-portable-anymap',
        'ras' => 'image/x-cmu-raster',
        'webp' => 'image/webp',
    );

    private function get_mime_type($format) {
        return isset(self::$MIME_TYPES[$format]) ? self::$MIME_TYPES[$format] : 'application/octet-stream';
    }

    private function get_output_name($options) {
        if(isset($options['output_name'])) return $options['output_name'];

        // create the default file name
        $page_name = explode('/', $options['url']);
        $i = count($page_name) - 1;
        while($i >= 0) {
            $part = explode('#', explode('?', $page_name[$i])[0])[0];
            if($part != '') {
                $page_name = $part;
                break;
            }
            --$i;
        }
        if($i < 0) {
            $page_name = 'generated';
        }
        $format = isset($options['output_format']) ? $options['output_format'] : 'png';
        return $page_name . ".{$format}";
    }

    private static function add_file_field($name, $file_name, $data, $boundary, &$body) {
        $body .= "--" . $boundary . "\r\n";
        $body .= 'Content-Disposition: form-data; name="' . $name . '";' . ' filename="' . $file_name . '"' . "\r\n";
        $body .= 'Content-Type: application/octet-stream' . "\r\n";
        $body .= "\r\n";
        $body .= $data . "\r\n";
    }

    private static function build_body($fields, $files, $boundary) {
        $body = '';

        foreach ($fields as $name => $content) {
            $body .= "--" . $boundary . "\r\n";
            $body .= 'Content-Disposition: form-data; name="' . $name . '"' . "\r\n\r\n";
            $body .= $content . "\r\n";
        }

        foreach ($files as $name => $file_name) {
            self::add_file_field($name, $file_name,
                                 file_get_contents($file_name),
                                 $boundary,
                                 $body);
        }

        return $body . "--" . $boundary . "--\r\n";
    }

    private static function starts_with($string, $startString)
    {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
    }

    public static function do_post_request($options) {
        $auth = 'Basic ' . base64_encode(
            $options['username'] . ':' . $options['api_key']);

        $boundary = wp_generate_password(24);

        global $wp_version;
        $headers = array(
            'Authorization' => $auth,
            'Content-Type' => 'multipart/form-data; boundary=' . $boundary,
            'User-Agent' => 'pdfcrowd_wordpress_plugin/1.0.0 ('
            . $wp_version . '/' . phpversion() . ')'
        );

        if(!empty($options['dev_mode'])) {
            // use convert string method instead
            $html = null;
            if(isset($options['text'])) {
                $html = $options['text'];
            } else {
                $html = wp_remote_retrieve_body(wp_remote_get($options['url']));
            }

            $options['text'] = self::embed_styles($html);
        }

        $fields = array();
        $files = array();

        // configure the conversion
        foreach($options as $key => $value) {
            if(!in_array($key, self::$API_OPTIONS) || $value == '') {
                // ignore empty values
                continue;
            }

            if($key == 'url') {
                // use url only if text is not set
                if(!isset($options['text'])) {
                    $fields[$key] = $value;
                }
            } elseif(
                $key == 'client_certificate' ) {
                $files[$key] = $value;
            } else {
                // use only valid Pdfcrowd options
                $fields[$key] = $value;
            }
        }

        $args = array(
            'method' => 'POST',
            'timeout' => 300,
            'headers' => $headers,
            'body' => self::build_body($fields, $files, $boundary)
        );

        $protocol = (isset($options['use_http']) && $options['use_http'] == 1)
                  ? 'http' : 'https';

        $retry_count = (isset($options['retry_count']) &&
                        !empty($options['retry_count']) &&
                        $options['retry_count'] > 0)
                     ? $options['retry_count'] : 0;

        $error = null;
        while($retry_count >= 0) {
            $response = wp_remote_post(
                $protocol . '://api.pdfcrowd.com/convert/', $args);
            if(is_wp_error($response)) {
                if($response->get_error_code() != 502) {
                    return $response;
                }
                $error = $response;
            } else {
                $code = wp_remote_retrieve_response_code($response);
                if($code == 200) {
                    // conversion was ok
                    return wp_remote_retrieve_body($response);
                }

                $error = new WP_Error($code,
                                      wp_remote_retrieve_body($response));
                if($code != 502) {
                    return $error;
                }
            }
            // only 502 error is used for retry
            $retry_count--;
        };
        return $error;
    }

    function save_as_image_pdfcrowd() {
        $options = $this->get_options();

        if(!empty($_POST['options'])) {
            $custom_options = unserialize($this->decrypt(urldecode($_POST['options']), $options['api_key']));
            $options = wp_parse_args($custom_options, $options);
        }

        if(!isset($options['username']) || empty($options['username']) &&
           !isset($options['api_key']) || empty($options['api_key'])) {
            // use demo credentials
            $options['username'] = 'wp-demo';
            $options['api_key'] = 'a182eb08c32a11e992c42c4d5455307a';
        }

        $output = self::do_post_request($options);
        if(is_wp_error($output)) {
            $code = $output->get_error_code();
            $message = $output->get_error_message();
            status_header($code, $message);
            echo $this->get_error_page($code, $message);
        } else {
            $name = $this->get_output_name($options);

            // send the generated file to the browser
            header('Content-Type: ' . $this->get_mime_type($options['output_format']));
            header("Content-Disposition: {$options['button_disposition']}; filename=\"$name\"");
            header('Cache-Control: no-cache');
            header('Accept-Ranges: none');

            echo $output;
        }

        wp_die();
    }

    private function get_error_page($code, $message) {
        $details = isset(self::$ERROR_MESSAGES[$code]) ? self::$ERROR_MESSAGES[$code] : '';
        return <<<HTML
    <html>
    <body>
    <h1>Pdfcrowd API Error {$code}</h1>
    <p>{$message}</p>
    <p>{$details}</p>
    </body>
    </html>
HTML;
    }

    private function get_function_name($key) {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
    }

    private function encrypt($string, $key) {
        $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext_raw = openssl_encrypt($string, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
        $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
        return base64_encode( $iv.$hmac.$ciphertext_raw );
    }

    private function decrypt($ciphertext, $key) {
        $c = base64_decode($ciphertext);
        $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
        $iv = substr($c, 0, $ivlen);
        $hmac = substr($c, $ivlen, $sha2len=32);
        $ciphertext_raw = substr($c, $ivlen+$sha2len);
        $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
        $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
        if (hash_equals($hmac, $calcmac))//PHP 5.6+ timing attack safe comparison
        {
            return $original_plaintext;
        }
        return false;
    }
}
