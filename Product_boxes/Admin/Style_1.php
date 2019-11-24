<?php

namespace SHORTCODE_ADDONS_UPLOAD\Product_boxes\Admin;

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
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'button' => esc_html__('Button', SHORTCODE_ADDOONS),
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
            'label' => esc_html__('Feature Content', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_repeater_control(
                'sa_product_boxes_repeater', $this->style, [
            'label' => __('Product Box Data', SHORTCODE_ADDOONS),
            'title_field' => 'sa_product_boxes_heading_one',
            'type' => Controls::REPEATER,
            'button' => 'Add New Content',
            'fields' => [
                'sa_product_boxes_image' => [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.oxilab.org/wp-content/uploads/2019/02/Printed-color-block-T-shirt2-571x714.jpg',
                    ],
                    'loader' => TRUE,
                    'controller' => 'add_group_control',
                ],
                'sa_product_boxes_image_overlay' => [
                    'label' => __('Overlay Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'oparetor' => 'RGB',
                    'default' => '#757575',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-heading-one' => 'color:{{VALUE}};'
                    ],
                ],
                'sa_product_boxes_image_hover_overlay' => [
                    'label' => __('Hover Overlay Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'oparetor' => 'RGB',
                    'default' => '#757575',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-heading-one' => 'color:{{VALUE}};'
                    ],
                ],
                'sa_product_boxes_heading_one' => [
                    'label' => esc_html__('Heading One', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => esc_html__('Quality Products from Stall to Your Door ', SHORTCODE_ADDOONS),
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1-{{KEY}} .oxi-addons-heading-one' => '',
                    ],
                ],
                'sa_product_boxes_heading_two' => [
                    'label' => esc_html__('Heading Two', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => esc_html__('Seasonal Picked ', SHORTCODE_ADDOONS),
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1-{{KEY}} .oxi-addons-heading-two' => '',
                    ],
                ],
                'sa_product_boxes_details' => [
                    'label' => esc_html__('Description', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrytandard ', SHORTCODE_ADDOONS),
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1-{{KEY}} .oxi-addons-details' => '',
                    ],
                ],
                'sa_product_boxes_button_text' => [
                    'label' => esc_html__('Button Text  ', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => esc_html__('Get Started', SHORTCODE_ADDOONS),
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-1-{{KEY}} .oxi-addons-button-link' => '',
                    ],
                ],
                'sa_product_boxes_button_link' => [
                    'label' => esc_html__('Link', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-1-{{KEY}} .oxi-addons-button-link' => '',
                    ],
                ],
            ],
                ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );

        $this->add_group_control(
                'sa_product_boxes_column', $this->style, [
            'type' => Controls::COLUMN,
            'default' => 'oxi-bt-col-lg-4',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1' => '',
            ],
                ]
        );

        $this->add_group_control(
                'sa_product_boxes_bg_color', $this->style, [
            'type' => Controls::BACKGROUND,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-image-overlay::after' => 'background: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_product_boxes_bg_color_width', $this->style, [
            'label' => __('Max  Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 400,
            ],
            'range' => [
                '%' => [
                    'min' => 10,
                    'max' => 200,
                    'step' => 1,
                ],
                'px' => [
                    'min' => 50,
                    'max' => 1200,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-image-overlay' => 'max-width: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_product_boxes_shadow', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-main-wrapper' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_product_boxes_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_product_boxes_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_product_boxes_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Heading One Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_product_boxes_heading_one_tag', $this->style, [
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
                'sa_product_boxes_heading_one_typo', $this->style, [
            'label' => __('Typography', SHORTCODE_ADDOONS),
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-heading-one' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_product_boxes_heading_one_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#757575',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-heading-one' => 'color:{{VALUE}};'
            ],
                ]
        );


        $this->add_responsive_control(
                'sa_product_boxes_heading_one_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 5,
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-heading-one' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Heading Two Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_product_boxes_heading_two_tag', $this->style, [
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
                'sa_product_boxes_heading_two_typo', $this->style, [
            'label' => __('Typography', SHORTCODE_ADDOONS),
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-heading-two' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_product_boxes_heading_two_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#757575',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-heading-two' => 'color:{{VALUE}};'
            ],
                ]
        );


        $this->add_responsive_control(
                'sa_product_boxes_heading_two_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 5,
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-heading-two' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Description Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_group_control(
                'sa_product_boxes_details_typo', $this->style, [
            'label' => __('Typography', SHORTCODE_ADDOONS),
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-details' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_product_boxes_details_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#808080',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-details' => 'color:{{VALUE}};'
            ],
                ]
        );


        $this->add_responsive_control(
                'sa_product_boxes_details_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'button',
            ],
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_product_boxes_button_switter', $this->style, [
            'label' => __('Button', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_responsive_control(
                'sa_product_boxes_button_position', $this->style, [
            'label' => __('Button Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'condition' => [
                'sa_product_boxes_button_switter' => 'yes'
            ],
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button' => 'justify-content: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_product_boxes_button_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'condition' => [
                'sa_product_boxes_button_switter' => 'yes'
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 300,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_product_boxes_button_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'condition' => [
                'sa_product_boxes_button_switter' => 'yes'
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => -200,
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_product_boxes_button_animation', $this->style, [
            'type' => Controls::ANIMATION,
            'condition' => [
                'sa_product_boxes_button_switter' => 'yes'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_product_boxes_button_switter' => 'yes'
            ],
                ]
        );

        $this->add_group_control(
                'sa_product_boxes_button_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link' => ' ',
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
                'sa_product_boxes_button_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_product_boxes_button_bg_color', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(255, 149, 10, 1)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link' => 'background-color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_product_boxes_button_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_product_boxes_button_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_product_boxes_button_sadow', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_product_boxes_button_hover_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ff950a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link:hover' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_product_boxes_button_hover_bg_color', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(255, 255, 255, 0.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link:hover' => 'background-color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_product_boxes_button_hover_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link:hover' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_product_boxes_button_hover_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_product_boxes_button_hover_shadow', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-button-link:hover' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
