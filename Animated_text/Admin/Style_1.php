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

class Style_1 extends AdminStyle
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
                'label' => esc_html__('Animated Text', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
       
        $this->add_repeater_control(
            'sa_animated_text_data',
            $this->style,
            [
                'label' => __('Animated Text Data', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'button' => 'Add New Text',
                'fields' => [
                    
                    'sa_animated_text_title' => [
                        'label' => esc_html__('Animated Text', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Animated Text',
                        'selector' => [
                            '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-progress-title-{{KEY}}' => '',
                        ],
                    ],
                    
                ],
                'title_field' => 'sa_animated_text_title',
            ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
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
                    'size' => 2000,
                ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 10000,
                        'step' => 1,
                    ],
                    
                ],
            ]
        );
        $this->add_control(
            'sa-animated_text_letter_speed',
            $this->style,
            [
                'label' => __('Letter Speed', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 70,
                ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    
                ],
            ]
        );
        

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Font Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_animated_text',
            $this->style,
            [
                'type' => Controls::TEXT,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-AT-P-style-1 .oxi-animated-style-1' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa_animated_text_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-AT-P-style-1 .oxi-animated-style-1' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_animated_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-AT-P-style-1 .oxi-animated-style-1' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa_animated_text_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-AT-P-style-1 .oxi-animated-style-1' => '',
                ]
            ]
        );
        

        $this->end_controls_section();
        
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
