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

class Style_6 extends AdminStyle
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

        // start


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
                    'sa_el_box_image' => [
                        'type' => Controls::MEDIA,
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.oxilab.org/wp-content/uploads/2019/01/uc_mobile_bullets.png',
                        ],
                        'controller' => 'add_group_control',
                    ],
                    'sa_el_box_heading' => [
                        'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Lorem Ipsum Dolor',
                        'selector' => [
                            '{{WRAPPER}} .sa-cb-temp-'.$this->oxiid.'-{{KEY}} .sa-cb-temp-6-heading' => '',
                        ],
                    ],
                    'sa_el_box_content' => [
                        'label' => esc_html__('Content', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. ',
                        'selector' => [
                            '{{WRAPPER}} .sa-cb-temp-'.$this->oxiid.'-{{KEY}} .sa-cb-temp-6-content' => '',
                        ],
                    ],
                    'sa_el_button_text' => [
                        'label' => esc_html__('Button', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Learn More',
                        'selector' => [
                            '{{WRAPPER}} .sa-cb-temp-'.$this->oxiid.'-{{KEY}} .sa-cb-temp-6-button' => '',
                        ],
                    ],
                    'sa_el_button_link' => [
                        'label' => esc_html__('Button Link', SHORTCODE_ADDOONS),
                        'type' => Controls::URL,
                        'default' => 'https://www.sumonmia.com',
                        'controller' => 'add_group_control',
                    ],
                ],
                'title_field' => 'sa_el_box_heading',
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
            'sa-max-width-condition',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'separator' => true,
                'loader' => true,
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'dynamic',
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
            'sa-ac-op-cl-width',
            $this->style,
            [
                'label' => __('Max-Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'loader' => true,
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
                    '{{WRAPPER}} .sa-cb-temp-6.sa-max-w-dynamic' => 'max-width:{{SIZE}}{{UNIT}};'
                ],
                'condition' => [
                    'sa-max-width-condition' => 'dynamic',
                ]
            ]
        );
        $this->add_control(
            'sa-ac-box-background',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6-data' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-box-box-shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6-data' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-cb-box-animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->add_responsive_control(
            'sa_ac_box_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'loader' => true,
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
                    '{{WRAPPER}} .sa-cb-temp-6-data .sa-cb-temp-6-content-outside' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ac_box_margin',
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
                    '{{WRAPPER}} .sa-cb-temp-6-data' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                'showing' => false,
            ]
        );
        $this->add_responsive_control(
            'sa-ac-op-cl-image-height',
            $this->style,
            [
                'label' => __('Image Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
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
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-outer-div::after' => 'padding-bottom:{{SIZE}}{{UNIT}};'
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
            'sa-ac-heading-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#222',
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6 .sa-cb-temp-6-heading' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-title-heading-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6 .sa-cb-temp-6-heading' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-heading-text-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6 .sa-cb-temp-6-heading' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa-ac-heading-padding',
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
                    '{{WRAPPER}} .sa-cb-temp-6 .sa-cb-temp-6-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_control(
            'sa-ac-content-color',
            $this->style,
            [
                'label' => __('Font Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#222',
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6 .sa-cb-temp-6-content' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-content-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6 .sa-cb-temp-6-content' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-content-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6 .sa-cb-temp-6-content' => ''
                ],
            ]
        );
        
        $this->add_responsive_control(
            'sa-ac-content-padding',
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
                    '{{WRAPPER}} .sa-cb-temp-6 .sa-cb-temp-6-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();




        //start
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_group_control(
            'sa-ac-button-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button' => ''
                ],
            ]
        );

        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa-ac-button-text-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#222',
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa-ac-button-text-background-color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-button-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-ac-button-border-radius',
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
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa-ac-button-hover-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#222',
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button:hover' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa-ac-button-hover-background-color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}}  .sa-cb-temp-6-button .sa-button:hover' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-button-hover-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button:hover' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-cb-button-hover-border-radius',
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
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();


        $this->end_controls_tabs();


        $this->add_control(
            'sa_icon_box_button_align',
            $this->style,
            [
                'label' => __('Button Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'separator' => true,
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
                    '{{WRAPPER}} .sa-cb-temp-6 .sa-cb-temp-6-button' => 'text-align: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-btn-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-content_box-button-box-shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-cb-box-button-animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );

        $this->add_responsive_control(
            'sa-ac-button-padding',
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
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-ac-button-margin',
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
                    '{{WRAPPER}} .sa-cb-temp-6-button .sa-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );




        $this->end_section_devider();

        $this->end_section_tabs();



        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'general-settings'
                ]
            ]
        );

        $this->start_section_devider();



        $this->add_group_control(
            'sa-ac-animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->end_controls_section();
        //end







        $this->end_section_devider();

        $this->end_section_tabs();
    }
}
