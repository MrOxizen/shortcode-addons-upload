<?php

namespace SHORTCODE_ADDONS_UPLOAD\Team_carousel\Admin;

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
                'team-settings' => esc_html__('Team Settings', SHORTCODE_ADDOONS),
                'carousel-settings' => esc_html__('Carousel Settings', SHORTCODE_ADDOONS),
            ]
                ]
        );

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'team-settings'
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

        $this->add_responsive_control(
                'sa_carousel_col', $this->style, [
            'label' => __('Item Per Rows', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'default' => 'sa_carousel_show_1',
            'options' => [
                'sa_carousel_show_1' => __('Single Item', SHORTCODE_ADDOONS),
                'sa_carousel_show_2' => __('2 Item', SHORTCODE_ADDOONS),
                'sa_carousel_show_3' => __('3 Item', SHORTCODE_ADDOONS),
                'sa_carousel_show_4' => __('4 Item', SHORTCODE_ADDOONS),
                'sa_carousel_show_5' => __('5 Item', SHORTCODE_ADDOONS),
                'sa_carousel_show_6' => __('6 Item', SHORTCODE_ADDOONS),
                'sa_carousel_show_7' => __('7 Item', SHORTCODE_ADDOONS),
                'sa_carousel_show_8' => __('8 Item', SHORTCODE_ADDOONS),
                'sa_carousel_show_9' => __('9 Item', SHORTCODE_ADDOONS),
                'sa_carousel_show_10' => __('10 Item', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_width', $this->style, [
            'label' => __('Max Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 800,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 250,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 10,
                    'max' => 50,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .oxi-team-show-body-style-2' => 'max-width: {{SIZE}}{{UNIT}};',
            ],
                ]
        );




        $this->add_responsive_control(
                'sa_team_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .oxi-team-show-body-style-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_margin', $this->style, [
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
                '{{WRAPPER}} .sa_addons_carousel_style_2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_responsive_control(
                'sa_team_image_height', $this->style, [
            'label' => __('Image Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 800,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 250,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 10,
                    'max' => 50,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .oxi-team-pic-size:after' => 'padding-bottom: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_team_imag_border', $this->style, [
            'label' => __('Hover Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(0, 0, 0, 0.49)',
             'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-icons' => 'background: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_team_imag_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .oxi-team-pic-size' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_name_image_br_redius', $this->style, [
            'label' => __('Border Redius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .oxi-team-pic-size' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_image_margin_bottom', $this->style, [
            'label' => __('Margin Bottom', SHORTCODE_ADDOONS),
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
                    'max' => 250,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .oxi-team-pic-size' => 'margin-bottom: {{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_rearrange_control(
                'sa_team_carousel_rearrange', $this->style, [
            'type' => Controls::REARRANGE,
            'label' => __('Content Rearrange', SHORTCODE_ADDOONS),
            'default' => 'name,divider,desgnation,description,',
            'fields' => [
                'name' => [
                    'label' => __('Name', SHORTCODE_ADDOONS),
                ],
                'divider' => [
                    'label' => __('Divider', SHORTCODE_ADDOONS),
                ],
                'desgnation' => [
                    'label' => __('Desgnation', SHORTCODE_ADDOONS),
                ],
                'description' => [
                    'label' => __('Description', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_group_control(
                'sa_team_main_background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-info' => ''
            ],
                ]
        );

        $this->add_group_control(
                'sa_team_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-info' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_name_br_redius', $this->style, [
            'label' => __('Border Redius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-info' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_team_shadow_main', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-info' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_content_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Text Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Name', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Designation', SHORTCODE_ADDOONS),
                'des' => esc_html__('Description', SHORTCODE_ADDOONS),
            ]
                ]
        );

        $this->start_controls_tab();


        $this->add_control(
                'sa_team_name_tag', $this->style, [
            'label' => __('Tag', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'h3',
            'loader' => TRUE,
            'options' => [
                'h1' => __('H1', SHORTCODE_ADDOONS),
                'h2' => __('H2', SHORTCODE_ADDOONS),
                'h3' => __('H3', SHORTCODE_ADDOONS),
                'h4' => __('H4', SHORTCODE_ADDOONS),
                'h5' => __('H5', SHORTCODE_ADDOONS),
                'h6' => __('H6', SHORTCODE_ADDOONS),
                'div' => __('DIV', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_group_control(
                'sa_team_name_typo', $this->style, [
            'label' => __('Typography', SHORTCODE_ADDOONS),
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-name' => ''
            ],
                ]
        );

        $this->add_control(
                'sa_team_name_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-name' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_name_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();


        $this->add_control(
                'sa_team_designation_on', $this->style, [
            'label' => __('Designation ON/OFF', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );


        $this->add_group_control(
                'sa_team_designation_typo', $this->style, [
            'label' => __('Typography', SHORTCODE_ADDOONS),
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-role' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_team_designation_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-role' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_designation_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-role' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_team_description_on', $this->style, [
            'label' => __('Description ON/OFF', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_group_control(
                'sa_team_description_typo', $this->style, [
            'label' => __('Typography', SHORTCODE_ADDOONS),
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-descriptin' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_team_description_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-descriptin' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_description_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-descriptin' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Divider Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_divider_switter', $this->style, [
            'label' => __('Divider', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_responsive_control(
                'sa_divider_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'condition' => [
                'sa_divider_switter' => 'yes'
            ],
            'default' => 'center',
            'options' => [
                'flex-start' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'flex-end' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-divider-main' => 'justify-content: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_divider_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'condition' => [
                'sa_divider_switter' => 'yes'
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 800,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 250,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 10,
                    'max' => 50,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-divider' => 'max-width: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_divider_border', $this->style, [
            'type' => Controls::BORDER,
            'condition' => [
                'sa_divider_switter' => 'yes'
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-divider' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_divider_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'condition' => [
                'sa_divider_switter' => 'yes'
            ],
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-divider' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();




        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Social Icon Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );

        $this->add_control(
                'sa_social_box_switter', $this->style, [
            'label' => __('Social Box', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_responsive_control(
                'sa_icon_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'condition' => [
                'sa_divider_switter' => 'yes'
            ],
            'default' => 'center',
            'options' => [
                'flex-start' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'flex-end' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-icons' => 'justify-content: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_social_icons_f_s', $this->style, [
            'label' => __('Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_social_icons_height', $this->style, [
            'label' => __('Icon Box Height', SHORTCODE_ADDOONS),
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
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 5,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons' => 'height: {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_social_icons_width', $this->style, [
            'label' => __('Icon Box Width', SHORTCODE_ADDOONS),
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
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 5,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons' => 'width: {{SIZE}}{{UNIT}};'
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
        $this->add_control(
                'sa_social_icons_position', $this->style, [
            'label' => __('Color View', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => 'separately',
            'options' => [
                'separately' => [
                    'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                ],
                'common' => [
                    'title' => __('Static', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_social_icons_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#390075',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons' => 'color : {{VALUE}}; '
            ],
            'condition' => [
                'sa_social_icons_position' => 'common'
            ]
                ]
        );
        $this->add_control(
                'sa_social_icons_bg_color_view', $this->style, [
            'label' => __('Background View', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => 'separately',
            'options' => [
                'separately' => [
                    'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                ],
                'common' => [
                    'title' => __('Static', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_social_icons_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(255, 255, 255, 0)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons' => 'background : {{VALUE}}; '
            ],
            'condition' => [
                'sa_social_icons_bg_color_view' => 'common'
            ]
                ]
        );
        $this->add_group_control(
                'sa_team_icon_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_icon_br_r', $this->style, [
            'label' => __('Border Redius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_social_icons_h_position', $this->style, [
            'label' => __('Color View', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => 'common',
            'options' => [
                'separately' => [
                    'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                ],
                'common' => [
                    'title' => __('Static', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_social_icons_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons:hover' => 'color : {{VALUE}}; '
            ],
            'condition' => [
                'sa_social_icons_h_position' => 'common'
            ]
                ]
        );
        $this->add_control(
                'sa_social_icons_bg_h_color_view', $this->style, [
            'label' => __('Background View', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => 'common',
            'options' => [
                'separately' => [
                    'title' => __('Dynamic ', SHORTCODE_ADDOONS),
                ],
                'common' => [
                    'title' => __('Static', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_social_icons_h_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(92, 92, 92, 1)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons:hover ' => 'background : {{VALUE}}; '
            ],
            'condition' => [
                'sa_social_icons_bg_h_color_view' => 'common'
            ]
                ]
        );
        $this->add_group_control(
                'sa_team_icon_hover_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons:hover' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_team_icon_hover_br_r', $this->style, [
            'label' => __('Border Redius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_team_icon_bxs', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_social_icons_h_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-2 .member-icon .oxi-icons' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'carousel-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_carousel_a_p_on_off', $this->style, [
            'label' => __('Auto Play', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'true',
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_a_p_dur', $this->style, [
            'label' => __('Auto Play Duration', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'loader' => TRUE,
            'default' => '1',
            'condition' => [
                'sa_carousel_a_p_on_off' => 'true'
            ]
                ]
        );
        $this->add_control(
                'sa_carousel_cen_mod_on_off', $this->style, [
            'label' => __('Center Mode', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'true',
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_pau_hov_on_off', $this->style, [
            'label' => __('Pause in Hover', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'true',
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_infin_loop_on_off', $this->style, [
            'label' => __('Infinite Loop', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'true',
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_mar_on_off', $this->style, [
            'label' => __('Marge', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'true',
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_stage_p', $this->style, [
            'label' => __('Stage padding', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => '0',
            'loader' => TRUE,
                ]
        );

        $this->add_control(
                'sa_carousel_au_hei_on_off', $this->style, [
            'label' => __('Auto Height', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'true',
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_posi', $this->style, [
            'label' => __('Content Position', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'default' => 'flex-start',
            'options' => [
                'flex-start' => __('Top', SHORTCODE_ADDOONS),
                'center' => __('Center', SHORTCODE_ADDOONS),
                'flex-end' => __('Bottom', SHORTCODE_ADDOONS),
            ],
            'condition' => [
                'sa_carousel_au_hei_on_off' => 'false'
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-stage' => 'align-items: {{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_mou_dragg_on_off', $this->style, [
            'label' => __('Mouse Draggable', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'true',
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_rig_left_on_off', $this->style, [
            'label' => __('Right to left', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'true',
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_nav_on_off', $this->style, [
            'label' => __('Nav Icon', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'true',
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_dot_on_off', $this->style, [
            'label' => __('Pagination Enable', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'false',
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Nav icon Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_carousel_nav_on_off' => 'true'
            ]
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Left Icon', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Right Icon', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_carousel_nav_left', $this->style, [
            'label' => __('Nav Left Icon', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => 'fas fa-angle-left',
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_carousel_nav_right', $this->style, [
            'label' => __('Nav Right Icon', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => 'fas fa-angle-right',
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_carousel_nav_S', $this->style, [
            'label' => __('Nav Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'separator' => TRUE,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
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
        $this->add_control(
                'sa_carousel_nav_c', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev .oxi-icons' => 'color: {{VALUE}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next .oxi-icons' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_nav_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(108, 194, 50, 1.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev' => 'background: {{VALUE}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next' => 'background: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_carousel_nav_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev' => '',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_carousel_nav_shad', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev' => '',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next' => '',
            ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_carousel_nav_c_h', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev:hover .oxi-icons' => 'color: {{VALUE}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next:hover .oxi-icons' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_nav_bg_h', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(36, 112, 4, 0.99)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev:hover' => 'background: {{VALUE}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next:hover' => 'background: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_carousel_nav_border_h', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev:hover' => '',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next:hover' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_carousel_nav_shad_h', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev:hover' => '',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next:hover' => '',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
                'sa_carousel_nav_b_r', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_carousel_nav_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_carousel_nav_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-prev' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-nav .oxi-owl-next' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Pagination Style', SHORTCODE_ADDOONS),
            'showing' => FALSE,
            'condition' => [
                'sa_carousel_dot_on_off' => 'true'
            ]
                ]
        );
        $this->add_control(
                'sa_carousel_dot_view', $this->style, [
            'label' => __('Viewing Type', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => '',
            'options' => [
                '' => [
                    'title' => __('Always', SHORTCODE_ADDOONS),
                ],
                'sa_dot_show_on_hover' => [
                    'title' => __('On Hover', SHORTCODE_ADDOONS),
                ]
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_dot_posi', $this->style, [
            'label' => __('Pagination Style', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'sa_carousel_dot_bottom_midd',
            'options' => [
                'sa_carousel_dot_top_left' => __('Top Left', SHORTCODE_ADDOONS),
                'sa_carousel_dot_top_midd' => __('Top Middle', SHORTCODE_ADDOONS),
                'sa_carousel_dot_top_right' => __('Top Right', SHORTCODE_ADDOONS),
                'sa_carousel_dot_bottom_left' => __('Bottom Left', SHORTCODE_ADDOONS),
                'sa_carousel_dot_bottom_midd' => __('Bottom Middle', SHORTCODE_ADDOONS),
                'sa_carousel_dot_bottom_right' => __('Bottom Right', SHORTCODE_ADDOONS),
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_carousel_dot_w', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot span' => 'width: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_carousel_dot_h', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot span' => 'height: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_dot_posi_x', $this->style, [
            'label' => __('Position X', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '10',
            ],
            'range' => [
                'px' => [
                    'min' => -500,
                    'max' => 500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => -50,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => -50,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2.sa_carousel_dot_top_left .oxi-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2.sa_carousel_dot_top_right .oxi-owl-dots' => 'right: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2.sa_carousel_dot_bottom_left .oxi-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2.sa_carousel_dot_bottom_right .oxi-owl-dots' => 'right: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_dot_posi_y', $this->style, [
            'label' => __('Position Y', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '10',
            ],
            'range' => [
                'px' => [
                    'min' => -500,
                    'max' => 500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => -50,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => -50,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2.sa_carousel_dot_top_left .oxi-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2.sa_carousel_dot_top_midd .oxi-owl-dots' => 'top: {{SIZE}}{{UNIT}}; left: 50%; transform:translateX(-50%);',
                '{{WRAPPER}} .sa_addons_carousel_style_2.sa_carousel_dot_top_right .oxi-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2.sa_carousel_dot_bottom_left .oxi-owl-dots' => 'bottom: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_2.sa_carousel_dot_bottom_midd .oxi-owl-dots' => 'bottom: {{SIZE}}{{UNIT}}; left: 50%; transform:translateX(-50%);',
                '{{WRAPPER}} .sa_addons_carousel_style_2.sa_carousel_dot_bottom_right .oxi-owl-dots' => 'bottom: {{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                'active' => esc_html__('Active', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_carousel_dot_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(194,194,194,1.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot span' => 'background: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_carousel_dot_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot span' => '',
            ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_carousel_dot_bg_h', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(49, 194, 148, 1)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot:hover span' => 'background: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_carousel_dot_border_h', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot:hover span' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_carousel_dot_scale_h', $this->style, [
            'label' => __('Scale', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '1',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => 0.01,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot:hover span' => 'transform: scale({{SIZE}}); -webkit-transform: scale({{SIZE}}); -moz-transform: scale({{SIZE}}); -ms-transform: scale({{SIZE}}); -o-transform: scale({{SIZE}});',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_carousel_dot_bg_a', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(49, 194, 148, 1)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot.active span' => 'background: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_carousel_dot_border_a', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot.active span' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_carousel_dot_scale_a', $this->style, [
            'label' => __('Scale', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '1.05',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => 0.01,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot.active span' => 'transform: scale({{SIZE}}); -webkit-transform: scale({{SIZE}}); -moz-transform: scale({{SIZE}}); -ms-transform: scale({{SIZE}}); -o-transform: scale({{SIZE}});',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
                'sa_carousel_dot_b_r', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_carousel_dot_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_carousel_dot_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_2 .oxi-owl-dot span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function modal_form_data() {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Team Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">';
        $this->add_control(
                'sa_price_table_name', $this->style, [
            'label' => __('Name', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'default' => 'Adam Chen',
            'placeholder' => 'Adam Chen',
                ]
        );
        $this->add_control(
                'sa_price_table_desgnation', $this->style, [
            'label' => __('Desgnation', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'default' => 'Designer',
            'placeholder' => 'Designer',
                ]
        );
        $this->add_control(
                'sa_price_table_description', $this->style, [
            'label' => __('Description', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'default' => 'Enter member description here',
            'placeholder' => 'Enter member description here',
                ]
        );

        $this->add_group_control(
                'sa_team_front_image', $this->style, [
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => 'https://www.oxilab.org/wp-content/uploads/2018/05/1.jpg',
            ],
                ]
        );


        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Social Icons', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_repeater_control(
                'sa_team_repeater', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'loader' => TRUE,
            'fields' => [
                'sa_social_icons_icon' => [
                    'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fab fa-facebook-f',
                ],
                'shortcode-addons-start-tabs' => [
                    'controller' => 'start_controls_tabs',
                    'options' => [
                        'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                        'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    ]
                ],
                'shortcode-addons-start-tab1' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_social_icons_color' => [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'conditional' => Controls::OUTSIDE,
                    'condition' => [
                        'sa_social_icons_position' => 'separately'
                    ]
                ],
                'sa_social_icons_bg_color' => [
                    'label' => __('Background ', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'oparetor' => 'RGB',
                    'default' => 'rgba(59,89,153,1.00)',
                    'conditional' => Controls::OUTSIDE,
                    'condition' => [
                        'sa_social_icons_bg_color_view' => 'separately'
                    ]
                ],
                'shortcode-addons-start-tab1-end' => [
                    'controller' => 'end_controls_tab',
                ],
                'shortcode-addons-start-tab2' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_social_icons_color_hover' => [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#7e00c2',
                    'conditional' => Controls::OUTSIDE,
                    'condition' => [
                        'sa_social_icons_h_position' => 'separately'
                    ]
                ],
                'sa_social_icons_bg_color_hover' => [
                    'label' => __('Background ', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'oparetor' => 'RGB',
                    'default' => 'rgba(92, 92, 92, 1)',
                    'conditional' => Controls::OUTSIDE,
                    'condition' => [
                        'sa_social_icons_bg_h_color_view' => 'separately'
                    ]
                ],
                'shortcode-addons-start-tab2-end' => [
                    'controller' => 'end_controls_tab',
                ],
                'shortcode-addons-start-tabs-end' => [
                    'controller' => 'end_controls_tabs',
                ],
                'sa_social_icons_separator' => [
                    'label' => esc_html__('', SHORTCODE_ADDOONS),
                    'type' => Controls::SEPARATOR,
                    Controls::SEPARATOR => TRUE,
                    'controller' => 'add_control',
                ],
                'sa_social_icons_url' => [
                    'label' => esc_html__('Url', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
                ],
            ],
            'title_field' => 'sa_social_icons_icon',
            'button' => 'Add New Icon',
                ]
        );
        $this->end_controls_section();
        echo '</div>';
    }

}
