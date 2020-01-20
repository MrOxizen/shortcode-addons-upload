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

    public function inline_public_jquery()
    {
        $style = $this->style;
        $jquery = '
         jQuery(".oxi_addons__caldera_form_style_1.oxi-button-custom-width .form-group input[type=submit], .oxi_addons__caldera_form_style_1.oxi-button-custom-width .form-group input[type=button]").parent().addClass("oxi-addons-button-position");

            var get = jQuery("#sa_caldera_form_data").val();
            var target = jQuery(".oxi-gf-active")
            if(get == 0){
                target.show();
            }else{
                target.hide();
            }
        ';
        return $jquery;

    }
    public function default_render($style, $child, $admin)
    {
        $style = $this->style;
        $heading = $details = $check = '';
        if (array_key_exists('sa_caldera_form_title_description_switcher', $style) && $style['sa_caldera_form_title_description_switcher'] == 'yes') {

            if (array_key_exists('sa_caldera_form_details_text', $style) && $style['sa_caldera_form_details_text'] != '') {
                $heading = '<' . $style['sa_caldera_form_title_tag'] . ' class="oxi_addons__heading"    >' . $this->text_render($style['sa_caldera_form_details_text']) . '</' . $style['sa_caldera_form_title_tag'] . '>';
            }
            if (array_key_exists('sa_caldera_form_details_text', $style) && $style['sa_caldera_form_details_text'] != '') {
                $details = '<div class="oxi_addons__details" > ' . $this->text_render($style['sa_caldera_form_details_text']) . ' </div>';
            }
        }
        if ($this->style['sa_caldera_form_data'] == 0) {
            $check = $this->check_select_caldera_form();
        }
        if (is_plugin_active('caldera-forms/caldera-core.php')) {
            $data = '
                    <div class="oxi_addons__caldera_form_style_1 ' . $style['sa_caldera_form_lebel_switcher'] . ' ' . $style['sa_caldera_form_placeholder_switcher'] . '  ' . $style['sa_caldera_form_errors_switcher'] . ' ' . $style['sa_caldera_form_button_width_true_false'] . ' ' . $style['sa_caldera_form_radio_checkbox_swicher'] . '">
                        <div class="oxi_addons__heading_details_wrapper">
                            ' . $heading . '
                            ' . $details . '
                        </div>
                        ' . $check . '
                        ' . do_shortcode('[caldera_form id="' . $style['sa_caldera_form_data'] . '" ]') . '
                    </div>
            ';
        } else {
            $data =   $this->check_caldera_plugin();
        }

        echo '  <div class="oxi_addons__caldera_form_wrapper">
                    ' . $data . '
                </div>';
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
    public function check_select_caldera_form()
    {

        return "<div class='oxi-gf-active'>
                Please Select a Caldera Form Id...!
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
