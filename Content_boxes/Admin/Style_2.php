<?php

namespace SHORTCODE_ADDONS_UPLOAD\Content_boxes\Admin;

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

class Style_2 extends AdminStyle {

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

        // start



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Add New Content', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );

        $this->add_repeater_control(
                'sa_icon_effects_data', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_el_fa_icon' => [
                    'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fas fa-apple-alt',
                ],
                'sa_el_title' => [
                    'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Lorem Ipsum Dolor',
                    'selector' => [
                        '{{WRAPPER}} .sa-conten-box-style-2-{{KEY}} .sa-conten-box-style-2-heading' => '',
                    ],
                ],
                'sa_el_content' => [
                    'label' => esc_html__('Content', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                    'selector' => [
                        '{{WRAPPER}} .sa-conten-box-style-2-{{KEY}} .sa-conten-box-style-2-content' => '',
                    ],
                ],
                'sa_el_btn_text' => [
                    'label' => esc_html__('Button Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Buy Now',
                    'selector' => [
                        '{{WRAPPER}} .sa-conten-box-style-2-{{KEY}} .sa-conten-box-style-2-button' => '',
                    ],
                ],
                'sa_el_button_link' => [
                    'label' => esc_html__('Button Link', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'default' => 'https://www.example.com',
                    'controller' => 'add_group_control',
                ],
            ],
            'title_field' => 'sa_el_title',
            'button' => 'Add New Item',
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
                'sa-ac-column', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-admin-edit-list' => '',
            ],
                ]
        );
        $this->add_control(
                'sa-max-width-condition', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'separator' => true,
            'loader' => true,
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'default' => 'default',
            'options' => [
                'dynamic' => [
                    'title' => __('Dynamic', SHORTCODE_ADDOONS),
                ],
                'default' => [
                    'title' => __('Default', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-op-cl-width', $this->style, [
            'label' => __('Max-Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
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
                '{{WRAPPER}} .sa-conten-box-style-2.sa-max-w-dynamic' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa-max-width-condition' => 'dynamic',
            ]
                ]
        );
        $this->add_group_control(
                'sa-ac-box-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2-data' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-box-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2-data' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-box-border-radius-style-2', $this->style, [
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
                '{{WRAPPER}} .sa-conten-box-style-2-data' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-box-shdw', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2-data' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-cb-box-animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa_ac_box_padding', $this->style, [
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
                '{{WRAPPER}} .sa-conten-box-style-2-data' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ac_box_margin', $this->style, [
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
                '{{WRAPPER}} .sa-conten-box-style-2-data' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();


        $this->end_section_devider();




        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_responsive_control(
                'sa-ac-op-cl-icon-size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
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
                '{{WRAPPER}} .sa-conten-box-style-2 .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa-ac-icon-color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2 .oxi-icons' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_icon_box_icon_align', $this->style, [
            'label' => __('Icon Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2 .oxi-icons' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-icon-padding', $this->style, [
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
                '{{WRAPPER}} .sa-conten-box-style-2 .oxi-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Heading Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'sa-ac-heading-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2 .sa-conten-box-style-2-heading' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-heading-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2 .sa-conten-box-style-2-heading' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2 .sa-conten-box-style-2-heading' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_icon_box_heading_align_style_2', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2 .sa-conten-box-style-2-heading' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-heading-padding', $this->style, [
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
                '{{WRAPPER}} .sa-conten-box-style-2 .sa-conten-box-style-2-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'sa-ac-content-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2 .sa-conten-box-style-2-content' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-content-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2 .sa-conten-box-style-2-content' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-content-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2 .sa-conten-box-style-2-content' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_icon_box_content_align_style_2', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2 .sa-conten-box-style-2-content' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-content-padding', $this->style, [
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
                '{{WRAPPER}} .sa-conten-box-style-2 .sa-conten-box-style-2-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_group_control(
                'sa-ac-button-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2-button .oxi-button' => ''
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
                'sa-ac-button-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2-button .oxi-button' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa-ac-button-background-color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2-button .oxi-button' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-button-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2-button .oxi-button' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-ac-button-border-radius', $this->style, [
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
                '{{WRAPPER}} .sa-conten-box-style-2-button .oxi-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa-ac-button-hover-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2-button .oxi-button:hover' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa-ac-button-hover-background-color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#222',
            'selector' => [
                '{{WRAPPER}}  .sa-conten-box-style-2-button .oxi-button:hover' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-button-hoober-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2-button .oxi-button:hover' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-cb-button-hoover-border-radius', $this->style, [
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
                '{{WRAPPER}}  .oxi-button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();


        $this->end_controls_tabs();


        $this->add_control(
                'sa_icon_box_button_align', $this->style, [
            'label' => __('Button Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'separator' => TRUE,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2 .sa-conten-box-style-2-button' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-btn-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2-button .oxi-button' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-cont-box-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-conten-box-style-2-data' => 'box-shadow:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-cb-btn-animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->add_responsive_control(
                'sa-ac-button-padding', $this->style, [
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
                '{{WRAPPER}} .sa-conten-box-style-2-button .oxi-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-button-margin', $this->style, [
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
                '{{WRAPPER}} .sa-conten-box-style-2-button .oxi-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );




        $this->end_section_devider();

        $this->end_section_tabs();



        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings'
            ]
                ]
        );

        $this->start_section_devider();



        $this->add_group_control(
                'sa-ac-animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();

        $this->end_section_tabs();
    }

   
}
