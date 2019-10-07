<?php

namespace SHORTCODE_ADDONS_UPLOAD\Link_effects\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_12 extends AdminStyle {

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
            'placeholder' => __('Register Now', SHORTCODE_ADDOONS),
            'default' => 'Learn More',
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
                '{{WRAPPER}} .link-effect-main-style12' => 'justify-content:{{VALUE}};'
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
                '{{WRAPPER}} .link-effect-main-style12' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12' => ''
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
            'default' => '#f5970a',
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_link_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12' => ''
            ],
                ]
        );


        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_link_hover_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ff00cc',
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12:hover' => 'color:{{VALUE}};',
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12:focus' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_link_hover_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12:hover' => ''
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
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
        
    
        $this->add_responsive_control(
                'sa_link_width', $this->style, [
            'label' => __('Border Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 2,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
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
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12::before' => 'height:{{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12::after' => 'height:{{SIZE}}{{UNIT}};'
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
                'sa_link_ul_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#f5970a',
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12::before' => 'background:{{VALUE}};',
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12::after' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_link_h_ul_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#6219ff',
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12:hover::before' => 'background:{{VALUE}};',
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12:focus::before' => 'background:{{VALUE}};',
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12:hover::after' => 'background:{{VALUE}};',
                '{{WRAPPER}} .link-effect-main-style12 .oxi-links-effects-style12:focus::after' => 'background:{{VALUE}};',
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
