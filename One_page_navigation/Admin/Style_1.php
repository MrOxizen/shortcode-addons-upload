<?php

namespace SHORTCODE_ADDONS_UPLOAD\One_page_navigation\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_1 extends AdminStyle
{

    public function register_controls()
    {

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
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
                'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_repeater_control(
            'sa_one_page_navigation_data',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'section_title' => [
                        'label' => __('Section Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Section Title',
                    ],
                    'section_id' => [
                        'label' => __('Section Id', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => '',
                    ],

                    'dot_icon' => [
                        'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fas fa-dot-circle',
                    ],
                ],
                'title_field' => 'section_title',
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

        $this->add_control(
            'nav_tooltip',
            $this->style,
            [
                'label' => __('Tooltip', SHORTCODE_ADDOONS),
                'description' => __('Show tooltip on hover', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'tooltip_arrow',
            $this->style,
            [
                'label' => __('Tooltip Arrow', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'condition' => [
                    'nav_tooltip' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'scroll_wheel',
            $this->style,
            [
                'label' => __('Scroll Wheel', SHORTCODE_ADDOONS),
                'description' => __('Use mouse wheel to navigate from one row to another', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('On', SHORTCODE_ADDOONS),
                'label_off' => __('Off', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'scroll_touch',
            $this->style,
            [
                'label' => __('Touch Swipe', SHORTCODE_ADDOONS),
                'description' => __('Use touch swipe to navigate from one row to another in mobile devices', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('On', SHORTCODE_ADDOONS),
                'label_off' => __('Off', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'condition' => [
                    'scroll_wheel' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'scroll_keys',
            $this->style,
            [
                'label' => __('Scroll Keys', SHORTCODE_ADDOONS),
                'description' => __('Use UP and DOWN arrow keys to navigate from one row to another', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'off',
                'label_on' => __('On', SHORTCODE_ADDOONS),
                'label_off' => __('Off', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'top_offset',
            $this->style,
            [
                'label' => __('Raw Top Offset', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
            ]
        );
        $this->add_control(
            'scrolling_speed',
            $this->style,
            [
                'label' => __('Scrolling Speed', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => '700'
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'style-settings'
                ]
            ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Navigation Box', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'heading_alignment',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'loader' => TRUE,
                'toggle' => TRUE,
                'default' => 'right',
                'options' => [
                    'top' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-arrow-up',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-arrow-right',
                    ],
                    'bottom' => [
                        'title' => __('Bottom', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-arrow-down',
                    ],
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-arrow-left',
                    ],
                ],
            ]
        );
        $this->add_group_control(
            'nav_container_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa-one-page-nav' => '',
                ],
            ]
        );
        $this->add_group_control(
            'nav_container_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa-one-page-nav' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'nav_container_br_radius',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => FALSE,
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
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
                    '{{WRAPPER}} .sa-one-page-nav' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'nav_container_padding',
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
                    '{{WRAPPER}} .sa-one-page-nav' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'nav_container_margin',
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
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => -10,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-one-page-nav-container' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'nav_container_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa-one-page-nav-container' => ''
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Navigation Dots', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_responsive_control(
            'dots_size',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-nav-dot' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'dots_spacing',
            $this->style,
            [
                'label' => __('Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => -10,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .nav-align-right .sa-one-page-nav-item, {{WRAPPER}} .nav-align-left .sa-one-page-nav-item' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .nav-align-top .sa-one-page-nav-item, {{WRAPPER}} .nav-align-bottom .sa-one-page-nav-item' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    'active' => esc_html__('Active', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();

        $this->add_control(
            'dots_color_normal',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa-nav-dot' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'dots_bg_color_normal',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa-nav-dot-wrap' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'dots_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa-nav-dot-wrap' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'dots_border_radius',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => FALSE,
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
                    '{{WRAPPER}} .sa-nav-dot-wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'dots_color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa-one-page-nav-item .sa-nav-dot-wrap:hover .sa-nav-dot' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'dots_bg_color_hover',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa-one-page-nav-item .sa-nav-dot-wrap:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'dots_border_color_hover',
            $this->style,
            [
                'label' => __('Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa-one-page-nav-item .sa-nav-dot-wrap:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'dots_color_active',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa-one-page-nav-item.active .sa-nav-dot' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'dots_bg_color_active',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa-one-page-nav-item.active .sa-nav-dot-wrap' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'dots_border_color_active',
            $this->style,
            [
                'label' => __('Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa-one-page-nav-item.active .sa-nav-dot-wrap' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'dots_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
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
                    '{{WRAPPER}} .sa-nav-dot-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'dots_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa-nav-dot-wrap' => ''
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();


        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Tooltip', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'nav_tooltip' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
            'tooltip_typography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa-nav-dot-tooltip' => '',
                ],
            ]
        );
        $this->add_control(
            'tooltip_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .sa-nav-dot-tooltip-content' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tooltip_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(0,0,0,1)',
                'selector' => [
                    '{{WRAPPER}} .sa-nav-dot-tooltip-content' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .sa-nav-dot-tooltip' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'tooltip_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
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
                    '{{WRAPPER}} .sa-nav-dot-tooltip-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
