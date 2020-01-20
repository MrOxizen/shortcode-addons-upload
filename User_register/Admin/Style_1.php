<?php

namespace SHORTCODE_ADDONS_UPLOAD\User_register\Admin;

if (!defined('ABSPATH')) {
    exit;
}

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
                    'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
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
            'labels_headding',
            $this->style,
            [
                'label' => __('Labels', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
            ]
        );
        $this->add_control(
            'show_labels',
            $this->style,
            [
                'label'         => __('Label', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'custom_labels',
            $this->style,
            [
                'label'         => __('Custom Label', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'condition' => [
                    'show_labels'   => 'yes',
                ],
            ]
        );
        $this->add_control(
            'first_name_headding',
            $this->style,
            [
                'label' => __('First Name', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'condition' => [
                    'custom_labels' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'first_name_label',
            $this->style,
            [
                'label'     => esc_html__('First Name Label', SHORTCODE_ADDOONS),
                'type'      => Controls::TEXT,
                'default'   => esc_html__('First Name', SHORTCODE_ADDOONS),
                'condition' => [
                    'show_labels'   => 'yes',
                    'custom_labels' => 'yes',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_label_first' => '',
                ],
            ]
        );
        $this->add_control(
            'first_name_placeholder',
            $this->style,
            [
                'label'     => esc_html__('First Name Placeholder', SHORTCODE_ADDOONS),
                'type'      => Controls::TEXT,
                'default'   => esc_html__('John', SHORTCODE_ADDOONS),
                'condition' => [
                    'show_labels'   => 'yes',
                    'custom_labels' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'last_name_headding',
            $this->style,
            [
                'label' => __('Last Name', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'condition' => [
                    'custom_labels' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'last_name_label',
            $this->style,
            [
                'label'     => esc_html__('Last Name Label', SHORTCODE_ADDOONS),
                'type'      => Controls::TEXT,
                'default'   => esc_html__('Last Name', SHORTCODE_ADDOONS),
                'condition' => [
                    'show_labels'   => 'yes',
                    'custom_labels' => 'yes',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_label_last' => '',
                ],
            ]
        );
        $this->add_control(
            'last_name_placeholder',
            $this->style,
            [
                'label'     => esc_html__('Last Name Placeholder', SHORTCODE_ADDOONS),
                'type'      => Controls::TEXT,
                'default'   => esc_html__('Doe', SHORTCODE_ADDOONS),
                'condition' => [
                    'show_labels'   => 'yes',
                    'custom_labels' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'email_name_headding',
            $this->style,
            [
                'label' => __('Email', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'condition' => [
                    'custom_labels' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'email_label',
            $this->style,
            [
                'label'     => esc_html__('Email Label', SHORTCODE_ADDOONS),
                'type'      => Controls::TEXT,
                'default'   => esc_html__('Email', SHORTCODE_ADDOONS),
                'condition' => [
                    'show_labels'   => 'yes',
                    'custom_labels' => 'yes',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_label_email' => '',
                ],
            ]
        );
        $this->add_control(
            'email_placeholder',
            $this->style,
            [
                'label'     => esc_html__('Email Placeholder', SHORTCODE_ADDOONS),
                'type'      => Controls::TEXT,
                'default'   => esc_html__('example@email.com', SHORTCODE_ADDOONS),
                'condition' => [
                    'show_labels'   => 'yes',
                    'custom_labels' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'submit_button_title',
            $this->style,
            [
                'label'  => __('Submit Button', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'separator' => TRUE,
            ]
        );
        $this->add_control(
            'button_text',
            $this->style,
            [
                'label'     => esc_html__('Button Text', SHORTCODE_ADDOONS),
                'type'      => Controls::TEXT,
                'default'   => esc_html__('Register', SHORTCODE_ADDOONS),
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button span' => '',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Additional Options', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'redirect_after_register',
            $this->style,
            [
                'label'         => __('Redirect After Login', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'redirect_url',
            $this->style,
            [
                'label'       => __('Redirect Link', SHORTCODE_ADDOONS),
                'type'          => Controls::TEXT,
                'placeholder'   => 'http://your-link.com/',
                'description'   => esc_html__('Note: Because of security reasons, you can ONLY use your current domain here.', SHORTCODE_ADDOONS),
                'condition'     => [
                    'redirect_after_register' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'show_lost_password',
            $this->style,
            [
                'label'         => __('Lost your password?', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'show_login',
            $this->style,
            [
                'label'   => esc_html__('Login', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'show_logged_in_message',
            $this->style,
            [
                'label'         => __('Logged in Message', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'show_additional_message',
            $this->style,
            [
                'label'         => __('Additional Bottom Message', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'additional_message',
            $this->style,
            [
                'label'     => esc_html__('Additional Message', SHORTCODE_ADDOONS),
                'type'      => Controls::TEXTAREA,
                'default'   => esc_html__('<b>Note:</b> Your password will be generated automatically and sent to your email address.', SHORTCODE_ADDOONS),
                'condition'     => [
                    'show_additional_message' => 'yes',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_register_additional_message' => '',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'box_align',
            $this->style,
            [
                'label' => __('Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => 'icon',
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
            ]
        );
        $this->add_responsive_control(
            'sa_user_register_width',
            $this->style,
            [
                'label' => __('Max Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            'sa_user_register_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_main' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_user_register_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_main' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_user_register_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_main' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_user_register_b_r',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_main' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_user_register_padding',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_user_register_margin',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'label' => esc_html__('Form Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'row_gap',
            $this->style,
            [
                'label' => __('Rows Gap', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
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
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'links_typ',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_password a' => '',
                ],
            ]
        );
        $this->add_control(
            'links_color',
            $this->style,
            [
                'label' => __('Links Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_password a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_password a:not(:last-child):after' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'links_hover_color',
            $this->style,
            [
                'label' => __('Links Hover Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_password a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'form_lable_headding',
            $this->style,
            [
                'label' => __('Labels', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'separator' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'label_spacing',
            $this->style,
            [
                'label' => __('Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
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
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_label' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'label_color',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_label' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'label_typ',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_label' => '',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Fields Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'field_typography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input' => '',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Focus', SHORTCODE_ADDOONS),
                ],
                'separator' => TRUE,
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'field_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'field_placeholder_color',
            $this->style,
            [
                'label' => __('Placeholder Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input::placeholder' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input::-moz-placeholder' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'field_text_color_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input' => 'background-color: {{VALUE}} !important;',
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_checkbox' => 'background-color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_group_control(
            'field_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input' => '',
                ]
            ]
        );
        $this->add_group_control(
            'field_border_box_sha',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'field_text_color_bg_focus',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input:focus' => 'background-color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_group_control(
            'field_border_focus',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input:focus' => '',
                ]
            ]
        );
        $this->add_group_control(
            'field_border_box_sha_focus',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input:focus' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'field_border_radius_normal',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
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
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'field__padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
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
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_field .sa_user_register_input' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'field__margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
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
                    '{{WRAPPER}} .sa_user_register_container_style_1  .sa_user_register_form_controls' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Submit Button', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'button_align',
            $this->style,
            [
                'label' => __('Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => 'icon',
                'default' => 'left',
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
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button_content' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'button_typography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button' => '',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ],
                'separator' => TRUE,
            ]
        );
        $this->start_controls_tab();

        $this->add_control(
            'button_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'button_text_color_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'button_border_b_r',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'button_box_sha',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button' => '',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'button_text_color_h',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'button_text_color_bg_h',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button:hover' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'button_border_h',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button:hover' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'button_border_b_r_h',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'button_box_sha_h',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button:hover' => '',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'button_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'button__margin',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_register_button_content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Additional Message', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'additonal_typography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_register_additional_message' => '',
                ],
            ]
        );

        $this->add_control(
            'additonal_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_register_additional_message' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'additonal_padding',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_register_additional_message' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Success / Error Messsage', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'error_succ_typography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_message_show' => '',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Success', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Error', SHORTCODE_ADDOONS),
                ],
                'separator' => TRUE,
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'success_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#155724',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_message_show.sa_user_success' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'success_color_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#d4edda',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_message_show.sa_user_success' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'success_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_message_show.sa_user_success' => '',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'success_padding',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_message_show.sa_user_success' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'error_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#721c24',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_message_show.sa_user_error' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'error_color_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f8d7da',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_message_show.sa_user_error' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'error_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_message_show.sa_user_error' => '',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'error_padding',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_user_register_container_style_1 .sa_user_message_show.sa_user_error' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
