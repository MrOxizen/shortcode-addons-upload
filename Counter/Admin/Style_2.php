<?php

namespace SHORTCODE_ADDONS_UPLOAD\Counter\Admin;

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

class Style_2 extends AdminStyle {

    public function register_controls() {


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_counter_col', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-admin-edit-list' => ''
            ],
                ]
        );

        $this->add_repeater_control(
                'sa_counter_repeater', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_counter_title_text' => [
                    'type' => Controls::TEXT,
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'placeholder' => __('Title', SHORTCODE_ADDOONS),
                    'default' => 'Title',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-counter-title-{{KEY}}' => ''
                    ],
                ],
                'sa_counter_number' => [
                    'type' => Controls::NUMBER,
                    'label' => __('Number', SHORTCODE_ADDOONS),
                    'placeholder' => __('Number', SHORTCODE_ADDOONS),
                    'default' => 'Number',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-counter-number-{{KEY}}' => ''
                    ],
                ],
                'sa_counter_icon_class' => [
                    'type' => Controls::ICON,
                    'label' => __('Icon Class', SHORTCODE_ADDOONS),
                    'placeholder' => __('Icon Class', SHORTCODE_ADDOONS),
                    'default' => 'fas fa-envelope',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-counter-icon-{{KEY}}' => ''
                    ],
                ],
            ],
            'title_field' => 'sa_counter_title_text',
                ]
        );


        $this->add_control(
                'sa_counter_duration', $this->style, [
            'label' => __('Counter Duration (ms)', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 10000,
                    'step' => 1,
                ],
            ],
                ]
        );

        $this->add_control(
                'sa_counter_delay', $this->style, [
            'label' => __('Counter Delay (ms)', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 10000,
                    'step' => 1,
                ],
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_counter_Padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-counter-style2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_counter_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Counter Data Serialize', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_rearrange_control(
                'sa_counter_rearrange', $this->style, [
            'type' => Controls::REARRANGE,
            'label' => __(' ', SHORTCODE_ADDOONS),
            'default' => 'title,number,divider,',
            'loader' => TRUE,
            'fields' => [
                'title' => [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                ],
                'number' => [
                    'label' => __('Number', SHORTCODE_ADDOONS),
                ],
                'divider' => [
                    'label' => __('Divider', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Title & Number Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Title', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Number', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_counter_text_on', $this->style, [
            'label' => __('Title?', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );

        $this->add_group_control(
                'sa_counter_title_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-title' => ''
            ],
            'condition' => [
                'sa_counter_text_on' => 'yes',
            ],
                ]
        );
        $this->add_control(
                'sa_counter_title_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-title' => 'color:{{VALUE}};'
            ],
            'condition' => [
                'sa_counter_text_on' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_counter_title_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-title' => ''
            ],
            'condition' => [
                'sa_counter_text_on' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_counter_title_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'condition' => [
                'sa_counter_text_on' => 'yes',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_counter_number_on', $this->style, [
            'label' => __('Number?', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_group_control(
                'sa_counter_number_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-number' => ''
            ],
            'condition' => [
                'sa_counter_number_on' => 'yes',
            ],
                ]
        );
        $this->add_control(
                'sa_counter_number_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-number' => 'color:{{VALUE}};'
            ],
            'condition' => [
                'sa_counter_number_on' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_counter_number_tx_shadow2', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-number' => ''
            ],
            'condition' => [
                'sa_counter_number_on' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_counter_number_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-number' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'condition' => [
                'sa_counter_number_on' => 'yes',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_counter_icon', $this->style, [
            'label' => __('Icon?', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_counter_align', $this->style, [
            'label' => __('Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'left',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-title' => 'text-align: {{VALUE}} !important;',
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-number' => 'text-align: {{VALUE}} !important;',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_counter_icon_size', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa_counter_icon' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_counter_image_width_height', $this->style, [
            'label' => __('Icon Height Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
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
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-icon' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'sa_counter_icon' => 'yes',
            ],
                ]
        );
        $this->add_control(
                'sa_counter_icon_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-icons' => 'color:{{VALUE}};'
            ],
            'condition' => [
                'sa_counter_icon' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_counter_icon_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-icon' => ''
            ],
            'condition' => [
                'sa_counter_icon' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_counter_icon_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-icon' => ''
            ],
            'condition' => [
                'sa_counter_icon' => 'yes',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_counter_icon_br_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'condition' => [
                'sa_counter_icon' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_counter_icon_box_padding', $this->style, [
            'label' => __('Icon Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'condition' => [
                'sa_counter_icon' => 'yes',
            ],
                ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Divider Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_counter_divider_on', $this->style, [
            'label' => __('Divider On/Off', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_responsive_control(
                'sa_counter_divider_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-divider' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'sa_counter_divider_on' => 'yes',
            ],
                ]
        );
        $this->add_group_control(
                'sa_counter_divider_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-divider-left .oxi-divider' => ''
            ],
            'condition' => [
                'sa_counter_divider_on' => 'yes',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_counter_divider_Padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-counter-style2 .oxi-addons-counter-divider' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'condition' => [
                'sa_counter_divider_on' => 'yes',
            ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
