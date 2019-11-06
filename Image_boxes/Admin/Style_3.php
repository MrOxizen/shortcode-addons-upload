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

class Style_3 extends AdminStyle
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
            'sa-image-boxes-col',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'loader' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-box-main-area' => '',
                ]
            ]
        );
        $this->add_repeater_control(
            'sa_image_boxes_data_style_3',
            $this->style,
            [
                'label' => __('Image Boxes Data', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'separator' => TRUE,
                'button' => 'Add New Image Boxes',
                'fields' => [
                    'sa_image_boxes_heading' => [
                        'label' => __('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Heading',
                        'placeholder' => 'Heading',
                    ],
                    'sa_image_boxes_s_description' => [
                        'label' => __('Short Description', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => 'Lorem ipsum dolor sit amet',
                        'placeholder' => 'Lorem ipsum dolor sit amet',
                    ],
                    'sa_image_boxes_media' => [
                        'label' => __('URL', SHORTCODE_ADDOONS),
                        'type' => Controls::MEDIA,
                        'controller' => 'add_group_control',
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/06/pexels-photo-1250426.jpeg',
                        ]
                    ],
                    'sa_image_boxes_button' => [
                        'label' => __('Button Text', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Learn More',
                    ],
                    'sa_image_boxes_button_url' => [
                        'label' => __('URL', SHORTCODE_ADDOONS),
                        'type' => Controls::URL,
                        'controller' => 'add_group_control',
                        'default' => '',
                        'placeholder' => 'https://www.yoururl.com',
                    ],
                ],
                'title_field' => 'sa_image_boxes_heading',
            ]
        );
        $this->add_responsive_control(
            'sa-image-boxes-width',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container' => 'max-width:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-image-boxes-height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image:after' => 'padding-bottom:{{SIZE}}{{UNIT}};',
                ],
            ]
        );



        $this->add_responsive_control(
            'sa-image-boxes-margin',
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
                        'min' => -200,
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'sa-image-boxes-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
            'sa-image-boxes-hover-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image:hover' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa-image-boxes-border-radius',
            $this->style,
            [
                'label' => __('Border Raidus', SHORTCODE_ADDOONS),
                'separator' => TRUE,
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
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            'sa-image-boxes-boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-boxes-animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image' => '',
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
                'label' => esc_html__('Content Box', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_group_control(
            'sa-ib-content-box-background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-ib-content-box-border-radius',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-ib-content-box-padding',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-ib-content-box-margin',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa-image-box-button-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data' => '',
                ]
            ]
        );
        $this->add_control(
            'sa-image-box-button_alignment',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS), 
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'center',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button' => 'text-align: {{VALUE}};'
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
            'sa-image-box-button-background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data' => '',
                ]
            ]
        );
        $this->add_control(
            'sa-image-box-button-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-box-button-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-image-box-button-border-radius',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-box-button-shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
            'sa-image-box-button-hover-background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data:hover' => '',
                ]
            ]
        );
        $this->add_control(
            'sa-image-box-button-hover-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data:hover' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-box-button-hover-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data:hover' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-image-box-button-hover-border-radius',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-box-button-hover-shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data:hover' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
 


        $this->add_responsive_control(
            'sa-image-box-button-padding',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button-data' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-image-box-button-margin',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-button' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'sa-image-box-heading-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-heading' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-box-heading-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-heading' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-box-heading-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-heading' => '',
                ]
            ]
        );
        $this->add_control(
            'sa-image-box-heading_alignment',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'center',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-heading' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-image-box-heading-padding',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-heading' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Short Description', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa-image-box-short-description-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-body' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-box-short-description-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-body' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-image-box-short-description-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-body' => '',
                ]
            ]
        );
        $this->add_control(
            'sa-image-box-short-description_alignment',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'center',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-body' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-image-box-short-description-padding',
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
                    '{{WRAPPER}} .oxi-image-boxes-area-container .oxi-addons-image-content-body' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }
}
