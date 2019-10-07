<?php

namespace SHORTCODE_ADDONS_UPLOAD\Call_to_action\Admin;

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

class Style_3 extends AdminStyle
{

    public function register_controls()
    {

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'style-settings' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
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
            'sa_cta_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_cta_padding',
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
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_full_content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cta_margin',
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
                        'min' => -50,
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
                    '{{WRAPPER}} .sa_addons_cta_style_3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Sub Heading Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_cta_s_h_text',
            $this->style,
            [
                'label' => __('Heading', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Expound the actual teachings of the great explorer of the truth, the master.',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_sub_heading' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_cta_s_h_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f5f5f5',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_sub_heading' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cta_s_h_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_sub_heading' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_cta_s_h_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_sub_heading' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cta_s_h_padding',
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
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_sub_heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cta_s_h_margin',
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
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_sub_heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'sa_cta_h_text',
            $this->style,
            [
                'label' => __('Heading', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'You start new business with us!',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_heading' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_cta_h_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_heading' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cta_h_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_heading' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_cta_h_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_heading' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cta_h_padding',
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
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cta_h_margin',
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
                    '{{WRAPPER}} .sa_addons_cta_style_3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    'shortcode-addons-start-tabs' => 'style-settings'
                ]
            ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_cta_btn_text',
            $this->style,
            [
                'label' => __('Button Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Contact Now',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_cta_btn_link_on_off',
            $this->style,
            [
                'label' => __('Link Enable', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'link_yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'link_yes',
            ]
        );
        $this->add_group_control(
            'sa_cta_btn_link',
            $this->style,
            [
                'label' => esc_html__('Url', SHORTCODE_ADDOONS),
                'type' => Controls::URL,
                'condition' => [
                    'sa_cta_btn_link_on_off' => 'link_yes'
                ]
            ]
        );
        $this->add_control(
            'sa_cta_btn_posi',
            $this->style,
            [
                'label' => __('Button Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'right',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-angle-double-left',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-angle-double-right',
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cta_btn_m',
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
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn_content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cta_btn_animation',
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
                'label' => esc_html__('Button Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_cta_btn_align',
            $this->style,
            [
                'label' => __('Button Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'toggle' => TRUE,
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
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn_content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            'sa_cta_btn_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn' => ''
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
            'sa_cta_btn_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cta_btn_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_cta_btn_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn' => '',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_cta_btn_c_h',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#0088e3',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_cta_btn_bg_h',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn:hover' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_cta_btn_border_h',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn:hover' => '',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
            'sa_cta_btn_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cta_btn_b_r',
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
                        'min' => 200,
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
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cta_btn_p',
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
                        'min' => 200,
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
                    '{{WRAPPER}} .sa_addons_cta_style_3 .sa_addons_cta_btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
