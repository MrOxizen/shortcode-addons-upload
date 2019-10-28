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

class Style_9 extends AdminStyle
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
       $this->add_group_control(
                'sa_aminated_text_padding_background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-style-9' => '',
            ]
                ]
        );
         $this->add_responsive_control(
            'sa_aminated_text_padding',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 700,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-wrapper-style-9' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'sa_animated_text_style_9',
            $this->style,
            [
                'type' => Controls::TEXT,
                'default' => 'Johan Due',

            ]
        );
        $this->add_group_control(
            'sa_animated_text_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-wrapper-style-9 .oxi-addons-para' => ''
                ],
            ]
        );
       $this->add_control(
                'sa_animated_text_typo_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'options' => [
                'flex-start' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'flex-end' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-style-9' => 'justify-content: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
            'sa_animated_text_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-wrapper-style-9 .oxi-addons-para' => '',
                ]
            ]
        );
        

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Color Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        
        $this->add_control(
            'sa_animated_text_first_color',
            $this->style,
            [
                'label' => __('First Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-wrapper-style-9 .oxi-addons-para' => 'color: {{VALUE}};',
                   
                ]
            ]
        );
        $this->add_control(
            'sa_animated_text_second_color',
            $this->style,
            [
                'label' => __('Second Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#4897f7',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-wrapper-style-9 .oxi-addons-para .oxi-addons-span::after' => 'color: {{VALUE}};',
                ]
            ]
        );
        

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
