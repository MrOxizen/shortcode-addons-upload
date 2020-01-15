<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_hotspots\Admin;

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

class Style_1 extends AdminStyle {

    public function register_controls() {


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_ih_image', $this->style, [
            'label' => __('URL', SHORTCODE_ADDOONS),
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => '#asdas',
            ]
                ]
        );
        $this->add_control(
                'sa_ih_image_switcher', $this->style, [
            'label' => __('Custom Width', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'no',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_responsive_control(
                'sa_ih_image_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'condition' => [
                'sa_ih_image_switcher' => 'yes'
            ],
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                '%' => [
                    'min' => 10,
                    'max' => 200,
                    'step' => 1,
                ],
                'px' => [
                    'min' => 50,
                    'max' => 1200,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_addons_image_hotspots_main' => 'width: {{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_ih_image_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'condition' => [
                'sa_ih_image_switcher' => 'yes'
            ],
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                '%' => [
                    'min' => 10,
                    'max' => 200,
                    'step' => 1,
                ],
                'px' => [
                    'min' => 50,
                    'max' => 1200,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_addons_image_hotspots_main .oxi_addons_ih_image' => 'height: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_ih_image_aling', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'options' => [
                'flex-start' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'flex-end' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1' => 'justify-content: {{VALUE}};'
            ],
            'condition' => [
                'sa_ih_image_switcher' => 'yes'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_ih_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_addons_image_hotspots_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_image-comparison_margin', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );


        $this->end_controls_section();



        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Hotspots Content', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_repeater_control(
                'sa_ih_repeater', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_ih_start_tabs' => [
                    'controller' => 'start_controls_tabs',
                    'options' => [
                        'title' => esc_html__('Content', SHORTCODE_ADDOONS),
                        'des' => esc_html__('Position', SHORTCODE_ADDOONS),
                        'button' => esc_html__('Tooltip', SHORTCODE_ADDOONS),
                    ]
                ],
                'sa_ih_start_tab_1' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_ih_type' => [
                    'label' => __('Type', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'icon',
                    'loader' => TRUE,
                    'options' => [
                        'icon' => __('Icon', SHORTCODE_ADDOONS),
                        'text' => __('Text', SHORTCODE_ADDOONS),
                        'blank' => __('Blank', SHORTCODE_ADDOONS),
                    ],
                ],
                'sa_ih_icon' => [
                    'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fab fa-accusoft',
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'sa_ih_type' => 'icon',
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.oxi_ih_icon_{{KEY}}' => ''
                    ],
                ],
                'sa_ih_text' => [
                    'type' => Controls::TEXT,
                    'label' => __('Text', SHORTCODE_ADDOONS),
                    'placeholder' => __('Text', SHORTCODE_ADDOONS),
                    'default' => '',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.oxi_ih_icon_{{KEY}}' => ''
                    ],
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'sa_ih_type' => 'text',
                    ],
                ],
                'sa_ih_title_blank' => [
                    'type' => Controls::HIDDEN,
                ],
                'sa_ih_link_url' => [
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
                ],
                'sa_ih_end_tab_1' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_ih_start_tab_2' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_ih_left_position' => [
                    'label' => __('Left Position', SHORTCODE_ADDOONS),
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
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.oxi_ih_icon_{{KEY}}' => 'left: {{SIZE}}%;'
                    ],
                ],
                'sa_ih_top_position' => [
                    'label' => __('Top Position', SHORTCODE_ADDOONS),
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
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.oxi_ih_icon_{{KEY}}' => 'top: {{SIZE}}%;'
                    ],
                ],
                'sa_ih_end_tab_2' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_ih_start_tab_3' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_ih_tooltip_on' => [
                    'label' => __('Tooltip', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'no',
                    'loader' => TRUE,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ],
                'sa_ih_tooltip_text' => [
                    'type' => Controls::TEXT,
                    'label' => __('Tooltip Text', SHORTCODE_ADDOONS),
                    'placeholder' => __('Tooltip Text', SHORTCODE_ADDOONS),
                    'default' => 'Tooltip',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.oxi_ih_icon_{{KEY}} .sa_addons_tooltip_text' => ''
                    ],
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'sa_ih_tooltip_on' => 'yes',
                    ],
                ],
                'sa_ih_tooltip_position' => [
                    'label' => __('Tooltip Position', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'ihewc-fade-up',
                    'loader' => TRUE,
                    'options' => [
                        'tooltip_top' => __('Top', SHORTCODE_ADDOONS),
                        'tooltip_bottom' => __('Bottom', SHORTCODE_ADDOONS),
                        'tooltip_left' => __('Left', SHORTCODE_ADDOONS),
                        'tooltip_right' => __('Right', SHORTCODE_ADDOONS),
                    ],
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'sa_ih_tooltip_on' => 'yes',
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
                            'min' => -50,
                            'max' => 50,
                            'step' => 1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.oxi_ih_icon_{{KEY}}.tooltip_top .sa_addons_tooltip_text' => 'margin-top: {{SIZE}}px;'
                    ],
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'sa_ih_tooltip_position' => 'tooltip_top',
                        'sa_ih_tooltip_on' => 'yes',
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
                            'min' => -50,
                            'max' => 50,
                            'step' => 1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.oxi_ih_icon_{{KEY}}.tooltip_bottom .sa_addons_tooltip_text' => 'margin-top: {{SIZE}}px;'
                    ],
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'sa_ih_tooltip_position' => 'tooltip_bottom',
                        'sa_ih_tooltip_on' => 'yes',
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
                            'min' => -50,
                            'max' => 50,
                            'step' => 1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.oxi_ih_icon_{{KEY}}.tooltip_left .sa_addons_tooltip_text' => 'margin-left: {{SIZE}}px;'
                    ],
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'sa_ih_tooltip_position' => 'tooltip_left',
                        'sa_ih_tooltip_on' => 'yes',
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
                            'min' => -50,
                            'max' => 50,
                            'step' => 1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.oxi_ih_icon_{{KEY}}.tooltip_right .sa_addons_tooltip_text' => 'margin-left: {{SIZE}}px;'
                    ],
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'sa_ih_tooltip_position' => 'tooltip_right',
                        'sa_ih_tooltip_on' => 'yes',
                    ]
                ],
                'sa_ih_end_tab_3' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_ih_end_tabs' => [
                    'controller' => 'end_controls_tabs',
                ],
            ],
            'title_field' => 'sa_ih_type',
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Hotspots Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Icon', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Text', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_responsive_control(
                'sa_ih_icon_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
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
                    'step' => 0.1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_group_control(
                'sa_ih_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .oxi_text' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
                'sa_ih_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .oxi_text' => 'color: {{VALUE}}',
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .oxi-icons' => 'color: {{VALUE}}',
            ],
                ]
        );
        $this->add_group_control(
                'sa_ih_bg_color', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .oxi_ih_hotsots' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa_ih_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .oxi_ih_hotsots' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_ih_br_redius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .oxi_ih_hotsots'  => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_ih_bx_s', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .oxi_ih_hotsotss' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_ih_hotspots_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .oxi_ih_hotsots' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Tooltip Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_group_control(
                'sa_ih_tooltip_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .sa_addons_tooltip_text' => '',
            ]
                ]
        );


        $this->add_control(
                'sa_ih_tooltip_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .sa_addons_tooltip_text' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_ih_tooltip_bg_color', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .sa_addons_tooltip_text' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa_ih_tooltip_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .sa_addons_tooltip_text' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_ih_tooltip_br_redius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .sa_addons_tooltip_text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_ih_tooltip_bx_s', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .sa_addons_tooltip_text' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_ih_tooltip_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .sa_addons_tooltip_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_ih_tooltip_arrow', $this->style, [
            'label' => __('Arrow', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'separator' => TRUE,
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_responsive_control(
                'sa_ih_tootip_arrow_width', $this->style, [
            'label' => __('Arrow Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
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
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon .sa_addons_tooltip_text::after' => 'border-width: {{SIZE}}px;'
            ],
            'condition' => [
                'sa_ih_tooltip_arrow' => 'yes'
            ],
                ]
        );
        $this->add_control(
                'sa_ih_tooltip_arrow_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.tooltip_top .sa_addons_tooltip_text:after' => 'border-color: {{VALUE}} transparent transparent transparent;',
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.tooltip_bottom .sa_addons_tooltip_text:after' => 'border-color: transparent transparent {{VALUE}} transparent;',
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.tooltip_left .sa_addons_tooltip_text:after' => 'border-color: transparent transparent transparent {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_image_hotspots_style1 .oxi_ih_icon.tooltip_right .sa_addons_tooltip_text:after' => 'border-color: transparent {{VALUE}} transparent transparent;',
            ],
            'condition' => [
                'sa_ih_tooltip_arrow' => 'yes'
            ],
                ]
        );




        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
