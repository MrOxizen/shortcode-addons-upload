<?php

namespace SHORTCODE_ADDONS_UPLOAD\Logo_carousel\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;
use SHORTCODE_ADDONS_UPLOAD\Logo_carousel\File\Swiper_Settings_Admin;

class Style_1 extends Swiper_Settings_Admin
{

    public function register_controls()
    {
        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'slider-settings' => esc_html__('Slider Settings', SHORTCODE_ADDOONS),
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
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_logo_carousel_title_show' => 'yes',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_logo_carousel_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1' => '',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1' => '',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1 .oxi_addons__image' => 'opacity: {{SIZE}};',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1 .oxi_addons__image:hover' => 'opacity: {{SIZE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
            'sa_addons_logo_carousel_img_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'separator' => true,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1 .oxi_addons__image' => '',
                ],
            ]
        );$this->add_group_control(
            'sa_addons_logo_carousel_img_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1 .oxi_addons__image' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_logo_carousel_img_radius',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1 .oxi_addons__image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_logo_carousel_img_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1 .oxi_addons__image' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_logo_carousel_img_padding',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1 .oxi_addons__image' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1 .oxi_addons__title' => '',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1 .oxi_addons__title' => 'color:{{VALUE}};',
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
                    '{{WRAPPER}} .oxi_addons__logo_carousel_style_1 .oxi_addons__title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    'shortcode-addons-start-tabs' => 'slider-settings'
                ]
            ]
        ); 
        $this->Swiper_Slider_Options();
        $this->end_section_tabs();
    }

}
