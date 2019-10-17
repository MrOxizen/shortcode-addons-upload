<?php

namespace SHORTCODE_ADDONS_UPLOAD\Price_table\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_10
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_10 extends AdminStyle
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10' => '',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-wrapper-style-10' => 'background: {{VALUE}};'
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
                    'size' => 300,
                ],
                'range' => [
                    '%' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 50,
                        'max' => 800,
                        'step' =>  1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-wrapper-style-10' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-wrapper-style-10' => ''
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-wrapper-style-10' => 'transform: scale({{SIZE}});'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-wrapper-style-10' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_table_radius',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-wrapper-style-10' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-wrapper-style-10:hover' => 'transform: scale({{sa_price_table_hover_scale.SIZE}}) translateY({{sa_price_table_hover_position.SIZE}}px);'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-wrapper-style-10:hover' => 'transform: scale({{sa_price_table_hover_scale.SIZE}}) translateY({{sa_price_table_hover_position.SIZE}}px);'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-wrapper-style-10:hover' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_table_hover_radius',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-wrapper-style-10:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'sa_price_table_price_box_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10  .oxi-addons-price-main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Feature Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_feature_alignment',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS), 
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'flex-start', 
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ul' => 'align-items: {{VALUE}};'
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'text' => esc_html__('Text ', SHORTCODE_ADDOONS),
                    'icon' => esc_html__('Icon', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_price_table_feature_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-feature' => ''
                ],
            ]
        );
       
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'text' => esc_html__('Active', SHORTCODE_ADDOONS),
                    'icon' => esc_html__('Deactive', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_price_table_feature_color_active',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#0da4bf',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-li.active__icon .oxi-addons-feature' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->start_controls_tab();
        $this->add_control(
            'sa_price_table_feature_color_deactive',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#0da4bf',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-li.deactive__icon .oxi-addons-feature' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab();  
        $this->end_controls_tabs();  
        $this->add_control(
            'sa_price_table_separator_feature',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE,
            ]
        );
        $this->add_control(
            'sa_price_table_feature_span_color',
            $this->style,
            [
                'label' => __('Span Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#747474',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-feature span' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_bg_feature_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(255,255,255,0.00)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-li' => 'background: {{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_price_table_feature_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-li' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_responsive_control(
            'sa_price_table_icon_font_size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,

                'default' => [
                    'unit' => 'px',
                    'size' => 18,
                ],
                'range' => [
                    'px' => [
                        'min' => 5,
                        'max' => 60,
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'text' => esc_html__('Active', SHORTCODE_ADDOONS),
                    'icon' => esc_html__('Deactive', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_price_table_icon_color_active',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(0, 113, 189, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-li.active__icon .oxi-icons' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->start_controls_tab();
        $this->add_control(
            'sa_price_table_icon_color_deactive',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(0, 113, 189, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-li.deactive__icon .oxi-icons' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab();  
        $this->end_controls_tabs();  
        $this->add_control(
            'sa_price_table_separator_icon',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE,
            ]
        );
        $this->add_control(
            'sa_price_table_distance_icon',
            $this->style,
            [
                'label' => __('Distance Icon', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10  .oxi-icons' => 'padding-right: {{SIZE}}px;',
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
            'sa_price_table_feature_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
       
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
       
        $this->add_responsive_control(
            'sa_price_table_image_position',
            $this->style,
            [
                'label' => __('Image Postion', SHORTCODE_ADDOONS), 
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'flex-start', 
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi_addons__image_main' => 'justify-content: {{VALUE}};'
                ],
            ]
        );  
        $this->add_responsive_control(
            'sa_price_table_image_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER, 
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ], 
                'range' => [
                    '%' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 50,
                        'max' => 800,
                        'step' =>  1,
                    ], 
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__price_table_style_10 .oxi_addons__image' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_image_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER, 
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ], 
                'range' => [
                    '%' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 50,
                        'max' => 800,
                        'step' =>  1,
                    ], 
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__price_table_style_10 .oxi_addons__image' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_sub_image_margin',
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
                    '{{WRAPPER}} .oxi_addons__price_table_style_10 .oxi_addons__image_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
       

        $this->end_controls_section(); 
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Heading Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
  
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'title' => esc_html__('Title', SHORTCODE_ADDOONS),
                    'subtitle' => esc_html__('Sub title', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-price-title' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#4d4d4d',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-price-title' => 'color:{{VALUE}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-price-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_price_table_subtitle_tag',
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
            'sa_price_table_subtitle_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-price-details' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_subtitle_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#858585',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-price-details' => 'color:{{VALUE}};'
                ],
            ]
        );
        
        $this->add_responsive_control(
            'sa_price_table_subtitle_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-price-details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
        
        $this->end_controls_section(); 
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Price Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal typo', SHORTCODE_ADDOONS),
                    'span' => esc_html__('Span typo', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_price_table_price_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-price' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_price_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#355a85',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-price' => 'color:{{VALUE}};'
                ],
            ]
        ); 
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_group_control(
            'sa_price_table_price_typo_span',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-price span' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_price_table_price_span_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#8b8b8b',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-price span' => 'color:{{VALUE}};'
                ],
            ]
        ); 
        $this->end_controls_tab();
        $this->end_controls_tabs(); 

        $this->add_responsive_control(
            'sa_price_table_price_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                'default' => 'No',
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

                'default' => 'ribon_right',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon ' => ''
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon' => ''
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon' => 'color:{{VALUE}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon' => 'background-color:{{VALUE}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon' => 'width:{{SIZE}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon' => 'height:{{SIZE}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon.ribon_left' => 'left:{{SIZE}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon.ribon_right' => 'right:{{SIZE}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon' => 'top:{{SIZE}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon.ribon_left' => 'transform: rotate({{SIZE}}deg) ;'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon.ribon_right' => 'transform: rotate({{SIZE}}deg) ;'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-ribon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link' => ' ',
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
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link' => 'color:{{VALUE}};',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link' => 'background-color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link' => ''
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link' => ''
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link:hover' => 'color:{{VALUE}};',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link:hover' => 'background-color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_button_hover_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link:hover' => ''
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-10 .oxi-addons-link:hover' => ''
                ],

            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
 

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function modal_form_data()
    {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Price Table Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">'; 

             $this->add_group_control(
                    'sa_price_table_front_image',
                    $this->style,
                    [
                        'type' => Controls::MEDIA,
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.oxilab.org/wp-content/uploads/2019/04/my_logo.png',
                        ],
                    ]
                );
        $this->add_control(
            'sa_price_table_title',
            $this->style,
            [
                'label' => __('Title', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Shared Desk',
                'placeholder' => 'Shared Desk',
            ]
        );
        $this->add_control(
            'sa_price_table_subtitle',
            $this->style,
            [
                'label' => __('Sub title', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Economical but Flexible',
                'placeholder' => 'Economical but Flexible',
            ]
        );
        $this->add_control(
            'sa_price_table_price',
            $this->style,
            [
                'label' => __('Price', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => '<sup>$</sup>99 <span>Monthly</span>',
                'placeholder' => '<sup>$</sup>99 <span>Monthly</span>',
            ]
        );
        $this->add_control(
            'sa_price_table_ribbon_text',
            $this->style,
            [
                'label' => __('Ribbon Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Business',
                'placeholder' => 'Business',
            ]
        );
        $this->add_control(
            'sa_price_table_button_text',
            $this->style,
            [
                'label' => __('Button Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Get Started',
                'placeholder' => ' Get Started ',
            ]
        );
        $this->add_group_control(
            'sa_price_table_button_link',
            $this->style,
            [
                'label' => __('Link', SHORTCODE_ADDOONS),
                'type' => Controls::URL,
            ]
        );
       
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Feature Setting', SHORTCODE_ADDOONS),
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
                'title_field' => 'sa_price_table_feature',
                'fields' => [
                    'sa_price_table_icon_switter' => [
                        'label' => __('Active/Deactive', SHORTCODE_ADDOONS), 
                        'type' => Controls::CHOOSE, 
                        'default' => 'yes', 
                        'options' => [
                            'yes' => [
                                'title' => __('Active', SHORTCODE_ADDOONS), 
                            ], 
                            'no' => [
                                'title' => __('Deactive', SHORTCODE_ADDOONS), 
                            ],
                        ], 
                    ],

                    'sa_price_table_icon_active' => [
                        'label' => esc_html__('Active Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fas fa-check-circle',
                        'condition' => [
                            'sa_price_table_icon_switter' => 'yes'
                        ],
                        'conditional' => Controls::INSIDE,
                    ],
                    'sa_price_table_icon_deactive' => [
                        'label' => esc_html__('Deactive Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fas fa-minus-circle',
                        'condition' => [
                            'sa_price_table_icon_switter' => 'no'
                        ],
                        'conditional' => Controls::INSIDE,
                    ],
                    'sa_price_table_feature' => [
                        'label' => esc_html__('Feature', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('Life Time Updates ', SHORTCODE_ADDOONS),
                    ],


                ],

            ]
        );
        $this->end_controls_section();
        echo '</div>';
    }
}
