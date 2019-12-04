<?php

namespace OXI_FLIP_BOX_PLUGINS\Admin;

/**
 * Description of Style1
 *
 * @author biplo
 */
use OXI_FLIP_BOX_PLUGINS\Page\Admin_Render;
use OXI_FLIP_BOX_PLUGINS\Classes\Controls as Controls;

class Style7 extends Admin_Render {

    public function register_controls() {

        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', OXI_FLIP_BOX_TEXTDOMAIN),
                'front' => esc_html__('Front', OXI_FLIP_BOX_TEXTDOMAIN),
                'backend' => esc_html__('Backend', OXI_FLIP_BOX_TEXTDOMAIN),
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
            'label' => esc_html__('General Settings', OXI_FLIP_BOX_TEXTDOMAIN),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa-flip-boxes-col', $this->style, [
            'type' => Controls::COLUMN,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-flip-box-col-style-7' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-ac-flip_boxes_flip_direction', $this->style, [
            'label' => __('Flip Direction', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'separator' => TRUE,
            'default' => 'oxi-addons-flip-box-flip-top-to-bottom',
            'options' => [
                'oxi-addons-flip-box-flip-top-to-bottom' => __('Top To Bottom', OXI_FLIP_BOX_TEXTDOMAIN),
                'oxi-addons-flip-box-flip-bottom-to-top' => __('Bottom To Top', OXI_FLIP_BOX_TEXTDOMAIN),
                'oxi-addons-flip-box-flip-left-to-right' => __('Left To Right', OXI_FLIP_BOX_TEXTDOMAIN),
                'oxi-addons-flip-box-flip-right-to-left' => __('Right To Left', OXI_FLIP_BOX_TEXTDOMAIN),
            ],
                ]
        );
        $this->add_control(
                'sa-ac-flip_boxes_flip_effects', $this->style, [
            'label' => __('Flip Effects', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'default' => 'easing_easeInOutExpo',
            'options' => [
                'easing_easeInOutExpo' => __('EaseOutBack', OXI_FLIP_BOX_TEXTDOMAIN),
                'easing_easeInOutCirc' => __('EaseInOutExpo', OXI_FLIP_BOX_TEXTDOMAIN),
                'easing_easeOutBack' => __('EaseInOutCirc', OXI_FLIP_BOX_TEXTDOMAIN),
            ],
                ]
        );
        $this->add_control(
                'sa-flip-boxes-flip_time', $this->style, [
            'label' => __('Flipping Time', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 0.5,
            ],
            'range' => [
                'px' => [
                    'min' => 0.1,
                    'max' => 10,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 *' => 'transition: all {{SIZE}}s ease-in-out !important;',
            ],
                ]
        );
        $this->add_group_control(
                'sa-flip-boxes-animation', $this->style, [
            'type' => Controls::ANIMATION,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-flip-box-col-style-7' => '',
            ]
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Style', OXI_FLIP_BOX_TEXTDOMAIN),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa-flip-boxes-width', $this->style, [
            'label' => __('Width', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 280,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 2000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-flip-boxes-height', $this->style, [
            'label' => __('Height', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 300,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 1000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-boxes-body:after ' => 'padding-bottom:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-flip-boxes-border-radius', $this->style, [
            'label' => __('Border Radius', OXI_FLIP_BOX_TEXTDOMAIN),
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
                    'max' => 200,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-style-1' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-style-1' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-flip-boxes-margin', $this->style, [
            'label' => __('Margin', OXI_FLIP_BOX_TEXTDOMAIN),
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
                    'max' => 200,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} ..oxi-addons-flip-box-style-7' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', OXI_FLIP_BOX_TEXTDOMAIN),
                'hover' => esc_html__('Hover', OXI_FLIP_BOX_TEXTDOMAIN),
            ]
                ]
        );

        $this->start_controls_tab();
        $this->add_group_control(
                'sa-flip-boxes-boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-section' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa-flip-boxes-hover-boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-section' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();



        $this->end_controls_section();

        $this->end_section_devider();


        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'front'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Settings', OXI_FLIP_BOX_TEXTDOMAIN),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa-flip-box-front-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-section' => '',
            ]
                ]
        );

