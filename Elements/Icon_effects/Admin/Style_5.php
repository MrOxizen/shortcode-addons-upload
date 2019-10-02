<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Icon_effects\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_5
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_5 extends AdminStyle
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
            'sa_icon_effects_col',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_effects_colum' => ''
                ],
            ]
        );
        $this->add_repeater_control(
            'sa_icon_effects_data',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_icon_effects_icon' => [
                        'label' => esc_html__('Icon', SA_ELEMENTOR_TEXTDOMAIN),
                        'type' => Controls::ICON,
                        'default' => 'fab fa-linkedin-in',
                    ],
                    'sa_icon_effects_type' => [
                        'label' => __('Icon Effects Type', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        Controls::SEPARATOR => TRUE,
                        'default' => 'sa_icon_effect_left_to_right',
                        'options' => [
                            'sa_icon_effect_left_to_right' => __('Left To Right', SHORTCODE_ADDOONS),
                            'sa_icon_effect_right_to_left' => __('Right To Left', SHORTCODE_ADDOONS),
                            'sa_icon_effect_top_to_bottom' => __('Top To Bottom', SHORTCODE_ADDOONS),
                            'sa_icon_effect_bottom_to_top' => __('Bottom To Top', SHORTCODE_ADDOONS),
                        ],
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_icon_effects_style_5.sa_icon_effects_unique_{{KEY}}' => '',
                        ],
                    ],
                    'shortcode-addons-start-tabs' => [
                        'controller' => 'start_controls_tabs',
                        'options' => [
                            'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                            'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                        ]
                    ],

                    'shortcode-addons-start-tab1' => [
                        'controller' => 'start_controls_tab',
                    ],

                    'sa_icon_effects_color' => [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#0E76A8',
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_icon_effects_style_5.sa_icon_effects_unique_{{KEY}} .oxi-icons' => 'color:{{VALUE}}',
                        ],
                    ],
                    'sa_icon_effects_box_shadow' => [
                        'label' => __('', SHORTCODE_ADDOONS),
                        'type' => Controls::BOXSHADOW,
                        'controller' => 'add_group_control',
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_icon_effects_style_5.sa_icon_effects_unique_{{KEY}}' => '',
                        ],
                    ],
                    'shortcode-addons-start-tab1-end' => [
                        'controller' => 'end_controls_tab',
                    ],

                    'shortcode-addons-start-tab2' => [
                        'controller' => 'start_controls_tab',
                    ],

                    'sa_icon_effects_color_hover' => [
                        'label' => __('Hover Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#ffffff',
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_icon_effects_style_5.sa_icon_effects_unique_{{KEY}}:hover .oxi-icons' => 'color:{{VALUE}};',
                        ],
                    ],
                    'sa_icon_effects_bg_hover' => [
                        'label' => __('Hover Background', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'oparetor' => 'RGB',
                        'default' => '#0E76A8',
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_icon_effects_style_5.sa_icon_effects_unique_{{KEY}}:hover' => 'background:{{VALUE}} !important;',
                            '{{WRAPPER}} .sa_addons_icon_effects_style_5.sa_icon_effects_unique_{{KEY}}:focus' => 'background:{{VALUE}} !important;',
                            '{{WRAPPER}} .sa_addons_icon_effects_style_5.sa_icon_effects_unique_{{KEY}}:active' => 'background:{{VALUE}} !important;',
                        ],
                    ],
                    'sa_icon_effects_box_shadow_hover' => [
                        'label' => __('', SHORTCODE_ADDOONS),
                        'type' => Controls::BOXSHADOW,
                        'controller' => 'add_group_control',
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_icon_effects_style_5.sa_icon_effects_unique_{{KEY}}:hover' => '',
                        ],
                    ],

                    'shortcode-addons-start-tab2-end' => [
                        'controller' => 'end_controls_tab',
                    ],

                    'shortcode-addons-start-tabs-end' => [
                        'controller' => 'end_controls_tabs',
                    ],


                    'sa_icon_effects_url_open' => [
                        'label' => esc_html__('Link Enable', SA_ELEMENTOR_TEXTDOMAIN),
                        'type' => Controls::SWITCHER,
                        'default' => '',
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ],

                    'sa_icon_effects_url' => [
                        'label' => esc_html__('Url', SA_ELEMENTOR_TEXTDOMAIN),
                        'type' => Controls::URL,
                        'controller' => 'add_group_control',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_icon_effects_url_open' => 'yes'
                        ]
                    ],
                ],
                'title_field' => 'sa_icon_effects_icon',
                'button' => 'Add New Icon',
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

        $this->add_responsive_control(
            'sa_icon_effects_f_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '50',
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
                        'max' => 5,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_effects_style_5 .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_icon_effects_w_hei',
            $this->style,
            [
                'label' => __('Width & Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '100',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 5,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_effects_style_5' => 'max-width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_icon_effects_style_5 .oxi-icons' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_icon_effects_border_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '50',
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
                    '{{WRAPPER}} .sa_addons_icon_effects_style_5' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_icon_effects_margin',
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
                    '{{WRAPPER}} .sa_addons_icon_effects_style_5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_icon_effects_style_5:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_icon_effects_style_5:focus' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_icon_effects_style_5:active' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_icon_effects_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
