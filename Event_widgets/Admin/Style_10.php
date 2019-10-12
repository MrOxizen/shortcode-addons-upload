<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_10
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_10 extends AdminStyle {

    public function register_controls() {


        $this->start_section_tabs(
                'shortcode-addons-start-tabs',
                []
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
                                'link' => 'https://www.oxilab.org/wp-content/uploads/2019/01/pexels-photo-167589.jpeg',
                            ],
                            'controller' => 'add_group_control',
                        ],
                        'sa_event_t_heading' => [
                            'label' => __('Heading', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10-{{$key}} .oxi-addons-EW-10-H' => '',
                            ],
                        ],
                        'sa_event_t_heading_link' => [
                            'type' => Controls::URL,
                            'controller' => 'add_group_control',
                        ],
                        'sa_event_t_info_time' => [
                            'label' => __('Time', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10-{{$key}} .oxi-addons-EW-10-F-T-T' => '',
                            ],
                        ],
                        'sa_event_t_info_time_icon' => [
                            'label' => esc_html__('Time Icon', SHORTCODE_ADDOONS),
                            'type' => Controls::ICON,
                            'default' => 'far fa-clock',
                        ],
                        'sa_event_t_address' => [
                            'label' => __('Address', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10-{{$key}} .oxi-addons-EW-10-F-L-T' => '',
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
                                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10-{{$key}} .oxi-addons-EW-7-text' => '',
                            ],
                        ],
                        'sa_event_t_month' => [
                            'label' => __('Month', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10-{{$key}} .oxi-addons-EW-10-D' => '',
                            ],
                        ],
                        'sa_event_t_link_text' => [
                            'label' => __('Link Text', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10-{{$key}} .oxi-addons-EW-10-M' => '',
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
                'sa_event_widgets_img_height_ratio', $this->style, [
            'label' => __('Height Ratio', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 50,
            'min' => 0,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-BG::after' => 'padding-bottom : {{VALUE}}%;',
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_img_max_width', $this->style, [
            'label' => __('Max Width', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 800,
            'min' => 0,
            'max' => 1000,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10' => 'max-width : {{VALUE}}px;',
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-BG' => ''
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
                        '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-row' => ''
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
                'shortcode-addons-ei-overly', [
            'label' => esc_html__('Overly', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'sa_event_widgets_overly_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(5, 5, 5, 0.76)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-IM-O' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_overly_positon', $this->style, [
            'label' => __('Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'default' => 'right',
            'loader' => true,
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_overly_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 40,
            'min' => 0,
            'max' => 500,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-IM-O' => 'width : {{VALUE}}%;',
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_overly_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-IM-O' => ''
            ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-ei-heading', [
            'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
            'showing' => True,
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
                'sa_event_widgets_heading_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-H' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_heading_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#13d19e',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-H:hover' => 'color : {{VALUE}}; '
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
                'sa_event_widgets_heading_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-H' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-H' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-date', [
            'label' => esc_html__('Day & Month', SHORTCODE_ADDOONS),
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Day', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Month', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_date_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-D' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_date_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-D' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-D' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();



        $this->add_control(
                'sa_event_widgets_month_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-M' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_month_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-M' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-M' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
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
                'normal' => esc_html__('Time', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Address', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_link_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-link' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_link_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#13d19e',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-link:hover' => 'color : {{VALUE}}; '
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
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-link' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-footer', [
            'label' => esc_html__('Footer', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_footer_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(255, 66, 113,1.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-F-TL' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_footer_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-F-TL' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Time', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Address', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_time_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-F-T-T' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_time_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-F-T-I .oxi-icons' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_time_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-F-T-T' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-F-T' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_address_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-F-L-T' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_address_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-F-L-I .oxi-icons' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_address_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-F-L-T' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-10-wrapper-style-10 .oxi-addons-EW-10-F-location' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
