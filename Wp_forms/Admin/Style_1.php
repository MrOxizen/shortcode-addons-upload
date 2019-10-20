<?php

namespace SHORTCODE_ADDONS_UPLOAD\Wp_forms\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_1 extends AdminStyle
{

    public function register_controls()
    {

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General', SHORTCODE_ADDOONS),
                    'style-settings' => esc_html__('Additional', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'general-settings'
                ]
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
                'sa_wp_forms_textarea', $this->style, [
            'label' => __('Shortcode Here', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'default' => '',
                ]
        );
        $this->add_control(
                'sa-max-w-condition', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
//            'separator' => true,
            'loader' => true,
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'default' => 'dynamic',
            'options' => [
                'dynamic' => [
                    'title' => __('Dynamic', SHORTCODE_ADDOONS),
                ],
                'default' => [
                    'title' => __('Default', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_responsive_control(
                'max_width_depand_on_condition', $this->style, [
            'label' => __('Max-Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa-max-w-condition' => 'dynamic'
            ]
                ]
        );
        $this->add_group_control(
            'sa_wp_forms_main_background',$this->style, [
                'type' => Controls::BACKGROUND,
                'loader' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer, {{WRAPPER}} div.wpforms-container-full, div.wpforms-container-full .wpforms-form ' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_wp_forms_main_box_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_main_box_border_radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
                'sa_wp_forms_main_box_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer' => ''
            ],
                ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_main_box_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_main_box_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('All Label', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_wp_forms_all_label_font_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000000',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field-label' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_all_label_font_color_two',
            $this->style,
            [
                'label' => __('Second Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000000',
                'selector' => [
                    '{{WRAPPER}} .wpforms-form .wpforms-field-sublabe' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
                'sa_wp_forms_all_label_font_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field-label' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_wp_forms_all_label_font_align', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field-label' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_wp_forms_all_label_text_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field-label' => ''
            ],
                ]
        );
        $this->end_controls_section();
         $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Input & Textarea', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_control(
            'sa_wp_forms_all_input_textarea_font_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000000',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="text"],'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form textarea,'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="number"]' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_all_input_textarea_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
            'oparetor' => 'RGB',
                'default' => '#000000',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="text"],'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="number"],'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form textarea' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_all_input_textarea_focus_border_color',
            $this->style,
            [
                'label' => __('Focus Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000000',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .sa_addons_ap_title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_all_input_textarea_error_border_color',
            $this->style,
            [
                'label' => __('Error Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000000',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .sa_addons_ap_title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
                'sa_wp_forms_all_input_textarea_typography', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="text"],'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form textarea,'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="number"]' => ''
            ],
                ]
        );
        $this->add_group_control(
            'sa_wp_forms_all_input_textarea_border',
            $this->style, [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field:not(.wpforms-field-checkbox):not(.wpforms-field-select):not(.wpforms-field-radio):not(.wpforms-field-name)' => ''
                ],
            ]
        );
        $this->add_control(
                'sa_wp_forms_all_input_textarea_text_align', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="text"],'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form textarea,'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="number"]' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_wp_forms_all_input_textarea_text_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="text"],'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form textarea,'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="number"]' => ''
            ],
                ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_all_input_textarea_text_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="text"],'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form textarea,'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="number"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_all_input_textarea_text_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="text"],'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form textarea,'
                    . '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form input[type="number"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
       
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Radio Box', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_all_radio_box_height_width',
            $this->style,
            [
                'label' => __('Height & Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '100',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 15,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline::before' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
                    
                ],
            ]
        );
        $this->add_responsive_control(
                'sa_wp_forms_all_radio_box_font_size', $this->style, [
            'label' => __('Font Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 30,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_wp_forms_all_radio_box_icon_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 30,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
            'sa_wp_forms_all_radio_box_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#5c5c5c',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline::before' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_all_radio_box_icon_scolor',
            $this->style,
            [
                'label' => __('Icon Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#5c5c5c',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio input[type="radio"]:checked + .wpforms-field-label-inline::before' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_all_radio_box_text_color',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#5c5c5c',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
                'sa_wp_forms_all_radio_box_text_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_wp_forms_all_radio_box_text_align', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_wp_forms_all_radio_box_text_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_wp_forms_all_radio_box_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline::before' => 'border-radius:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_all_radio_box_text_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline::before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_all_radio_box_text_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline::before' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_section();
        
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Check Box', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_check_box_heightL_and_width',
            $this->style,
            [
                'label' => __('Height & Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '100',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 30,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline::before' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',                    
                ],
            ]
        );
        
        $this->add_responsive_control(
                'sa_wp_forms_check_box_icon_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
            'sa_wp_forms_check_box_box_color_',
            $this->style,
            [
                'label' => __('Box Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#5c5c5c',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline::before' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_check_box_icon_color_',
            $this->style,
            [
                'label' => __('Icon Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#5c5c5c',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .sa_addons_ap_author' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_check_box_text_color_',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#5c5c5c',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
                'sa_wp_forms_check_box_typography_color_', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_wp_forms_check_box_text_align_ment', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline::before' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_wp_forms_check_box_text_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline' => ''
            ],
                ]
        );
        $this->add_group_control(
            'sa_wp_forms_check_box_text_borderrr',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline::before' => ''
                ],
            ]
        );
        $this->add_responsive_control(
                'sa_wp_forms_check_box_text_dorder_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline::before' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_check_box_text_dopadding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline::before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_check_box_text_dopamargin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-contact-wp-form-outer div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline::before' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Dropdown', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_responsive_control(
                'sa_wp_forms_dropdown_dopamargin', $this->style, [
            'label' => __('Font Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        
        $this->add_control(
            'sa_wp_forms_dropdown_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#5c5c5c',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .sa_addons_ap_author' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_dropdown_backgrounds',
            $this->style,
            [
                'label' => __('Dropdown Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#5c5c5c',
            'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .sa_addons_ap_author' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_dropdown_options_color',
            $this->style,
            [
                'label' => __('Option Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#5c5c5c',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .sa_addons_ap_author' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_dropdown_options_background',
            $this->style,
            [
                'label' => __('Option Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
            'oparetor' => 'RGB',
                'default' => '#5c5c5c',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .sa_addons_ap_author' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
                'sa_wp_forms_dropdown_typography', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-5 .sa-cb-tem-5-heading' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_wp_forms_dropdown_text_align', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .sa-cb-tem-3-icon' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_wp_forms_dropdown_text_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-5 .sa-cb-tem-5-heading' => ''
            ],
                ]
        );
        $this->add_group_control(
            'sa_wp_forms_dropdown_text_sborder',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time-handle' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_dropdown_text_l-apadding',
            $this->style,[
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .sa_addons_ap_author' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_dropdown_text_l_margin',
            $this->style,
            [
                'label' => __('Option Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .sa_addons_ap_author' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_section();
        
        
        
        $this->end_section_devider();
        $this->end_section_tabs();


        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'style-settings'
                ]
            ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Form Title', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_responsive_control(
                'sa_wp_forms_form_title_font_size', $this->style, [
            'label' => __('Font Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
            'sa_wp_forms_form_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#333333',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time-float' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_form_title_background',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#333333',
            'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time-float' => 'background: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
                'sa_wp_forms_form_title_b_typography_d', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-5 .sa-cb-tem-5-heading' => ''
            ],
                ]
        );$this->add_control(
                'sa_wp_forms_form_title_text_align', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .sa-cb-tem-3-icon' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_wp_forms_form_title_text_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-5 .sa-cb-tem-5-heading' => ''
            ],
                ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_form_title_text_padding',
            $this->style, [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        
        
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Required Alert', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_responsive_control(
                'sa_wp_forms_form_Alert_fontl_size', $this->style, [
            'label' => __('Font Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
            'sa_wp_forms_form_Alerte_colour',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#333333',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time-float' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
                'sa_wp_forms_form_tAlerte_cotypho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-5 .sa-cb-tem-5-heading' => ''
            ],
                ]
        );$this->add_control(
                'sa_wp_forms_form_Alert_text_align', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .sa-cb-tem-3-icon' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_wp_forms_form_Alert_text_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-5 .sa-cb-tem-5-heading' => ''
            ],
                ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_form_Alert_text_padding',
            $this->style, [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        
        
        
        $this->end_section_devider();
        
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Success Alert', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_responsive_control(
                'sa_wp_forms_form_SUCCESS_font_size', $this->style, [
            'label' => __('Font Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
            'sa_wp_forms_form_SUCCESS_font_color',
            $this->style,[
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#333333',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time-float' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_wp_forms_form_SUCCESS_font_background',
            $this->style, [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#333333',
            'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time-float' => 'background: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
                'sa_wp_forms_form_SUCCESS_font_typhography', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-5 .sa-cb-tem-5-heading' => ''
            ],
                ]
        );$this->add_control(
                'sa_wp_forms_form_SUCCESS_text_align', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .sa-cb-tem-3-icon' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_wp_forms_form_SUCCESS_text_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-5 .sa-cb-tem-5-heading' => ''
            ],
                ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_form_SUCCESS_text__padding',
            $this->style, [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_form_SUCCESS_text__margin',
            $this->style, [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Submit Button', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_control(
                'sa_wp_forms_form_BUTTON_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'separator' => true,
            'loader' => true,
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'default' => 'dynamic',
            'options' => [
                'full_width' => [
                    'title' => __('Full Width', SHORTCODE_ADDOONS),
                ],
                'standard' => [
                    'title' => __('Standard', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_wp_forms_form_BUTTON_font_size', $this->style, [
            'label' => __('Font Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_wp_forms_form_BUTTON_font_typography', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-5 .sa-cb-tem-5-heading' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_wp_forms_form_BUTTON_font_typcolor', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1-button .oxi-button' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_wp_forms_form_BUTTON_font_background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1-button .oxi-button' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
            'sa_wp_forms_form_BUTTON_font_borborder',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .sa_addons_ap_main' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_wp_forms_form_BUTTON_font_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1-button .oxi-button' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_wp_forms_form_BUTTON_background_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'green',
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1-button .oxi-button' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_wp_forms_form_BUTTON_bororder_color', $this->style, [
            'label' => __('Border Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'red',
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1-button .oxi-button' => 'border-color:{{VALUE}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_wp_forms_form_BUTTON_HOVER_bororder_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'separator' => true,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_wp_forms_form_BUTTON_HOVER_text_align', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-3 .sa-cb-tem-3-icon' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_wp_forms_form_BUTTON_HOVER_text_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-cb-tem-5 .sa-cb-tem-5-heading' => ''
            ],
                ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_form_BUTTON_HOVER_padding',
            $this->style, [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_wp_forms_form_BUTTON_HOVER_margin',
            $this->style, [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_container_style_1 .mejs-time' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
