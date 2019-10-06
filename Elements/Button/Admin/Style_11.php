<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Button\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_11 extends AdminStyle {

    public function register_controls() {


        $this->start_section_tabs(
                'shortcode-addons-start-tabs'
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Button Information', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_btn_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Button Text', SHORTCODE_ADDOONS),
            'placeholder' => __('Button Text', SHORTCODE_ADDOONS),
            'default' => 'Button Text',
            'loader' => TRUE,
                ]
        );$this->add_control(
                'sa_btn_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_btn_icon_position', $this->style, [
            'label' => __('Icon Position', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'label_on' => __('Left', SHORTCODE_ADDOONS),
            'label_off' => __('Right', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
            'condition' => [
                'sa_btn_icon' => 'yes',
            ],
                ]
        );
        $this->add_control(
                'sa_btn_icon_class', $this->style, [
            'type' => Controls::ICON,
            'label' => __('Icon Class', SHORTCODE_ADDOONS),
            'placeholder' => __('Icon Class', SHORTCODE_ADDOONS),
            'default' => 'fas fa-angle-double-right',
            'loader' => TRUE,
            'condition' => [
                'sa_btn_icon' => 'yes',
            ],
                ]
        );
        
        $this->add_group_control(
                'sa_btn_link', $this->style, [
            'type' => Controls::URL,
            'loader' => TRUE,
                ]
        );

        $this->add_control(
                'sa_btn_h_e', $this->style, [
            'label' => __('Hover Effect ON/OFF', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
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
                'sa_btn_width_choose', $this->style, [
            'label' => __('Button Width', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'sa-width-dymanic',
            'loader' => TRUE,
            'label_on' => __('Dynamic', SHORTCODE_ADDOONS),
            'label_off' => __('Auto', SHORTCODE_ADDOONS),
            'return_value' => 'sa-width-dymanic',
                ]
        );

        $this->add_responsive_control(
                'sa_btn_width', $this->style, [
            'label' => __('Max-Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 220,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
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
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11.sa-width-dymanic' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa_btn_width_choose' => 'sa-width-dymanic',
            ],
                ]
        );
        $this->add_control(
                'sa_btn_btn_position', $this->style, [
            'label' => __('Button Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'center',
            'loader' => TRUE,
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11' => 'text-align:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_btn_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );


        $this->add_responsive_control(
                'sa_btn_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Button Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );


        
        $this->add_group_control(
                'sa_btn_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11' => ''
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
                'sa-btn-text-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'description' => __('Select Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-btn-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11' => ''
            ],
                ]
        );

        $this->add_group_control(
                'sa-btn-br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-btn-br-radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-btn-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_btn_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11' => ''
            ],
                ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa-btn-text-h-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'description' => __('Select Hover Color', SHORTCODE_ADDOONS),
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11:hover' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-btn-h-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11:hover' => ''
            ],]
        );

        $this->add_group_control(
                'sa-btn-h-br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11:hover' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-btn-hover-br-radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );
        $this->add_group_control(
                'sa-btn-h-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11:hover' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_btn_h_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11:hover' => ''
            ],
                ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_btn_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
                    'separator' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 15,
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
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Hover Image Effect Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
            'condition' => [
                'sa_btn_h_e' => 'yes',
            ],
                ]
        );


        $this->add_control(
                'sa_btn_effect_view', $this->style, [
            'label' => __('Viewing Animaton', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'sa-icon-left-to-right',
            'loader' => TRUE,
            'options' => [
                'sa-effect-left-to-right' => __('Left to Right', SHORTCODE_ADDOONS),
                'sa-effect-right-to-left' => __('Right-to-Left', SHORTCODE_ADDOONS),
                'sa-effect-top-to-bottom' => __('Top-to-Bottom', SHORTCODE_ADDOONS),
                'sa-effect-bottom-to-top' => __('Bottom-to-Top', SHORTCODE_ADDOONS),
            ],
            'condition' => [
                'sa_btn_h_e' => 'yes',
            ],
                ]
        );
        $this->add_control(
                'sa_btn_duration', $this->style, [
            'label' => __('Duration /ms', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 1000,
            ],
            'loader' => TRUE,
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 5000,
                    'step' => 50,
                ],
            ],
            'condition' => [
                'sa_btn_h_e' => 'yes',
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
            'condition' => [
                'sa_btn_icon' => 'yes',
            ],
                ]
        );




        $this->add_responsive_control(
                'sa_btn_icon_size', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11 .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_btn_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11 .oxi-icons' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_btn_icon_h_color', $this->style, [
            'label' => __('Icon Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11:hover .oxi-icons' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_btn_icon_padding', $this->style, [
            'label' => __('Icon Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-align-btn11 .oxi-button-btn11 .oxi-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
