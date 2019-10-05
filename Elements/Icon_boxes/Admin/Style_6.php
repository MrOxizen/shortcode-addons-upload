<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Icon_boxes\Admin;

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

class Style_6 extends AdminStyle
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
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_group_control(
            'sa_icon_box_col',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-admin-edit-list' => ''
                ],
            ]
        );
        
        $this->add_repeater_control(
            'sa_icon_box_data',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_icon_box_icon' => [
                        'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fas fa-apple-alt',
                    ],
                    'sa_icon_box_h_text' => [
                        'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Default Title',
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_icon_boxes_style_6.sa_addons_icon_boxes_style_6_{{KEY}} .sa_addons_icon_boxes_headding' => ''
                        ],
                    ],
                    'sa_icon_box_url_open' => [
                        'label' => esc_html__('Link Enable', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'default' => '',
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'link_show',
                    ],

                    'sa_icon_box_url' => [
                        'label' => esc_html__('Url', SHORTCODE_ADDOONS),
                        'type' => Controls::URL,
                        'controller' => 'add_group_control',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_icon_box_url_open' => 'link_show'
                        ]
                    ],
                ],
                'title_field' => 'sa_icon_box_h_text',
                'button' => 'Add New Icon Box',
            ]
        );
        $this->add_responsive_control(
            'sa_icon_box_w',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '250',
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
                    '{{WRAPPER}} .sa_addons_icon_boxes_container_style_6' => 'max-width: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_icon_box_h',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '250',
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
                    '{{WRAPPER}} .sa_addons_icon_boxes_container_style_6' => 'height: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_icon_box_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
                'default' => [
                    'unit' => 'px',
                    'size' => '10',
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
                    '{{WRAPPER}} .sa_addons_icon_boxes_container_style_6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_icon_box_animation',
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

        $this->add_control(
            'sa_icon_box_icon_position',
            $this->style,
            [
                'label' => __('Icon Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'loader' => TRUE,
                'default' => 'top',
                'options' => [
                    'top' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-angle-double-up',
                    ],
                    'bottom' => [
                        'title' => __('Bottom', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-angle-double-down',
                    ],
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
        $this->add_group_control(
            'sa_icon_box_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_icon_box_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_icon_box_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_icon_box_bg_hover',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6:hover' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_icon_box_border_hover',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6:hover' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_icon_box_boxshadow_hover',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6:hover' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->add_responsive_control(
            'sa_icon_box_border_r',
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
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_icon_box_padding',
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
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
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
            'sa_icon_box_icon_color',
            $this->style,
            [
                'label' => __('Icon Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#7c00b5',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6 .oxi-icons' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_icon_box_icon_color_hover',
            $this->style,
            [
                'label' => __('Icon Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#7c00b5',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6:hover .oxi-icons' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_icon_box_icon_f_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'separator' => TRUE,
                'default' => [
                    'unit' => 'px',
                    'size' => '30',
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
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6 .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
                ],
            ]
        );


        $this->add_control(
            'sa_icon_box_icon_align',
            $this->style,
            [
                'label' => __('Icon Box Align', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6 .sa_addons_icon_boxes_icon' => 'text-align: {{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_icon_box_icon_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6 .oxi-icons' => ''
                ],
            ]
        );

        $this->end_controls_section();



        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Heading Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_icon_box_h_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6 .sa_addons_icon_boxes_headding' => ''
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
            'sa_icon_box_h_color',
            $this->style,
            [
                'label' => __('Heading Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#757575',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6 .sa_addons_icon_boxes_headding' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_icon_box_h_color_hover',
            $this->style,
            [
                'label' => __('Heading Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000000',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6:hover .sa_addons_icon_boxes_headding' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->add_responsive_control(
            'sa_icon_box_h_p',
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
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_6 .sa_addons_icon_boxes_headding' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
