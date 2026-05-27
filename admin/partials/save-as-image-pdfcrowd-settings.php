<?php

/**
* Partial of the clean up settings
*
*
*
* @link       https://pdfcrowd.com/save-as-image-wordpress-plugin/
* @since      1.0.0
*
* @package    Save_As_Image_Pdfcrowd
* @subpackage Save_As_Image_Pdfcrowd/admin/partials
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php if(get_option('save_as_image_pdfcrowd_error_code')) : ?>
<div class='notice notice-error'><p><strong>
<?php esc_html_e(get_option('save_as_image_pdfcrowd_error_code')) ?>
 <a href="https://pdfcrowd.com/faq/how-to-resolve-plugin-license-errors/" target="_blank">Resolve</a> this issue.</strong></p></div>
<?php endif; ?>

<div
  id="save-as-image-pdfcrowd-settings-set"
  class="save-as-image-pdfcrowd-metaboxes">

  <div
    id="save-as-image-pdfcrowd-quick-setup"
    class="save-as-image-pdfcrowd-basic-input save-as-image-pdfcrowd-category-wrap">
    <div class="save-as-image-pdfcrowd-heading-wrap save-as-image-pdfcrowd-basic-heading-wrap">
      <h2>Quick Setup</h2>
    </div>
    <div class="save-as-image-pdfcrowd-not-filtered save-as-image-pdfcrowd-description">
      The quick setup wizard will help you to configure the most
      common settings.
    </div>
    <table>
      <tr class="save-as-image-pdfcrowd-set-group">
        <th style="font-weight: normal; padding: .5em 0;">
          <label>
            <div id="save-as-image-pdfcrowd-wizard-run"
                 class="button-secondary"
                 onclick="return save_as_image_pdfcrowd_submit_action('wizard');">
                 Run Quick Setup
            </div>
          </label>
        </th>
      </tr>
    </table>
  </div>

  <?php
   require_once('appearance.php');
   require_once('behavior.php');
   require_once('mode.php');
   ?>


   <div id="save-as-image-pdfcrowd-api-settings">
     <div id="save-as-image-pdfcrowd-conversion-format"
          class="save-as-image-pdfcrowd-category-wrap">
       <div class="save-as-image-pdfcrowd-heading-wrap save-as-image-pdfcrowd-basic-heading-wrap">
         <h2>Conversion Format</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-image-pdfcrowd-set-group "
                data-default="png">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-output_format">
                        Output Format
                    </label>
                </th>
                <td>
                    <select name="save-as-image-pdfcrowd[output_format]" id="save-as-image-pdfcrowd-output_format" autocomplete="off">
                    <option value="png" <?php selected($output_format, 'png');?>>png</option>
                    <option value="jpg" <?php selected($output_format, 'jpg');?>>jpg</option>
                    <option value="gif" <?php selected($output_format, 'gif');?>>gif</option>
                    <option value="tiff" <?php selected($output_format, 'tiff');?>>tiff</option>
                    <option value="bmp" <?php selected($output_format, 'bmp');?>>bmp</option>
                    <option value="ico" <?php selected($output_format, 'ico');?>>ico</option>
                    <option value="ppm" <?php selected($output_format, 'ppm');?>>ppm</option>
                    <option value="pgm" <?php selected($output_format, 'pgm');?>>pgm</option>
                    <option value="pbm" <?php selected($output_format, 'pbm');?>>pbm</option>
                    <option value="pnm" <?php selected($output_format, 'pnm');?>>pnm</option>
                    <option value="psb" <?php selected($output_format, 'psb');?>>psb</option>
                    <option value="pct" <?php selected($output_format, 'pct');?>>pct</option>
                    <option value="ras" <?php selected($output_format, 'ras');?>>ras</option>
                    <option value="tga" <?php selected($output_format, 'tga');?>>tga</option>
                    <option value="sgi" <?php selected($output_format, 'sgi');?>>sgi</option>
                    <option value="sun" <?php selected($output_format, 'sun');?>>sun</option>
                    <option value="webp" <?php selected($output_format, 'webp');?>>webp</option>
                    </select>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            The output file format.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>output_format</strong>"<br>Possible values: "png", "jpg", "gif", "tiff", "bmp", "ico", "ppm", "pgm", "pbm", "pnm", "psb", "pct", "ras", "tga", "sgi", "sun", "webp"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-image-pdfcrowd-image-output"
          class="save-as-image-pdfcrowd-category-wrap">
       <div class="save-as-image-pdfcrowd-heading-wrap save-as-image-pdfcrowd-basic-heading-wrap">
         <h2>Image Output</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-image-pdfcrowd-set-group "
                data-default="1024">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-screenshot_width">
                        Screenshot Width
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-screenshot_width"
                        name="save-as-image-pdfcrowd[screenshot_width]"
                        value="<?php esc_attr_e($screenshot_width); ?>"
                        placeholder="1024" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set the output image width in pixels.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>screenshot_width</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group "
                data-default="actual document height is used">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-screenshot_height">
                        Screenshot Height
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-screenshot_height"
                        name="save-as-image-pdfcrowd[screenshot_height]"
                        value="<?php esc_attr_e($screenshot_height); ?>"
                        placeholder="actual document height is used" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set the output image height in pixels. If it is not specified, actual document height is used.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>screenshot_height</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="100">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-scale_factor">
                        Scale Factor
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-scale_factor"
                        name="save-as-image-pdfcrowd[scale_factor]"
                        value="<?php esc_attr_e($scale_factor); ?>"
                        placeholder="100" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set the scaling factor (zoom) for the output image.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>scale_factor</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-background_color">
                        Background Color
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-background_color"
                        name="save-as-image-pdfcrowd[background_color]"
                        value="<?php esc_attr_e($background_color); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            The output image background color in RGB or RGBA hex format. Use transparent (00000000) for PNG overlays or solid colors for web display.
                              The value must be in RRGGBB or RRGGBBAA hexadecimal format.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>background_color</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-image-pdfcrowd-general-options"
          class="save-as-image-pdfcrowd-category-wrap">
       <div class="save-as-image-pdfcrowd-heading-wrap save-as-image-pdfcrowd-basic-heading-wrap">
         <h2>General Options</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-use_print_media">
                        Use Print Media
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-use_print_media" name="save-as-image-pdfcrowd[use_print_media]" value="1" <?php checked( $use_print_media, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Use the print version of the page if available via <code>@media</code> print CSS rules. Enable this when converting websites that have print-optimized styles. Many sites hide navigation, ads, and sidebars in print mode.
Produces cleaner PDFs by using the design the website creator intended for printing.

                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>use_print_media</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-no_background">
                        No Background
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-no_background" name="save-as-image-pdfcrowd[no_background]" value="1" <?php checked( $no_background, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Do not print the background graphics to create printer-friendly PDFs. Use this when documents will be physically printed to save ink costs and improve readability.
Removes background colors, images, and patterns while preserving text and foreground content. Particularly useful for documents with dark backgrounds or decorative elements.

                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>no_background</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-disable_javascript">
                        Disable JavaScript
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-disable_javascript" name="save-as-image-pdfcrowd[disable_javascript]" value="1" <?php checked( $disable_javascript, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Do not execute JavaScript during conversion. Use this to improve conversion speed when JavaScript is not needed, prevent dynamic content changes, or avoid security risks from untrusted scripts.
Note that disabling JavaScript means lazy-loaded images and AJAX content will not load.

                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>disable_javascript</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-disable_image_loading">
                        Disable Image Loading
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-disable_image_loading" name="save-as-image-pdfcrowd[disable_image_loading]" value="1" <?php checked( $disable_image_loading, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Do not load images during conversion to create text-only PDFs. Use this to significantly speed up conversion, reduce file size, or create accessible text-focused documents.
Ideal for converting documentation where images are not needed, reducing bandwidth usage, or creating lightweight PDFs for email distribution.

                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>disable_image_loading</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-disable_remote_fonts">
                        Disable Remote Fonts
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-disable_remote_fonts" name="save-as-image-pdfcrowd[disable_remote_fonts]" value="1" <?php checked( $disable_remote_fonts, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Disable loading fonts from remote sources. Use this to speed up conversion by avoiding font download delays, ensure consistent rendering with system fonts, or work around font loading failures.
Note that text will fall back to system fonts, which may change the document's appearance.

                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>disable_remote_fonts</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input save-as-image-pdfcrowd-deprecated"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-use_mobile_user_agent">
                        Use Mobile User Agent
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-use_mobile_user_agent" name="save-as-image-pdfcrowd[use_mobile_user_agent]" value="1" <?php checked( $use_mobile_user_agent, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Use a mobile user agent when making requests to the source URL.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>use_mobile_user_agent</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="all">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-load_iframes">
                        Load Iframes
                    </label>
                </th>
                <td>
                    <select name="save-as-image-pdfcrowd[load_iframes]" id="save-as-image-pdfcrowd-load_iframes" autocomplete="off">
                    <option value="all" <?php selected($load_iframes, 'all');?>>all</option>
                    <option value="same-origin" <?php selected($load_iframes, 'same-origin');?>>same-origin</option>
                    <option value="none" <?php selected($load_iframes, 'none');?>>none</option>
                    </select>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Specifies how iframes are handled during conversion. Use <code>"all"</code> to include all embedded content (videos, maps, widgets). Use <code>"same-origin"</code> to include only content from the same domain for security purposes. Use <code>"none"</code> to exclude all iframes for faster conversion and to avoid third-party content issues.
Disabling iframes can significantly improve performance and reliability.

                          </div>
                            <br>Possible values: <ul><li>"all" - All iframes are loaded.</li><li>"same-origin" - Only iframes with the same origin as the main page are loaded.</li><li>"none" - Iframe loading is disabled.</li></ul>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>load_iframes</strong>"<br>Possible values: "all", "same-origin", "none"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-block_ads">
                        Block Ads
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-block_ads" name="save-as-image-pdfcrowd[block_ads]" value="1" <?php checked( $block_ads, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Automatically block common advertising networks and tracking scripts during conversion, producing cleaner PDFs with faster conversion times. Filters out third-party ad content, analytics beacons, and ad network resources.
Ideal for converting news sites, blogs, or any ad-heavy content where ads distract from the main message. May occasionally block legitimate third-party content - disable if critical third-party resources are missing.

                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>block_ads</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="auto detect">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-default_encoding">
                        Default Encoding
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-default_encoding"
                        name="save-as-image-pdfcrowd[default_encoding]"
                        value="<?php esc_attr_e($default_encoding); ?>"
                        placeholder="auto detect" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Specify the character encoding when the HTML lacks proper charset declaration or has incorrect encoding. Prevents garbled text for non-English content, especially legacy pages without UTF-8 encoding.
Set to <code>"utf-8"</code> for modern content, <code>"iso-8859-1"</code> for Western European legacy pages, or other encodings for specific regional content. Only needed when auto-detection fails and you see corrupted characters in the output.

                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>default_encoding</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="en-US">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-locale">
                        Locale
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-locale"
                        name="save-as-image-pdfcrowd[locale]"
                        value="<?php esc_attr_e($locale); ?>"
                        placeholder="en-US" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set the locale for the conversion to control regional formatting of dates, times, and numbers. Use this when converting content for specific regions - for example, set to <code>"en-US"</code> for MM/DD/YYYY dates and comma thousand separators, or <code>"de-DE"</code> for DD.MM.YYYY dates and period thousand separators.
Essential for financial reports, invoices, or localized content.

                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>locale</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-http_auth_user_name">
                        HTTP Auth User Name
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-http_auth_user_name"
                        name="save-as-image-pdfcrowd[http_auth_user_name]"
                        value="<?php esc_attr_e($http_auth_user_name); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set the HTTP authentication user name. Required to access protected web pages or staging environments.
                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>http_auth_user_name</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-http_auth_password">
                        HTTP Auth Password
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-http_auth_password"
                        name="save-as-image-pdfcrowd[http_auth_password]"
                        value="<?php esc_attr_e($http_auth_password); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set the HTTP authentication password. Required to access protected web pages or staging environments.
                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>http_auth_password</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-cookies">
                        Cookies
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-cookies"
                        name="save-as-image-pdfcrowd[cookies]"
                        value="<?php esc_attr_e($cookies); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set HTTP cookies to be included in all requests made by the converter to access authenticated or session-based content. Use this when converting pages that require login, maintain user sessions, or personalize content based on cookies.
Essential for converting member-only areas, dashboards, or any content behind cookie-based authentication. Format as semicolon-separated name=value pairs.

                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>cookies</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-verify_ssl_certificates">
                        Verify SSL Certificates
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-verify_ssl_certificates" name="save-as-image-pdfcrowd[verify_ssl_certificates]" value="1" <?php checked( $verify_ssl_certificates, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Enforce SSL certificate validation for secure connections, preventing conversions from sites with invalid certificates. Enable when converting from production sites with valid certificates to ensure security.
When disabled, allows conversion from any HTTPS site regardless of certificate validity - including development servers with self-signed certificates, internal corporate sites with expired certificates, or local testing environments.

                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>verify_ssl_certificates</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-fail_on_main_url_error">
                        Fail On Main URL Error
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-fail_on_main_url_error" name="save-as-image-pdfcrowd[fail_on_main_url_error]" value="1" <?php checked( $fail_on_main_url_error, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Abort the conversion if the HTTP status code of the main URL is greater than or equal to 400 (client/server errors). Use this in automated workflows to catch broken URLs or authentication failures early rather than producing invalid PDFs. Ensures your system does not silently generate error page PDFs when source content is unavailable.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>fail_on_main_url_error</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-fail_on_any_url_error">
                        Fail On Any URL Error
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-fail_on_any_url_error" name="save-as-image-pdfcrowd[fail_on_any_url_error]" value="1" <?php checked( $fail_on_any_url_error, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Abort the conversion if any sub-request (images, stylesheets, scripts) fails with HTTP 400+ errors. Use this for strict quality control when all assets must load successfully.

                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>fail_on_any_url_error</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-no_xpdfcrowd_header">
                        No X-Pdfcrowd Header
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-no_xpdfcrowd_header" name="save-as-image-pdfcrowd[no_xpdfcrowd_header]" value="1" <?php checked( $no_xpdfcrowd_header, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Do not send the X-Pdfcrowd HTTP header in HTTP requests made by the converter. Use this if your target server blocks or logs requests with this header, or for privacy when you do not want sites to know you are using PDFCrowd. Some security systems may block requests with non-standard headers.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>no_xpdfcrowd_header</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group "
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-custom_css">
                        Custom CSS
                    </label>
                </th>
                <td>
                    <textarea id="save-as-image-pdfcrowd-custom_css" name="save-as-image-pdfcrowd[custom_css]" placeholder=""
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($custom_css); ?></textarea>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Apply custom CSS to the input HTML document to modify the visual appearance and layout of your content dynamically. Use this to override default styles, adjust spacing, change fonts, or fix layout issues without modifying the source HTML.
Use <code>!important</code> in your CSS rules to prioritize and override conflicting styles.

                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>custom_css</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group "
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-custom_javascript">
                        Custom JavaScript
                    </label>
                </th>
                <td>
                    <textarea id="save-as-image-pdfcrowd-custom_javascript" name="save-as-image-pdfcrowd[custom_javascript]" placeholder=""
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($custom_javascript); ?></textarea>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Run a custom JavaScript after the document is loaded and ready to print. Use this to modify page content before conversion, remove unwanted elements, or trigger specific page states. The script is intended for post-load DOM manipulation (add/remove elements, update CSS, ...).
In addition to the standard browser APIs, the custom JavaScript code can use helper functions from our <a href='https://pdfcrowd.com/api/libpdfcrowd/'>JavaScript library</a>.

                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>custom_javascript</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-on_load_javascript">
                        On Load JavaScript
                    </label>
                </th>
                <td>
                    <textarea id="save-as-image-pdfcrowd-on_load_javascript" name="save-as-image-pdfcrowd[on_load_javascript]" placeholder=""
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($on_load_javascript); ?></textarea>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Run a custom JavaScript right after the document is loaded. The script is intended for early DOM manipulation (add/remove elements, update CSS, ...). In addition to the standard browser APIs, the custom JavaScript code can use helper functions from our <a href='https://pdfcrowd.com/api/libpdfcrowd/'>JavaScript library</a>.
                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>on_load_javascript</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-custom_http_header">
                        Custom HTTP Header
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-custom_http_header"
                        name="save-as-image-pdfcrowd[custom_http_header]"
                        value="<?php esc_attr_e($custom_http_header); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set a custom HTTP header to be included in all requests made by the converter. Use this to pass authentication tokens to protected sites, add tracking headers for analytics, or provide API keys for accessing private content.
Essential when converting content from APIs or internal systems that require special headers for access control.

                              A string containing the header name and value separated by a colon.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>custom_http_header</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="200">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-javascript_delay">
                        JavaScript Delay
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-javascript_delay"
                        name="save-as-image-pdfcrowd[javascript_delay]"
                        value="<?php esc_attr_e($javascript_delay); ?>"
                        placeholder="200" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Wait the specified number of milliseconds to finish all JavaScript after the document is loaded. Use this to ensure lazy-loaded images, AJAX content, or animations complete before conversion. Your license defines the maximum wait time by "Max Delay" parameter.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>javascript_delay</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-wait_for_element">
                        Wait For Element
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-wait_for_element"
                        name="save-as-image-pdfcrowd[wait_for_element]"
                        value="<?php esc_attr_e($wait_for_element); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Wait for the specified element in a source document. Use this when specific dynamic content must be ready before conversion, avoiding unnecessary delays from a fixed JavaScript delay. The element is specified by one or more <a href='https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors'>CSS selectors</a>. The element is searched for in the main document and all iframes.
If the element is not found, the conversion fails. Your license defines the maximum wait time by the "Max Delay" parameter.

                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>wait_for_element</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
         <fieldset class="save-as-image-pdfcrowd-fieldset">
           <legend>Partial Conversion</legend>
               <table class="form-table">
        <tbody>
            <tr class="save-as-image-pdfcrowd-set-group "
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-element_to_convert">
                        Element To Convert
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-element_to_convert"
                        name="save-as-image-pdfcrowd[element_to_convert]"
                        value="<?php esc_attr_e($element_to_convert); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Convert only the specified element from the main document and its children. Use this to extract specific portions of a page (like article content) while excluding navigation, headers, footers, or sidebars. The element is specified by one or more <a href='https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors'>CSS selectors</a>. If the element is not found, the conversion fails. If multiple elements are found, the first one is used.
                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>element_to_convert</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="cut-out">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-element_to_convert_mode">
                        Element To Convert Mode
                    </label>
                </th>
                <td>
                    <fieldset id="save-as-image-pdfcrowd-element_to_convert_mode">
                        <legend class="screen-reader-text">
                            <span>Element To Convert Mode</span>
                        </legend>
                        <label>
                            <input type="radio" value="cut-out"
                                   name="save-as-image-pdfcrowd[element_to_convert_mode]"
                                   autocomplete="off"
                                   <?php checked($element_to_convert_mode, 'cut-out');?>>
                            The element and its children are cut out of the document.
                        </label><br>
                        <label>
                            <input type="radio" value="remove-siblings"
                                   name="save-as-image-pdfcrowd[element_to_convert_mode]"
                                   autocomplete="off"
                                   <?php checked($element_to_convert_mode, 'remove-siblings');?>>
                            All element's siblings are removed from the DOM.
                        </label><br>
                        <label>
                            <input type="radio" value="hide-siblings"
                                   name="save-as-image-pdfcrowd[element_to_convert_mode]"
                                   autocomplete="off"
                                   <?php checked($element_to_convert_mode, 'hide-siblings');?>>
                            All element's siblings are hidden using display:none.
                        </label><br>
                    </fieldset>
                    </select>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Control how CSS styles are applied when converting only part of a page. The <code>"cut-out"</code> option extracts the element into a new document root, which may break CSS selectors like <code>"body > div"</code>. The <code>"remove-siblings"</code> option keeps the element in its original DOM position but deletes other elements, preserving descendant selectors. The <code>"hide-siblings"</code> option keeps all elements but hides non-selected ones with <code>display:none</code>, preserving all CSS context.

                          </div>
                            <br>Possible values: <ul><li>"cut-out" - The element and its children are cut out of the document.</li><li>"remove-siblings" - All element's siblings are removed from the DOM. Keeps target element in position but may break descendant CSS selectors.</li><li>"hide-siblings" - All element's siblings are hidden using display:none. Preserves CSS context while hiding non-target content.</li></ul>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>element_to_convert_mode</strong>"<br>Possible values: "cut-out", "remove-siblings", "hide-siblings"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-auto_detect_element_to_convert">
                        Auto Detect Element To Convert
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-auto_detect_element_to_convert" name="save-as-image-pdfcrowd[auto_detect_element_to_convert]" value="1" <?php checked( $auto_detect_element_to_convert, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            The main HTML element for conversion is detected automatically. Use this when you want to extract article or main content without knowing the exact CSS selector, automatically excluding navigation and sidebars.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>auto_detect_element_to_convert</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="none">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-readability_enhancements">
                        Readability Enhancements
                    </label>
                </th>
                <td>
                    <select name="save-as-image-pdfcrowd[readability_enhancements]" id="save-as-image-pdfcrowd-readability_enhancements" autocomplete="off">
                    <option value="none" <?php selected($readability_enhancements, 'none');?>>none</option>
                    <option value="readability-v1" <?php selected($readability_enhancements, 'readability-v1');?>>readability-v1</option>
                    <option value="readability-v2" <?php selected($readability_enhancements, 'readability-v2');?>>readability-v2</option>
                    <option value="readability-v3" <?php selected($readability_enhancements, 'readability-v3');?>>readability-v3</option>
                    <option value="readability-v4" <?php selected($readability_enhancements, 'readability-v4');?>>readability-v4</option>
                    </select>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Automatically enhance the input HTML to improve readability by removing clutter and reformatting content. Use this when converting web pages with excessive navigation, ads, or sidebars that distract from the main content.
Different versions (<code>v1-v4</code>) use progressively aggressive algorithms - start with <code>"v1"</code> and increase if more cleanup is needed. Ideal for converting blog posts, articles, or documentation into clean PDFs.

                          </div>
                            <br>Possible values: <ul><li>"none" - No enhancements are used.</li><li>"readability-v1" - Version 1 of the enhancements is used. Basic cleanup for simple pages with moderate clutter.</li><li>"readability-v2" - Version 2 of the enhancements is used. More aggressive cleanup for pages with more ads and navigation.</li><li>"readability-v3" - Version 3 of the enhancements is used. Strong cleanup for heavily cluttered pages with multiple sidebars.</li><li>"readability-v4" - Version 4 of the enhancements is used. Maximum cleanup for extremely cluttered pages. May remove some content.</li></ul>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>readability_enhancements</strong>"<br>Possible values: "none", "readability-v1", "readability-v2", "readability-v3", "readability-v4"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
         </fieldset>
     </div>
     <div id="save-as-image-pdfcrowd-data"
          class="save-as-image-pdfcrowd-category-wrap">
       <div class="save-as-image-pdfcrowd-heading-wrap ">
         <h2>Data</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_string">
                        Data String
                    </label>
                </th>
                <td>
                    <textarea id="save-as-image-pdfcrowd-data_string" name="save-as-image-pdfcrowd[data_string]" placeholder=""
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($data_string); ?></textarea>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set the input data for template rendering. The data format can be JSON, XML, YAML or CSV.
                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_string</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_file">
                        Data File
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-data_file"
                        name="save-as-image-pdfcrowd[data_file]"
                        value="<?php esc_attr_e($data_file); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Load the input data for template rendering from the specified file. The data format can be JSON, XML, YAML or CSV.
                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_file</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="auto">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_format">
                        Data Format
                    </label>
                </th>
                <td>
                    <select name="save-as-image-pdfcrowd[data_format]" id="save-as-image-pdfcrowd-data_format" autocomplete="off">
                    <option value="auto" <?php selected($data_format, 'auto');?>>auto</option>
                    <option value="json" <?php selected($data_format, 'json');?>>json</option>
                    <option value="xml" <?php selected($data_format, 'xml');?>>xml</option>
                    <option value="yaml" <?php selected($data_format, 'yaml');?>>yaml</option>
                    <option value="csv" <?php selected($data_format, 'csv');?>>csv</option>
                    </select>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Specify the input data format. Use <code>"auto"</code> for automatic detection or explicitly set to JSON, XML, YAML, or CSV when format is known.
                          </div>
                            <br>Possible values: <ul><li>"auto" - The data format is auto-detected.</li><li>"json"</li><li>"xml"</li><li>"yaml"</li><li>"csv"</li></ul>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_format</strong>"<br>Possible values: "auto", "json", "xml", "yaml", "csv"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="utf-8">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_encoding">
                        Data Encoding
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-data_encoding"
                        name="save-as-image-pdfcrowd[data_encoding]"
                        value="<?php esc_attr_e($data_encoding); ?>"
                        placeholder="utf-8" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                             Set the encoding of the data file set by <a href='https://pdfcrowd.com/api/html-to-pdf-php/ref/#set_data_file'>setDataFile</a>.
                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_encoding</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_ignore_undefined">
                        Data Ignore Undefined
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-data_ignore_undefined" name="save-as-image-pdfcrowd[data_ignore_undefined]" value="1" <?php checked( $data_ignore_undefined, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Ignore undefined variables in the HTML template. The default mode is strict so any undefined variable causes the conversion to fail. You can use <span class='field-value text-nowrap'>&#x007b;&#x0025; if variable is defined &#x0025;&#x007d;</span> to check if the variable is defined.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_ignore_undefined</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_auto_escape">
                        Data Auto Escape
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-data_auto_escape" name="save-as-image-pdfcrowd[data_auto_escape]" value="1" <?php checked( $data_auto_escape, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Auto escape HTML symbols in the input data before placing them into the output.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_auto_escape</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_trim_blocks">
                        Data Trim Blocks
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-data_trim_blocks" name="save-as-image-pdfcrowd[data_trim_blocks]" value="1" <?php checked( $data_trim_blocks, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Auto trim whitespace around each template command block.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_trim_blocks</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_options">
                        Data Options
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-data_options"
                        name="save-as-image-pdfcrowd[data_options]"
                        value="<?php esc_attr_e($data_options); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set the advanced data options as comma separated <code>key=value</code> pairs:<ul><li><code>csv_delimiter</code> - The CSV data delimiter, the default is <code>,</code>.</li><li><code>xml_remove_root</code> - Remove the root XML element from the input data.</li><li><code>data_root</code> - The name of the root element inserted into the input data without a root node (e.g. CSV), the default is <code>data</code>.</li></ul>
                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_options</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-image-pdfcrowd-miscellaneous"
          class="save-as-image-pdfcrowd-category-wrap">
       <div class="save-as-image-pdfcrowd-heading-wrap ">
         <h2>Miscellaneous</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-debug_log">
                        Debug Log
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-debug_log" name="save-as-image-pdfcrowd[debug_log]" value="1" <?php checked( $debug_log, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Turn on debug logging to troubleshoot conversion issues. Details about the conversion process, including resource loading, rendering steps, and error messages are stored in the debug log. Use this when conversions fail or produce unexpected results. The debug log is available in <a href='https://pdfcrowd.com/user/account/log/conversion/'>conversion statistics</a>.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>debug_log</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-tag">
                        Tag
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-tag"
                        name="save-as-image-pdfcrowd[tag]"
                        value="<?php esc_attr_e($tag); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Tag the conversion with a custom value for tracking and analytics. Use this to categorize conversions by customer ID, document type, or business unit. The tag appears in <a href='https://pdfcrowd.com/user/account/log/conversion/'>conversion statistics</a>. A value longer than 32 characters is cut off.
                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>tag</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-http_proxy">
                        HTTP Proxy
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-http_proxy"
                        name="save-as-image-pdfcrowd[http_proxy]"
                        value="<?php esc_attr_e($http_proxy); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            A proxy server used by the conversion process for accessing the source URLs with HTTP scheme. This can help circumvent regional restrictions or provide limited access to your intranet.
                              The value must have format DOMAIN_OR_IP_ADDRESS:PORT.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>http_proxy</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-https_proxy">
                        HTTPS Proxy
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-https_proxy"
                        name="save-as-image-pdfcrowd[https_proxy]"
                        value="<?php esc_attr_e($https_proxy); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            A proxy server used by the conversion process for accessing the source URLs with HTTPS scheme. This can help circumvent regional restrictions or provide limited access to your intranet.
                              The value must have format DOMAIN_OR_IP_ADDRESS:PORT.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>https_proxy</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-client_certificate">
                        Client Certificate
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-client_certificate"
                        name="save-as-image-pdfcrowd[client_certificate]"
                        value="<?php esc_attr_e($client_certificate); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            A client certificate to authenticate the converter on your web server. The certificate is used for two-way SSL/TLS authentication (mutual TLS) and adds extra security. Use this when converting content from servers that require client certificate authentication for access.
                              The file must exist and not be empty.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>client_certificate</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-client_certificate_password">
                        Client Certificate Password
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-client_certificate_password"
                        name="save-as-image-pdfcrowd[client_certificate_password]"
                        value="<?php esc_attr_e($client_certificate_password); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            A password for the PKCS12 file with a client certificate if the certificate file is password-protected.
                              
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>client_certificate_password</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-image-pdfcrowd-tweaks"
          class="save-as-image-pdfcrowd-category-wrap">
       <div class="save-as-image-pdfcrowd-heading-wrap ">
         <h2>Tweaks</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-max_loading_time">
                        Max Loading Time
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-max_loading_time"
                        name="save-as-image-pdfcrowd[max_loading_time]"
                        value="<?php esc_attr_e($max_loading_time); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set the maximum time for loading the page and its resources. After this time, all requests will be considered successful. This can be useful to ensure that the conversion does not timeout. Use this method if there is no other way to fix page loading.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>max_loading_time</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="latest-chrome-desktop">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-converter_user_agent">
                        Converter User Agent
                    </label>
                </th>
                <td>
                    <div class="save-as-image-pdfcrowd-editable-select">
                    <select id="save-as-image-pdfcrowd-converter_user_agent-s-wrap" autocomplete="off">
                    <option value="chrome-desktop" <?php selected($converter_user_agent, 'chrome-desktop');?>>chrome-desktop</option>
                    <option value="chrome-mobile" <?php selected($converter_user_agent, 'chrome-mobile');?>>chrome-mobile</option>
                    <option value="latest-chrome-desktop" <?php selected($converter_user_agent, 'latest-chrome-desktop');?>>latest-chrome-desktop</option>
                    <option value="latest-chrome-mobile" <?php selected($converter_user_agent, 'latest-chrome-mobile');?>>latest-chrome-mobile</option>
                    <option value="custom string" <?php selected($converter_user_agent, 'custom string');?> data-custom="string_value">custom string</option>
                    </select>
                    <div class="save-as-image-pdfcrowd-ed-sel-input-wrap">
                    <input type="text"
                           class="regular-text"
                           name="save-as-image-pdfcrowd[converter_user_agent]"
                           id="save-as-image-pdfcrowd-converter_user_agent"
                           value="<?php esc_attr_e($converter_user_agent); ?>"
                           placeholder="Enter custom string"
                           autocomplete="off">
                    </div>
                    </div>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Specify the User-Agent HTTP header that will be used by the converter when a request is made to the converted web page.
                          </div>
                            <br>Possible values: <ul><li>"chrome-desktop" - The user-agent for desktop chrome corresponding to the converter used.</li><li>"chrome-mobile" - The user-agent for mobile chrome corresponding to the converter used.</li><li>"latest-chrome-desktop" - The user-agent of the recently released Chrome browser on desktops.</li><li>"latest-chrome-mobile" - The user-agent of the recently released Chrome browser on mobile devices.</li><li>A custom string for the user agent.</li></ul>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>converter_user_agent</strong>"<br>Possible values: "chrome-desktop", "chrome-mobile", "latest-chrome-desktop", "latest-chrome-mobile", "specific string value"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-image-pdfcrowd-api-client-options"
          class="save-as-image-pdfcrowd-category-wrap">
       <div class="save-as-image-pdfcrowd-heading-wrap ">
         <h2>API Client Options</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="24.04">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-converter_version">
                        Converter Version
                    </label>
                </th>
                <td>
                    <select name="save-as-image-pdfcrowd[converter_version]" id="save-as-image-pdfcrowd-converter_version" autocomplete="off">
                    <option value="24.04" <?php selected($converter_version, '24.04');?>>24.04</option>
                    <option value="20.10" <?php selected($converter_version, '20.10');?>>20.10</option>
                    <option value="18.10" <?php selected($converter_version, '18.10');?>>18.10</option>
                    </select>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Set the converter version. Different versions may produce different output. Choose which one provides the best output for your case.
                          </div>
                            <br>Possible values: <ul><li>"24.04" - Version 24.04.</li><li>"20.10" - Version 20.10.</li><li>"18.10" - Version 18.10.</li></ul>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>converter_version</strong>"<br>Possible values: "24.04", "20.10", "18.10", "latest"
                        </div>
                </td>
            </tr>
            <?php if($enable_cookies_opt): ?>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-use_http">
                        Use HTTP
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-use_http" name="save-as-image-pdfcrowd[use_http]" value="1" <?php checked( $use_http, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Specify whether to use HTTP or HTTPS when connecting to the PDFCrowd API.
                          </div>
                              <div class='save-as-image-pdfcrowd-note'>
                                <strong>Warning:</strong> Using HTTP is insecure as data sent over HTTP is not encrypted. Enable this option only if you know what you are doing.
                              </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>use_http</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <?php endif; ?>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="1">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-retry_count">
                        Retry Count
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-image-pdfcrowd-retry_count"
                        name="save-as-image-pdfcrowd[retry_count]"
                        value="<?php esc_attr_e($retry_count); ?>"
                        placeholder="1" autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Specify the number of automatic retries when a 502 or 503 HTTP status code is received. The status code indicates a temporary network issue. This feature can be disabled by setting to 0.
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>retry_count</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
   </div>

   <div id="save-as-image-pdfcrowd-no-filter-res"
        class="save-as-image-pdfcrowd-no-setting-res">
     No setting name matches.
   </div>

   <div id="save-as-image-pdfcrowd-no-changes"
        class="save-as-image-pdfcrowd-no-setting-res">
     No setting is changed.
   </div>
</div>
