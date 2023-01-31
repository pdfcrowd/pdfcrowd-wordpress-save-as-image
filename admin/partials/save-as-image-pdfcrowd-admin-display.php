<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://pdfcrowd.com/save-as-image-wordpress-plugin/
 * @since      1.0.0
 *
 * @package    Save_As_Image_Pdfcrowd
 * @subpackage Save_As_Image_Pdfcrowd/admin/partials
 */
?>

<div class="wrap">

    <form method="post" id="save-as-image-pdfcrowd-options" name="save_as_image_pdfcrowd-options" action="options.php">

        <?php

        if(get_transient('save_as_image_pdfcrowd_show_wizard')) {
            delete_transient('save_as_image_pdfcrowd_show_wizard');
            require_once('wizard.php');
        }

        ?>

        <div class="save-as-image-pdfcrowd-admin-settings">
            <h2>
                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTkuMjI3IiBoZWlnaHQ9IjQzLjI1NiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03My44MDIgLTM4Ni4wNikiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDEuNzk0OCAwIDAgMS43OTQ4IC0yNjI2LjUgLTIxMi4wNikiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmOTUwMCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0ibTE1MTQuNSAzMzUuODZjMC40NDI2IDAuMDU0IDEuMjM2Ni0wLjI0MzM2IDEuMDAwMiAwLjQ4OTY1djE4LjUxMWMtMC40NDI2LTAuMDU0LTEuMjM2NiAwLjI0MzM3LTEuMDAwMi0wLjQ4OTY1di0xOC41MTF6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC45OTk4Ii8+PHBhdGggZD0ibTE1MDYuMyAzNDQuNTRoMS40NzQ4djEwLjU1NWgtMS40NzQ4di0xMC41NTV6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC41MjUxIi8+PHBhdGggZD0ibTE1MjIuNCAzMzkuNzhjMC4zNzU1IDAuMTIzMSAxLjI5ODYtMC4zMDEzMyAxLjE2OTQgMC4zMjY0M3YxNC44NDNjLTAuMzc1NS0wLjEyMzExLTEuMjk4NiAwLjMwMTMzLTEuMTY5NC0wLjMyNjQzdi0xNC44NDN6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC44MzA2Ii8+PHBhdGggZD0ibTE1MzUuMSAzNTMuMjh2Mi4xNjQ5aC01LjE2NDl2LTIuMTY0OWg1LjE2NDl6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iMy44MzUxIi8+PC9nPjwvZz48L3N2Zz4K" style="height: 24px;"/>
                <?php echo esc_html( get_admin_page_title() ); ?>
            </h2>

            <h2 id="save-as-image-pdfcrowd-nav-tab" class="nav-tab-wrapper">
                <a href="#save-as-image-pdfcrowd-license-settings" class="nav-tab nav-tab-active">Basics</a>
                <a href="#save-as-image-pdfcrowd-appearance" class="nav-tab">Appearance</a>
                <a href="#save-as-image-pdfcrowd-behavior" class="nav-tab">Behavior</a>
                <a href="#save-as-image-pdfcrowd-mode" class="nav-tab">Mode</a>
                <a href="#save-as-image-pdfcrowd-conversion-format"
                   id="nav-save-as-image-pdfcrowd-conversion-format"
                   class="nav-tab">Conversion Format</a>
                <a href="#save-as-image-pdfcrowd-general-options"
                   id="nav-save-as-image-pdfcrowd-general-options"
                   class="nav-tab">General Options</a>
                <a href="#save-as-image-pdfcrowd-image-output"
                   id="nav-save-as-image-pdfcrowd-image-output"
                   class="nav-tab">Image Output</a>
                <a href="#save-as-image-pdfcrowd-data"
                   id="nav-save-as-image-pdfcrowd-data"
                   class="nav-tab">Data</a>
                <a href="#save-as-image-pdfcrowd-miscellaneous"
                   id="nav-save-as-image-pdfcrowd-miscellaneous"
                   class="nav-tab">Miscellaneous</a>
                <a href="#save-as-image-pdfcrowd-api-client-options"
                   id="nav-save-as-image-pdfcrowd-api-client-options"
                   class="nav-tab">API Client Options</a>
            </h2>

        <?php

        $options = Save_As_Image_Pdfcrowd_Public::get_options();

        $license_status = Save_As_Image_Pdfcrowd_Admin::get_license_status($options);

        $api_key = isset($options['api_key']) ? $options['api_key'] : '';
        $auto_use_cookies = isset($options['auto_use_cookies']) ? $options['auto_use_cookies'] : '';
        $button_alignment = isset($options['button_alignment']) ? $options['button_alignment'] : '';
        $button_background_color = isset($options['button_background_color']) ? $options['button_background_color'] : '';
        $button_border_color = isset($options['button_border_color']) ? $options['button_border_color'] : '';
        $button_border_style = isset($options['button_border_style']) ? $options['button_border_style'] : '';
        $button_border_width = isset($options['button_border_width']) ? $options['button_border_width'] : '';
        $button_custom_html = isset($options['button_custom_html']) ? $options['button_custom_html'] : '';
        $button_custom_indicator = isset($options['button_custom_indicator']) ? $options['button_custom_indicator'] : '';
        $button_disposition = isset($options['button_disposition']) ? $options['button_disposition'] : '';
        $button_format = isset($options['button_format']) ? $options['button_format'] : '';
        $button_hidden = isset($options['button_hidden']) ? $options['button_hidden'] : '';
        $button_hover = isset($options['button_hover']) ? $options['button_hover'] : '';
        $button_html_hidden = isset($options['button_html_hidden']) ? $options['button_html_hidden'] : '';
        $button_id = isset($options['button_id']) ? $options['button_id'] : '';
        $button_image = isset($options['button_image']) ? $options['button_image'] : '';
        $button_image_height = isset($options['button_image_height']) ? $options['button_image_height'] : '';
        $button_image_url = isset($options['button_image_url']) ? $options['button_image_url'] : '';
        $button_image_width = isset($options['button_image_width']) ? $options['button_image_width'] : '';
        $button_indicator = isset($options['button_indicator']) ? $options['button_indicator'] : '';
        $button_indicator_html = isset($options['button_indicator_html']) ? $options['button_indicator_html'] : '';
        $button_indicator_timeout = isset($options['button_indicator_timeout']) ? $options['button_indicator_timeout'] : '';
        $button_margin_bottom = isset($options['button_margin_bottom']) ? $options['button_margin_bottom'] : '';
        $button_margin_left = isset($options['button_margin_left']) ? $options['button_margin_left'] : '';
        $button_margin_right = isset($options['button_margin_right']) ? $options['button_margin_right'] : '';
        $button_margin_top = isset($options['button_margin_top']) ? $options['button_margin_top'] : '';
        $button_on_categories = isset($options['button_on_categories']) ? $options['button_on_categories'] : '';
        $button_on_front = isset($options['button_on_front']) ? $options['button_on_front'] : '';
        $button_on_home = isset($options['button_on_home']) ? $options['button_on_home'] : '';
        $button_on_pages = isset($options['button_on_pages']) ? $options['button_on_pages'] : '';
        $button_on_posts = isset($options['button_on_posts']) ? $options['button_on_posts'] : '';
        $button_on_taxonomies = isset($options['button_on_taxonomies']) ? $options['button_on_taxonomies'] : '';
        $button_padding_bottom = isset($options['button_padding_bottom']) ? $options['button_padding_bottom'] : '';
        $button_padding_left = isset($options['button_padding_left']) ? $options['button_padding_left'] : '';
        $button_padding_right = isset($options['button_padding_right']) ? $options['button_padding_right'] : '';
        $button_padding_top = isset($options['button_padding_top']) ? $options['button_padding_top'] : '';
        $button_position = isset($options['button_position']) ? $options['button_position'] : '';
        $button_radius = isset($options['button_radius']) ? $options['button_radius'] : '';
        $button_styling = isset($options['button_styling']) ? $options['button_styling'] : '';
        $button_text = isset($options['button_text']) ? $options['button_text'] : '';
        $button_text_color = isset($options['button_text_color']) ? $options['button_text_color'] : '';
        $button_text_size = isset($options['button_text_size']) ? $options['button_text_size'] : '';
        $button_text_weight = isset($options['button_text_weight']) ? $options['button_text_weight'] : '';
        $button_translation = isset($options['button_translation']) ? $options['button_translation'] : '';
        $button_translation_domain = isset($options['button_translation_domain']) ? $options['button_translation_domain'] : '';
        $button_user_drawings = isset($options['button_user_drawings']) ? $options['button_user_drawings'] : '';
        $conversion_mode = isset($options['conversion_mode']) ? $options['conversion_mode'] : '';
        $converter_version = isset($options['converter_version']) ? $options['converter_version'] : '';
        $custom_data = isset($options['custom_data']) ? $options['custom_data'] : '';
        $dev_mode = isset($options['dev_mode']) ? $options['dev_mode'] : '';
        $diagnostics = isset($options['diagnostics']) ? $options['diagnostics'] : '';
        $email_bcc = isset($options['email_bcc']) ? $options['email_bcc'] : '';
        $email_cc = isset($options['email_cc']) ? $options['email_cc'] : '';
        $email_custom_dialogs = isset($options['email_custom_dialogs']) ? $options['email_custom_dialogs'] : '';
        $email_dialogs = isset($options['email_dialogs']) ? $options['email_dialogs'] : '';
        $email_from = isset($options['email_from']) ? $options['email_from'] : '';
        $email_message = isset($options['email_message']) ? $options['email_message'] : '';
        $email_recipient = isset($options['email_recipient']) ? $options['email_recipient'] : '';
        $email_recipient_address = isset($options['email_recipient_address']) ? $options['email_recipient_address'] : '';
        $email_subject = isset($options['email_subject']) ? $options['email_subject'] : '';
        $enable_cookies_opt = isset($options['enable_cookies_opt']) ? $options['enable_cookies_opt'] : '';
        $image_created_callback = isset($options['image_created_callback']) ? $options['image_created_callback'] : '';
        $license_type = isset($options['license_type']) ? $options['license_type'] : '';
        $output_format = isset($options['output_format']) ? $options['output_format'] : '';
        $output_name = isset($options['output_name']) ? $options['output_name'] : '';
        $url_lookup = isset($options['url_lookup']) ? $options['url_lookup'] : '';
        $username = isset($options['username']) ? $options['username'] : '';
        $version = isset($options['version']) ? $options['version'] : '';

        $use_print_media = isset($options['use_print_media']) ? $options['use_print_media'] : '';
        $no_background = isset($options['no_background']) ? $options['no_background'] : '';
        $disable_javascript = isset($options['disable_javascript']) ? $options['disable_javascript'] : '';
        $disable_image_loading = isset($options['disable_image_loading']) ? $options['disable_image_loading'] : '';
        $disable_remote_fonts = isset($options['disable_remote_fonts']) ? $options['disable_remote_fonts'] : '';
        $use_mobile_user_agent = isset($options['use_mobile_user_agent']) ? $options['use_mobile_user_agent'] : '';
        $load_iframes = isset($options['load_iframes']) ? $options['load_iframes'] : 'all';
        $block_ads = isset($options['block_ads']) ? $options['block_ads'] : '';
        $default_encoding = isset($options['default_encoding']) ? $options['default_encoding'] : '';
        $locale = isset($options['locale']) ? $options['locale'] : '';
        $http_auth_user_name = isset($options['http_auth_user_name']) ? $options['http_auth_user_name'] : '';
        $http_auth_password = isset($options['http_auth_password']) ? $options['http_auth_password'] : '';
        $cookies = isset($options['cookies']) ? $options['cookies'] : '';
        $verify_ssl_certificates = isset($options['verify_ssl_certificates']) ? $options['verify_ssl_certificates'] : '';
        $fail_on_main_url_error = isset($options['fail_on_main_url_error']) ? $options['fail_on_main_url_error'] : '';
        $fail_on_any_url_error = isset($options['fail_on_any_url_error']) ? $options['fail_on_any_url_error'] : '';
        $no_xpdfcrowd_header = isset($options['no_xpdfcrowd_header']) ? $options['no_xpdfcrowd_header'] : '';
        $custom_javascript = isset($options['custom_javascript']) ? $options['custom_javascript'] : '';
        $on_load_javascript = isset($options['on_load_javascript']) ? $options['on_load_javascript'] : '';
        $custom_http_header = isset($options['custom_http_header']) ? $options['custom_http_header'] : '';
        $javascript_delay = isset($options['javascript_delay']) ? $options['javascript_delay'] : '';
        $element_to_convert = isset($options['element_to_convert']) ? $options['element_to_convert'] : '';
        $element_to_convert_mode = isset($options['element_to_convert_mode']) ? $options['element_to_convert_mode'] : 'cut-out';
        $wait_for_element = isset($options['wait_for_element']) ? $options['wait_for_element'] : '';
        $auto_detect_element_to_convert = isset($options['auto_detect_element_to_convert']) ? $options['auto_detect_element_to_convert'] : '';
        $readability_enhancements = isset($options['readability_enhancements']) ? $options['readability_enhancements'] : 'none';
        $screenshot_width = isset($options['screenshot_width']) ? $options['screenshot_width'] : '';
        $screenshot_height = isset($options['screenshot_height']) ? $options['screenshot_height'] : '';
        $scale_factor = isset($options['scale_factor']) ? $options['scale_factor'] : '';
        $background_color = isset($options['background_color']) ? $options['background_color'] : '';
        $data_string = isset($options['data_string']) ? $options['data_string'] : '';
        $data_file = isset($options['data_file']) ? $options['data_file'] : '';
        $data_format = isset($options['data_format']) ? $options['data_format'] : 'auto';
        $data_encoding = isset($options['data_encoding']) ? $options['data_encoding'] : '';
        $data_ignore_undefined = isset($options['data_ignore_undefined']) ? $options['data_ignore_undefined'] : '';
        $data_auto_escape = isset($options['data_auto_escape']) ? $options['data_auto_escape'] : '';
        $data_trim_blocks = isset($options['data_trim_blocks']) ? $options['data_trim_blocks'] : '';
        $data_options = isset($options['data_options']) ? $options['data_options'] : '';
        $debug_log = isset($options['debug_log']) ? $options['debug_log'] : '';
        $tag = isset($options['tag']) ? $options['tag'] : '';
        $http_proxy = isset($options['http_proxy']) ? $options['http_proxy'] : '';
        $https_proxy = isset($options['https_proxy']) ? $options['https_proxy'] : '';
        $client_certificate = isset($options['client_certificate']) ? $options['client_certificate'] : '';
        $client_certificate_password = isset($options['client_certificate_password']) ? $options['client_certificate_password'] : '';
        $use_http = isset($options['use_http']) ? $options['use_http'] : '';
        $retry_count = isset($options['retry_count']) ? $options['retry_count'] : '';

        /*
         * Set up hidden fields
         *
         */
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);

        // Include tabs partials
        require_once('license-settings.php');
        require_once('appearance.php');
        require_once('behavior.php');
        require_once('mode.php');
        require_once('save-as-image-pdfcrowd-settings.php');
        ?>

        <script>
         function save_as_image_pdfcrowd_submit_action(action) {
             var form = document.forms['save_as_image_pdfcrowd-options'];
             form['save-as-image-pdfcrowd[wp_submit_action]'].value = action;
             form.submit();
             return true;
         }

         function save_as_image_pdfcrowd_reset_settings() {
             var r = confirm("<?php esc_attr_e('Save as Image settings will be lost. Please confirm.', $this->plugin_name); ?>");
             if(r !== true) {
                 return false;
             }
             return save_as_image_pdfcrowd_submit_action('reset');
         }
        </script>
        <input type="hidden" name="save-as-image-pdfcrowd[wp_submit_action]" value="" />

        <p class="submit">
            <input id="pdfcrowd-save" name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save all changes', $this->plugin_name); ?>" />
            <input name="Reset" type="submit" class="button-primary" value="<?php esc_attr_e('Reset to default values', $this->plugin_name); ?>"
                   onclick="return save_as_image_pdfcrowd_reset_settings();" />
            <input type="reset" class="button-secondary" value="<?php esc_attr_e('Cancel', $this->plugin_name); ?>">
        </p>

        <hr style="margin-top: 4em;"/>
        <div style="display: flex; justify-content: space-between; flex-wrap: wrap">
            <a href="https://pdfcrowd.com/contact/?ref=wordpress&pr=save-as-image-pdfcrowd" class="button-secondary" title="Help" target="_blank">
                Get help
            </a>
            <div id="save-as-image-pdfcrowd-support-notes">
                If you like "Save as Image by Pdfcrowd", please rate us using <a href='https://wordpress.org/support/plugin/save-as-image-by-pdfcrowd/reviews/#new-post' target='_blank'>★★★★★</a>.
            </div>
        </div>
    </form>

    <div style="display: none">
        <input type="hidden" id="save-as-image-pdfcrowd-hidden-header"
               value="<?php
        $site_name = get_bloginfo('name');
        $site_desc = get_bloginfo('description');
        $site_css = get_bloginfo('stylesheet_url');
        $site_url = get_bloginfo('url');
        echo <<<EOT
<html>
  <head>
    <link rel='stylesheet' href='$site_css'>
    <style>
      * { margin: 0; padding: 0; }
    </style>
  </head>
  <body>
    <div style='text-align: center'>
      <p class='site-title'>
        <a href='$site_url'>$site_name</a>
      </p>
      <p class='site-description'>
        $site_desc
      </p>
    </div>
  </body>
</html>
EOT;

?>">
        <input type="hidden" id="save-as-image-pdfcrowd-hidden-footer"
               value="<?php
        echo <<<EOT
<html>
  <head>
    <link rel='stylesheet' href='$site_css'>
    <style>
      * { margin: 0; padding: 0; }
    </style>
  </head>
  <body>
    <div style='float: left'>
      <a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'></a>
    </div>
    </div>
    <div style='float: right'>
      <span class='pdfcrowd-page-number'></span>&#47;<span class='pdfcrowd-page-count'></span>
    </div>
  </body>
</html>
EOT;

?>">
    </div>
</div>
