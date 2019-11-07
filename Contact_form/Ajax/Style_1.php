<?php

namespace SHORTCODE_ADDONS_UPLOAD\Contact_form\Ajax;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
class Style_1 {

    /**
     * load constructor
     *
     * @since 2.0.0
     */
    public function __construct() {
        
    }

    public function ajax_loader($rawdata = '', $optional = '', $optional2 = '') {
        parse_str($rawdata, $style);
        $name = $style['oxi-addons-form-input-data-name'];
        $email = $style['oxi-addons-form-input-data-email'];
        $massage = $style['oxi-addons-form-input-data-massage'];
        $fromemail = get_option('admin_email');
        if (!empty($optional)) {
            $receive = $optional;
        } else {
            $receive = get_option('admin_email');
        }
        if (!empty($name) && !empty($email) && !empty($massage)) {

            $msg = "<table width=100% border=1 cellspacing=0 cellpadding=5><tr><td>&nbsp;"
                    . esc_html__('Name', 'OxiAddons') . "</td><td>&nbsp;$name</td></tr><tr><td>&nbsp;"
                    . esc_html__('Email', 'OxiAddons') . "</td><td>&nbsp;$email</td></tr><tr><td>&nbsp;"
                    . esc_html__('Message', 'OxiAddons') . "</td><td>&nbsp;$massage</td></tr></table>";

            $subject = $name . ' Sent You a Contact Massage';
            $headers = "From: $name <$fromemail>" . "\r\n" .
                    "Content-type: text/html; charset=iso-8859-1\r\n" .
                    "Reply-To: $email" . "\r\n" .
                    "X-Mailer: PHP/" . phpversion();

            if (wp_mail($receive, $subject, $msg, $headers)) {
               $successfuldata = '<div class="oxi-addons-form-success">
                                        <div class="oxi-addons-form-success-data">
                                            ' . $optional2 . '
                                        </div> 
                                    </div>';
            } else {
                $successfuldata = 'sorry';
            }
        } else {
            $successfuldata = 'sorry';
        }
        echo $successfuldata;
    }

}
