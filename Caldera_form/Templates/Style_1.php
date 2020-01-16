<?php

namespace SHORTCODE_ADDONS_UPLOAD\Caldera_form\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {

        $styledata = $this->style;

        echo '  <div class="oxi-addons-form-warp-contact-form-7">
                    ' . $this->check_caldera_plugin() . '
                    <div class="oxi-addons-form-full-body"  ' . $this->animation_render('sa_contact_form__animation', $styledata) . '>
                        <div class="oxi-addons-contact-form-7">' . $this->text_render($styledata['sa_contact_form_shortcode']) . '</div>
                    </div>
                </div>';
    }


    public function inline_public_jquery()
    {
        $jquery = '';
        $listdata = $this->style;
        $oxiid = $listdata['shortcode-addons-elements-id'];
        $oxi_addons_labels = '';
        $jquery .= 'jQuery(document).ready(function(){
                jQuery(".oxi-addons-form-warp-contact-form-7 input[type=submit]").parent().addClass("submit-button-active");

           })';

        return $jquery;
    }

    public function check_caldera_plugin()
    {
        if (!function_exists('is_plugin_active')) {
            include_once ABSPATH . 'wp-admin/includes/plugin.php';
        }
        if (!is_plugin_active('caldera-forms/caldera-core.php')) {
            echo "<div class='oxi-gf-active'>
                Please Install and Active Caldera Form Plugin to Use Caldera Form Element...!
                 </div>
                 <style>
                 .oxi-gf-active{
                        font-size: 22px;
                        color: red;
                        margin: 50px 20px 50px 18px;
                        padding: 20px;
                        background: #ffe9e9;
                        font-weight: 700;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        border: 1px solid red;
                     }
                 </style>";
        }
    }
}
