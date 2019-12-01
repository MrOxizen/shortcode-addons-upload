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

class Style_8 extends AdminStyle
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
                    'sa_el_insert_food_name' => [
                        'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Tom Yang Kung Soup',
                        'selector' => [
                            '{{WRAPPER}} .oxi-addonsFM-SI-row-{{KEY}} .oxi-addonsFM-SI-heading' => '',
                        ],
                    ],
                    'sa_el_insert_price' => [
                        'label' => esc_html__('Price', SHORTCODE_ADDOONS),
                        'type' => Controls::NUMBER,
                        'default' => '21',
                        'selector' => [
                            '{{WRAPPER}} .oxi-addonsFM-SI-row-{{KEY}} .oxi-addonsFM-SI-price' => '',
                        ],
                    ],
                    'sa_el_price_link' => [
                        'label' => esc_html__('Button Link', SHORTCODE_ADDOONS),
                        'type' => Controls::URL,
                        'default' => 'https://www.sumonmia.com',
                        'controller' => 'add_group_control',
                    ],
                    'sa_el_insert_food_info' => [
                        'label' => esc_html__('Descriptions', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => 'Lorem ipsum or lipsum as it is sometimes known is dummy text used in laying out print',
                        'selector' => [
                            '{{WRAPPER}} .oxi-addonsFM-SI-row-{{KEY}} .oxi-addonsFM-SI-info' => '',
                        ],
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
                    '{{WRAPPER}} .oxi-addons-admin-edit-list' => '',
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
                    'size' => 350,
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
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8.sa-max-w-auto' => 'max-width:{{SIZE}}{{UNIT}};'
                ],
                'condition' => [
                    'sa-max-w-condition' => 'custom'
                ]
            ]
        );

        $this->add_control(
            'sa-fm-box-bag-outside-color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::GRADIENT,
                'oparetor' => 'RGB',
                'default' => 'rgba(41, 227, 230, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-row' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-fm-box-out-side-border-radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'separator' => TRUE,
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
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );


        $this->add_group_control(
            'sa-fm-whole-box-shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-row' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-box-animation-temp-6',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->add_responsive_control(
            'sa_fm_outer_side_box_padding',
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
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-row' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
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
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();






        $this->end_section_devider();

        $this->start_section_devider();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Body Content Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_group_control(
            'sa-fm-box-inside-bg-color-or-img',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-content-body' => ''
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-border-box-inner-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-content-body' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_fm_box_contents_side_inner_padding',
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
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-row' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'oa-sa-fm-6-heading-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-heading' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-6-heading-h-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-heading' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-6-heading-text-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-heading' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'oa_fm-6_heading_text_align',
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
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-heading' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-fm-6-heading-heading-padding',
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
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'oa-sa-fm-6-info-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-info' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-6-info-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-info' => ''
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-6-info-text-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-info' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'oa_sa_fm-6_info_text_align',
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
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-info' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'oa-sa-fm-6-info-padding',
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
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'oa-sa-fm-6-price-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-price' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'oa-sa-fm-6-price-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-price' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-fm-6-price-text-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-price' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'oa_sa_fm-6_price_text_align',
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
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-price' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'oa-sa-fm-6-price-padding',
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
                    '{{WRAPPER}} .oxiAddonsFoodMenuTemplate8 .oxi-addonsFM-SI-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();


        $this->end_section_devider();

        $this->end_section_tabs();
    }
}
