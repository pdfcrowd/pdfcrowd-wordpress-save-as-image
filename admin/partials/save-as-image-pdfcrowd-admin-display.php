<?php

   /**
   * Provide a admin area view for the plugin
   *
   * This file is used to markup the admin-facing aspects of the plugin.
   *
   * @link       https://pdfcrowd.com/wordpress/
   * @since      1.0.0
   *
   * @package    Save_As_Image_Pdfcrowd
   * @subpackage Save_As_Image_Pdfcrowd/admin/partials
   */
   ?>

<div class="wrap">

  <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

  <h2 id="save-as-image-pdfcrowd-nav-tab" class="nav-tab-wrapper">
    <a href="#save-as-image-pdfcrowd-license-settings" class="nav-tab nav-tab-active">Pdfcrowd API License</a>
    <a href="#save-as-image-pdfcrowd-wordpress-settings" class="nav-tab">Wordpress Settings</a>
<a href="#save-as-image-pdfcrowd-conversion-format" class="nav-tab">Conversion Format</a>
<a href="#save-as-image-pdfcrowd-general-options" class="nav-tab">General Options</a>
<a href="#save-as-image-pdfcrowd-image-output" class="nav-tab">Image Output</a>
<a href="#save-as-image-pdfcrowd-miscellaneous" class="nav-tab">Miscellaneous</a>
  </h2>

      <form method="post" id="save-as-image-pdfcrowd-options" name="save_as_image_pdfcrowd-options" action="options.php">
        <?php

        $options = get_option($this->plugin_name, Save_As_Image_Pdfcrowd_Public::$DEFAULTS);

        $license_status = Save_As_Image_Pdfcrowd_Admin::get_license_status($options);

        $username = isset($options['username']) ? $options['username'] : '';
        $dev_mode = isset($options['dev_mode']) ? $options['dev_mode'] : '';
        $button_border_color = isset($options['button_border_color']) ? $options['button_border_color'] : '';
        $button_text_color = isset($options['button_text_color']) ? $options['button_text_color'] : '';
        $button_image_url = isset($options['button_image_url']) ? $options['button_image_url'] : '';
        $button_on_posts = isset($options['button_on_posts']) ? $options['button_on_posts'] : '';
        $button_margin_left = isset($options['button_margin_left']) ? $options['button_margin_left'] : '';
        $button_margin_bottom = isset($options['button_margin_bottom']) ? $options['button_margin_bottom'] : '';
        $use_print_media = isset($options['use_print_media']) ? $options['use_print_media'] : '';
        $button_text = isset($options['button_text']) ? $options['button_text'] : '';
        $button_alignment = isset($options['button_alignment']) ? $options['button_alignment'] : '';
        $button_padding_right = isset($options['button_padding_right']) ? $options['button_padding_right'] : '';
        $button_on_home = isset($options['button_on_home']) ? $options['button_on_home'] : '';
        $button_padding_left = isset($options['button_padding_left']) ? $options['button_padding_left'] : '';
        $button_on_front = isset($options['button_on_front']) ? $options['button_on_front'] : '';
        $button_margin_right = isset($options['button_margin_right']) ? $options['button_margin_right'] : '';
        $button_on_categories = isset($options['button_on_categories']) ? $options['button_on_categories'] : '';
        $button_radius = isset($options['button_radius']) ? $options['button_radius'] : '';
        $button_styling = isset($options['button_styling']) ? $options['button_styling'] : '';
        $button_border_width = isset($options['button_border_width']) ? $options['button_border_width'] : '';
        $button_image_width = isset($options['button_image_width']) ? $options['button_image_width'] : '';
        $button_disposition = isset($options['button_disposition']) ? $options['button_disposition'] : '';
        $button_margin_top = isset($options['button_margin_top']) ? $options['button_margin_top'] : '';
        $button_padding_top = isset($options['button_padding_top']) ? $options['button_padding_top'] : '';
        $button_position = isset($options['button_position']) ? $options['button_position'] : '';
        $button_image = isset($options['button_image']) ? $options['button_image'] : '';
        $button_background_color = isset($options['button_background_color']) ? $options['button_background_color'] : '';
        $button_on_taxonomies = isset($options['button_on_taxonomies']) ? $options['button_on_taxonomies'] : '';
        $button_text_weight = isset($options['button_text_weight']) ? $options['button_text_weight'] : '';
        $button_padding_bottom = isset($options['button_padding_bottom']) ? $options['button_padding_bottom'] : '';
        $button_on_pages = isset($options['button_on_pages']) ? $options['button_on_pages'] : '';
        $button_format = isset($options['button_format']) ? $options['button_format'] : '';
        $button_border_style = isset($options['button_border_style']) ? $options['button_border_style'] : '';
        $button_text_size = isset($options['button_text_size']) ? $options['button_text_size'] : '';
        $api_key = isset($options['api_key']) ? $options['api_key'] : '';
        $output_format = isset($options['output_format']) ? $options['output_format'] : '';
        $button_hidden = isset($options['button_hidden']) ? $options['button_hidden'] : '';
        $button_image_height = isset($options['button_image_height']) ? $options['button_image_height'] : '';

        $output_format = isset($options['output_format']) ? $options['output_format'] : 'png';
        $no_background = isset($options['no_background']) ? $options['no_background'] : '';
        $disable_javascript = isset($options['disable_javascript']) ? $options['disable_javascript'] : '';
        $disable_image_loading = isset($options['disable_image_loading']) ? $options['disable_image_loading'] : '';
        $disable_remote_fonts = isset($options['disable_remote_fonts']) ? $options['disable_remote_fonts'] : '';
        $block_ads = isset($options['block_ads']) ? $options['block_ads'] : '';
        $default_encoding = isset($options['default_encoding']) ? $options['default_encoding'] : '';
        $http_auth_user_name = isset($options['http_auth_user_name']) ? $options['http_auth_user_name'] : '';
        $http_auth_password = isset($options['http_auth_password']) ? $options['http_auth_password'] : '';
        $use_print_media = isset($options['use_print_media']) ? $options['use_print_media'] : '';
        $no_xpdfcrowd_header = isset($options['no_xpdfcrowd_header']) ? $options['no_xpdfcrowd_header'] : '';
        $cookies = isset($options['cookies']) ? $options['cookies'] : '';
        $verify_ssl_certificates = isset($options['verify_ssl_certificates']) ? $options['verify_ssl_certificates'] : '';
        $fail_on_main_url_error = isset($options['fail_on_main_url_error']) ? $options['fail_on_main_url_error'] : '';
        $fail_on_any_url_error = isset($options['fail_on_any_url_error']) ? $options['fail_on_any_url_error'] : '';
        $custom_javascript = isset($options['custom_javascript']) ? $options['custom_javascript'] : '';
        $on_load_javascript = isset($options['on_load_javascript']) ? $options['on_load_javascript'] : '';
        $custom_http_header = isset($options['custom_http_header']) ? $options['custom_http_header'] : '';
        $javascript_delay = isset($options['javascript_delay']) ? $options['javascript_delay'] : '';
        $element_to_convert = isset($options['element_to_convert']) ? $options['element_to_convert'] : '';
        $element_to_convert_mode = isset($options['element_to_convert_mode']) ? $options['element_to_convert_mode'] : 'cut-out';
        $wait_for_element = isset($options['wait_for_element']) ? $options['wait_for_element'] : '';
        $screenshot_width = isset($options['screenshot_width']) ? $options['screenshot_width'] : '';
        $screenshot_height = isset($options['screenshot_height']) ? $options['screenshot_height'] : '';
        $scale_factor = isset($options['scale_factor']) ? $options['scale_factor'] : '';
        $debug_log = isset($options['debug_log']) ? $options['debug_log'] : '';
        $tag = isset($options['tag']) ? $options['tag'] : '';
        $http_proxy = isset($options['http_proxy']) ? $options['http_proxy'] : '';
        $https_proxy = isset($options['https_proxy']) ? $options['https_proxy'] : '';
        $client_certificate = isset($options['client_certificate']) ? $options['client_certificate'] : '';
        $client_certificate_password = isset($options['client_certificate_password']) ? $options['client_certificate_password'] : '';

        /*
        * Set up hidden fields
        *
        */
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);

        // Include tabs partials
        require_once('license-settings.php');
        require_once('wordpress-settings.php');
        require_once('save-as-image-pdfcrowd-settings.php');
        ?>

        <p class="submit">
            <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save All Changes'); ?>" />
        </p>

    </form>

</div>
