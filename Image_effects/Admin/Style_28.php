<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_effects\Admin;

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

class Style_28 extends AdminStyle {

    public function register_controls() {

        
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
             ]
        );

        $this->start_section_devider();

        // start

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Add New Content', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_repeater_control(
                'sa_icon_effects_data', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_el_ie_box_image' => [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/06/animal-bug-butterfly-53957.jpg',
                    ],
                    'controller' => 'add_group_control',
                ],
                'sa_el_image_effect_title' => [
                    'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Fully Customizable',
                    'selector' => [
                        '{{WRAPPER}} .sa_image_effect_temp_28_{{KEY}} .ihewc-heading ihewc-delay-sm' => '',
                    ],
                ],
                'sa_el_image_effect_descriptions' => [
                    'label' => esc_html__('Descriptions', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Customize With Image Hover Awesome Tools',
                    'selector' => [
                        '{{WRAPPER}} .sa_image_effect_temp_28_{{KEY}} .ihewc-content.ihewc-delay-sm' => '',
                    ],
                ],
                'sa_el_image_effect_btn_text' => [
                    'label' => esc_html__('Button Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Buy Now',
                    'selector' => [
                        '{{WRAPPER}} .sa_image_effect_temp_28_{{KEY}} .oxi-addons-image-effects-button' => '',
                    ],
                ],
                'sa_el_image_effect_url' => [
                    'label' => esc_html__('Url', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'default' => 'https://www.example.com',
                    'controller' => 'add_group_control',
                ],
            ],
            'title_field' => 'sa_el_image_effect_title',
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
                '{{WRAPPER}} .sa_ie_temp_style_28' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_effects_select_content', $this->style, [
            'label' => __('Alignments', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'ihewc-layout-vertical-middle',
            'loader' => TRUE,
            'separator' => TRUE,
            'options' => [
                'ihewc-layout-vertical-top' => __('Top', SHORTCODE_ADDOONS),
                'ihewc-layout-vertical-middle' => __('Middle', SHORTCODE_ADDOONS),
                'ihewc-layout-vertical-bottom' => __('Bottom', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa_effects_select_icon', $this->style, [
            'label' => __('Effects', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'ihewc-stack-up',
            'loader' => TRUE,
            'options' => [
                'ihewc-stack-up' => __('Stack Up', SHORTCODE_ADDOONS),
                'ihewc-stack-down' => __('Stack Down', SHORTCODE_ADDOONS),
                'ihewc-stack-left' => __('Stack Left', SHORTCODE_ADDOONS),
                'ihewc-stack-right' => __('Stack Right', SHORTCODE_ADDOONS),
                'ihewc-stack-top-left' => __('Stack Top Left', SHORTCODE_ADDOONS),
                'ihewc-stack-top-right' => __('Stack Top Right', SHORTCODE_ADDOONS),
                'ihewc-stack-bottom-left' => __('Stack Bottom Left', SHORTCODE_ADDOONS),
                'ihewc-stack-bottom-right' => __('Stack Bottom Right', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ie-background-image-height', $this->style, [
            'label' => __('Image Height', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .sa_ie_temp_28  .ihewc-hover-image' => 'height:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ie-background-image-width', $this->style, [
            'label' => __('Image Width', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .ihewc-hover-padding-28' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        
        
        
        
        
        
        $this->add_control(
                'sa-ie-bg-overlsay-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'blue',
            'selector' => [
                '{{WRAPPER}} .ihewc-hover:hover,
            {{WRAPPER}} .ihewc-hover:hover:before,
            {{WRAPPER}} .ihewc-hover:hover:after,
            {{WRAPPER}} .ihewc-hover:hover .ihewc-hover-figure,
            {{WRAPPER}} .ihewc-hover:hover .ihewc-hover-figure:before,
            {{WRAPPER}} .ihewc-hover:hover .ihewc-hover-figure:after,
            {{WRAPPER}} .ihewc-hover:hover .ihewc-hover-figure-caption,
            {{WRAPPER}} .ihewc-hover:hover .ihewc-hover-figure-caption:before,
            {{WRAPPER}} .ihewc-hover:hover .ihewc-hover-figure-caption:after' => 'background:{{VALUE}};'
            ],
                ]
        );

         $this->add_control(
                'sa-ie-link-opening', $this->style, [
            'label' => __('Link Opening', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
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
        //normal
        $this->add_group_control(
                'sa-ie-main-box-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28' => 'box-shadow:{{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ie-main-box-border-radius', $this->style, [
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
                '{{WRAPPER}} .sa_ie_temp_28 ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();


        $this->start_controls_tab();
        //hover
        $this->add_group_control(
                'sa-ie-main-hover-box-shadow-hover', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28:hover' => 'box-shadow:{{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ie-main-box-border-radius-hover', $this->style, [
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
                '{{WRAPPER}} .sa_ie_temp_28:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->add_group_control(
                'sa-ie-main-box-animation', $this->style, [
            'type' => Controls::ANIMATION,
            'separator' => true,
                ]
        );
        $this->add_responsive_control(
                'sa_ie_box_main_padding_side', $this->style, [
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
                '{{WRAPPER}} .sa_ie_temp_28 .ihewc-hover-figure .ihewc-hover-figure-caption-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ie_box_main_margin_side', $this->style, [
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
                '{{WRAPPER}} .sa_ie_temp_28 ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );


        $this->end_controls_section();


        $this->end_section_devider();





        //start devider
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Heading Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'sa-ie-heading-animation-class', $this->style, [
            'label' => __('Animation', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => '',
            'loader' => TRUE,
            'options' => [
                '' => __('None', SHORTCODE_ADDOONS),
                'ihewc-fade-up' => __('Fade Up', SHORTCODE_ADDOONS),
                'ihewc-fade-down' => __('Fade Down', SHORTCODE_ADDOONS),
                'ihewc-fade-left' => __('Fade Left', SHORTCODE_ADDOONS),
                'ihewc-fade-right' => __('Fade Right', SHORTCODE_ADDOONS),
                'ihewc-fade-up-big' => __('Fade Up Big', SHORTCODE_ADDOONS),
                'ihewc-fade-down-big' => __('Fade Down Big', SHORTCODE_ADDOONS),
                'ihewc-fade-left-big' => __('Fade Left Big', SHORTCODE_ADDOONS),
                'ihewc-fade-right-big' => __('Fade Right Big', SHORTCODE_ADDOONS),
                'ihewc-zoom-in' => __('Zoom In', SHORTCODE_ADDOONS),
                'ihewc-fade-out' => __('Zoom Out', SHORTCODE_ADDOONS),
                'ihewc-flip-x' => __('Flip X', SHORTCODE_ADDOONS),
                'ihewc-flip-y' => __('Flip Y', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa-ie-heading-font-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 h3.ihewc-heading' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ie-title-heading-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 h3.ihewc-heading' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ie-heading-texts-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 h3.ihewc-heading' => ''
            ],
                ]
        );
       
        $this->add_responsive_control(
                'sa-ie-heading-side-padding', $this->style, [
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
                '{{WRAPPER}} .sa_ie_temp_28 h3.ihewc-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        
        
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Descriptions Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'sa-ie-descriptions-animation-class', $this->style, [
            'label' => __('Animation', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => '',
            'loader' => TRUE,
            'options' => [
                '' => __('None', SHORTCODE_ADDOONS),
                'ihewc-fade-up' => __('Fade Up', SHORTCODE_ADDOONS),
                'ihewc-fade-down' => __('Fade Down', SHORTCODE_ADDOONS),
                'ihewc-fade-left' => __('Fade Left', SHORTCODE_ADDOONS),
                'ihewc-fade-right' => __('Fade Right', SHORTCODE_ADDOONS),
                'ihewc-fade-up-big' => __('Fade Up Big', SHORTCODE_ADDOONS),
                'ihewc-fade-down-big' => __('Fade Down Big', SHORTCODE_ADDOONS),
                'ihewc-fade-left-big' => __('Fade Left Big', SHORTCODE_ADDOONS),
                'ihewc-fade-right-big' => __('Fade Right Big', SHORTCODE_ADDOONS),
                'ihewc-zoom-in' => __('Zoom In', SHORTCODE_ADDOONS),
                'ihewc-fade-out' => __('Zoom Out', SHORTCODE_ADDOONS),
                'ihewc-flip-x' => __('Flip X', SHORTCODE_ADDOONS),
                'ihewc-flip-y' => __('Flip Y', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa-ie-desc-font-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .ihewc-content' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ie-desc-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .ihewc-content' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ie-desc-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .ihewc-content' => ''
            ],
                ]
        );
        
        $this->add_responsive_control(
                'sa-ie-desc-padding', $this->style, [
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
                '{{WRAPPER}} .sa_ie_temp_28 .ihewc-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                'sa-ie-button-side-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .img-btn.ihewc-button' => ''
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
        //normal fuad
        $this->add_control(
                'sa-ie-button-font-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000',
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .img-btn.ihewc-button' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa-ie-button-background-color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .img-btn.ihewc-button' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ie-button-side-box-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .img-btn.ihewc-button' => 'box-shadow:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ie-button-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .img-btn.ihewc-button' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ie-button-border-radius', $this->style, [
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
                '{{WRAPPER}} .sa_ie_temp_28 .img-btn.ihewc-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        //hover 
        $this->add_control(
                'sa-ie-hover-font-colour-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#222',
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .ihewc-button.img-btn:hover' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa-ie-hover-background-button-color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .ihewc-button.img-btn:hover' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ie-button-hover-box-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .ihewc-button.img-btn:hover' => 'box-shadow:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ie-button-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .ihewc-button.img-btn:hover' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ie-button-hover-box-border-radius', $this->style, [
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
                '{{WRAPPER}} .sa_ie_temp_28 .ihewc-button.img-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->add_group_control(
                'sa-ie-buttojn-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'separator' => true,
            'selector' => [
                '{{WRAPPER}} .sa_ie_temp_28 .img-btn.ihewc-button' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_ie_button_side_text_align', $this->style, [
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
                '{{WRAPPER}} .sa_ie_temp_28 .oxi-addons-image-effects-button' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ie-button-side-animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa-ie-buttons-padding', $this->style, [
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
                '{{WRAPPER}} .sa_ie_temp_28 .img-btn.ihewc-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ie-button-side-margin', $this->style, [
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
                '{{WRAPPER}} .sa_ie_temp_28 .img-btn.ihewc-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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

        $this->end_section_devider();



       
        $this->end_controls_section();

        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
