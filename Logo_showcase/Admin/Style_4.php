<?php

namespace SHORTCODE_ADDONS_UPLOAD\Logo_showcase\Admin;

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

class Style_4 extends AdminStyle
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
            'sa_logo_showcase_col',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-admin-edit-list' => ''
                ],
            ]
        );
        $this->add_repeater_control(
            'sa_logo_showcase_data',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_logo_showcase_text' => [
                        'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Logo 01',
                    ],
                    'sa_logo_showcase_img' => [
                        'type' => Controls::MEDIA,
                        'controller' => 'add_group_control',
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/08/logo-5.png',
                        ],
                    ],
                    'sa_logo_showcase_url_open' => [
                        'label' => esc_html__('Link Enable', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'default' => '',
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'link_show',
                    ],

                    'sa_logo_showcase_url' => [
                        'label' => esc_html__('Url', SHORTCODE_ADDOONS),
                        'type' => Controls::URL,
                        'controller' => 'add_group_control',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_logo_showcase_url_open' => 'link_show'
                        ]
                    ],
                ],
                'title_field' => 'sa_logo_showcase_text',
                'button' => 'Add New Logo',
            ]
        );
        $this->add_responsive_control(
            'sa_logo_showcase_logo_w',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '400',
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
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_4' => 'max-width: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_logo_showcase_logo_h',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => '40',
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
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_4:after' => 'padding-bottom: {{SIZE}}{{UNIT}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_logo_showcase_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '5',
                ],
                'range' => [
                    'px' => [
                        'min' => -200,
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
                    '{{WRAPPER}} .sa_addons_logo_showcase_container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_logo_showcase_animation',
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
                'label' => esc_html__('Logo Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
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
        $this->add_group_control(
            'sa_logo_showcase_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_4' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_logo_showcase_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_4' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_logo_showcase_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_4' => ''
                ],
            ]
        );


        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_logo_showcase_bg_hover',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_4:hover' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_logo_showcase_border_hover',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_4:hover' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_logo_showcase_boxshadow_hover',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_4:hover' => ''
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa_logo_showcase_border_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
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
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_4' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_logo_showcase_logo_p',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '0',
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
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_4 .sa_addons_img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->end_section_tabs();
    }
}
