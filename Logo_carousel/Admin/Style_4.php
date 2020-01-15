<?php

namespace SHORTCODE_ADDONS_UPLOAD\Logo_carousel\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_4
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_4 extends AdminStyle
{

    public function register_controls()
    {
        $this->start_section_tabs(
            'shortcode-addons-start-tabs', [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'general-settings',
                ],
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Logo Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_repeater_control(
            'sa_logo_carousel_reapeter', $this->style, [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_logo_carousel_title_show' => [
                        'label' => __('Show Title', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'default' => 'no',
                        'loader' => true,
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ],
                    'sa_logo_carousel_title' => [
                        'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Logo 01', 
                        'selector' => [
                            '{{WRAPPER}}  .oxi_addons__logo_carousel_style_{{KEY}} .oxi_addons__title' => '',
                        ],
                    ],
                    'sa_logo_carousel_title_link' => [
                        'label' => esc_html__('Link', SHORTCODE_ADDOONS),
                        'type' => Controls::URL,
                        'controller' => 'add_group_control',
                        'selector' => [
                            '{{WRAPPER}}  .oxi_addons__logo_carousel_style_{{KEY}} .oxi_addons__title_link' => '',
                        ],
                    ],
                    'sa_logo_carousel_image' => [
                        'type' => Controls::MEDIA,
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/08/logo-for-circle-2-1.png',
                        ],
                        'controller' => 'add_group_control',
                    ],
                ],
                'title_field' => 'sa_logo_carousel_title',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
       
        $this->add_group_control(
            'sa_addons_logo_carousel_main_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_logo_carousel_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_logo_carousel_radius',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_logo_carousel_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_addons_logo_carousel_padding',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => true,
            ]
        );
        $this->add_responsive_control(
            'sa_addons_logo_carousel_margin',
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
                    '{{WRAPPER}} .oxi_addons_logo_carousel_wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Carousel Settings ', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_logo_carousel_image_switcher',
            $this->style,
            [
                'label' => __('Custom Width Height', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'swiper__container_slide', 
            ]
        );
        $this->add_responsive_control(
            'sa_logo_carousel_image_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_logo_carousel_image_switcher' => 'swiper__container_slide', 
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 50,
                        'max' => 250,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 100,
                        'max' => 1500,
                        'step' => 10,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .swiper__container_slide' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_logo_carousel_height',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .swiper__container_slide' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_logo_carousel_image_switcher' => 'swiper__container_slide', 
                ],
            ]
        );
      
        $this->add_responsive_control(
            'sa_addons_logo_carousel_visible_items',
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
            ]
        );
        $this->add_responsive_control(
            'sa_addons_logo_carousel_items_gap',
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
            'sa_addons_logo_carousel_slider_speed',
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
            'sa_logo_carousel_list_main_separator',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => true,

            ]
        );
        $this->add_control(
            'sa_logo_carousel_autoplay_switter',
            $this->style,
            [
                'label' => __('Autoplay', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_addons_logo_carousel_autoplay_speed',
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
                        'max' => 5000,
                        'step' => 50,
                    ],
                ],
                'condition' => [
                    'sa_logo_carousel_autoplay_switter' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'sa_logo_carousel_list_main_infinite',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => true,

            ]
        );
        $this->add_control(
            'sa_logo_carousel_loop_switter',
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
            'sa_logo_carousel_pause_switter',
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
            'sa_logo_carousel_list_main_in',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => true,

            ]
        ); 
        $this->add_control(
            'sa_logo_carousel_list_main_navigator',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => true,

            ]
        );
        $this->add_control(
            'sa_logo_carousel_Heading',
            $this->style,
            [
                'label' => __('Navigation', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,  
            ]
        );
    
        $this->add_control(
            'sa_logo_carousel_pause_arrow',
            $this->style,
            [
                'label' => __('Arrows', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_logo_carousel_pause_dots',
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
            'sa_logo_carousel_list_main_direction',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => true,

            ]
        );
        $this->add_control(
            'sa_addons_logo_carousel_direction',
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
        $this->start_section_devider();
        
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Logo Settings ', SHORTCODE_ADDOONS),
                'showing' => true,
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
            'sa_logo_carousel_grayscale_switter',
            $this->style,
            [
                'label' => __('Grayscale', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'oxi_addons_grayscale',
            ]
        );
        $this->add_responsive_control(
            'sa_logo_carousel_line_width',
            $this->style,
            [
                'label' => __('Opacity', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__image' => 'opacity: {{SIZE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_logo_carousel_grayscale_switter_hover',
            $this->style,
            [
                'label' => __('Grayscale', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'oxi_addons_grayscale_hover',
            ]
        );
        $this->add_responsive_control(
            'sa_logo_carousel_line_width_hover',
            $this->style,
            [
                'label' => __('Opacity', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__image:hover' => 'opacity: {{SIZE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_logo_carousel_list_title_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__title' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_logo_carousel_list_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__title' => 'color:{{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_logo_carousel_list_title_padding',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Arrow Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_logo_carousel_pause_arrow' => 'yes'
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
            'sa_logo_carousel_icon_left',
            $this->style,
            [
                'label' => __('Left Arrow', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-angle-left',
                'placeholder' => 'example:- fas fa-angle-left',
            ]
        );
        $this->add_responsive_control(
            'sa_logo_carousel_icon_left_position',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__icon_left' => 'left: {{SIZE}}px;',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_logo_carousel_icon_right',
            $this->style,
            [
                'label' => __('Right Arrow', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-angle-right',
                'placeholder' => 'example:- fas fa-angle-right',
            ]
        );
        $this->add_responsive_control(
            'sa_logo_carousel_icon_right_position',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__icon_right' => 'right: {{SIZE}}px;',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
            'sa_logo_carousel_icon_separator',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => true,

            ]
        );
        $this->add_responsive_control(
            'sa_logo_carousel_icon_font_size',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_logo_carousel_icon_width_height',
            $this->style,
            [
                'label' => __('Width Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 5,
                        'max' => 100,
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__icon_left' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}',
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__icon_right' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}',
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
            'sa_logo_carousel_icon_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi-icons' => 'color:{{VALUE}};', 
                ],
            ]
        );
        $this->add_control(
            'sa_logo_carousel_icon_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#28a745',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_left' => 'background-color:{{VALUE}};',
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_right' => 'background-color:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_logo_carousel_icon_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_left' => '',
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_right' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_logo_carousel_icon_radius',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_left' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_right' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_logo_carousel_icon_color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi-icons:hover' => 'color:{{VALUE}};', 
                ],
            ]
        ); 
        $this->add_control(
            'sa_logo_carousel_icon_bg_color_hover',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#28a745',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}}  .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_left:hover' => 'background-color:{{VALUE}};',
                    '{{WRAPPER}}  .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_right:hover' => 'background-color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_logo_carousel_icon_border_color',
            $this->style,
            [
                'label' => __('Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_left:hover' => 'border-color:{{VALUE}};', 
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_right:hover' => 'border-color:{{VALUE}};', 
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_logo_carousel_radius_hover',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_left:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4  .oxi_addons__icon_right:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_logo_carousel_icon_separator',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => true,

            ]
        );
         
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Pagination: Dots', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_logo_carousel_pause_dots' => 'yes'
                ]
            ]
        );

        $this->add_control(
            'sa_addons_logo_carousel_position',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'swiper-pagination-outside',
                'loader' => true,
                'options' => [
                    'swiper-pagination-inside' => __('Inside', SHORTCODE_ADDOONS),
                    'swiper-pagination-outside' => __('Outside', SHORTCODE_ADDOONS),
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__dot' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_logo_carousel_dot_size',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__dot .swiper-pagination-bullet' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_logo_carousel_spacing_size',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__dot .swiper-pagination-bullet' => 'margin-left: {{SIZE}}{{UNIT}}; margin-right: {{SIZE}}{{UNIT}};',
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
            'sa_logo_carousel_dot_bg_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(120, 194, 255, 1)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__dot .swiper-pagination-bullet' => 'background:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_logo_carousel_dot_color_active',
            $this->style,
            [
                'label' => __('Active Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#0b4f87',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__dot .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background:{{VALUE}};', 
                ],
            ]
        );
        
        $this->add_group_control(
            'sa_logo_carousel_dot_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__dot .swiper-pagination-bullet' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_logo_carousel_dot_radius',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__dot .swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_logo_carousel_dot_padding',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__dot' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(); 
        $this->add_control(
            'sa_logo_carousel_dot_bg_color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#28a745',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__dot .swiper-pagination-bullet:hover' => 'background:{{VALUE}};',
                ],
            ]
        );
       
        $this->add_control(
            'sa_logo_carousel_dot_border_color',
            $this->style,
            [
                'label' => __('Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_4 .oxi_addons__dot .swiper-pagination-bullet:hover' => 'border-color:{{VALUE}};', 
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