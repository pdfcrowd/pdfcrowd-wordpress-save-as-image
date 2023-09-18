<?php

/**
* Partial of the mode settings
*
*
*
* @link       https://pdfcrowd.com/save-as-image-wordpress-plugin/
* @since      2.3.0
*
* @package    Save_As_Image_Pdfcrowd
* @subpackage Save_As_Image_Pdfcrowd/admin/partials
*/
?>

 <div id="save-as-image-pdfcrowd-mode"
      class="save-as-image-pdfcrowd-category-wrap">
   <div class="save-as-image-pdfcrowd-heading-wrap save-as-image-pdfcrowd-basic-heading-wrap">
     <h2>Mode</h2>
   </div>

    <table class="form-table">
        <tbody>
          <tr class="save-as-image-pdfcrowd-set-group"
              data-default="url">
                <th scope="row">
                    Conversion Mode
                </th>
                <td>
                    <div class="save-as-image-pdfcrowd-devi save-as-image-pdfcrowd-mb-2">
                        Shortcode and function parameter: "<strong>conversion_mode</strong>"<br>Possible values: "url", "upload", "content", "development", "auto"
                    </div>
                    <fieldset id="save-as-image-pdfcrowd-conversion_mode">
                        <legend class="screen-reader-text">
                            <span>Conversion Mode</span>
                        </legend>
                        <div>
                        <label for="save-as-image-pdfcrowd-conversion-mode-url">
                            <input type="radio" id="save-as-image-pdfcrowd-conversion-mode-url" name="save-as-image-pdfcrowd[conversion_mode]" value="url" <?php checked( $conversion_mode, "url" ); ?> autocomplete="off" />
                            URL
                        </label>
                        </div>
                        <div class='save-as-image-pdfcrowd-description save-as-image-pdfcrowd-nested-dsc'>
                           The web page URL is uploaded for the conversion.<br>This mode is suitable for a public website.
                        </div>
                        <div>
                        <label for="save-as-image-pdfcrowd-conversion-mode-upload">
                            <input type="radio" id="save-as-image-pdfcrowd-conversion-mode-upload" name="save-as-image-pdfcrowd[conversion_mode]" value="upload" <?php checked( $conversion_mode, "upload" ); ?> autocomplete="off" />
                            Upload
                        </label>
                        </div>
                        <div class='save-as-image-pdfcrowd-description save-as-image-pdfcrowd-nested-dsc'>
                           The contents of the web page is uploaded for the conversion.<br>This mode is suitable for any website, password-protected or not publicly accessible website.
                        </div>
                        <div>
                        <label for="save-as-image-pdfcrowd-conversion-mode-content">
                            <input type="radio" id="save-as-image-pdfcrowd-conversion-mode-content" name="save-as-image-pdfcrowd[conversion_mode]" value="content" <?php checked( $conversion_mode, "content" ); ?> autocomplete="off" />
                            Content
                        </label>
                        </div>
                        <div class='save-as-image-pdfcrowd-description save-as-image-pdfcrowd-nested-dsc'>
                           The current HTML contents shown in the browser is sent for conversion.<br>This mode is suitable for web forms and dynamic HTML contents.<br>It is recommended to check <a href="#" onclick="jQuery('#nav-save-as-image-pdfcrowd-general-options').click();">Disable JavaScript</a> option too or disable WordPress caching.
                        </div>
                          <div id="save-as-image-pdfcrowd-cm-content-options"
                               class="save-as-image-pdfcrowd-sub-option">
                               <input
                                 type="checkbox"
                                 id="save-as-image-pdfcrowd-button-user-drawings"
                                 name="save-as-image-pdfcrowd[button_user_drawings]"
                                 data-parent-opt="#save-as-image-pdfcrowd-conversion-mode-content"
                                 value="1" <?php checked( $button_user_drawings, 1 ); ?> autocomplete="off" />
                             <label for="save-as-image-pdfcrowd-button-user-drawings"
                                    style="margin: 0 !important">
                                User-Created Drawings
                            </label>
                            <div class="save-as-image-pdfcrowd-nested-dsc">
                               <div class="save-as-image-pdfcrowd-description">
                                Enable this option if you want to capture user-created canvas drawings.
                               </div>
                               <div class='save-as-image-pdfcrowd-devi'>
                                 Shortcode and function parameter: "<strong>button_user_drawings</strong>"<br>Possible values: 0, 1
                               </div>
                            </div>
                        </div>
                        <div>
                        <label for="save-as-image-pdfcrowd-conversion-mode-development">
                            <input type="radio" id="save-as-image-pdfcrowd-conversion-mode-development" name="save-as-image-pdfcrowd[conversion_mode]" value="development" <?php checked( $conversion_mode, "development" ); ?> autocomplete="off" />
                            Development
                        </label>
                        </div>
                        <div class='save-as-image-pdfcrowd-description save-as-image-pdfcrowd-nested-dsc'>
                           The contents of the web page and some local assets are uploaded for the conversion.<br>This mode is suitable for a website which is not accessible from the Internet (e.g. localhost).<br>Local images and some CSS may not appear in the converted document.
                        </div>
                        <div>
                        <label for="save-as-image-pdfcrowd-conversion-mode-auto">
                            <input type="radio" id="save-as-image-pdfcrowd-conversion-mode-auto" name="save-as-image-pdfcrowd[conversion_mode]" value="auto" <?php checked( $conversion_mode, "auto" ); ?> autocomplete="off" />
                            Auto
                        </label>
                        </div>
                        <div class='save-as-image-pdfcrowd-description save-as-image-pdfcrowd-nested-dsc'>
                           If web page URL is specified explicitly, the "url" mode is used otherwise "upload" mode is used.
                        </div>
                    </fieldset>
                    <div class="save-as-image-pdfcrowd-description">
                      Specify the source for the conversion to the image.
                    </div>
                </td>
            </tr>
          <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
              data-default="auto">
                <th scope="row">
                    URL Lookup
                </th>
                <td>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>url_lookup</strong>"<br>Possible values: "auto", "location", "permalink"
                    </div>
                    <fieldset id="save-as-image-pdfcrowd-url-lookup">
                        <legend class="screen-reader-text">
                            <span>URL Lookup</span>
                        </legend>
                        <div>
                        <label for="save-as-image-pdfcrowd-url-lookup-auto">
                            <input type="radio" id="save-as-image-pdfcrowd-url-lookup-auto" name="save-as-image-pdfcrowd[url_lookup]" value="auto" <?php checked( $url_lookup, "auto" ); ?> autocomplete="off" />
                            Auto
                        </label>
                        </div>
                        <div>
                        <label for="save-as-image-pdfcrowd-url-lookup-location">
                            <input type="radio" id="save-as-image-pdfcrowd-url-lookup-location" name="save-as-image-pdfcrowd[url_lookup]" value="location" <?php checked( $url_lookup, "location" ); ?> autocomplete="off" />
                            Location
                        </label>
                        </div>
                        <div>
                        <label for="save-as-image-pdfcrowd-url-lookup-permalink">
                            <input type="radio" id="save-as-image-pdfcrowd-url-lookup-permalink" name="save-as-image-pdfcrowd[url_lookup]" value="permalink" <?php checked( $url_lookup, "permalink" ); ?> autocomplete="off" />
                            Permalink
                        </label>
                        </div>
                    </fieldset>
                    <div class='save-as-image-pdfcrowd-description'>
                        It allows to choose how to retrieve URLs for the Conversion Mode-URL.
                        It is suitable for a website using different location than permalink.
                    </div>
                </td>
            </tr>
            <?php if($enable_cookies_opt): ?>
          <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
              data-default="0">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-auto-use-cookies">
                        Auto Use Cookies
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-auto-use-cookies" name="save-as-image-pdfcrowd[auto_use_cookies]" value="1" <?php checked( $auto_use_cookies, 1 ); ?> autocomplete="off" />
                    <div class='save-as-image-pdfcrowd-description'>
                        All cookies are sent automatically into the conversion process. It is suitable for a password-protected website. These cookies are appended to the
                        <a href="#" onclick="jQuery('#nav-save-as-image-pdfcrowd-general-options').click();">
                            Cookies
                        </a>
                        option.
                    </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>auto_use_cookies</strong>"<br>Possible values: 0, 1
                    </div>
                </td>
            </tr>
            <?php endif; ?>
          <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
              data-default="">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-diagnostics">
                        Diagnostics
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-diagnostics" name="save-as-image-pdfcrowd[diagnostics]" value="1" <?php checked( $diagnostics, 1 ); ?> autocomplete="off" />
                    <div class="save-as-image-pdfcrowd-description">
                      <div>
                        <strong>Warning:</strong>
                        for developers only
                      </div>
                      <div>
                        Diagnostics data is displayed above the conversion button.
                        It helps to identify the issue with the button.
                      </div>
                    </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                      Shortcode and function parameter: "<strong>diagnostics</strong>"<br>Possible values: 0, 1
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
