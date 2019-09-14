<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Count_down\Admin;

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

class Style_1 extends AdminStyle
{

    public function register_controls()
    {

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'general-settings'
                ]
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_cd_date_time',
            $this->style,
            [
                'label' => __('Date', SHORTCODE_ADDOONS),
                'type' => Controls::DATE_TIME,
                'default' => '2022-01-01T01:00',
                'time' => TRUE,
            ]
        );

        $this->add_responsive_control(
            'sa_cd_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa-addons-count-down-container .sa-addons-count-down-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cd_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Number Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_cd_num_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#db3328',
                'selector' => [
                    '{{WRAPPER}} .sa-addons-count-down-content .sa-addons-countdown-amount' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cd_num_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-count-down-content .sa-addons-countdown-amount' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cd_num_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa-addons-count-down-content .sa-addons-countdown-amount' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Text Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_cd_txt_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#545454',
                'selector' => [
                    '{{WRAPPER}} .sa-addons-count-down-content .sa-addons-countdown-period' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cd_txt_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa-addons-count-down-content .sa-addons-countdown-period' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cd_txt_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa-addons-count-down-content .sa-addons-countdown-period' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();

        $this->end_section_devider();

        $this->end_section_tabs();


        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'style-settings'
                ]
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Days Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_cd_d_txt',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Days',
                'loader' => TRUE,
                'placeholder' => 'Days',
            ]
        );
        $this->add_control(
            'sa_cd_d_txt_sps',
            $this->style,
            [
                'label' => __('Separate Settings', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => '',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'shortcode-addons-count-number',
            ]
        );
        $this->add_control(
            'sa_cd_d_num_color',
            $this->style,
            [
                'label' => __('Number Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f29993',
                'condition' => [
                    'sa_cd_d_txt_sps' => 'shortcode-addons-count-number'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-counter-days.shortcode-addons-count-number .sa-addons-countdown-amount' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_cd_d_txt_color',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#545454',
                'condition' => [
                    'sa_cd_d_txt_sps' => 'shortcode-addons-count-number'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-counter-days.shortcode-addons-count-number .sa-addons-countdown-period' => 'color: {{VALUE}};'
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Hours Settings', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'sa_cd_hours_txt',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Hours',
                'loader' => TRUE,
                'placeholder' => 'Hours',
            ]
        );
        $this->add_control(
            'sa_cd_hours_txt_sps',
            $this->style,
            [
                'label' => __('Separate Settings', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 's-a-count-hours',
            ]
        );
        $this->add_control(
            'sa_cd_hours_num_color',
            $this->style,
            [
                'label' => __('Number Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f29993',
                'condition' => [
                    'sa_cd_hours_txt_sps' => 's-a-count-hours'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-counter-hours.s-a-count-hours .sa-addons-countdown-amount' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_cd_hours_txt_color',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#545454',
                'condition' => [
                    'sa_cd_hours_txt_sps' => 's-a-count-hours'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-counter-hours.s-a-count-hours .sa-addons-countdown-period' => 'color: {{VALUE}};'
                ],
            ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Minutes Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_cd_min_txt',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Minutes',
                'loader' => TRUE,
                'placeholder' => 'Minutes',
            ]
        );

        $this->add_control(
            'sa_cd_min_txt_sps',
            $this->style,
            [
                'label' => __('Separate Settings', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => '',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 's-a-count-minute',
            ]
        );

        $this->add_control(
            'sa_cd_min_num_color',
            $this->style,
            [
                'label' => __('Number Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f29993',
                'condition' => [
                    'sa_cd_min_txt_sps' => 's-a-count-minute'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-counter-minutes.s-a-count-minute .sa-addons-countdown-amount' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_cd_min_txt_color',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#545454',
                'condition' => [
                    'sa_cd_min_txt_sps' => 's-a-count-minute'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-counter-minutes.s-a-count-minute .sa-addons-countdown-period' => 'color: {{VALUE}};'
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Seconds Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_cd_seco_txt',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Seconds',
                'loader' => TRUE,
                'placeholder' => 'Seconds',
            ]
        );

        $this->add_control(
            'sa_cd_seco_txt_sps',
            $this->style,
            [
                'label' => __('Separate Settings', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => '',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 's-a-count-second',
            ]
        );

        $this->add_control(
            'sa_cd_seco_num_color',
            $this->style,
            [
                'label' => __('Number Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f29993',
                'condition' => [
                    'sa_cd_seco_txt_sps' => 's-a-count-second'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-counter-seconds.s-a-count-second .sa-addons-countdown-amount' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_cd_seco_txt_color',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#545454',
                'condition' => [
                    'sa_cd_seco_txt_sps' => 's-a-count-second'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-addons-counter-seconds.s-a-count-second .sa-addons-countdown-period' => 'color: {{VALUE}};'
                ],
            ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
