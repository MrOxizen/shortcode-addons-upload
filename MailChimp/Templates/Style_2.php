<?php

namespace SHORTCODE_ADDONS_UPLOAD\MailChimp\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_2 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $button = $success = $error = $loading_msg = $button_text = $icon = '';
        if (array_key_exists('sa_mail_chimp_button_text', $style) && $style['sa_mail_chimp_button_text'] != '') {
            $button = '<div class="oxi-addons-mailchimp-button-section"> 
                        <button type="submit" class="oxi-addons-mailchimp-button"> 
                            ' . $this->text_render($style['sa_mail_chimp_button_text']) . ' 
                        </button>
                    </div>';
        }

        echo ' <div class="oxi-addons-mailchimp-style-2">
                <div class="oxi-addons-mailchimp-alert">
                    <div class="oxi-addons-mailchimp-alert-text">
                    </div>
                </div>
                    <form id="oxi-addons-mailchimp-full-content-style-2">';

        if (array_key_exists('sa_mail_chimp_audience_success', $style) && $style['sa_mail_chimp_audience_success'] != '') {
            $success =  $this->text_render($style['sa_mail_chimp_audience_success']);
        }
        if (array_key_exists('sa_mail_chimp_audience_error', $style) && $style['sa_mail_chimp_audience_error'] != '') {
            $error =   $this->text_render($style['sa_mail_chimp_audience_error']);
        }
        if (array_key_exists('sa_mail_chimp_loading_text', $style) && $style['sa_mail_chimp_loading_text'] != '') {
            $loading_msg =  $this->text_render($style['sa_mail_chimp_loading_text']);
        }
        if (array_key_exists('sa_banner_button_left_text', $style) && $style['sa_banner_button_left_text'] != '') {
            $button_text =   $this->text_render($style['sa_banner_button_left_text']);
        }
        if ($style['sa_mail_chimp_loading_icon']) {
            $icon = $this->font_awesome_render($style['sa_mail_chimp_loading_icon']);
        }
        echo ' <div class="oxi-addons-btn-content">
                    <div class="oxi-addons-mailchimp-form">
                        <div class="oxi-addons-mailchimp-form-input-sec">
                            <input type="email"  class="oxi-addons-mailchimp-input" name="oxi-addons-mailchimp-email" id="oxi-addons-mailchimp-email" placeholder="' . $this->text_render($style['sa_mail_chimp_placeholder']) . '"  required="required">
                            <input type="text"  class="oxi-addons-mailchimp-input" name="oxi-addons-mailchimp-first-name" id="oxi-addons-mailchimp-first-name" placeholder="' . $this->text_render($style['sa_mail_chimp_placeholder']) . '" >
                            <input type="text"  class="oxi-addons-mailchimp-input" name="oxi-addons-mailchimp-last-name" id="oxi-addons-mailchimp-last-name" placeholder="' . $this->text_render($style['sa_mail_chimp_placeholder']) . '" >
                        </div>
                    </div>
                    ' . $button . '
                    </div>
                 </form> 
       </div>';
    }
}
