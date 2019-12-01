<?php

namespace SHORTCODE_ADDONS_UPLOAD\Opening_hours\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_1 extends AdminStyle {

    public function register_controls() {



        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
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
                'sa_oh_col', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-admin-edit-list' => ''
            ],
                ]
        );

        $this->add_repeater_control(
                'sa_oh_repeater', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_oh_bg' => [
                    'type' => Controls::BACKGROUND,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addonsOH-wrapper-1.oxi-addonsOH-wrapper-1-{{KEY}} .oxi-addonsOH-row' => ''
                    ],
                ],
                'sa_oh_br' => [
                    'type' => Controls::BORDER,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addonsOH-wrapper-1.oxi-addonsOH-wrapper-1-{{KEY}} .oxi-addonsOH-row' => ''
                    ],
                ],
                'sa_oh_start_tabs' => [
                    'controller' => 'start_controls_tabs',
                    'options' => [
                            'day' => esc_html__('Day Text', SHORTCODE_ADDOONS),
                            'time' => esc_html__('Time Text', SHORTCODE_ADDOONS),
                        ]
                ],
                'sa_oh_start_tab_1' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_oh_day_text' => [
                    'type' => Controls::TEXT,
                    'label' => __('Day', SHORTCODE_ADDOONS),
                    'default' => 'Sunday',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addonsOH-wrapper-1.oxi-addonsOH-wrapper-1-{{KEY}} .oxi-addonsOH-heading' => ''
                    ],
                ],
                'sa_oh_day_color' => [
                    'label' => __('Day Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#000000',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addonsOH-wrapper-1.oxi-addonsOH-wrapper-1-{{KEY}} .oxi-addonsOH-heading' => 'color:{{VALUE}};'
                    ],
                ],
                'sa_oh_end_tab_1' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_oh_start_tab_2' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_oh_time_text' => [
                    'type' => Controls::TEXT,
                    'label' => __('Time', SHORTCODE_ADDOONS),
                    'default' => '10:00-17:00',
                     'selector' => [
                        '{{WRAPPER}} .oxi-addonsOH-wrapper-1.oxi-addonsOH-wrapper-1-{{KEY}} .oxi-addonsOH-date' => ''
                    ],
                ],
                'sa_oh_time_color' => [
                    'label' => __('Time Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#000000',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addonsOH-wrapper-1.oxi-addonsOH-wrapper-1-{{KEY}} .oxi-addonsOH-date' => 'color:{{VALUE}};'
                    ],
                ],
                'sa_oh_end_tab_2' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_oh_end_tabs' => [
                    'controller' => 'end_controls_tabs',
                ],
            ],
            'title_field' => 'sa_oh_day_text',
                ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
         $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'day' => esc_html__('Day Setting', SHORTCODE_ADDOONS),
                'time' => esc_html__('Time Setting', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_oh_day_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-wrapper-1 .oxi-addonsOH-heading' => ''
            ],
                ]
        );

        $this->add_group_control(
                'sa_oh_day_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-wrapper-1 .oxi-addonsOH-heading' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_oh_day_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-wrapper-1 .oxi-addonsOH-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_oh_time_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-wrapper-1 .oxi-addonsOH-date' => ''
            ],
                ]
        );

        $this->add_group_control(
                'sa_oh_time_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-wrapper-1 .oxi-addonsOH-date' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_oh_time_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-wrapper-1 .oxi-addonsOH-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_oh_width', $this->style, [
            'label' => __('Maximum Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 250,
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
                '{{WRAPPER}} .oxi-addonsOH-wrapper-1 .oxi-addonsOH-row' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );


        $this->add_responsive_control(
                'sa_oh_br_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-wrapper-1 .oxi-addonsOH-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );
        $this->add_group_control(
                'sa_oh_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addonsOH-wrapper-1 .oxi-addonsOH-row' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_oh_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa_oh_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-wrapper-1 .oxi-addonsOH-row' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_oh_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addonsOH-wrapper-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );


        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
