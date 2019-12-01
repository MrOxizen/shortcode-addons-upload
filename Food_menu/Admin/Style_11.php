<?php

namespace SHORTCODE_ADDONS_UPLOAD\Food_menu\Admin;

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

class Style_11 extends AdminStyle
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
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/08/breakfast-challenge-1.jpeg',
                        ],
                        'controller' => 'add_group_control',
                    ],
                    'sa_el_insert_food_heading' => [
                        'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Dhakaiya Kacchi',
                        'selector' => [
                            '{{WRAPPER}} .sa_fm_box_outer_{{KEY}} .oxi-addons-box-food-heading' => '',
                        ],
                    ],
                    'sa_el_insert_food_descriptions' => [
                        'label' => esc_html__('Descriptions', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => 'Ut velit mauris, egestassi sed, gsvida vel massa suscipit pulnar.',
                        'selector' => [
                            '{{WRAPPER}} .sa_fm_box_outer_{{KEY}} .oxi-addons-box-food-desc' => '',
                        ],
                    ],
                    'sa_el_insert_food_price' => [
                        'label' => esc_html__('Price', SHORTCODE_ADDOONS),
                        'type' => Controls::NUMBER,
                        'default' => '21',
                        'selector' => [
                            '{{WRAPPER}} .sa_fm_box_outer_{{KEY}} .oxi-addons-foodMenu-price' => '',
                        ],
                    ],
                ],
                'title_field' => 'sa_el_insert_food_heading',
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
                    '{{WRAPPER}} .oxi-addons-admin-edit-list' => '',
                ],

            ]
        );
        $this->add_control(
            'sa-max-w-condition',
            $this->style,
            [
                'label' => __('Max-Width', SHORTCODE_ADDOONS),
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
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 300,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
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
                    '{{WRAPPER}} .sa_fm_template_11.sa-max-w-auto' => 'max-width:{{SIZE}}{{UNIT}};'
                ],
                'condition' => [
                    'sa-max-w-condition' => 'custom'
                ]
            ]
        );

        // hover side
        $this->add_group_control(
            'sa-fm-box-content-side-background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'loader' => true,
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .sa_fm_box_outer' => ''
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-box-main-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .sa_fm_box_outer' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-fm-fm-box-main-border-radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' =>'',
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
                    '{{WRAPPER}} .sa_fm_template_11 .sa_fm_box_outer' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-box-main-box-shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .sa_fm_box_outer' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-box-animation-temp-10',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->add_responsive_control(
            'sa_fm_box_main_padding',
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
                    '{{WRAPPER}} .sa_fm_template_11 .sa_fm_box_outer' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    '{{WRAPPER}} .sa_fm_template_11' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
                'showing' => true,
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
                    'size' => 80,
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
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-box-food-img-area::after' => 'padding-bottom:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Heading Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_control(
            'oa-sa-fm-box-header-font-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'loader' => true,
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-box-food-heading' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-box-header-typhography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-box-food-heading' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-box-header-text-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-box-food-heading' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'oa_fm_box_heading_text_align',
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
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-box-food-heading' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-fm-box-header-padding',
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
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-box-food-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Descriptions Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_control(
            'oa-sa-fm-box-descriptions-font-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-box-food-desc' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-descriptions-typhography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-box-food-desc' => ''
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-descriptions-text-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-box-food-desc' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'oa_sa_fm_descriptions_text_align',
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
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-box-food-desc' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'oa-sa-fm-descriptions-padding',
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
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-box-food-desc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'oa-sa-fm-price-font-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-foodMenu-price' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'oa-sa-fm-price-bg-color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-foodMenu-price' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-10-price-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-foodMenu-price' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-fm-price-box-width',
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
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-foodMenu-price' => 'width:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-price-text-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-foodMenu-price' => ''
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-price-box-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-foodMenu-price' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-fm-price-box-border-radius',
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
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-foodMenu-price' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_control(
            'oa_sa_fm_price_text_align',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'left',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-right',
                    ],
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
                    '{{WRAPPER}} .sa_fm_template_11 .oxi-addons-foodMenu-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
