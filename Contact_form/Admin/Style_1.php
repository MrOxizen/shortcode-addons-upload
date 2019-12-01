<?php

namespace SHORTCODE_ADDONS_UPLOAD\Contact_form\Admin;

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
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'button-settings' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
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
                'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_cf_form_style',
            $this->style,
            [
                'label' => __('Form Style', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'sa_style1',
                'loader' => TRUE,
                'options' => [
                    'sa_style1' => __('Style 01', SHORTCODE_ADDOONS),
                    'sa_style2' => __('Style 02', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_control(
            'sa_cf_admin_email',
            $this->style,
            [
                'type' => Controls::TEXT,
                'label' => __('Admin Email', SHORTCODE_ADDOONS),
                'placeholder' => __('Admin Email', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_responsive_control(
            'sa_cf_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cf_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Titles Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'title' => esc_html__('Title', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('SubTitle', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_cf_title_text',
            $this->style,
            [
                'type' => Controls::TEXT,
                'label' => __('Title Text', SHORTCODE_ADDOONS),
                'placeholder' => __('Title Text', SHORTCODE_ADDOONS),
                'default' => 'Title Text',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-title' => ''
                ],
            ]
        );
        $this->add_group_control(
            's_cf_title_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-title' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_cf_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-title' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cf_title_tx_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-title' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cf_title_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 15,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_cf_subtitle',
            $this->style,
            [
                'type' => Controls::TEXT,
                'label' => __('SubTitle Text', SHORTCODE_ADDOONS),
                'placeholder' => __('SubTitle Text', SHORTCODE_ADDOONS),
                'default' => 'SubTitle Text',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-content' => ''
                ],
            ]
        );
        $this->add_group_control(
            's_cf_subtitle_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-content' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_cf_subtitle_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-content' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_cf_subtitle_tx_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-content' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cf_subtitle_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 15,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Input Field Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'name' => esc_html__('Name', SHORTCODE_ADDOONS),
                    'email' => esc_html__('Email', SHORTCODE_ADDOONS),
                    'massage' => esc_html__('Massage', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_cf_name_title',
            $this->style,
            [
                'type' => Controls::TEXT,
                'label' => __('Name Title', SHORTCODE_ADDOONS),
                'default' => 'Name', 
            ]
        );
        $this->add_control(
            'sa_cf_name_err_text',
            $this->style,
            [
                'type' => Controls::TEXT,
                'label' => __('Name Error', SHORTCODE_ADDOONS),
                'default' => 'Name is Requried', 
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
            'sa_cf_emali_title',
            $this->style,
            [
                'type' => Controls::TEXT,
                'label' => __('Email Title', SHORTCODE_ADDOONS),
                'default' => 'Email', 
            ]
        );
        $this->add_control(
            'sa_cf_email_err_text',
            $this->style,
            [
                'type' => Controls::TEXT,
                'label' => __('Email Error', SHORTCODE_ADDOONS),
                'default' => 'Valid Email is Requried: ex abc@xyz.com', 
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
            'sa_cf_msg_title',
            $this->style,
            [
                'type' => Controls::TEXT,
                'label' => __('Massage Title', SHORTCODE_ADDOONS),
                'default' => 'Massage', 
            ]
        );
        $this->add_control(
            'sa_cf_msg_err_text',
            $this->style,
            [
                'type' => Controls::TEXT,
                'label' => __('Massage Error', SHORTCODE_ADDOONS),
                'default' => 'Massage is Requried', 
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_group_control(
            's_cf_input_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]:focus' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]:hover' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea:focus' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea:hover' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-focus-input-style1::after' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-alert-validate::before' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-alert-validate::after' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_cf_input_color',
            $this->style,
            [
                'label' => __('Title Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-focus-input-style1::after ' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_cf_input_text_color',
            $this->style,
            [
                'label' => __('Input Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]:focus' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]:hover' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea:focus' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea:hover' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_cf_error_text_color',
            $this->style,
            [
                'label' => __('Error Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-alert-validate::before' => 'color:{{VALUE}}; border-color:{{VALUE}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-alert-validate::after' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal View', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover View', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_cf_input_br',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]:focus' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]:hover' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea:focus' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea:hover' => '',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_cf_input_h_br',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-focus-input-style1::before' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_cf_input_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
                'default' => [
                    'unit' => 'px',
                    'size' => 15,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]:focus' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 input[type="text"]:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea:focus' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 textarea:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-focus-input-style1::after ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cf_input_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 15,
                ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-focus-input-style1' => 'margin: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px; width: calc(100% - {{BOTTOM}}px - {{LEFT}}px); height: calc(100% - {{TOP}}px - {{RIGHT}}px);',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-input-style1' => 'padding: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;'
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
                    'shortcode-addons-start-tabs' => 'button-settings'
                ]
            ]
        );
        $this->start_section_devider();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Button Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_cf_button',
            $this->style,
            [
                'type' => Controls::TEXT,
                'label' => __('Button Text', SHORTCODE_ADDOONS),
                'placeholder' => __('Button Text', SHORTCODE_ADDOONS),
                'default' => 'Button Text',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-btn' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_cf_btn_position',
            $this->style,
            [
                'label' => __('Button Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'default' => 'center',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-btn' => 'text-align:{{VALUE}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-btn-warp' => 'text-align:{{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_cf_btn_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cf_btn_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Success Massage Setting', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_cf_success_msg',
            $this->style,
            [
                'type' => Controls::TEXTAREA,
                'label' => __('Massage', SHORTCODE_ADDOONS),
                'placeholder' => __('Success Massage', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_group_control(
            'sa_cf_success_msg_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-success-data' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_cf_success_msg_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-success-data' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cf_success_msg_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-success-data' => ''
                ],
            ]
        );

        $this->add_group_control(
            'sa_cf_success_msg_br',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-success-data' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_cf_success_msg_br_radius',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => FALSE,
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-success-data' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cf_success_msg_tx_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-success-data' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cf_success_msg_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 15,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-success-data' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cf_success_msg_matgin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 15,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-form-success' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Button Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_group_control(
            'sa_cf_btn_text_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn' => ''
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal View', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover View', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_cf_btn_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cf_btn_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn' => ''
                ],
            ]
        );

        $this->add_group_control(
            'sa_cf_btn_br',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_cf_btn_br_radius',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => FALSE,
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cf_btn_tx_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_cf_btn_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn' => ''
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_cf_btn_text-h-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:hover' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:focus' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:active' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_cf_btn_h-bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:hover' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:focus' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:active' => '',
                ],
            ]
        );

        $this->add_group_control(
            'sa_cf_btn_h-br',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:hover' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:focus' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:active' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_cf_btn_hover-br-radius',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => FALSE,
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:focus' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_cf_btn_h-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:hover' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:focus' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:active' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_cf_btn_h_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:hover' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:focus' => '',
                    '{{WRAPPER}} .oxi-addons-form-warp-style1 .oxi-addons-btn:active' => '',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
