<?php

/**
* Partial of the API license settings
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

<div
  id="save-as-image-pdfcrowd-license-settings"
  class="save-as-image-pdfcrowd-metaboxes save-as-image-pdfcrowd-tab-content hidden">
    <div>
        <div>
            <label for="save-as-image-pdfcrowd-lic-demo">
                <input type="radio" id="save-as-image-pdfcrowd-lic-demo" name="save-as-image-pdfcrowd[license_type]" value="demo" <?php checked( $license_type, "demo" ); ?> autocomplete="off" />
                <span style="font-weight: bold">
                    Demo
                </span>
            </label>
             - Places a demo watermark and Pdfcrowd branding on the output.
        </div>
        <div>
            <label for="save-as-image-pdfcrowd-lic-regular">
                <input type="radio" id="save-as-image-pdfcrowd-lic-regular" name="save-as-image-pdfcrowd[license_type]" value="regular" <?php checked( $license_type, "regular" ); ?> autocomplete="off" />
                <span style="font-weight: bold">
                    Commercial
                </span>
            </label>
            - <span id="save-as-image-pdfcrowd-lic-reg-ac">
                <a class="button-secondary"
                   href="https://pdfcrowd.com/user/sign_up/?pid=api-trial2&ref=wordpress">
                    Free trial
                </a> or
                <a class="button-secondary"
                   href="https://pdfcrowd.com/pricing/api/?api=v2&ref=wordpress">
                    Purchase
                </a>
            </span>
        </div>
    </div>
    <div id="save-as-image-pdfcrowd-lic-cred" class="hidden">
        <table>
            <tbody>
                <tr>
                    <td>
                        <label for="save-as-image-pdfcrowd-username">
                            Username
                        </label>
                    </td>
                    <td>
                        <input type="text" class="regular-text" id="save-as-image-pdfcrowd-username" name="save-as-image-pdfcrowd[username]" value="<?php echo($username);?>" placeholder="<?php esc_attr_e('Your Pdfcrowd username', $this->plugin_name);?>" autocomplete="off" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="save-as-image-pdfcrowd-api_key">
                            API Key
                        </label>
                    </td>
                    <td>
                        <input type="text" class="regular-text" id="save-as-image-pdfcrowd-api_key" name="save-as-image-pdfcrowd[api_key]" value="<?php echo($api_key);?>" placeholder="<?php esc_attr_e('Your Pdfcrowd API key', $this->plugin_name);?>" autocomplete="off" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        You can find your license credentials in your
                        <a href='https://pdfcrowd.com/user/account/api2-license/?ref=wordpress' target='blank'>
                            Pdfcrowd account
                        </a>
                    </td>
                </tr>
            <?php if($license_status) :?>
                <?php if($license_status['status'] == 'active' || $license_status['status'] == 'canceled' || $license_status['status'] == '') : ?>
                    <tr>
                        <td></td>
                        <td id="save-as-image-pdfcrowd-lic-stats">
                            <div>
                                License:
                                <span class='save-as-image-pdfcrowd-lic-stat'>
                                    <?php echo $license_status['product']; ?>
                                </span>
                            </div>
                            <div>
                                Status:
                                <span class='save-as-image-pdfcrowd-lic-stat'>
                                    <?php echo $license_status['status']; ?>
                                </span>
                            </div>
                            <?php if(isset($license_status['credits'])) : ?>
                                <div>
                                    Remaining credits:
                                    <span class='save-as-image-pdfcrowd-lic-stat <?php if($license_status['credits'] <= 0) echo 'attention' ?>'>
                                        <?php echo number_format_i18n($license_status['credits']); ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php elseif($license_status['status'] == 'invalid') : ?>
                    <tr>
                        <td id="save-as-image-pdfcrowd-lic-invalid" colspan=2
                            class="align-center">
                            <div class='attention'>
                                Error: Entered username or API key is not valid!
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
