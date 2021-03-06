<?php

namespace SHORTCODE_ADDONS_UPLOAD\Alert_box\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_5 extends AdminStyle {

    public function register_controls() {


        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'alertbox-settings' => esc_html__('Alert Box', SHORTCODE_ADDOONS),
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
        $this->add_responsive_control(
                'sa_ab_main_width', $this->style, [
            'label' => __('Max-Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 300,
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-box' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_main_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-box' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_main_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-box' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab__main_br_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );
        $this->add_group_control(
                'sa_ab_main_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-box' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->add_responsive_control(
                'sa_ab_main_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_main_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Text Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_ab_main_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Text', SHORTCODE_ADDOONS),
            'placeholder' => __('Text', SHORTCODE_ADDOONS),
            'default' => 'Click Here',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-text' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_main_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-text' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_ab_main_color', $this->style, [
            'label' => __('Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-text' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_mains_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-text' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_ab_main_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_ab_main_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_ab_icon_align', $this->style, [
            'label' => __('Icon Position', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-icon' => 'text-align: {{VALUE}};',
            ],
            'condition' => [
                'sa_ab_main_icon' => 'yes',
            ],
                ]
        );
        $this->add_control(
                'sa_ab_main_icon_class', $this->style, [
            'type' => Controls::ICON,
            'label' => __('Icon Class', SHORTCODE_ADDOONS),
            'placeholder' => __('Icon Class', SHORTCODE_ADDOONS),
            'default' => 'fas fa-mouse-pointer',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-icon .oxi-icons' => ''
            ],
            'condition' => [
                'sa_ab_main_icon' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_main_icon_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-icon .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_main_icon' => 'yes',
            ],
                ]
        );

        $this->add_control(
                'sa_ab_main_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-icon .oxi-icons' => 'color:{{VALUE}};'
            ],
            'condition' => [
                'sa_ab_main_icon' => 'yes',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_ab_main_icon_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_main_icon' => 'yes',
            ],
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'alertbox-settings'
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
                'sa_ab_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-row' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_br_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );
        $this->add_group_control(
                'sa_ab_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-row' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->add_responsive_control(
                'sa_ab_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-col-two' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-FI-DN' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal Icon', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Cross Icon', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_ab_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_ab_icon_class', $this->style, [
            'type' => Controls::ICON,
            'label' => __('Icon Class', SHORTCODE_ADDOONS),
            'placeholder' => __('Icon Class', SHORTCODE_ADDOONS),
            'default' => 'fas fa-exclamation-triangle',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-F-icon' => ''
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_icon_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-F-icon' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );

        $this->add_control(
                'sa_ab_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-F-icon' => 'color:{{VALUE}};'
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_icon_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-col-one' => ''
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_icon_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-F-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_ab_ci', $this->style, [
            'label' => __('Cross Icon', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_ab_ci_class', $this->style, [
            'type' => Controls::ICON,
            'label' => __('Icon Class', SHORTCODE_ADDOONS),
            'placeholder' => __('Icon Class', SHORTCODE_ADDOONS),
            'default' => 'fas fa-times',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-L-icon' => ''
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_ci_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-L-icon' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );

        $this->add_control(
                'sa_ab_ci_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-L-icon' => 'color:{{VALUE}};'
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_ci_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-col-three:hover' => ''
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_ci_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-L-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Body Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_ab_text', $this->style, [
            'label' => __('Text?', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
       
        $this->add_control(
                'sa_ab_content_header', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Header Text', SHORTCODE_ADDOONS),
            'placeholder' => __('Header Text', SHORTCODE_ADDOONS),
            'default' => 'ERROR',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-H' => ''
            ],
            'condition' => [
                'sa_ab_text' => 'yes',
            ],
                ]
        );
        $this->add_control(
                'sa_ab_content_description', $this->style, [
            'type' => Controls::TEXTAREA,
            'label' => __('Description', SHORTCODE_ADDOONS),
            'placeholder' => __('Description', SHORTCODE_ADDOONS),
            'default' => 'This a Error Message Box, Looks Pretty Slick',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-DC' => ''
            ],
            'condition' => [
                'sa_ab_text' => 'yes',
            ],
                ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Text Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_ab_text' => 'yes',
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'header_text' => esc_html__('Header', SHORTCODE_ADDOONS),
                'addresss' => esc_html__('Description', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_header_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-H' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_header_color', $this->style, [
            'label' => __('Header Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-H' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_header_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-H' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_header_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-H' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_description_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-DC' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_description_color', $this->style, [
            'label' => __('Description Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-DC' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_description_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-DC' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_description_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-FI-5 .oxi-addonsAL-FI-DC' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
