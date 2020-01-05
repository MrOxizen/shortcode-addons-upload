<?php

namespace SHORTCODE_ADDONS_UPLOAD\Step_flow\Admin;

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
                'sa_step_flow_coloum', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_coloum_style1' => '',
            ]
                ]
        );

        $this->add_repeater_control(
                'sa_step_flow_repeater', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_sf_icon_text' => [
                    'label' => __('Icon/Text ', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'operator' => Controls::OPERATOR_ICON,
                    'loader' => TRUE,
                    'default' => 'sa_icon',
                    'options' => [
                        'sa_icon' => [
                            'title' => __('Icon', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-star',
                        ],
                        'sa_text' => [
                            'title' => __('Text', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-text-height',
                        ],
                    ],
                ],
                'sa_sf_icon' => [
                    'label' => __('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fas fa-brain',
                    'placeholder' => '',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_{{KEY}} .oxi_addons_step_flow_icon' => '',
                    ],
                    'condition' => [
                        'sa_sf_icon_text' => 'sa_icon',
                    ],
                    'conditional' => Controls::INSIDE,
                ],
                'sa_sf_icontext' => [
                    'label' => __('Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Step 01',
                    'placeholder' => 'Step',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_{{KEY}} .oxi_addons_step_icon_text' => '',
                    ],
                    'condition' => [
                        'sa_sf_icon_text' => 'sa_text',
                    ],
                    'conditional' => Controls::INSIDE,
                ],
                'sa_sf_text' => [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Defalt Title',
                    'placeholder' => 'Defalt Title',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_{{KEY}} .oxi_addons_step_flow_heading' => '',
                    ],
                ],
                'sa_sf_textarea' => [
                    'label' => __('Short Details', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit.',
                    'placeholder' => '',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_{{KEY}} .oxi_addons_step_flow_content' => '',
                    ],
                ],
                'sa_sf_direction' => [
                    'label' => __('Direction', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'loader' => TRUE,
                    'default' => 'yes',
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
            ],
            'title_field' => 'sa_sf_text',
                ]
        );



        
       
        $this->add_group_control(
                'sa_sf_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa_sf_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_body' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_sf_margin', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_step_flow_style1' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Direction Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_sf_connetor_style', $this->style, [
            'label' => __('Direction Style', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'solid',
            'options' => [
                'solid' => __('Solid', SHORTCODE_ADDOONS),
                'dotted' => __('Dotted', SHORTCODE_ADDOONS),
                'dashed' => __('Dashed', SHORTCODE_ADDOONS),
                'double' => __('Double', SHORTCODE_ADDOONS),
                'Groove' => __('Groove', SHORTCODE_ADDOONS),
                'ridge' => __('Ridge', SHORTCODE_ADDOONS),
                'inset' => __('Inset', SHORTCODE_ADDOONS),
                'none' => __('None', SHORTCODE_ADDOONS),
                'hidden' => __('Hidden', SHORTCODE_ADDOONS),
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon_body:before' => 'border-style:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_sf_connetor_color', $this->style, [
            'label' => __('Direction Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon_body:before' => 'border-color:{{VALUE}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_sf_connetor_width', $this->style, [
            'label' => __('Direction Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
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
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon_body:before' => 'width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_sf_connetor_height', $this->style, [
            'label' => __('Border Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ],
                
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon_body:before' => 'border-width:{{SIZE}}px;',
            ],
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
        $this->add_control(
                'sa_sf_icon_position', $this->style, [
            'label' => __('Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
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
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon' => 'text-align:{{VALUE}};',
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Icon', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Text', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_responsive_control(
                'sa_sf_icon_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
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
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_control(
                'sa_sf_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon .oxi-icons' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_sf_icontext_typ', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_icon_text' => '',
            ]
                ]
        );
        $this->add_control(
                'sa_sf_icontext_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_icon_text' => 'color: {{VALUE}};',
            ]
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
                'sa_sf_icon_width', $this->style, [
            'label' => __('Box Width', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
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
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon_icon' => 'width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_sf_icon_height', $this->style, [
            'label' => __('Box Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
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
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon_icon' => 'height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_group_control(
                'sa_sf_icon_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon_icon' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_sf_icon_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon_icon' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_sf_icon_br_redius', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon_icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_sf_icon_bxshdow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon_icon' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_sf_icon_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_icon' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );


        $this->end_controls_section();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );

        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Heading', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Description', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_sf_heading_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_heading' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_sf_heading_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_heading' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_sf_heading_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_heading' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_sf_description-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_content' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_sf_description-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_content' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_sf_description-padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_step_flow_style1 .oxi_addons_step_flow_content' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
