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

class Style_1 extends AdminStyle {

    public function register_controls() {

        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings'
            ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Add Items', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_repeater_control(
                'sa_accordion_data', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_el_ac_title_adding' => [
                    'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Lorem Ipsum Dolor',
                    'selector' => [
                        '{{WRAPPER}} .sa-cb-temp-1-{{KEY}} .sa-cb-temp-1-heading' => '',
                    ],
                ],
                'sa_el_ac_desc_adding' => [
                    'label' => esc_html__('Description', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                    'selector' => [
                        '{{WRAPPER}} .sa-cb-temp-1-{{KEY}} .sa-cb-temp-1-content' => '',
                    ],
                ],
                'sa_el_ac_opening_icon_adding' => [
                    'label' => esc_html__('Opening Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fab fa-facebook',
                    'selector' => [
                        '{{WRAPPER}} .sa_button_effect_temp_1_{{KEY}} .oxi-button-info' => '',
                    ],
                ],
                'sa_el_ac_closing_icon_adding' => [
                    'label' => esc_html__('Closing Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fab fa-facebook',
                    'selector' => [
                        '{{WRAPPER}} .sa_button_effect_temp_1_{{KEY}} .oxi-button-info' => '',
                    ],
                ],
            ],
            'title_field' => 'sa_el_ac_title',
            'button' => 'Add New Item',
                ]
        );



        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Initial Opening', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );

        $this->add_control(
                'sa_el_ac_initial_opening', $this->style, [
            'label' => __('Initial Opening', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'first',
            'loader' => TRUE,
            'separator' => TRUE,
            'options' => [
                'first' => __('First', SHORTCODE_ADDOONS),
                'second' => __('Second', SHORTCODE_ADDOONS),
                'third' => __('Third', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa_el_ac_opening_type', $this->style, [
            'label' => __('Opening Type', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'randomly',
            'loader' => TRUE,
            'options' => [
                'randomly' => __('Randomly', SHORTCODE_ADDOONS),
                'onebyone' => __('One By One', SHORTCODE_ADDOONS),
            ],
                ]
        );

        $this->add_control(
                'sa_el_ac_icon_position', $this->style, [
            'label' => __('Icon Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => '',
            'options' => [
                'auto' => [
                    'title' => __('Auto', SHORTCODE_ADDOONS),
                ],
                'max-width' => [
                    'title' => __('Daynamic', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_group_control(
                'sa_el_ac_title_background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1-data' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_el_ac_border_title', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_el_ac_border_title_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .sa-cb-temp-1-data' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_ac_box_shadow_nwo', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1-data' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_ac_box_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa_ac_main_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_ac_main_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ]
                ]
        );
        $this->end_controls_section();




        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Descriptions Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_control(
                'sa_el_ac_descriptions_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa_el_ac_descriptions_background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_el_ac_descriptions_typography', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1 .sa-cb-temp-1-heading' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_el_ac_descriptions_border_color', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_el_ac_descriptions_borde_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .sa-cb-temp-1-data' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_el_ac_descriptions_text_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1 .sa-cb-temp-1-heading' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_el_ac_descriptions_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1-data' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_el_ac_descriptions_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_el_ac_descriptions_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Title Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_el_ac_title_typography', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1 .sa-cb-temp-1-heading' => ''
            ],
                ]
        );

        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_el_ac_title_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_el_ac_title_hover_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_el_ac_title_text_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa-cb-temp-1 .sa-cb-temp-1-heading' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_el_ac_title_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-li .oxi-addons-admin-edit-list' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ]
                ]
        );

        $this->end_controls_section();



        //fuad

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Opening Icon Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_responsive_control(
                'sa_el_ac_opening_icon_height_and_width', $this->style, [
            'label' => __('Icon Height & Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => true,
            'default' => [
                'unit' => 'px',
                'size' => 120,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 300,
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
                '{{WRAPPER}} .sa-contentbox-temp-10 .oxi-contentbox-arrow-arrow' => 'height:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_el_ac_opening_icon_icon_size', $this->style, [
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
                '{{WRAPPER}} .sa-contentbox-temp-10 .oxi-contentbox-icon-icon' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_el_ac_opening_icon_icon_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa_el_ac_opening_icon_icon_background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'background: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_el_ac_opening_icon_icon_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
                'sa_el_ac_opening_icon_icon_hover_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa_el_ac_opening_icon_icon_hover_background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'background: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_el_ac_opening_icon_icon_hover_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
                'sa_el_ac_opening_icon_icon_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => true,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .sa-cb-temp-1-data' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_el_ac_opening_icon_icon_padding', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ]
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Closing Icon Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_responsive_control(
                'sa_el_ac_closing_icon_height_and_width', $this->style, [
            'label' => __('Icon Height & Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => true,
            'default' => [
                'unit' => 'px',
                'size' => 120,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 300,
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
                '{{WRAPPER}} .sa-contentbox-temp-10 .oxi-contentbox-arrow-arrow' => 'height:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_el_ac_closing_icon_size', $this->style, [
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
                '{{WRAPPER}} .sa-contentbox-temp-10 .oxi-contentbox-icon-icon' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_el_ac_closing_icon_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa_el_ac_closing_icon_background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'background: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_el_ac_closing_icon_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
                'sa_el_ac_closing_icon_hover_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa_el_ac_closing_icon_hover_background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link' => 'background: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_el_ac_closing_icon_hover_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_el_ac_closing_icon_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => true,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .sa-cb-temp-1-data' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_el_ac_closing_icon_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ]
                ]
        );
        $this->end_controls_section();



        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
