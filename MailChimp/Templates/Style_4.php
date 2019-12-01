<?php

namespace SHORTCODE_ADDONS_UPLOAD\Mailchimp\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_4
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_4 extends Templates
{

    /**
     * load public jquery
     *
     * @since 2.0.0
     */
    public function inline_public_jquery()
    {

        $style = $this->style;
        $success = $error = $loading_msg = $button_text = $icon = '';
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
                    var rawdata = $(".' .   $this->WRAPPER . ' #oxi-addons-mailchimp-form-style-4").serialize();
                    var   optional = ' . json_encode($api) . ';
                    jQuery(".' .   $this->WRAPPER . ' .oxi-addons-mailchimp-button").html("' . $icon . ' ' . $loading_msg . '");
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
        $button  = $email_placeholder = $first_placeholder =  $last_placeholder = $email_label = $first_label =  $last_label = '';
        if (array_key_exists('sa_mail_chimp_button_text', $style) && $style['sa_mail_chimp_button_text'] != '') {
            $button = '<div class="oxi-addons-mailchimp-button-section"> 
                        <button type="submit" class="oxi-addons-mailchimp-button" data-class="SHORTCODE_ADDONS_UPLOAD\Mailchimp\Ajax\Style_1" data-function="ajax_loader" > 
                            ' . $this->text_render($style['sa_mail_chimp_button_text']) . ' 
                        </button>
                    </div>';
        }
        if ($style['sa_mail_chimp_placeholder'] != '') {
            $email_placeholder = 'placeholder="' . $this->text_render($style['sa_mail_chimp_placeholder']) . '"';
        }
        if ($style['sa_mail_chimp_placeholder_first'] != '') {
            $first_placeholder = 'placeholder="' . $this->text_render($style['sa_mail_chimp_placeholder_first']) . '"';
        }
        if ($style['sa_mail_chimp_placeholder_last'] != '') {
            $last_placeholder = 'placeholder="' . $this->text_render($style['sa_mail_chimp_placeholder_last']) . '"';
        }

        if ($style['sa_mail_chimp_label'] != '') {
            $email_label = '<label for="oxi-addons-mailchimp-email" class="oxi-addons-mailchimp-label oxi-label-email"   >' . $this->text_render($style['sa_mail_chimp_label']) . '</label>';
        }
        if ($style['sa_mail_chimp_label_first'] != '') {
            $first_label = '<label for="oxi-addons-mailchimp-first-name"  class="oxi-addons-mailchimp-label oxi-label-first-name"  >' . $this->text_render($style['sa_mail_chimp_label_first']) . '</label>';
        }
        if ($style['sa_mail_chimp_label_last'] != '') {
            $last_label = '<label for="oxi-addons-mailchimp-last-name"  class="oxi-addons-mailchimp-label oxi-label-last-name"  >' . $this->text_render($style['sa_mail_chimp_label_last']) . '</label>';
        }
        echo ' <div class="oxi-addons-mailchimp-style-4"> 
                <div class="oxi-addons-mailchimp-alert">
                    <div class="oxi-addons-mailchimp-alert-text"> </div>
                    <div class="oxi-addons-mailchimp-success-text"> </div>
                </div> 
                <form  class="oxi-addons-mailchimp-form-data"  id="oxi-addons-mailchimp-form-style-4" method="post">';
        echo ' <div class="oxi-addons-btn-content">
                    <div class="oxi-addons-mailchimp-form">
                        <div class="oxi-addons-mailchimp-form-input-sec">
                            <div class="oxi-addons-form-group">
                                ' . $email_label . '
                                <input type="email"  class="oxi-addons-mailchimp-input" data-email="oxi-addons-mailchimp-email" name="oxi-addons-mailchimp-email" id="oxi-addons-mailchimp-email" ' . $email_placeholder . ' required="required">
                            </div>
                            <div class="oxi-addons-form-group">
                                ' . $first_label . '
                                <input type="text"  class="oxi-addons-mailchimp-input" data-first-name="oxi-addons-mailchimp-first-name" name="oxi-addons-mailchimp-first-name" id="oxi-addons-mailchimp-first-name" ' . $first_placeholder . '>
                            </div>
                            <div class="oxi-addons-form-group">
                                ' . $last_label . '
                                <input type="text"  class="oxi-addons-mailchimp-input" data-last-name="oxi-addons-mailchimp-last-name" name="oxi-addons-mailchimp-last-name" id="oxi-addons-mailchimp-last-name"  ' . $last_placeholder . '>
                            </div> 
                        </div>
                    </div> 
                    ' . $button . '
                    </div>
                 </form> 
       </div>';
    }
}
