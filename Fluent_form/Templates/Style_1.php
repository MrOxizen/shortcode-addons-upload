<?php

namespace SHORTCODE_ADDONS_UPLOAD\Fluent_form\Templates;

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

class Style_1 extends Templates {

    public function default_render($style, $child, $admin) {

        $placeholder_show = $label_show = $error_show = $radioCheckbox = '';
        if (!defined('FLUENTFORM')) {
            echo "
                 <style>
                 .oxi-fluent-form{
                       color: #8a6d3b;
                       background-color: #fcf8e3;
                       border-color: #f9f0c3;
                       padding: 15px;
                       border-left: 5px solid transparent;
                       position: relative;
                       font-size: 12px;
                       line-height: 1.5;
                       text-align: left;
                       font-size: 19px;
                       text-align: center;
                     }    
                 </style>";
            echo '<div class="oxi-fluent-form"><strong>Fluent Form</strong> is not installed/activated on your site. Please install and activate <a href="plugin-install.php?s=fluentform&tab=search&type=term" target="_blank">Fluent Form</a> first </div>';
        } else {

            $settings = $style;

//
            if ($settings['sa_fluent_form_placeholder_switcher'] != 'yes') {
                $placeholder_show = 'placeholder-hide';
            }
            if ($settings['sa_fluent_form_lebel_switcher'] != 'yes') {
                $label_show = 'fluent-form-labels-hide';
            }
            if ($settings['sa_fluent_form_errors_switcher'] != 'yes') {
                $error_show = 'error-message-hide';
            }
            if ($settings['sa_fluent_form_radio_checkbox_swicher'] == 'yes') {
                $radioCheckbox = 'oxi-custom-radio-checkbox';
            }

            $shortcode = '[fluentform id="' . $settings['sa_fluent_form_data'] . '"]';
            ?>
          
            <div class="oxi_addons__fluent_form_style_1">
                <div class="oxi-fluent-form oxi-fluent-form-wrapper 
                <?php echo $placeholder_show; ?>
                <?php echo $label_show; ?>
                <?php echo $error_show; ?>
                <?php echo $radioCheckbox; ?>
                <?php echo $settings['sa_fluent_form_button_width_true_false']; ?>

                     ">

                    <?php if ($settings['sa_fluent_form_title_description_switcher'] == 'yes') { ?>
                        <div class="oxi-fluentform-heading">
                            <?php if ($settings['sa_fluent_form_heading_text'] != '') { ?>
                                <h3 class="oxi-fluent-form-title oxi-fluentform-title">
                                    <?php echo $this->text_render(esc_attr($settings['sa_fluent_form_heading_text'])); ?>
                                </h3>
                            <?php } ?>
                            <?php if ($settings['sa_fluent_form_details_text'] != '') { ?>
                                <div class="oxi-fluent-form-description oxi-fluentform-description">
                                    <?php echo $this->text_render($settings['sa_fluent_form_details_text']); ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <?php echo do_shortcode(shortcode_unautop($shortcode)); ?>
                </div>
            </div>
            <?php
        }
    }

}
