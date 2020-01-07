<?php

namespace SHORTCODE_ADDONS_UPLOAD\Protected_content\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use Elementor\Controls_Manager;
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_1 extends AdminStyle
{
    public function sa_user_roles()
    {
        global $wp_roles;
        $all = $wp_roles->roles;
        $all_roles = array();
        if (!empty($all)) {
            foreach ($all as $key => $value) {
                $all_roles[$key] = $all[$key]['name'];
            }
        }
        return $all_roles;
    }

    public function register_controls()
    {

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
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
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_protected_content_protection_type',
            $this->style,
            [
                'label' => __('Protection Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'options' => [
                    'role' => esc_html__('User role', SHORTCODE_ADDOONS),
                    'password' => esc_html__('Password protected', SHORTCODE_ADDOONS)
                ],
                'default' => 'role'
            ]
        );
        $this->add_control(
            'sa_protected_content_field',
            $this->style,
            [
                'label' => __('Protected Content', SHORTCODE_ADDOONS),
                'type' => Controls::WYSIWYG,
                'default' => 'This is the content that you want to be protected by either role or password.',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .protected_content' => ''
                ],
            ]
        );

        $this->add_control(
            'sa_protected_content_message_text',
            $this->style,
            [
                'label' => esc_html__('Message Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => esc_html__('You do not have permission to see this content.', SHORTCODE_ADDOONS),
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content_message_text' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_protected_content_role',
            $this->style,
            [
                'label' => __('Select Roles', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'multiple' => TRUE,
                'options' => $this->sa_user_roles(),
                'condition' => [
                    'sa_protected_content_protection_type' => 'role'
                ]
            ]
        );
        $this->add_control(
            'sa_show_fallback_message',
            $this->style,
            [
                'label' => __('Show Preview of Error Message', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Show', SHORTCODE_ADDOONS),
                'label_off' => __('Hide', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'description' => 'You can force show message in order to style them properly.',
                'condition' => [
                    'sa_protected_content_protection_type' => 'role'
                ]
            ]
        );
        $this->add_control(
            'sa_protection_password',
            $this->style,
            [
                'label' => esc_html__('Set Password', SHORTCODE_ADDOONS),
                'type' => Controls::PASSWORD,
                'condition' => [
                    'sa_protected_content_protection_type' => 'password'
                ]
            ]
        );
        $this->add_control(
            'sa_protection_password_placeholder',
            $this->style,
            [
                'label' => esc_html__('Input Placehlder', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Enter Password',
                'condition' => [
                    'sa_protected_content_protection_type' => 'password',
                ],
            ]
        );
        $this->add_control(
            'sa_protection_password_submit_btn_txt',
            $this->style,
            [
                'label' => esc_html__('Submit Button Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Submit',
                'condition' => [
                    'sa_protected_content_protection_type' => 'password',
                ],
            ]
        );
        $this->add_control(
            'sa_show_content',
            $this->style,
            [
                'label' => __('Show Content', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'label_on' => __('Show', SHORTCODE_ADDOONS),
                'label_off' => __('Hide', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'description' => 'You can force show content in order to style them properly.',
                'condition' => [
                    'sa_protected_content_protection_type' => 'password'
                ]
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_width',
            $this->style,
            [
                'label' => __('Max Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
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
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1' => 'max-width: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}}  .sa_protected_content_container_style_1 .sa_protected_content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_margin',
            $this->style,
            [
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
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}}  .sa_protected_content_container_style_1 .sa_protected_content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();


        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'style-settings'
                ]
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_protected_content_content_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .protected_content' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_protected_content_content_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .protected_content' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_protected_content_content_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .protected_content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Message Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_protected_content_message_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content_message_text' => '',
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .protected_content_error_msg' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_protected_content_message_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content_message_text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .protected_content_error_msg' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_message_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content_message' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_message_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content_message' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_message_box_s',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content_message' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_message_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content_message' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_message_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content_message_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_message_margin',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_protected_content_message' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Password Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_protected_content_protection_type' => 'password'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_input_width',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
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
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_input_align',
            $this->style,
            [
                'label' => esc_html__('Input Alignment', SHORTCODE_ADDOONS),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => esc_html__('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-center',
                    ],
                    'flex-end' => [
                        'title' => esc_html__('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'flex-start',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields>form' => 'justify-content: {{VALUE}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'active' => esc_html__('Active', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_protected_content_input_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_protected_content_input_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_input_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_input_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_protected_content_input_c_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password:focus' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_protected_content_input_bg_a',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password:focus' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sa_protected_content_input_border_a',
            $this->style,
            [
                'label' => __('Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password:focus' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_input_boxshadow_a',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password:focus' => ''
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->add_responsive_control(
            'sa_protected_content_input_radius',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_input_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_input_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -15,
                        'max' => 15,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_password' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_protected_content_protection_type' => 'password'
                ]
            ]
        );
        $this->add_group_control(
            'sa_protected_content_button_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit' => '',
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
            'sa_protected_content_button_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_protected_content_button_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_button_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_protected_content_button_c_h',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_protected_content_button_bg_h',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit:hover' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sa_protected_content_button_border_h',
            $this->style,
            [
                'label' => __('Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_protected_content_button_boxshadow_h',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit:hover' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_protected_content_button_radius',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_button_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_protected_content_button_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -15,
                        'max' => 15,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_protected_content_container_style_1 .sa_password_protected_content_fields .sa_submit' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
