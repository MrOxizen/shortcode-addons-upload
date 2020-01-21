<?php

namespace SHORTCODE_ADDONS_UPLOAD\Bullet_list\Admin;

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
                    'general-settings' => esc_html__('Bullet List Settings', SHORTCODE_ADDOONS),
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
        $this->add_repeater_control(
            'sa_bullet_list_data_style_4',
            $this->style,
            [
                'label' => __('Bullet List Data', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'button' => 'Add New Item',
                'fields' => [
                    'sa_bl_four_icon' => [
                        'label' => __('Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fas fa-brain',
                        'placeholder' => '',
                    ],
                    'sa_bl_four_text' => [
                        'label' => __('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Lorem Ipsum is simply dummy text',
                        'placeholder' => 'Lorem Ipsum is simply dummy text',
                    ],
                    'sa_bl_four_textarea' => [
                        'label' => __('Short Details', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => 'When you visit our site, pre-selected companies may access',
                        'placeholder' => '',
                    ]
                ],
                'title_field' => 'sa_bl_four_text',
            ]
        );
        $this->add_control(
            'sa-bl-g-arrow-position',
            $this->style,
            [
                'label' => __('Arrow Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'separator' => TRUE,
                'operator' => Controls::OPERATOR_TEXT,
                //   'loader' => TRUE,
                'default' => '0',
                'options' => [
                    '0' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                    ],
                    '1' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-icon' => 'order:{{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sa-bl-g-max-width-control',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'loader' => TRUE,
                'default' => '',
                'options' => [
                    'auto' => [
                        'title' => __('Auto', SHORTCODE_ADDOONS),
                    ],
                    'max-width' => [
                        'title' => __('Dynamic', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-bl-g-max-width',
            $this->style,
            [
                'label' => __('Max Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 500,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .sa-bl-width-auto' => 'max-width:{{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa-bl-g-max-width-control' => 'max-width'
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-g-full-bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .oxi-icon-last' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-bl-g-cont-space',
            $this->style,
            [
                'label' => __('Box Space', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .oxi-addons-box' => 'padding-bottom:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-bl-g-padding',
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
                        'max' => 500,
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
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .oxi-icon-last' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-bl-g-margin',
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
                        'max' => 500,
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
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Arrow Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
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
            'sa-bl-n-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon .oxi-icons' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-arrow-bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon .oxi-icons' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-n-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon .oxi-icons' => '',
                ]
            ]
        );




        $this->end_controls_tab();

        $this->start_controls_tab();

        $this->add_control(
            'sa-bl-n-hover-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list:hover .oxi-addons-content-boxes-icon .oxi-icons' => 'color:{{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-arrow-hover-bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list:hover .oxi-addons-content-boxes-icon .oxi-icons' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-n-hover-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list:hover .oxi-addons-content-boxes-icon .oxi-icons' => '',
                ]
            ]
        );


        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa-bl-arrow-size',
            $this->style,
            [
                'separator' => TRUE,
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon .oxi-icons' => 'width:{{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa-bl-arrow-width',
            $this->style,
            [
                'label' => __('Arrow Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon .oxi-icons' => 'width:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-bl-arrow-height',
            $this->style,
            [
                'label' => __('Arrow Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon .oxi-icons' => 'height:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa-bl-n-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon .oxi-icons' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-bl-n-border-radius',
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
                        'max' => 500,
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
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon .oxi-icons' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-bl-n-padding',
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
                        'max' => 500,
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
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon .oxi-icons' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-bl-arrow-separetor',
            $this->style,
            [
                'separator' => TRUE,
                'label' => __('Separetor size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon:after, .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon:before' => 'border-left:{{SIZE}}{{UNIT}} solid;',
                ],
            ]
        );
        $this->add_control(
            'sa-bl-separetor-color',
            $this->style,
            [
                'label' => __('Separetor Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon:before' => 'border-color:{{VALUE}};',
                    '{{WRAPPER}} .oxi-addons-content-boxes-list .oxi-addons-content-boxes-icon:after ' => 'border-color:{{VALUE}};',
                ]
            ]
        );
        $this->start_controls_tab();


        $this->end_controls_tab();
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
            'sa-bl-heading-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .oxi-addons-content-boxes-heading' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-heading-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .oxi-addons-content-boxes-heading' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-heading-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .oxi-addons-content-boxes-heading' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-bl-heading-padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .oxi-addons-content-boxes-heading' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Description Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa-bl-description-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .oxi-addons-content-boxes-content' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-description-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .oxi-addons-content-boxes-content' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-description-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .oxi-addons-content-boxes-content' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-bl-description-padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .oxi-addons-content-boxes-content' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
