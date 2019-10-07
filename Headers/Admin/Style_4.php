<?php

namespace SHORTCODE_ADDONS_UPLOAD\Headers\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_4
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_4 extends AdminStyle {

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
            'label' => __('Heading', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'placeholder' => 'This is Heading ',
            'default' => 'DAVID REMBRANT',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-name' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_headers_h_2', $this->style, [
            'label' => __('Sub Heading', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'placeholder' => 'This is Sub Heading One',
            'default' => 'NATURE PHOTOGRAPHY',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_headers_sd', $this->style, [
            'label' => __('Short Details', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'placeholder' => 'This is Short Details...',
            'default' => 'Dr. Neil Cambronero is a heart surgeon who specializes in neonatal, pediatric and adult heart surgery for congenital heart defects. He also has expertise in adults with acquired heart disease.',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-short-detail' => '',
            ],
                ]
        );
          $this->add_group_control(
                'sa_headers_right_side_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4' => ''
            ],]
        );
        $this->add_responsive_control(
                'sa_headers_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            Controls::SEPARATOR => TRUE,
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
                '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'sa_headers_left_set', [
            'label' => esc_html__('Content box', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_group_control(
                'sa_headers_content_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-left-side' => ''
            ],]
        );
        $this->add_responsive_control(
                'sa_headers_content_padding', $this->style, [
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
                '{{WRAPPER}}  .oxi-addons-wrapper-left-side' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();

      
        $this->end_section_devider();

        $this->start_section_devider();
       
        $this->start_controls_section(
                'shortcode-addons-head-1', [
            'label' => esc_html__('Heading ', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_headers_head_1_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-heading' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_headers_head_1_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-heading' => '',
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
                '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'label' => esc_html__('Sub Heading', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_headers_head_2_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#e3e3e3',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-name' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_headers_head_2_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-name ' => '',
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
                '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'default' => '#f2f2f2',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-short-detail' => 'color :{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_headers_sd_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-short-detail ' => '',
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
                '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-short-detail' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link' => ''
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
                ]
        );
        $this->add_control(
                'sa_headers_button_left_pos_1', $this->style, [
            'label' => __('Position ', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
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
                '{{WRAPPER}}  .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button' => 'text-align : {{VALUE}};'
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
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link' => 'margin : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link' => ' ',
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
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link' => 'color:{{VALUE}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_headers_button_left_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(214, 197, 197, 0)',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link' => 'background-color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_headers_button_left_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link' => ''
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
                        'size' => 50,
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
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link' => ''
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
                    'default' => '#242424',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link:hover' => 'color:{{VALUE}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_headers_button_left_hover_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(255, 255, 255, 1)',
                    'separetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link:hover' => 'background-color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_headers_button_left_hover_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link:hover' => ''
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
                        'size' => '',
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
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                        '{{WRAPPER}} .oxi-addons-headers-wrapper-style-4 .oxi-addons-main-button .oxi-addons-link:hover' => ''
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
