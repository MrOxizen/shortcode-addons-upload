<?php

namespace SHORTCODE_ADDONS_UPLOAD\Food_menu\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_5 extends AdminStyle
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

        //         start

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Add New Content', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_repeater_control(
            'sa_icon_effects_data',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_el_food_box_image' => [
                        'type' => Controls::MEDIA,
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/06/oxi-food-2.jpeg',
                        ],
                        'controller' => 'add_group_control',
                    ],
                    'sa_el_insert_food_name' => [
                        'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Arabian Food',
                        'selector' => [
                            '{{WRAPPER}} .oa-fm-style-5  .oa_shortcode_inner_div_{{KEY}} .oxi-addonsFM-FV-heading' => '',
                        ],
                    ],
                    'sa_el_insert_food_info' => [
                        'label' => esc_html__('Descriptions', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => 'Lorem ipsum or lipsum as it is sometimes known is dummy text used in laying out print',
                        'selector' => [
                            '{{WRAPPER}} .oa-fm-style-5  .oa_shortcode_inner_div_{{KEY}} .oxi-addonsFM-FV-info' => '',
                        ],
                    ],
                    'sa_el_insert_price' => [
                        'label' => esc_html__('Price', SHORTCODE_ADDOONS),
                        'type' => Controls::NUMBER,
                        'default' => '27',
                        'selector' => [
                            '{{WRAPPER}} .oa-fm-style-5  .oa_shortcode_inner_div_{{KEY}} .oxi-addonsFM-FV-price' => '',
                        ],
                    ],
                    'sa_el_insert_rating_name' => [
                        'label' => esc_html__('Rating', SHORTCODE_ADDOONS),
                        'type' => Controls::SLIDER,
                        'default' => [
                            'unit' => 'px',
                            'size' => 5,
                        ],
                        'range' => [
                            'px' => [
                                'min' => 1,
                                'max' => 5,
                                'step' => 0.1,
                            ],
                        ],
                        'selector' => [
                            '{{WRAPPER}} .oa-fm-style-5  .oa_shortcode_inner_div_{{KEY}} .oxi-addonsFM-FV-rating' => '',
                        ],
                    ],
                    'sa_el_price_link' => [
                        'label' => esc_html__('Button Link', SHORTCODE_ADDOONS),
                        'type' => Controls::URL,
                        'default' => 'https://www.example.com',
                        'controller' => 'add_group_control',
                    ],
                ],
                'title_field' => 'sa_el_insert_food_name',
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
            'sa-ac-column',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5  .oxi-addons-admin-edit-list' => '',
                ],
            ]
        );
        $this->add_control(
            'sa-max-w-condition',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'separator' => true,
                'loader' => true,
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'dynamic',
                'options' => [
                    'custom' => [
                        'title' => __('Dynamic', SHORTCODE_ADDOONS),
                    ],
                    'dynamic' => [
                        'title' => __('Default', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-ac-op-cl-width',
            $this->style,
            [
                'label' => __('Max-Width', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oa-fm-style-5  .oa_shortcode_inner_div.sa-max-w-auto' => 'max-width:{{SIZE}}{{UNIT}};'
                ],
                'condition' => [
                    'sa-max-w-condition' => 'custom'
                ]
            ]
        );

        $this->add_control(
            'sa-fm-box-bg-outside-color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::GRADIENT,
                'oparetor' => 'RGB',
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5  .oxi-addonsFM-FV-row' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-box-outer-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'loader' => true,
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5  .oxi-addonsFM-FV-row' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-fm-box-out-side-border-radius',
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
                    '{{WRAPPER}} .oa-fm-style-5  .oxi-addonsFM-FV-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );



        $this->add_group_control(
            'sa-fm-whole-box-shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-row' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-box-animation-temp-5',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->add_responsive_control(
            'sa_fm_out_side_box_padding',
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
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-row' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_fm_box_main_margin',
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
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-row' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Body Content Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_group_control(
            'sa-fm-box-inside-background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'loader' => true,
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-content-body' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_fm_box_content_side_padding',
            $this->style,
            [
                'label' => __('Content Side Padding', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-content-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_responsive_control(
            'sa-fm-image-height-ratio',
            $this->style,
            [
                'label' => __('Height Ratio', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'loader' => true,
                'default' => [
                    'unit' => '%',
                    'size' => 70,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-image:after' => 'padding-bottom:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Heading Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_control(
            'oa-sa-fm-heading-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'loader' => true,
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-heading' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-heading-h-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-heading' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-heading-text-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-heading' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'oa_sa_heading_text_align',
            $this->style,
            [
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
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-heading' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-fm-heading-heading-padding',
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
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Price Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_control(
            'oa-sa-fm-price-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-price' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-price-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-price' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-price-text-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-price' => ''
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-b-price-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-price' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'oa_sa_fm_price_text_align',
            $this->style,
            [
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
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-price' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'oa-sa-fm-price-padding',
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
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Rating Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_responsive_control(
            'oa-sa-fm-rating-font-size',
            $this->style,
            [
                'label' => __('Font Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'loader' => true,
                'default' => [
                    'unit' => 'px',
                    'size' => 25,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 30,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-rating' => 'font-size:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_control(
            'oa-sa-fm-rating-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#e6aa29',
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-icons' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'oa_sa_fm_rating_text_align',
            $this->style,
            [
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
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-rating' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'oa-sa-fm-rating-padding',
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
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-rating' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Info Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_control(
            'oa-sa-fm-info-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-info' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-info-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-info' => ''
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-info-text-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-info' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'oa_sa_fm_info_text_align',
            $this->style,
            [
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
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-info' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'oa-sa-fm-info-padding',
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
                    '{{WRAPPER}} .oa-fm-style-5 .oxi-addonsFM-FV-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section(); 
        $this->end_section_devider(); 
        $this->end_section_tabs();
    }
}
