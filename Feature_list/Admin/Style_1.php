<?php

namespace SHORTCODE_ADDONS_UPLOAD\Feature_list\Admin;

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

        $this->add_repeater_control(
                'sa_feature_list_repeater', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_fl_icon' => [
                    'label' => __('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fas fa-brain',
                    'placeholder' => '',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_{{KEY}} .oxi_addons_feature_list_icon' => '',
                    ],
                ],
                'sa_fl_text' => [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Lorem Ipsum is simply dummy text',
                    'placeholder' => 'Lorem Ipsum is simply dummy text',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_{{KEY}} .oxi_addons_feature_list_heading' => '',
                    ],
                ],
                'sa_fl_textarea' => [
                    'label' => __('Short Details', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'When you visit our site, pre-selected companies may access',
                    'placeholder' => '',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_{{KEY}} .oxi_addons_feature_list_content' => '',
                    ],
                ]
            ],
            'title_field' => 'sa_fl_text',
                ]
        );


        $this->add_control(
                'sa_fl_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => 'sa_fl_width_auto',
            'options' => [
                'sa_fl_width_auto' => [
                    'title' => __('Auto', SHORTCODE_ADDOONS),
                ],
                'sa_fl_width_dyn' => [
                    'title' => __('Dynamic', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fl_max_width', $this->style, [
            'label' => __('Max Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 500,
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_main_body' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'sa_fl_width' => 'sa_fl_width_dyn'
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_fl_space', $this->style, [
            'label' => __('Space Between', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_section' => 'padding-bottom:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fl_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_main_body' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fl_margin', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_feature_list_style1' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
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
                'sa_fl_heading_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_heading' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_fl_heading_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_heading' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_fl_heading_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_heading' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_fl_description-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_content' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_fl_description-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_content' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_fl_description-padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_content' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
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
                'sa_fl_icon_position', $this->style, [
            'label' => __('Icon Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'left',
            'loader' => true,
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fl_icon_size', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_control(
                'sa_fl_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon .oxi-icons' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fl_icon_width', $this->style, [
            'label' => __('Icon Box Width', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon .oxi-icons' => 'width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fl_icon_height', $this->style, [
            'label' => __('Icon Box Height', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon .oxi-icons' => 'height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_fl_icon_shape', $this->style, [
            'label' => __('Icon Shape', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'normal',
            'loader' => TRUE,
            'options' => [
                'normal' => __('Normal', SHORTCODE_ADDOONS),
                'rhombus' => __('Rhombus', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_group_control(
                'sa_fl_icon_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon  .oxi-icons' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_fl_icon_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon  .oxi-icons' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fl_icon_br_redius', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon  .oxi-icons' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_fl_icon_bxshdow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon  .oxi-icons' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fl_icon_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Connector Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_fl_connetor_style', $this->style, [
            'label' => __('Connector Style', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'solid',
            'options' => [
                'dotted' => __('Dotted', SHORTCODE_ADDOONS),
                'dashed' => __('Dashed', SHORTCODE_ADDOONS),
                'solid' => __('Solid', SHORTCODE_ADDOONS),
                'double' => __('Double', SHORTCODE_ADDOONS),
                'Groove' => __('Groove', SHORTCODE_ADDOONS),
                'ridge' => __('Ridge', SHORTCODE_ADDOONS),
                'inset' => __('Inset', SHORTCODE_ADDOONS),
                'inset' => __('Inset', SHORTCODE_ADDOONS),
                'none' => __('None', SHORTCODE_ADDOONS),
                'hidden' => __('Hidden', SHORTCODE_ADDOONS),
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon:after' => 'border-style:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_fl_connetor_color', $this->style, [
            'label' => __('Connector Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon:after' => 'border-color:{{VALUE}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fl_connetor_width', $this->style, [
            'label' => __('Connector Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon:after' => 'border-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_fl_connetor_height', $this->style, [
            'label' => __('Connector Height', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_feature_list_style1 .oxi_addons_feature_list_icon:after' => 'height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );


        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
