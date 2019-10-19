<?php

namespace SHORTCODE_ADDONS_UPLOAD\Contact_form_7\Admin;

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

        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'General' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'input-fields-and-button-settings' => esc_html__('Input Fields and Buttons', SHORTCODE_ADDOONS),
                'other-fields-settings' => esc_html__('Other Fields Settings', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'General'
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

        $this->add_control(
                'sa_contact_form_shortcode', $this->style, [
            'label' => __('Contact Form Shortcode', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
                ]
        );
        $this->add_control(
                'sa_contact_form_separator', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::SEPARATOR,
            Controls::SEPARATOR => TRUE
                ]
        );
        $this->add_group_control(
                'sa_contact_form_background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 .oxi-addons-form-full-body' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_max_width', $this->style, [
            'label' => __('Max Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'condition' => [
                'sa_banner_image_position' => 'left'
            ],
            'default' => [
                'unit' => 'px',
                'size' => 500,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 2000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 .oxi-addons-form-full-body' => 'max-width:{{SIZE}}{{UNIT}}',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            //'loader' => TRUE,
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 700,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 .oxi-addons-form-full-body' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            //'loader' => TRUE,
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 700,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 .oxi-addons-form-full-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 700,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_contact_form_7_separator', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::SEPARATOR,
            Controls::SEPARATOR => TRUE
                ]
        );
        $this->add_group_control(
                'sa_contact_form_box_shadow', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 .oxi-addons-form-full-body' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_contact_form__animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();



        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Title Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_contact_form_title_typo', $this->style, [
            'label' => __('Typography', SHORTCODE_ADDOONS),
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 label' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_contact_form_title_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 label' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_contact_form_title_color_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
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
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 label' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_contact_form_title_text_shadow', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 label' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_title_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();


        $this->end_section_devider();
        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'input-fields-and-button-settings',
            ],
            'section-condition' => [
                'sa_banner_button_left_switcher' => 'yes'
            ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Input Field Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_contact_form_title_background_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 select, '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=date], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime-local], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=email], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=month], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=number], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=password], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=search], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=tel], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=text], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=time], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=url], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 textarea ' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_input_field_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 40,
            ],
            'range' => [
                'px' => [
                    'min' => 5,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 select, '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=date], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime-local], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=email], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=month], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=number], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=password], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=search], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=tel], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=text], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=time], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=url] ' => 'height: {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_contact_form_input_field_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 select, '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=date], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime-local], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=email], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=month], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=number], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=password], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=search], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=tel], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=text], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=time], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=url] ' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_input_field_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            //'loader' => TRUE,
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 700,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 select, '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=date], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime-local], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=email], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=month], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=number], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=password], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=search], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=tel], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=text], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=time], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=url] ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_input_field_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            //'loader' => TRUE,
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 700,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 select, '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=date], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime-local], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=email], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=month], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=number], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=password], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=search], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=tel], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=text], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=time], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=url] ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_input_field_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            //'loader' => TRUE,
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 700,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 select, '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=date], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime-local], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=email], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=month], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=number], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=password], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=search], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=tel], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=text], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=time], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=url] ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('TextArea Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_text_area_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 150,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 1000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 textarea' => 'height: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_text_area_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '10',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 2000,
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
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_text_area_border-radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '5',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 2000,
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
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 textarea' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Input Field Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_contact_form_input_field_box_shadow', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 select, '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=date], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime-local], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=datetime], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=email], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=month], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=number], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=password], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=search], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=tel], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=text], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=time], '
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=url],'
                . '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 textarea ' => ' '
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Input Field Focus Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_contact_form_input_field_focus', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 select:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=date]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=email]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=month]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=number]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=password]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=search]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=tel]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=text]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=time]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=url]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 textarea:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=week]:focus' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_contact_form_input_field_focus_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 select:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=date]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=email]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=month]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=number]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=password]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=search]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=tel]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=text]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=time]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=url]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 textarea:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=week]:focus' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_contact_form_input_field_focus_box_shadow', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 select:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=date]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=email]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=month]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=number]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=password]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=search]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=tel]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=text]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=time]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=url]:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 textarea:focus,
                {{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=week]:focus' => ''
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Submit Button', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_contact_form_button_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=submit]' => ' ',
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
                'sa_contact_form_button_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=submit]' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_contact_form_button_background_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=submit]' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_contact_form_button_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=submit]' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_contact_form_button_hover_color', $this->style, [
            'label' => __('Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=submit]:hover' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_contact_form_button_background_hover_color', $this->style, [
            'label' => __('Hover Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=submit]:hover' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_contact_form_button_hover_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=submit]:hover' => ''
            ],
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
                'sa_contact_form_button_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'separator' => TRUE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
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
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 .submit-button-active' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_contact_form_button_text_shadow', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=submit]' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_contact_form_button_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            //'loader' => TRUE,
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 700,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=submit]' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_button_border_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            //'loader' => TRUE,
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 700,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type=submit]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_button_border_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            //'loader' => TRUE,
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 700,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 .submit-button-active' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'other-fields-settings',
            ],
            'section-condition' => [
                'sa_banner_button_left_switcher' => 'yes'
            ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('CheckBox Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_contact_form_checkbox_background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="checkbox"]:before' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_checkbox_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="checkbox"]:before' => 'width: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_checkbox_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="checkbox"]:before' => 'height: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_contact_form_checkbox_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="checkbox"]:before' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_checkbox_border_radius', $this->style, [
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
                    'min' => 0,
                    'max' => 300,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="checkbox"]:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_checkbox_padding', $this->style, [
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
                    'max' => 300,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="checkbox"]:before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_checkbox_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="checkbox"]:before' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('CheckBox Checked', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_contact_form_checkbox_checked_background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="checkbox"]:checked:before' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_contact_form_checkbox_checked_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="checkbox"]:checked:before' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_checkbox_checked_size', $this->style, [
            'label' => __('Check Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 15,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="checkbox"]:checked:before' => 'font-size:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Radio Button Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_contact_form_radio_button_background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="radio"]:before' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_radio_button_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="radio"]:before' => 'width: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_radio_button_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="radio"]:before' => 'height: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_contact_form_radio_button_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="radio"]:before' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_radio_button_border_radius', $this->style, [
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
                    'min' => 0,
                    'max' => 300,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="radio"]:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_contact_form_radio_button_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="radio"]:before' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Radio Button Checked', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_contact_form_radio_button_checked_background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="radio"]:checked:before' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_contact_form_radio_button_checked_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="radio"]:checked:before' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_radio_button_checked_size', $this->style, [
            'label' => __('Check Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 15,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="radio"]:checked:before' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_contact_form_radio_button_padding', $this->style, [
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
                    'max' => 300,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-form-warp-contact-form-7 input[type="radio"]:checked:before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
