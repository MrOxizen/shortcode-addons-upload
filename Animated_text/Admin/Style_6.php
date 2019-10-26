<?php

namespace SHORTCODE_ADDONS_UPLOAD\Animated_text\Admin;

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

class Style_6 extends AdminStyle
{

    public function register_controls()
    {

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
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
            'sa_animated_text_animation_on_off',
            $this->style,
            [
                'label' => __('Disable Animation?', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa-animated_text_speed',
            $this->style,
            [
                'label' => __('Speed', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    
                ],
                
            ]
        );
        $this->add_control(
            'sa-animated_text_stroke_width',
            $this->style,
            [
                'label' => __('Stroke Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 6,
                ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 10,
                        'step' => 1,
                    ],
                    
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-6 .oxi-add-text-copy' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
                
            ]
        );
        $this->add_control(
            'sa-animated_text_margin_top',
            $this->style,
            [
                'label' => __('Margin Top', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => -5.5,
                ],
                'range' => [
                    '%' => [
                        'min' => -50.1,
                        'max' => 50,
                        'step' => .1,
                    ],
                    
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-6 svg' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
                
            ]
        );
        $this->add_control(
            'sa-animated_text_margin_bottom',
            $this->style,
            [
                'label' => __('Margin Bottom', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => -15.5,
                ],
                'range' => [
                    '%' => [
                        'min' => -50.1,
                        'max' => 50,
                        'step' => .1,
                    ],
                    
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-6 svg' => 'margin-bottom:{{SIZE}}{{UNIT}};',
                ],
                
            ]
        );

        $this->end_controls_section();
        
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Stroke Colors', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_animated_text_1st_color',
            $this->style,
            [
                'label' => __('1st Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#eb7f7f',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-6 .oxi-add-text-copy:nth-child(1)' => 'stroke: {{VALUE}};',
                ]
            ]
        );
        $this->add_control(
            'sa_animated_text_2nd_color',
            $this->style,
            [
                'label' => __('2nd Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#6edae0',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-6 .oxi-add-text-copy:nth-child(2)' => 'stroke: {{VALUE}};',
                ]
            ]
        );
        $this->add_control(
            'sa_animated_text_3rd_color',
            $this->style,
            [
                'label' => __('3rd Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#5ce091',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-6 .oxi-add-text-copy:nth-child(3)' => 'stroke: {{VALUE}};',
                ]
            ]
        );
        $this->add_control(
            'sa_animated_text_4th_color',
            $this->style,
            [
                'label' => __('4th Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#be70db',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-6 .oxi-add-text-copy:nth-child(4)' => 'stroke: {{VALUE}};',
                ]
            ]
        );
        $this->add_control(
            'sa_animated_text_5th_color',
            $this->style,
            [
                'label' => __('5th Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#d9e04c',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-6 .oxi-add-text-copy:nth-child(5)' => 'stroke: {{VALUE}};',
                ]
            ]
        );
        

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('First Text', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_animated_first_text',
            $this->style,
            [
                'type' => Controls::TEXT,
                'default' => 'Hello',
                
            ]
        );
         $this->add_control(
            'sa-animated_text_1st_text_font_size',
            $this->style,
            [
                'label' => __('Font Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'em',
                    'size' => .5,
                ],
                'range' => [
                    'em' => [
                        'min' => .1,
                        'max' => 50,
                        'step' => .1,
                    ],
                    
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-add-text--line2' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Second Text', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_animated_second_text',
            $this->style,
            [
                'type' => Controls::TEXT,
                'default' => 'Wrold',
            ]
        );
         $this->add_control(
            'sa-sa_animated_second_text_font_size',
            $this->style,
            [
                'label' => __('Font Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'em',
                    'size' => .5,
                ],
                'range' => [
                    'em' => [
                        'min' => .1,
                        'max' => 50,
                        'step' => .1,
                    ],
                    
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-add-text--line' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
