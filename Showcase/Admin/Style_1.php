<?php

namespace SHORTCODE_ADDONS_UPLOAD\Showcase\Admin;

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
            'sa_showcase_data',
            $this->style,
            [
                'label' => __('Items', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'shortcode-addons-start-tabs' => [
                        'controller' => 'start_controls_tabs',
                        'options' => [
                            'normal' => esc_html__('Navigation', SHORTCODE_ADDOONS),
                            'hover' => esc_html__('Preview', SHORTCODE_ADDOONS),
                        ]
                    ],
                    'shortcode-addons-start-tab1' => [
                        'controller' => 'start_controls_tab',
                    ],
                    'title' => [
                        'label' => __('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Item',
                        'selector' => [
                            '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item_wrap_{{KEY}} .sa_showcase_navigation_title' => '',
                        ],
                    ],
                    'description' => [
                        'label' => __('Description', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => 'I am the description for item',
                        'selector' => [
                            '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item_wrap_{{KEY}} .sa_showcase_navigation_description' => '',
                        ],
                    ],
                    'nav_icon_type' => [
                        'label' => esc_html__('Icon Type', SHORTCODE_ADDOONS),
                        'type' => Controls::CHOOSE,
                        'options' => [
                            'none' => [
                                'title' => esc_html__('None', SHORTCODE_ADDOONS),
                                'icon' => 'fa fa-ban',
                            ],
                            'icon' => [
                                'title' => esc_html__('Icon', SHORTCODE_ADDOONS),
                                'icon' => 'fa fa-gear',
                            ],
                            'image' => [
                                'title' => esc_html__('Image', SHORTCODE_ADDOONS),
                                'icon' => 'fa fa-picture-o',
                            ],
                        ],
                        'default' => 'none',
                    ],
                    'nav_icon' => [
                        'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fab fa-linkedin-in',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'nav_icon_type' => 'icon',
                        ],
                    ],
                    'nav_icon_image' => [
                        'type' => Controls::MEDIA,
                        'controller' => 'add_group_control',
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/placeholder.png',
                        ],
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'nav_icon_type' => 'image',
                        ],
                    ],

                    'shortcode-addons-start-tab1-end' => [
                        'controller' => 'end_controls_tab',
                    ],

                    'shortcode-addons-start-tab2' => [
                        'controller' => 'start_controls_tab',
                    ],

                    'image' => [
                        'type' => Controls::MEDIA,
                        'controller' => 'add_group_control',
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/12/thumb-1920-353279.jpg',
                        ],
                    ],
                    
                    'shortcode-addons-start-tab2-end' => [
                        'controller' => 'end_controls_tab',
                    ],

                    'shortcode-addons-start-tabs-end' => [
                        'controller' => 'end_controls_tabs',
                    ],
                ],
                'title_field' => 'title',
                'button' => 'Add Item',
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Additional Options', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'navigation_heading',
            $this->style,
            [
                'label' => __('Navigation', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
            ]
        );
        $this->add_control(
            'scrollable_nav',
            $this->style,
            [
                'label'         => __('Scrollable Navigation', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );

        $slides_to_show = range(1, 10);
        $slides_to_show = array_combine($slides_to_show, $slides_to_show);

        $this->add_responsive_control(
            'nav_items',
            $this->style,
            [
                'label' => __('Items to Show', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'options' => [
                    '' => __('Default', SHORTCODE_ADDOONS),
                ] + $slides_to_show,
                'condition' => [
                    'scrollable_nav' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
            'navigation_columns',
            $this->style,
            [
                'label' => __('Columns', SHORTCODE_ADDOONS),
                'type' => Controls::COLUMN,
                'condition' => [
                    '! scrollable_nav' => '',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_navigation_item_wrap' => ''
                ],
            ]

        );
        $this->add_control(
            'preview_heading',
            $this->style,
            [
                'label' => __('Preview', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'separator' => TRUE,
            ]
        );
        $this->add_control(
            'effect',
            $this->style,
            [
                'label' => __('Effect', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'slide',
                'options' => [
                    'slide' => __('Slide', SHORTCODE_ADDOONS),
                    'fade' => __('Fade', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_control(
            'animation_speed',
            $this->style,
            [
                'label' => __('Animation Speed', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'loader' => TRUE,
                'default' => 600,
            ]
        );
        $this->add_control(
            'arrows',
            $this->style,
            [
                'label' => __('Arrows', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'dots',
            $this->style,
            [
                'label' => __('Dots', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'autoplay',
            $this->style,
            [
                'label' => __('Autoplay', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'autoplay_speed',
            $this->style,
            [
                'label' => __('Autoplay Speed', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'loader' => TRUE,
                'default' => 600,
                'condition' => [
                    'autoplay' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'pause_on_hover',
            $this->style,
            [
                'label' => __('Pause on Hover', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'condition' => [
                    'autoplay' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'infinite_loop',
            $this->style,
            [
                'label' => __('Infinite Loop', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'adaptive_height',
            $this->style,
            [
                'label' => __('Adaptive Height', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
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
                'label' => esc_html__('Preview', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'preview_position',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => 'icon',
                'default' => 'right',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-arrow-left',
                    ],
                    'top' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-arrow-up',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-arrow-right',
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'preview_image_align',
            $this->style,
            [
                'label' => __('Image Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => 'icon',
                'default' => 'left',
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview_image' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'preview_stack',
            $this->style,
            [
                'label' => __('Stack On', SA_EL_ADDONS_TEXTDOMAIN),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'tablet',
                'options' => [
                    'tablet' => __('Tablet', SA_EL_ADDONS_TEXTDOMAIN),
                    'mobile' => __('Mobile', SA_EL_ADDONS_TEXTDOMAIN),
                ],
                'condition' => [
                    'preview_position' => ['left', 'right'],
                ],
            ]
        );
        $this->add_responsive_control(
            'preview_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => 70,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview_align_left .sa_showcase_preview_wrap' => 'width: {{SIZE}}%;',
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview_align_right .sa_showcase_preview_wrap' => 'width: {{SIZE}}%;',
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview_align_right .sa_showcase_navigation' => 'width: calc(100% - {{SIZE}}%);',
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview_align_left .sa_showcase_navigation' => 'width: calc(100% - {{SIZE}}%);',
                ],
            ]
        );
        $this->add_responsive_control(
            'preview_spacing',
            $this->style,
            [
                'label' => __('Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview_align_left .sa_showcase, {{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview_align_right .sa_showcase' => 'margin-left: -{{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview_align_left .sa_showcase > *, {{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview_align_right .sa_showcase > *' => 'padding-left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview_align_top .sa_showcase_preview_wrap' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            'preview_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview' => '',
                ],
            ]
        );
        $this->add_group_control(
            'preview_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'preview_padding',
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
                        'max' => 100,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'preview_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview' => ''
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Arrows', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition'     => [
                    'arrows'  => 'yes',
                ],
            ]
        );
        $this->add_control(
            'arrow_left',
            $this->style,
            [
                'label' => __('Arrow Left', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-arrow-left',

            ]
        );
        $this->add_control(
            'arrow_right',
            $this->style,
            [
                'label' => __('Arrow Right', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-arrow-right',

            ]
        );
        $this->add_responsive_control(
            'arrows_width_height',
            $this->style,
            [
                'label' => __('Width Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow .oxi-icons' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'arrows_size',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 22,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'arrows_position',
            $this->style,
            [
                'label' => __('Align Arrows', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 22,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_arrow_next' => 'right: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_arrow_prev' => 'left: {{SIZE}}{{UNIT}};',
                ],
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
            'arrows_color_normal',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    ' {{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow .oxi-icons' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'arrows_bg_color_normal',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'arrows_border_normal',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow' => '',
                ]
            ]
        );
        $this->add_group_control(
            'arrows_boxsha_normal',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow' => '',
                ]
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'arrows_color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow:hover .oxi-icons' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'arrows_bg_color_hover',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow:hover' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'arrows_border_hover',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow:hover' => '',
                ]
            ]
        );
        $this->add_group_control(
            'arrows_boxsha_hover',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow:hover' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'arrows_border_radius_normal',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => TRUE,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'arrows_padding',
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_slider_arrow' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Dots', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition'     => [
                    'dots'  => 'yes',
                ],
            ]
        );
        $this->add_control(
            'dots_position',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'options' => [
                    'inside' => __('Inside', SHORTCODE_ADDOONS),
                    'outside' => __('Outside', SHORTCODE_ADDOONS),
                ],
                'default' => 'outside',
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
                    'size' => '',
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview .slick-dots li button' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
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
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview .slick-dots li' => 'margin-left: {{SIZE}}{{UNIT}}; margin-right: {{SIZE}}{{UNIT}}',
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
            'dots_bg_color_normal',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview .slick-dots li' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'dots_border_normal',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview .slick-dots li' => '',
                ]
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'dots_bg_color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview .slick-dots li:hover' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'dots_border_hover',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview .slick-dots li:hover' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'dots_bg_color_active',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview .slick-dots li.slick-active' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'dots_border_active',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview .slick-dots li.slick-active' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'dots_border_radius_normal',
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
                    '{{WRAPPER}}  .sa_showcase_container_style_1 .sa_showcase_preview .slick-dots li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'dots_margin',
            $this->style,
            [
                'label' => __('margin', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_preview .slick-dots' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Navigation', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'navigation_items_horizontal_spacing',
            $this->style,
            [
                'label' => __('Column Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_items .sa_showcase_navigation_item_wrap' => 'padding-left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_items' => 'margin-left: -{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'navigation_items_vertical_spacing',
            $this->style,
            [
                'label' => __('Row Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item_wrap:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}}',
                ],
            ]
        );
        $this->add_control(
            'navigation_position',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => 'icon',
                'default' => 'center',
                'options' => [
                    'flex-start' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-arrow-up',
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-arrows-alt-v',
                    ],
                    'flex-end' => [
                        'title' => __('Bottom', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-arrow-down',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation' => 'align-self: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'navigation_text_align',
            $this->style,
            [
                'label' => __('Text Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => 'icon',
                'default' => 'center',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_items .sa_showcase_navigation_item' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'navigation_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_items' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'navigation_padding',
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
                        'max' => 100,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Navigation Item', SHORTCODE_ADDOONS),
                'showing' => FALSE,
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

        $this->add_group_control(
            'navigation_item_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item' => '',
                ],
            ]
        );
        $this->add_group_control(
            'navigation_item_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'navigation_item_border_b_r',
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
                        'max' => 100,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'navigation_item_box_sha',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item' => '',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_group_control(
            'navigation_item_background_h',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item:hover' => '',
                ],
            ]
        );
        $this->add_group_control(
            'navigation_item_border_h',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item:hover' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'navigation_item_border_b_r_h',
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
                        'max' => 100,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'navigation_item_box_sha_h',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item:hover' => '',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
            'navigation_item_background_a',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_active_slide .sa_showcase_navigation_item' => '',
                ],
            ]
        );
        $this->add_group_control(
            'navigation_item_border_a',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_active_slide .sa_showcase_navigation_item' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'navigation_item_border_b_r_a',
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
                        'max' => 100,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_active_slide .sa_showcase_navigation_item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'navigation_item_box_sha_a',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_active_slide .sa_showcase_navigation_item' => '',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'navigation_item_padding',
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
                    'px' => [
                        'min' => 0,
                        'max' => 100,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Navigation Item Title/Description', SHORTCODE_ADDOONS),
                'showing' => FALSE,
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
            'title',
            $this->style,
            [
                'label' => __('Title', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
            ]
        );
        $this->add_group_control(
            'title_typography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_title' => ''
                ],
            ]
        );
        $this->add_control(
            'title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_padding',
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
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'description',
            $this->style,
            [
                'label' => __('Description', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'separator' => TRUE
            ]
        );
        $this->add_group_control(
            'description_typography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_description' => ''
                ],
            ]
        );
        $this->add_control(
            'description_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_description' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'title_h',
            $this->style,
            [
                'label' => __('Title', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
            ]
        );
        $this->add_control(
            'title_color_h',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item:hover .sa_showcase_navigation_title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'description_h',
            $this->style,
            [
                'label' => __('Description', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'separator' => TRUE
            ]
        );
        $this->add_control(
            'description_color_h',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item:hover .sa_showcase_navigation_description' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'title_a',
            $this->style,
            [
                'label' => __('Title', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
            ]
        );
        $this->add_control(
            'title_color_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_active_slide .sa_showcase_navigation_item .sa_showcase_navigation_title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'description_a',
            $this->style,
            [
                'label' => __('Description', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'separator' => TRUE
            ]
        );
        $this->add_control(
            'description_color_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_active_slide .sa_showcase_navigation_item .sa_showcase_navigation_description' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Navigation Item Icon/Image', SHORTCODE_ADDOONS),
                'showing' => FALSE,
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
            'navigation_icon_color',
            $this->style,
            [
                'label' => __('Icon Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1  .sa_showcase_navigation_icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'navigation_icon_size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 25,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_icon' => 'font-size: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'navigation_icon_img_size',
            $this->style,
            [
                'label' => __('Icon Image Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 25,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
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
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'navigation_icon_margin',
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
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_icon_wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'navigation_icon_color_h',
            $this->style,
            [
                'label' => __('Icon Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_showcase_navigation_item:hover .sa_showcase_navigation_icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'navigation_icon_color_a',
            $this->style,
            [
                'label' => __('Icon Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_showcase_container_style_1 .sa_active_slide .sa_showcase_navigation_item .sa_showcase_navigation_icon' => 'color: {{VALUE}}',
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
