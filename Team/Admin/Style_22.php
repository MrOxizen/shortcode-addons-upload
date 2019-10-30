<?php

namespace SHORTCODE_ADDONS_UPLOAD\Team\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_22
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_22 extends AdminStyle
{

    public function register_controls()
    {

        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            []
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
            'sa_team_column',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'default' => 'oxi-bt-col-lg-4',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_social_main_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '#21b0b8',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .oxi-team-pic-size-span' => ''
                ],
            ]
        );
 
        $this->add_group_control(
            'sa_team_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .oxi-team-show' => ''
                ],
            ]
        );

        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_team_shadow_main',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .oxi-team-show' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
            'sa_team_social_box_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(35, 109, 219, 1)',
                'oparetor' => 'RGB',
                'selector' => [
                       '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-info::after' => 'background-color:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_team_shadow_main_hover',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .oxi-team-show:hover' => ''
                ],
            ]
        );

        $this->add_control(
            'sa_team_hover_position',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => -10,
                ],
                'range' => [
                    'px' => [
                        'min' => -60,
                        'max' => 60,
                        'step' => 0.01,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .oxi-team-show-body-style-22:hover' => 'transform: translateY({{sa_team_hover_position.SIZE}}px);'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_team_separetor',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE
            ]
        );

        $this->add_responsive_control(
            'sa_team_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_team_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22   .oxi-team-show-body-style-22' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_team_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_social_overlay_bg_color',
            $this->style,
            [
                'label' => __('Overlay Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(13,13,13,0.51)',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-team-285:hover .member-info' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_team_image_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 280,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 800,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 250,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 10,
                        'max' => 50,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .oxi-team-show-body-style-22' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_team_image_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 300,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 800,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 250,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 10,
                        'max' => 50,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .oxi-team-pic-size:after' => 'padding-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Name Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_control(
            'sa_team_name_tag',
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
            'sa_team_name_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-name' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_team_name_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-name' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_team_name_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Divider Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_divider_switter',
            $this->style,
            [
                'label' => __('Divider', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_responsive_control(
            'sa_divider_alignment',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'condition' => [
                    'sa_divider_switter' => 'yes'
                ],
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-divider-main' => 'justify-content: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_team_divider_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 250,
                ],
                'condition' => [
                    'sa_divider_switter' => 'yes'
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 800,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 250,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 10,
                        'max' => 50,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-divider' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_divider_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'condition' => [
                    'sa_divider_switter' => 'yes'
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-divider' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_team_divider_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'condition' => [
                    'sa_divider_switter' => 'yes'
                ],
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-divider' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Designation Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_group_control(
            'sa_team_designation_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-role' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_team_designation_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-role' => 'color:{{VALUE}};'
                ],
            ]
        );
      
        $this->add_responsive_control(
            'sa_team_designation_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-role' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'sa_team_description_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .oxi-team-p' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_team_description_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .oxi-team-p' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_team_description_bg_color',
            $this->style,
            [
                'label' => __('Overlay Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(41,37,37,0.45)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .oxi-team-info-body-data' => 'background-color:{{VALUE}};',
                 ],
            ]
        );
        $this->add_responsive_control(
            'sa_team_description_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .oxi-team-p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Social Box Setting', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_responsive_control(
            'sa_team_social_box_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 150,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 10,
                        'max' => 50,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-icon' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_team_social_box_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 150,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 10,
                        'max' => 50,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-icon' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );



        $this->add_responsive_control(
            'sa_team_social_box_padding',
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Social Icon Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );


        $this->add_responsive_control(
            'sa_social_icons_f_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 18,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 5,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-icon .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_social_icons_position',
            $this->style,
            [
                'label' => __('Color View', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'loader' => TRUE,
                'default' => 'separately',
                'options' => [
                    'separately' => [
                        'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                    ],
                    'common' => [
                        'title' => __('Static', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_social_icons_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#390075',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-22 .member-icon .oxi-icons' => 'color : {{VALUE}}; '
                ],
                'condition' => [
                    'sa_social_icons_position' => 'common'
                ]
            ]
        );
        $this->add_control(
            'sa_social_icons_bg_color_view',
            $this->style,
            [
                'label' => __('Background View', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'loader' => TRUE,
                'default' => 'separately',
                'options' => [
                    'separately' => [
                        'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                    ],
                    'common' => [
                        'title' => __('Static', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_social_icons_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(255, 255, 255, 0)',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-22 .member-icon' => 'background : {{VALUE}}; '
                ],
                'condition' => [
                    'sa_social_icons_bg_color_view' => 'common'
                ]
            ]
        );
        $this->add_control(
            'sa_social_icons_border',
            $this->style,
            [
                'label' => __('Border View', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'loader' => TRUE,
                'default' => 'separately',
                'options' => [
                    'separately' => [
                        'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                    ],
                    'common' => [
                        'title' => __('Static', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_group_control(
            'sa_divider_icons_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-22 .member-icon' => ''
                ],
                'condition' => [
                    'sa_social_icons_border' => 'common'
                ]
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_social_icons_h_position',
            $this->style,
            [
                'label' => __('Color View', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'loader' => TRUE,
                'default' => 'common',
                'options' => [
                    'separately' => [
                        'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                    ],
                    'common' => [
                        'title' => __('Static', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_social_icons_h_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-22 .member-icon .oxi-icons:hover' => 'color : {{VALUE}}; '
                ],
                'condition' => [
                    'sa_social_icons_h_position' => 'common'
                ]
            ]
        );
        $this->add_control(
            'sa_social_icons_bg_h_color_view',
            $this->style,
            [
                'label' => __('Background View', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'loader' => TRUE,
                'default' => 'common',
                'options' => [
                    'separately' => [
                        'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                    ],
                    'common' => [
                        'title' => __('Static', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_social_icons_h_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(92, 92, 92, 1)',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-22 .member-icon:hover ' => 'background : {{VALUE}}; '
                ],
                'condition' => [
                    'sa_social_icons_bg_h_color_view' => 'common'
                ]
            ]
        );
        $this->add_control(
            'sa_social_icons_border_hover',
            $this->style,
            [
                'label' => __('Border View', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'loader' => TRUE,
                'default' => 'separately',
                'options' => [
                    'separately' => [
                        'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                    ],
                    'common' => [
                        'title' => __('Static', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_group_control(
            'sa_divider_icons_border_hover',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-22 .member-icon:hover' => ''
                ],
                'condition' => [
                    'sa_social_icons_border_hover' => 'common'
                ]
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_social_icons_separator',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE,
            ]
        );
        $this->add_responsive_control(
            'sa_social_icons_h_border_radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_social_icons_h_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-icon .oxi-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_social_icons_h_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
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
                    '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22 .member-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
    public function modal_form_data()
    {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Team Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">';
        $this->add_control(
            'sa_price_table_name',
            $this->style,
            [
                'label' => __('Name', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Adam Chen',
                'placeholder' => 'Adam Chen',
            ]
        );
        $this->add_control(
            'sa_price_table_desgnation',
            $this->style,
            [
                'label' => __('Desgnation', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Designer',
                'placeholder' => 'Designer',
            ]
        );
        $this->add_control(
            'sa_price_table_para',
            $this->style,
            [
                'label' => __('Description', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio exercitationem facilis laborum perferendis quasi, ratione.',
                'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio exercitationem facilis laborum perferendis quasi, ratione.',
            ]
        );

        $this->add_group_control(
            'sa_team_front_image',
            $this->style,
            [
                'type' => Controls::MEDIA,
                'default' => [
                    'type' => 'media-library',
                    'link' => 'https://www.oxilab.org/wp-content/uploads/2018/05/1.jpg',
                ],
            ]
        );


        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Social Icons', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_repeater_control(
            'sa_team_repeater',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'loader' => TRUE,
                'fields' => [
                    'sa_social_icons_icon' => [
                        'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fab fa-facebook-f',
                    ],
                    'shortcode-addons-start-tabs' => [
                        'controller' => 'start_controls_tabs',
                        'options' => [
                            'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                            'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                        ]
                    ],

                    'shortcode-addons-start-tab1' => [
                        'controller' => 'start_controls_tab',
                    ],
                    'sa_social_icons_color' => [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#ffffff',
                        'selector' => [
                            '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22-{{KEY}}  .member-icon .oxi-icons' => 'color:{{VALUE}};',
                        ],
                        'conditional' => Controls::OUTSIDE,
                        'condition' => [
                            'sa_social_icons_position' => 'separately'
                        ]
                    ],
                    'sa_social_icons_bg_color' => [
                        'label' => __('Background ', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'oparetor' => 'RGB',
                        'default' => 'rgba(59,89,153,1.00)',
                        'selector' => [
                            '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22-{{KEY}}  .member-icon' => 'background:{{VALUE}};',
                        ],
                        'conditional' => Controls::OUTSIDE,
                        'condition' => [
                            'sa_social_icons_bg_color_view' => 'separately'
                        ]
                    ],
                    'sa_social_icons_border' => [
                        'label' => __('', SHORTCODE_ADDOONS),
                        'type' => Controls::BORDER,
                        'selector' => [
                            '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22-{{KEY}}  .member-icon' => '',
                        ],
                        'controller' => 'add_group_control',
                        'conditional' => Controls::OUTSIDE,
                        'condition' => [
                            'sa_social_icons_border' => 'separately'
                        ]
                    ],

                    'shortcode-addons-start-tab1-end' => [
                        'controller' => 'end_controls_tab',
                    ],

                    'shortcode-addons-start-tab2' => [
                        'controller' => 'start_controls_tab',
                    ],
                    'sa_social_icons_color_hover' => [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#7e00c2',
                        'selector' => [
                            '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22-{{KEY}}  .member-icon .oxi-icons:hover' => 'color:{{VALUE}};',
                        ],
                        'conditional' => Controls::OUTSIDE,
                        'condition' => [
                            'sa_social_icons_h_position' => 'separately'
                        ]
                    ],

                    'sa_social_icons_bg_color_hover' => [
                        'label' => __('Background ', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'oparetor' => 'RGB',
                        'default' => 'rgba(92, 92, 92, 1)',
                        'selector' => [
                            '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22-{{KEY}}  .member-icon:hover ' => 'background:{{VALUE}};',
                        ],
                        'conditional' => Controls::OUTSIDE,
                        'condition' => [
                            'sa_social_icons_bg_h_color_view' => 'separately'
                        ]
                    ],
                    'sa_social_icons_border_hover' => [
                        'label' => __('', SHORTCODE_ADDOONS),
                        'type' => Controls::BORDER,
                        'selector' => [
                            '{{WRAPPER}} .oxi-addons-parent-wrapper-style-22-{{KEY}}  .member-icon:hover' => '',
                        ],
                        'controller' => 'add_group_control',
                        'conditional' => Controls::OUTSIDE,
                        'condition' => [
                            'sa_social_icons_border_hover' => 'separately'
                        ]
                    ],
                    'shortcode-addons-start-tab2-end' => [
                        'controller' => 'end_controls_tab',
                    ],
                    'shortcode-addons-start-tabs-end' => [
                        'controller' => 'end_controls_tabs',
                    ],
                    'sa_social_icons_separator' => [
                        'label' => esc_html__('', SHORTCODE_ADDOONS),
                        'type' => Controls::SEPARATOR,
                        Controls::SEPARATOR => TRUE,
                        'controller' => 'add_control',
                    ],
                    'sa_social_icons_url' => [
                        'label' => esc_html__('Url', SHORTCODE_ADDOONS),
                        'type' => Controls::URL,
                        'controller' => 'add_group_control',
                    ],
                ],
                'title_field' => 'sa_social_icons_icon',
                'button' => 'Add New Icon',
            ]
        );
        $this->end_controls_section();
        echo '</div>';
    }
}
