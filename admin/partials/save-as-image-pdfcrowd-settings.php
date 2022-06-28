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
?>

<div id="save-as-image-pdfcrowd-conversion-format" class="wrap metabox-holder columns-2 save-as-image-pdfcrowd-metaboxes hidden">

    <h2>Conversion Format</h2>
    
    <a href='#' class='save-as-image-pdfcrowd-expert-show button-secondary' title='Shortcode and PHP function parameters'>
        Show parameters
    </a>
    <a href='#' class='save-as-image-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
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
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>output_format</strong>"<br>Possible values: "png", "jpg", "gif", "tiff", "bmp", "ico", "ppm", "pgm", "pbm", "pnm", "psb", "pct", "ras", "tga", "sgi", "sun", "webp"
                        </div>
                        <div class='description'>
                            The format of the output file.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-image-pdfcrowd-general-options" class="wrap metabox-holder columns-2 save-as-image-pdfcrowd-metaboxes hidden">

    <h2>General Options</h2>
    
    <a href='#' class='save-as-image-pdfcrowd-expert-show button-secondary' title='Shortcode and PHP function parameters'>
        Show parameters
    </a>
    <a href='#' class='save-as-image-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-use_print_media">
                        Use Print Media
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-use_print_media" name="save-as-image-pdfcrowd[use_print_media]" value="1" <?php checked( $use_print_media, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>use_print_media</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Use the print version of the page if available (@media print).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-no_background">
                        No Background
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-no_background" name="save-as-image-pdfcrowd[no_background]" value="1" <?php checked( $no_background, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>no_background</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Do not print the background graphics. Absolute or relative filepath can be used. To apply WordPress uploaded media use e.g. ../wp-content/uploads/2019/06/your-file.pdf.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-disable_javascript">
                        Disable JavaScript
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-disable_javascript" name="save-as-image-pdfcrowd[disable_javascript]" value="1" <?php checked( $disable_javascript, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>disable_javascript</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Do not execute JavaScript.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-disable_image_loading">
                        Disable Image Loading
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-disable_image_loading" name="save-as-image-pdfcrowd[disable_image_loading]" value="1" <?php checked( $disable_image_loading, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>disable_image_loading</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Do not load images.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-disable_remote_fonts">
                        Disable Remote Fonts
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-disable_remote_fonts" name="save-as-image-pdfcrowd[disable_remote_fonts]" value="1" <?php checked( $disable_remote_fonts, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>disable_remote_fonts</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Disable loading fonts from remote sources.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-use_mobile_user_agent">
                        Use Mobile User Agent
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-use_mobile_user_agent" name="save-as-image-pdfcrowd[use_mobile_user_agent]" value="1" <?php checked( $use_mobile_user_agent, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>use_mobile_user_agent</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Use a mobile user agent.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-load_iframes">
                        Load Iframes
                    </label>
                </th>
                <td>
                    <select name="save-as-image-pdfcrowd[load_iframes]" id="save-as-image-pdfcrowd-load_iframes" autocomplete="off">
                    <option value="all" <?php selected($load_iframes, 'all');?>>All iframes are loaded.</option>
                    <option value="same-origin" <?php selected($load_iframes, 'same-origin');?>>Only iframes with the same origin as the main page are loaded.</option>
                    <option value="none" <?php selected($load_iframes, 'none');?>>Iframe loading is disabled.</option>
                    </select>
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>load_iframes</strong>"<br>Possible values: <ul><li>"all" - All iframes are loaded.</li><li>"same-origin" - Only iframes with the same origin as the main page are loaded.</li><li>"none" - Iframe loading is disabled.</li></ul>
                        </div>
                        <div class='description'>
                            Specifies how iframes are handled.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-block_ads">
                        Block Ads
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-block_ads" name="save-as-image-pdfcrowd[block_ads]" value="1" <?php checked( $block_ads, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>block_ads</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Try to block ads. Enabling this option can produce smaller output and speed up the conversion.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-default_encoding">
                        Default Encoding
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-default_encoding" name="save-as-image-pdfcrowd[default_encoding]" value="<?php echo($default_encoding); ?>" placeholder="auto detect" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>default_encoding</strong>"
                        </div>
                        <div class='description'>
                            Set the default HTML content text encoding.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-locale">
                        Locale
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-locale" name="save-as-image-pdfcrowd[locale]" value="<?php echo($locale); ?>" placeholder="en-US" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>locale</strong>"
                        </div>
                        <div class='description'>
                            Set the locale for the conversion. This may affect the output format of dates, times and numbers.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-http_auth_user_name">
                        HTTP Auth User Name
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-http_auth_user_name" name="save-as-image-pdfcrowd[http_auth_user_name]" value="<?php echo($http_auth_user_name); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>http_auth_user_name</strong>"
                        </div>
                        <div class='description'>
                            Set the HTTP authentication user name.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-http_auth_password">
                        HTTP Auth Password
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-http_auth_password" name="save-as-image-pdfcrowd[http_auth_password]" value="<?php echo($http_auth_password); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>http_auth_password</strong>"
                        </div>
                        <div class='description'>
                            Set the HTTP authentication password.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-cookies">
                        Cookies
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-cookies" name="save-as-image-pdfcrowd[cookies]" value="<?php echo($cookies); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>cookies</strong>"
                        </div>
                        <div class='description'>
                            Set cookies that are sent in Pdfcrowd HTTP requests.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-verify_ssl_certificates">
                        Verify SSL Certificates
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-verify_ssl_certificates" name="save-as-image-pdfcrowd[verify_ssl_certificates]" value="1" <?php checked( $verify_ssl_certificates, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>verify_ssl_certificates</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Do not allow insecure HTTPS connections.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-fail_on_main_url_error">
                        Fail On Main URL Error
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-fail_on_main_url_error" name="save-as-image-pdfcrowd[fail_on_main_url_error]" value="1" <?php checked( $fail_on_main_url_error, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>fail_on_main_url_error</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Abort the conversion if the main URL HTTP status code is greater than or equal to 400.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-fail_on_any_url_error">
                        Fail On Any URL Error
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-fail_on_any_url_error" name="save-as-image-pdfcrowd[fail_on_any_url_error]" value="1" <?php checked( $fail_on_any_url_error, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>fail_on_any_url_error</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Abort the conversion if any of the sub-request HTTP status code is greater than or equal to 400 or if some sub-requests are still pending. See details in a debug log.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-no_xpdfcrowd_header">
                        No X-Pdfcrowd Header
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-no_xpdfcrowd_header" name="save-as-image-pdfcrowd[no_xpdfcrowd_header]" value="1" <?php checked( $no_xpdfcrowd_header, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>no_xpdfcrowd_header</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Do not send the X-Pdfcrowd HTTP header in Pdfcrowd HTTP requests.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-custom_javascript">
                        Custom JavaScript
                    </label>
                </th>
                <td>
                    <textarea id="save-as-image-pdfcrowd-custom_javascript" name="save-as-image-pdfcrowd[custom_javascript]" placeholder="" rows=5 cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php echo($custom_javascript); ?></textarea>
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>custom_javascript</strong>"
                        </div>
                        <div class='description'>
                            Run a custom JavaScript after the document is loaded and ready to print. The script is intended for post-load DOM manipulation (add/remove elements, update CSS, ...). In addition to the standard browser APIs, the custom JavaScript code can use helper functions from our <a href='https://pdfcrowd.com/doc/api/libpdfcrowd/'>JavaScript library</a>.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-on_load_javascript">
                        On Load JavaScript
                    </label>
                </th>
                <td>
                    <textarea id="save-as-image-pdfcrowd-on_load_javascript" name="save-as-image-pdfcrowd[on_load_javascript]" placeholder="" rows=5 cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php echo($on_load_javascript); ?></textarea>
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>on_load_javascript</strong>"
                        </div>
                        <div class='description'>
                            Run a custom JavaScript right after the document is loaded. The script is intended for early DOM manipulation (add/remove elements, update CSS, ...). In addition to the standard browser APIs, the custom JavaScript code can use helper functions from our <a href='https://pdfcrowd.com/doc/api/libpdfcrowd/'>JavaScript library</a>.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-custom_http_header">
                        Custom HTTP Header
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-custom_http_header" name="save-as-image-pdfcrowd[custom_http_header]" value="<?php echo($custom_http_header); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>custom_http_header</strong>"
                        </div>
                        <div class='description'>
                            Set a custom HTTP header that is sent in Pdfcrowd HTTP requests.
                            A string containing the header name and value separated by a colon.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-javascript_delay">
                        JavaScript Delay
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-javascript_delay" name="save-as-image-pdfcrowd[javascript_delay]" value="<?php echo($javascript_delay); ?>" placeholder="200" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>javascript_delay</strong>"
                        </div>
                        <div class='description'>
                            Wait the specified number of milliseconds to finish all JavaScript after the document is loaded. Your API license defines the maximum wait time by "Max Delay" parameter.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-wait_for_element">
                        Wait For Element
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-wait_for_element" name="save-as-image-pdfcrowd[wait_for_element]" value="<?php echo($wait_for_element); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>wait_for_element</strong>"
                        </div>
                        <div class='description'>
                            Wait for the specified element in a source document. The element is specified by one or more <a href='https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors'>CSS selectors</a>. The element is searched for in the main document and all iframes. If the element is not found, the conversion fails. Your API license defines the maximum wait time by "Max Delay" parameter.
                            
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
<fieldset class="save-as-image-pdfcrowd-fieldset">
<legend>Partial Conversion</legend>
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-element_to_convert">
                        Element To Convert
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-element_to_convert" name="save-as-image-pdfcrowd[element_to_convert]" value="<?php echo($element_to_convert); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>element_to_convert</strong>"
                        </div>
                        <div class='description'>
                            Convert only the specified element from the main document and its children. The element is specified by one or more <a href='https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors'>CSS selectors</a>. If the element is not found, the conversion fails. If multiple elements are found, the first one is used.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
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
                            All element's siblings are removed.
                        </label><br>
                        <label>
                            <input type="radio" value="hide-siblings"
                                   name="save-as-image-pdfcrowd[element_to_convert_mode]"
                                   autocomplete="off"
                                   <?php checked($element_to_convert_mode, 'hide-siblings');?>>
                            All element's siblings are hidden.
                        </label><br>
                    </fieldset>
                    </select>
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>element_to_convert_mode</strong>"<br>Possible values: <ul><li>"cut-out" - The element and its children are cut out of the document.</li><li>"remove-siblings" - All element's siblings are removed.</li><li>"hide-siblings" - All element's siblings are hidden.</li></ul>
                        </div>
                        <div class='description'>
                            Specify the DOM handling when only a part of the document is converted. This can affect the CSS rules used.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-auto_detect_element_to_convert">
                        Auto Detect Element To Convert
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-auto_detect_element_to_convert" name="save-as-image-pdfcrowd[auto_detect_element_to_convert]" value="1" <?php checked( $auto_detect_element_to_convert, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>auto_detect_element_to_convert</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            The main HTML element for conversion is detected automatically.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-readability_enhancements">
                        Readability Enhancements
                    </label>
                </th>
                <td>
                    <select name="save-as-image-pdfcrowd[readability_enhancements]" id="save-as-image-pdfcrowd-readability_enhancements" autocomplete="off">
                    <option value="none" <?php selected($readability_enhancements, 'none');?>>No enhancements are applied.</option>
                    <option value="readability-v1" <?php selected($readability_enhancements, 'readability-v1');?>>Enhancements are applied.</option>
                    </select>
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>readability_enhancements</strong>"<br>Possible values: <ul><li>"none" - No enhancements are applied.</li><li>"readability-v1" - Enhancements are applied.</li></ul>
                        </div>
                        <div class='description'>
                            The input HTML is automatically enhanced to improve the readability.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</fieldset>
