<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Food_menu\Admin;

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

//         startfuad
        
        
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
                'sa_el_insert_food_name' => [
                    'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Tom Yang Kung Soup',
                    'selector' => [
                        '{{WRAPPER}} .oa_el_fm_tem_2_inner_{{KEY}} .oxi-addonsFM-ON-heading' => '',
                    ],
                ],
                'sa_el_insert_food_desc' => [
                    'label' => esc_html__('Descriptions', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Lorem ipsum or lipsum as it is sometimes known is dummy text used in laying out print',
                    'selector' => [
                        '{{WRAPPER}} .oa_el_fm_tem_2_inner_{{KEY}} .oxi-addonsFM-ON-info' => '',
                    ],
                ],
                'sa_el_insert_price' => [
                    'label' => esc_html__('Price', SHORTCODE_ADDOONS),
                    'type' => Controls::NUMBER,
                    'default' => '27',
                    'selector' => [
                        '{{WRAPPER}} .oa_el_fm_tem_2_inner_{{KEY}} .oxi-addonsFM-ON-price' => '',
                    ],
                ],
                'sa_el_insert_food_rating' => [
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
                        '{{WRAPPER}} .oa_el_fm_tem_2_inner_{{KEY}} .oxi-addonsFM-ON-rating' => '',
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
                '{{WRAPPER}} .oa_el_fm_tem_2_inner.sa-max-w-auto' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa-max-w-condition' => 'custom'
            ]
                ]
        );
        $this->add_control(
                'sa-fm-box-bg-color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-row' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-box-outer-border', $this->style, [
            'type' => Controls::BORDER,
            'loader' => true,
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-row' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-fm-box-border-radius', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-box-box-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-row' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-animation-temp-2', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa_fm_box_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-admin-edit-list .sa-max-w-auto' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fm_margin', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-row' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();


        $this->start_section_devider();
        
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Body Content Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_group_control(
                'sa-fm-box-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'loader' => true,
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-content-body' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-box-inner-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-content-body' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-fm-box-border-inner-radius', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-content-body' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fm_box_inner_side_padding', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-row' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        
        
        $this->end_controls_section();
        
        
        
        
        
        
        
        
        
        
        


        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_responsive_control(
                'sa-fm-banner-image-height', $this->style, [
            'label' => __('Image Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => true,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 400,
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-image img' => 'height:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-fm-banner-image-width', $this->style, [
            'label' => __('Image Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => true,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 400,
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-image img' => 'width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_icon_box_inner_side_image_align', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-image' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-box-image-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-image img' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-fm-box-image-border-radius', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fm_middle_image_margin', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-image img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                'sa-fm-heading-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-heading' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-h-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-heading' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-heading' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_icon_box_heading_text_align', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-heading' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-title-heading-padding', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Price Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_control(
                'sa-fm-price-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-price' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-price-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-price' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-price-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-price' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_fm_price_text_align', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-price' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-fm-price-padding', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Rating Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_control(
                'sa-fm-rating-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-rating' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_fm_rating_text_align', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-rating' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-fm-rating-padding', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-rating' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Info Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_control(
                'sa-fm-info-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-info' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-info-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-info' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-fm-info-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-info' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_fm_info_text_align', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-info' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-fm-info-padding', $this->style, [
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
                '{{WRAPPER}} .oa_el_fm_template_2 .oxi-addonsFM-ON-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();

        $this->end_section_tabs();
    }

  

}
