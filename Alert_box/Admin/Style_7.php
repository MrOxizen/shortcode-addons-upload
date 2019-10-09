<?php

namespace SHORTCODE_ADDONS_UPLOAD\Alert_box\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_7 extends AdminStyle {

    public function register_controls() {


        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'content-settings' => esc_html__('Text Settings', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-row' => ''
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );
        $this->add_group_control(
                'sa_ab_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-row' => ''
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-row' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'loader' => TRUE,
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-F-icon' => 'font-size:{{SIZE}}{{UNIT}};'
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-F-icon' => 'color:{{VALUE}};'
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-col-one' => ''
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_icon_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-col-one' => ''
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-F-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_icon' => 'yes',
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Cross Icon Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );

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
            'loader' => TRUE,
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-L-icon .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_ci_height_width', $this->style, [
            'label' => __('Height & Width Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 33,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-L-icon .oxi-icons' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};'
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-L-icon .oxi-icons' => 'color:{{VALUE}};'
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-L-icon .oxi-icons' => ''
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ab_ci_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 100,
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-L-icon .oxi-icons' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_ci_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-L-icon .oxi-icons' => ''
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_header_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-L-icon .oxi-icons' => ''
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-L-icon .oxi-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'condition' => [
                'sa_ab_ci' => 'yes',
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-H' => 'text-align: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-DC' => 'text-align: {{VALUE}};',
            ],
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
            'default' => 'ERROR',
            'loader' => TRUE,
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
            'default' => 'This a Error Message Box, Looks Pretty Slick',
            'loader' => TRUE,
            'condition' => [
                'sa_ab_text' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_ab_content_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-col-two' => ''
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-H' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_header_color', $this->style, [
            'label' => __('Header Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-H' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_header_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-H' => ''
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-H' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_address_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-DC' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_address_color', $this->style, [
            'label' => __('Description Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-DC' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_address_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-DC' => ''
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
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-DC' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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