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

class Style_1 extends AdminStyle {

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
                    'loader'=>TRUE,
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
                '{{WRAPPER}} .oxi-divider-style1' => 'max-width:{{SIZE}}{{UNIT}};',
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
                '{{WRAPPER}} .oxi-divider-style1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'label' => esc_html__('Divider Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
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
                '{{WRAPPER}} .oxi-divider-style1 .oxi-divider-left .oxi-divider' => 'border-top-width:{{SIZE}}px;',
                '{{WRAPPER}} .oxi-divider-style1 .oxi-divider-right .oxi-divider' => 'border-top-width:{{SIZE}}px;',
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
                '{{WRAPPER}} .oxi-divider-style1 .oxi-divider-left .oxi-divider' => 'border-top-style:{{VALUE}};',
                '{{WRAPPER}} .oxi-divider-style1 .oxi-divider-right .oxi-divider' => 'border-top-style:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa-_divider_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
             'selector' => [
                '{{WRAPPER}} .oxi-divider-style1 .oxi-divider-left .oxi-divider' => 'border-top-color:{{VALUE}};',
                '{{WRAPPER}} .oxi-divider-style1 .oxi-divider-right .oxi-divider' => 'border-top-color:{{VALUE}};',
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

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
