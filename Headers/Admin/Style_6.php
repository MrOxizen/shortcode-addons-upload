<?php

namespace SHORTCODE_ADDONS_UPLOAD\Headers\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_6
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_6 extends AdminStyle
{

    public function register_controls()
    {

        $this->start_section_tabs(
            'shortcode-addons-general',
            []
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-general-sec',
            [
                'label' => esc_html__('General', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );


        $this->add_control(
            'sa_headers_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                Controls::SEPARATOR => TRUE,
                'default' => 'fas fa-play-circle',
            ]
        );
        $this->add_group_control(
            'sa_headers_icon_link',
            $this->style,
            [
                'type' => Controls::URL,
                'loader' => TRUE,
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
            'sa_headers_right_side_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_headers_right_side_h_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6:hover' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_headers_margin',
            $this->style,
            [
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
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );


        $this->end_controls_section();


        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-icon',
            [
                'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
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
        $this->add_control(
            'sa_headers_icon_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f7f7f7',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6 .oxi-icons' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_headers_icon_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(255, 255, 255, 0)',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6 .oxi-icons' => 'background:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_headers_icon_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6 .oxi-icons' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_headers_icon_box_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6 .oxi-icons' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_headers_br',
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
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6 .oxi-icons' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_headers_icon_h_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#d1d1d1',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6 .oxi-icons:hover' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_headers_icon_h_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(212, 55, 55, 0)',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6 .oxi-icons:hover' => 'background:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_headers_icon_h_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6 .oxi-icons:hover' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_headers_icon_h_box_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6 .oxi-icons:hover' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_headers_h_br',
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
                    '{{WRAPPER}} .oxi-addons-headers-wrapper-style-6 .oxi-icons:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_dual_btn_left_sep',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_headers_icon_animation',
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
