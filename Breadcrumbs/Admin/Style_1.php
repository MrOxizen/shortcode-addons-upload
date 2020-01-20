<?php

namespace SHORTCODE_ADDONS_UPLOAD\Breadcrumbs\Admin;

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

        $this->add_control(
            'sa_breadcrumbs_display_heading',
            $this->style,
            [
                'label'         => __('Display', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
            ]
        );
        $this->add_control(
            'sa_breadcrumbs_source',
            $this->style,
            [
                'label'         => __('Source', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => '',
                'options' => [
                    '' => __('Current page', SHORTCODE_ADDOONS),
                    'id' => __('Specific page', SHORTCODE_ADDOONS),
                ],

            ]
        );
        $this->add_control(
            'sa_breadcrumbs_source_id',
            $this->style,
            [
                'label'         => __('ID', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'placeholder' => '15',
                'condition' => [
                    'sa_breadcrumbs_source' => 'id'
                ]
            ]
        );
        $this->add_control(
            'sa_breadcrumbs_show_home',
            $this->style,
            [
                'label'         => __('Show Home', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_breadcrumbs_home_text',
            $this->style,
            [
                'label'         => __('Home Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Homepage',
                'condition' => [
                    'sa_breadcrumbs_show_home' => 'yes'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__crumb--home' => '',
                ],
            ]
        );

        $this->add_control(
            'sa_breadcrumbs_separator_heading',
            $this->style,
            [
                'label'         => __('Separator', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
            ]
        );
        $this->add_control(
            'sa_breadcrumbs_separator_type',
            $this->style,
            [
                'label'         => __('Separator Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'icon',
                'options' => [
                    'text' => __('Text', SHORTCODE_ADDOONS),
                    'icon' => __('Icon', SHORTCODE_ADDOONS),
                ],

            ]
        );

        $this->add_control(
            'sa_breadcrumbs_separator_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-chevron-right',
                'condition' => [
                    'sa_breadcrumbs_separator_type' => 'icon'
                ],
            ]
        );
        $this->add_control(
            'sa_breadcrumbs_separator_text',
            $this->style,
            [
                'label'         => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => '>',
                'condition' => [
                    'sa_breadcrumbs_separator_type' => 'text'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__separator__text' => '',
                ],
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
            'sa_breadcrumbs_box_max_width',
            $this->style,
            [
                'label' => __('Max Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => '100',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 150,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_breadcrumbs_box_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs_main' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_breadcrumbs_box_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs_main' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa_breadcrumbs_box_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs_main' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_breadcrumbs_box_b_r',
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
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs_main' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_breadcrumbs_box_padding',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_breadcrumbs_box_margin',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
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
                'label' => esc_html__('Crumbs Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'sa_breadcrumbs_items_align',
            $this->style,
            [
                'label' => __('Content Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => 'icon',
                'default' => 'flex-start',
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs' => 'justify-content: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_breadcrumbs_item_spacing',
            $this->style,
            [
                'label' => __('Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '10',
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
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs' => 'margin-left: -{{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item' => 'margin-left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__separator' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_breadcrumbs_item_typ',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_breadcrumbs_item_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ff195e',
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_breadcrumbs_item_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => "RGB",
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_breadcrumbs_item_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_breadcrumbs_item_b_r',
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
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_breadcrumbs_item_padding',
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
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Separators Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_breadcrumbs_separator_typ',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'condition' => [
                    'sa_breadcrumbs_separator_type' => 'text'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__separator' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_breadcrumbs_separator_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#0c0303',
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__separator' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_breadcrumbs_separator_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => "RGB",
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__separator' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_breadcrumbs_separator_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__separator' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_breadcrumbs_separator_b_r',
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
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__separator' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_breadcrumbs_separator_padding',
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
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__separator' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Current Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        
        $this->add_group_control(
            'sa_breadcrumbs_current_typ',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item--current' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_breadcrumbs_current_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#0c0303',
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item--current' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_breadcrumbs_current_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => "RGB",
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item--current' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_breadcrumbs_current_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item--current' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_breadcrumbs_current_b_r',
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
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item--current' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_breadcrumbs_current_padding',
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
                    '{{WRAPPER}} .sa_breadcrumbs_container_style_1 .sa_breadcrumbs__item--current' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
