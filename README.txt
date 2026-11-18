=== Save as Image Plugin by PDFCrowd ===
Contributors: PDFCrowd
Tags: image, screenshot, save as image, wordpress screenshot, html to image
Requires PHP: 5.1
Requires at least: 4.0
Tested up to: 7.1
Stable tag: 4.7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add a screenshot button to WordPress in minutes. Visitors can save pages or posts as images with one click.

== Description ==


The "Save as Image" plugin lets you add a full-featured screenshot button to your WordPress site in minutes, without custom code or server-side screenshot software. Visitors can save a page or post as an image with one click.

No registration is needed. You can install and test the plugin right away in fully functional demo mode. Demo images include a watermark and PDFCrowd branding. When you are ready, activate a paid PDFCrowd license for production use.

Useful links:

* [Plugin guide](https://pdfcrowd.com/save-as-image-wordpress-plugin/docs/): setup, first test, and common workflows.
* [Plugin FAQ](https://pdfcrowd.com/faq/wordpress/): common issues, examples, licensing, and troubleshooting.
* [Option reference](https://pdfcrowd.com/save-as-image-wordpress-plugin/ref/): exact plugin settings.
* [Pricing and plans](https://pdfcrowd.com/pricing/?api=v2&wp=1): paid plans, credits, and limits.
* [Contact support](https://pdfcrowd.com/contact/): help with setup or output issues.

=== Features ===

* **Easy setup:** Install from WordPress admin, activate the plugin, and test the button in demo mode.
* **One-click screenshot button:** Let visitors save pages or posts as images.
* **Modern page rendering:** Supports current HTML, CSS, images, and JavaScript.
* **Flexible button placement:** Show the button automatically or place it manually where needed.
* **Customizable button appearance:** Configure button text, icon, layout, and style.
* **Flexible output settings:** Adjust screenshot width, image format, and other output options from WordPress admin.
* **Selected-content capture:** Capture the full page or a selected part of the page.
* **No screenshot software to install on your server:** Image generation runs through PDFCrowd.


=== Help getting the result you want ===

Every WordPress site is different, and your first image may need some adjustments. We’re happy to help you set up the plugin, choose the right options and fine-tune the output for your site.

[Get help with your setup →](https://pdfcrowd.com/contact/)

== Installation ==

= Automatic installation =

1. In WordPress admin, go to **Plugins > Add New**.
2. Search for "Save as Image by PDFCrowd".
3. Click **Install Now**, then **Activate**.
4. Go to **Settings > Save as Image** to review button placement and output settings.

= ZIP upload =

1. Download the "Save as Image" plugin ZIP file.
2. In WordPress admin, go to **Plugins > Add New > Upload Plugin**.
3. Choose the ZIP file and click **Install Now**.
4. Click **Activate Plugin**.

= After activation =

The "Save as Image" button appears automatically wherever it is enabled in the plugin settings. Go to **Settings > Save as Image** to review button placement, button text, and output settings.

Test the button on one post or page that you can safely use.

For screenshot size, image format, or other output adjustments, see [Customization](https://pdfcrowd.com/save-as-image-wordpress-plugin/docs/#tips).

For button or screenshot generation problems, see [Troubleshooting](https://pdfcrowd.com/save-as-image-wordpress-plugin/docs/#troubleshooting).

== Frequently Asked Questions ==

= Can I test the plugin before buying a PDFCrowd license? =

Yes. No registration is needed. You can install and test the plugin right away in fully functional demo mode. Demo images include a watermark and PDFCrowd branding. When you are ready, activate a paid PDFCrowd license for production use.

= Does screenshot generation happen on my WordPress server? =

No. Screenshot generation runs through PDFCrowd, so your WordPress host does not need screenshot generation software installed.

= Where can I find the full WordPress plugin documentation? =

Useful links:

* [Plugin guide](https://pdfcrowd.com/save-as-image-wordpress-plugin/docs/): setup, first test, and common workflows.
* [Plugin FAQ](https://pdfcrowd.com/faq/wordpress/): common issues, examples, licensing, and troubleshooting.
* [Option reference](https://pdfcrowd.com/save-as-image-wordpress-plugin/ref/): exact plugin settings.

= How can I contact support? =

If you need help with setup, output adjustments, or troubleshooting, [contact support](https://pdfcrowd.com/contact/). We are happy to help you configure the plugin for your WordPress site.

== Screenshots ==

1. Generated image — property listing
2. Generated image — car listing
3. Generated image — recipe
4. Generated image — event flyer

== Changelog ==

= 4.7.0 =
* Security hardening for encrypted button options and conversion-indicator HTML. After updating, clear any page and CDN caches so freshly generated buttons are used.
* Updated help and documentation links.
* Improved the plugin listing with onboarding help, usage examples, banners, and clearer demo/pricing info.

= 4.6.3 =
* Updated help text in the plugin settings.
* Updated documentation links for shortcodes and PHP functions.

= 4.6.2 =
* Fixed Image Created Callback shortcode authorization so only users with the manage_options capability can set it.

= 4.6.1 =
* Updated help text in the plugin settings.
* Updated documentation links for shortcodes and PHP functions.

= 4.6.0 =
* Maintenance release.

[See changelog for all versions](https://raw.githubusercontent.com/pdfcrowd/pdfcrowd-wordpress-save-as-image/master/changelog.txt).

== Upgrade Notice ==

= 4.7.0 =
Security update to how encrypted button options are protected. Buttons already stored in page or CDN caches must be regenerated: after updating, purge your page and CDN caches. A cached button briefly shows a "refresh and retry" message until its page is re-rendered.

