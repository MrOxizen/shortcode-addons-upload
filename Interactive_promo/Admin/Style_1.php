<?php

namespace SHORTCODE_ADDONS_UPLOAD\Interactive_promo\Admin;

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
                'label' => esc_html__('Feature Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_repeater_control(
            'sa_interactive_promo_repeater',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_interactive_promo_image' => [
                        'type' => Controls::MEDIA,
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/placeholder.png',
                        ],
                        'loader' => TRUE,
                        'controller' => 'add_group_control',
                    ],
                    'sa_interactive_promo_image_alt' => [
                        'label' => esc_html__('Image ALT Tag', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('Image alt tag', SHORTCODE_ADDOONS), 
                    ],
                    'sa_interactive_promo_heading' => [
                        'label' => esc_html__('Promo Heading', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('Interactive Promo awesome', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_{{KEY}} .oxi-addons-promo' => '',
                        ],
                    ],
                    'sa_interactive_promo_description' => [
                        'label' => esc_html__('Promo Description', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => esc_html__('Click to inspect, then edit as needed.', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_{{KEY}} .oxi-addons-details' => '',
                        ],
                    ], 
                ],
                'title_field' => 'sa_interactive_promo_heading',
            ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_group_control(
            'sa_addons_interactive_promo_column',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'default' => 'oxi-bt-col-lg-4',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_interactive_promo_main_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-interactive-promo' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_interactive_promo_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-interactive-promo' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_interactive_promo_radius',
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
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-interactive-promo' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-interactive-promo figure' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_interactive_promo_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-interactive-promo' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_addons_interactive_promo_padding',
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
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-interactive-promo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
                'separator' => TRUE
            ]
        );
        $this->add_responsive_control(
            'sa_addons_interactive_promo_margin',
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
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_interactive_promo_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->end_controls_section(); 
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_interactive_promo_badge_position',
            $this->style,
            [
                'label' => __('Bade Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'top-left',
                'loader' => TRUE,
                'options' => [
                    'effect-lily' => __('Lily', SHORTCODE_ADDOONS), 
                    'effect-sadie' => __('Sadie', SHORTCODE_ADDOONS), 
                    'effect-layla' => __('Layla', SHORTCODE_ADDOONS), 
                    'effect-oscar' => __('Oscar', SHORTCODE_ADDOONS), 
                    'effect-marley' => __('Marley', SHORTCODE_ADDOONS), 
                    'effect-ruby' => __('Ruby', SHORTCODE_ADDOONS), 
                    'effect-roxy' => __('Roxy', SHORTCODE_ADDOONS), 
                    'effect-bubba' => __('Bubba', SHORTCODE_ADDOONS), 
                    'effect-romeo' => __('Romeo', SHORTCODE_ADDOONS), 
                    'effect-sarah' => __('Sarah', SHORTCODE_ADDOONS), 
                    'effect-chico' => __('Chico', SHORTCODE_ADDOONS), 
                    'effect-milo' => __('Milo', SHORTCODE_ADDOONS), 
                    'effect-apollo' => __('Apolo', SHORTCODE_ADDOONS), 
                    'effect-jazz' => __('Jazz', SHORTCODE_ADDOONS), 
                    'effect-ming' => __('Ming', SHORTCODE_ADDOONS), 
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi_addons__badge' => '',
                ],
            ]
        );

        $this->add_control(
            'sa_interactive_promo_image_switcher',
            $this->style,
            [
                'label' => __('Custom Width Height', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_responsive_control(
            'sa_interactive_promo_image_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_interactive_promo_image_switcher' => 'yes'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 500,
                ],
                'range' => [
                    '%' => [
                        'min' => 50,
                        'max' => 250,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 100,
                        'max' => 1200,
                        'step' => 10,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-interactive-promo' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_interactive_promo_height',
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
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-interactive-promo' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-interactive-promo figure' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_interactive_promo_image_switcher' => 'yes'
                ],
            ]
        );
        $this->end_controls_section();
      
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Heading Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_control(
            'sa_interactive_promo_title_tag',
            $this->style,
            [
                'label' => __('Tag', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'h3',
                'loader' => TRUE,
                'options' => [
                    'h1' => __('H1', SHORTCODE_ADDOONS),
                    'h2' => __('H2', SHORTCODE_ADDOONS),
                    'h3' => __('H3', SHORTCODE_ADDOONS),
                    'h4' => __('H4', SHORTCODE_ADDOONS),
                    'h5' => __('H5', SHORTCODE_ADDOONS),
                    'h6' => __('H6', SHORTCODE_ADDOONS),
                    'div' => __('DIV', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_group_control(
            'sa_interactive_promo_heading_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-promo' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_interactive_promo_heading_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-promo' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_interactive_promo_heading_padding',
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
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-promo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Description Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_interactive_promo_details_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-details' => ''
                ],
            ]
        );

        $this->add_control(
            'sa_interactive_promo_details_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#333',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-details' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_interactive_promo_details_padding',
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
                    '{{WRAPPER}} .oxi_addons__interactive_promo_content_style_1 .oxi-addons-details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs(); 
    }
}
