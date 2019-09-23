<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Tabs\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_6
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_6 extends AdminStyle
{

    public function register_controls()
    {

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'style-settings' => esc_html__('Content&Icon Settings', SHORTCODE_ADDOONS),
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

        $all_initial = [];
        $i = 0;
        foreach ($this->child as $value) :
            $all_value = json_decode(stripcslashes($value['rawdata']), true);
            $all_initial[$i] =  $all_value['sa_tabs_h_text'];
            $i++;
        endforeach;
        $this->add_control(
            'sa_tabs_initial',
            $this->style,
            [
                'label' => __('Tabbing Initial', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => '0',
                'options' => $all_initial,
            ]
        );
        $this->add_control(
            'sa_tabs_tab_anim',
            $this->style,
            [
                'label' => __('Tabbing Animation', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'slide',
                'options' => [
                    'slide' => __('Slide', SHORTCODE_ADDOONS),
                    'fade' => __('Fade', SHORTCODE_ADDOONS),

                ],
            ]
        );


        $this->add_control(
            'sa_tabs_tab_fix_header',
            $this->style,
            [
                'label' => __('Fixed Header', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'fix_header',
            ]
        );
        $this->add_control(
            'sa_tabs_tab_fix_h_offset',
            $this->style,
            [
                'label' => __('Header Fix Offset', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 20,
                'loader' => TRUE,
                'condition' => [
                    'sa_tabs_tab_fix_header' => 'fix_header'
                ]
            ]
        );

        $this->add_control(
            'sa_tabs_tab_icon_show',
            $this->style,
            [
                'label' => __('Icon Setting Enable', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'show_icon_setting',
            ]
        );
        $this->add_responsive_control(
            'sa_tabs_margin',
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
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}}  .sa-addons-tabs-main-wrapper-style-6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Heading Body Setting', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_tabs_headding_body_align',
            $this->style,
            [
                'label' => __('Heading Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'toggle' => TRUE,
                'default' => 'flex-start',
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-main-tab-header' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_tabs_headding_body_mar',
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
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-main-tab-header' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Tab Headding Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_tabs_headding_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header' => ''
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    'active' => esc_html__('Active', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_tabs_headding_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#499be3',
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_tabs_headding_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header' => '',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_tabs_headding_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header' => '',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_tabs_headding_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header' => '',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two' => '',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_tabs_headding_c_h',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#636363',
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_tabs_headding_bg_h',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header:hover' => '',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two:hover' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_tabs_headding_border_h',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header:hover' => '',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two:hover' => '',
                ],
                ]
            );
            $this->add_group_control(
                'sa_tabs_headding_boxshadow_h',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header:hover' => '',
                        '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two:hover' => '',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_tabs_headding_c_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#636363',
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header.sa-active' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two.sa-active' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_tabs_headding_bg_a',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header.sa-active' => '',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two.sa-active' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_tabs_headding_border_a',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header.sa-active' => '',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two.sa-active' => '',
                ],
                ]
            );
            $this->add_group_control(
                'sa_tabs_headding_boxshadow_a',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header.sa-active' => '',
                        '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two.sa-active' => '',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_tabs_headding_border_r',
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
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_tabs_headding_padding',
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
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_tabs_headding__mar',
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
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header-two' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_tabs_content_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-body' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_tabs_content_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#858585',
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-body' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_tabs_content_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-body' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_tabs_content_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-body' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_tabs_content_padding',
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
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_tabs_content_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-body' => ''
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_tabs_tab_icon_show' => 'show_icon_setting',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_tabs_headding_icon_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '17',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
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
                    '{{WRAPPER}}  .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header .sa_tabs_icon .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    'active' => esc_html__('Active', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_tabs_headding_icon_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#499be3',
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header .sa_tabs_icon .oxi-icons' => 'color: {{VALUE}};'
                ],
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_tabs_headding_icon_c_h',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#636363',
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header:hover .sa_tabs_icon .oxi-icons' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_tabs_headding_icon_c_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#636363',
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa-addons-header.sa-active .sa_tabs_icon .oxi-icons' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_tabs_headding_icon_style',
            $this->style,
            [
                'label' => __('Icon Separator', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'inline-block',
                'options' => [
                    'inline-block' => __('inline-block', SHORTCODE_ADDOONS),
                    'block' => __('Block', SHORTCODE_ADDOONS),

                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa_tabs_icon' => 'display: {{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_tabs_headding_icon_posi',
            $this->style,
            [
                'label' => __('Icon Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                Controls::SEPARATOR => TRUE,
                'loader' => TRUE,
                'toggle' => TRUE,
                'default' => 'left',
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
                'condition' => [
                    'sa_tabs_headding_icon_style' => 'inline-block',
                ]
            ]
        );
        $this->add_control(
            'sa_tabs_headding_icon_posi_block',
            $this->style,
            [
                'label' => __('Icon Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                Controls::SEPARATOR => TRUE,
                'loader' => TRUE,
                'toggle' => TRUE,
                'default' => 'top',
                'options' => [
                    'top' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-angle-double-up',
                    ],
                    'bottom' => [
                        'title' => __('Bottom', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-angle-double-down',
                    ],
                ],
                'condition' => [
                    'sa_tabs_headding_icon_style' => 'block',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_tabs_headding_icon_padding',
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
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-tabs-main-wrapper-style-6 .sa_tabs_icon .oxi-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
    public function modal_opener()
    {
        $this->add_substitute_control('', [], [
            'type' => Controls::MODALOPENER,
            'title' => __('Add New Tabs', SHORTCODE_ADDOONS),
            'sub-title' => __('Open Tabs Form', SHORTCODE_ADDOONS),
            'showing' => TRUE,
        ]);
    }

    public function modal_form_data()
    {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Tabs Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">';

        $this->add_control(
            'sa_tabs_tab_icon_on_off',
            $this->style,
            [
                'label' => __('Icon Show', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'icon_yes',
            ]
        );
        $this->add_control(
            'sa_tabs_tab_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-apple-alt',
                'condition' => [
                    'sa_tabs_tab_icon_on_off' => 'icon_yes',
                ]
            ]
        );
        $this->add_control(
            'sa_tabs_h_text',
            $this->style,
            [
                'label' => __('Heading', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Default Title',
                'placeholder' => 'Your Heading Here',
            ]
        );

        $this->add_control(
            'sa_tabs_content',
            $this->style,
            [
                'label' => __('Content', SHORTCODE_ADDOONS),
                'type' => Controls::WYSIWYG,
                'default' => 'unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'placeholder' => 'Your Content Here',
            ]
        );
        $this->add_control(
            'sa_tabs_url_open',
            $this->style,
            [
                'label' => __('Link Active', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'link_show',
            ]
        );
        $this->add_group_control(
            'sa_tabs_url',
            $this->style,
            [
                'type' => Controls::URL,
                'loader' => TRUE,
                'condition' => [
                    'sa_tabs_url_open' => 'link_show',
                ],
            ]
        );
        echo '</div>';
    }
}
