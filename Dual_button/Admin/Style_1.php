<?php

namespace SHORTCODE_ADDONS_UPLOAD\Dual_button\Admin;

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

class Style_1 extends AdminStyle
{

    public function register_controls()
    {
        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'button-left' => esc_html__('Button Left', SHORTCODE_ADDOONS),
                    'button-right' => esc_html__('Button Right', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_section_tabs(
            'shortcode-addons-general',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'general-settings'
                ]
            ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-general-sec',
            [
                'label' => esc_html__('General', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_dual_btn_align',
            $this->style,
            [
                'label' => __('Text Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'center',
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
                    '{{WRAPPER}} .oxi-dual-button-style-1  .oxi-addons-dual-button-align  ' => 'text-align:{{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_dual_btn_max_width',
            $this->style,
            [
                'label' => __('Max-Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 600,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => .1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group ' => 'width:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_dual_btn_margin',
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
                    '{{WRAPPER}} .oxi-dual-button-style-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa_s_image_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-middle-ico',
            [
                'label' => esc_html__('Middle', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'sa_dual_btn_mid_middle_switcher',
            $this->style,
            [
                'label' => __('Middle Item', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_dual_btn_mid_text_icon',
            $this->style,
            [
                'label' => __('Text / Icon', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'icon',
                'options' => [
                    'text' => [
                        'title' => __('Text', SHORTCODE_ADDOONS),
                    ],
                    'icon' => [
                        'title' => __('Icon', SHORTCODE_ADDOONS),
                    ],
                ],
                'condition' => [
                    'sa_dual_btn_mid_middle_switcher' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_dual_btn_mid_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-adjust',
                'condition' => [
                    'sa_dual_btn_mid_text_icon' => 'icon'
                ],
                'condition' => [
                    'sa_dual_btn_mid_middle_switcher' => 'yes'
                ]
            ]
        );

        $this->add_control(
            'sa_dual_btn_mid_text',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'placeholder' => 'This is Button Text',
                'default' => 'OR',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group-before' => '',
                ],
                'condition' => [
                    'sa_dual_btn_mid_text_icon' => 'text'
                ],
                'condition' => [
                    'sa_dual_btn_mid_middle_switcher' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_dual_btn_mid_icon_font-size',
            $this->style,
            [
                'label' => __('Font-size', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 13,
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group-before' => 'font-size: {{VALUE}}px;',
                ],
                'condition' => [
                    'sa_dual_btn_mid_text_icon' => 'icon'
                ],
                'condition' => [
                    'sa_dual_btn_mid_middle_switcher' => 'yes'
                ]
            ]
        ); 
        $this->add_responsive_control(
            'sa_icon_box_w_h',
            $this->style,
            [
                'label' => __('Width & Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
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
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group-before' => 'max-width: {{SIZE}}{{UNIT}}; width: 100%; height: {{SIZE}}{{UNIT}};'
                ],
                'condition' => [
                    'sa_dual_btn_mid_middle_switcher' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            'sa_dual_btn_mid_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'loader' => FALSE,
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group-before' => ''
                ],
                'condition' => [
                    'sa_dual_btn_mid_text_icon' => 'text'
                ],
                'condition' => [
                    'sa_dual_btn_mid_middle_switcher' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_dual_btn_mid_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                Controls::SEPARATOR => TRUE,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group-before' => 'color : {{VALUE}}; '
                ],
                'condition' => [
                    'sa_dual_btn_mid_middle_switcher' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_dual_btn_mid_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(3, 3, 3, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group-before' => 'background : {{VALUE}}; '
                ],
                'condition' => [
                    'sa_dual_btn_mid_middle_switcher' => 'yes'
                ]
            ]
        );


        $this->add_responsive_control(
            'sa_dual_btn_mid_padding',
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
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group-before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_dual_btn_mid_middle_switcher' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_dual_btn_mid_border_radius',
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
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group-before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_dual_btn_mid_middle_switcher' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            'sa_dual_btn_mid_box_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group-before' => ''
                ],

            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-button-left',
            [
                'label' => esc_html__('Button Left', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_dual_btn_left_text',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'placeholder' => 'This is Button Text',
                'default' => 'Button Text',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1) span.oxi-text' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_dual_btn_left_link',
            $this->style,
            [
                'type' => Controls::URL,
                'loader' => TRUE,
            ]
        );

        $this->add_control(
            'ssa_dual_btn_left_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-angle-double-left',
            ]
        );
        $this->add_control(
            'sa_dual_btn_left_id',
            $this->style,
            [
                'label' => __('ID', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'placeholder' => 'Button ID',
                'loader' => True,
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-button-right',
            [
                'label' => esc_html__('Button Right', SHORTCODE_ADDOONS),
            ]
        );

        $this->add_control(
            'sa_dual_btn_right_text',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'placeholder' => 'This is Button Text',
                'default' => 'Button Text',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2) span.oxi-text' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_dual_btn_right_link',
            $this->style,
            [
                'type' => Controls::URL,
                'loader' => TRUE,
            ]
        );

        $this->add_control(
            'ssa_dual_btn_right_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-angle-double-right',
            ]
        );
        $this->add_control(
            'sa_dual_btn_right_id',
            $this->style,
            [
                'label' => __('ID', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'placeholder' => 'Button ID',
                'loader' => True,
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
        $this->start_section_tabs(
            'shortcode-addons-general',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'button-left'
                ]
            ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-button-left',
            [
                'label' => esc_html__('Button Left', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_group_control(
            'sa_dual_btn_left_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'loader' => FALSE,
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1) span.oxi-text' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_dual_btn_left_sep',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE,
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal ', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover ', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();


        $this->add_control(
            'sa_dual_btn_left_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1) span.oxi-text' => 'color : {{VALUE}}; '
                ],
            ]
        );
        $this->add_control(
            'sa_dual_btn_left_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(23, 186, 63, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1) ' => 'background : {{VALUE}}; '
                ],
            ]
        );
        $this->add_group_control(
            'sa_dual_btn_left_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1)' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_dual_btn_left_br',
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
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1)' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_dual_btn_left_h_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1):hover span.oxi-text' => 'color : {{VALUE}}; '
                ],
            ]
        );
        $this->add_control(
            'sa_dual_btn_left_h_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(15, 162, 207, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1):hover ' => 'background : {{VALUE}}; '
                ],
            ]
        );
        $this->add_group_control(
            'sa_dual_btn_left_h_border_btm',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1):hover' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_dual_btn_left_h_padding',
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
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1):hover ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_dual_btn_left_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                Controls::SEPARATOR => true,
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
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1)' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-btn-rh-ic',
            [
                'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-btn-rh-ic-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal ', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover ', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_dual_btn_left_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1) .oxi-left-icon .oxi-icons' => 'color : {{VALUE}}; '
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_dual_btn_left_h_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1):hover .oxi-left-icon .oxi-icons' => 'color : {{VALUE}}; '
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_dual_btn_left_font_size',
            $this->style,
            [
                'label' => __('Font-size', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 17,
                Controls::SEPARATOR => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1) .oxi-left-icon .oxi-icons' => 'font-size: {{VALUE}}px;',
                ]
            ]
        );
        $this->add_control(
            'sa_dual_btn_left_position',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'left',
                'loader' => true,
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_dual_btn_left_icon_padding',
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
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(1) .oxi-left-icon .oxi-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
        $this->start_section_tabs(
            'shortcode-addons-btn-right',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'button-right'
                ]
            ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-button-right-a',
            [
                'label' => esc_html__('Button Right', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_group_control(
            'sa_dual_btn_right_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'loader' => FALSE,
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2) span.oxi-text' => ''
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal ', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover ', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_dual_btn_right_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2) span.oxi-text' => 'color : {{VALUE}}; '
                ],
            ]
        );
        $this->add_control(
            'sa_dual_btn_right_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(237, 3, 124, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2)' => 'background : {{VALUE}}; '
                ],
            ]
        );
        $this->add_group_control(
            'sa_dual_btn_right_border_btm',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2)' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_dual_btn_right_border_redius',
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
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2)' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_dual_btn_right_h_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2):hover span.oxi-text' => 'color : {{VALUE}}; '
                ],
            ]
        );
        $this->add_control(
            'sa_dual_btn_right_h_bg_cl',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(177,25,207,1.00)',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2):hover' => 'background : {{VALUE}}; '
                ],
            ]
        );
        $this->add_group_control(
            'sa_dual_btn_right_h_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2):hover' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_dual_btn_right_h_br',
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
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2):hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_dual_btn_right_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                Controls::SEPARATOR => true,
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
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2)' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-btn-rh-ic',
            [
                'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-btn-rh-ic-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal ', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover ', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_dual_btn_right__color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2) .oxi-icons' => 'color : {{VALUE}}; '
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_dual_btn_right__h_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2):hover .oxi-icons' => 'color : {{VALUE}}; '
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_dual_btn_right__font_size',
            $this->style,
            [
                'label' => __('Font-size', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 17,
                Controls::SEPARATOR => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2) .oxi-icons' => 'font-size: {{VALUE}}px;',
                ]
            ]
        );
        $this->add_control(
            'sa_dual_btn_right_position',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'right',
                'loader' => true,
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_dual_btn_right_icon_padding',
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
                    '{{WRAPPER}} .oxi-dual-button-style-1 .oxi-addons-btn-group > a:nth-of-type(2) .oxi-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
