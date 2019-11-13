<?php

namespace SHORTCODE_ADDONS_UPLOAD\MailChimp\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_8
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_8 extends Templates
{

    /**
     * load public jquery
     *
     * @since 2.0.0
     */
    public function inline_public_jquery()
    {

        $style = $this->style;
        $success = $error = $loading_msg = $button_text = $icon  = '';

        if (array_key_exists('sa_mail_chimp_audience_success', $style) && $style['sa_mail_chimp_audience_success'] != '') {
            $success = $this->text_render($style['sa_mail_chimp_audience_success']);
        }
        if (array_key_exists('sa_mail_chimp_audience_error', $style) && $style['sa_mail_chimp_audience_error'] != '') {
            $error = $this->text_render($style['sa_mail_chimp_audience_error']);
        }
        if (array_key_exists('sa_mail_chimp_loading_text', $style) && $style['sa_mail_chimp_loading_text'] != '') {
            $loading_msg = $this->text_render($style['sa_mail_chimp_loading_text']);
        }
        if (array_key_exists('sa_mail_chimp_button_text', $style) && $style['sa_mail_chimp_button_text'] != '') {
            $button_text = $this->text_render($style['sa_mail_chimp_button_text']);
        }
        if ($style['sa_mail_chimp_loading_icon']) {
            $icon = $this->font_awesome_render($style['sa_mail_chimp_loading_icon']);
            $icon = str_replace('"', '\'', $icon);
        }

        $api = [
            'api' => $style['sa_mail_chimp_api'],
            'id' => $style['sa_mail_chimp_audience_id']
        ];
        $js = '$(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-form-data").submit(function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    var $this = $(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-button"),
                        $class = $this.data("class"),
                        $function = $this.data("function"); 
                    if ($class === "" || $function === "") {
                        return;
                    }  
                    var rawdata = $(".' .  $this->WRAPPER . ' #oxi-addons-mailchimp-form-style-8").serialize();
                    var   optional = ' . json_encode($api) . ';
                    jQuery(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-button").html("' . $icon . ' ' . $loading_msg . '");
                    $.ajax({
                        url: shortcode_addons_data.ajaxurl,
                        type: "post",
                        data: {
                            action: "shortcode_addons_data",
                            _wpnonce: shortcode_addons_data.nonce,
                            classname: $class,
                            functionname: $function,
                            rawdata: rawdata,
                            optional: optional, 
                            optional2: "", 
                        },
                        success: function(data) {
                            if (data === "success") { 
                                jQuery(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-success-text").fadeIn().html("' . $success . '"); 
                                jQuery(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-alert-text").fadeOut(); 
                            } else if(data === "error") { 
                                jQuery(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-alert-text").fadeIn().html("' . $error . '"); 
                                jQuery(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-success-text").fadeOut(); 
                            } else if(data === "api_error") {
                                jQuery(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-alert-text").fadeOut(); 
                                jQuery(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-alert-text").fadeIn().html("The resource can not be found. Please insert valid API or Audience ID"); 
                                jQuery(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-success-text").fadeOut(); 
                            }
                            jQuery(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-button").html("' . $button_text . '"); 
                        },
                        error: function(response) {
                            console.log(response);
                        }
                    });
                    return false;
                });';
        $js .= '
                setTimeout(function(){
                    jQuery(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-success-text").fadeOut(); 
                    jQuery(".' .  $this->WRAPPER . ' .oxi-addons-mailchimp-alert-text").fadeOut(); 
                }, 10000)
        ';
        return $js;
    }

    public function default_render($style, $child, $admin)
    {
        $button  = $email_placeholder = $heading = $details = $icon = '';
        if (array_key_exists('sa_mail_chimp_button_text', $style) && $style['sa_mail_chimp_button_text'] != '') {
            $button = '<div class="oxi-addons-mailchimp-button-section"> 
                        <button type="submit" class="oxi-addons-mailchimp-button" data-class="SHORTCODE_ADDONS_UPLOAD\MailChimp\Ajax\Style_8" data-function="ajax_loader" > 
                            ' . $this->text_render($style['sa_mail_chimp_button_text']) . ' 
                        </button>
                    </div>';
        }
        if ($style['sa_mail_chimp_placeholder'] != '') {
            $email_placeholder = 'placeholder="' . $this->text_render($style['sa_mail_chimp_placeholder']) . '"';
        }
        if (array_key_exists('sa_mail_chimp_title_text', $style) && $style['sa_mail_chimp_title_text'] != '') {
            $heading = '<' . $style['sa_mail_chimp_title_tag'] . ' class="oxi-addons-mailchimp-heading-text"    >' . $this->text_render($style['sa_mail_chimp_title_text']) . '</' . $style['sa_mail_chimp_title_tag'] . '>';
        }
        if (array_key_exists('sa_mail_chimp_desc_text', $style) && $style['sa_mail_chimp_desc_text'] != '') {
            $details = '<div class="oxi-addons-mailchimp-desc-text"    >' . $this->text_render($style['sa_mail_chimp_desc_text']) . '</div>';
        }
        if (array_key_exists('sa_mail_chimp_icon', $style) && $style['sa_mail_chimp_icon'] != '') {
            $icon = '
                <div class="oxi-addons-mailchimp-icon">
                    ' . $this->font_awesome_render($style['sa_mail_chimp_icon']) . '
                </div>
            ';
        }
        echo ' <div class="oxi-addons-mailchimp-style-8"> 
                <div class="oxi-addons-mailchimp-alert">
                    <div class="oxi-addons-mailchimp-alert-text"> </div>
                    <div class="oxi-addons-mailchimp-success-text"> </div>
                </div>
                ' . $icon . '
                ' . $heading . '
                ' . $details . '
                <form  class="oxi-addons-mailchimp-form-data"  id="oxi-addons-mailchimp-form-style-8" method="post">';
        echo ' <div class="oxi-addons-btn-content">
                    <div class="oxi-addons-mailchimp-form">
                        <div class="oxi-addons-mailchimp-form-input-sec">
                            <input type="email"  class="oxi-addons-mailchimp-email" data-email="oxi-addons-mailchimp-email" name="oxi-addons-mailchimp-email" id="oxi-addons-mailchimp-email" ' . $email_placeholder . '  required="required">
                        </div>
                    </div>
                    ' . $button . '
                    </div>
                 </form> 
       </div>';
    }
}
