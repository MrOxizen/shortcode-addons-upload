<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_5
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_5 extends AdminStyle {

    public function register_controls() {


        $this->start_section_tabs(
                'shortcode-addons-start-tabs',
                []
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_col',
                $this->style,
                [
                    'type' => Controls::COLUMN,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-col' => ''
                    ],
                ]
        );
        $this->add_repeater_control(
                'sa_event_widgets_data',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::REPEATER,
                    'title_field' => 'sa_event_t_name',
                    'button' => 'Add New Event',
                    'fields' => [
                        'sa_event_t_date' => [
                            'label' => __('Date', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5.oxi-addons-EW-5-wrapper-style-5-{{KEY}} .oxi-addons-EW-5-H' => '',
                            ],
                        ],
                        'sa_event_t_time' => [
                            'label' => __('Time', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5.oxi-addons-EW-5-wrapper-style-5-{{KEY}} .oxi-addons-EW-5-SH' => '',
                            ],
                        ],
                        'sa_event_t_name' => [
                            'label' => __('Name', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5.oxi-addons-EW-5-wrapper-style-5-{{KEY}} .oxi-addons-EW-5-D' => '',
                            ],
                        ],
                        'sa_event_t_address' => [
                            'label' => __('Address', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXTAREA,
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5.oxi-addons-EW-5-wrapper-style-5-{{KEY}} .oxi-addons-EW-5-SD' => '',
                            ],
                        ],
                    ],
                ]
        );

        $this->add_control('sa-ac-gen-sep', $this->style, [
            'type' => Controls::SEPARATOR,
            'label' => esc_html__('', SHORTCODE_ADDOONS),
            Controls::SEPARATOR => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5 .oxi-addons-EW-5-row' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event_widgets_border_r',
                $this->style,
                [
                    'label' => __('Border Radius', SHORTCODE_ADDOONS),
                    'type' => Controls::DIMENSIONS,
                    'default' => [
                        'unit' => 'px',
                        'size' => '',
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 200,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 50,
                            'step' => .1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 10,
                            'step' => .1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5 .oxi-addons-EW-5-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_padding',
                $this->style,
                [
                    'label' => __('Padding', SHORTCODE_ADDOONS),
                    'type' => Controls::DIMENSIONS,
                    'default' => [
                        'unit' => 'px',
                        'size' => '',
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 200,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 50,
                            'step' => .1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 10,
                            'step' => .1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5 .oxi-addons-EW-5-row' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );

        $this->add_responsive_control(
                'sa_event_widgets_margin',
                $this->style,
                [
                    'label' => __('Margin', SHORTCODE_ADDOONS),
                    'type' => Controls::DIMENSIONS,
                    'default' => [
                        'unit' => 'px',
                        'size' => '',
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 200,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 50,
                            'step' => .1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 10,
                            'step' => .1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5 .oxi-addons-EW-5-row' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();



        $this->start_controls_section(
                'shortcode-addons-ei-date', [
            'label' => esc_html__('Date And Time', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'sa_event_widgets_date_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5 .oxi-addons-EW-5-Heading' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_date_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5 .oxi-addons-EW-5-Heading' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_date_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5 .oxi-addons-EW-5-Heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-name', [
            'label' => esc_html__('Name and Address', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_ei_name_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-5-wrapper-style-5 .oxi-addons-EW-5-details ' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_name_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5 .oxi-addons-EW-5-details ' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_name_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-5-wrapper-style-5 .oxi-addons-EW-5-details ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
