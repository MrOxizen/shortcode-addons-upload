<?php

namespace SHORTCODE_ADDONS_UPLOAD\Content_toggle\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_2 extends AdminStyle {

    public function register_controls() {


        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'content-settings' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
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
            'label' => esc_html__('Before Button Text', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_before_ct_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Header Text', SHORTCODE_ADDOONS),
            'placeholder' => __('Header Text', SHORTCODE_ADDOONS),
            'default' => 'Limited',
            'loader' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_before_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-before-text' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                'active' => esc_html__('Active', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_before_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ff0303',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-before-text.oxi-active' => 'color:{{VALUE}};'
            ],
                ]
        );



        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_before_text_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-before-text:hover' => 'color:{{VALUE}};'
            ],
                ]
        );


        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_before_active_text_color', $this->style, [
            'label' => __('Active Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#005d82',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-before-text' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_before_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-before-text' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_before_text_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-before-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Body Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_responsive_control(
                'sa_ct_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 10,
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
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-CT-2-main-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ct_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-CT-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('After Button Text', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_after_ct_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Header Text', SHORTCODE_ADDOONS),
            'placeholder' => __('Header Text', SHORTCODE_ADDOONS),
            'default' => 'Unlimited',
            'loader' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_after_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-after-text' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                'active' => esc_html__('Active', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_after_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#8500c2',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-after-text' => 'color:{{VALUE}};'
            ],
                ]
        );








        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_after_text_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-after-text:hover' => 'color:{{VALUE}};'
            ],
                ]
        );




        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_after_active_text_color', $this->style, [
            'label' => __('Active Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ff0505',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-after-text.oxi-active' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_after_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-after-text' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_after_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-after-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );




        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Toggle Button Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Button Outer Setting', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Button Inner Setting', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_ct_outer_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ct_outer_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 80,
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
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch' => 'width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ct_outer_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 40,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 800,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 400,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 400,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch' => 'height:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_ct_outer_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_ct_outer_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_ct_outer_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 50,
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
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_group_control(
                'sa_ct_inner_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch::after' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ct_inner_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 30,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 250,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 250,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch::before' => 'width:{{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch::after' => 'width:{{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switchOn::after' => 'left:calc(100% - ({{SIZE}}{{UNIT}} + 5{{UNIT}}));'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ct_inner_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
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
                'em' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch::before' => 'height:{{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch::after' => 'height:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_ct_inner_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch::after' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_ct_inner_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch::after' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_ct_inner_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-CT-2 .oxi-addons-switch:after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
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
                'shortcode-addons-start-tabs' => 'content-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('First Content', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_ct_first_content', $this->style, [
            'label' => __('Content', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'loader' => TRUE,
            'placeholder' => 'Your Content Here',
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Second Content', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_ct_second_content', $this->style, [
            'label' => __('Content', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'loader' => TRUE,
            'placeholder' => 'Your Content Here',
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