</div>
<div id="save-as-image-pdfcrowd-image-output" class="wrap metabox-holder columns-2 save-as-image-pdfcrowd-metaboxes hidden">

    <h2>Image Output</h2>
    
    <a href='#' class='save-as-image-pdfcrowd-expert-show button-secondary' title='Shortcode and PHP function parameters'>
        Show parameters
    </a>
    <a href='#' class='save-as-image-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-screenshot_width">
                        Screenshot Width
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-screenshot_width" name="save-as-image-pdfcrowd[screenshot_width]" value="<?php echo($screenshot_width); ?>" placeholder="1024" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>screenshot_width</strong>"
                        </div>
                        <div class='description'>
                            Set the output image width in pixels.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-screenshot_height">
                        Screenshot Height
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-screenshot_height" name="save-as-image-pdfcrowd[screenshot_height]" value="<?php echo($screenshot_height); ?>" placeholder="actual document height is used" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>screenshot_height</strong>"
                        </div>
                        <div class='description'>
                            Set the output image height in pixels. If it is not specified, actual document height is used.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-scale_factor">
                        Scale Factor
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-scale_factor" name="save-as-image-pdfcrowd[scale_factor]" value="<?php echo($scale_factor); ?>" placeholder="100" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>scale_factor</strong>"
                        </div>
                        <div class='description'>
                            Set the scaling factor (zoom) for the output image.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-background_color">
                        Background Color
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-background_color" name="save-as-image-pdfcrowd[background_color]" value="<?php echo($background_color); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>background_color</strong>"
                        </div>
                        <div class='description'>
                            The output image background color.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                            The value must be in RRGGBB or RRGGBBAA hexadecimal format.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-image-pdfcrowd-data" class="wrap metabox-holder columns-2 save-as-image-pdfcrowd-metaboxes hidden">

    <h2>Data</h2>
    
    <a href='#' class='save-as-image-pdfcrowd-expert-show button-secondary' title='Shortcode and PHP function parameters'>
        Show parameters
    </a>
    <a href='#' class='save-as-image-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_string">
                        Data String
                    </label>
                </th>
                <td>
                    <textarea id="save-as-image-pdfcrowd-data_string" name="save-as-image-pdfcrowd[data_string]" placeholder="" rows=5 cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php echo($data_string); ?></textarea>
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_string</strong>"
                        </div>
                        <div class='description'>
                            Set the input data for template rendering. The data format can be JSON, XML, YAML or CSV.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_file">
                        Data File
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-data_file" name="save-as-image-pdfcrowd[data_file]" value="<?php echo($data_file); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_file</strong>"
                        </div>
                        <div class='description'>
                            Load the input data for template rendering from the specified file. The data format can be JSON, XML, YAML or CSV.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_format">
                        Data Format
                    </label>
                </th>
                <td>
                    <select name="save-as-image-pdfcrowd[data_format]" id="save-as-image-pdfcrowd-data_format" autocomplete="off">
                    <option value="auto" <?php selected($data_format, 'auto');?>>the data format is auto detected</option>
                    <option value="json" <?php selected($data_format, 'json');?>>json</option>
                    <option value="xml" <?php selected($data_format, 'xml');?>>xml</option>
                    <option value="yaml" <?php selected($data_format, 'yaml');?>>yaml</option>
                    <option value="csv" <?php selected($data_format, 'csv');?>>csv</option>
                    </select>
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_format</strong>"<br>Possible values: <ul><li>"auto" - the data format is auto detected</li><li>"json"</li><li>"xml"</li><li>"yaml"</li><li>"csv"</li></ul>
                        </div>
                        <div class='description'>
                            Specify the input data format.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_encoding">
                        Data Encoding
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-data_encoding" name="save-as-image-pdfcrowd[data_encoding]" value="<?php echo($data_encoding); ?>" placeholder="utf-8" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_encoding</strong>"
                        </div>
                        <div class='description'>
                             Set the encoding of the data file set by <a href='https://pdfcrowd.com/doc/api/html-to-pdf/php/ref/#set_data_file'>setDataFile</a>.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_ignore_undefined">
                        Data Ignore Undefined
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-data_ignore_undefined" name="save-as-image-pdfcrowd[data_ignore_undefined]" value="1" <?php checked( $data_ignore_undefined, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_ignore_undefined</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Ignore undefined variables in the HTML template. The default mode is strict so any undefined variable causes the conversion to fail. You can use <span class='field-value text-nowrap'>&#x007b;&#x0025; if variable is defined &#x0025;&#x007d;</span> to check if the variable is defined.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_auto_escape">
                        Data Auto Escape
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-data_auto_escape" name="save-as-image-pdfcrowd[data_auto_escape]" value="1" <?php checked( $data_auto_escape, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_auto_escape</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Auto escape HTML symbols in the input data before placing them into the output.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_trim_blocks">
                        Data Trim Blocks
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-data_trim_blocks" name="save-as-image-pdfcrowd[data_trim_blocks]" value="1" <?php checked( $data_trim_blocks, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_trim_blocks</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Auto trim whitespace around each template command block.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-data_options">
                        Data Options
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-data_options" name="save-as-image-pdfcrowd[data_options]" value="<?php echo($data_options); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_options</strong>"
                        </div>
                        <div class='description'>
                            Set the advanced data options:<ul><li><span class='field-value'>csv_delimiter</span> - The CSV data delimiter, the default is <span class='field-value'>,</span>.</li><li><span class='field-value'>xml_remove_root</span> - Remove the root XML element from the input data.</li><li><span class='field-value'>data_root</span> - The name of the root element inserted into the input data without a root node (e.g. CSV), the default is <span class='field-value'>data</span>.</li></ul>
                            
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-image-pdfcrowd-miscellaneous" class="wrap metabox-holder columns-2 save-as-image-pdfcrowd-metaboxes hidden">

    <h2>Miscellaneous</h2>
    
    <a href='#' class='save-as-image-pdfcrowd-expert-show button-secondary' title='Shortcode and PHP function parameters'>
        Show parameters
    </a>
    <a href='#' class='save-as-image-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-debug_log">
                        Debug Log
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-debug_log" name="save-as-image-pdfcrowd[debug_log]" value="1" <?php checked( $debug_log, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>debug_log</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Turn on the debug logging. Details about the conversion are stored in the debug log. The debug log is available in <a href='https://pdfcrowd.com/user/account/log/conversion/'>conversion statistics</a>.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-tag">
                        Tag
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-tag" name="save-as-image-pdfcrowd[tag]" value="<?php echo($tag); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>tag</strong>"
                        </div>
                        <div class='description'>
                            Tag the conversion with a custom value. The tag is used in <a href='https://pdfcrowd.com/user/account/log/conversion/'>conversion statistics</a>. A value longer than 32 characters is cut off.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-http_proxy">
                        HTTP Proxy
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-http_proxy" name="save-as-image-pdfcrowd[http_proxy]" value="<?php echo($http_proxy); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>http_proxy</strong>"
                        </div>
                        <div class='description'>
                            A proxy server used by Pdfcrowd conversion process for accessing the source URLs with HTTP scheme. It can help to circumvent regional restrictions or provide limited access to your intranet.
                            The value must have format DOMAIN_OR_IP_ADDRESS:PORT.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-https_proxy">
                        HTTPS Proxy
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-https_proxy" name="save-as-image-pdfcrowd[https_proxy]" value="<?php echo($https_proxy); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>https_proxy</strong>"
                        </div>
                        <div class='description'>
                            A proxy server used by Pdfcrowd conversion process for accessing the source URLs with HTTPS scheme. It can help to circumvent regional restrictions or provide limited access to your intranet.
                            The value must have format DOMAIN_OR_IP_ADDRESS:PORT.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-client_certificate">
                        Client Certificate
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-client_certificate" name="save-as-image-pdfcrowd[client_certificate]" value="<?php echo($client_certificate); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>client_certificate</strong>"
                        </div>
                        <div class='description'>
                            A client certificate to authenticate Pdfcrowd converter on your web server. The certificate is used for two-way SSL/TLS authentication and adds extra security.
                            The file must exist and not be empty.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-client_certificate_password">
                        Client Certificate Password
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-client_certificate_password" name="save-as-image-pdfcrowd[client_certificate_password]" value="<?php echo($client_certificate_password); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>client_certificate_password</strong>"
                        </div>
                        <div class='description'>
                            A password for PKCS12 file with a client certificate if it is needed.
                            
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-image-pdfcrowd-api-client-options" class="wrap metabox-holder columns-2 save-as-image-pdfcrowd-metaboxes hidden">

    <h2>API Client Options</h2>
    
    <a href='#' class='save-as-image-pdfcrowd-expert-show button-secondary' title='Shortcode and PHP function parameters'>
        Show parameters
    </a>
    <a href='#' class='save-as-image-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-converter_version">
                        Converter Version
                    </label>
                </th>
                <td>
                    <select name="save-as-image-pdfcrowd[converter_version]" id="save-as-image-pdfcrowd-converter_version" autocomplete="off">
                    <option value="latest" <?php selected($converter_version, 'latest');?>>The latest converter version.</option>
                    <option value="20.10" <?php selected($converter_version, '20.10');?>>Version 20.10.</option>
                    <option value="18.10" <?php selected($converter_version, '18.10');?>>Version 18.10.</option>
                    </select>
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>converter_version</strong>"<br>Possible values: <ul><li>"latest" - The latest converter version.</li><li>"20.10" - Version 20.10.</li><li>"18.10" - Version 18.10.</li></ul>
                        </div>
                        <div class='description'>
                            Set the converter version. Different versions may produce different output. Choose which one provides the best output for your case.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-use_http">
                        Use HTTP
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-use_http" name="save-as-image-pdfcrowd[use_http]" value="1" <?php checked( $use_http, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>use_http</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Specifies if the client communicates over HTTP or HTTPS with Pdfcrowd API.
                        </div>
                            <div class='save-as-image-pdfcrowd-note'>
                                <strong>Warning:</strong> Using HTTP is insecure as data sent over HTTP is not encrypted. Enable this option only if you know what you are doing.
                            </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-retry_count">
                        Retry Count
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-image-pdfcrowd-retry_count" name="save-as-image-pdfcrowd[retry_count]" value="<?php echo($retry_count); ?>" placeholder="1" autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-m-description'>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>retry_count</strong>"
                        </div>
                        <div class='description'>
                            Specifies the number of automatic retries when the 502 HTTP status code is received. The 502 status code indicates a temporary network issue. This feature can be disabled by setting to 0.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
