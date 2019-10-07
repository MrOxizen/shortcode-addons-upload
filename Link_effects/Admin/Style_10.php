<?php

namespace SHORTCODE_ADDONS_UPLOAD\Link_effects\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_10 extends AdminStyle {

    public function register_controls() {



        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Link Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_link_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Link Text', SHORTCODE_ADDOONS),
            'placeholder' => __('Link Text', SHORTCODE_ADDOONS),
            'default' => 'Submit',
            'loader' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa_link_link', $this->style, [
            'type' => Controls::URL,
            'loader' => TRUE,
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_link_position', $this->style, [
            'label' => __('Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'center',
            'loader' => TRUE,
            'options' => [
                'flex-start' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                ],
                'flex-end' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style10' => 'justify-content:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_link_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->add_responsive_control(
                'sa_link_margin', $this->style, [
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
                '{{WRAPPER}} .link-effect-main-style10' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
        $this->add_group_control(
                'sa_link_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style10 .oxi-links-effects-style10' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal View', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover View', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_link_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#0fd11f',
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style10 .oxi-links-effects-style10' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_link_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style10 .oxi-links-effects-style10' => ''
            ],
                ]
        );


        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_link_hover_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#e66f0e',
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style10 .oxi-links-effects-style10:hover' => 'color:{{VALUE}};',
                '{{WRAPPER}} .link-effect-main-style10 .oxi-links-effects-style10:focus' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_link_hover_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style10 .oxi-links-effects-style10:hover' => ''
            ],
                ]
        );


        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_link_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
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
                '{{WRAPPER}} .link-effect-main-style10 .oxi-links-effects-style10' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );




        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Border Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('First Border', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Second Border', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_responsive_control(
                'sa_link_b1_height_width', $this->style, [
            'label' => __('Height & Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 115,
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
                '{{WRAPPER}} .link-effect-main-style10 .oxi-links-effects-style10::after' => 'height:{{SIZE}}{{UNIT}}; width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa-link-br1', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style10 .oxi-links-effects-style10::after' => ''
            ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_responsive_control(
                'sa_link_b2_height_width', $this->style, [
            'label' => __('Height & Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 130,
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
                '{{WRAPPER}} .link-effect-main-style10 .oxi-links-effects-style10::before' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
             ],
                ]
        );
        $this->add_group_control(
                'sa-link-br2', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style10 .oxi-links-effects-style10::before' => '',
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
