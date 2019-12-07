<?php

namespace SHORTCODE_ADDONS_UPLOAD\Accordion\Admin;

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

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General', SHORTCODE_ADDOONS),
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
                'label' => esc_html__('Accordions', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_control(
            'sa_el_ac_opening_type',
            $this->style,
            [
                'label' => __('Accordions Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'Toggle',
                'loader' => TRUE,
                'options' => [
                    'randomly' => __('Toggle', SHORTCODE_ADDOONS),
                    'onebyone' => __('Accordions', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_repeater_control(
            'sa_accordion_data',
            $this->style,
            [
                'label' => __('Accordions Data', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_ac_active' => [
                        'label' => __('Open as Default', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'loader' => TRUE,
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ],
                    'sa_icon_yes_no' => [
                        'label' => __('Enable Tab Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'loader' => TRUE,
                        'yes' => __('Yes', SHORTCODE_ADDOONS),
                        'no' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ],
                    'sa_el_ac_opening_icon_adding' => [
                        'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fab fa-facebook',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_icon_yes_no' => 'yes',
                        ],
                    ],
                    'sa_el_ac_title_adding' => [
                        'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Lorem Ipsum Dolor',
                        'selector' => [
                            '{{WRAPPER}} .sa_ac_style_' . $this->oxiid . '_{{KEY}} .heading-data' => '',
                        ],
                    ],
                    'sa_el_ac_desc_adding' => [
                        'label' => esc_html__('Description', SHORTCODE_ADDOONS),
                        'type' => Controls::WYSIWYG,
                        'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ',
                        'selector' => [
                            '{{WRAPPER}} .sa_ac_style_' . $this->oxiid . '_{{KEY}} .oxi-addons-ac-C' => '',
                        ],
                    ],
                ],
                'title_field' => 'sa_el_ac_title_adding',
                'button' => 'Add New Item',
            ]
        );

        $this->end_controls_section();




        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_group_control(
            'sa_el_ac_title_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-content ' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_el_ac_border_title',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-content' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_el_ac_border_title_radius',
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
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_ac_box_shadow_nwo',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_ac_box_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->add_responsive_control(
            'sa_ac_main_padding',
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
                    '{{WRAPPER}} ..sa_ac_style_2 .oxi-addonsAC' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_ac_main_margin',
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
                    '{{WRAPPER}} .sa_ac_style_2  ' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ]
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();


        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Title Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_el_ac_title_typography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-heading-data' => ''
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
            'sa_el_ac_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-heading-data' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_el_ac_title_hover_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC.oxi-active .oxi-addonsAC-2-heading-data,'
                        . ' {{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC:hover .oxi-addonsAC-2-heading-data' => 'color: {{VALUE}} !important;',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
            'sa_el_ac_title_text_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-heading-data' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_el_ac_title_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
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
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-heading-data' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ]
            ]
        );

        $this->end_controls_section();



        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Descriptions Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_control(
            'sa_el_ac_descriptions_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-details' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_control(
            'sa_el_ac_descriptions_background',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(17, 171, 109, 1)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-details' => 'background: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa_el_ac_descriptions_typography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-details' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_el_ac_descriptions_border_color',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-details' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_el_ac_descriptions_borde_border_radius',
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
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-details' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_el_ac_descriptions_text_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-details' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_el_ac_descriptions_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-details' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_el_ac_descriptions_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                //            'separator' => TRUE,
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
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
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-details' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ]
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );


        $this->add_control(
            'sa_el_ac_icon_position',
            $this->style,
            [
                'label' => __('Icon Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'loader' => TRUE,
                'default' => 'left',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );

        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover / Active', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_el_ac_opening_icon_icon_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-icon' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_control(
            'sa_el_ac_opening_icon_icon_background',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(4, 92, 21, 1)',
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-icon' => 'background: {{VALUE}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_el_ac_opening_icon_height_and_width',
            $this->style,
            [
                'label' => __('Icon Height & Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 56,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-icon' => 'height:auto; width:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_el_ac_opening_icon_icon_size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 40,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 80,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-icon' => 'font-size:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_el_ac_opening_icon_icon_bordesr',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-icon' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
            'sa_el_ac_opening_icon_icon_hover_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}}  .sa_ac_style_2 .oxi-addonsAC.oxi-active .oxi-addonsAC-2-icon' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_control(
            'sa_el_ac_opening_icon_icon_hover_background',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(4, 92, 21, 1)',
                'selector' => [
                    '{{WRAPPER}}  .sa_ac_style_2 .oxi-addonsAC.oxi-active .oxi-addonsAC-2-icon' => 'background: {{VALUE}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_el_ac_opening_icon_hover_height_and_width',
            $this->style,
            [
                'label' => __('Icon Height & Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 122,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC.oxi-active .oxi-addonsAC-2-icon' => 'height:auto; width:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_el_ac_opening_icon_hover_icon_size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 80,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC.oxi-active .oxi-addonsAC-2-icon' => 'font-size:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_control(
            'sa_el_ac_opening_icon_icon_hover_border',
            $this->style,
            [
                'label' => __('Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC.oxi-active .oxi-addonsAC-2-icon' => 'border-color: {{VALUE}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa_el_ac_opening_icon_icon_border_radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => true,
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
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-icon,'
                        . '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC.oxi-active .oxi-addonsAC-2-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_el_ac_opening_icon_icon_padding',
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
                    '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC .oxi-addonsAC-2-icon,'
                        . '{{WRAPPER}} .sa_ac_style_2 .oxi-addonsAC.oxi-active .oxi-addonsAC-2-icon' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ]
            ]
        );
        $this->end_controls_section();



        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
