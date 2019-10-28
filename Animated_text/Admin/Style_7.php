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

class Style_7 extends AdminStyle
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
        $this->add_responsive_control(
            'sa_animated_text_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-wrapper-style-7' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('In Animation', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'oxi-addons-select-in-animation',
            $this->style,
            [
                'label' => __('Animation In Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'bounce',
                'loader' => TRUE,
                'options' => [
                    'flash' => __('Flash', SHORTCODE_ADDOONS),
                    'bounce' => __('Bounce', SHORTCODE_ADDOONS),
                    'shake' => __('Shake', SHORTCODE_ADDOONS),
                    'tada' => __('Tada', SHORTCODE_ADDOONS),
                    'swing' => __('Swing', SHORTCODE_ADDOONS),
                    'wobble' => __('Wobble', SHORTCODE_ADDOONS),

                ],
            ]
        );
        $this->add_control(
            'oxi-addons-select-out-animation',
            $this->style,
            [
                'label' => __('In Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'sequence',
                'loader' => TRUE,
                'options' => [
                    'sequence' => __('Sequence', SHORTCODE_ADDOONS),
                    'reverse' => __('Reverse', SHORTCODE_ADDOONS),
                    'sync' => __('Sync', SHORTCODE_ADDOONS),
                    'shuffle' => __('Shuffle', SHORTCODE_ADDOONS),
                ],
            ]
        );
        

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Out Animation', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'oxi-addons-select-out-animation',
            $this->style,
            [
                'label' => __('Animation Out Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'flash',
                'loader' => TRUE,
                'options' => [
                    'flash' => __('Flash', SHORTCODE_ADDOONS),
                    'bounce' => __('Bounce', SHORTCODE_ADDOONS),
                    'shake' => __('Shake', SHORTCODE_ADDOONS),
                    'tada' => __('Tada', SHORTCODE_ADDOONS),
                    'swing' => __('Swing', SHORTCODE_ADDOONS),
                    'wobble' => __('Wobble', SHORTCODE_ADDOONS),

                ],
            ]
        );
        $this->add_control(
            'oxi-addons-select-in-animation',
            $this->style,
            [
                'label' => __('Out Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'sequence',
                'loader' => TRUE,
                'options' => [
                    'sequence' => __('Sequence', SHORTCODE_ADDOONS),
                    'reverse' => __('Reverse', SHORTCODE_ADDOONS),
                    'sync' => __('Sync', SHORTCODE_ADDOONS),
                    'shuffle' => __('Shuffle', SHORTCODE_ADDOONS),
                ],
            ]
        );
        

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Text Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
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
                    '{{WRAPPER}} .oxi-addons-wrapper-style-7 .oxi-addons-tlt *' => ''
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
                    '{{WRAPPER}} .oxi-addons-wrapper-style-7 .oxi-addons-tlt *' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa_animated_text_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-wrapper-style-7 .oxi-addons-tlt *' => '',
                ]
            ]
        );
        

        $this->end_controls_section();
        
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
