<?php

namespace SHORTCODE_ADDONS_UPLOAD\Unfold\Admin;

if (!defined('ABSPATH')) {
    exit;
}

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
                'label' => esc_html__('Content Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_unfold_type',
            $this->style,
            [
                'label'         => __('Content Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'custom',
                'options' => [
                    'custom' => 'Custom',
                    'shortcode' => 'Shortcode',
                ],
            ]
        );
        $this->add_control(
            'sa_unfold_shortcode',
            $this->style,
            [
                'label' => __('Shortcode', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'placeholder' => 'Enter Your Shortcode',
                'description' => 'Save and reload',
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_data' => '',
                ],
                'condition' => [
                    'sa_unfold_type' => 'shortcode',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_text_align',
            $this->style,
            [
                'label' => __('Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => 'icon',
                'default' => 'left',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_heading, {{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_content ' => 'text-align: {{VALUE}};',
                ],
                'condition' => [
                    'sa_unfold_type' => 'custom',
                ],
            ]
        );
        $this->add_control(
            'sa_unfold_title_on_off',
            $this->style,
            [
                'label'         => __('Title On', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'condition' => [
                    'sa_unfold_type' => 'custom',
                ],
            ]
        );
        $this->add_control(
            'sa_unfold_title',
            $this->style,
            [
                'label'         => __('Title', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Unfold Left Alignmen',
                'condition' => [
                    'sa_unfold_title_on_off' => 'yes',
                    'sa_unfold_type' => 'custom',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_heading' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_unfold_title_heading',
            $this->style,
            [
                'label'         => __('Title Heading', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'h3',
                'options' => [
                    'h1' => 'H1',
                    'h2' => 'H2',
                    'h3' => 'H3',
                    'h4' => 'H4',
                    'h5' => 'H5',
                    'h6' => 'H6',
                ],
                'condition' => [
                    'sa_unfold_title_on_off' => 'yes',
                    'sa_unfold_type' => 'custom',
                ]
            ]
        );

        $this->add_control(
            'sa_unfold_content',
            $this->style,
            [
                'label'         => __('Content', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_editor_content' => '',
                ],
                'condition' => [
                    'sa_unfold_type' => 'custom',
                ],
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

        $this->add_control(
            'sa_unfold_button_unfold_text',
            $this->style,
            [
                'label'         => __('Unfold Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'description' => __('Please Save And Reload', SHORTCODE_ADDOONS),
                'default' => 'Show more',
            ]
        );
        $this->add_control(
            'sa_unfold_button_fold_text',
            $this->style,
            [
                'label'         => __('Fold Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'description' => __('Please Save And Reload', SHORTCODE_ADDOONS),
                'default' => 'Show less',
            ]
        );
        $this->add_control(
            'sa_unfold_button_icon',
            $this->style,
            [
                'label'         => __('Icon On', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_unfold_button_fold_icon',
            $this->style,
            [
                'label'         => __('Fold Icon', SHORTCODE_ADDOONS),
                'label' => __('Fold Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-arrow-up',
                'condition' => [
                    'sa_unfold_button_icon' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_unfold_button_unfold_icon',
            $this->style,
            [
                'label'         => __('Unfold Icon', SHORTCODE_ADDOONS),
                'label' => __('Unfold Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-arrow-down',
                'condition' => [
                    'sa_unfold_button_icon' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_unfold_button_icon_position',
            $this->style,
            [
                'label' => __('Icon Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'before',
                'options' => [
                    'before' => __('Before', SHORTCODE_ADDOONS),
                    'after' => __('After', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_unfold_button_icon' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_unfold_button_size',
            $this->style,
            [
                'label' => __('Button Size', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'sm',
                'options' => [
                    'sa_unfold_button_sm' => __('Small', SHORTCODE_ADDOONS),
                    'sa_unfold_button_md' => __('Medium', SHORTCODE_ADDOONS),
                    'sa_unfold_button_lg' => __('Large', SHORTCODE_ADDOONS),
                    'sa_unfold_button_block' => __('Block', SHORTCODE_ADDOONS),
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button' => '',
                ],

            ]
        );
        $this->add_control(
            'sa_unfold_button_position',
            $this->style,
            [
                'label' => __('Button Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'inside',
                'options' => [
                    'inside' => __('Inside', SHORTCODE_ADDOONS),
                    'outside' => __('Outside', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_button_align',
            $this->style,
            [
                'label' => __('Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => 'icon',
                'default' => 'center',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button_container' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Fade Effect Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_unfold_fade_effect',
            $this->style,
            [
                'label'         => __('Faded Content', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_unfold_fade_effect_height',
            $this->style,
            [
                'label' => __('Fade Height', SHORTCODE_ADDOONS),
                'description' => __('Increase or decrease fade height. The default value is 30px', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                        'step' => 1,
                    ],
                ],
                'condition' => [
                    'sa_unfold_fade_effect' => 'yes'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_gradient' => 'height: {{SIZE}}px;',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Advanced Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_unfold_fold_height_select',
            $this->style,
            [
                'label' => __('Fold Height Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'percent',
                'options' => [
                    'percent' => __('Percentage', SHORTCODE_ADDOONS),
                    'pixel' => __('Pixels', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_control(
            'sa_unfold_fold_height',
            $this->style,
            [
                'label' => __('Fold Height', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'description' => __('How much of the folded content should be shown, default is 60%', SHORTCODE_ADDOONS),
                'min' => 0,
                'default' => 60,
                'condition' => [
                    'sa_unfold_fold_height_select' => 'percent'
                ]
            ]
        );
        $this->add_control(
            'sa_unfold_fold_height_pix',
            $this->style,
            [
                'label' => __('Fold Height', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'description' => __('How much of the folded content should be shown, default is 100px', SHORTCODE_ADDOONS),
                'min' => 0,
                'default' => 100,
                'condition' => [
                    'sa_unfold_fold_height_select' => 'pixel'
                ]
            ]
        );
        $this->add_control(
            'sa_unfold_fold_dur_select',
            $this->style,
            [
                'label' => __('Fold Duration', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'fast',
                'options' => [
                    'slow' => __('Slow', SHORTCODE_ADDOONS),
                    'fast' => __('Fast', SHORTCODE_ADDOONS),
                    'custom' => __('Custom', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_control(
            'sa_unfold_fold_dur',
            $this->style,
            [
                'label' => __('Number of Seconds', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'description' => __('How much time does it take for the fold, default is 0.5s', SHORTCODE_ADDOONS),
                'min' => 0.1,
                'default' => 0.5,
                'condition' => [
                    'sa_unfold_fold_dur_select' => 'custom'
                ]
            ]
        );
        $this->add_control(
            'sa_unfold_fold_easing',
            $this->style,
            [
                'label' => __('Fold Easing', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'swing',
                'options' => [
                    'swing' => 'Swing',
                    'linear' => 'Linear',
                ],
            ]
        );
        $this->add_control(
            'sa_unfold_unfold_dur_select',
            $this->style,
            [
                'label' => __('Unfold Duration', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'fast',
                'options' => [
                    'slow' => 'Slow',
                    'fast' => 'Fast',
                    'custom' => 'Custom',
                ],
            ]
        );
        $this->add_control(
            'sa_unfold_unfold_dur',
            $this->style,
            [
                'label' => __('Number of Seconds', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'description' => __('How much time does it take for the unfold, default is 0.5s', SHORTCODE_ADDOONS),
                'min' => 0.1,
                'default' => 0.5,
                'condition' => [
                    'sa_unfold_unfold_dur_select' => 'custom'
                ]
            ]
        );
        $this->add_control(
            'sa_unfold_unfold_easing',
            $this->style,
            [
                'label' => __('Unfold Easing', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'description' => __('Choose the animation style', SHORTCODE_ADDOONS),
                'default' => 'swing',
                'options' => [
                    'swing' => 'Swing',
                    'linear' => 'Linear',
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
                'label' => esc_html__('Box Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_box_width',
            $this->style,
            [
                'label' => __('Max Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 150,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ],
                'separator' => TRUE,
            ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_unfold_box_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_container' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_box_border_normal',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_container' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa_unfold_box_boxshadow_normal',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_container' => '',
                ]
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();

        $this->add_group_control(
            'sa_unfold_box_background_h',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_container:hover' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_box_border_h',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_container:hover' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa_unfold_box_boxshadow_h',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_container:hover' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa_unfold_box_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
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
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_container' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_box_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
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
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_box_margin',
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
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Title Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_unfold_title_on_off' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_unfold_heading_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_heading' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_heading_typ',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_heading' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_heading_tex_sha',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_heading' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_heading_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_heading' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_heading_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_heading' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_heading_b_r',
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
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_heading' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_heading_padding',
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
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_heading_margin',
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
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Content Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_unfold_content_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_editor_content' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_content_typ',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_editor_content' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_content_tex_sha',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_editor_content' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_content_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_editor_content' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_content_padding',
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
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_editor_content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_content_margin',
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
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_editor_content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Button Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_button_icon_size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
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
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_unfold_button_icon' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_button_icon_spacing',
            $this->style,
            [
                'label' => __('Icon Spacing', SHORTCODE_ADDOONS),
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
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_before' => 'margin-right: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_after' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_unfold_button_icon' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            'sa_unfold_button_typ',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button' => '',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ],
                'separator' => TRUE,
            ]
        );
        $this->start_controls_tab();

        $this->add_control(
            'sa_unfold_button_color',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button_text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_unfold_button_icon_color',
            $this->style,
            [
                'label' => __('Icon Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_icon' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'sa_unfold_button_icon' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            'sa_unfold_button_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_button_border_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_button_box_sha',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button' => '',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_unfold_button_color_h',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button:hover .sa_unfold_button_text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_unfold_button_icon_color_h',
            $this->style,
            [
                'label' => __('Icon Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button:hover .sa_unfold_icon' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'sa_unfold_button_icon' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            'sa_unfold_button_background_h',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button:hover' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_button_border_h',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button:hover' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_button_border_b_r_h',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_button_box_sha_h',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button:hover' => '',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa_unfold_button_padding',
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
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_button_margin',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Fade Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_unfold_fade_effect' => 'yes'
                ]

            ]
        );
        $this->add_control(
            'sa_unfold_fade_effect_color',
            $this->style,
            [
                'label' =>  __('Fade Color', SHORTCODE_ADDOONS),
                'type' => Controls::GRADIENT,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_gradient' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_unfold_fade_effect_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_gradient' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_fade_effect_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_gradient' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_unfold_fade_effect_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
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
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_unfold_container_style_1 .sa_unfold_gradient' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
