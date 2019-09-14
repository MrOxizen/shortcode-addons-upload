<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Icon\Admin;

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

class Style_2 extends AdminStyle
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
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_group_control(
            'sa_icon_column',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'default' => 'oxi-bt-col-lg-3',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__icon_main_wrapper' => '',
                ],
            ]
        );

        $this->add_control(
            'sa_icon_link_opening_style',
            $this->style,
            [
                'label' => __('Link Opening', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'loader' => TRUE,
                'default' => '_blank',
                'options' => [
                    '' => [
                        'title' => __('Normal', SHORTCODE_ADDOONS),
                    ],
                    '_blank' => [
                        'title' => __('New Tab', SHORTCODE_ADDOONS),
                    ],
                ], 
            ]
        );
        $this->add_responsive_control(
            'sa_icon_alignment',
            $this->style,
            [
                'label' => __('Link Opening', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT, 
                'default' => 'center',
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                    ],
                    'flex-end' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                    ],
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__icon_main' => 'justify-content: {{VALUE}};'
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
            'sa_drop_caps_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
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
                    '{{WRAPPER}} .oxi_addons__icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'sa_icon_font_size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 32,
                ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 500,
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
                    '{{WRAPPER}} .oxi_addons__icon .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_icon_background_size',
            $this->style,
            [
                'label' => __('Background Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 80,
                ],
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 500,
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
                    '{{WRAPPER}} .oxi_addons__icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );


        $this->add_control(
            'sa_icon_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__icon .oxi-icons' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_control(
            'sa_icon_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '#ff00cc',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__icon' => 'background-color:{{VALUE}};'
                ],
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
                    'size' => 40,
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
                    '{{WRAPPER}} .oxi_addons__icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        ); 
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Cricle Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa-ac-title-bx-shadow', $this->style, [
        'type' => Controls::BOXSHADOW,
        'selector' => [
            '{{WRAPPER}} .oxi_addons__icon::after' => '',
        ],
            ]
    );
        $this->add_control(
            'sa_icon_distance',
            $this->style,
            [
                'label' => __('Distance Circle', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__icon::after' => 'padding: {{SIZE}}{{UNIT}}; top: -{{SIZE}}{{UNIT}}; left: -{{SIZE}}{{UNIT}}',
                ],
            ]
        ); 
       
        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function modal_opener()
    {

        $this->add_substitute_control('', [], [
            'type' => Controls::MODALOPENER,
            'title' => __('Add New Icon', SHORTCODE_ADDOONS),
            'sub-title' => __('Open Icon Form', SHORTCODE_ADDOONS),
            'showing' => TRUE,
        ]);
    }

    public function modal_form_data()
    {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Accordions Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" >';


        $this->add_control(
            'sa_icon_fontawesome',
            $this->style,
            [
                'label' => __('Font Awesome Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'placeholder' => 'example:- fab fa-facebook',
            ]
        );
        $this->add_control(
            'sa_icon_id',
            $this->style,
            [
                'label' => __('Icon Id', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
            ]
        );
        $this->add_control(
            'sa_icon_link',
            $this->style,
            [
                'label' => __('Icon Link', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
            ]
        );
        echo '</div>';
    }
}
