<?php

namespace SHORTCODE_ADDONS_UPLOAD\Drop_caps\Admin;

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

class Style_3 extends AdminStyle
{

    public function register_controls()
    {



        $this->start_section_tabs( //start  section tab
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'general-settings'
                ]
            ]
        );

        $this->start_section_devider(); // start section left right

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_drop_caps_text',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'placeholder' => 'w',
                'selector' => [
                    '{{WRAPPER}}.oxi_addons__drop_caps_main_style_3 .oxi_addons__text' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_drop_caps_text_position',
            $this->style,
            [
                'label' => __('Text Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'left',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}}.oxi_addons__drop_caps_main_style_3' => 'float:{{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_drop_caps_background_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 80,
                ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 3,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 3,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}}.oxi_addons__drop_caps_main_style_3 .oxi_addons__text' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_drop_caps_background_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 80,
                ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 3,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 3,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}}.oxi_addons__drop_caps_main_style_3 .oxi_addons__text' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_drop_caps_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                //'loader' => TRUE,
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
                    '{{WRAPPER}} .oxi_addons__drop_caps_main_style_3 .oxi_addons__text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );


        $this->end_controls_section();
        $this->end_section_devider();  //end section divider inline 
        $this->start_section_devider(); // start section left right

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Style Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );


        $this->add_control(
            'sa_drop_caps_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#545454',
                //  'loader' => TRUE,
                'selector' => [
                    '{{WRAPPER}}.oxi_addons__drop_caps_main_style_3 .oxi_addons__text' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_drop_caps_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}}.oxi_addons__drop_caps_main_style_3 .oxi_addons__text' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_drop_caps_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}}.oxi_addons__drop_caps_main_style_3 .oxi_addons__text' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_drop_caps_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->add_responsive_control(
            'sa_drop_caps_border_radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                //'loader' => TRUE,
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
                    '{{WRAPPER}}.oxi_addons__drop_caps_main_style_3 .oxi_addons__text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();  //end section divider inline 

        $this->end_section_tabs(); // end section tab left right  
    }
}
