<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Headers\Admin;

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

class Style_1 extends AdminStyle {

    public function register_controls() {
        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'button' => esc_html__('Button', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_section_tabs(
                'shortcode-addons-general', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-general-sec', [
            'label' => esc_html__('General', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_headers_position_rev', $this->style, [
            'label' => __('Position Reverse', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'left',
            'loader' => TRUE,
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_headers_h_1', $this->style, [
            'label' => __('Heading One', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'placeholder' => 'This is Heading One',
            'default' => 'DESIGN AGENCY',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-btn-group-before' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_headers_h_2', $this->style, [
            'label' => __('Heading Two', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'placeholder' => 'This is Heading One',
            'default' => 'Designing World with Togetherness.',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-btn-group-before' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_headers_sd', $this->style, [
            'label' => __('Short Details', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'placeholder' => 'This is Short Details...',
            'default' => 'Through brand strategy and design, we craft experiences that help brands stand out as well as stand for something.',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-btn-group-before' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_headers_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => 'fas fa-adjust',
                ]
        );
        $this->add_responsive_control(
                'sa_headers_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-dual-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'sa_headers_left_set', [
            'label' => esc_html__('Left-side Setting', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_group_control(
                'sa_headers_left_side_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn24 .oxi-button-btn24' => ''
            ],]
        );
        $this->add_responsive_control(
                'sa_headers_left_side_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-dual-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'sa_headers_right_set', [
            'label' => esc_html__('Right-side Setting', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_group_control(
                'sa_headers_right_side_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn24 .oxi-button-btn24' => ''
            ],]
        );
        $this->add_responsive_control(
                'sa_headers_right_side_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-dual-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-line', [
            'label' => esc_html__('Line', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->start_popover_control(
                'shortcode-addons-line', [
            'label' => __('Line', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_responsive_control(
                'shortcode-addons-line-height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '3',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 250,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 15,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 15,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::before' => 'height: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::after' => 'height: {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'shortcode-addons-line-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '130',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 250,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 15,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 15,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::before' => 'width: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::after' => 'width: {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_head_line_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(212, 55, 55, 1)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::before' => 'background:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::after' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->end_popover_control();
        $this->add_group_control(
                'sa_s_image_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-head-1', [
            'label' => esc_html__('Heading One', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_headers_head_1_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(212, 55, 55, 1)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::before' => 'background:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::after' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_headers_head_1_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text ' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_headers_head_1_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );


        $this->add_group_control(
                'sa_headers_head_1_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-head-2', [
            'label' => esc_html__('Heading Two', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_headers_head_2_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(212, 55, 55, 1)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::before' => 'background:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::after' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_headers_head_2_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text ' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_headers_head_2_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );


        $this->add_group_control(
                'sa_headers_head_2_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-short-details', [
            'label' => esc_html__('Short Details', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_headers_sd_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(212, 55, 55, 1)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::before' => 'background:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text::after' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_headers_sd_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text ' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_headers_sd_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );


        $this->add_group_control(
                'sa_headers_sd_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-general', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'button'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_headers_button_left_text',
                $this->style,
                [
                    'label' => __('Button Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Learn More',
                    'placeholder' => 'Button Text',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => ''
                    ],
                ]
        );
        $this->add_group_control(
                'sa_headers_button_left_link',
                $this->style,
                [
                    'label' => __('Link', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'loader' => TRUE,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => ''
                    ],
                ]
        );
        $this->add_control(
                'sa_headers_button_left_pos', $this->style, [
            'label' => __('Position ', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'left',
            'loader' => TRUE,
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
                'sa_headers_button_left_padding',
                $this->style,
                [
                    'label' => __('Padding', SHORTCODE_ADDOONS),
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
                            'min' => 0,
                            'max' => 300,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 10,
                            'step' => .1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_headers_button_left_margin',
                $this->style,
                [
                    'label' => __('Margin', SHORTCODE_ADDOONS),
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
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_headers_button_left_animation',
                $this->style,
                [
                    'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa_headers_button_left_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => ' ',
                    ],
                ]
        );


        $this->start_controls_tabs(
                'shortcode-addons-start-tabs',
                [
                    'options' => [
                        'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                        'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_headers_button_left_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'color:{{VALUE}};',
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left .oxi-icons' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_control(
                'sa_headers_button_left_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#28a745',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'background-color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_headers_button_left_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => ''
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_headers_button_left_radius',
                $this->style,
                [
                    'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                            'min' => -100,
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
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_headers_button_left_sadow',
                $this->style,
                [
                    'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => ''
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_headers_button_left_hover_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left:hover' => 'color:{{VALUE}};',
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left:hover .oxi-icons' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_control(
                'sa_headers_button_left_hover_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#28a745',
                    'separetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left:hover' => 'background-color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_headers_button_left_hover_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left:hover' => ''
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_headers_button_left_hover_radius',
                $this->style,
                [
                    'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                            'min' => -100,
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
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_headers_button_left_hover_shadow',
                $this->style,
                [
                    'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left:hover' => ''
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
