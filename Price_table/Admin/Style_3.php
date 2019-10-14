<?php

namespace SHORTCODE_ADDONS_UPLOAD\Price_table\Admin;

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
                'label' => esc_html__('Feature Content', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_repeater_control(
            'sa_price_table_repeater',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'button' => __('Add New Item', SHORTCODE_ADDOONS),
                'title_field' => 'sa_price_table_title',
                'fields' => [ 
                    'sa_price_table_price' => [
                        'label' => esc_html__('Price', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('78$', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-3-{{KEY}} .oxi-addons-price' => '',
                        ],
                    ],
                    'sa_price_table_title' => [
                        'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('Golden', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-3-{{KEY}} .oxi-addons-price-title' => '',
                        ],
                    ],
                    'sa_price_table_sub_title' => [
                        'label' => esc_html__('Sub Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('This is really good deal! ', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-3-{{KEY}} .oxi-addons-price-title' => '',
                        ],
                    ],
                    'sa_price_table_details' => [
                        'label' => esc_html__('Description', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => esc_html__('Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industrytandard ', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3-{{KEY}} .oxi-addons-details' => '',
                        ],
                    ],  
                    'sa_price_table_ribbon_text' => [
                        'label' => esc_html__('Ribbon Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('Business ', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-3-{{KEY}} .oxi-addons-ribon' => '',
                        ],
                    ],
                    'sa_price_table_button_text' => [
                        'label' => esc_html__('Button Text', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('Buy Now', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-3-{{KEY}} .oxi-addons-link' => '',
                        ],
                    ],
                    'sa_price_table_button_link' => [
                        'label' => esc_html__('Button Link', SHORTCODE_ADDOONS),
                        'type' => Controls::URL,
                        'controller' => 'add_group_control',
                        'selector' => [
                            '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-3-{{KEY}} .oxi-addons-link' => '',
                        ],
                    ],

                ],

            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' =>   TRUE,
            ]
        );
      
        $this->add_group_control(
            'sa_price_table_column',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'default' => 'oxi-bt-col-lg-4',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3' => '',
                ],
            ]
        ); 
        $this->add_group_control(
            'sa_price_table_bg_color',
            $this->style,
            [
                'type' => Controls::BACKGROUND, 
                  Controls::SEPARATOR => FALSE,  
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-wrapper-style-3' => 'background: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_bg_color_width',
            $this->style,
            [
                'label' => __('Max  Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-wrapper-style-3' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-wrapper-style-3' => ''
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
            'sa_price_table_scale',
            $this->style,
            [
                'label' => __('Transform Scale', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER, 
                'default' => [
                    'unit' => 'px',
                    'size' => 1,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 2,
                        'step' => 0.01,
                    ], 
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-wrapper-style-3' => 'transform: scale({{SIZE}});'
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-wrapper-style-3' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_banner_radius',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-wrapper-style-3' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab();
        $this->add_control(
            'sa_price_table_hover_scale',
            $this->style,
            [
                'label' => __('Transform Scale', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,  
                'default' => [
                    'unit' => 'px',
                    'size' => 1,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 2,
                        'step' => 0.01,
                    ], 
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-wrapper-style-3:hover' => 'transform: scale({{sa_price_table_hover_scale.SIZE}}) translateY({{sa_price_table_hover_position.SIZE}}px);'
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_hover_position',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER, 
                'default' => [
                    'unit' => 'px',
                    'size' => -10,
                ],
                'range' => [
                    'px' => [
                        'min' => -60,
                        'max' => 60,
                        'step' => 0.01,
                    ], 
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-wrapper-style-3:hover' => 'transform: scale({{sa_price_table_hover_scale.SIZE}}) translateY({{sa_price_table_hover_position.SIZE}}px);'
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_hover_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-wrapper-style-3:hover' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_banner_hover_radius',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-wrapper-style-3:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_price_table_separator',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE,  
            ]
        ); 
      
       
        $this->add_responsive_control(
            'sa_price_table_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-wrapper-style-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_margin',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_animation',
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
                'label' => esc_html__('Title Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_control(
            'sa_price_table_title_tag',
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
            'sa_price_table_title_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price-title' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price-title' => 'color:{{VALUE}};'
                ],
            ]
        );


        $this->add_responsive_control(
            'sa_price_table_title_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Sub Title Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_control(
            'sa_price_table_sub_title_tag',
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
            'sa_price_table_sub_title_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price-subtitle' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_sub_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price-subtitle' => 'color:{{VALUE}};'
                ],
            ]
        );


        $this->add_responsive_control(
            'sa_price_table_sub_title_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price-subtitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
 
        $this->add_group_control(
            'sa_price_table_details_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price-short-details' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_details_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price-short-details' => 'color:{{VALUE}};'
                ],
            ]
        );


        $this->add_responsive_control(
            'sa_price_table_details_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price-short-details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Price Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_price_table_price_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_price_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#0071bd',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_price_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price' => 'background: {{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_price_table_price_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();




        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Ribbon Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_price_table_ribbon_switter',
            $this->style,
            [
                'label' => __('Ribbon', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_price_table_ribbon_position_left_right',
            $this->style,
            [
                'label' => __('Left Right', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::CHOOSE,

                'default' => 'ribon_left',
                'loader' => TRUE,
                'options' => [
                    'ribon_left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                    ],
                    'ribon_right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                    ],
                ],
                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes'
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon ' => ''
                ],
            ]
        );

        $this->add_group_control(
            'sa_price_table_price_ribbon_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon' => ''
                ],

                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_price_table_price_ribbon_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon' => 'color:{{VALUE}};'
                ],
                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_price_table_price_ribbon_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(0, 113, 189, 1.00)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon' => 'background-color:{{VALUE}};'
                ],
                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 200,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon' => 'width:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 40,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon' => 'height:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_left',
            $this->style,
            [
                'label' => __('Left Right', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes',
                    'sa_price_table_ribbon_position_left_right' => 'ribon_left'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -66,
                ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 300,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon.ribon_left' => 'left:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_right',
            $this->style,
            [
                'label' => __('Left Right', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes',
                    'sa_price_table_ribbon_position_left_right' => 'ribon_right'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -66,
                ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 300,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon.ribon_right' => 'right:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_top',
            $this->style,
            [
                'label' => __('Top Position', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 15,
                ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 300,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon' => 'top:{{SIZE}}{{UNIT}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_price_table_price_ribbon_rotate_left',
            $this->style,
            [
                'label' => __('Rotate', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes',
                    'sa_price_table_ribbon_position_left_right' => 'ribon_left'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -45,
                ],
                'range' => [
                    'px' => [
                        'min' => -250,
                        'max' => 250,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon.ribon_left' => 'transform: rotate({{SIZE}}deg) ;'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_rotate_right',
            $this->style,
            [
                'label' => __('Rotate', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes',
                    'sa_price_table_ribbon_position_left_right' => 'ribon_right'
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 45,
                ],
                'range' => [
                    '%' => [
                        'min' => -250,
                        'max' => 250,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon.ribon_right' => 'transform: rotate({{SIZE}}deg) ;'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'condition' => [
                    'sa_price_table_ribbon_switter' => 'yes'
                ],
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-ribon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'sa_price_table_button_switter',
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
        $this->add_responsive_control(
            'sa_price_table_button_alignment',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'condition' => [
                    'sa_price_table_button_switter' => 'yes'
                ],
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-button' => 'justify-content: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_button_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'condition' => [
                    'sa_price_table_button_switter' => 'yes'
                ],
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_button_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'condition' => [
                    'sa_price_table_button_switter' => 'yes'
                ],
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
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
                'condition' => [
                    'sa_price_table_button_switter' => 'yes'
                ],
            ]
        );

        $this->add_group_control(
            'sa_price_table_button_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link' => ' ',
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
            'sa_price_table_button_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#333',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_button_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#28a745',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link' => 'background-color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_button_radius',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_button_sadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_price_table_button_hover_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link:hover' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_button_hover_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#28a745',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link:hover' => 'background-color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_button_hover_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link:hover' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_button_hover_radius',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_button_hover_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-3 .oxi-addons-link:hover' => ''
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
