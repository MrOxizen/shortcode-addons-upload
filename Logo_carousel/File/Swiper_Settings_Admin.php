<?php

namespace SHORTCODE_ADDONS_UPLOAD\Logo_carousel\File;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;
use SHORTCODE_ADDONS\Core\AdminStyle;

class Swiper_Settings_Admin extends AdminStyle
{

    public function Swiper_Slider_Options()
    {
        $this->start_section_devider();
        $this->Swiper_Options();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->Swiper_Arrows();
        $this->Swiper_Dots();
        $this->end_section_devider();
    }
    public function Swiper_Options()
    {
        $this->start_controls_section(
            'shortcode-addons-layout',
            [
                'label' => esc_html__('Slider Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_swiper_slider_note',
            $this->style,
            [
                'label' => __('Note', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'description' => 'Some fields work after saving and reloading',
            ]
        );
        $this->add_control(
            'sa_swiper_slider_effect',
            $this->style,
            [
                'label' => __('Effect', SHORTCODE_ADDOONS),
                'description' => __('Sets transition effect', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => true,
                'default' => 'slide',
                'options' => [
                    'slide' => __('Slide', SHORTCODE_ADDOONS),
                    'fade' => __('Fade', SHORTCODE_ADDOONS),
                    'cube' => __('Cube', SHORTCODE_ADDOONS),
                    'coverflow' => __('Coverflow', SHORTCODE_ADDOONS),
                    'flip' => __('Flip', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_control(
            'sa_swiper_slider_image_switcher',
            $this->style,
            [
                'label' => __('Custom Width Height', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => '',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'sa_swiper_slider_height_width',
            ]
        );
        $this->add_responsive_control(
            'sa_swiper_slider_image_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_swiper_slider_image_switcher' => 'sa_swiper_slider_height_width',
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => '700',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 1500,
                        'step' => 10,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_height_width' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_swiper_slider_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_height_width' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_swiper_slider_image_switcher' => 'sa_swiper_slider_height_width',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_swiper_slider_visible_items',
            $this->style,
            [
                'label' => __('Visible Items', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 3,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'condition' => [
                    'sa_swiper_slider_effect' => ['slide', 'coverflow'],
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_swiper_slider_items_gap',
            $this->style,
            [
                'label' => __('Items Gap', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_swiper_slider_slider_speed',
            $this->style,
            [
                'label' => __('Slider Speed', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 500,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 3000,
                        'step' => 50,
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_swiper_slider_autoplay_switter',
            $this->style,
            [
                'label' => __('Autoplay', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_swiper_slider_autoplay_speed',
            $this->style,
            [
                'label' => __('Autoplay Speed', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 1000,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 10000,
                        'step' => 50,
                    ],
                ],
                'condition' => [
                    'sa_swiper_slider_autoplay_switter' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'sa_swiper_slider_pause_switter',
            $this->style,
            [
                'label' => __('Pause On Hover', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_swiper_slider_loop_switter',
            $this->style,
            [
                'label' => __('Infinite Loop', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_swiper_slider_grab_cursor',
            $this->style,
            [
                'label' => __('Grab Cursor', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_swiper_slider_arrow',
            $this->style,
            [
                'label' => __('Arrows', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_swiper_slider_dots',
            $this->style,
            [
                'label' => __('Dots', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_swiper_slider_auto_height',
            $this->style,
            [
                'label' => __('Auto Height', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'condition' => [
                    '! sa_swiper_slider_image_switcher' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_swiper_slider_direction',
            $this->style,
            [
                'label' => __('Direction', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'left',
                'loader' => true,
                'options' => [
                    'left' => __('Left', SHORTCODE_ADDOONS),
                    'right' => __('Right', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->end_controls_section();
    }
    public function Swiper_Arrows()
    {
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Slider Arrows', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition'     => [
                    'sa_swiper_slider_arrow' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'sa_swiper_slider_arrows_left',
            $this->style,
            [
                'label' => __('Arrow Left', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-arrow-left',

            ]
        );
        $this->add_control(
            'sa_swiper_slider_arrows_right',
            $this->style,
            [
                'label' => __('Arrow Right', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-arrow-right',

            ]
        );
        $this->add_responsive_control(
            'sa_swiper_slider_arrows_width_height',
            $this->style,
            [
                'label' => __('Width Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 35,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ', {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . '' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ' .oxi-icons, {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . ' .oxi-icons' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_swiper_slider_arrows_size',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 22,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ' .oxi-icons, {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . ' .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_swiper_slider_arrows_position',
            $this->style,
            [
                'label' => __('Arrows Align X', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 400,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . '' => 'right: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . '' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();

        $this->add_control(
            'sa_swiper_slider_arrows_color_normal',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ' .oxi-icons, {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . ' .oxi-icons' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sa_swiper_slider_arrows_bg_color_normal',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#44bbed',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ', {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . '' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_swiper_slider_arrows_border_normal',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ', {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . '' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa_swiper_slider_arrows_boxsha_normal',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ', {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . '' => '',
                ]
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_swiper_slider_arrows_color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ':hover .oxi-icons, {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . ':hover .oxi-icons' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_swiper_slider_arrows_bg_color_hover',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ':hover, {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . ':hover' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_swiper_slider_arrows_border_hover',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ':hover, {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . ':hover' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa_swiper_slider_arrows_boxsha_hover',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ':hover, {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . ':hover' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_swiper_slider_arrows_border_radius_normal',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '50',
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
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ', {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . '' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_swiper_slider_arrows_padding',
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
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_next_' . $this->oxiid . ', {{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_prev_' . $this->oxiid . '' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    public function Swiper_Dots()
    {
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Slider Dots', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition'     => [
                    'sa_swiper_slider_dots' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'sa_swiper_slider_dots_position',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'options' => [
                    'sa_swiper_slider_dots_inside' => __('Inside', SHORTCODE_ADDOONS),
                    'sa_swiper_slider_dots_outside' => __('Outside', SHORTCODE_ADDOONS),
                ],
                'default' => 'sa_swiper_slider_dots_outside',
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_swiper_slider_dots_size',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '10',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_dots_' . $this->oxiid . ' .swiper-pagination-bullet' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_swiper_slider_dots_spacing',
            $this->style,
            [
                'label' => __('Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '3',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 30,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 5,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_dots_' . $this->oxiid . ' .swiper-pagination-bullet' => 'margin-left: {{SIZE}}{{UNIT}}; margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    'active' => esc_html__('Active', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_swiper_slider_dots_bg_color_normal',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgb(119, 119, 119)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_dots_' . $this->oxiid . ' .swiper-pagination-bullet' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_swiper_slider_dots_border_normal',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_dots_' . $this->oxiid . ' .swiper-pagination-bullet' => '',
                ]
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_swiper_slider_dots_bg_color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#44bbed',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_dots_' . $this->oxiid . ' .swiper-pagination-bullet:hover' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_swiper_slider_dots_border_hover',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_dots_' . $this->oxiid . ' .swiper-pagination-bullet:hover' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_swiper_slider_dots_bg_color_active',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#44bbed',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_dots_' . $this->oxiid . ' .swiper-pagination-bullet-active' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_swiper_slider_dots_border_active',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_dots_' . $this->oxiid . ' .swiper-pagination-bullet-active' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa_swiper_slider_dots_border_radius_normal',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_dots_' . $this->oxiid . ' .swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_swiper_slider_dots_margin',
            $this->style,
            [
                'label' => __('margin', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_swiper_slider_main_wrapper .sa_swiper_slider_dots_' . $this->oxiid . '' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
}
