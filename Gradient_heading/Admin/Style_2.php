<?php

namespace SHORTCODE_ADDONS_UPLOAD\Gradient_heading\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_2 extends AdminStyle
{

    public function register_controls()
    {
        $this->start_section_tabs(
            'shortcode-addons-gradient-heading-tabs'
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-gradient-heading-text',
            [
                'label' => esc_html__('General', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_gradient_header_text',
            $this->style,
            [
                'label' => __('Heading Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => 'This is Heading Text',
                'placeholder' => 'This is Heading Text',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi-addons-gradient-heading' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_sub_gradient_header_text', 
            $this->style,
            [
                'label' => __('Sub Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => 'This is Sub-heading Text',
                'placeholder' => 'This is Sub-heading Text',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi-addons-sub-gradient-heading' => '',
                ],
            ]
        );

        $this->add_control(
            'sa_gradient_header_heading_tag',
            $this->style,
            [
                'label' => __('Heading Tag', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'separator' => TRUE,
                'default' => 'h2',
                'options' => [
                    'h1' => __('Heading 1', SHORTCODE_ADDOONS),
                    'h2' => __('Heading 2', SHORTCODE_ADDOONS),
                    'h3' => __('Heading 3', SHORTCODE_ADDOONS),
                    'h4' => __('Heading 4', SHORTCODE_ADDOONS),
                    'h5' => __('Heading 5', SHORTCODE_ADDOONS),
                    'h6' => __('Heading 6', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_group_control(
            'sa_gradient_header_link',
            $this->style,
            [
                'label' => esc_html__('Heading Link', SHORTCODE_ADDOONS),
                'type' => Controls::URL,
            ]
        );

        $this->add_responsive_control(
            'sa_head_margin',
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
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();


        $this->start_controls_section(
            'shortcode-addons-font-settings',
            [
                'label' => esc_html__('Heading Typography ', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_head_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::GRADIENT,
                'default' => '#252b25',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi-addons-gradient-heading' => 'background-image:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_head_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi-addons-gradient-heading' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_head_padding',
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
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi-addons-gradient-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa_head_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-sub-head-font-settings',
            [
                'label' => esc_html__('Sub-Heading Typography ', SHORTCODE_ADDOONS),
                'showing' => False,
            ]
        );
        $this->add_control(
            'sa_sub_head_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#706868',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi-addons-sub-gradient-heading' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_sub_head_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi-addons-sub-gradient-heading ' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_sub_head_padding',
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
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi-addons-sub-gradient-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa_desc_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
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
            'sa_gradient_heading_line_switcher',
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
            'sa_gradient_heading_line_position_vertical',
            $this->style,
            [
                'label' => __('Line Vertical Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => '0',
                'condition' => [
                    'sa_gradient_heading_line_switcher' => 'yes'
                ],
                'options' => [
                    '-1' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-long-arrow-alt-up',
                    ],
                    '0' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-center',  
                    ],
                    '1' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-long-arrow-alt-down', 
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi_addons__line_main' => 'order: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_gradient_heading_line_position',
            $this->style,
            [
                'label' => __('Line Horizontal Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'center',
                'condition' => [
                    'sa_gradient_heading_line_switcher' => 'yes'
                ],
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
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi_addons__line_main' => 'justify-content: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_gradient_heading_line_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER, 
                'default' => [
                    'unit' => 'px',
                    'size' => 200,
                ], 
                'condition' => [
                    'sa_gradient_heading_line_switcher' => 'yes'
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ], 
                    '%' => [
                        'min' => 0,
                        'max' => 150,
                        'step' => 1,
                    ], 
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi_addons__line' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_gradient_heading_line_heights',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER, 
                'default' => [
                    'unit' => 'px',
                    'size' => 4,
                ], 
                'condition' => [
                    'sa_gradient_heading_line_switcher' => 'yes'
                ],
                'range' => [ 
                    'px' => [
                        'min' => 0,
                        'max' => 50,
                        'step' =>  1,
                    ], 
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi_addons__line' => 'height: {{SIZE}}px;',
                ],
            ]
        );
        $this->add_control(
            'sa_gradient_heading_line_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::GRADIENT,
                'default' => 'rgb(122, 122, 122)',
                'oparetor' => 'RGB',
                'condition' => [
                    'sa_gradient_heading_line_switcher' => 'yes'
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi_addons__line' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_gradient_heading_line_padding',
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
                'condition' => [
                    'sa_gradient_heading_line_switcher' => 'yes'
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-gradient-heading-container-style-2 .oxi_addons__line_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa_gradient_heading_line_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
                'condition' => [
                    'sa_gradient_heading_line_switcher' => 'yes'
                ],
            ]
        );
        $this->end_controls_section(); 

        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
