<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_7
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_7 extends AdminStyle {

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
                                'link' => 'https://www.oxilab.org/wp-content/uploads/2019/01/fireworks-846063_1920.jpg',
                            ],
                            'controller' => 'add_group_control',
                        ],
                        'sa_event_t_heading' => [
                            'label' => __('Heading', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7-{{$key}} .oxi-addons-EW-7-H' => '',
                            ],
                        ],
                        'sa_event_t_info_time' => [
                            'label' => __('Time', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7-{{$key}} .oxi-addons-EW-7-time-text' => '',
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
                                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7-{{$key}} .oxi-addons-EW-7-text' => '',
                            ],
                        ],
                        'sa_event_t_address_icon' => [
                            'label' => esc_html__('Address Icon', SHORTCODE_ADDOONS),
                            'type' => Controls::ICON,
                            'default' => 'fas fa-map-marker-alt',
                        ],
                        'sa_event_t_btn_text' => [
                            'label' => __('Line Text', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7-{{$key}} .oxi-addons-EW-7-icon-text' => '',
                            ],
                        ],
                        'sa_event_t_btn_icon' => [
                            'label' => esc_html__('Address Icon', SHORTCODE_ADDOONS),
                            'type' => Controls::ICON,
                            'default' => 'fas fa-location-arrow',
                        ],
                        'sa_event_t_btn_link' => [
                            'label' => esc_html__('Url', SHORTCODE_ADDOONS),
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
                'sa_event_widgets_img_h_ratio', $this->style, [
            'label' => __('Height Ratio', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 27,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-image::after' => 'padding-bottom : {{VALUE}}%;',
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
                        '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-body' => 'border-radius: 0 0 {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                        '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-image' => ''
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
                'shortcode-addons-ei-img-overly', [
            'label' => esc_html__('Image Overly', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'sa_event_widgets_img_overly_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(5, 5, 5, 0.76)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-body' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_img_overly_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                '{{WRAPPER}}  .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-H' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_heading_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-H' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-H' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-time', [
            'label' => esc_html__('Time', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_time_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-time' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_time_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-time-text' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-time-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-address', [
            'label' => esc_html__('Address', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_address_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-address' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_address_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-address' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-address' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-link', [
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
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-link-C' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_link_H_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#0037ff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-link-C:hover' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_event_widgets_link_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-icon-text' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-7-wrapper-style-7 .oxi-addons-EW-7-link-C' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