        $this->add_group_control(
                'sa-flip-box-front-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-section' => '',
            ]
                ]
        );


        $this->add_responsive_control(
                'sa-ib-content-font-box-margin', $this->style, [
            'label' => __('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 2000,
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
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Settings', OXI_FLIP_BOX_TEXTDOMAIN),
            'showing' => FALSE,
                ]
        );
        $this->add_responsive_control(
                'sa-flip-boxes-front-icon-width', $this->style, [
            'label' => __('Width', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 60,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 2000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon .oxi-icons' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa-flip-boxex-front-icon-size', $this->style, [
            'label' => __('Icon Size', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 30,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_group_control(
                'sa-flip-boxex-front-icon-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon .oxi-icons' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-flip-boxex-front-icon-color', $this->style, [
            'label' => __('Color', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::COLOR,
            'default' => '#595959',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon .oxi-icons' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-flip-box-front-icon-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon .oxi-icons' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa-flip-boxes-front-icon-border-radius', $this->style, [
            'label' => __('Border Radius', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 11,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon .oxi-icons' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-flip-boxes-front-icon-margin', $this->style, [
            'label' => __('Margin', OXI_FLIP_BOX_TEXTDOMAIN),
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
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Heading Settings', OXI_FLIP_BOX_TEXTDOMAIN),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa-flip-box-front-heading-color', $this->style, [
            'label' => __('Color', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-headding' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-flip-box-front-heading-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-headding' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-flip-box-front-heading-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-headding' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa-flip-box-front-heading-padding', $this->style, [
            'label' => __('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 1,
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
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-headding' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Front Info Settings', OXI_FLIP_BOX_TEXTDOMAIN),
            'showing' => FALSE,
                ]
        );

        $this->add_control(
                'sa-flip-box-front-info-color', $this->style, [
            'label' => __('Color', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-info' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-flip-box-front-info-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-info' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-flip-box-front-info-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-info' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa-flip-box-front-info-padding', $this->style, [
            'label' => __('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 1,
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
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-info' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'backend'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Settings', OXI_FLIP_BOX_TEXTDOMAIN),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa-flip-box-back-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-section' => '',
            ]
                ]
        );

        $this->add_group_control(
                'sa-flip-box-back-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-section' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa-flip-boxes-back-padding', $this->style, [
            'label' => __('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 1,
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
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Short Description', OXI_FLIP_BOX_TEXTDOMAIN),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa-flip-box-back-short-description-color', $this->style, [
            'label' => __('Color', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-info' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-flip-box-back-short-description-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-info' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-flip-box-back-short-description-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-info' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa-flip-box-back-short-description-padding', $this->style, [
            'label' => __('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 1,
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
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-info' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Button Typography', OXI_FLIP_BOX_TEXTDOMAIN),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa-flip-box-backend-button-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data' => '',
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button' => '',
            ]
                ]
        );

        $this->add_group_control(
                'sa-flip-box-backend-button-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data' => '',
            ]
                ]
        );


        $this->add_responsive_control(
                'sa-flip-box-backend-button-padding', $this->style, [
            'label' => __('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 1,
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
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-flip-box-backend-button-margin', $this->style, [
            'label' => __('Margin', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 1,
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
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_control(
                'sa-flip-boxes-backend-button-separetor', $this->style, [
            'label' => __('', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::SEPARATOR,
            Controls::SEPARATOR => TRUE
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', OXI_FLIP_BOX_TEXTDOMAIN),
                'hover' => esc_html__('Hover', OXI_FLIP_BOX_TEXTDOMAIN),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa-flip-boxes-backend-button-bg', $this->style, [
            'label' => __('Background', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(3, 3, 3, 0.01)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data' => 'background: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-flip-boxes-backend-button-color', $this->style, [
            'label' => __('Color', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::COLOR,
            'default' => '#3b3b3b',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-flip-box-back-button-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-flip-box-backend-button-border-radius', $this->style, [
            'label' => __('Border Radius', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'px' => [
                    'min' => 1,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );



        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa-flip-boxes-backend-hover-button-bg', $this->style, [
            'label' => __('Background', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(122, 122, 122, 0.01)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data:hover' => 'background: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-flip-boxes-backend-hover-button-color', $this->style, [
            'label' => __('Color', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::COLOR,
            'default' => '#5e5c5c',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data:hover' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-flip-box-back-button-hover-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data:hover' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-flip-box-backend-button-hover-border-radius', $this->style, [
            'label' => __('Border Radius', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 1,
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
                '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );


        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function modal_opener() {
        $this->add_substitute_control('', [], [
            'type' => Controls::MODALOPENER,
            'title' => __('Add New Flip Boxes', OXI_FLIP_BOX_TEXTDOMAIN),
            'sub-title' => __('Open Flip Boxes Form', OXI_FLIP_BOX_TEXTDOMAIN),
            'showing' => TRUE,
        ]);
    }

    public function modal_form_data() {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Flip Boxes Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">';
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'frontend' => esc_html__('Frontend Data', OXI_FLIP_BOX_TEXTDOMAIN),
                'backend' => esc_html__('Backend Box', OXI_FLIP_BOX_TEXTDOMAIN),
            ]
                ]
        );

        $this->start_controls_tab();
        $this->add_control(
                'sa_flip_boxes_icon', $this->style, [
            'label' => __('Icon', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::ICON,
            'default' => 'fab fa-facebook',
                ]
        );
        $this->add_control(
                'sa_flip_boxes_heading', $this->style, [
            'label' => __('Title', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::TEXT,
            'default' => 'Heading',
            'placeholder' => 'Heading',
                ]
        );
        $this->add_control(
                'sa_flip_boxes_font_description', $this->style, [
            'label' => __('Short Description', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::TEXTAREA,
            'default' => 'Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et dolore magna aliqua dapibus tellus blandit quis. Cras tempor non mi et vestibulum.',
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_flip_boxes_back_description', $this->style, [
            'label' => __('Short Description', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::TEXTAREA,
            'default' => 'Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et dolore magna aliqua dapibus tellus blandit quis. Cras tempor non mi et vestibulum.',
                ]
        );
        $this->add_control(
                'sa_flip_boxes_button_text', $this->style, [
            'label' => __('Button Text', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::TEXT,
            'default' => 'Learn More',
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_flip_boxes_button_link', $this->style, [
            'label' => __('URL', OXI_FLIP_BOX_TEXTDOMAIN),
            'type' => Controls::URL,
            'separator' => TRUE,
            'default' => '',
            'placeholder' => 'https://www.yoururl.com',
                ]
        );

        echo '</div>';
    }

    /**
     * Template Parent Item Data Rearrange
     *
     * @since 2.0.0
     */
    public function Rearrange() {
        return '<li class="list-group-item" id="{{id}}">{{sa_flip_boxes_heading}}</li>';
    }

}
