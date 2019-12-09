<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_boxes\Admin;

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
            'sa-image-boxes-four-col',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'loader' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-colum' => '',
                ]
            ]
        );
        $this->add_repeater_control(
            'sa_image_boxes_data_style_4',
            $this->style,
            [
                'label' => __('Image Boxes Data', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'separator' => TRUE,
                'button' => 'Add New Image Boxes',
                'fields' => [
                    'sa_image_boxes_media' => [
                        'label' => __('URL', SHORTCODE_ADDOONS),
                        'type' => Controls::MEDIA,
                        'controller' => 'add_group_control',
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/06/58686647_2318292518458074_4447429705770991616_n-e1556788997988-2.jpg',
                        ]
                    ],
                    'sa_image_boxes_heading' => [
                        'label' => __('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Lorem Ipsum',
                        'placeholder' => 'Lorem Ipsum',
                    ],
                    'sa_image_boxes_s_description' => [
                        'label' => __('Short Description', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                        'placeholder' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                    ],
                    'sa_image_boxes_icon' => [
                        'label' => __('Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fas fa-camera',
                    ],
                ],
                'title_field' => 'sa_image_boxes_heading',
            ]
        );
        $this->add_responsive_control(
            'sa-image-boxes-four-width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 350,
                ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => .1,
                    ],
                    'rem' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area' => 'max-width:{{SIZE}}{{UNIT}};',
                ],
            ]
        );




        $this->add_responsive_control(
            'sa-image-boxes-four-margin',
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
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-full' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'sa-image-boxes-four-height',
            $this->style,
            [
                'label' => __('Image Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 180,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => .1,
                    ],
                    'rem' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-images' => 'height:{{SIZE}}{{UNIT}};',
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
        $this->add_responsive_control(
            'sa-image-boxes-four-image-margin',
            $this->style,
            [
                'label' => __('Image Margin', SHORTCODE_ADDOONS),
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
                        'max' => 100,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area-image_content' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_responsive_control(
            'sa-image-boxes-four-image-hover-margin',
            $this->style,
            [
                'label' => __('Image Margin', SHORTCODE_ADDOONS),
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
                        'max' => 100,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-full:hover .oxi-addons-content-boxes-four-area-image_content' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->add_group_control(
            'sa-image-boxes-four-boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-four-area-data' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-boxes-four-animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-four-area-data' => '',
                ]
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
        //        ***********************************
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('All Content Settings', SHORTCODE_ADDOONS),
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
            'sa-content-boxes-four-background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-four-area-data' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-content-boxes-four-margin',
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
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-four-area-data' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_group_control(
            'sa-content-boxes-hover-four-background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area:hover .oxi-addons-content-boxes-four-area-data' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-content-boxes-hover-four-margin',
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
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area:hover .oxi-addons-content-boxes-four-area-data' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa-content-boxes-four-padding',
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
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-four-area-data' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_responsive_control(
            'sa-image-boxes-icon-four-size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 200,
                ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => .1,
                    ],
                    'rem' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area-data .oxi-addons-content-boxes-four-area-icon i' => 'max-width:{{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'sa-image-boxes-icon-four-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area-data .oxi-addons-content-boxes-four-area-icon i' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-image-boxes-icon-four-padding',
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
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area-data .oxi-addons-content-boxes-four-area-icon i' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
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

        $this->add_control(
            'sa-image-boxes-four-heading-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-heading' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-boxes-four-heading-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-heading' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-boxes-four-heading-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-heading' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-image-boxes-four-heading_alignment',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'left',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-heading' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-image-boxes-four-heading-padding',
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
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-heading' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Short Description', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_control(
            'sa-image-boxes-four-short-description-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-content' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-boxes-four-short-description-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-content' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-boxes-four-short-description-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-content' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-image-boxes-four-short-description_alignment',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'left',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-content' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-image-boxes-four-short-description-padding',
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
                    '{{WRAPPER}} .oxi-addons-content-boxes-four-area .oxi-addons-content-boxes-content' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }
}
