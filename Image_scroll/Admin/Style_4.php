<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_scroll\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_4 extends AdminStyle
{

    public function register_controls()
    {



        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            []
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_is_col',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-coloum' => ''
                ],
            ]
        );
        $this->add_repeater_control(
            'sa_is_image_repeater',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_is_image_name' => [
                        'label' => __('Image Name', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Image',
                    ],
                    'sa_is_image_media' => [
                        'type' => Controls::MEDIA,
                        'controller' => 'add_group_control',
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.oxilab.org/wp-content/uploads/2019/03/screencapture-bdevs-co-pohat-pohat-ppc-services-html-2019-03-27-16_27_30.jpg',
                        ],
                    ],
                    'sa_is_title_on' => [
                        'label' => __('Title Text?', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'default' => 'yes',
                        'loader' => TRUE,
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ],
                    'sa_is_title' => [
                        'type' => Controls::TEXT,
                        'label' => __('Title Text', SHORTCODE_ADDOONS),
                        'placeholder' => __('Title Text', SHORTCODE_ADDOONS),
                        'default' => 'Title Text',
                        'loader' => TRUE,
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_is_title_on' => 'yes',
                        ],
                    ],
                    'sa_is_btn_on' => [
                        'label' => __('Button?', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'default' => 'yes',
                        'loader' => TRUE,
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ],
                    'sa_is_btn_text' => [
                        'type' => Controls::TEXT,
                        'label' => __('Button Text', SHORTCODE_ADDOONS),
                        'placeholder' => __('Button Text', SHORTCODE_ADDOONS),
                        'default' => 'Button Text',
                        'loader' => TRUE,
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_is_btn_on' => 'yes',
                        ],
                    ],
                    'sa_is_btn_link' => [
                        'type' => Controls::URL,
                        'controller' => 'add_group_control',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_is_btn_on' => 'yes',
                        ],
                    ],
                    'sa_is_image_view' => [
                        'label' => __('Viewing Animaton', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'default' => 'sa-icon-left-to-right',
                        'loader' => TRUE,
                        'options' => [
                            'top-to-bottom' => __('Top-to-Bottom', SHORTCODE_ADDOONS),
                            'bottom-to-top' => __('Bottom-to-Top', SHORTCODE_ADDOONS),
                        ],
                    ],
                ],
                'title_field' => 'sa_is_image_name',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Button Setting', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );



        $this->add_group_control(
            'sa_is_btn_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link' => ''
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal View', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover View', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa-is-btn-text-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#333',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa-is-btn-bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgb(255, 39, 28)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link' => 'background-color:{{VALUE}};'

                ],
            ]
        );
        $this->add_group_control(
            'sa-is-btn-br',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa-is-btn-br-radius',
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
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-is-btn-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_is_btn_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link' => ''
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa-is-btn-text-h-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link:hover' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_control(
            'sa-is-btn-h-bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgb(255, 115, 115)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link:hover' => 'background-color:{{VALUE}};'

                ],
            ]
        );
        $this->add_group_control(
            'sa-is-btn-h-br',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link:hover' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa-is-btn-hover-br-radius',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => FALSE,
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
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
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-is-btn-h-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link:hover' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_is_btn_h_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link:hover' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_group_control(
            'sa_is_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
                'separator' => TRUE,
            ]
        );

        $this->add_responsive_control(
            'sa_is_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
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
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-main-button .oxi-addons-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );


        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Style Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'sa_is_width',
            $this->style,
            [
                'label' => __('Maximum Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 800,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1500,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => .1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-image-main' => 'max-width:{{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-img' => 'max-width:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_is_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 400,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1500,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => .1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-img' => 'height:{{SIZE}}{{UNIT}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_is_td',
            $this->style,
            [
                'label' => __('Transition Duration (second)', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-img ' => 'transition: all {{SIZE}}s;'
                ],
            ]
        );



        $this->add_responsive_control(
            'sa_is_br_radius',
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
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-image-main' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_is_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-image-main' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_is_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );

        $this->add_responsive_control(
            'sa_is_margin',
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
                    '{{WRAPPER}} .oxi-addons-image-scroll-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Title Text Setting', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_is_text_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-title' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_is_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#333',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-title' => 'color:{{VALUE}};'
                ],
            ]
        ); 
        $this->add_control(
            'sa-is-text-bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons-image-scroll-4 .oxi-addons-title' => 'background-color:{{VALUE}};'

                ],
            ]
        );

        $this->add_group_control(
            'sa_is_tx_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-title' => ''
                ],
            ]
        );



        $this->add_responsive_control(
            'sa_is_padding',
            $this->style,
            [
                'label' => __('Text Padding', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oxi-addons-image-scroll-4 .oxi-addons-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }
}
