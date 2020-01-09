<?php

namespace SHORTCODE_ADDONS_UPLOAD\Comparison_table\Admin;

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

class Style_1 extends AdminStyle {

    public function register_controls() {

        $this->start_section_header(
                'shortcode-addons-start-tabs',
                [
                    'options' => [
                        'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                        'style-settings' => esc_html__('Style', SHORTCODE_ADDOONS),
                        'button-settings' => esc_html__('Button', SHORTCODE_ADDOONS),
                    ]
                ]
        );
        $this->start_section_tabs(
                'shortcode-addons-start-tabs',
                [
                    'condition' => [
                        'shortcode-addons-start-tabs' => 'general-settings',
                    ]
                ]
        );



        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('General', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );

//        $this->add_control(
//                'sa_comparison_table_number',
//                $this->style,
//                [
//                    'type' => Controls::NUMBER,
//                    'label' => esc_html__('Number', SHORTCODE_ADDOONS),
//                    'default' => '2',
//                    'min' => '2',
//                    'max' => '10',
//                ]
//        );
        $this->add_control(
                'sa_comparison_table_tooltip_on_off', $this->style, [
            'label' => __('Enable Tooltip', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'no',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
            'loader' => TRUE,
                ]
        );

        $this->add_repeater_control(
                'sa_comparison_table_feature_data',
                $this->style,
                [
                    'label' => __('Features', SHORTCODE_ADDOONS),
                    'type' => Controls::REPEATER,
                    'fields' => [
                        'sa_comparison_table_feature_text' => [
                            'label' => esc_html__('Features', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'placeholder' => 'Enter your feature',
                            'default' => 'Feature',
                            'selector' => [
                                '{{WRAPPER}} .oa_ac_style_' . $this->oxiid . '_{{KEY}} .heading-data' => '',
                            ],
                        ],
                        'sa_comparison_table_feature_tooltip_text' => [
                            'label' => esc_html__('Tooltip', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'placeholder' => 'Tooltip Text',
                            'default' => 'Tooltip',
                            'selector' => [
                                '{{WRAPPER}} .oa_ac_style_' . $this->oxiid . '_{{KEY}} .heading-data' => '',
                            ],
                        ],
                    ],
                    'title_field' => 'sa_comparison_table_feature_text',
                    'button' => 'Add New Feature',
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_animation',
                $this->style,
                [
                    'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Row Style', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_comparison_table_row_odd_color',
                $this->style,
                [
                    'label' => __('Odd Row Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'selector' => [
                        '{{WRAPPER}}  tr:nth-child(even)' => 'background: {{VALUE}};',
                    ]
                ]
        );
        $this->add_control(
                'sa_comparison_table_row_even_color',
                $this->style,
                [
                    'label' => __('Even Row Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#FDFDFD',
                    'selector' => [
                        '{{WRAPPER}}  tr:nth-child(odd)' => 'background: {{VALUE}};',
                    ]
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_row_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-wrapper table tr td:first-child' => '',
                        '{{WRAPPER}} .oxi-ct-wrapper td,{{WRAPPER}} .oxi-ct-wrapper td' => '',
                        '{{WRAPPER}} .oxi-ct-wrapper th' => '',
                    ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Feature Box', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_box_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-feature' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_box_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(0, 113, 189, 1.00)',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-feature' => 'background: {{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_feature_box_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-feature' => ' ',
                    ],
                ]
        );

        $this->add_control(
                'sa_comparison_table_feature_box_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'left',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-ct-feature' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_comparison_table_feature_box_padding',
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
                        '{{WRAPPER}} .oxi-ct-feature' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_box_tooltip', $this->style, [
            'label' => __('Tooltip', SHORTCODE_ADDOONS),
            'type' => Controls::HEADING,
            'separator' => TRUE,
                ]
        );


        $this->add_control(
                'sa_comparison_table_feature_box_tooltip_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-wrapper .tooltip .tooltiptext' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_box_tooltip_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(0, 113, 189, 1.00)',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-wrapper .tooltip .tooltiptext' => 'background-color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-ct-wrapper .tooltip .tooltiptext::before' => 'border-top-color: {{VALUE}};',
                    ],
                ]
        );

        $this->add_group_control(
                'sa_comparison_table_feature_box_tooltip_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-wrapper .tooltip .tooltiptext' => ' ',
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_comparison_table_feature_box_tooltip_padding',
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
                        '{{WRAPPER}} .oxi-ct-wrapper .tooltip .tooltiptext' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                        'shortcode-ss-addons-start-tabs' => 'style-settings'
                    ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Ribbon', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );

        $this->add_responsive_control(
                'sa_comparison_table_feature_box_ribbon_distance',
                $this->style,
                [
                    'label' => __('Distance', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 30,
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
                            'step' => 0.1,
                        ],
                        'rem' => [
                            'min' => 0,
                            'max' => 100,
                            'step' => 0.1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}}  .oxi-ct-ribbons-yes .oxi-ct-ribbons-wrapper span.oxi-ct-ribbons-inner' => 'margin-top: {{SIZE}}{{UNIT}};',
                    ],
                ]
        );

        $this->add_control(
                'sa_comparison_table_feature_box_ribbon_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-ribbons-yes .oxi-ct-ribbons-wrapper span.oxi-ct-ribbons-inner' => 'color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-ct-ribbons-yes .oxi-ct-ribbons-wrapper-top' => 'color: {{VALUE}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_box_ribbon_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(0, 113, 189, 1.00)',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-ribbons-yes .oxi-ct-ribbons-wrapper span.oxi-ct-ribbons-inner' => 'background: {{VALUE}};',
                        '{{WRAPPER}} .oxi-ct-ribbons-yes .oxi-ct-ribbons-wrapper-top' => 'background: {{VALUE}};',],
                ]
        );

