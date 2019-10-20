<?php

namespace SHORTCODE_ADDONS_UPLOAD\Divider\Admin;

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

class Style_3 extends AdminStyle {

    public function register_controls() {

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_divider_align', $this->style, [
            'label' => __('Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'center',
            'options' => [
                'sa_divider_left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'sa_divider_center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'sa_divider_right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_divider_id', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Divider ID', SHORTCODE_ADDOONS),
            'loader' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_divider_width', $this->style, [
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
            'selector' => [
                '{{WRAPPER}} .oxi-divider-style3' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

         $this->add_responsive_control(
                'sa_divider_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 2,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-divider-style3 .oxi-divider-left .oxi-divider' => 'border-top-width:{{SIZE}}px;',
                '{{WRAPPER}} .oxi-divider-style3 .oxi-divider-right .oxi-divider' => 'border-top-width:{{SIZE}}px;',
            ],
                ]
        );


        $this->add_control(
                'sa_divider_style', $this->style, [
            'label' => __('Style', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'solid',
            'loader' => TRUE,
            'options' => [
                'dotted' => __('Dotted', SHORTCODE_ADDOONS),
                'dashed' => __('Dashed', SHORTCODE_ADDOONS),
                'solid' => __('Solid', SHORTCODE_ADDOONS),
                'double' => __('Double', SHORTCODE_ADDOONS),
                'Groove' => __('Groove', SHORTCODE_ADDOONS),
                'ridge' => __('Ridge', SHORTCODE_ADDOONS),
                'inset' => __('Inset', SHORTCODE_ADDOONS),
                'inset' => __('Inset', SHORTCODE_ADDOONS),
                'none' => __('None', SHORTCODE_ADDOONS),
                'hidden' => __('Hidden', SHORTCODE_ADDOONS),
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-divider-style3 .oxi-divider-left .oxi-divider' => 'border-top-style:{{VALUE}};',
                '{{WRAPPER}} .oxi-divider-style3 .oxi-divider-right .oxi-divider' => 'border-top-style:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa-_divider_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi-divider-style3 .oxi-divider-left .oxi-divider' => 'border-top-color:{{VALUE}};',
                '{{WRAPPER}} .oxi-divider-style3 .oxi-divider-right .oxi-divider' => 'border-top-color:{{VALUE}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_divider_Padding', $this->style, [
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
                '{{WRAPPER}} .oxi-divider-style3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_divider_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();

        
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_divider_icon_width_height', $this->style, [
            'label' => __('Height Width', SHORTCODE_ADDOONS),
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
            'selector' => [
                '{{WRAPPER}} .oxi-divider-style3 .oxi-icons' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_divider_icon', $this->style, [
            'type' => Controls::ICON,
            'label' => __('Icon Class', SHORTCODE_ADDOONS),
            'placeholder' => __('Icon Class', SHORTCODE_ADDOONS),
            'default' => 'fas fa-star',
            'loader' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_divider_icon_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-divider-style3 .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );


        $this->add_control(
                'sa_divider_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi-divider-style3 .oxi-icons' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_divider_background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-divider-style3 .oxi-icons' => ''
            ],
                ]
        );
         $this->add_group_control(
                'sa_divider_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-divider-style3 .oxi-icons' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_divider_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' =>100,
                    'step' => 1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-divider-style3 .oxi-icons' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );
        $this->add_responsive_control(
                'sa_divider_icon_position', $this->style, [
            'label' => __('Icon Position', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'description'=>'Set you Divider Icon Position where 0 is left and 100 is right',
                    'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-divider-style3 .oxi-divider-left' => 'width:{{SIZE}}%;',
                '{{WRAPPER}} .oxi-divider-style3 .oxi-divider-right' => 'width:calc(100% - {{SIZE}}%);'
            ],
                ]
        );
       

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
