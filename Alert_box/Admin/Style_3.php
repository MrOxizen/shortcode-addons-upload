<?php

namespace SHORTCODE_ADDONS_UPLOAD\Alert_box\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_3 extends AdminStyle {

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
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_ab_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-row ' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_br_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );
        $this->add_group_control(
                'sa_ab_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-row' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->add_responsive_control(
                'sa_ab_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-row' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
         $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal Icon', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Cross Icon', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_ab_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_ab_icon_class', $this->style, [
            'type' => Controls::ICON,
            'label' => __('Icon Class', SHORTCODE_ADDOONS),
            'placeholder' => __('Icon Class', SHORTCODE_ADDOONS),
            'default' => 'fas fa-exclamation-triangle',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-F-icon' => ''
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_icon_size', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-F-icon' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );

        $this->add_control(
                'sa_ab_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-F-icon' => 'color:{{VALUE}};'
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_icon_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-col-one' => ''
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_icon_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-F-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
            
        $this->add_control(
                'sa_ab_ci', $this->style, [
            'label' => __('Cross Icon', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_ab_ci_class', $this->style, [
            'type' => Controls::ICON,
            'label' => __('Icon Class', SHORTCODE_ADDOONS),
            'placeholder' => __('Icon Class', SHORTCODE_ADDOONS),
            'default' => 'fas fa-times',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-L-icon' => ''
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_ci_size', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-L-icon' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );

        $this->add_control(
                'sa_ab_ci_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-L-icon' => 'color:{{VALUE}};'
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_ci_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-col-three' => ''
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_ci_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-L-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Inner Border', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_group_control(
                'sa_ab_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-BI' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_inner_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-BI' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
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
            'label' => esc_html__('Content Body Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_ab_text', $this->style, [
            'label' => __('Text?', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_ab_content_align', $this->style, [
            'label' => __('Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-H' => 'text-align: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-DC' => 'text-align: {{VALUE}};',
            ],
            'condition' => [
                'sa_ab_text' => 'yes',
            ],
                ]
        );
        

        $this->add_group_control(
                'sa_ab_content_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-col-two' => ''
            ],
                ]
        );
         $this->add_responsive_control(
                'sa_ab_content_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-col-two' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_content_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-col-two' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Text Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_ab_text' => 'yes',
            ],
                ]
        );
        $this->add_control(
                'sa_ab_content_header', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Header Text', SHORTCODE_ADDOONS),
            'placeholder' => __('Header Text', SHORTCODE_ADDOONS),
            'default' => 'Warning',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-H' => ''
            ],
            'condition' => [
                'sa_ab_text' => 'yes',
            ],
                ]
        );
        $this->add_control(
                'sa_ab_content_description', $this->style, [
            'type' => Controls::TEXTAREA,
            'label' => __('Description', SHORTCODE_ADDOONS),
            'placeholder' => __('Description', SHORTCODE_ADDOONS),
            'default' => 'THIS A ERROR MESSAGE BOX, LOOKS PRETTY SLICK.',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-DC' => ''
            ],
            'condition' => [
                'sa_ab_text' => 'yes',
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'header_text' => esc_html__('Header', SHORTCODE_ADDOONS),
                'addresss' => esc_html__('Description', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_header_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-H' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_header_color', $this->style, [
            'label' => __('Header Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-H' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_header_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-H' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_header_padding', $this->style, [
            'label' => __('Text Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-H' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_address_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-DC' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_address_color', $this->style, [
            'label' => __('Description Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-DC' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_address_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-DC' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_address_padding', $this->style, [
            'label' => __('Text Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-AL-TH-3 .oxi-addonsAL-TH-DC' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
