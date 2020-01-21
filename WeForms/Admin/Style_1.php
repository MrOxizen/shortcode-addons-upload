<?php

namespace SHORTCODE_ADDONS_UPLOAD\WeForms\Admin;

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

    public function sa_weform_get_weforms() {
        $wpuf_form_list = get_posts(array(
            'post_type' => 'wpuf_contact_form',
            'showposts' => 999,
        ));

        $options = array();

        if (!empty($wpuf_form_list) && !is_wp_error($wpuf_form_list)) {
            $options[0] = esc_html__('Select weForm', SHORTCODE_ADDOONS);
            foreach ($wpuf_form_list as $post) {
                $options[$post->ID] = $post->post_title;
            }
        } else {
            $options[0] = esc_html__('Create a Form First', SHORTCODE_ADDOONS);
        }

        return $options;
    }

    public function register_controls() {


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_weforms_select_form', $this->style, [
            'label' => __('Select Form', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'default' => '0',
            'options' => $this->sa_weform_get_weforms(),
                ]
        );
        $this->add_control(
                'sa-max-w-condition', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
//            'separator' => true,
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
                'max_width_depand_on_condition', $this->style, [
            'label' => __('Max-Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main' => 'max-width: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'sa-max-w-condition' => 'dynamic'
            ]
                ]
        );
        $this->add_control(
                'sa_animated_text_typo_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'center',
            'operator' => Controls::OPERATOR_ICON,
            'loader' => TRUE,
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'condition' => [
                'sa-max-w-condition' => 'dynamic'
            ]
                ]
        );
        $this->add_group_control(
                'sa_weforms_main_background', $this->style, [
            'type' => Controls::BACKGROUND,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_weforms_main_box_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_weforms_main_box_border_radius', $this->style, [
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
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_weforms_main_box_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_weforms_main_box_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_weforms_main_box_margin', $this->style, [
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
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Form Fields Styles', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Label', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Input Field', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();

        $this->add_group_control(
                'sa_weforms_label_typography', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main, {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main .wpuf-label label' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_weforms_label_color_', $this->style, [
            'label' => __('Label Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#5c5c5c',
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main, {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main .wpuf-label label' => 'color: {{VALUE}};',
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_group_control(
                'sa_weforms_input_typography_', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="text"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="password"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="email"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="number"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_weforms_input_color_', $this->style, [
            'label' => __('Field Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#5c5c5c',
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="text"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="password"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="email"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="number"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea' => 'color: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'sa_weforms_input_plh_color', $this->style, [
            'label' => __('Placeholder Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ::-webkit-input-placeholder' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ::-moz-placeholder' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ::-ms-input-placeholder' => 'color: {{VALUE}};',
            ],
                ]
        );


        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
                'sa_weforms_input_backgrounds', $this->style, [
            'label' => __('Input Field Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'separator' => TRUE,
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="text"],
                {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="password"],
                {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="email"],
                {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
                {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
                {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="number"],
                {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea' => 'background-color: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_weforms_text_borderrr', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="text"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="password"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="email"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="number"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_weforms_text_dorder_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="text"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="password"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="email"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="number"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Focus', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_weforms_text_box_s', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="text"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="password"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="email"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="number"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea' => '',
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_weforms_text_F_box_s', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="text"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="password"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="email"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="number"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea:focus' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_weforms_border_color_focus', $this->style, [
            'label' => __('Border Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="text"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="password"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="email"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="number"]:focus,
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea:focus' => 'border-color: {{VALUE}};',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_weforms_text_dopadding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="text"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="password"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="email"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="number"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_weforms_text_dopamargin', $this->style, [
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
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="text"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="password"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="email"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="url"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type="number"],
					 {{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Submit Button Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_weforms_btn_position', $this->style, [
            'label' => __('Button Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'center',
            'operator' => Controls::OPERATOR_ICON,
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit ' => 'text-align : {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_weforms_btn_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal View', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover View', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();


        $this->add_control(
                'sa_weforms_btn_color_', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#5c5c5c',
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_weforms_btn_backgrounds', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]' => 'background-color: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_weforms_btn_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_weforms_btn_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_group_control(
                'sa_weforms_btn_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]' => '',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab();

        $this->add_control(
                'sa_weforms_btn_hover_color_', $this->style, [
            'label' => __('Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#5c5c5c',
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]:hover' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_weforms_btn_hover_backgrounds', $this->style, [
            'label' => __('Hover Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]:hover' => 'background-color: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_weforms_btn_h-br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]:hover' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_weforms_btn_hover-br-radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
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
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],]
        );

        $this->add_group_control(
                'sa_weforms_btn_h_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]:hover' => '',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_weforms_btn_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
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
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_weforms_btn_margin', $this->style, [
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
                '{{WRAPPER}} .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type="submit"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();





        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
