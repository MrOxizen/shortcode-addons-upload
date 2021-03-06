<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_12
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
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
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_col', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-col' => ''
            ],
                ]
        );
        $this->add_repeater_control(
                'sa_event_widgets_data', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'title_field' => 'sa_event_t_heading',
            'button' => 'Add New Event',
            'fields' => [
                'sa_event_t_heading' => [
                    'label' => __('Heading', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12.oxi-addons-EW-12-wrapper-style-12-{{KEY}} .oxi-addons-EW-12-heading' => '',
                    ],
                ],
                'sa_event_t_name' => [
                    'label' => __('Designation', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12.oxi-addons-EW-12-wrapper-style-12-{{KEY}} .oxi-addons-EW-12-LT' => '',
                    ],
                ],
                'sa_event_t_name_icon' => [
                    'label' => esc_html__('Designation Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fas fa-user',
                ],
                'sa_event_t_info_time' => [
                    'label' => __('Time', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12-{{KEY}} .oxi-addons-EW-12-TT' => '',
                    ],
                ],
                'sa_event_t_info_time_icon' => [
                    'label' => esc_html__('Time Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'far fa-clock',
                ],
                'sa_event_t_day' => [
                    'label' => __('Date', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12.oxi-addons-EW-12-wrapper-style-12-{{KEY}} .oxi-addons-EW-12-D' => '',
                    ],
                ],
                'sa_event_t_month' => [
                    'label' => __('Month', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12.oxi-addons-EW-12-wrapper-style-12-{{KEY}} .oxi-addons-EW-12-M' => '',
                    ],
                ],
                'sa_event_widgets_bg' => [
                    'type' => Controls::BACKGROUND,
                    'controller' => 'add_group_control',
                    'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12.oxi-addons-EW-12-wrapper-style-12-{{KEY}} .oxi-addons-EW-12-row' => '',
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

        $this->add_control(
                'sa_event_widgets_max_width', $this->style, [
            'label' => __('Max Width', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 750,
            'min' => 0,
            'max' => 1000,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-row' => 'max-width : {{VALUE}}px;',
            ],
                ]
        );
       

        $this->add_responsive_control(
                'sa_event_widgets_border_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event_widgets_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-row' => ''
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
                'shortcode-addons-ei-heading', [
            'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_event_widgets_heading_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-heading' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_heading_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-heading' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_heading_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-ei-des', [
            'label' => esc_html__('Designation', SHORTCODE_ADDOONS),
                ]
        );

        $this->add_control(
                'sa_event_widgets_des_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-LT' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_des_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-LI' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_des_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-LT' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_des_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-L' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-heading', [
            'label' => esc_html__('Time', SHORTCODE_ADDOONS),
                ]
        );

        $this->add_control(
                'sa_event_widgets_time_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-TT' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_time_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-TI' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_time_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-TT' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_time_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-T' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Date', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_date_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-D' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_date_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-D' => '',
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
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-D' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Month', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_month_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-M' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_month_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-M' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_month_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-12-wrapper-style-12 .oxi-addons-EW-12-M' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