        $this->add_group_control(
                'sa_comparison_table_feature_box_ribbon_bg_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}}  .oxi-ct-ribbons-yes .oxi-ct-ribbons-wrapper span.oxi-ct-ribbons-inner' => ' ',
                        '{{WRAPPER}} .oxi-ct-ribbons-yes .oxi-ct-ribbons-wrapper-top' => ' ',
                    ],
                ]
        );

        $this->add_group_control(
                'sa_comparison_table_feature_box_ribbon_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}}  .oxi-ct-ribbons-yes .oxi-ct-ribbons-wrapper span.oxi-ct-ribbons-inner ' => '',
                        '{{WRAPPER}}  .oxi-ct-ribbons-yes .oxi-ct-ribbons-wrapper-top ' => '',
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_comparison_table_feature_box_ribbon_padding',
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
                        '{{WRAPPER}} .oxi-ct-ribbons-yes .oxi-ct-ribbons-wrapper span.oxi-ct-ribbons-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .oxi-ct-ribbons-yes .oxi-ct-ribbons-wrapper-top' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_responsive_control(
                'sa_comparison_table_feature_box_heading_height',
                $this->style,
                [
                    'label' => __('Height', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 30,
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
                            'step' => 0.1,
                        ],
                        'rem' => [
                            'min' => 0,
                            'max' => 100,
                            'step' => 0.1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-heading' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_box_heading_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-heading' => 'color:{{VALUE}};'
                    ],
                ]
        );

        $this->add_control(
                'sa_comparison_table_feature_box_heading_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(0, 113, 189, 1.00)',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-heading' => 'background:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_feature_box_heading_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-heading' => '',
                    ],
                ]
        );

        $this->add_control(
                'sa_comparison_table_feature_box_heading_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-ct-heading' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_comparison_table_feature_box_heading_padding',
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
                        '{{WRAPPER}} .oxi-ct-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Price', SHORTCODE_ADDOONS),
                ]
        );

        $this->add_control(
                'sa_comparison_table_original_price', $this->style, [
            'label' => __('Original Price', SHORTCODE_ADDOONS),
            'type' => Controls::HEADING,
            'separator' => TRUE,
                ]
        );
        $this->add_control(
                'sa_comparison_table_original_price_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#3d3d3d',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-ct-original-price' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_original_price_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-original-price' => ' ',
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_original_price_ver_alignment',
                $this->style,
                [
                    'label' => __('Vertical Align', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'operator' => Controls::OPERATOR_ICON,
                    'default' => 'center',
                    'options' => [
                        'flex-start' => [
                            'title' => __('Top', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-sort-amount-up',
                        ],
                        'center' => [
                            'title' => __('Middle', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-exchange-alt',
                        ],
                        'flex-end' => [
                            'title' => __('Right', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-sort-amount-down',
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-original-price' => 'align-self:{{VALUE}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_currency', $this->style, [
            'label' => __('Currency Price', SHORTCODE_ADDOONS),
            'type' => Controls::HEADING,
            'separator' => TRUE,
                ]
        );
        $this->add_control(
                'sa_comparison_table_currency_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#3d3d3d',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-currency' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_currency_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-currency' => ' ',
                    ],
                ]
        );

        $this->add_control(
                'sa_comparison_table_currency_ver_alignment',
                $this->style,
                [
                    'label' => __('Vertical Align', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'operator' => Controls::OPERATOR_ICON,
                    'default' => 'center',
                    'options' => [
                        'flex-start' => [
                            'title' => __('Top', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-sort-amount-up',
                        ],
                        'center' => [
                            'title' => __('Middle', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-exchange-alt',
                        ],
                        'flex-end' => [
                            'title' => __('Right', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-sort-amount-down',
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}}   .oxi-ct-currency' => 'align-self:{{VALUE}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_price', $this->style, [
            'label' => __('Price', SHORTCODE_ADDOONS),
            'type' => Controls::HEADING,
            'separator' => TRUE,
                ]
        );
        $this->add_control(
                'sa_comparison_table_price_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#3d3d3d',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-price' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_price_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-price' => ' ',
                    ],
                ]
        );

        $this->add_control(
                'sa_comparison_table_fractional_price', $this->style, [
            'label' => __('Fractional', SHORTCODE_ADDOONS),
            'type' => Controls::HEADING,
            'separator' => TRUE,
                ]
        );
        $this->add_control(
                'sa_comparison_table_price_fractional_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#3d3d3d',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-fractional-price' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_price_fractional_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-fractional-price' => ' ',
                    ],
                ]
        );

        $this->add_control(
                'sa_comparison_table_price_fractional_ver_alignment',
                $this->style,
                [
                    'label' => __('Vertical Align', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'operator' => Controls::OPERATOR_ICON,
                    'default' => 'center',
                    'options' => [
                        'flex-start' => [
                            'title' => __('Top', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-sort-amount-up',
                        ],
                        'center' => [
                            'title' => __('Middle', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-exchange-alt',
                        ],
                        'flex-end' => [
                            'title' => __('Right', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-sort-amount-down',
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}}   .oxi-ct-fractional-price' => 'align-self:{{VALUE}};',
                    ],
                ]
        );

        $this->add_control(
                'sa_comparison_table_duration', $this->style, [
            'label' => __('Duration', SHORTCODE_ADDOONS),
            'type' => Controls::HEADING,
            'separator' => TRUE,
                ]
        );
        $this->add_control(
                'sa_comparison_table_duration_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#3d3d3d',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-duration' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_duration_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-duration' => ' ',
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_price_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(0, 113, 189, 1.00)',
                    'oparetor' => 'RGB',
                    'separator' => TRUE,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-plan' => 'background:{{VALUE}};'
                    ],
                ]
        );

        $this->add_control(
                'sa_comparison_table_price_align', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-ct-price-wrapper' => 'justify-content: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_comparison_table_price_padding',
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
                        '{{WRAPPER}} .oxi-ct-plan' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Features', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_comparison_table_features_text_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-txt' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_features_text_check_color',
                $this->style,
                [
                    'label' => __('Check Icon Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-wrapper i.fa.fa-check' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_features_text_close_color',
                $this->style,
                [
                    'label' => __('Close Icon Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-wrapper i.fas.fa-times' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_features_text_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(0, 113, 189, 1.00)',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-txt' => 'background:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_features_text_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-txt' => ' ',
                    ],
                ]
        );

        $this->add_control(
                'sa_comparison_table_features_text_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-ct-txt' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_comparison_table_features_text_padding',
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
                        '{{WRAPPER}} .oxi-ct-txt' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                        'shortcode-addons-start-tabs' => 'button-settings',
                    ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Button', SHORTCODE_ADDOONS),
                    'showing' => TRUE
                ]
        );
        $this->add_control(
                'sa_comparison_table_button_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-btn' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_button_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(0, 113, 189, 1.00)',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-btn' => 'background:{{VALUE}};'
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_button_col_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(0, 113, 189, 1.00)',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} tr:last-child td' => 'background-color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_button_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-btn' => ' ',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_button_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-ct-btn ' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_comparison_table_button_border_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-ct-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_comparison_table_button_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-ct-btn' => ''
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_comparison_table_button_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-ct-btn' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function modal_opener() {
        $this->add_substitute_control('', [], [
            'type' => Controls::MODALOPENER,
            'title' => __('Add New Table', SHORTCODE_ADDOONS),
            'sub-title' => __('Add New Table', SHORTCODE_ADDOONS),
            'showing' => TRUE,
        ]);
    }

    public function modal_form_data() {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">DataTable Table Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">';
//        if (array_key_exists('sa_comparison_table_feature_data', $this->style)) :
//            foreach ($this->style['sa_comparison_table_feature_data'] as $key => $value) {
//                foreach ($value as $keys => $values) {

        $this->add_control(
                'sa_comparison_table_feature_modal_text',
                $this->style,
                [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Our Plan',
                    'placeholder' => 'Enter table title',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__heading' => ''
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_modal_currency',
                $this->style,
                [
                    'label' => __('Currency Symbol', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => '$',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__heading' => ''
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_modal_price',
                $this->style,
                [
                    'label' => __('Price', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => '39.99',
                    'placeholder' => 'Enter Plan Price',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__heading' => ''
                    ],
                ]
        );

        $this->add_control(
                'sa_comparison_table_offer_dis_on_off', $this->style, [
            'label' => __('Offering Discount', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'no',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_modal_original_price',
                $this->style,
                [
                    'label' => __('Original Price', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => '49.99',
                    'placeholder' => 'Enter Original Price',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__heading' => ''
                    ],
                    'condition' => [
                        'sa_comparison_table_offer_dis_on_off' => 'yes',
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_modal_duration',
                $this->style,
                [
                    'label' => __('Duration', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'placeholder' => 'Duration',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__heading' => ''
                    ],
                ]
        );


        $this->add_control(
                'sa_comparison_table_ribbon_on_off', $this->style, [
            'label' => __('Ribbon', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'no',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_ribbon_text',
                $this->style,
                [
                    'label' => __('Ribbon Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'placeholder' => 'Ribbon Text',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__heading' => ''
                    ],
                    'condition' => [
                        'sa_comparison_table_ribbon_on_off' => 'yes',
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_ribbon_position',
                [],
                [
                    'label' => __('Position', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'operator' => Controls::OPERATOR_ICON,
                    'options' => [
                        'left' => [
                            'title' => __('Left', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-long-arrow-alt-left',
                        ],
                        'center' => [
                            'title' => __('Top', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-long-arrow-alt-up',
                        ],
                        'right' => [
                            'title' => __('Right', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-long-arrow-alt-right',
                        ],
                    ],
                    'default' => 'left',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_main' => 'justify-content: {{VALUE}};'
                    ],
                    'condition' => [
                        'sa_comparison_table_ribbon_on_off' => 'yes',
                    ],
                ]
        );
        $this->add_control(
                'sa_comparison_table_feature_button_text',
                $this->style,
                [
                    'label' => __('Button Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'placeholder' => 'Button Text',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__heading' => ''
                    ],
                ]
        );

        $this->add_group_control(
                'sa_comparison_table_feature_button_link', $this->style, [
            'type' => Controls::URL,
            'loader' => TRUE,
                ]
        );

        $this->add_repeater_control(
                'sa_comparison_table_features_modal_data',
                $this->style,
                [
                    'label' => __('Features', SHORTCODE_ADDOONS),
                    'type' => Controls::REPEATER,
                    'fields' => [
                        'sa_comparison_table_features_modal_title' => [
                            'label' => esc_html__('Item Title', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'default' => esc_html__('Item 1', SHORTCODE_ADDOONS),
                            'selector' => [
                                '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-1-{{KEY}} .oxi-addons-price-title' => '',
                            ],
                        ],
                        'sa_comparison_table_feature_tooltip_type' => [
                            'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                            'type' => Controls::CHOOSE,
                            'operator' => Controls::OPERATOR_ICON,
                            'placeholder' => 'Enter Your Feature',
                            'options' => [
                                'fa fa-check' => [
                                    'title' => __('Yes', SHORTCODE_ADDOONS),
                                    'icon' => 'fa fa-check',
                                ],
                                'fas fa-times' => [
                                    'title' => __('No', SHORTCODE_ADDOONS),
                                    'icon' => 'fas fa-times',
                                ],
                                'text' => [
                                    'title' => __('Text', SHORTCODE_ADDOONS),
                                    'icon' => 'fa fa-font',
                                ],
                            ],
                            'selector' => [
                                '{{WRAPPER}} .oa_ac_style_' . $this->oxiid . '_{{KEY}} .heading-data' => '',
                            ],
                        ],
                        'sa_comparison_table_feature_feature_text' => [
                            'label' => esc_html__('Feature', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'default' => esc_html__('Enter Your Feature', SHORTCODE_ADDOONS),
                            'selector' => [
                                '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-1-{{KEY}} .oxi-addons-price-title' => '',
                            ],
                            'conditional' => Controls::INSIDE,
                            'condition' => [
                                'sa_comparison_table_feature_tooltip_type' => 'text',
                            ],
                        ],
                    ],
                    'title_field' => 'sa_comparison_table_features_modal_title',
                    'button' => 'Add New Item',
                ]
        );

//        $this->add_control(
//                'sa_datatable_modal_' . $key,
//                [],
//                [
//                    'label' => __('Content', SHORTCODE_ADDOONS),
//                    'type' => Controls::CHOOSE,
//                    'operator' => Controls::OPERATOR_ICON,
//                    'options' => [
//                        'flex-start' => [
//                            'title' => __('Yes', SHORTCODE_ADDOONS),
//                            'icon' => 'fa fa-check',
//                        ],
//                        'center' => [
//                            'title' => __('No', SHORTCODE_ADDOONS),
//                            'icon' => 'fas fa-times',
//                        ],
//                        'flex-end' => [
//                            'title' => __('Text', SHORTCODE_ADDOONS),
//                            'icon' => 'fa fa-font',
//                        ],
//                    ],
//                    'selector' => [
//                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_main' => 'justify-content: {{VALUE}};'
//                    ],
//                ]
//        );
//                }
//            }
//        endif;

        echo '</div>';
    }

}
