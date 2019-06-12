=== Save as Image plugin by Pdfcrowd ===
Contributors: Pdfcrowd
Tags: image, print, save, page, save to image, save as image, convert to image, image print, image button, image widget, image plugin, pdfcrowd, html, page as image, png, jpg, jpeg, gif, bmp, webp, tiff
Requires PHP: 5
Requires at least: 4.0
Tested up to: 5.2.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Let your visitors to save pages as image by a single click. Reliable, fast and highly customizable.

== Description ==

Save as Image plugin is very easy to use. Just install and activate it. A button is placed automatically to your pages for a conversion. The conversion is done by a single click.

Save as Image plugin is using the Pdfcrowd API service for conversions. The Pdfcrowd API is fast, reliable and highly customizable.

The Pdfcrowd API is a professional solution for converting web pages and HTML documents to PDF and various image formats.
* The API implements the latest HTML5, CSS3 and JavaScript specifications.
* Easy integration, no third party libraries needed.
* Available on any platform that supports HTTP/HTTPS.

Pdfcrowd API offers massive concurrency, making it fully available on high traffic sites.

**Features**

Save as Image plugin can convert the whole pages or just parts. It can convert a password protected sites with HTTP basic authentication.

Pdfcrowd API preserves styles and 2 different layouts can be choosen:

* screen - the output looks like in a web browser
* print - the output looks like printed

**Configuration**

Save as Image plugin provides many conversion options. You can setup e.g.
* image format
* image size
* scale factor
* run custom Javascript

All options are available on the Settings page.

**Shortcodes**

**[save_as_image_pdfcrowd]** shortcode places button to the content. The button will convert the page address (URL) to image.

Use **[string_save_as_image_pdfcrowd]** with the closing tag **[/string_save_as_image_pdfcrowd]** shortcode to convert just a part of your page to image.

Each shortcode can customize the button and the conversion by overriding any option defined on the Settings page.

E.g. to override page size to Letter and create red button use:

`[save_as_image_pdfcrowd page_size='letter' button_background_color='red']`

**Create Button in PHP**

The conversion button can be created directly in your PHP code by a helper function **create_save_as_image_pdfcrowd_button**($options = array()), e.g.

`<?php create_save_as_image_pdfcrowd_button(array('page_size' => 'letter', 'button_hidden' => 0)); ?>`

**CSS Customization**

More CSS properties can be changed by adding CSS rules for class save-as-image-pdfcrowd-button-wrap or save-as-image-pdfcrowd-button, e.g.

`.save-as-image-pdfcrowd-button {
    font-family: Georgia;
}`


**Output**

The output image can be downloaded or opened direclty in a browser. It can be configured by option "Button Click Action".

The output name is created automatically according the permalink or can be specified in custom options, e.g.

`[save_as_image_pdfcrowd output_name='my-page.png' button_background_color='red']`

== Installation ==

1. Search for "Save as Image by Pdfcrowd" in your WordPress backend and click install, or download the save-as-image-pdfcrowd.zip file and unzip it.
2. If you downloaded the zip, upload the save-as-image-pdfcrowd folder into wp-content/plugins folder.
3. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Can I convert my localhost pages? =

Yes, enable Dev Mode on the Settings page.

= Are my data safe? =

Yes, Pdfcrowd is GDPR compliant. All data for the conversion are kept only for the time necessary to efficiently process the conversion and then permanently deleted.

More answers can be found on [Pdfcrowd FAQ](https://pdfcrowd.com/faq/) page.

== Screenshots ==

1. Default button appearance.

== Changelog ==

= 1.0.0 =
* Initial version
