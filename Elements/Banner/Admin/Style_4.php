<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Banner\Admin;

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
                    'button' => esc_html__('Button', SHORTCODE_ADDOONS),
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
        $this->add_control(
            'sa_banner_button_switcher',
            $this->style,
            [
                'label' => __('Button', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        ); 
    
        $this->add_control(
            'sa_banner_btn_position',
            $this->style,
            [
                'label' => __('Button Postion', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button_main' => 'justify-content: {{VALUE}};'
                ],
            ]
        );

        $this->add_control(
            'sa_banner_main_background',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE
            ]
        );
        $this->add_group_control(
            'sa_banner_main_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_banner_main_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                //'loader' => TRUE,
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Line Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_banner_line_switcher',
            $this->style,
            [
                'label' => __('Line', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        ); 
        $this->add_responsive_control(
            'sa_banner_line_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER, 
                'default' => [
                    'unit' => 'px',
                    'size' => 4,
                ], 
                'condition' => [
                    'sa_banner_line_switcher' => 'yes'
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => 1,
                    ], 
                    '%' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ], 
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__line::before' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_banner_line_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER, 
                'default' => [
                    'unit' => '%',
                    'size' => 120,
                ], 
                'condition' => [
                    'sa_banner_line_switcher' => 'yes'
                ],
                'range' => [
                    '%' => [
                        'min' => 50,
                        'max' => 250,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 10,
                        'max' => 700,
                        'step' => 0.1,
                    ], 
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__line::before' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'sa_banner_line_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#28a745',
                'oparetor' => 'RGB',
                'condition' => [
                    'sa_banner_line_switcher' => 'yes'
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__line::before' => 'background-color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_banner_line_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
                'condition' => [
                    'sa_banner_line_switcher' => 'yes'
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
        $this->add_control(
            'sa_banner_heading_text',
            $this->style,
            [
                'label' => __('Heading', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'MAKE YOUR  <span>BUSINESS</span>',
                'placeholder' => 'Lorem <span>Ipsum</span>',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__heading' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_banner_tag',
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
            'sa_banner_heading_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__heading' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_banner_heading_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#3fe3af',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__heading' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_banner_heading_span_color',
            $this->style,
            [
                'label' => __('Span Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ff4797',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__heading span' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_banner_heading_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );

        $this->add_responsive_control(
            'sa_banner_heading_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section(); 
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Description Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_banner_details_text',
            $this->style,
            [
                'label' => __('Description', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => 'Share your challenge with our team and we l work with you to deliver a revolutionary digital product.',
                'placeholder' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__details' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_banner_details_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__details' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_banner_details_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__details' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_banner_details_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION, 
            ]
        );

        $this->add_responsive_control(
            'sa_banner_details_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    'shortcode-addons-start-tabs' => 'button',
                ],
                'section-condition' => [
                    'sa_banner_button_switcher' => 'yes'
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
        $this->add_control(
            'sa_banner_button_text',
            $this->style,
            [
                'label' => __('Button Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Get Started',
                'placeholder' => 'Get Started',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_banner_button_link',
            $this->style,
            [
                'label' => __('Link', SHORTCODE_ADDOONS),
                'type' => Controls::URL,
                'loader' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_banner_button_padding',
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
                        'min' => 0,
                        'max' => 300,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_banner_button_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
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
                        'min' => -200,
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
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_banner_button_animation',
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
                'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_group_control(
            'sa_banner_button_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button' => ' ',
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
            'sa_banner_button_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button' => 'color:{{VALUE}};', 
                ],
            ]
        );
        $this->add_control(
            'sa_banner_button_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#28a745',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button' => 'background-color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_banner_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_banner_button_radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_banner_button_sadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_banner_button_hover_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button:hover' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button:hover .oxi-icons' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_banner_button_hover_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(40, 168, 76, 0.01)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button:hover' => 'background-color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_banner_button_hover_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button:hover' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_banner_button_hover_radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_banner_button_hover_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__banner_style_4 .oxi_addons__button:hover' => ''
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
