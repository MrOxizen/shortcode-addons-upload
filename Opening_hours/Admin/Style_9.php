<?php

namespace SHORTCODE_ADDONS_UPLOAD\Opening_hours\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_9 extends AdminStyle {

    public function register_controls() {



        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'content-settings' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_oh_width', $this->style, [
            'label' => __('Maximum Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-row' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-row' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-row' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_oh_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );
        $this->add_group_control(
                'sa_oh_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-row' => ''
            ],
                ]
        );

        $this->add_group_control(
                'sa_oh_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->add_responsive_control(
                'sa_oh_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );


        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Header & Footer Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_oh_header', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Header', SHORTCODE_ADDOONS),
            'default' => 'RESERVATIONS',
             'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-header' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_oh_subheader', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Sub Header', SHORTCODE_ADDOONS),
            'default' => 'Opening Hours',
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-subheader' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_oh_footer', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Footer', SHORTCODE_ADDOONS),
            'default' => 'Book your table now',
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-footertext' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'header' => esc_html__('Header', SHORTCODE_ADDOONS),
                'subheader' => esc_html__('Sub Header', SHORTCODE_ADDOONS),
                'footer' => esc_html__('Footer', SHORTCODE_ADDOONS),
            ]
                ]
        );

        $this->start_controls_tab();
        $this->add_group_control(
                'sa_oh_heading_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-header' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_oh_heading_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-header' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_heading_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-header' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_heading_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-header' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_oh_heading_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_oh_subheading_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-subheader' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_oh_subheading_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-subheader' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_oh_subheading_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-subheader' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_oh_subheading_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-subheader' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_oh_footer_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-footertext' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_oh_footer_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-footertext' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_oh_footer_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-footertext' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_oh_footer_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-footertext' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'content-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Day & Time Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_oh_col', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-admin-edit-list' => ''
            ],
                ]
        );

        $this->add_repeater_control(
                'sa_oh_repeater', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_oh_start_tabs' => [
                    'controller' => 'start_controls_tabs',
                    'options' => [
                        'day' => esc_html__('Day Text', SHORTCODE_ADDOONS),
                        'time' => esc_html__('Time Text', SHORTCODE_ADDOONS),
                    ]
                ],
                'sa_oh_start_tab_1' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_oh_day_text' => [
                    'type' => Controls::TEXT,
                    'label' => __('Day', SHORTCODE_ADDOONS),
                    'default' => 'Sunday to Saturday',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .sa_oh_wrapper_{{KEY}} .oxi-addonsOH-SX-heading-text' => ''
                    ],
                ],
                'sa_oh_day_color' => [
                    'label' => __('Day Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#000000',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .sa_oh_wrapper_{{KEY}} .oxi-addonsOH-SX-heading-text' => 'color:{{VALUE}};'
                    ],
                ],
                'sa_oh_end_tab_1' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_oh_start_tab_2' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_oh_time_text' => [
                    'type' => Controls::TEXT,
                    'label' => __('Time', SHORTCODE_ADDOONS),
                    'default' => '10:00-17:00',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .sa_oh_wrapper_{{KEY}} .oxi-addonsOH-SX-date' => ''
                    ],
                ],
                'sa_oh_time_color' => [
                    'label' => __('Time Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#000000',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .sa_oh_wrapper_{{KEY}} .oxi-addonsOH-SX-date' => 'color:{{VALUE}};'
                    ],
                ],
                'sa_oh_end_tab_2' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_oh_end_tabs' => [
                    'controller' => 'end_controls_tabs',
                ],
            ],
            'title_field' => 'sa_oh_day_text',
                ]
        );



        $this->add_group_control(
                'sa_oh_conter_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-content' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'day' => esc_html__('Day', SHORTCODE_ADDOONS),
                'time' => esc_html__('Time', SHORTCODE_ADDOONS),
            ]
                ]
        );

        $this->start_controls_tab();


        $this->add_group_control(
                'sa_oh_day_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-heading-text' => ''
            ],
                ]
        );

        $this->add_group_control(
                'sa_oh_day_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-heading-text' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_oh_day_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_oh_time_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-date' => ''
            ],
                ]
        );


        $this->add_group_control(
                'sa_oh_time_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-date' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_oh_time_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );



        $this->end_controls_tab();
        $this->end_controls_tabs();
        
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'cp' => esc_html__('Content Padding', SHORTCODE_ADDOONS),
                'hp' => esc_html__('Hover Padding', SHORTCODE_ADDOONS),
            ]
                ]
        );

        $this->start_controls_tab();
        $this->add_responsive_control(
                'sa_oh_content_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_responsive_control(
                'sa_oh_content_hover_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-content:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        
        
        $this->add_responsive_control(
                'sa_oh_contentT_padding', $this->style, [
            'label' => __('Full Content Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-rowpadding' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Button Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_oh_button', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Button Text', SHORTCODE_ADDOONS),
            'placeholder' => __('Button Text', SHORTCODE_ADDOONS),
            'default' => 'Button Text',
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_btn_link', $this->style, [
            'type' => Controls::URL,
               ]
        );
        $this->add_control(
                'sa_oh_btn_position', $this->style, [
            'label' => __('Button Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'center',
            'loader' => TRUE,
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button' => 'text-align:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_btn_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal View', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover View', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_oh_btn_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_btn_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link' => ''
            ],
                ]
        );

        $this->add_group_control(
                'sa_oh_btn_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_oh_btn_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_btn_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_btn_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link' => ''
            ],
                ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_oh_btn_text-h-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:hover' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:focus' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:active' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_btn_h-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:hover' => '',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:focus' => '',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:active' => '',
            ],]
        );

        $this->add_group_control(
                'sa_oh_btn_h-br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:hover' => '',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:focus' => '',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:active' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_oh_btn_hover-br-radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:focus' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],]
        );
        $this->add_group_control(
                'sa_oh_btn_h-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
           'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:hover' => '',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:focus' => '',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:active' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_btn_h_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
           'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:hover' => '',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:focus' => '',
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link:active' => '',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_oh_btn_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_oh_btn_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-SX-wrapper-9 .oxi-addonsOH-SX-button-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
