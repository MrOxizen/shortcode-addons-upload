<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_2 extends AdminStyle {

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
                    'title_field' => 'sa_event_t_head',
                    'button' => 'Add New Event',
                    'fields' => [
                        'sa_event_t_date' => [
                            'label' => __('Date', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2-{{$key}} .oxi-addons-EW-D-date' => '',
                            ],
                        ],
                        'sa_event_t_month' => [
                            'label' => __('Month', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2-{{$key}} .oxi-addons-EW-2-month' => '',
                            ],
                        ],
                        'sa_event_t_media' => [
                            'type' => Controls::MEDIA,
                            'default' => [
                                'type' => 'media-library',
                                'link' => 'https://www.oxilab.org/wp-content/uploads/2019/04/beautiful-beauty-blue-414612.jpg',
                            ],
                            'controller' => 'add_group_control',
                        ],
                        'sa_event_t_head' => [
                            'label' => __('Heading Text', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2-{{$key}} .oxi-addons-EW-2-H' => '',
                            ],
                        ],
                        'sa_event_t_info_text' => [
                            'label' => __('Info text', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXTAREA,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2-{{$key}} .oxi-addon-EW-2-Adress' => '',
                            ],
                        ],
                        'sa_event_t_location_icon' => [
                            'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                            'type' => Controls::ICON,
                            'default' => 'fas fa-map-marker-alt',
                        ],
                        'sa_event_t_location_text' => [
                            'label' => __('Location text', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2-{{$key}} .oxi-addons-EW-2-C-LO' => '',
                            ],
                        ],
                        'sa_event_t_button' => [
                            'label' => __('Button Text', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2-{{$key}} .oxi-addons-EW-2-button-link' => '',
                            ],
                        ],
                        'sa_event_t_button_link' => [
                            'label' => __('Button Url', SHORTCODE_ADDOONS),
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
        
        $this->add_group_control(
                'sa_event_widgets_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-C-body' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-wrapper-row' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_border_r',
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
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-wrapper-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-C-body' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-wrapper-row' => ''
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
                'shortcode-addons',
                [
                    'label' => esc_html__('Image', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_event_widgets_img_h', $this->style, [
            'label' => __('Height Ratio', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 30,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-image::after' => 'padding-bottom : {{VALUE}}%;',
            ],
                ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'shortcode-addons-ei-head', [
            'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_head_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-H' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-H' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_head_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-H' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-details', [
            'label' => esc_html__('Info Text', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_details_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addon-EW-2-Adress' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_details_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addon-EW-2-Adress' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_details_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addon-EW-2-Adress' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-location-text', [
            'label' => esc_html__('Location Text', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_location_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-C-LO' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_location_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addon-EW-2-location-I .oxi-icons' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_location_fs', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-C-LO' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_location_padding',
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
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addon-EW-2-location' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-back-button', [
            'label' => esc_html__('Button', SHORTCODE_ADDOONS),
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_btn_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-button-link' => '',
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
                'sa_event_widgets_btn_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-button-link' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_btn_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(15,160,189,1.00)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-button-link' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_btn_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-button-link' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event_widgets_btn_border_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-button-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
                'sa_event_widgets_btn_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-button-link:hover' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_btn_h_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(10,91,107,1.00)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-button-link:hover' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_btn_h_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-button-link:hover' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event_widgets_btn_h_border_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-button-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_event_widgets_btn_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-button-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_btn_margin', $this->style, [
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
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-button-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addonsDate-And-Month',
                [
                    'label' => esc_html__('Date And Month', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event-widgets_date_and_month_pos', $this->style, [
            'label' => __('Button Position ', SHORTCODE_ADDOONS),
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
                'sa_event-widgets_date_and_month_w', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 65,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 400,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 25,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-date-month' => ' width : {{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event-widgets_date_and_month_H', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 75,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 400,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 25,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-date-month' => 'height : {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_event-widgets_date_and_month_img', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-date-month ' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_event-widgets_date_and_month_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-date-month' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'widgets_date_and_month_border-radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-date-month ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'widgets_date_and_month_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                '%' => [
                    'min' => -10,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => -200,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => -10,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-date-month ' => 'margin : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-ei-date', [
            'label' => esc_html__('Date', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_date_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-date ' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_date_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-date ' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-date ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-month', [
            'label' => esc_html__('Month', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_ei_month_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-month ' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_month_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-month ' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-2 .oxi-addons-EW-2-month ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
