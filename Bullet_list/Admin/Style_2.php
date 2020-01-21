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

class Style_2 extends AdminStyle
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
            'sa_bullet_list_data_style_2',
            $this->style,
            [
                'label' => __('Bullet List Data', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'button' => 'Add New Item',
                'fields' => [
                    'sa_bl_text' => [
                        'label' => __('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Lorem Ipsum is simply dummy text',
                        'placeholder' => 'Lorem Ipsum is simply dummy text',
                    ],

                    'sa_bl_url' => [
                        'label' => __('URL', SHORTCODE_ADDOONS),
                        'controller' => 'add_group_control',
                        'type' => Controls::URL,
                        'default' => '',
                        'placeholder' => 'https://www.yoururl.com',
                    ],
                ],
                'title_field' => 'sa_bl_text',
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
                'separator' => TRUE,
                'default' => '',
                'options' => [
                    'auto' => [
                        'title' => __('Auto', SHORTCODE_ADDOONS),
                    ],
                    'max-width' => [
                        'title' => __('Daynamic', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .sa-bl-width-auto' => 'max-width:{{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa-bl-g-max-width-control' => 'max-width'
                ]
            ]
        );


        $this->add_responsive_control(
            'sa-bl-g-padding',
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
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 ol.oxi-addons-list-ol' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('List Number', SHORTCODE_ADDOONS),
                'showing' => TRUE,
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
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:before' => 'color:{{VALUE}};',
                ]
            ]
        );
        $this->add_control(
            'sa-bl-n-background',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'oparetor' => 'RGB',
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:before' => 'background:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa-bl-n-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:before' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-n-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:before' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-n-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:before' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-bl-n-padding',
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
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:before' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:hover:before' => 'color:{{VALUE}};',
                ]
            ]
        );
        $this->add_control(
            'sa-bl-n-hover-bg-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:hover:before' => 'background:{{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-n-hover-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:hover:before' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->start_controls_tab();


        $this->end_controls_tab();
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('List Content', SHORTCODE_ADDOONS),
                'showing' => TRUE,
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
            'sa-bl-lc-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-lc-bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-lc-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-lc-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-bl-lc-border-radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-bl-lc-padding',
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
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-bl-lc-margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oxi-addons-bullet-list-main-area .oxi-addons-list-type-1 li.oxi-addons-list-li' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa-bl-lc-hover-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:hover' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa-bl-lc-hover-bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:hover' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa-ac-opening-number',
            $this->style,
            [
                'label' => __('Scale', SHORTCODE_ADDOONS),
                'description' => __('Duration of transition between slides (in ms)', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::NUMBER,
                'default' => 10,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 .oxi-BL-link:hover' => 'transform: scale({{VALUE}});'
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
