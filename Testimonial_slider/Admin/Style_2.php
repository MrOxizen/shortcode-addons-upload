<?php

namespace SHORTCODE_ADDONS_UPLOAD\Testimonial_slider\Admin;

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

        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('Testimonial Slider ', SHORTCODE_ADDOONS),
                'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
                'arrow-settings' => esc_html__('Arrow Settings', SHORTCODE_ADDOONS),
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
            'label' => esc_html__('Testimonial Content', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_repeater_control(
                'sa_testi_silder_style_1', $this->style, [
            'label' => __('Testimonial Data', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'button' => 'Add New Testimonial',
            'fields' => [
                'sa_testi_silder_profile_picture_on_off' => [
                    'label' => __('Display Avatar?', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ],
                'sa_testi_silder_profile_picture_img' => [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/07/placeholder4-1.png',
                    ],
                    'controller' => 'add_group_control',
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'sa_testi_silder_profile_picture_on_off' => 'yes',
                    ]
                ],
                'sa_testi_silder_profile_name' => [
                    'label' => __('Name', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'John Mandis',
                    'placeholder' => 'John Mandis',
                ],
                'sa_testi_silder_company_name' => [
                    'label' => __('Company Name', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'placeholder' => 'Company Name',
                    'default' => 'Oxilab',
                ],
                'sa_testi_silder_profile_description' => [
                    'label' => esc_html__('Short Details', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                ],
                'sa_testi_silder_rating_on_off' => [
                    'label' => __('Display Rating?', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ],
                'sa_testi_silder_profile_rating' => [
                    'label' => __('Rating', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'options' => [
                        'rating-one' => __('1', SHORTCODE_ADDOONS),
                        'rating-two' => __('2', SHORTCODE_ADDOONS),
                        'rating-three' => __('3', SHORTCODE_ADDOONS),
                        'rating-four' => __('4', SHORTCODE_ADDOONS),
                        'rating-five' => __('5', SHORTCODE_ADDOONS),
                    ],
                    'default' => 'rating-five',
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'sa_testi_silder_rating_on_off' => 'yes',
                    ]
                ],
            ],
            'title_field' => 'sa_testi_silder_profile_name',
                ]
        );

        $this->add_responsive_control(
                'sa_testi_silder_body_padding', $this->style, [
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
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_body_margin', $this->style, [
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
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2_full_wrap' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_group_control(
                'sa_testi_silder_body_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Carousel Settings ', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_testi_silder_effect',
                $this->style,
                [
                    'label' => __('Effect', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'slide',
                    'loader' => true,
                    'options' => [
                        'slide' => __('Slide', SHORTCODE_ADDOONS),
                        'fade' => __('Fade', SHORTCODE_ADDOONS),
                        'cube' => __('Cube', SHORTCODE_ADDOONS),
                        'coverflow' => __('Coverflow', SHORTCODE_ADDOONS),
                        'flip' => __('Flip', SHORTCODE_ADDOONS),
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_visible_items',
                $this->style,
                [
                    'label' => __('Visible Items', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'loader' => true,
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
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_items_gap',
                $this->style,
                [
                    'label' => __('Items Gap', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 10,
                    ],
                    'separator' => true,
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
                'sa_testi_silder_slider_speed',
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
                'sa_testi_silder_list_main_separator',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::SEPARATOR,
                    Controls::SEPARATOR => true,
                ]
        );
        $this->add_control(
                'sa_testi_silder_autoplay_switter',
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
                'sa_testi_silder_autoplay_speed',
                $this->style,
                [
                    'label' => __('Autoplay Speed  ', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 2000,
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 5000,
                            'step' => 50,
                        ],
                    ],
                    'condition' => [
                        'sa_testi_silder_autoplay_switter' => 'yes',
                    ],
                ]
        );
        $this->add_control(
                'sa_testi_silder_list_main_infinite',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::SEPARATOR,
                    Controls::SEPARATOR => true,
                ]
        );
        $this->add_control(
                'sa_testi_silder_loop_switter',
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
                'sa_testi_silder_pause_switter',
                $this->style,
                [
                    'label' => __('Pause On Hover', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'no',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_testi_silder_list_main_infinite',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::SEPARATOR,
                    Controls::SEPARATOR => true,
                ]
        );
        $this->add_control(
                'sa_testi_silder_pause_grab_cursor',
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
                'sa_testi_silder_list_main_navigator',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::SEPARATOR,
                    Controls::SEPARATOR => true,
                ]
        );
        $this->add_control(
                'sa_testi_slider_nav_on_off', $this->style, [
            'label' => __('Navigation', SHORTCODE_ADDOONS),
            'type' => Controls::HEADING,
            'separator' => TRUE,
                ]
        );
        $this->add_control(
                'sa_testi_silder_pause_arrow',
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
                'sa_testi_silder_pause_dots',
                $this->style,
                [
                    'label' => __('Dots', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'no',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_testi_silder_list_main_direction',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::SEPARATOR,
                    Controls::SEPARATOR => true,
                ]
        );
        $this->add_control(
                'sa_testi_silder_direction',
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
        $this->end_section_devider();

        $this->end_section_tabs();

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'style-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-test-style', [
            'label' => esc_html__('Testimonial Styles', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa_testi_silder_bg_full', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-item' => '',
            ]
                ]
        );
        $this->add_control(
                'sa_testi_silder_set_line_position',
                $this->style,
                [
                    'label' => __('Set Alignment', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'operator' => Controls::OPERATOR_ICON,
                    'default' => 'oxi-testimonial-align-centered',
                    'options' => [
                        'oxi-testimonial-align-left' => [
                            'title' => __('Left', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-align-left',
                        ],
                        'oxi-testimonial-align-centered' => [
                            'title' => __('Center', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-align-center',
                        ],
                        'oxi-testimonial-align-right' => [
                            'title' => __('Right', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-align-right',
                        ],
                    ],
                    'loader' => true
                ]
        );
        $this->add_control(
                'sa_testi_silder_display_user',
                $this->style,
                [
                    'label' => __('Display User & Company Block?', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => TRUE,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_group_control(
                'sa_testi_silder_body_boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-item' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_style_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-item' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_testi_silder_full_style_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-item' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_full_style_border_radius', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Testimonial Image Style', SHORTCODE_ADDOONS),
            'showing' => False,
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_full_style_image_width', $this->style, [
            'label' => __('Max Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 90,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 2000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-image' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_testi_silder_full_style_image_height', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 90,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 2000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-image img' => 'width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_testi_silder_full_style_image_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-image img' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa_testi_silder_full_style_image_border_radius', $this->style, [
            'label' => __('Border Raidus', SHORTCODE_ADDOONS),
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
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-image img' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );


        $this->add_responsive_control(
                'sa_testi_silder_full_style_image_pad', $this->style, [
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
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-image img' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_full_style_image_margin', $this->style, [
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
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-image img' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Rating', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_rating-size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 2000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .testimonial-star-rating li .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_testi_silder_rating-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ff6600',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .rating-five .testimonial-star-rating li .oxi-icons' => 'color : {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .rating-one .testimonial-star-rating li:first-child .oxi-icons' => 'color : {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .rating-two .testimonial-star-rating li:nth-child(1) .oxi-icons' => 'color : {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .rating-two .testimonial-star-rating li:nth-child(2) .oxi-icons' => 'color : {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .rating-three .testimonial-star-rating li:nth-child(1) .oxi-icons' => 'color : {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .rating-three .testimonial-star-rating li:nth-child(2) .oxi-icons' => 'color : {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .rating-three .testimonial-star-rating li:nth-child(3) .oxi-icons' => 'color : {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .rating-four .testimonial-star-rating li:nth-child(1) .oxi-icons' => 'color : {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .rating-four .testimonial-star-rating li:nth-child(2) .oxi-icons' => 'color : {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .rating-four .testimonial-star-rating li:nth-child(3) .oxi-icons' => 'color : {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .rating-four .testimonial-star-rating li:nth-child(4) .oxi-icons' => 'color : {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa_testi_silder_rating-color-unactive', $this->style, [
            'label' => __('Disable Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .testimonial-star-rating li .oxi-icons' => 'color: {{VALUE}};',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa_testi_silder_rating-padding', $this->style, [
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
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .testimonial-star-rating li .oxi-icons' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_rating-margin', $this->style, [
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
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .testimonial-star-rating ' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Name', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_testi_silder_name_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2  .oxi-testimonial-content .oxi-testimonial-user' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_testi_silder_name_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2  .oxi-testimonial-content .oxi-testimonial-user' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa_testi_silder_name_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2  .oxi-testimonial-content .oxi-testimonial-user' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Company', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );

        $this->add_control(
                'sa_testi_silder_comapany_name_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-content .oxi-testimonial-user-company ' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_testi_silder_comapany_name_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2  .oxi-testimonial-content .oxi-testimonial-user-company ' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa_testi_silder_comapany_name_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2  .oxi-testimonial-content .oxi-testimonial-user-company ' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Information', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_testi_silder_information_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-content .oxi-testimonial-text' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_testi_silder_information_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-content .oxi-testimonial-text' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa_testi_silder_information_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi-testimonial-content .oxi-testimonial-text' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();


        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'arrow-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Arrow Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_testi_silder_pause_arrow' => 'yes'
            ]
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs',
                [
                    'options' => [
                        'left_arrow' => esc_html__('Left Arrow', SHORTCODE_ADDOONS),
                        'right_arrow' => esc_html__('Right Arrow', SHORTCODE_ADDOONS),
                    ],
                ]
        );

        $this->start_controls_tab();
        $this->add_control(
                'sa_testi_silder_icon_left',
                $this->style,
                [
                    'label' => __('Left Arrow', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fas fa-angle-left',
                    'placeholder' => 'example:- fab fa-adn',
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_icon_left_position',
                $this->style,
                [
                    'label' => __('Icon Postion', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => '',
                    ],
                    'range' => [
                        'px' => [
                            'min' => -300,
                            'max' => 300,
                            'step' => 2,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .swiper-button-prev' => 'left: {{SIZE}}px;',
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_testi_silder_icon_right',
                $this->style,
                [
                    'label' => __('Right Arrow', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fas fa-angle-right',
                    'placeholder' => 'example:- fab fa-adn',
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_icon_right_position',
                $this->style,
                [
                    'label' => __('Icon Postion', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => '',
                    ],
                    'range' => [
                        'px' => [
                            'min' => -300,
                            'max' => 300,
                            'step' => 2,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2  .swiper-button-next' => 'right: {{SIZE}}px;',
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
                'sa_testi_silder_icon_separator',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::SEPARATOR,
                    Controls::SEPARATOR => true,
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_icon_font_size',
                $this->style,
                [
                    'label' => __('Icon Size', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => '',
                    ],
                    'range' => [
                        'px' => [
                            'min' => 5,
                            'max' => 200,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 1,
                            'max' => 20,
                            'step' => 0.1,
                        ],
                        'rem' => [
                            'min' => 1,
                            'max' => 20,
                            'step' => 0.1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-next' => 'font-size: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-prev' => 'font-size: {{SIZE}}{{UNIT}};',
                    ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs',
                [
                    'options' => [
                        'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                        'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    ],
                ]
        );

        $this->start_controls_tab();
        $this->add_control(
                'sa_testi_silder_icon_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-next' => 'color:{{VALUE}};',
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-prev' => 'color:{{VALUE}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_testi_silder_icon_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#28a745',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-next' => 'background:{{VALUE}};',
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-prev' => 'background:{{VALUE}};',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_testi_silder_icon_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-next' => '',
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-prev' => '',
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_icon_radius',
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
                            'min' => -100,
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
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_testi_silder_icon_color_hover',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-next:hover' => 'color:{{VALUE}};',
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-prev:hover' => 'color:{{VALUE}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_testi_silder_icon_bg_color_hover',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#28a745',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-next:hover' => 'background-color:{{VALUE}};',
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-prev:hover' => 'background-color:{{VALUE}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_testi_silder_icon_border_color',
                $this->style,
                [
                    'label' => __('Border Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-next:hover' => 'border-color:{{VALUE}};',
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-prev:hover' => 'border-color:{{VALUE}};',
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_icon_radius_hover',
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
                            'min' => -100,
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
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-prev:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
                'sa_testi_silder_icon_separator',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::SEPARATOR,
                    Controls::SEPARATOR => true,
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_icon_padding',
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
                            'max' => 300,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 10,
                            'step' => .1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-next' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-button-prev' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Pagination: Dots', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_testi_silder_pause_dots' => 'yes'
            ]
                ]
        );


        $this->add_responsive_control(
                'sa_testi_silder_pagination_dot_size',
                $this->style,
                [
                    'label' => __('Size', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => '',
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 40,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 1,
                            'max' => 20,
                            'step' => 0.1,
                        ],
                        'rem' => [
                            'min' => 1,
                            'max' => 20,
                            'step' => 0.1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}}  .oxi_addons_testi_slider_style_2 .oxi_addons__dot .swiper-pagination-bullet' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_pagination_dot_spacing',
                $this->style,
                [
                    'label' => __('Spacing', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => '',
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 40,
                            'step' => 1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}}  .oxi_addons_testi_slider_style_2 .oxi_addons__dot .swiper-pagination-bullet' => 'margin-left: {{SIZE}}px; margin-right: {{SIZE}}px;',
                    ],
                ]
        );

        $this->start_controls_tabs(
                'shortcode-addons-start-tabs',
                [
                    'options' => [
                        'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                        'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    ],
                ]
        );

        $this->start_controls_tab();

        $this->add_control(
                'sa_testi_silder_pagination_dot_color_active',
                $this->style,
                [
                    'label' => __('Active Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#000',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background:{{VALUE}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_testi_silder_pagination_dot_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#28a745',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-pagination-bullet' => 'background:{{VALUE}};',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_testi_silder_pagination_dot_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-pagination-bullet' => '',
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_testi_silder_pagination_dot_radius',
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
                            'max' => 300,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 10,
                            'step' => .1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );

        $this->add_responsive_control(
                'sa_testi_silder_pagination_dot_margin',
                $this->style,
                [
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
                            'min' => -100,
                            'max' => 200,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => -3,
                            'max' => 10,
                            'step' => .1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2 .oxi_addons__dot ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );


        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_testi_silder_pagination_dot_hover_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#28a745',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-pagination-bullet:hover' => 'background:{{VALUE}};',
                    ],
                ]
        );

        $this->add_control(
                'sa_testi_silder_pagination_dot_border_color',
                $this->style,
                [
                    'label' => __('Border Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_testi_slider_style_2.swiper-container-wrap .swiper-pagination-bullet:hover' => 'border-color:{{VALUE}};',
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
