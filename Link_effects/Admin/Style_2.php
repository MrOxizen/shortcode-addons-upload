<?php

namespace SHORTCODE_ADDONS_UPLOAD\Link_effects\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_2 extends AdminStyle {

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
            'default' => 'Learn More',
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_link_hover', $this->style, [
            'label' => __('Hover Text', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );

        
        $this->add_control(
                 'sa_link_hover_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Hover Text', SHORTCODE_ADDOONS),
            'placeholder' => __('Hover Text', SHORTCODE_ADDOONS),
            'default' => 'Sign Up',
            'loader' => TRUE,
            'condition' => [
                'sa_link_hover' => 'yes',
            ],
                ]
        );

        $this->add_group_control(
                'sa_link_link', $this->style, [
            'type' => Controls::URL,
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_link_view', $this->style, [
            'label' => __('Hover View', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'sa_link_top_to_bottom',
            'loader' => TRUE,
            'options' => [
                'sa_link_top_to_bottom' => __('Top to Bottom', SHORTCODE_ADDOONS),
                'sa_link_bottom_to_top' => __('Bottom to Top', SHORTCODE_ADDOONS),
                'sa_link_left_to_right' => __('Left to Right', SHORTCODE_ADDOONS),
                'sa_link_right_to_left' => __('Right to Left', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
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
                '{{WRAPPER}} .link-effect-main-style2' => 'justify-content:{{VALUE}};'
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
                '{{WRAPPER}} .link-effect-main-style2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2' => ''
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
            'default' => '#00000',
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2' => 'color:{{VALUE}};'
            ],
                ]
        );
         $this->add_group_control(
                'sa_link_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2-span' => '',
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2-span::before' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_link_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2' => ''
            ],
                ]
        );


        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_link_hover_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#2c36c7',
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2:hover' => 'color:{{VALUE}};',
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2:focus' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_link_hover_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2:hover .oxi-links-effects-style2-span' => '',
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2:focus .oxi-links-effects-style2-span' => '',
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2:hover .oxi-links-effects-style2-span::before' => '',
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2:focus .oxi-links-effects-style2-span::before' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_link_hover_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2:hover' => ''
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
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2-span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .link-effect-main-style2 .oxi-links-effects-style2-span::before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );




        $this->end_controls_section();
       
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
