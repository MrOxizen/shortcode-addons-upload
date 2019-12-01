<?php

namespace SHORTCODE_ADDONS_UPLOAD\Hover_effects\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_29 extends AdminStyle {

    public function register_controls() {


        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'content-settings' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
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
                'shortcode-addons', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_he_col', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-admin-edit-list' => ''
            ],
                ]
        );

        $this->add_repeater_control(
                'sa_he_repeater', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_he_image' => [
                    'type' => Controls::MEDIA,
                    'controller' => 'add_group_control',
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/06/blur-clean-clear-268854.jpg',
                    ],
                ],
                'sa_oh_start_tabs' => [
                    'controller' => 'start_controls_tabs',
                    'options' => [
                        'title' => esc_html__('Title Text', SHORTCODE_ADDOONS),
                        'des' => esc_html__('Description', SHORTCODE_ADDOONS),
                        'button' => esc_html__('Button Text', SHORTCODE_ADDOONS),
                    ]
                ],
                'sa_oh_start_tab_1' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_he_title_text' => [
                    'type' => Controls::TEXT,
                    'label' => __('Title Text', SHORTCODE_ADDOONS),
                    'placeholder' => __('Title Text', SHORTCODE_ADDOONS),
                    'default' => 'Fully Customizable',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-info .oxi-button-heading' => ''
                    ],
                ],
                'sa_he_title_color' => [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#000000',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-info h3.oxi-button-heading' => 'color:{{VALUE}};'
                    ],
                ],
                'sa_he_title_animation' => [
                    'label' => __('Animaton', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'ihewc-fade-up',
                    'options' => [
                        'ihewc-fade-up' => __('Fade Up', SHORTCODE_ADDOONS),
                        'ihewc-fade-down' => __('Fade Down', SHORTCODE_ADDOONS),
                        'ihewc-fade-left' => __('Fade Left', SHORTCODE_ADDOONS),
                        'ihewc-fade-right' => __('Fade Right', SHORTCODE_ADDOONS),
                        'ihewc-fade-up-big' => __('Fade Up Big', SHORTCODE_ADDOONS),
                        'ihewc-fade-down-big' => __('Fade Down Big', SHORTCODE_ADDOONS),
                        'ihewc-fade-left-big' => __('Fade Left Big', SHORTCODE_ADDOONS),
                        'ihewc-fade-right-big' => __('Fade Right Big', SHORTCODE_ADDOONS),
                        'ihewc-zoom-in' => __('Zoom In', SHORTCODE_ADDOONS),
                        'ihewc-zoom-out' => __('Zoom Out', SHORTCODE_ADDOONS),
                        'ihewc-flip-x' => __('Flip X', SHORTCODE_ADDOONS),
                        'ihewc-flip-y' => __('Flip Y', SHORTCODE_ADDOONS),
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-button-heading' => '',
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .headingunderline-body' => ''
                    ],
                ],
                'sa_oh_end_tab_1' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_oh_start_tab_2' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_he_description_text' => [
                    'type' => Controls::TEXTAREA,
                    'label' => __('Description Text', SHORTCODE_ADDOONS),
                    'placeholder' => __('Description Text', SHORTCODE_ADDOONS),
                    'default' => 'Lorem ipsum dolor sit amt, consecrate disciplining elite.',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-info .oxi-button-content' => ''
                    ],
                ],
                'sa_he_des_color' => [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#000000',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-info .oxi-button-content' => 'color:{{VALUE}};'
                    ],
                ],
                'sa_he_des_animation' => [
                    'label' => __('Animaton', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'ihewc-fade-up',
                    'options' => [
                        'ihewc-fade-up' => __('Fade Up', SHORTCODE_ADDOONS),
                        'ihewc-fade-down' => __('Fade Down', SHORTCODE_ADDOONS),
                        'ihewc-fade-left' => __('Fade Left', SHORTCODE_ADDOONS),
                        'ihewc-fade-right' => __('Fade Right', SHORTCODE_ADDOONS),
                        'ihewc-fade-up-big' => __('Fade Up Big', SHORTCODE_ADDOONS),
                        'ihewc-fade-down-big' => __('Fade Down Big', SHORTCODE_ADDOONS),
                        'ihewc-fade-left-big' => __('Fade Left Big', SHORTCODE_ADDOONS),
                        'ihewc-fade-right-big' => __('Fade Right Big', SHORTCODE_ADDOONS),
                        'ihewc-zoom-in' => __('Zoom In', SHORTCODE_ADDOONS),
                        'ihewc-zoom-out' => __('Zoom Out', SHORTCODE_ADDOONS),
                        'ihewc-flip-x' => __('Flip X', SHORTCODE_ADDOONS),
                        'ihewc-flip-y' => __('Flip Y', SHORTCODE_ADDOONS),
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-button-content' => '',
                    ],
                ],
                'sa_oh_end_tab_2' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_oh_start_tab_3' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_he_btn_text' => [
                    'type' => Controls::TEXT,
                    'label' => __('Button Text', SHORTCODE_ADDOONS),
                    'placeholder' => __('Button Text', SHORTCODE_ADDOONS),
                    'default' => 'Buy Now',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-he-button' => '',
                    ],
                ],
                'sa_oh_start_tabs2' => [
                    'controller' => 'start_controls_tabs',
                    'options' => [
                        'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                        'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    ]
                ],
                'sa_oh_start_tab_2-1' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_he_btn_color' => [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#000000',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-effects .oxi-he-button' => 'color:{{VALUE}};'
                    ],
                ],
                'sa_he_btn_bg' => [
                    'type' => Controls::BACKGROUND,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-effects .oxi-he-button' => ''
                    ],
                ],
                'sa_oh_end_tab_2-1' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_oh_start_tab_2-2' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_he_btn_h_color' => [
                    'label' => __('Hover Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#000000',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-effects .oxi-he-button:hover' => 'color:{{VALUE}};'
                    ],
                ],
                'sa_he_btn_h_bg' => [
                    'type' => Controls::BACKGROUND,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-effects .oxi-he-button:hover' => ''
                    ],
                ],
                'sa_oh_end_tab_2-2' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_oh_end_tabs2' => [
                    'controller' => 'end_controls_tabs',
                ],
                'sa_he_btn_animation' => [
                    'label' => __('Animaton', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'ihewc-fade-up',
                    'loader' => TRUE,
                    'options' => [
                        'ihewc-fade-up' => __('Fade Up', SHORTCODE_ADDOONS),
                        'ihewc-fade-down' => __('Fade Down', SHORTCODE_ADDOONS),
                        'ihewc-fade-left' => __('Fade Left', SHORTCODE_ADDOONS),
                        'ihewc-fade-right' => __('Fade Right', SHORTCODE_ADDOONS),
                        'ihewc-fade-up-big' => __('Fade Up Big', SHORTCODE_ADDOONS),
                        'ihewc-fade-down-big' => __('Fade Down Big', SHORTCODE_ADDOONS),
                        'ihewc-fade-left-big' => __('Fade Left Big', SHORTCODE_ADDOONS),
                        'ihewc-fade-right-big' => __('Fade Right Big', SHORTCODE_ADDOONS),
                        'ihewc-zoom-in' => __('Zoom In', SHORTCODE_ADDOONS),
                        'ihewc-zoom-out' => __('Zoom Out', SHORTCODE_ADDOONS),
                        'ihewc-flip-x' => __('Flip X', SHORTCODE_ADDOONS),
                        'ihewc-flip-y' => __('Flip Y', SHORTCODE_ADDOONS),
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-he-button' => '',
                    ],
                ],
                'sa_oh_end_tab_3' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_oh_end_tabs' => [
                    'controller' => 'end_controls_tabs',
                ],
                'sa_he_link_url' => [
                    'separator' => TRUE,
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
                ],
                'sa_he_bg' => [
                    'type' => Controls::BACKGROUND,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-info' => ''
                    ],
                ],
                'sa_he_boxshadow' => [
                    'type' => Controls::BOXSHADOW,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-info' => '',
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-img:before' => ''
                    ],
                ],
                'sa_he_ul_color' => [
                    'label' => __('Underline Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'red',
                    'selector' => [
                        '{{WRAPPER}} .oxi-hover-effects-style29.oxi-hover-effects-style29-{{KEY}} .oxi-hover-info .headingunderline' => 'border-color:{{VALUE}};'
                    ],
                ],
            ],
            'title_field' => 'sa_he_title_text',
                ]
        );
        $this->end_controls_section();



        $this->end_section_devider();

        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );


        $this->add_responsive_control(
                'sa_he_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 320,
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects-map-style29' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_he_height', $this->style, [
            'label' => __('Height Ratio', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => '%',
                'size' => 100,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects-map-style29:after' => 'padding-bottom:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->start_controls_tab();
        $this->add_responsive_control(
                'sa_he_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-img:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_responsive_control(
                'sa_he_br_h_radius', $this->style, [
            'label' => __('Hover Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-img:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-img:hover img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-hover-effects-style29:hover .oxi-hover-img:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects:hover .oxi-hover-info' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->add_responsive_control(
                'sa_he_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-hover-effects-style29' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_he_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();






        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'content-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Body Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_he_content_align', $this->style, [
            'label' => __('Alignments', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'flex-start' => [
                    'title' => __('Top', SHORTCODE_ADDOONS),
                ],
                'center' => [
                    'title' => __('Middle', SHORTCODE_ADDOONS),
                ],
                'flex-end' => [
                    'title' => __('Bottom', SHORTCODE_ADDOONS),
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info' => 'justify-content: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'sa_he_content_transiton', $this->style, [
            'label' => __('Animation Transition', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 's',
                'size' => '0.35',
            ],
            'range' => [
                's' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.05,
                ],
                'ms' => [
                    'min' => 0,
                    'max' => 10000,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-hover-info' => 'transition-duration: {{SIZE}}{{UNIT}}',
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-hover-img' => 'transition-duration: {{SIZE}}{{UNIT}}',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_he_content_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 40,
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Text Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'first_text' => esc_html__('Title', SHORTCODE_ADDOONS),
                'second_text' => esc_html__('Description', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_he_title_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info h3.oxi-button-heading' => ''
            ],
                ]
        );

        $this->add_group_control(
                'sa_he_title_txtshadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info h3.oxi-button-heading' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_he_title_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info h3.oxi-button-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_he_description_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info .oxi-button-content' => ''
            ],
                ]
        );

        $this->add_group_control(
                'sa_he_description_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info .oxi-button-content' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_he_description_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info .oxi-button-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Title Underline Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_responsive_control(
                'sa_he_ul_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 120,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info .headingunderline' => 'width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_he_ul_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 3,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info .headingunderline' => 'border-width:{{SIZE}}px;'
            ],
                ]
        );




        $this->add_responsive_control(
                'sa_he_ul_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-info .headingunderline-body' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();


        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Button Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_he_btn_position', $this->style, [
            'label' => __('Button Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'center',
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
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects  .oxi-hover-info-button' => 'text-align:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_he_btn_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-he-button' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal View', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover View', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();



        $this->add_group_control(
                'sa_he_btn_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-he-button' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_he_btn_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-he-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_he_btn_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-he-button' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_he_btn_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-he-button' => ''
            ],
                ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab();


        $this->add_group_control(
                'sa_he_btn_h-br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-he-button:hover' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_he_btn_hover-br-radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-he-button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],]
        );
        $this->add_group_control(
                'sa_he_btn_h-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-he-button:hover' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_he_btn_h_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-he-button:hover' => '',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_he_btn_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-he-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_he_btn_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-hover-effects-style29 .oxi-hover-effects .oxi-he-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();


        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
