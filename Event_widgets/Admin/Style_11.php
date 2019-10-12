<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_11
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_11 extends AdminStyle {

    public function register_controls() {

        $this->start_section_header(
                'shortcode-addons-start-tabs',
                [
                    'options' => [
                        'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                        'date-month' => esc_html__('Date & Month', SHORTCODE_ADDOONS),
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
                    'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_col',
                $this->style,
                [
                    'type' => Controls::COLUMN,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-col' => ''
                    ],
                ]
        );
        $this->add_repeater_control(
                'sa_event_widgets_data',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::REPEATER,
                    'title_field' => 'sa_event_t_heading',
                    'button' => 'Add New Event',
                    'fields' => [
                        'sa_event_t_media' => [
                            'type' => Controls::MEDIA,
                            'default' => [
                                'type' => 'media-library',
                                'link' => 'https://www.oxilab.org/wp-content/uploads/2019/01/pexels-photo-1576280-1.jpeg',
                            ],
                            'controller' => 'add_group_control',
                        ],
                        'sa_event_t_heading' => [
                            'label' => __('Heading', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-11-wrapper-style-11-{{$key}} .oxi-addons-EW-11-heading' => '',
                            ],
                        ],
                        'sa_event_t_info_time' => [
                            'label' => __('Time', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-11-wrapper-style-11-{{$key}} .oxi-addons-EW-11-time' => '',
                            ],
                        ],
                        'sa_event_t_address' => [
                            'label' => __('Address', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-11-wrapper-style-11-{{$key}} .oxi-addons-EW-11-address-text' => '',
                            ],
                        ],
                        'sa_event_t_address_icon' => [
                            'label' => esc_html__('Address Icon', SHORTCODE_ADDOONS),
                            'type' => Controls::ICON,
                            'default' => 'fas fa-map-marker-alt',
                        ],
                        'sa_event_t_day' => [
                            'label' => __('Day', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-11-wrapper-style-11-{{$key}} .oxi-addons-EW-11-D' => '',
                            ],
                        ],
                        'sa_event_t_month' => [
                            'label' => __('Month', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-11-wrapper-style-11-{{$key}} .oxi-addons-EW-11-M' => '',
                            ],
                        ],
                        'sa_event_t_link_text' => [
                            'label' => __('Link Text', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-11-wrapper-style-11-{{$key}} .oxi-addons-EW-11-button-link' => '',
                            ],
                        ],
                        'sa_event_t_btn_link_url' => [
                            'type' => Controls::URL,
                            'controller' => 'add_group_control',
                        ],
                    ],
                ]
        );

        $this->add_control('sa-ac-gen-sep', $this->style, [
            'type' => Controls::SEPARATOR,
            'label' => esc_html__('', SHORTCODE_ADDOONS),
            Controls::SEPARATOR => TRUE,
                ]
        );

        $this->add_control(
                'sa_event_widgets_img_max_width', $this->style, [
            'label' => __('Max Width', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 750,
            'min' => 0,
            'max' => 1000,
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11' => 'max-width : {{VALUE}}px;',
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_body_positon', $this->style, [
            'label' => __('Body Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'right',
            'loader' => true,
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event_widgets_border_radius',
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
                        '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );

        $this->add_responsive_control(
                'sa_event_widgets_margin',
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
                        '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}}  ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-row' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-ei-con-body', [
            'label' => esc_html__('Body', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'sa_event_widgets_body_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(36, 145, 105, 1.00)',
            'selector' => [
                '{{WRAPPER}}  ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-IM-O' => 'background : {{VALUE}}; '
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event_widgets_body_padding', $this->style, [
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
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
                'shortcode-addons-ei-heading', [
            'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
                ]
        );

        $this->add_control(
                'sa_event_widgets_heading_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_heading_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_heading_padding', $this->style, [
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
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-heading', [
            'label' => esc_html__('Time', SHORTCODE_ADDOONS),
                ]
        );

        $this->add_control(
                'sa_event_widgets_time_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_time_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9 .oxi-addons-EW-9-content-body' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_time_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_time_padding', $this->style, [
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
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-ei-heading', [
            'label' => esc_html__('Address', SHORTCODE_ADDOONS),
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Text', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Icon', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_address_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_address_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_address_padding', $this->style, [
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
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_address_icon_size', $this->style, [
            'label' => __('Font Size', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 18,
            'min' => 0,
            'max' => 80,
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11' => 'max-width : {{VALUE}}px;',
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_address_icon_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_address_icon_bg_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(0, 185, 252,1.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}}  ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-H' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_address_icon_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 400,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-btn-group ' => 'width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_address_icon_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 400,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-btn-group ' => 'width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_br_radius',
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
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_padding',
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
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-description', [
            'label' => esc_html__('Link', SHORTCODE_ADDOONS),
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
                'sa_event_widgets_link_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-link' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_link_br',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => ''
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_link_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#2a4cbd',
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-link:hover' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_link_h_br',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => ''
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control('sa-ac-gen-sep', $this->style, [
            'type' => Controls::SEPARATOR,
            'label' => esc_html__('', SHORTCODE_ADDOONS),
            Controls::SEPARATOR => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_link_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-link' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_link_padding', $this->style, [
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
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs',
                [
                    'condition' => [
                        'shortcode-addons-start-tabs' => 'date-month'
                    ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-ei-date', [
            'label' => esc_html__('Date & Month', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_event_widgets_date_m_positon', $this->style, [
            'label' => __('Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'flex-start',
            'loader' => true,
            'options' => [
                'flex-start' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'flex-end' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_event_d_m_H', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 80,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 400,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-btn-group ' => 'width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_d_m_W', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 400,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-btn-group ' => 'width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_bg',
                $this->style,
                [
                    'type' => Controls::BACKGROUND,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1' => ''
                    ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => ''
                    ],
                ]
        );
        $this->add_control('sa-ac-gen-sep', $this->style, [
            'type' => Controls::SEPARATOR,
            'label' => esc_html__('', SHORTCODE_ADDOONS),
            Controls::SEPARATOR => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_br_radius',
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
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_margin',
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
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Date', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_event_widgets_date_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-D' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_date_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-D' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_date_padding', $this->style, [
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
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-D' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Month', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_event_widgets_month_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-M' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_month_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-M' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_month_padding', $this->style, [
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
                '{{WRAPPER}} ..oxi-addons-EW-11-wrapper-style-11 .oxi-addons-EW-10-M' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
