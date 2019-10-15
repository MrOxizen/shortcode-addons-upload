<?php

namespace SHORTCODE_ADDONS_UPLOAD\Social_icons\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_20
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_20 extends AdminStyle {

    public function register_controls() {

        $this->start_section_tabs(
                'shortcode-addons-start-tabs',
                [
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

        $this->add_repeater_control(
                'sa_social_icons_data',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::REPEATER,
                    'loader' => TRUE,
                    'fields' => [
                        'sa_social_icons_icon' => [
                            'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                            'type' => Controls::ICON,
                            'default' => 'fab fa-facebook-f',
                        ],
                        'sa_social_icons_color' => [
                            'label' => __('Color', SHORTCODE_ADDOONS),
                            'type' => Controls::COLOR,
                            'default' => '#8500c2',
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-social-style-20-{{KEY}} a.oxi-icon-style-20 .oxi-icons' => 'color:{{VALUE}};',
                            ],
                            'conditional' => Controls::OUTSIDE,
                            'condition' => [
                                'sa_social_icons_position' => 'separately'
                            ]
                        ],
                        'sa_social_icons_color_hover' => [
                            'label' => __('Hover Color', SHORTCODE_ADDOONS),
                            'type' => Controls::COLOR,
                            'default' => '#fff',
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-social-style-20-{{KEY}} a.oxi-icon-style-20:hover .oxi-icons' => 'color:{{VALUE}};',
                            ],
                            'conditional' => Controls::OUTSIDE,
                            'condition' => [
                                'sa_social_icons_h_position' => 'separately'
                            ]
                        ],
                        'sa_social_icons_bg_color' => [
                            'label' => __('Background ', SHORTCODE_ADDOONS),
                            'type' => Controls::COLOR,
                            'oparetor' => 'RGB',
                            'default' => 'rgba(59,89,153,0.00)',
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-social-style-20-{{KEY}} a.oxi-icon-style-20' => 'background:{{VALUE}};',
                            ],
                            'conditional' => Controls::OUTSIDE,
                            'condition' => [
                                'sa_social_icons_bg_color_view' => 'separately'
                            ]
                        ],
                        'sa_social_icons_bg_color_hover' => [
                            'label' => __('Hover Background ', SHORTCODE_ADDOONS),
                            'type' => Controls::COLOR,
                            'oparetor' => 'RGB',
                            'default' => 'rgba(92, 92, 92, 1)',
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-social-style-20-{{KEY}} a.oxi-icon-style-20:hover ' => 'background:{{VALUE}};',
                            ],
                            'conditional' => Controls::OUTSIDE,
                            'condition' => [
                                'sa_social_icons_bg_h_color_view' => 'separately'
                            ]
                        ],
                        'sa_social_icons_box_shadow_sep' => [
                            'type' => Controls::BOXSHADOW,
                            'controller' => 'add_group_control',
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-social-style-20-{{KEY}} a.oxi-icon-style-20' => ''
                            ], 'condition' => [
                                'sa_social_icons_box_shadow_view' => 'separately'
                            ]
                        ],
                        'sa_social_icons_h_box_shadow_sep' => [
                            'type' => Controls::BOXSHADOW,
                            'controller' => 'add_group_control',
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-social-style-20-{{KEY}} a.oxi-icon-style-20:hover' => ''
                            ], 'condition' => [
                                'sa_social_icons_h_box_shadow_view' => 'separately'
                            ]
                        ],
                        'sa_social_icons_url' => [
                            'label' => esc_html__('Url', SHORTCODE_ADDOONS),
                            'type' => Controls::URL,
                            'controller' => 'add_group_control',
                        ],
                    ],
                    'title_field' => 'sa_social_icons_icon',
                    'button' => 'Add New Icon',
                ]
        );
        $this->add_control('sa-ac-gen-sep', $this->style, [
            'type' => Controls::SEPARATOR,
            'label' => esc_html__('', SHORTCODE_ADDOONS),
            Controls::SEPARATOR => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_social_icons_w_hei',
                $this->style,
                [
                    'label' => __('Width & Height', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => '60',
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
                        '{{WRAPPER}} .oxi-addons-social-style-20 a.oxi-icon-style-20' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                    ],
                ]
        );

        $this->add_responsive_control(
                'sa_social_icons_margin',
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
                        '{{WRAPPER}} .oxi-addons-social-style-20' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_social_icons_animation',
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
                    'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );


        $this->add_responsive_control(
                'sa_social_icons_f_s',
                $this->style,
                [
                    'label' => __('Size', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 25,
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
                        '{{WRAPPER}} .oxi-addons-social-style-20  a.oxi-icon-style-20 .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
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
                'sa_social_icons_position', $this->style, [
            'label' => __('Color View', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => 'separately',
            'options' => [
                'separately' => [
                    'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                ],
                'common' => [
                    'title' => __('Static', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_social_icons_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#390075',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-social-style-20  a.oxi-icon-style-20 .oxi-icons' => 'color : {{VALUE}}; '
            ],
            'condition' => [
                'sa_social_icons_position' => 'common'
            ]
                ]
        );
        $this->add_control(
                'sa_social_icons_bg_color_view', $this->style, [
            'label' => __('Background View', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => 'separately',
            'options' => [
                'separately' => [
                    'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                ],
                'common' => [
                    'title' => __('Static', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_social_icons_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(255, 255, 255, 0)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-social-style-20  a.oxi-icon-style-20 ' => 'background : {{VALUE}}; '
            ],
            'condition' => [
                'sa_social_icons_bg_color_view' => 'common'
            ]
                ]
        );

        $this->add_control(
                'sa_social_icons_box_shadow_view', $this->style, [
            'label' => __('Box Shadow View', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => 'separately',
            'options' => [
                'separately' => [
                    'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                ],
                'common' => [
                    'title' => __('Static', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_group_control(
                'sa_social_icons_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-social-style-20 a.oxi-icon-style-20' => ''
            ],
            'condition' => [
                'sa_social_icons_box_shadow_view' => 'common'
            ]
                ]
        );


        $this->add_responsive_control(
                'sa_social_icons_normal_border_radius',
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
                        '{{WRAPPER}} .oxi-addons-social-style-20  a.oxi-icon-style-20' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_social_icons_h_position', $this->style, [
            'label' => __('Color View', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => 'common',
            'options' => [
                'separately' => [
                    'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                ],
                'common' => [
                    'title' => __('Static', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_social_icons_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-social-style-20  a.oxi-icon-style-20:hover .oxi-icons' => 'color : {{VALUE}}; '
            ],
            'condition' => [
                'sa_social_icons_h_position' => 'common'
            ]
                ]
        );
        $this->add_control(
                'sa_social_icons_bg_h_color_view', $this->style, [
            'label' => __('Background View', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => 'common',
            'options' => [
                'separately' => [
                    'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                ],
                'common' => [
                    'title' => __('Static', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_social_icons_h_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(133, 0, 194,1.00)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-social-style-20  a.oxi-icon-style-20:hover ' => 'background : {{VALUE}}; '
            ],
            'condition' => [
                'sa_social_icons_bg_h_color_view' => 'common'
            ]
                ]
        );
        $this->add_control(
                'sa_social_icons_h_box_shadow_view', $this->style, [
            'label' => __('Box Shadow View', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => 'common',
            'options' => [
                'separately' => [
                    'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                ],
                'common' => [
                    'title' => __('Static', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_group_control(
                'sa_social_icons_h_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-social-style-20 a.oxi-icon-style-20:hover' => ''
            ],
            'condition' => [
                'sa_social_icons_h_box_shadow_view' => 'common'
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_social_icons_h_border_radius',
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
                        '{{WRAPPER}} .oxi-addons-social-style-20  a.oxi-icon-style-20:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
