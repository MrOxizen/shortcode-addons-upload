<?php

namespace SHORTCODE_ADDONS_UPLOAD\Flip_boxes\Admin;

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

class Style_8 extends AdminStyle {

    public function register_controls() {

        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'front' => esc_html__('Front', SHORTCODE_ADDOONS),
                'backend' => esc_html__('Backend', SHORTCODE_ADDOONS),
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
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa-flip-boxes-col', $this->style, [
            'type' => Controls::COLUMN,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-flip-box-col-style-8' => '',
            ]
                ]
        );
        $this->add_repeater_control(
                'sa_flip_boxes_data_style_7', $this->style, [
            'label' => __('Flip Boxes Data', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'separator' => TRUE,
            'button' => 'Add New Flip Box',
            'fields' => [
                'sa_flip_boxes_heading' => [
                    'label' => __('Flip Box Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Title One',
                ],
                'shortcode-addons-start-flip-box-tabs' => [
                    'controller' => 'start_controls_tabs',
                    'options' => [
                        'front' => esc_html__('Front Box Data', SHORTCODE_ADDOONS),
                        'backend' => esc_html__('Back Box Data', SHORTCODE_ADDOONS),
                    ]
                ],
                'shortcode-addons-start-tab1' => [
                    'controller' => 'start_controls_tab',
                ],
                
                'sa_flip_boxes_icon' => [
                    'label' => __('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fab fa-facebook-f',
                ],
                
                'shortcode-addons-start-tab1-end' => [
                    'controller' => 'end_controls_tab',
                ],
                'shortcode-addons-start-tab2' => [
                    'controller' => 'start_controls_tab',
                ],
               'sa_flip_back_boxes_icon' => [
                    'label' => __('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fab fa-twitter',
                ],
                
                'shortcode-addons-start-tab2-end' => [
                    'controller' => 'end_controls_tab',
                ],
                'shortcode-addons-end-flip-box-tabs' => [
                    'controller' => 'end_controls_tabs',
                ],
                'sa_flip_boxes_body_link' => [
                    'label' => __('URL', SHORTCODE_ADDOONS),
                    'separator' => true,
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
                    'default' => '',
                    'placeholder' => 'https://www.yoururl.com',
                ],
            ],
            'title_field' => 'sa_flip_boxes_heading',
                ]
        );
        $this->add_control(
                'sa-ac-flip_boxes_flip_direction', $this->style, [
            'label' => __('Flip Direction', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'separator' => TRUE,
            'default' => 'oxi-addons-flip-box-flip-top-to-bottom',
            'options' => [
                'oxi-addons-flip-box-flip-top-to-bottom' => __('Top To Bottom', SHORTCODE_ADDOONS),
                'oxi-addons-flip-box-flip-bottom-to-top' => __('Bottom To Top', SHORTCODE_ADDOONS),
                'oxi-addons-flip-box-flip-left-to-right' => __('Left To Right', SHORTCODE_ADDOONS),
                'oxi-addons-flip-box-flip-right-to-left' => __('Right To Left', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa-ac-flip_boxes_flip_effects', $this->style, [
            'label' => __('Flip Effects', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'default' => 'easing_easeInOutExpo',
            'options' => [
                'easing_easeInOutExpo' => __('EaseOutBack', SHORTCODE_ADDOONS),
                'easing_easeInOutCirc' => __('EaseInOutExpo', SHORTCODE_ADDOONS),
                'easing_easeOutBack' => __('EaseInOutCirc', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa-flip-boxes-flip_time', $this->style, [
            'label' => __('Flipping Time', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 0.5,
            ],
            'range' => [
                'px' => [
                    'min' => 0.1,
                    'max' => 10,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 *' => 'transition: all {{SIZE}}s ease-in-out !important;',
            ],
                ]
        );
        $this->add_group_control(
                'sa-flip-boxes-animation', $this->style, [
            'type' => Controls::ANIMATION,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-flip-box-col-style-8' => '',
            ]
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa-flip-boxes-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 200,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-flip-boxes-height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 200,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8' => 'height:{{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-boxes-body:after ' => 'padding-bottom:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-flip-boxes-border-radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-flip-boxes-margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-flip-box-col-style-8' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $this->add_group_control(
                'sa-flip-boxes-boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-section' => '',
                
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa-flip-boxes-hover-boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-section' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();



        $this->end_controls_section();

        $this->end_section_devider();


        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'front'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa-flip-box-front-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-section' => '',
            ]
                ]
        );
       
        $this->add_group_control(
                'sa-flip-box-front-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-section' => '',
            ]
                ]
        );

        
        $this->add_responsive_control(
                'sa-ib-content-font-box-margin', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa-flip-boxes-front-icon-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 100,
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon .oxi-icons' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
             ],
                ]
        );
        $this->add_responsive_control(
                'sa-flip-boxex-front-icon-size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 80,
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_group_control(
                'sa-flip-boxex-front-icon-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon .oxi-icons' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-flip-boxex-front-icon-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon .oxi-icons' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-flip-box-front-icon-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon .oxi-icons' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa-flip-boxes-front-icon-border-radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon .oxi-icons' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'backend'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa-flip-box-back-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-section' => '',
            ]
                ]
        );
        
        $this->add_group_control(
                'sa-flip-box-back-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-section' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa-flip-boxes-back-padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
      
        $this->end_controls_section();
        
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa-flip-boxes-back-icon-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 100,
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon .oxi-icons' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
             ],
                ]
        );
        $this->add_responsive_control(
                'sa-flip-boxex-back-icon-size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 80,
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_group_control(
                'sa-flip-boxex-back-icon-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon .oxi-icons' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-flip-boxex-back-icon-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon .oxi-icons' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-flip-box-back-icon-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon .oxi-icons' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa-flip-boxes-back-icon-border-radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon .oxi-icons' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }


}
