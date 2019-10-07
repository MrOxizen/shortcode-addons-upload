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

class Style_10 extends AdminStyle {

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

//         start
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
                'sa_el_food_box_image' => [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.oxilab.org/wp-content/uploads/2019/01/uc_mobile_bullets.png',
                    ],
                    'controller' => 'add_group_control',
                ],
                'sa_el_insert_food_heading' => [
                    'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Tom Yang Kung',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-box-outer-{{KEY}} .oxi-addons-grid-item' => '',
                    ],
                ],
                'sa_el_insert_food_info' => [
                    'label' => esc_html__('Info', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Garlic/Mashroom/Vaggies',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-box-outer-{{KEY}} .oxi-addons-food-name' => '',
                    ],
                ],
                'sa_el_insert_food_button' => [
                    'label' => esc_html__('Button', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Buy Now',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-box-outer-{{KEY}} .oxi-addons-price' => '',
                    ],
                ],
                'sa_el_button_link' => [
                    'label' => esc_html__('Button Link', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'default' => 'https://www.sumonmia.com',
                    'controller' => 'add_group_control',
                ],
                'sa_el_insert_price' => [
                    'label' => esc_html__('Price', SHORTCODE_ADDOONS),
                    'type' => Controls::NUMBER,
                    'default' => '21',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-box-outer-{{KEY}} .oxi-addons-price' => '',
                    ],
                ],
            ],
            'title_field' => 'sa_el_insert_food_heading',
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
                'sa-max-w-condition', $this->style, [
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
                'sa-ac-op-cl-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
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
                '{{WRAPPER}} .oxi-addons-box-temp-10.sa-max-w-auto' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa-max-w-condition' => 'custom'
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-fm-box-height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
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
                '{{WRAPPER}} .oxi-addons-box-temp-10' => 'height:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal ', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                'oa-sa-fm-border-box-normal-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-box-outer' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-fm-box-normal-border-radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-box-outer' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        // hover side
        $this->add_control(
                'oa-sa-fm-10-hover-background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'oparetor' => 'RGB',
            'loader' => true,
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-box-inner' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'oa-sa-fm-border-box-hover-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-box-inner' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-fm-box-hover-border-radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-box-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fm_box_contents_hover_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10:hover .oxi-addons-box-sample' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa-fm-main-box-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-box-outer' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-box-animation-temp-10', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa_fm_main_box_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fm_main_box_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-box-outer' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();


        $this->end_section_devider();

        $this->start_section_devider();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Heading Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'oa-sa-fm-10-heading-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'loader' => true,
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-grid-item' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-10-heading-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-grid-item' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-10-heading-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-grid-item' => ''
            ],
                ]
        );
        $this->add_control(
                'oa_fm_10_heading_text_align', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-grid-item' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-fm-10-heading-heading-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-grid-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Info Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'oa-sa-fm-10-info-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-food-name' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'oa-sa-fm-10-info-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-food-name' => ''
            ],
                ]
        );
        $this->add_group_control(
                'oa-sa-fm-10-info-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-food-name' => ''
            ],
                ]
        );
        $this->add_control(
                'oa_sa_fm_10_info_text_align', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-food-name' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'oa-sa-fm-10-info-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-food-name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Price Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'oa-sa-fm-10-price-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-price' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'oa-sa-fm-10-price-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-price' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-10-price-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-price' => ''
            ],
                ]
        );
        $this->add_control(
                'oa_sa_fm_10_price_text_align', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-price' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'oa-sa-fm-10-price-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                'sa-fm-10-button-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-button-anchor' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal ', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'oa-sa-fm-10-button-normal-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'loader' => true,
            'type' => Controls::COLOR,
            'default' => '#222',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-button-anchor' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'oa-sa-fm-10-button-background-color', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'loader' => true,
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-button-anchor' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'oa-sa-fm-button-10-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-button-anchor' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-fm-box-button-border-radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-button-anchor' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        // hover side
        $this->add_control(
                'oa-sa-fm-10-button-hover-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'loader' => true,
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-button-anchor:hover' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'oa-sa-fm-10-button-hover-background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'oparetor' => 'RGB',
            'loader' => true,
            'type' => Controls::COLOR,
            'default' => '#222',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-button-anchor:hover' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'oa-sa-fm-button-hover-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-button-anchor:hover' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-fm-box-button-hover-border-radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-button-anchor:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_group_control(
                'sa-fm-10-button-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-button-anchor' => ''
            ],
                ]
        );
        $this->add_control(
                'oa_fm_10_button_text_align', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-btn' => 'text-align: {{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa-fm-button-animation-temp-10', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa_fm_button_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-button-anchor' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fm_button_main_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-box-temp-10 .oxi-addons-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();


        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
