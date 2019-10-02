<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Tooltip\Admin;

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

class Style_3 extends AdminStyle
{

    public function register_controls()
    {

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
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
            'sa_tooltip_col',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_tooltip_colum' => ''
                ],
            ]
        );
        $this->add_repeater_control(
            'sa_tooltip_data',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_tooltip_shortcode' => [
                        'label' => esc_html__('Short code', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'loader' => TRUE,
                    ],
                    'sa_tooltip_text' => [
                        'label' => esc_html__('Tooltip Text', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'loader' => TRUE,
                        'default' => 'tooltip',
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3 .sa_addons_tooltip_text' => '',
                        ],
                    ],
                    'sa_tooltip_posi' => [
                        'label' => __('Tooltip Position', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'loader' => TRUE,
                        'default' => 'sa_tooltip_right',
                        'options' => [
                            'sa_tooltip_top' => __('Top', SHORTCODE_ADDOONS),
                            'sa_tooltip_bottom' => __('Bottom', SHORTCODE_ADDOONS),
                            'sa_tooltip_left' => __('Left', SHORTCODE_ADDOONS),
                            'sa_tooltip_right' => __('Right', SHORTCODE_ADDOONS),
                        ],
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_tooltip_style_3.sa_tooltip_unique_{{KEY}}' => '',
                        ],
                    ],
                    'sa_tooltip_m_t' => [
                        'label' => __('Margin Top', SHORTCODE_ADDOONS),
                        'type' => Controls::SLIDER,
                        'controller' => 'add_responsive_control',
                        'default' => [
                            'unit' => 'px',
                            'size' => '-7',
                        ],
                        'range' => [
                            'px' => [
                                'min' => -200,
                                'max' => 200,
                                'step' => 1,
                            ],
                        ],
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_tooltip_style_3.sa_tooltip_top .sa_addons_tooltip_text' => 'margin-top: {{SIZE}}px;'
                        ],
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_tooltip_posi' => 'sa_tooltip_top'
                        ]
                    ],
                    'sa_tooltip_m_b' => [
                        'label' => __('Margin Bottom', SHORTCODE_ADDOONS),
                        'type' => Controls::SLIDER,
                        'controller' => 'add_responsive_control',
                        'default' => [
                            'unit' => 'px',
                            'size' => '7',
                        ],
                        'range' => [
                            'px' => [
                                'min' => -200,
                                'max' => 200,
                                'step' => 1,
                            ],
                        ],
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_tooltip_style_3.sa_tooltip_bottom .sa_addons_tooltip_text' => 'margin-top: {{SIZE}}px;'
                        ],
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_tooltip_posi' => 'sa_tooltip_bottom'
                        ]
                    ],
                    'sa_tooltip_m_l' => [
                        'label' => __('Margin Left', SHORTCODE_ADDOONS),
                        'type' => Controls::SLIDER,
                        'controller' => 'add_responsive_control',
                        'default' => [
                            'unit' => 'px',
                            'size' => '-7',
                        ],
                        'range' => [
                            'px' => [
                                'min' => -200,
                                'max' => 200,
                                'step' => 1,
                            ],
                        ],
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_tooltip_style_3.sa_tooltip_left .sa_addons_tooltip_text' => 'margin-left: {{SIZE}}px;'
                        ],
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_tooltip_posi' => 'sa_tooltip_left'
                        ]
                    ],
                    'sa_tooltip_m_r' => [
                        'label' => __('Margin Right', SHORTCODE_ADDOONS),
                        'type' => Controls::SLIDER,
                        'controller' => 'add_responsive_control',
                        'default' => [
                            'unit' => 'px',
                            'size' => '7',
                        ],
                        'range' => [
                            'px' => [
                                'min' => -200,
                                'max' => 200,
                                'step' => 1,
                            ],
                        ],
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_tooltip_style_3.sa_tooltip_right .sa_addons_tooltip_text' => 'margin-left: {{SIZE}}px;'
                        ],
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_tooltip_posi' => 'sa_tooltip_right'
                        ]
                    ],
                    'sa_tooltip_url_open' => [
                        'label' => esc_html__('Link Enable', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'default' => 'yes',
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ],

                    'sa_tooltip_url' => [
                        'label' => esc_html__('Url', SHORTCODE_ADDOONS),
                        'type' => Controls::URL,
                        'controller' => 'add_group_control',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_tooltip_url_open' => 'yes'
                        ]
                    ],
                ],
                'title_field' => 'sa_tooltip_text',
                'button' => 'Add Tooltip Item',
            ]
        );
        $this->add_responsive_control(
            'sa_tooltip_img_w',
            $this->style,
            [
                'label' => __('Max Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '300',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3' => 'max-width: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_control(
            'sa_tooltip_align',
            $this->style,
            [
                'label' => __('Align', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_tooltip_margin',
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
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -10,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Tooltip Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_tooltip_text_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3 .sa_addons_tooltip_text' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_tooltip_text_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3 .sa_addons_tooltip_text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_tooltip_text_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3 .sa_addons_tooltip_text' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_tooltip_text_b_r',
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
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3 .sa_addons_tooltip_text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

                ],
            ]
        );
        $this->add_responsive_control(
            'sa_tooltip_text_padding',
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
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3 .sa_addons_tooltip_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

                ],
            ]
        );

        $this->add_group_control(
            'sa_tooltip_text_box_sha',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3 .sa_addons_tooltip_text' => '',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Arrow Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_responsive_control(
            'sa_tooltip_text_arr_size',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '5',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3 .sa_addons_tooltip_text::after' => 'border-width: {{SIZE}}px;'
                ],
            ]
        );
        $this->add_control(
            'sa_tooltip_text_arr_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#19b9d1',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3.sa_tooltip_top .sa_addons_tooltip_text:after' => 'border-color: {{VALUE}} transparent transparent transparent;',
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3.sa_tooltip_bottom .sa_addons_tooltip_text:after' => 'border-color: transparent transparent {{VALUE}} transparent;',
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3.sa_tooltip_left .sa_addons_tooltip_text:after' => 'border-color: transparent transparent transparent {{VALUE}};',
                    '{{WRAPPER}} .sa_addons_tooltip_container_style_3 .sa_addons_tooltip_style_3.sa_tooltip_right .sa_addons_tooltip_text:after' => 'border-color: transparent {{VALUE}} transparent transparent;',
                ],
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
