<?php

namespace SHORTCODE_ADDONS_UPLOAD\Info_banner\Admin;

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

class Style_7 extends AdminStyle
{

    public function register_controls()
    {

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
            'sa_addons_info_banner_main_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper_style_7' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_info_banner_main_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                //'loader' => TRUE,
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
                    '{{WRAPPER}} .oxi-addons-main-wrapper_style_7' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Feature Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_repeater_control(
            'sa_info_banner_repeater',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_info_banner_icon' => [
                        'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fab fa-accusoft',
                    ],

                    'sa_info_banner_title' => [
                        'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('Lorem ipsum ', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .title-{{KEY}}' => '',
                        ],
                        'separator' => TRUE,
                    ],

                    'sa_info_banner_short_details' => [
                        'label' => esc_html__('Icon Details', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et.  ', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .details-{{KEY}}' => '',
                        ],
                        'separator' => TRUE,
                    ],

                ],
                'title_field' => 'sa_info_banner_title',
            ]
        );



        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_group_control(
            'sa_addons_info_banner_column',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'default' => 'oxi-bt-col-lg-4',
                'selector' => [
                    '{{WRAPPER}} .oxi-info-banner-style-7-static' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_addons_info_banner_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-main' => 'background-color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_addons_info_banner_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-main' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_info_banner_radius',
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
                        'min' => -100,
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
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-main' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_info_banner_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-main' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_addons_info_banner_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                //'loader' => TRUE,
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
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
                'separator' => TRUE
            ]
        );
        $this->add_responsive_control(
            'sa_addons_info_banner_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                //'loader' => TRUE,
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
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_info_banner_animation',
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
                'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_info_banner_icon_position',
            $this->style,
            [
                'label' => __('Icon Postion', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'left',
                'loader' => TRUE,
                'condition' => [
                    'sa_info_banner_image_position' => 'left',
                    'sa_info_banner_image_position' => 'right'
                ],
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-left',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-right',
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_info_banner_icon_font_size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,

                'default' => [
                    'unit' => 'px',
                    'size' => 40,
                ],
                'range' => [
                    'px' => [
                        'min' => 5,
                        'max' => 150,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 1,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-icon .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_info_banner_icon_width',
            $this->style,
            [
                'label' => __('Icon Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 80,
                ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 3,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 3,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-icon .oxi-icons' => 'width: {{SIZE}}{{UNIT}};',
                ],

            ]
        );
        $this->add_responsive_control(
            'sa_info_banner_icon_height',
            $this->style,
            [
                'label' => __('Icon Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 80,
                ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 3,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 3,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-icon .oxi-icons    ' => 'height: {{SIZE}}{{UNIT}};',
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
            'sa_info_banner_icon_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#077777',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-icon' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_info_banner_icon_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-icon .oxi-icons' => 'background-color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_info_banner_icon_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-icon .oxi-icons' => ''
                ],
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_info_banner_icon_hover_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7:hover .oxi-addons-content-boxes-icon .oxi-icons' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_info_banner_icon_hover_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(40, 168, 76, 0.01)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7:hover .oxi-addons-content-boxes-icon .oxi-icons' => 'background-color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_info_banner_icon_hover_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7:hover .oxi-addons-content-boxes-icon .oxi-icons' => ''
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_info_banner_title_divider',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE
            ]
        );
        $this->add_responsive_control(
            'sa_info_banner_border_radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                //'loader' => TRUE,
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -100,
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
                    '{{WRAPPER}} .oxi-addons-main-wrapper_style_7 .oxi-icons' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_info_banner_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                //'loader' => TRUE,
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
                    '{{WRAPPER}} .oxi-addons-main-wrapper_style_7 .oxi-addons-content-boxes-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        
        
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Icon Line Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        ); 
        $this->add_group_control(
            'sa_info_banner_icon_line',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-icon::before' => '',
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi-addons-content-boxes-icon::after' => '',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Icon Title Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_control(
            'sa_info_banner_title_tag',
            $this->style,
            [
                'label' => __('Tag', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'h3',
                'loader' => TRUE,
                'options' => [
                    'h1' => __('H1', SHORTCODE_ADDOONS),
                    'h2' => __('H2', SHORTCODE_ADDOONS),
                    'h3' => __('H3', SHORTCODE_ADDOONS),
                    'h4' => __('H4', SHORTCODE_ADDOONS),
                    'h5' => __('H5', SHORTCODE_ADDOONS),
                    'h6' => __('H6', SHORTCODE_ADDOONS),
                    'div' => __('DIV', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_group_control(
            'sa_info_banner_icon_title_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi_addons__heading' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_info_banner_icon_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#333',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi_addons__heading' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_info_banner_icon_title_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                //'loader' => TRUE,
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
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi_addons__heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Icon Description Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_info_banner_icon_details_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi_addons__details' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_info_banner_icon_details_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#666',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi_addons__details' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_info_banner_icon_details_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                //'loader' => TRUE,
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
                    '{{WRAPPER}} .oxi-addons-content-boxes_style_7 .oxi_addons__details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_info_banner_front_image',
            $this->style,
            [
                'type' => Controls::MEDIA,
                'default' => [
                    'type' => 'media-library',
                    'link' => 'https://www.oxilab.org/wp-content/uploads/2019/01/uc_mobile_bullets.png',
                ],
            ]
        );
        $this->add_control(
            'sa_info_banner_image_position',
            $this->style,
            [
                'label' => __('Image Postion', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::CHOOSE,
                'default' => 'left',
                'loader' => TRUE,
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );

        $this->add_control(
            'sa_info_banner_image_switcher',
            $this->style,
            [
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
            'sa_info_banner_image_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_info_banner_image_switcher' => 'yes'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 400,
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
                        'step' =>  1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper_style_7 .oxi-addons-img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_info_banner_image_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_info_banner_image_switcher' => 'yes'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 350,
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
                        'step' =>  1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper_style_7 .oxi-addons-img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_info_banner_image_margin',
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
                    '{{WRAPPER}} .oxi-addons-main-wrapper_style_7 .oxi_addons__image_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_info_banner_front_image_animation',
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
