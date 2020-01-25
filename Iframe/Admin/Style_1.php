<?php

namespace SHORTCODE_ADDONS_UPLOAD\Iframe\Admin;

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

class Style_1 extends AdminStyle {

    public function register_controls() {

        $this->start_section_tabs(
                'shortcode-addons-start-tabs',
                []
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_iframe_style_1_text',
                $this->style,
                [
                    'label' => __('Content Source', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'https://www.sa-elementor-addons.com',
                    'placeholder' => 'Content Source',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_10 .oxi_addons__heading' => ''
                    ],
                    'description' => 'You can put here any website url, youtube, vimeo, document or image embed url'
                ]
        );
        $this->add_responsive_control(
                'sa_iframe_style_1_width',
                $this->style,
                [
                    'label' => __('Max Width', SHORTCODE_ADDOONS),
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
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 500,
                            'step' => .1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .sa-iframe-style-1-section ' => 'max-width:{{SIZE}}{{UNIT}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_iframe_style_1_auto_height',
                $this->style,
                [
                    'label' => __('Auto Height', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'no',
                    'loader' => TRUE,
                    'label_on' => __('No', SHORTCODE_ADDOONS),
                    'label_off' => __('Yes', SHORTCODE_ADDOONS),
                    'return_value' => 'no',
                ]
        );

        $this->add_responsive_control(
                'sa_iframe_style_1_height',
                $this->style,
                [
                    'label' => __('Iframe Height', SHORTCODE_ADDOONS),
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
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                            'step' => 1,
                        ],
                    ],
                    'condition' => [
                        'sa_iframe_style_1_auto_height' => 'no'
                    ],
                    'selector' => [
                        '{{WRAPPER}} .sa-iframe-style-1-section > iframe' => 'height:{{SIZE}}{{UNIT}};',
                    ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_iframe_style_1_fullscreen',
                $this->style,
                [
                    'label' => __('Allow Fullscreen', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => TRUE,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_iframe_style_1_scroll',
                $this->style,
                [
                    'label' => __('Show Scroll Bar', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => TRUE,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_responsive_control(
                'sa_iframe_style_1_Padding',
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
                        '{{WRAPPER}} .sa-iframe-style-1-section ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_iframe_style_1_animation',
                $this->style,
                [
                    'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
