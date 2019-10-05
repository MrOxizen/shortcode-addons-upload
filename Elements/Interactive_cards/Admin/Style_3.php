<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Interactive_cards\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_3
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_3 extends AdminStyle {

    public function register_controls() {
        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'back-settings' => esc_html__('Back Part', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings'
            ]
                ]
        );
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons-general-setting', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_mw', $this->style, [
            'label' => __('Max Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 600,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 900,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 25,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3' => 'max-width : {{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_control(
                'sa_interactive_cards_loader', $this->style, [
            'label' => __('Loader', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('On', SHORTCODE_ADDOONS),
            'label_off' => __('Off', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-IC' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->add_group_control(
                'sa_interactive_cards_bx-shadow', $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-IC' => '',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_interactive_cards_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-cross-icon', [
            'label' => esc_html__('Cross Icon', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_interactive_cards_cl_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => 'fas fa-times',
                ]
        );
        $this->add_control(
                'sa_interactive_cards_cl_position', $this->style, [
            'label' => __('Icon Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'default' => 'right',
            'loader' => true,
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_cl_w', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
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
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-close-icon' => ' width : {{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_interactive_cards_cl_h', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
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
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-close-icon' => 'height : {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_interactive_cards_cl_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-close-icon .oxi-icons' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_interactive_cards_cl_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(0, 0, 0, 0.44)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-close-icon' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_interactive_cards_cl_i_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 14,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-close-icon' => 'font-size:{{VALUE}}px',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_cl_br', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 50,
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-close-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_cl_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-close-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons-front-part', [
            'label' => esc_html__('Front Part', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_interactive_cards_fp_img', $this->style, [
            'label' => __('URL', SHORTCODE_ADDOONS),
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => 'https://www.oxilab.org/wp-content/uploads/2019/05/580b57fcd9996e24bc43c466.png',
            ]
                ]
        );

        $this->add_control(
                'sa_interactive_cards_fp_bg', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(13, 13, 13, 1.00)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-IC .oxi-addons-ICfull-content-s3' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_fp_w', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 471,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-IC .oxi-addons-image .oxi-addons-img' => 'width : {{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_interactive_cards_fp_h', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 250,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 600,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-IC .oxi-addons-image .oxi-addons-img' => 'height : {{SIZE}}{{UNIT}};'
            ],
                ]
        );


        $this->add_responsive_control(
                'sa_interactive_cards_fp_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-IC .oxi-addons-ICfull-content-s3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
                'shortcode-addons-font-settings', [
            'label' => esc_html__('Loader', SHORTCODE_ADDOONS),
            'condition' => [
                'sa_interactive_cards_loader' => 'yes'
            ]
                ]
        );
        $this->add_control(
                'sa_interactive_cards_loader_style', $this->style, [
            'label' => __('Loader Style', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'style-3',
            'options' => [
                'style-1' => __('Styke 1', SHORTCODE_ADDOONS),
                'style-2' => __('Styke 2', SHORTCODE_ADDOONS),
                'style-3' => __('Styke 3', SHORTCODE_ADDOONS),
                'style-4' => __('Styke 4', SHORTCODE_ADDOONS),
            ],
            'loader' => true,
                ]
        );
        $this->add_control(
                'sa_interactive_cards_loader_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#1aa3e9',
            'loader' => true,
                ]
        );

        $this->add_control(
                'sa_interactive_cards_loader_dur', $this->style, [
            'label' => __('Loading Duration (ms)', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 3000,
            'description' => '',
            'max' => 10000,
            'min' => 0,
            'step' => 50,
            'loader' => true,
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-back-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'back-settings'
            ]
                ]
        );
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons-back-setting', [
            'label' => esc_html__('General', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_interactive_cards_heading', $this->style, [
            'label' => __('Heading', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'placeholder' => 'This is Heading',
            'default' => 'Shortcode Addons',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner .oxi-addons-back-title' => '',
            ],
                ]
        );

        $this->add_control(
                'sa_interactive_cards_sd', $this->style, [
            'label' => __('Short Details', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'placeholder' => 'This is Short Details...',
            'default' => 'The ultimate elements bundle for WordPress Page Builder. Lots of useful and premium elements to complete your website quickly. Stunning design with endless customization options. Outstanding support to assist you 24/7.',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner .oxi-addons-back-paragraph' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_interactive_cards_btn_texts', $this->style, [
            'label' => __('Button Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'placeholder' => 'Button Text',
            'default' => 'Read More',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner a.oxi-addons-back-link' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_interactive_cards_btn_link', $this->style, [
            'type' => Controls::URL,
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_interactive_cards_btn_pos', $this->style, [
            'label' => __('Button Position ', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'left',
            'loader' => TRUE,
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-button' => 'text-align : {{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_interactive_cards_back_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgb(255, 255, 255)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_back_btn_full_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-back-img', [
            'label' => esc_html__('Image', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa_interactive_cards_back_img', $this->style, [
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => 'https://www.oxilab.org/wp-content/uploads/2019/04/beautiful-beauty-blue-414612.jpg',
            ],
                ]
        );
        $this->add_control(
                'sa_interactive_cards_back_img_ratio', $this->style, [
            'label' => __('Height Ratio', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 60,
            'min' => 0,
            'max' => 100,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-image:after' => 'padding-bottom : {{VALUE}}%;',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-back-head', [
            'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_interactive_cards_back_head_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner .oxi-addons-back-title' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_interactive_cards_back_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner .oxi-addons-back-title' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_back_head_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner .oxi-addons-back-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-back-details', [
            'label' => esc_html__('Details', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_interactive_cards_back_det_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4d4d4d',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner .oxi-addons-back-paragraph' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_interactive_cards_back_det_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner .oxi-addons-back-paragraph' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_back_det_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner .oxi-addons-back-paragraph' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-back-button', [
            'label' => esc_html__('Button', SHORTCODE_ADDOONS),
                ]
        );

        $this->add_group_control(
                'sa_interactive_cards_back_btn_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner a.oxi-addons-back-link' => '',
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();

        $this->add_control(
                'sa_interactive_cards_back_btn_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner a.oxi-addons-back-link' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_interactive_cards_back_btn_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(22, 172, 227, 1)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner a.oxi-addons-back-link' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_interactive_cards_back_btn_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3  .oxi-addons-back-text-inner a.oxi-addons-back-link' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_interactive_cards_back_btn_border_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}}  .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner a.oxi-addons-back-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
                'sa_interactive_cards_back_btn_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner a.oxi-addons-back-link:hover' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_interactive_cards_back_btn_h_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(22, 172, 227, 1)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner a.oxi-addons-back-link:hover' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_interactive_cards_back_btn_h_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner a.oxi-addons-back-link:hover' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_interactive_cards_back_btn_h_border_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner a.oxi-addons-back-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_interactive_cards_back_btn_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}}  .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner a.oxi-addons-back-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_back_btn_margin', $this->style, [
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
                '{{WRAPPER}}  .oxi-addons-Interactive-card-style-3 .oxi-addons-back-text-inner a.oxi-addons-back-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
