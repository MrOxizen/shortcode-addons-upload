<?php

namespace SHORTCODE_ADDONS_UPLOAD\Content_boxes\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_13
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_13 extends AdminStyle
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
                    'sa_price_table_ribbon_switter_hover_active' => [
                        'label' => __('Active Overlay', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'loader' => TRUE,
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'oxi_addons__hover_active',
                    ], 
                    'sa_content_box_overlay_direction' => [
                        'label' => __('Overlay Direction', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'loader' => TRUE,
                        'label_on' => __('Left to Right', SHORTCODE_ADDOONS),
                        'label_off' => __('Right to Left', SHORTCODE_ADDOONS),
                        'return_value' => 'oxi--right-to-left',
                        'selector' => [
                            '{{WRAPPER}} .oxi_cb_tem_'.$this->oxiid.'_{{KEY}} .oxi-addons-content-boxes-data' => '',
                        ],  
                    ], 
                    'sa_price_table_ribbon_switter' => [
                        'label' => __('Ribbon', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'default' => 'no',
                        'loader' => TRUE,
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ], 
                    'sa_price_table_ribbon_text' => [
                        'label' => esc_html__('Ribbon Text', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'FREE',
                        'selector' => [
                            '{{WRAPPER}} .oxi_cb_tem_'.$this->oxiid.'_{{KEY}} .oxi-addons-ribon' => '',
                        ],
                    ],
                    'sa_el_content_box_separator' => [
                        'label' => esc_html__(' ', SHORTCODE_ADDOONS),
                        'type' => Controls::SEPARATOR, 
                        Controls::SEPARATOR => true, 
                    ],
                    'sa_el_content_box_fa_icon' => [
                        'label' => esc_html__('Icon Class', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fas fa-coffee',
                        'selector' => [
                            '{{WRAPPER}} .oxi_cb_tem_'.$this->oxiid.'_{{KEY}} .oxi-addons-content-icon-boxes-data' => '',
                        ],
                    ],
                    'sa_el_content_box_heading' => [
                        'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => '100% Working',
                        'selector' => [
                            '{{WRAPPER}} .oxi_cb_tem_'.$this->oxiid.'_{{KEY}} .oxi-addons-content-boxes-heading' => '',
                        ],
                    ],
                    'sa_el_content_box_sub_heading' => [
                        'label' => esc_html__('Sub Heading', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'BEST TEAM',
                        'selector' => [
                            '{{WRAPPER}} .oxi_cb_tem_'.$this->oxiid.'_{{KEY}} .oxi-addons-content-boxes-sub-heading' => '',
                        ],
                    ],
                    'sa_el_content_box_content' => [
                        'label' => esc_html__('Content', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => 'Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Aenean Commodo Ligula Eget Dolor.',
                        'selector' => [
                            '{{WRAPPER}} .oxi_cb_tem_'.$this->oxiid.'_{{KEY}} .oxi-addons-content-boxes-content' => '',
                        ],
                    ],
                    'sa_el_content_box_content_button_text' => [
                        'label' => esc_html__('Button Text', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('Buy Now', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi_cb_tem_'.$this->oxiid.'_{{KEY}}' => '',
                        ],
                    ],
                    'sa_el_content_box_content_button_link' => [
                        'label' => esc_html__('Button Link', SHORTCODE_ADDOONS),
                        'type' => Controls::URL,
                        'controller' => 'add_group_control',
                        'selector' => [
                            '{{WRAPPER}}  .oxi_cb_tem_'.$this->oxiid.'_{{KEY}}' => '',
                        ],
                    ],
                ],

                'title_field' => 'sa_el_content_box_heading',
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
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-data' => 'max-width:{{SIZE}}{{UNIT}};', 
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
                    '{{WRAPPER}} .oxi-addons-content-boxes-data' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa-ac-op-cl-bg-h-color-overaly',
            $this->style,
            [
                'label' => __('Overlay Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(72, 26, 153, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-data::before' => 'background:{{VALUE}};'
                ],
            ]
        );  
        $this->add_group_control(
            'sa-ac-box-box-shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-content-boxes-data' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-content-box-box-animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->add_responsive_control(
            'sa_ac_content_box_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
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
                    '{{WRAPPER}} .oxi-addons-content-boxes-content-outside' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    '{{WRAPPER}} .oxi-addons-content-boxes-data' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Ribbon Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        ); 
        $this->add_control(
            'sa_price_table_ribbon_position_left_right',
            $this->style,
            [
                'label' => __('Left Right', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::CHOOSE, 
                'default' => 'ribon_left', 
                'options' => [
                    'ribon_left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                    ],
                    'ribon_right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                    ],
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_price_table_price_ribbon_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon' => ''
                ], 
            ]
        );
        $this->add_control(
            'sa_price_table_price_ribbon_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon' => 'color:{{VALUE}};'
                ], 
            ]
        );
        $this->add_control(
            'sa_price_table_price_ribbon_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(0, 113, 189, 1.00)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon' => 'background-color:{{VALUE}};'
                ], 
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER, 
                'default' => [
                    'unit' => 'px',
                    'size' => 200,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon' => 'width:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
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
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon' => 'height:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_left',
            $this->style,
            [
                'label' => __('Left Right', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [ 
                    'sa_price_table_ribbon_position_left_right' => 'ribon_left'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -70,
                ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 300,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon.ribon_left' => 'left:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_right',
            $this->style,
            [
                'label' => __('Left Right', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [ 
                    'sa_price_table_ribbon_position_left_right' => 'ribon_right'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -70,
                ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 300,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon.ribon_right' => 'right:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_top',
            $this->style,
            [
                'label' => __('Top Position', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER, 
                'default' => [
                    'unit' => 'px',
                    'size' => -9,
                ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 300,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon' => 'top:{{SIZE}}{{UNIT}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_price_table_price_ribbon_rotate_left',
            $this->style,
            [
                'label' => __('Rotate', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [ 
                    'sa_price_table_ribbon_position_left_right' => 'ribon_left'
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -45,
                ],
                'range' => [
                    'px' => [
                        'min' => -250,
                        'max' => 250,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon.ribon_left' => 'transform: rotate({{SIZE}}deg) ;'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_rotate_right',
            $this->style,
            [
                'label' => __('Rotate', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [ 
                    'sa_price_table_ribbon_position_left_right' => 'ribon_right'
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 45,
                ],
                'range' => [
                    '%' => [
                        'min' => -250,
                        'max' => 250,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon.ribon_right' => 'transform: rotate({{SIZE}}deg) ;'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_price_table_price_ribbon_padding',
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
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-ribon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section(); 
        $this->end_section_devider();  
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Icon Body', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_responsive_control(
            'sa-ac-op-cl-icon-height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 120,
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
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-icon-boxes-data' => 'height:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa-ac-op-cl-icon-width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 120,
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
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-icon-boxes-data' => 'width:{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_control(
            'sa-ac-box-icon-body-background',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(242, 91, 83, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-icon-boxes-data' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_content_box_icon_align',
            $this->style,
            [
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
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-icon' => 'justify-content: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-icon-body-border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-icon-boxes-data' => ''
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
                    'size' => 60,
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
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-icon-boxes-data' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();




        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_responsive_control(
            'sa_content_boxes_icon_font_size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 5,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_control(
            'sa-ac-box-icon-color',
            $this->style,
            [
                'label' => __('Icon Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-icons' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-content-box-icon-animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
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
            'sa-ac-heading-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#858585',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-heading' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->start_controls_tab(); 
        $this->add_control(
            'sa-ac-heading-color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-data:hover .oxi-addons-content-boxes-heading' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-data.oxi_addons__hover_active .oxi-addons-content-boxes-heading' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->end_controls_tabs(); 
    
        $this->add_group_control(
            'sa-ac-title-heading-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-heading' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-heading-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-heading' => ''
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
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Sub Heading Settings', SHORTCODE_ADDOONS),
                'showing' => false,
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
            'sa-ac-sub-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#858585',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-sub-heading' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->start_controls_tab(); 
        $this->add_control(
            'sa-ac-sub-color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-data:hover .oxi-addons-content-boxes-sub-heading' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-data.oxi_addons__hover_active .oxi-addons-content-boxes-sub-heading' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->end_controls_tabs(); 
       
        $this->add_group_control(
            'sa-ac-title-sub-heading-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-sub-heading' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-sub-heading-tx-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-sub-heading' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa-ac-sub-heading-padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-sub-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'sa-ac-content-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#858585',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-content' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->start_controls_tab(); 
        $this->add_control(
            'sa-ac-content-color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-data:hover .oxi-addons-content-boxes-content' => 'color:{{VALUE}};',
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-data.oxi_addons__hover_active .oxi-addons-content-boxes-content' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->end_controls_tabs(); 
       
        $this->add_group_control(
            'sa-ac-content-typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-content' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-content-text-shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-content' => ''
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
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi-addons-content-boxes-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
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
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi_addons__button' => ''
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
            'sa-ac-op-cl-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi_addons__button' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa-ac-op-cl-bg-color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(95, 61, 153, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi_addons__button' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-cont-br',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi_addons__button' => ''
                ],
            ]
        ); 
        
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa-ac-op-cl-h-color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi_addons__button:hover' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa-ac-op-cl-bg-h-color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(72, 26, 153, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi_addons__button:hover' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa-ac-cont-br-hvr',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi_addons__button:hover' => ''
                ],
            ]
        ); 
        $this->end_controls_tab();  
        $this->end_controls_tabs();  

        $this->add_responsive_control(
            'sa-ac-btn-padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => 15,
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
                    '{{WRAPPER}} .oxi_cb_tem_13 .oxi_addons__button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        ); 
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }
}
